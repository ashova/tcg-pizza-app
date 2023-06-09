<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'pizza_id',
        'composition',
        'count',
        'price',
        'name',
        'phone',
        'address',
        'status',
    ];

    public $timestamps = true;
}
