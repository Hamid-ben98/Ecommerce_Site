<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
	protected $fillable = ["price_two","status","quantity","discount","product_color_id","product_size_id"];
    protected $table "product_color_size";		

	public function productColor(){
		return $this->blongsto(ProductColor::class);
	}
	public function productSize(){
		return $this->blongsto(ProductSize::class);
	}
}
