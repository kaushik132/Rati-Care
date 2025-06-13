@extends('dashboard.layout.main')
@section('main-containers') 

  <!-- ==========================Checkout Page========================================== -->
  <section>

    <div class="container">
      <div class="product-page-link-show" style="padding-top:10px">Home / Checkout</div>
      <div class="row checkout-row-flex-dirtn">
        <div class="col-md-7 mt-3">
          <div class="position-relative">
          <div class="delivery-login-container">
            <div>
              <h6>Login</h6>
              <p>+919876543210</p>
            </div>
            <button class="change-address-checkout-btn">Change</button>
          </div>
          <div class="delivery-login-container">
            <input class="form-check-input" type="radio" id="deliveryAddress1" name="addressOption" checked>
            <div class="ms-2">
              <h6>Delivery Address</h6>
              <p>Himanshi Sharma Gurukripa Enclave, Ramgarh mode, Amer road, Jaipur, Rajasthan - 302020</p>
            </div>
            <button class="change-address-checkout-btn">Edit</button>
          </div>
          <div class="new-delivery-address-option">
            <div class="ms-2">
              <p class="add-new-address-box"><i class="bi bi-plus"></i> Add a new address</p>
            </div>
            <div class="new-address-form">
              <div class="row g-2">

                <div class="col-md-12">
                  <div class="d-flex align-items-center">
                    <input class="form-check-input" type="radio" id="newDeliveryAddress" name="addressOption">
                    <h5 class="ms-2 mt-2">Information</h5>
                  </div>
                </div>
                <h6 class="mt-4 mb-3">Customer Details</h6>
                <div class="col-md-12">
                  <label for="" class="delivery-address-label">Email*</label>
                  <input type="email" class="delivery-address-input-box">
                </div>

                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">First Name*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">Last Name*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Phone Number*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <h6 class="mt-4 mb-3">Delivery Address</h6>
                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Country*</label>
                  <select name="" id="" class="delivery-address-input-box">
                    <option value="">India</option>
                  </select>
                </div>

                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Address*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Apartment (Optional)</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">City*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">State*</label>
                  <select name="" id="" class="delivery-address-input-box">
                    <option value="">Rajasthan</option>
                  </select>
                </div>

                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Pin Code / Zip Code</label>
                  <input type="text" class="delivery-address-input-box">
                </div>

                <div class="d-flex align-items-center">
                  <input type="checkbox" checked>
                  <label for="" class="checkbox-save-text">Save this information for next time</label>
                </div>
              </div>
            </div>

          </div>
             <div class="new-delivery-address-option">
              <div class=" d-flex justify-content-between align-items-center">
                <h6>Billing Information</h6>
               <input type="checkbox" id="billingToggle" checked>
              </div>
             
          <div class="billing-info-form transition-collapse hidden" id="billingForm">
              <div class="row g-2">
                <h6 class="mt-4 mb-3">Customer Details</h6>
                <div class="col-md-12">
                  <label for="" class="delivery-address-label">Email*</label>
                  <input type="email" class="delivery-address-input-box">
                </div>

                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">First Name*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">Last Name*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Phone Number*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <h6 class="mt-4 mb-3">Delivery Address</h6>
                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Country*</label>
                  <select name="" id="" class="delivery-address-input-box">
                    <option value="">India</option>
                  </select>
                </div>

                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Address*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Apartment (Optional)</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">City*</label>
                  <input type="text" class="delivery-address-input-box">
                </div>
                <div class="col-md-6 col-6 mt-2">
                  <label for="" class="delivery-address-label">State*</label>
                  <select name="" id="" class="delivery-address-input-box">
                    <option value="">Rajasthan</option>
                  </select>
                </div>

                <div class="col-md-12 mt-2">
                  <label for="" class="delivery-address-label">Pin Code / Zip Code</label>
                  <input type="text" class="delivery-address-input-box">
                </div>

                <div class="d-flex align-items-center">
                  <input type="checkbox" checked>
                  <label for="" class="checkbox-save-text">Save this information for next time</label>
                </div>
              </div>
            </div>
             </div>
              <h5 class="mt-3 mb-3">Payment Method</h5>
              <div class="new-delivery-address-option payment-border-show">
                <div class="d-flex align-items-center">
                  <input type="radio" class="form-check-input" id="paymentMethod1" name="paymentOption">
                  <label for="" class="payement-method-label">Cash on delivery</label>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                   <input type="radio" class="form-check-input" id="paymentMethod2" name="paymentOption" checked>
                   <div>
                    <label for="" class="payement-method-label">Cards, UPI, NB, Wallets, BNPL by PayU India</label>
                     <div class="d-flex">
                      <img src="./assets/images/payment-method1.png" alt="image" class="payment-method-image-show">
                       <img src="./assets/images/payment-method2.png" alt="image" class="payment-method-image-show">
                     </div>
                  </div>
                </div>
              </div>

              <div><button class="payNow-button-show">Pay Now</button></div>
            </div>
        </div>
        <div class="col-md-5 mt-3">
          <div class="checkout-price-details-container">
            <div class="checkout-product-details">
              <img src="./assets/images/fabrics-img.png" alt="image">
              <div class="product-info">
                <h5>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h5>
                <p>Rs. 1750.00 <span>Rs. 1950.00 </span></p>
              </div>
            </div>

            <div class="checkout-product-details">
              <img src="./assets/images/fabrics-img.png" alt="image">
              <div class="product-info">
                <h5>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h5>
                <p>Rs. 1750.00 <span>Rs. 1950.00 </span></p>
              </div>
            </div>

            <div class="position-relative">
              <input type="text" class="checkout-promo-code" placeholder="Enter Promo Code">
              <button class="apply-now-btn">Apply Now</button>
            </div>



            <div class="accordion accordion-flush mt-4 mb-4" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Promo Code
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="promo-code-text-container">
                    <div class="text">Flat 20% OFF and promo code : AHUF200</div>
                    <i class="fa-solid fa-copy copy-icon-show"></i>
                  </div>

                  <div class="promo-code-text-container">
                    <div class="text">Flat 20% OFF and promo code : AHUF200</div>
                    <i class="fa-solid fa-copy copy-icon-show"></i>
                  </div>
                  <div class="promo-code-text-container">
                    <div class="text">Flat 20% OFF and promo code : AHUF200</div>
                    <i class="fa-solid fa-copy copy-icon-show"></i>
                  </div>


                </div>
              </div>

            </div>

            <div class="d-flex justify-content-between align-items-center mt-2">
              <h6>Subtotal</h6>
              <h6>Rs.3500.00</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <h6>Delivery</h6>
              <h6>Rs.00.00</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <h6>Taxes</h6>
              <h6>Rs.00.00</h6>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <h6>Total</h6>
              <h6>Rs.3500.00</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===========================Offcanvas======================================== -->


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const existingRadio = document.getElementById("deliveryAddress1");
      const newRadio = document.getElementById("newDeliveryAddress");
      const addNewBtn = document.querySelector(".add-new-address-box");
      const formWrapper = document.querySelector(".new-address-form");

      // Toggle on Add New Address click
      addNewBtn.addEventListener("click", function() {
        newRadio.checked = true;
        formWrapper.classList.add("show");
      });

      // Hide form when selecting existing address
      existingRadio.addEventListener("change", function() {
        if (this.checked) {
          formWrapper.classList.remove("show");
          newRadio.checked = false;
        }
      });

      // In case user directly clicks the radio inside the form
      newRadio.addEventListener("change", function() {
        if (this.checked) {
          formWrapper.classList.add("show");
        }
      });
    });
  </script>

<script>
const toggleCheckbox = document.getElementById("billingToggle");
const billingForm = document.getElementById("billingForm");

function updateFormVisibility() {
  if (toggleCheckbox.checked) {
    billingForm.classList.add("hidden");
  } else {
    billingForm.classList.remove("hidden");
  }
}

updateFormVisibility(); // run on page load
toggleCheckbox.addEventListener("change", updateFormVisibility);
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  fetch('cart.html')
    .then(response => response.text())
    .then(html => {
      document.getElementById('offcanvasContainer').innerHTML = html;

      const offcanvasElement = document.getElementById('dynamicOffcanvas');
      // const offcanvasBody = document.getElementById('offcanvasContent');
      const offcanvas = new bootstrap.Offcanvas(offcanvasElement);

      // Attach listener to ALL trigger buttons on the page
      document.querySelectorAll('.open-offcanvas').forEach(button => {
        button.addEventListener('click', () => {
          offcanvas.show();
        });
      });
    });
});
</script>




@endsection