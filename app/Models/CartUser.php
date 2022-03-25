<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartUser extends Model
{
    use HasFactory;
    protected $table = 'cart_users';
    public $timestamps = true;

    protected $mergeCasts = [
        'cart_id' => 'int',
        'user_id' => 'int'

    ];

   

}
