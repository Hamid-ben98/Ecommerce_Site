<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
	
	protected $fillable = ["order_id","product_color_size_id","quantity","price","discount"];
    protected $table "order_details";
	
	public function order(){
		return $this->belongsto(Order::class);
	}
	
	public function productColorSize(){
		return $this->belongsto(ProductColorSize::class);
	}
	
}
