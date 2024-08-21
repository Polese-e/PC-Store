<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\CategoryHighlight;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $search = request("search");
        $categorys = Category::all();
        $banners = Banner::inRandomOrder()->take(random_int(1,4))->get();
        $categoryHighlights = CategoryHighlight::all();

        if ($search) {
            $products = Product::where("name","like","%".$search."%")->get();
        } else {
            $products = Product::all();
        }
        return view("home", compact("products", "search", "categorys", "categoryHighlights", "banners"));
    }
}
