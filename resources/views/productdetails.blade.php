@extends('dashboard.layout.main')
@section('main-containers') 



   <!-- ===============================Product Details====================================== -->
    <section class="product-details-container-show">
      <div class="product-details-bg-image"><img src="{{url('assets/images/main-bg-image.png')}}" alt="image"></div>
      <div class="container-fluid">
        <div class="product-page-link-show">Home / New arrival > Pure Silk Saree</div>
        <div class="row">
          <div class="col-md-7 mt-3">
            <div class="product-with-thumbnail-image-box">
              <div class="slider-container">
                <div class="main-image-container" id="mainImageContainer">
                  <img src="https://moora.in/cdn/shop/files/SR-MS-BE-0290-1.jpg?v=1726037673&width=900" id="mainImage" class="main-image" />
                  <div id="magnifier" class="magnifier"></div>
                </div>

                <div class="thumbnail-slider-wrapper">
                  <div class="nav-arrow" id="prev">&#10094;</div>
                  <div class="thumbnails" id="thumbnails">
                    <div class="thumbnail-track" id="thumbnailTrack">
                      <img src="https://moora.in/cdn/shop/files/SR-MS-BE-0290-1.jpg?v=1726037673&width=900" class="active" data-full="https://moora.in/cdn/shop/files/SR-MS-BE-0290-1.jpg?v=1726037673&width=900" />
                      <img src="https://assets.ajio.com/medias/sys_master/root/20230602/0l5o/6479920ed55b7d0c634269d1/arhi-slate-grey-traditional-cotton-saree-with-tassels.jpg" data-full="https://assets.ajio.com/medias/sys_master/root/20230602/0l5o/6479920ed55b7d0c634269d1/arhi-slate-grey-traditional-cotton-saree-with-tassels.jpg" />
                      <img src="https://assets.ajio.com/medias/sys_master/root/20250303/j4gz/67c582dd2960820c49c7a8a5/-473Wx593H-465143497-green-MODEL.jpg" data-full="https://assets.ajio.com/medias/sys_master/root/20250303/j4gz/67c582dd2960820c49c7a8a5/-473Wx593H-465143497-green-MODEL.jpg" />
                      <img src="https://images.meesho.com/images/products/500541630/xldoa_512.webp" data-full="https://images.meesho.com/images/products/500541630/xldoa_512.webp" />
                      <img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/sari/r/s/2/free-rkgoli-green-villagius-unstitched-original-imah3wgxjkg3wcrm.jpeg?q=90&crop=false" data-full="https://rukminim2.flixcart.com/image/850/1000/xif0q/sari/r/s/2/free-rkgoli-green-villagius-unstitched-original-imah3wgxjkg3wcrm.jpeg?q=90&crop=false" />
                    </div>
                  </div>
                  <div class="nav-arrow" id="next">&#10095;</div>
                </div>
              </div>

              <div class="text-center"><img src="{{url('assets/images/detail-image.png')}}" alt="image" class="product-detail-below-slide-image"></div>
            </div>
          </div>
          <div class="col-md-5 mt-3">
            <div class="product-details-info-content">
              <span><i class="bi bi-dot"></i>In Stock</span>
              <h1>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h1>
              <div class="d-flex align-items-center">
                <div class="quantity-container">
                  <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                  <input type="number" id="quantity" class="quantity-input" value="1" min="1" readonly>
                  <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                </div>
                <small class="ms-2">Quantity in meters</small>
              </div>
              <small>15 meter in stock <span>35% OFF</span></small>
              <h5>Rs. 1750.00 <span class="discount-price">Rs. 1950.00</span> /meter</h5>

              <button class="add-cart ">Add to cart</button>
              <button class="buy-now">Buy Now</button>

              <div class="d-flex justify-content-between align-items-center flex-wrap mt-4">
                <div class="d-flex align-items-center mt-2">
                  <div><img src="{{url('assets/images/value-1.png')}}" alt="icon" class="value-icon-show"></div>
                  <div class="value-text">Exceptional Quality</div>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <div><img src="{{url('assets/images/value-2.png')}}" alt="icon" class="value-icon-show"></div>
                  <div class="value-text">Value for money</div>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <div><img src="{{url('assets/images/value-3.png')}}" alt="icon" class="value-icon-show"></div>
                  <div class="value-text">Trusted brand</div>
                </div>
              </div>

              <!-- ----------------------Tabs----------------------------- -->

              <div class="tab-group">
                <div class="category-tab product-details-tab-container">
                  <button class="category-tablinks product-detail-tab" data-target="Description">Description</button>
                  <button class="category-tablinks product-detail-tab" data-target="Fabric-Estimator">Fabric Estimator</button>
                  <button class="category-tablinks product-detail-tab" data-target="Shipping">Shipping</button>
                  <button class="category-tablinks product-detail-tab" data-target="Wash-care">Wash care</button>
                </div>

                <div id="Description" class="category-tabcontent product-details-content-show">
                  <h6>Description</h6>
                  <p>Elevate your wardrobe creations with our high-quality denim fabric featuring intricate embroidery work. Crafted for versatility and durability, this fabric is ideal for designing a wide range of garments — from stylish kurtis, trendy tops, and classic shirts to chic bottom wear. Whether you're creating casual everyday looks or statement pieces, this fabric blends comfort with craftsmanship to ensure stunning results every time.</p>
                  <h6>Product Details</h6>
                  <p><b>Width :</b> Approx. 270 grams per meter.</p>
                  <p><b>Color :</b> Blue</p>
                  <p><b>Material :</b> silk</p>
                  <p><b>Quality :</b> Polyester </p>
                  <p><b>Wash care :</b> Hand wash or machine wash in cold water, avoid bleach, air dry, and iron on low if needed</p>
                </div>

                <div id="Fabric-Estimator" class="category-tabcontent product-details-content-show">
                  fabric
                </div>

                <div id="Shipping" class="category-tabcontent product-details-content-show">
                  shipping
                </div>
                <div id="Wash-care" class="category-tabcontent product-details-content-show">
                  Wash care
                </div>
              </div>


            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- ============================= You May Also Like ============================================= -->
    <section>
      <div class="container-fluid">
        <div class="product-new-arrival-heading mb-2">
          <h2>You may also like</h2>
        </div>
        <div class="row product-gap-space">
          <div class="col-md-3 col-6">
            <div class="category-container">
              <div class="category-main-container-show">
                <img src="https://cdn.shopify.com/s/files/1/0560/2227/0115/files/charumathi-500x500.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                  Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                  <a href="#">
                    <div class="view-cart-icons"><i class="bi bi-share-fill"></i></div>
                  </a>
                  <a href="#">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="{{url('cart')}}">
                  <div class="product-title">
                    Add to Cart
                  </div>
                </a>
              </div>


              <div class="category-heading-title-show">
                <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                <p>Rs. 1750.00 <span>Rs. 1950.00</span></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6">
            <div class="category-container">
              <div class="category-main-container-show">
                <img src="https://www.nihalfashions.com/media/catalog/product/cache/65345e2509ec259d7076b8990c2edf06/f/a/faux-georgette-green-salwar-kameez-nws-6906.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                  Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                  <a href="#">
                    <div class="view-cart-icons"><i class="bi bi-share-fill"></i></div>
                  </a>
                  <a href="#">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="{{url('cart')}}">
                  <div class="product-title">
                    Add to Cart
                  </div>
                </a>
              </div>


              <div class="category-heading-title-show">
                <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                <p>Rs. 1750.00 <span>Rs. 1950.00</span></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6">
            <div class="category-container">
              <div class="category-main-container-show">
                <img src="https://www.thegrandtrunkus.com/cdn/shop/products/RS017-20TA1-min.png?v=1679056223" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                  Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                  <a href="#">
                    <div class="view-cart-icons"><i class="bi bi-share-fill"></i></div>
                  </a>
                  <a href="#">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="{{url('cart')}}">
                  <div class="product-title">
                    Add to Cart
                  </div>
                </a>
              </div>


              <div class="category-heading-title-show">
                <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                <p>Rs. 1750.00 <span>Rs. 1950.00</span></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6">
            <div class="category-container">
              <div class="category-main-container-show">
                <img src="https://cdn.rajwadi.com/image/cache/data-2024/graceful-beige-heavy-embroidered-groom-sherwani-set-59169-800x1100.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                  Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                  <a href="#">
                    <div class="view-cart-icons"><i class="bi bi-share-fill"></i></div>
                  </a>
                  <a href="#">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="{{url('cart')}}">
                  <div class="product-title">
                    Add to Cart
                  </div>
                </a>
              </div>


              <div class="category-heading-title-show">
                <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                <p>Rs. 1750.00 <span>Rs. 1950.00</span></p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6">
            <div class="category-container">
              <div class="category-main-container-show">
                <img src="https://assets.lummi.ai/assets/QmatRLTjUfwK3Aag7AfgF8dfBRHg5PBr3F3WqCDjNwGKSP?auto=format&w=640" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                  Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                  <a href="#">
                    <div class="view-cart-icons"><i class="bi bi-share-fill"></i></div>
                  </a>
                  <a href="#">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="{{url('cart')}}">
                  <div class="product-title">
                    Add to Cart
                  </div>
                </a>
              </div>


              <div class="category-heading-title-show">
                <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                <p>Rs. 1750.00 <span>Rs. 1950.00</span></p>
              </div>
            </div>
          </div>


          <div class="col-md-3 col-6">
            <div class="category-container">
              <div class="category-main-container-show">
                <img src="https://5.imimg.com/data5/CE/IY/MY-62559418/dhoti-kurta-for-men.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                  Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                  <a href="#">
                    <div class="view-cart-icons"><i class="bi bi-share-fill"></i></div>
                  </a>
                  <a href="#">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="{{url('cart')}}">
                  <div class="product-title">
                    Add to Cart
                  </div>
                </a>
              </div>


              <div class="category-heading-title-show">
                <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                <p>Rs. 1750.00 <span>Rs. 1950.00</span></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>









@endsection