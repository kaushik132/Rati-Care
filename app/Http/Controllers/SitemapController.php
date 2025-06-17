<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class SitemapController extends Controller
{
     public function index(){
$blogs = BlogCategory::all();


        return response()->view('Sitemap.sitemap',[
            'blogs'=> $blogs,
    
        ])->header('Content-Type','text/xml');
    }
}
