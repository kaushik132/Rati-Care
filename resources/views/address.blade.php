@extends('profiles.layout.main')
@section('content')

 

      <!-- Content Area -->
      <div class="col-md-10 col-12 p-0">
       <div class="profile-info-container-box">
           <div class="main-title-of-dashboard">Your Address</div>
        <div class="row">
            <div class="col-md-6 mt-3">
               <div class="bg-white p-3 rounded-3 card-box-container">               
                <h6><b>Sumit Sharma</b></h6>
                <p>345 Murlipura Nagar, Mansarowar,  Jaipur, Rajasthan India</p>
                <p>Phone Number : 9454675679</p>
                  <div class="mt-3">
                   <small>Remove</small> 
                 <a href="edit-address.html" class="text-decoration-none"><small class="ms-2 edit-address-btn">Edit</small> </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-3">
             <a href="{{url('add-address')}}" class="text-decoration-none"><div class="bg-white p-3 rounded-3 card-box-container text-center pointer-access">
                   <i class="bi bi-plus-lg add-plus-icons-show text-muted"></i>
                   <h6 class="mt-1">Add Address</h6>
              </div>
              </a> 
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>

 
@endsection