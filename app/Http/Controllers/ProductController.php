<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\View;
class ProductController extends Controller
{
    public function showProducts()
    {
        $product = Product::all();

        return view('content.menu', ['product' => $product]);
    }
    public function showProductsAndCategories()
    {
        $products = Product::all();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function showDogFoodProducts()
    {
        
        $products = Product::where('ID_CG', 1)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function showdogHealthProducts()
    {  
        $products = Product::where('ID_CG', 2)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function showdogFashionProducts()
    {  
        $products = Product::where('ID_CG', 3)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function showdogToyProducts()
    {  
        $products = Product::where('ID_CG', 4)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }

//CatProduct
public function showCatFoodProducts()
    {
        
        $products = Product::where('ID_CG', 1)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryCat();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function showcatHealthProducts()
    {  
        $products = Product::where('ID_CG', 2)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryCat();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function showcatFashionProducts()
    {  
        $products = Product::where('ID_CG', 3)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryCat();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function showcatToyProducts()
    {  
        $products = Product::where('ID_CG', 4)->get();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryCat();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.menu', [
            'products' => $products,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }

    public function showHome()
    {   
        $newestProducts = Product::orderBy('Created_PD', 'desc')->take(5)->get();

        $topSellingProducts = Product::orderBy('Quantity_sold', 'desc')->take(5)->get();
        $BannerController = new bannerController();
        $banner = $BannerController->showbanner();
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.home', [
            'newestProducts' => $newestProducts,
            'topSellingProducts' => $topSellingProducts,
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
            'banner'=>$banner,
        ]);
    }




    public function login()
    {   
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.contentLogin', [
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function register()
    {   
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.contentRegister', [
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }


    public function catHotel()
    {   
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.catHotel', [
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
    public function SpaGrooming()
    {   
        $categoryController = new CategoryController();
        $categories = $categoryController->showCategoryDog();
        $categoriesCat = $categoryController->showCategoryCat();
        return view('content.SpaGrooming', [
            'categories' => $categories,
            'categoriesCat'=>$categoriesCat,
        ]);
    }
}
