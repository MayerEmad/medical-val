<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compare extends Model
{
    use HasFactory;
    protected $table = 'compares';
    public $timestamps = true;

   

    protected $fillable = [
        'id',
        'product_id',
        'user_id',        
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
