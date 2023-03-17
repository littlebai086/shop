<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pay_type_id',
        'remark',
        'receive_name',
        'receive_phone',
        'receive_address',
        'total',
    ];
}
