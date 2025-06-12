@extends('profiles.layout.main')
@section('content')

   <!-- Content Area -->
      <div class="col-md-10 col-12 p-0">
       <div class="profile-info-container-box">
           <div class="main-title-of-dashboard">My Cart</div>
       <div class="text-muted mt-3"><small><b>Recent Order</b></small></div>
      <div class="row">
        <div class="col-md-9">
          <!-- =============================Cart Details===================================== -->
   <div class="main-cart-box-container-dashboard mt-3">
    <div class="text-end"><i class="bi bi-x-lg"></i></div>
    <div class="d-flex">
    <div class="cart-image--for-pay-show-box">
    <img src="https://hanfihandicraft.com/cdn/shop/files/393549925_287834970880575_7422002219366973030_n.jpg?v=1717524122" alt="cart-image">
      <div class="offer-show-container-show">35% OFF</div>
    </div>
      <div class="product-info">
                <h6>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h6>
                <p>Rs. 1750.00 <span>Rs. 1950.00 </span> /meter</p>

                   <div class="d-flex align-items-center">
                <div class="quantity-container">
                  <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                  <input type="number" id="quantity" class="quantity-input" value="1" min="1" readonly>
                  <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                </div>
                <small class="ms-2">Quantity in meters</small>
              </div>
              </div>
              </div>
   </div>

      <div class="main-cart-box-container-dashboard mt-3">
    <div class="text-end"><i class="bi bi-x-lg"></i></div>
    <div class="d-flex">
    <div class="cart-image--for-pay-show-box">
    <img src="https://fashiondoctorz.com/wp-content/uploads/2024/07/punjabi-anarkali-suit-design-purple.webp" alt="cart-image">
      <div class="offer-show-container-show">35% OFF</div>
    </div>
      <div class="product-info">
                <h6>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h6>
                <p>Rs. 1750.00 <span>Rs. 1950.00 </span> /meter</p>

                   <div class="d-flex align-items-center">
                <div class="quantity-container">
                  <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                  <input type="number" id="quantity" class="quantity-input" value="1" min="1" readonly>
                  <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                </div>
                <small class="ms-2">Quantity in meters</small>
              </div>
              </div>
              </div>
   </div>

  <!-- =======================Sutotal Price============================================ -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <h6><b>Subtotal</b></h6>
        <h6><b>Rs.3500.00</b></h6>
    </div>
<!-- =========================Proceeed to Pay=================================== -->
       <div>
     <button class="upload-image-btn mt-4 ms-0 w-100 rounded-0 mb-4">Proceed To Pay</button>
   </div>

   <!-- ===============================Order History============================================ -->
       <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
          <div class="text-muted"><small><b>Order History</b></small></div>
          <div class="d-flex align-items-center">
       <select name="" id="" class="order-select-box">
            <option value="">April</option>
            <option value="">June</option>
            <option value="">July</option>
          </select>
            <select name="" id="" class="order-select-box ms-2">
            <option value="">2025</option>
            <option value="">2024</option>
            <option value="">2023</option>
          </select>
          </div>
         
       </div>

       <!-- ============================Order Delivery Details================================================= -->
           <div class="main-cart-box-container-dashboard mt-3 bg-white shadow  rounded-2">
    <div class="d-flex">
    <div class="cart-image--for-pay-show-box">
    <img src="https://hanfihandicraft.com/cdn/shop/files/393549925_287834970880575_7422002219366973030_n.jpg?v=1717524122" alt="cart-image">
      <div class="offer-show-container-show">35% OFF</div>
    </div>
      <div class="product-info">
                <h6>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h6>
                <p>Rs. 1750.00 <span>Rs. 1950.00 </span> /meter</p>

                  
                <div class="delivered-text"><small>Delivered</small></div>
            
              </div>
              </div>
   </div>

              <div class="main-cart-box-container-dashboard mt-3 bg-white shadow  rounded-2">
    <div class="d-flex">
    <div class="cart-image--for-pay-show-box">
    <img src="https://hanfihandicraft.com/cdn/shop/files/393549925_287834970880575_7422002219366973030_n.jpg?v=1717524122" alt="cart-image">
      <div class="offer-show-container-show">35% OFF</div>
    </div>
      <div class="product-info">
                <h6>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h6>
                <p>Rs. 1750.00 <span>Rs. 1950.00 </span> /meter</p>

                  
                <div class="cancel-text"><small>Cancelled</small></div>
          
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