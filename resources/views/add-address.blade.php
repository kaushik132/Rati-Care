@extends('profiles.layout.main')
@section('content')

  

      <!-- Content Area -->
      <div class="col-md-10 col-12 p-0">
       <div class="profile-info-container-box">
        <div class="d-flex justify-content-between align-items-center">
            <div class="main-title-of-dashboard text-dark">Your Address</div>
            <a href="address.html"><button class="back-page-btn"><i class="bi bi-arrow-left"></i> Back</button></a>
        </div>
          
         <div class="row">
            <div class="col-md-6">
       <div class="mt-4 text-muted"><small><b>Add Address</b></small></div>
          <p class="text-muted"><small>Please fill in the details to add a new address</small></p>
        <form action="">
             <label for="" class="form-label mt-3">Full Name</label>
            <input type="text" class="form-control">
             <label for="" class="form-label mt-3">Phone Number</label>
            <input type="text" class="form-control">
            <label for="" class="form-label mt-3">Country</label>
           <select name="" id="" class="form-select">
            <option value="">India</option>
           </select>
             <label for="" class="form-label mt-3">ADDRESS</label>
            <input type="text" class="form-control">
             <label for="" class="form-label mt-3">APARTMENT (Optional)</label>
            <input type="text"class="form-control">
             <div class="row">
                <div class="col-md-6 col-6 mt-3">
              <label for="" class="form-label">City</label>
            <input type="text"class="form-control">
                </div>
                    <div class="col-md-6 col-6 mt-3">
              <label for="" class="form-label">State</label>
            <input type="text"class="form-control">
                </div>
                     <div class="col-md-12 col-12 mt-3">
              <label for="" class="form-labe">PIN code</label>
            <input type="text"class="form-control">
                </div>
             </div>
            <button class="upload-image-btn mt-4 ms-0 rounded-0 w-100">Save Address</button>
        </form>
            </div>
             <div class="col-md-6"></div>
         </div>
   

 


  
  
  

@endsection