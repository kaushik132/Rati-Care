@extends('dashboard.layout.main')
@section('main-containers')



 <!-- =======================Blogs=========================================== -->
     <section>
      <div class="container-fluid">
        <div class="product-page-link-show">Home / Blogs</div>
        <div class="row">
  
  @foreach ($blogList as $blog)
      
  <div class="col-md-4 mt-4">
                    <a href="{{url('blog/'.$blog->slug)}}" class="text-decoration-none">
              <div class="main-blogs-container">
                <img src="{{url('uploads/'. $blog->image)}}" alt="Blog-image">
               <div class="share-post-show">
                 <div class="read-post-text">June 7 </div>
                  {{-- <a href="#"><i class="fa-solid fa-share"></i></a> --}}
               </div>
               
                <h1>{{$blog->title}}</h1>
              </div>
            </a>
          </div>

            @endforeach      
      
             

        </div>

 
            <!-- ----------------Pagination--------------------- -->
<div class="custom-pagination">
    {{-- Previous Page Button --}}
    @if ($blogList->onFirstPage())
        <button class="main-page-btn" disabled><i class="bi bi-arrow-left"></i> Previous</button>
    @else
        <a href="{{ $blogList->previousPageUrl() }}" class="main-page-btn"><i class="bi bi-arrow-left"></i> Previous</a>
    @endif

    {{-- Page Number Links --}}
    <div class="page-links">
        @foreach ($blogList->getUrlRange(1, $blogList->lastPage()) as $page => $url)
            @if ($page == $blogList->currentPage())
                <button class="page-btn active">{{ $page }}</button>
            @elseif ($page == 1 || $page == $blogList->lastPage() || abs($page - $blogList->currentPage()) <= 2)
                <a href="{{ $url }}" class="page-btn">{{ $page }}</a>
            @elseif ($page == 2 || $page == $blogList->lastPage() - 1)
                <span class="dots">...</span>
            @endif
        @endforeach
    </div>

    {{-- Next Page Button --}}
    @if ($blogList->hasMorePages())
        <a href="{{ $blogList->nextPageUrl() }}" class="main-page-btn">Next <i class="bi bi-arrow-right"></i></a>
    @else
        <button class="main-page-btn" disabled>Next <i class="bi bi-arrow-right"></i></button>
    @endif
</div>

      </div>
     </section>








@endsection