<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grocery_List;
use App\Models\Product_Category;
use App\Models\User;
use App\Models\GroceryListProduct;

class Product extends Model
{
    use HasFactory;

    protected $table =  "products";
    protected $fillable = ['name', 'image_path', 'desc', 'overview','product_category_id'];

    // Product belongs to many grocery list
    public function grocery_lists(){
        return $this->belongsToMany(Grocery_List::class);
    }

    // Product belongs to a product category
    public function product_categories(){
        return $this->belongsTo(Product_Category::class);
    }

    // Product belongs to many grocerylist product
    public function grocerylist_products(){
        return $this->belongsToMany(GroceryListProduct::class);
    }
}
