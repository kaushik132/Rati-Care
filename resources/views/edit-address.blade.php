@extends('profiles.layout.main')
@section('content')

 

      <!-- Content Area -->
      <div class="col-md-10 col-12 p-0">
       <div class="profile-info-container-box">
        <div class="d-flex justify-content-between align-items-center">
            <div class="main-title-of-dashboard text-dark">Your Address</div>
            <a href="{{url('address')}}"><button class="back-page-btn"><i class="bi bi-arrow-left"></i> Back</button></a>
        </div>
          
         <div class="row">
            <div class="col-md-6">
       <div class="mt-4 text-muted"><small><b>Edit Your Address</b></small></div>
        <form action="">
             <label for="" class="form-label mt-3">Full Name</label>
            <input type="text" class="form-control" value="Jhon Doe">
             <label for="" class="form-label mt-3">Phone Number</label>
            <input type="text" class="form-control" value="9876543210">
            <label for="" class="form-label mt-3">Country</label>
           <select name="" id="" class="form-select">
            <option value="">India</option>
           </select>
             <label for="" class="form-label mt-3">ADDRESS</label>
            <input type="text" class="form-control" value="345 Murlipura Nagar, Mansarowar,  Jaipur, Rajasthan India">
             <label for="" class="form-label mt-3">APARTMENT (Optional)</label>
            <input type="text"class="form-control">
             <div class="row">
                <div class="col-md-6 col-6 mt-3">
              <label for="" class="form-label">City</label>
            <input type="text"class="form-control" value="Jaipur">
                </div>
                    <div class="col-md-6 col-6 mt-3">
              <label for="" class="form-label">State</label>
            <input type="text"class="form-control" value="Rajasthan">
                </div>
                     <div class="col-md-12 col-12 mt-3">
              <label for="" class="form-labe">PIN code</label>
            <input type="text"class="form-control" value="302039">
                </div>
             </div>
            <button class="upload-image-btn mt-4 ms-0 w-100 rounded-0">Save Changes</button>
        </form>
            </div>
             <div class="col-md-6"></div>
         </div>
   

 


  
  
 

@endsection