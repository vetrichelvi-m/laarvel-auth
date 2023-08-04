<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'sku',
        'quantity',
        'description',
        'image',
        'price',
        'product_category_id'
    ];

    public function productCategory()
	{
		return $this->belongsTo(ProductCategory::class);
	}
}
