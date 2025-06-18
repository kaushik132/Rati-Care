@extends('dashboard.layout.main')
@section('main-containers')






    <!--=================================Blog Details=========================================  -->
       <section class="product-page-container">
          <div><img src="{{url('assets/images/product-bg-img.png')}}" alt="image" class="mainProduct-relative-image"></div>
    <div class="container">
           <div class="banner-area-titles">
      <img src="{{url('assets/images/banner-title-image.png')}}" alt="icon" loading="lazy">
      
     <h1>{{ $blogData->title }}</h1> 
      <p> {!! $blogData->description !!}</p>
    </div>
 <div class="blog-content-details-show">
    <div class="row">
       <div class="col-md-6 blog-first-section-show">
        <h1>The Fabric of Our Lives: Stories Woven in Threads</h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora atque error ullam temporibus laudantium non optio nesciunt tempore deserunt.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora atque error ullam temporibus laudantium non optio nesciunt tempore deserunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam necessitatibus, quibusdam mollitia sunt rem voluptatum sed magni doloremque at dicta a laboriosam earum iusto totam temporibus sequi quis dolorem dolore.</p>
       </div>
        <div class="col-md-6 mt-1">
            <img src="https://media.istockphoto.com/id/656980138/photo/colorful-clorhes-on-racks-in-a-fashion-boutique.jpg?s=612x612&w=0&k=20&c=w96wcXG3lnt4r_Uq6RduTbvw6RyMKDXj6jE0CbN7EeU=" alt="image" class="img-fluid w-100">
          
          </div>

          <div class="col-md-12 mt-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quo ex optio adipisci natus aspernatur dolorem a! Quisquam architecto deleniti rem quidem ipsa veritatis facere doloribus. Consectetur rerum, libero, odit repellat tenetur blanditiis eligendi at accusantium dolore explicabo odio perferendis obcaecati. Sunt tenetur pariatur molestiae dolor. Impedit saepe illum, error perspiciatis enim reprehenderit porro facilis quos sit vitae quasi veritatis excepturi esse eveniet molestias, mollitia ab incidunt voluptate odio accusamus laudantium rem blanditiis. Eveniet, itaque quod sequi explicabo consequuntur sunt aspernatur beatae blanditiis velit. Nisi impedit odit fuga aspernatur! Error vitae veritatis neque vel aliquid illum dolorem, sequi autem voluptatibus?</p>
           <h5>Lorem ipsum, dolor sit amet consectetur adipisicing.</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio asperiores repudiandae repellat at dolore incidunt ab consequuntur quaerat, maiores totam voluptatem quidem aperiam magnam dolores vitae, nulla itaque nesciunt culpa laboriosam soluta quos expedita recusandae? Cum dolorem, non libero sapiente eveniet reprehenderit consectetur adipisci velit praesentium similique fugit, facere natus et maxime accusamus aliquid saepe harum, consequatur qui! In omnis laborum sunt dolorem aut reiciendis culpa! Eveniet nam asperiores quia modi natus quis. Excepturi iste neque pariatur debitis libero, aliquam aperiam ratione eligendi reprehenderit incidunt corrupti quasi perspiciatis. Ipsa excepturi rerum, unde, saepe laudantium aperiam facilis at a illum iure quidem! Doloribus magni at laudantium fugiat totam rerum labore molestiae nam praesentium, culpa quidem aliquam deserunt sunt dolorem hic mollitia voluptatibus non minus exercitationem ducimus error ea dignissimos? Voluptatibus aliquam facere ratione unde hic quaerat perferendis odio, qui voluptatum. Vitae molestiae consequuntur, similique ipsum illo doloribus ea quo perspiciatis, nulla porro impedit sapiente recusandae dignissimos tempore est pariatur reiciendis laboriosam nobis eum veritatis adipisci vero! Aliquid placeat eaque nisi rem ut. Aliquid ad dolorum eveniet ipsa nam repellendus esse accusamus expedita, similique cupiditate modi illo odio quis ex dolor, asperiores ipsum deserunt repellat. Accusantium et quo ut modi corporis nisi.</p>
         
         <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, perferendis!</h6>
         <ul>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit vel temporibus rerum sunt ad qui incidunt repellat excepturi iusto possimus.</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, consequatur! Ducimus adipisci veritatis cum dolorem, molestias ad doloribus molestiae cumque.</li>
         </ul>
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

            
          @foreach($blog as $blogData)
<div class="col-md-4 mt-4">
  <a href="{{ url('blog/' . $blogData->slug) }}" class="text-decoration-none">
    <div class="main-blogs-container">
      <img src="{{ asset('uploads/'.$blogData->image) }}" alt="Blog-image">
      <div class="share-post-show">
        <div class="read-post-text">{{ $blogData->created_at->format('M d') }} | 10 min read</div>
      </div>
      <h1>{{ $blogData->title }}</h1>
    </div>
  </a> 
</div>
@endforeach

        </div>
      </div>
    </section>


    @endsection