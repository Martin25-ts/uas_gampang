<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){


        return view('page.home');
    }

    public function homePageHashAuth(Request $request){
        $page = $request->page;

        $getAllProduct = $this->getAllProduct($page);
        $listproduct = $getAllProduct['products'];
        $pagination = $getAllProduct['pagination'];



        return view('page.home', compact('page', 'listproduct', 'pagination'));
    }



    /*
        ini function buat dapetin info product sekalian ngerturn
        banyak pagenya buat number paginationnya
    */
    public function getAllProduct($pagenum){

        $products = Product::paginate(10, ['*'], 'page', intval($pagenum));
        $pagination = Product::count();

        return [
            'products' => $products,
            'pagination' => ceil($pagination / 10)
        ];
    }



    public function productdetailPage(Request $request){
        $product_id = $request->id;

        $product = Product::find($product_id);
        return view('page.productdetail', compact('product'));
    }



}
