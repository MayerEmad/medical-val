<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = true;

    protected $casts = [
        'price' => 'float'
    ];
    protected $fillable = [
        'parent_id',
        'name',
        'ar_name',
        'description',
        'ar_description',
        'discount',
        'image',
        'created_at'
    ];
    public function subcategory()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function getRouteKeyName()
    {
        return 'name';
    }
}
