<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\GroceryListProduct;
use App\Models\User;


class Grocery_List extends Model
{
    use HasFactory;
    protected $table =  "grocerylists";
    protected $fillable = ['user_id', 'user_pax', 'meal_num'];

    // Grocery List has many products
    public function products(){
        //return $this->hasMany(Product::class);
        return $this->belongsToMany(Product::class);
        //return $this->belongsToMany(Product::class, 'grocery_products','grocerylist_id', 'product_id')->withPivot('quantity');
    }

    // Grocery List belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Grocery List has many grocerylistproducts
    public function grocerylist_products(){
        return $this->hasMany(GroceryListProduct::class,'grocerylist_id','id');
    }
}
