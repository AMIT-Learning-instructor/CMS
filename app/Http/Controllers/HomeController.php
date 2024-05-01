<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $data = [
            'testimonials'=> \App\Models\Testimonial::all()->take(10),
            'teams'=> \App\Models\Team::all(),
            'faqs'=> \App\Models\FAQ::all()->take(5),
        ];
        return view('website.index',$data);
    }

    function blogs(){
        $data = [
            'blogs'=> \App\Models\Blog::all()
        ];
        return view('website.blogs',$data);
    }
    function blog(Blog $blog){

        return view('website.blog',[$blog]);
    }
}
