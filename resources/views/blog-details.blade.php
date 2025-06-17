@extends('dashboard.layout.main')
@section('main-containers')


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
 
    
        
          <p>{!!$blogData->description!!}</p>

      

      
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
          <div class="col-md-4 mt-4">
            <a href="blog-details.html" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="https://www.hostinger.com/my/tutorials/wp-content/uploads/sites/45/2022/03/what-is-a-blog-1.webp" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">June 7 | 10 min read</div>
                  <a href="#"><i class="fa-solid fa-share"></i></a>
               </div>
               
                <a href="blog-details.html" class="text-decoration-none"><h1>Top 8 eCommerce personalization examples to boost sales</h1></a>
              </div>
            </a> 
          </div>
                <div class="col-md-4 mt-4">
                  <a href="blog-details.html" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="https://revolutionfabrics.com/cdn/shop/articles/Blog_Cover_Photo_Template_22_1200x750.jpg?v=1694786803" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">June 7 | 10 min read</div>
                  <a href="#"><i class="fa-solid fa-share"></i></a>
               </div>
               
                <a href="blog-details.html" class="text-decoration-none"><h1>Top 8 eCommerce personalization examples to boost sales</h1></a>
              </div>
            </a> 

          </div>
                <div class="col-md-4 mt-4">
                  <a href="blog-details.html" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="https://img.theloom.in/blog/wp-content/uploads/2023/03/272-2-e1678785542142.png" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">June 7 | 10 min read</div>
                  <a href="#"><i class="fa-solid fa-share"></i></a>
               </div>
               
                <a href="blog-details.html" class="text-decoration-none"><h1>Top 8 eCommerce personalization examples to boost sales</h1></a>
              </div>
            </a> 
          </div>
                <div class="col-md-4 mt-4">
                  <a href="blog-details.html" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="https://www.manyavar.com/dw/image/v2/BJZV_PRD/on/demandware.static/-/Library-Sites-ManyavarSharedLibrary/default/dwb4de314b/5%20Sherwani%20Styles%20for%20a%20Grand%20Marriage%20Ceremony_Blog%201.jpg" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">June 7 | 10 min read</div>
                  <a href="#"><i class="fa-solid fa-share"></i></a>
               </div>
               
                <a href="blog-details.html" class="text-decoration-none"><h1>Top 8 eCommerce personalization examples to boost sales</h1></a>
              </div>
            </a> 

          </div>
                <div class="col-md-4 mt-4">
                  <a href="blog-details.html" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="https://medias.utsavfashion.com/blog/wp-content/uploads/2023/12/22nd-dec-Blog.jpg" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">June 7 | 10 min read</div>
                  <a href="#"><i class="fa-solid fa-share"></i></a>
               </div>
               
                <a href="blog-details.html" class="text-decoration-none"><h1>Top 8 eCommerce personalization examples to boost sales</h1></a>
              </div>
            </a> 
          </div>
                <div class="col-md-4 mt-4">
                  <a href="blog-details.html" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="https://manyavar.scene7.com/is/image/manyavar/SOSK734_316-Dark+Green.6605_12-01-2024-15-45:650x900?&dpr=on,2" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">June 7 | 10 min read</div>
                  <a href="#"><i class="fa-solid fa-share"></i></a>
               </div>
               
                <a href="blog-details.html" class="text-decoration-none"><h1>Top 8 eCommerce personalization examples to boost sales</h1></a>
              </div>
            </a> 
          </div>
        </div>
      </div>
    </section>


    @endsection