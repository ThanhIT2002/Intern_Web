<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function showCategoryDog()
    {
        $dogCategories = Category::where('Type_PD', 'dog')->get();
        return $dogCategories;
    }
    public function showCategoryCat()
    {
        $CatCategories = Category::where('Type_PD', 'cat')->get();
        return $CatCategories;
    }
}
