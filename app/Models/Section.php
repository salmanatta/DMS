<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'status'
    ];

     public function parentSection()
     {
         return $this->belongsTo(Section::class, 'parent_id');
     }
}
