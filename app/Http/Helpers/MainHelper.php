<?php

use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use League\Csv\Writer;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


function admin()
{
    return Auth::guard('admin')->user();
}

function user()
{
    return Auth::guard('web')->user();
}

function timeFormat($time)
{
    return date(('d M, Y H:i A'), strtotime($time));
}

function creater_name($user)
{
    return $user->name ?? 'System';
}

function updater_name($user)
{
    return $user->name ?? 'Null';
}

function storage_url($urlOrArray)
{
    $image = asset('default_img/no_img.jpg');
    if (is_array($urlOrArray) || is_object($urlOrArray)) {
        $result = '';
        $count = 0;
        $itemCount = count($urlOrArray);
        foreach ($urlOrArray as $index => $url) {

            $result .= $url ? asset('storage/' . $url) : $image;

            if ($count === $itemCount - 1) {
                $result .= '';
            } else {
                $result .= ', ';
            }
            $count++;
        }
        return $result;
    } else {
        return $urlOrArray ? asset('storage/' . $urlOrArray) : $image;
    }
}

function auth_storage_url($url, $gender = false)
{
    $image = asset('default_img/other.png');
    if ($gender == 1) {
        $image = asset('default_img/male.jpeg');
    } elseif ($gender == 2) {
        $image = asset('default_img/female.jpg');
    }
    return $url ? asset('storage/' . $url) : $image;
}

// File Size
function formatFileSize($file)
{
    // Convert URL to local path if needed
    if (filter_var($file, FILTER_VALIDATE_URL)) {
        $file = str_replace(asset('storage'), 'storage', $file);
        $file = public_path($file);
    }

    // Handle storage path
    if (!file_exists($file)) {
        return 'File not found';
    }

    $bytes = filesize($file);
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $i = 0;

    while ($bytes >= 1024 && $i < count($units) - 1) {
        $bytes /= 1024;
        $i++;
    }

    return round($bytes, 2) . ' ' . $units[$i];
}

function isImage($path)
{
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp', 'svg'];
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    return in_array($extension, $imageExtensions);
}

function isVideo($path)
{
    $videoExtensions = ['mp4', 'webm', 'ogg', 'avi', 'mov', 'mkv'];
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    return in_array($extension, $videoExtensions);
}

function isPdf($path)
{
    $pdfExtensions = ['pdf'];
    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    return in_array($extension, $pdfExtensions);
}

// check is file not include image, video and pdf
/**
 * Check if file is a document, archive, or other non-media file
 */
function isFile($path)
{
    if (empty($path)) {
        return false;
    }

    $fileExtensions = [
        // Documents
        'doc',
        'docx',
        'xls',
        'xlsx',
        'ppt',
        'pptx',
        'odt',
        'ods',
        'odp',
        'csv',
        'rtf',
        'txt',
        'pdf',

        // Archives & Compressed
        'zip',
        'rar',
        '7z',
        'tar',
        'gz',
        'bz2',
        'xz',
        'iso',
        'dmg',

        // Executables & Binaries
        'exe',
        'msi',
        'bat',
        'sh',
        'deb',
        'rpm',
        'apk',
        'dll',
        'so',

        // Scripts & Code
        'php',
        'js',
        'html',
        'css',
        'py',
        'java',
        'cpp',
        'c',
        'h',
        'json',
        'xml',
        'sql',

        // Other common files
        'log',
        'ini',
        'conf',
        'env',
        'bak',
        'tmp'
    ];

    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    return in_array($extension, $fileExtensions);
}

/**
 * Get detailed file type category
 */
function getFileType($path)
{
    if (empty($path)) {
        return 'unknown';
    }

    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    $types = [
        'image'       => ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp', 'svg', 'tiff', 'ico', 'psd', 'ai'],
        'video'       => ['mp4', 'webm', 'ogg', 'avi', 'mov', 'mkv', 'flv', 'wmv', 'mpeg', '3gp'],
        'audio'       => ['mp3', 'wav', 'ogg', 'm4a', 'flac', 'aac', 'wma', 'mid', 'midi'],
        'document'    => ['doc', 'docx', 'pdf', 'txt', 'rtf', 'odt', 'xls', 'xlsx', 'ppt', 'pptx', 'csv'],
        'archive'     => ['zip', 'rar', '7z', 'tar', 'gz', 'bz2', 'xz', 'iso', 'dmg'],
        'code'        => ['php', 'js', 'html', 'css', 'py', 'java', 'json', 'xml', 'sh', 'rb', 'go', 'swift'],
        'executable'  => ['exe', 'msi', 'bat', 'deb', 'apk', 'dll', 'so', 'bin'],
        'font'        => ['ttf', 'otf', 'woff', 'woff2', 'eot'],
        'spreadsheet' => ['xls', 'xlsx', 'ods', 'csv'],
        'presentation' => ['ppt', 'pptx', 'odp'],
        'database'    => ['sql', 'db', 'sqlite', 'mdb', 'accdb'],
        'config'      => ['env', 'ini', 'conf', 'cfg', 'properties'],
        'vector'      => ['svg', 'ai', 'eps'],
        '3d'          => ['stl', 'obj', 'fbx', 'dae'],
        'other'       => ['log', 'bak', 'tmp']
    ];

    foreach ($types as $type => $extensions) {
        if (in_array($extension, $extensions)) {
            return $type;
        }
    }

    return 'unknown';
}
