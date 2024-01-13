<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
	protected $fillable = ["user_id","address","city","postal_code","country","state","email","phone","name","surname"];	
						
    protected $table "user_addresses";
	
	public function user(){
		return$this->belongsto(User::class);
	}
}
