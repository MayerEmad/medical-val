<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductItem extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    public $timestamps = true;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];
}
