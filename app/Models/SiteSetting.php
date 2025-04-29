<?php

namespace App\Models;

use App\Models\BaseModel;

class SiteSetting extends BaseModel
{
    protected $table = 'site_settings';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'logo',
        'favicon',
        'email',
        'phone',
        'address',
        'fax',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',

        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
