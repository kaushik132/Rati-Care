@extends('dashboard.layout.main')
@section('main-containers')

<style>
    p img {
        display: block;
        float: none !important;
        margin: 20px auto; /* Adds space above and below the image */
        max-width : 100%;
        height : auto;
    }
</style>



    <!--=================================Blog Details=========================================  -->
       <section class="product-page-container">
          <div><img src="{{url('assets/images/product-bg-img.png')}}" alt="image" class="mainProduct-relative-image"></div>
    <div class="container">
           <div class="banner-area-titles">
      <img src="{{url('assets/images/banner-title-image.png')}}" alt="icon" loading="lazy">
      

      <h1>{{$blogData->title}}</h1>

      <p> Discover the finest handcrafted textiles that blend heritage and modern elegance.</p>

    </div>
 <div class="blog-content-details-show">
    <div class="row">
 
        
          <p>{!! $blogData->description !!}</p>

      <p>{{$blogData->short_content}}</p>
    </div>
 <div class="blog-content-details-show">
<div class="row">
    <div class="col-12">
        <p>{!! $blogData->description !!}</p>
    </div>
</div>


    </div>
    </div>
    </div>
    </section>

    <!-- =======================================Related Blogs================================================= -->
    <section class="mt-4 mb-4">
      <div class="container-fluid">
                 <div class="banner-area-titles">
      <img src="{{url('assets/images/banner-title-image.png')}}" alt="icon" loading="lazy">
      <h1>Related Blogs</h1>
      <p> Discover the finest handcrafted textiles that blend heritage and modern elegance.</p>
    </div>


           <div class="row">

            

@foreach ($blog as $blogs)
          <div class="col-md-4 mt-4">
            <a href="{{url('blog/'.$blogs->slug)}}" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="{{url('uploads/'.$blogs->image)}}" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">{{ $blogs->created_at->format('F j') }} | 10 min read</div>
                  {{-- <a href="#"><i class="fa-solid fa-share"></i></a> --}}
               </div>
               
                <a href="{{url('blog/'.$blogs->slug)}}" class="text-decoration-none"><h1>{{$blogs->title}}</h1></a>
              </div>
            </a> 
          </div>
          @endforeach

   
             
        </div>
      </div>
    </section>


    @endsection