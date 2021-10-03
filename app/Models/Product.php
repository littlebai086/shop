<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = ['name','spec','category_id','price_avgcost','price','qty',
    'pic','desc','browse_count','enabled','hoted','remark'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
  
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function scopeEnabled($query)
    {
        return $query->where('enabled',true)->orderBy('price','asc');
    }
}
