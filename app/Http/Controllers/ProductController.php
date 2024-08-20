<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $search = request("search");
        $categorys = Category::all();

        if ($search) {
            $products = Product::where("name","like","%".$search."%")->get();
        } else {
            $products = Product::all();
        }
        return view("home", compact("products", "search", "categorys"));
    }
}
