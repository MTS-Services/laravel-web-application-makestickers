<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait FileManagementTrait
{
    public function handleFileUpload(Request $request, $model, $file_name, $fileField = 'image', $folderName = 'uploads/')
    {
        // Check if the request has a file for image or video
        if ($request->hasFile($fileField)) {
            $file = $request->file($fileField);
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $file_name . '_' . time() . '.' . $fileExtension;

            // Store the file
            $path = $file->storeAs($folderName, $fileName, 'public');

            // If the model already has an image/video, delete the old one
            if ($model->$fileField) {
                $this->fileDelete($model->$fileField);
            }

            // Assign the new file path to the model
            $model->$fileField = $path;
        }
    }
    public function fileDelete($file)
    {
        if ($file) {
            Storage::disk('public')->delete($file);
        }
    }
}
