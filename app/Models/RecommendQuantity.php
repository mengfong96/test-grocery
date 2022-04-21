<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendQuantity extends Model
{
    use HasFactory;
    protected $table =  "recommendquantity";
    protected $fillable = ['quantity'];
}
