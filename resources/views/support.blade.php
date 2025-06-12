@extends('profiles.layout.main')
@section('content')

 

      <!-- Content Area -->
      <div class="col-md-10 col-12 p-0">
       <div class="profile-info-container-box">
          <div class="d-flex justify-content-between align-items-center">
            <div class="main-title-of-dashboard text-dark">Help & Support</div>
            <a href="{{url('address')}}"><button class="back-page-btn"><i class="bi bi-arrow-left"></i> Back</button></a>
        </div>
        <div class="row mt-3">
          <div class="col-md-9">
              <div class="support-box-container">
            <h6><b>What issue are you facing</b></h6>

            <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       I want to manage my order
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptatum exercitationem similique aut in neque tempore, voluptates optio unde animi!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
       I want to help with returns & refunds
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatem provident omnis sit, ut cumque. Pariatur nam libero quas quod!
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
       I want to help with order issues
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima explicabo asperiores amet obcaecati. Porro iure voluptas exercitationem dolores rerum?
      </div>
    </div>
  </div>
</div>
          </div>
               <div class="row mt-3">
            <div class="col-md-6 col-6 mt-3">
              <div class="help-support-container">
            <i class="bi bi-whatsapp"></i>
              <p>1800-89760-876</p>
              </div>
          
            </div>
             <div class="col-md-6 col-6 mt-3">
                <div class="help-support-container">
              <i class="bi bi-envelope-fill"></i>
               <p>Example@gmail.com</p>
               </div>
            </div>
          </div>
          </div>
           <div class="col-md-3"></div>
        </div>
        


        </div>
      </div>
    </div>
  </div>

   


@endsection