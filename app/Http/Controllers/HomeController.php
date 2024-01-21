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
        $listproduct = $this->getAllProduct($page);
        return view('page.home', compact('page', 'listproduct'));
    }




    public function getAllProduct($pagenum){
        $products = Product::paginate(10, ['*'], 'page', intval($pagenum) );

        return $products;
    }

}
