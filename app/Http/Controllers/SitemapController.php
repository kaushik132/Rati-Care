<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SitemapController extends Controller
{
     public function index(){
$blogs = Blog::all();


        return response()->view('Sitemap.sitemap',[
            'blogs'=> $blogs,
    
        ])->header('Content-Type','text/xml');
    }
}
