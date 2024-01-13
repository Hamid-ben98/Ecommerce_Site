<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;
	
	protected $fillable = ["color","product_id"];		
    protected $table "product_colors";
	
	public function product(){
		return $this->blongsto(Product::class);
	}
	
	public function productColorSize(){
		return $this->hasMany(ProductColorSize::class);
    }
}