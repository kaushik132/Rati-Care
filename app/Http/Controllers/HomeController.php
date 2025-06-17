<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\BlogCategory;


class HomeController extends Controller
{
  public  function index()
    {
        $testimonials = Testimonial::all();
        return view('home',compact('testimonials'));


        if ($request->hasFile('image')) {
    $image = $request->file('image')->store('testimonials', 'public');
}

Testimonial::create([
    'name' => $request->name,
    'description' => $request->description,
    'image' => $image,
]);

    }

   public function product(){
        return view('product');
    }

     public function productsDetails(){
        return view('productdetails');
    }


     public function blogDetails(){
        return view('blogdetails');
    }

  public  function cart(){
        return view('cart');
    }
   public function blog($slug = null){
     if($slug!=null){
            $blogCategory = BlogCategory::where('slug',$slug)->first();
            $blogList = Blog::latest()->with('blogCategory')->where('category_id',$blogCategory->id)->paginate(6);
        //     $seo_data['seo_title'] =$blogCategory->seo_title;
        //     $seo_data['seo_description'] =$blogCategory->seo_description;
        //    $seo_data['keywords'] =$blogCategory->seo_keyword;
        //    $canocial ='https://codepin.org/blogs/'.$slug;

         

        }else{
            $blogList = Blog::latest()->with('blogCategory')->paginate(6);
            // $seo_data['seo_title'] =$homepage->seo_title_blog;
            // $seo_data['seo_description'] =$homepage->seo_des_blog;
            // $seo_data['keywords'] =$homepage->seo_key_blog;
            // $canocial ='https://codepin.org/blogs';
         
         }
        return view('blog',compact('blogList'));
    }


    public function blogDetails(){
        return view('blog-details');
    }

    public function checkoutShow(){
        return view('checkout-page');
    }

    



    public function contact(Request $request)
{
    $data = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email|unique:contacts,email',
        'phonenumber' => 'required',
        'message' => 'required',
    ]);

    $user = Contact::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'message' => $data['message'],
            
        ]);




    

    return redirect()->route('contact')->with('success', 'You are successfully register');
}

public function showContactForm()
{
    return view('contact');
}





    
}
