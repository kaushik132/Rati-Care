<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = $request->file('image')->store('testimonials', 'public');

    Testimonial::create([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Testimonial added!');
}



}
