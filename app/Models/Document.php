<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'version',
        'file_path',
        'access_level',
        'section_id',
        'user_id'
    ];

    public function getFilePathAttribute()
    {
        if ($this->attributes['file_path'])
        {
            return url("/storage/app/".$this->attributes['file_path']);
        }
        return '';
    }
}
