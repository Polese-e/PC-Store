<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\CategoryHighlight;
use App\Models\ProdDescription;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $categories = Category::all();
        $banners = Banner::inRandomOrder()->take(random_int(1,4))->get();
        $categoryHighlights = CategoryHighlight::all();

        if ($search) {
            $products = Product::where("name","like","%".$search."%")->get();
        } else {
            $products = Product::all();
        }
        return view("home", ["search" => $search, "categories" => $categories, "products"=> $products, "banners"=> $banners, "categoryHighlights" => $categoryHighlights]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $banners = Banner::inRandomOrder()->take(random_int(1,4))->get();
        $productDescriptions = ProdDescription::where("product_id", $id)->orderBy("order")->get();
        return view("products.show", ["product"=> $product, "banners"=> $banners, "productDescriptions"=> $productDescriptions]);
    }
}
