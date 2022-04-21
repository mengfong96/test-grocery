<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grocery_List;
use App\Models\Product;

class GroceryListProduct extends Model
{
    use HasFactory;
    protected $table =  "grocerylist_products";
    protected $fillable = ['grocerylist_id', 'product_id', 'quantity'];

    public function grocery_lists(){
        return $this->belongsToMany(Grocery_List::class);
    }

    public function products(){
        return $this->hasMany(Product::class,'id','product_id');
    }
}
