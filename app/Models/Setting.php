<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
	
	protected $fillable = ["name","description","address","favicon","facebook","twitter","email","phone","logo","instegram","youtube","tiktok"];							
    protected $table "settings";
}
