<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopingCart extends Model
{
    protected $table = 'carts';
    public $timestamps = true;

    protected $mergeCasts = [
        'quantity' => 'int'
    ];

    protected $fillable = [
        'id',
        'product_id',
        'user_id',        
        'quantity',
        'created_at'
    ];
    	/**
	 * @return BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	/**
	 * @return BelongsTo
	 */
	public function product(): BelongsTo
	{
		return $this->belongsTo(Product::class,'product_id','id');
	}

}
