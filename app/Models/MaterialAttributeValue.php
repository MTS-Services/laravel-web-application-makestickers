<?php

namespace App\Models;

use App\Models\BaseModel;

class MaterialAttributeValue extends BaseModel
{
    protected $table = 'material_attribute_values';
    protected $fillable = [
        'material_id',
        'material_attribute_id',
        'value'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function materialAttribute()
    {
        return $this->belongsTo(MaterialAttribute::class);
    }
    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', self::STATUS_INACTIVE);
    }
}
