@extends('profiles.layout.main')
@section('content') 






      
      <!-- Content Area -->
      <div class="col-md-10 col-12 p-0">
       <div class="profile-info-container-box">
           <div class="main-title-of-dashboard">Profile Information</div>
         
           <div><img src="{{url('dashboard-images/user-icon.png')}}" alt="user" class="user-icon-show"></div>
           <h6 class="mt-2">Sumit Sharma</h6>
           <div class="row">
          <div class="col-md-6">
        <form action="" class="mt-4">
          <div class="row">
            <div class="col-md-6 mt-3">
             <label for="" class="form-label">First NAME</label>
            <input type="text" class="form-control">
            </div>
             <div class="col-md-6 mt-3">
                <label for="" class="form-label">Last NAME</label>
            <input type="text" class="form-control">
            </div>
             <div class="col-md-12 mt-3">
               <label for="" class="form-label">Phone Number</label>
            <input type="text" class="form-control">
            </div>
             <div class="col-md-12 mt-3">
                <label for="" class="form-label">Email ID</label>
            <input type="email" class="form-control">
            </div>
             <div class="col-md-12 mt-3">
              <label for="" class="form-label">Password</label>
            <input type="password" class="form-control">
            </div>
            <div class="col-md-12">
                <button class="upload-image-btn mt-4 w-100 rounded-0 ms-0">Save Change</button>
            </div>
          </div>
          
        </form>
        </div>
          <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  




@endsection