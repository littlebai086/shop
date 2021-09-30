<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;
    public function scopeEnabled($query)
    {
        return $query->where('enabled',true)->orderBy('sort','asc');
    }
}
