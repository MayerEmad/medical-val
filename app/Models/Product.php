<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    public $timestamps = true;

    protected $mergeCasts = [
        'price' => 'float',
        'discount'=>'float'
    ];

    protected $fillable = [
        'name',
        'ar_name',
        'description',
        'ar_description',
        'image',
        'price',
        'discount',
        'rate',
        'quantity',
        'category_id',
        'created_at',
        'instock'
    ];
    
	public function cart()
	{
        return $this->hasMany('App\Models\shopingcart', 'product_id','id');

	}
}
