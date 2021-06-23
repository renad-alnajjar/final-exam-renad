<?php

namespace App\Models;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function Products()
   {
   return $this->belongsTo('App\Models\Categories');
   }
}
