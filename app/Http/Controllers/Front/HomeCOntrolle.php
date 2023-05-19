<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\blog;
use App\Models\User;
use Illuminate\Http\Request;

class HomeCOntrolle extends Controller
{
    public  function Home()
    {
        return view('Fornt.home.home',[
            'blogs' => blog::all(),
            'user' => User::all(),
        ]);
    }



    public function pageOne($slug)
    {
        $category =  Category::where('slug',$slug)->first();


        $products = Product::where('category_id',$category->id)->latest()->get();
        return view('Fornt.home.page_one', compact('category','products'));


    }

    public  function details($id)
    {
        return view('Fornt.home.details',[
            'detail' => blog::find($id)
        ]);
    }
}
