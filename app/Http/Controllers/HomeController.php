<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\Testimonial;

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
  public  function cart(){
        return view('cart');
    }
   public function blog(){
        return view('blog');
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
