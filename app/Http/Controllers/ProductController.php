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
    $product = Product::with('categories.products')->findOrFail($id);

    $relatedProducts = collect();
    foreach ($product->categories as $category) {
        foreach ($category->products as $relatedProduct) {
            if ($relatedProduct->id != $id) {
                $relatedProducts->push($relatedProduct);
            }
        }
    }

    // Remover duplicatas e limitar a 5 produtos
    $relatedProducts = $relatedProducts->unique('id')->take(5);

    // Se não houver produtos suficientes, buscar produtos mais recentes
    if ($relatedProducts->count() < 5) {
        $needed = 5 - $relatedProducts->count();
        $additionalProducts = Product::where('id', '!=', $id)
                                     ->latest() // Ordena por data de criação mais recente
                                     ->take($needed)
                                     ->get();
        $relatedProducts = $relatedProducts->merge($additionalProducts);
    }

    $relatedProducts = $relatedProducts->unique('id'); // Assegura unicidade após possível adição de mais produtos

    $banners = Banner::inRandomOrder()->take(random_int(1,4))->get();
    $productDescriptions = ProdDescription::where("product_id", $id)->orderBy("order")->get();

    return view("products.show", [
        "product" => $product,
        "banners" => $banners,
        "productDescriptions" => $productDescriptions,
        "relatedProducts" => $relatedProducts,
    ]);
}
}
