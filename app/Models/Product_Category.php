<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Grocery_List;
use App\Models\User;

class Product_Category extends Model
{
    use HasFactory;
    protected $table =  "productcategories";
    protected $fillable = ['name'];

    // Product category has many products
    public function products(){
        return $this->hasMany(Product::class);
    }
}
