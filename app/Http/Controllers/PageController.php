<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DevDojo\Chatter\Models\Models;
class PageController extends Controller
{
    public function aboutus(){
        return view('layouts.aboutus');
    }

    public function profil(){
        return view('layouts.profil');
    }

    public function edit(){
        $pagination_results = config('chatter.paginate.num_of_results');

        $discussions = Models::discussion()->with('user')->with('post')->with('postsCount')->with('category')->orderBy('created_at', 'DESC')->paginate($pagination_results);
        if (isset($slug)) {
            $category = Models::category()->where('slug', '=', $slug)->first();
            if (isset($category->id)) {
                $discussions = Models::discussion()->with('user')->with('post')->with('postsCount')->with('category')->where('chatter_category_id', '=', $category->id)->orderBy('created_at', 'DESC')->paginate($pagination_results);
            }
        }

        // dd($discussions);

        return view('layouts.editprofil',compact('discussions'));
    }
}
