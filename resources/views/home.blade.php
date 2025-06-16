@extends('dashboard.layout.main')
@section('main-containers') 
 <!-- ===================================Banner Area============================================ -->
  <section class="banner-section-bg">
    <div class="banner-area-titles">
      <img src="{{url('assets/images/banner-title-image.png')}}" alt="icon" loading="lazy">
      <h1>Weaving Tradition, Crafting Style</h1>
      <p> Discover the finest handcrafted textiles that blend heritage and modern elegance.</p>
    </div>
    <div class="container-fluid">
      <div class="swiper banner-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#">
              <div class="banner-slide-container">
                <img src="https://plus.unsplash.com/premium_photo-1674747087104-516a4d6d316c?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZmFicmljfGVufDB8fDB8fHww" alt="banner-image" loading="lazy">
                <div class="icons-show">
                  <a href="{{url('cart')}}">
                    <div class="view-cart-icons"><i class="bi bi-cart4"></i></div>
                  </a>
                  <a href="{{url('product')}}">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="banner-slide-container">
                <img src="https://images.pexels.com/photos/4862928/pexels-photo-4862928.jpeg?cs=srgb&dl=pexels-karolina-grabowska-4862928.jpg&fm=jpg" alt="banner-image" loading="lazy">
                <div class="icons-show">
                  <a href="{{url('cart')}}">
                    <div class="view-cart-icons"><i class="bi bi-cart4"></i></div>
                  </a>
                  <a href="{{url('product')}}">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="banner-slide-container">
                <img src="https://images.pexels.com/photos/6331032/pexels-photo-6331032.jpeg?cs=srgb&dl=pexels-anete-lusina-6331032.jpg&fm=jpg" alt="banner-image" loading="lazy">
                <div class="icons-show">
                  <a href="{{url('cart')}}">
                    <div class="view-cart-icons"><i class="bi bi-cart4"></i></div>
                  </a>
                  <a href="{{url('product')}}">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="banner-slide-container">
                <img src="https://images.unsplash.com/photo-1518019671582-55004f1bc9ab?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZmFicmljfGVufDB8fDB8fHww" alt="banner-image" loading="lazy">
                <div class="icons-show">
                  <a href="{{url('cart')}}">
                    <div class="view-cart-icons"><i class="bi bi-cart4"></i></div>
                  </a>
                  <a href="{{url('product')}}">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="banner-slide-container">
                <img src="https://plus.unsplash.com/premium_photo-1674747087104-516a4d6d316c?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZmFicmljfGVufDB8fDB8fHww" alt="banner-image" loading="lazy">
                <div class="icons-show">
                  <a href="{{url('cart')}}">
                    <div class="view-cart-icons"><i class="bi bi-cart4"></i></div>
                  </a>
                  <a href="{{url('product')}}">
                    <div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div>
                  </a>
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
            </a>
          </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- --------------Contact-us Button------------------ -->

    <a href="#"><div class="text-end"><button class="sticky-contact-us-container"><i class="bi bi-whatsapp"></i> Contact Us</button></div></a>
  </section>

  <!-- ================================= Category Tabs========================================================= -->
 <section class="category-main-container">
       <div class="tab-group">
    <div class="category-tab">
  <button class="category-tablinks" data-target="Fabric">Fabric</button>
  <button class="category-tablinks" data-target="Dress">Dress</button>
  <button class="category-tablinks" data-target="Cultural">Cultural Attire</button>

</div>

  <div id="Fabric" class="category-tabcontent">
  <div class="swiper category-tab-slider position-relative">
   <div class="swiper-navigation-horizontal">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

        <div class="swiper-wrapper mt-5">
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                    <div class="category-main-container-show">
                <img src="https://c4.wallpaperflare.com/wallpaper/497/838/353/fabric-glitter-red-folds-wallpaper-preview.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://img.freepik.com/premium-photo/denim-fabric_1001006-1041.jpg?semt=ais_hybrid&w=740" alt="banner-image" loading="lazy">
               <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
             <div class="category-container">
               <div class="category-main-container-show">
                <img src="https://i.pinimg.com/736x/9b/26/d1/9b26d1fdb0c537cd8cdfc546bd304ad8.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div>
              </a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://i.pinimg.com/736x/60/86/94/608694177543db604cec63cac415af60.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://www.hdwallpapers.in/download/grey_satin_texture_silk_fabric_hd_gray-2560x1440.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
                </div>
              </div>
            </a>
          </div>
        </div>

       
      </div>
</div>

<div id="Dress" class="category-tabcontent">
 <div class="swiper category-tab-slider position-relative">
   <div class="swiper-navigation-horizontal">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

        <div class="swiper-wrapper mt-5">
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                    <div class="category-main-container-show">
                <img src="https://c4.wallpaperflare.com/wallpaper/497/838/353/fabric-glitter-red-folds-wallpaper-preview.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://img.freepik.com/premium-photo/denim-fabric_1001006-1041.jpg?semt=ais_hybrid&w=740" alt="banner-image" loading="lazy">
               <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
             <div class="category-container">
               <div class="category-main-container-show">
                <img src="https://i.pinimg.com/736x/9b/26/d1/9b26d1fdb0c537cd8cdfc546bd304ad8.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div>
              </a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://i.pinimg.com/736x/60/86/94/608694177543db604cec63cac415af60.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://www.hdwallpapers.in/download/grey_satin_texture_silk_fabric_hd_gray-2560x1440.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
                </div>
              </div>
            </a>
          </div>
        </div>

       
      </div>
</div>

<div id="Cultural" class="category-tabcontent">
 <div class="swiper category-tab-slider position-relative">
   <div class="swiper-navigation-horizontal">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

        <div class="swiper-wrapper mt-5">
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                    <div class="category-main-container-show">
                <img src="https://c4.wallpaperflare.com/wallpaper/497/838/353/fabric-glitter-red-folds-wallpaper-preview.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://img.freepik.com/premium-photo/denim-fabric_1001006-1041.jpg?semt=ais_hybrid&w=740" alt="banner-image" loading="lazy">
               <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
             <div class="category-container">
               <div class="category-main-container-show">
                <img src="https://i.pinimg.com/736x/9b/26/d1/9b26d1fdb0c537cd8cdfc546bd304ad8.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div>
              </a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://i.pinimg.com/736x/60/86/94/608694177543db604cec63cac415af60.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
              </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                 <div class="category-main-container-show">
                <img src="https://www.hdwallpapers.in/download/grey_satin_texture_silk_fabric_hd_gray-2560x1440.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                 <a href="#"><div class="product-title">
                  Lorem, ipsum dolor.
                </div></a>
                </div>
              </div>
            </a>
          </div>
        </div>

       
      </div>
</div>
</div>

 </section>
 
 <!-- =====================================Special Offers=============================================================== -->
  <section>
      <div class="container-fluid mt-4">
      <div class="swiper special-offer-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div>
              <img src="./assets/images/offer-1.png" alt="offers" class="special-offer-banner-img" loading="lazy">
             <div class="clipboard-icon-box" onclick="copyToClipboard()"><i class="bi bi-clipboard2-fill"></i></div>
             <div id="copyText" class="copy-text-clipboard">hello, there</div>
              <div id="copyPopup" class="copy-popup">copied!</div>
            </div>
          </div>
          <div class="swiper-slide">
             <div><img src="./assets/images/offer-2.png" alt="offers" class="special-offer-banner-img" loading="lazy"></div>
        <div class="clipboard-icon-box" onclick="copyToClipboard()"><i class="bi bi-clipboard2-fill"></i></div>
             <div id="copyText" class="copy-text-clipboard">hello, there</div>
              <div id="copyPopup" class="copy-popup">copied!</div>
            </div>
          <div class="swiper-slide">
          <div><img src="./assets/images/offer-3.png" alt="offers" class="special-offer-banner-img" loading="lazy"></div>
          <div class="clipboard-icon-box" onclick="copyToClipboard()"><i class="bi bi-clipboard2-fill"></i></div>
             <div id="copyText" class="copy-text-clipboard">hello, there</div>
              <div id="copyPopup" class="copy-popup">copied!</div>
        </div>
          <div class="swiper-slide">
           <div><img src="./assets/images/offer-4.png" alt="offers" class="special-offer-banner-img" loading="lazy"></div>
         <div class="clipboard-icon-box" onclick="copyToClipboard()"><i class="bi bi-clipboard2-fill"></i></div>
             <div id="copyText" class="copy-text-clipboard">hello, there</div>
              <div id="copyPopup" class="copy-popup">copied!</div>
          </div>
          <div class="swiper-slide">
            <div><img src="./assets/images/offer-2.png" alt="offers" class="special-offer-banner-img" loading="lazy"></div>
         <div class="clipboard-icon-box" onclick="copyToClipboard()"><i class="bi bi-clipboard2-fill"></i></div>
             <div id="copyText" class="copy-text-clipboard">hello, there</div>
              <div id="copyPopup" class="copy-popup">copied!</div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>

  
  </section>
 <!-- ====================================== Timeless Elegance======================================================== -->
  <section class="timeless-elegance-container">
    <div><img src="./assets/images/main-bg-image.png" alt="background" class="elegance-bg-image-show"></div>
    <div class="container-fluid">
      <h2>The Fabric of Timeless Elegance</h2>
      <p>Discover premium fabrics crafted with passion and precision.</p>

      <div class="tab-group">
          <div class="category-tab tab-buttons">
  <button class="category-tablinks" data-target="cotton-fabric">Cotton Fabric</button>
  <button class="category-tablinks" data-target="banarasi">Banarasi brocade</button>
  <button class="category-tablinks" data-target="embroidery">Embroidery Fabric</button>
  <button class="category-tablinks" data-target="dyeable">Dyeable Fabric</button>
    <button class="category-tablinks" data-target="printed">Printed Fabric</button>
</div>

  <div id="cotton-fabric" class="category-tabcontent">
  <div class="swiper category-tab-slider position-relative">
   <div class="swiper-navigation-horizontal">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

        <div class="swiper-wrapper mt-5">
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://shobhini.in/wp-content/uploads/2024/01/IMG_2879.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://fabricdekho.com/cdn/shop/products/O-01384.jpg?v=1661358613" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://saroj.in/cdn/shop/files/WhatsAppImage2024-02-15at4.57.23PM.jpg?v=1728308817" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://fabricdekho.com/cdn/shop/products/FabricDekho-SS-0923.jpg?v=1667544020" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://i.etsystatic.com/8319858/r/il/f1f70e/1884271947/il_570xN.1884271947_jfbj.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
        </div>

       
      </div>
</div>

  <div id="banarasi" class="category-tabcontent">
   banarasi
  </div>

    <div id="embroidery" class="category-tabcontent">
  Embroidery Fabric
  </div>

    <div id="dyeable" class="category-tabcontent">
   Dyeable Fabric
  </div>

    <div id="printed" class="category-tabcontent">
  Printed Fabric
  </div>

</div>
    </div>
  </section>

   <!-- ====================================== Dresses Make Statement======================================================== -->
  <section class="timeless-elegance-container">
    <div class="container-fluid">
      <h2>Dresses That Make a Statement</h2>
      <p>Discover timeless silhouettes crafted for every occasion.</p>

      <div class="tab-group">
          <div class="category-tab tab-buttons">
  <button class="category-tablinks" data-target="silk-saree">Pure Silk Sarees</button>
  <button class="category-tablinks" data-target="sarees">Sarees</button>
</div>

  <div id="silk-saree" class="category-tabcontent">
  <div class="swiper category-tab-slider position-relative">
   <div class="swiper-navigation-horizontal">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

        <div class="swiper-wrapper mt-5">
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://us.anitadongre.com/dw/image/v2/BGCX_PRD/on/demandware.static/-/Sites-masterCatalog_AD_India/default/dw1672d763/images/hires/FW21/ad_br12_yellow_5.jpg?sw=1300&sh=1950&sm=fit&strip=false" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://www.karagiri.com/cdn/shop/files/BWVNT-5137-3.jpg?v=1702362877" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://img.faballey.com/images/Product/XSR02715Z/3.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://clothsvilla.com/cdn/shop/products/KPR-120-Wine_2_1024x1024.jpg?v=1698197010" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://maahishmati.com/cdn/shop/files/image_1635b5ec-d219-436d-b684-24af24523e87.jpg?v=1708185119&width=360" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
        </div>

       
      </div>
</div>

  <div id="sarees" class="category-tabcontent">
  sarees
  </div>
</div>
    </div>
  </section>

   <!-- ====================================== Cultural Elegance======================================================== -->
  <section class="timeless-elegance-container">
    <div><img src="./assets/images/main-bg-image.png" alt="background" class="elegance-bg-image-show"></div>
    <div class="container-fluid">
      <h2>The Art of Cultural Elegance</h2>
      <p>Explore handcrafted pieces inspired by age-old traditions.</p>

      <div class="tab-group">
          <div class="category-tab tab-buttons">
  <button class="category-tablinks" data-target="Lehengas">Lehengas</button>
  <button class="category-tablinks" data-target="Salwar-Kameez">Salwar Kameez</button>
  <button class="category-tablinks" data-target="Anarkali-Suits">Anarkali Suits</button>
  <button class="category-tablinks" data-target="KurtasandKurtis">Kurtas and Kurtis</button>
    <button class="category-tablinks" data-target="Sherwanis">Sherwanis</button>
    <button class="category-tablinks" data-target="DhotiandMundu">Dhoti and Mundu</button>
</div>

  <div id="Lehengas" class="category-tabcontent">
  <div class="swiper category-tab-slider position-relative">
   <div class="swiper-navigation-horizontal">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

        <div class="swiper-wrapper mt-5">
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://www.anantexports.in/cdn/shop/files/IMG-20240725-WA0243.jpg?v=1721938025" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://sareesbazaar.co.uk/cdn/shop/products/SB66_NityaV185_85001.jpg?v=1741262311" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://shanayaclothing.com/cdn/shop/files/141-_1.jpg?v=1725437223" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://textildealcdn.sgp1.cdn.digitaloceanspaces.com/uploads/SUKANYA-FASHION-ROYAL-COUPLE-VOL-2-KURTA-WITH-PANT-FOR-MEN-AND-KURTI-WITH-PANT-FOR-GIRL-FESTIVE-COLLECTION-12.jpg" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://faiscouture.com.pk/cdn/shop/files/Untitled-5-03.jpg?v=1699123569" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>
         <div class="swiper-slide">
             <a href="#">
              <div class="category-container">
                <div class="category-main-container-show">
               <img src="https://byhand.in/cdn/shop/files/w1-33.jpg?v=1722627001" alt="banner-image" loading="lazy">
                <div class="off-icons-show">
                 Sale<br>
                  10% OFF
                </div>
                <div class="view-share-menu">
                 <a href="#"><div class="view-cart-icons"><i class="bi bi-share-fill"></i></div></a>  
                 <a href="#"><div class="view-cart-icons mt-1"><i class="bi bi-eye-fill"></i></div></a> 
                </div>
                 <a href="{{url('cart')}}">
                  <div class="product-title">
                  Add to Cart
                </div></a>
                </div>
             

                <div class="category-heading-title-show">
                  <h3>Pure silk Handloom Banarasi brocade fabric 65 CM CUT</h3>
                  <p>Rs. 1750.00  <span>Rs. 1950.00</span></p>
                </div>
              </div>
            </a>
          </div>

        </div>

       
      </div>
</div>

  <div id="Salwar-Kameez" class="category-tabcontent">
   Salwar-Kameez
  </div>

    <div id="Anarkali-Suits" class="category-tabcontent">
  Anarkali-Suits
  </div>

    <div id="KurtasandKurtis" class="category-tabcontent">
   Kurtas and Kurtis
  </div>

    <div id="Sherwanis" class="category-tabcontent">
 Sherwanis
  </div>
    <div id="DhotiandMundu" class="category-tabcontent">
 Dhoti and Mundu
  </div>

</div>
    </div>
  </section>

   <!-- ====================================== Draped in Quality======================================================== -->

   <section class="draped-quality-container">
    <div><img src="./assets/images/draped-quality-bg.png" alt="background" class="draped-quality-bg"></div>
   <div class="container-fluid">
      <h2> Draped in Quality</h2>
      <p>Handpicked fabrics for every story you want to tell.</p>
  <div class="masonry-grid">
    <div class="image-wrapper">
        <img src="https://png.pngtree.com/background/20230525/original/pngtree-red-and-yellow-fabric-with-smooth-texture-picture-image_2728966.jpg" alt="Fabric 1" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>

    <div class="image-wrapper">
      <img src="https://www.tradeuno.com/cdn/shop/files/IMG_E6994.jpg?v=1711542193&width=1946" alt="fabric" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>

       <div class="image-wrapper">
      <img src="https://i.pinimg.com/736x/1c/0d/c8/1c0dc8e987a5be25aa5a5f555c4e350c.jpg" alt="fabric" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>
       <div class="image-wrapper">
      <img src="https://i.etsystatic.com/24418061/r/il/26c6c4/5636279944/il_570xN.5636279944_2szi.jpg" alt="fabric" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>
       <div class="image-wrapper">
      <img src="https://images.meesho.com/images/products/274935209/lml2l_512.webp" alt="fabric" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>
       <div class="image-wrapper">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjO6QoWKq6IEojfpjld3V3Lmaf0aMR0G4U8w&s" alt="fabric" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>
       <div class="image-wrapper">
      <img src="https://img.freepik.com/premium-photo/close-up-silk-fabric-with-black-background_887562-1571.jpg" alt="fabric" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>
       <div class="image-wrapper">
      <img src="https://w0.peakpx.com/wallpaper/894/645/HD-wallpaper-red-fabric-texture-red-polyester-texture-fabric-red-fabric-background-polyester.jpg" alt="fabric" loading="lazy">
      <a href="#" target="_blank" class="instagram-icon">
       <i class="bi bi-instagram"></i>
      </a>
    </div>
  </div>
   </div>
   </section>

   <!-- =========================Exploring Fabrics================================================ -->
     <section class="timeless-elegance-container mt-5 position-static">
      <div class="container-fluid">
        <div class="position-relative">
         <h2>Exploring the World of Fabrics</h2>
         <div class="row">
          <div class="col-md-3 mt-3">
             <div><img src="./assets/images/fabrics-img.png" alt="image" class="explore-fabric-box-img" loading="lazy"></div>
          </div>
          <div class="col-md-9 mt-3">
            <div class="explore-fabric-details">
             <h4>Threads That Inspire</h4>
             <p>Our fabrics are woven with care, bringing together tradition and modern innovation. Whether it's the rich texture of handwoven linen, the vibrant hues of pure silk, or the versatile comfort of cotton, each piece is a testament to quality and craftsmanship.</p>
            </div>
          </div>


          <div class="col-md-3 mt-3">
             <div><img src="./assets/images/fabrics-img1.png" alt="image" class="explore-fabric-box-img" loading="lazy"></div>
          </div>
          <div class="col-md-9 mt-3">
            <div class="explore-fabric-details">
             <h4>Threads That Inspire</h4>
             <p>Our fabrics are woven with care, bringing together tradition and modern innovation. Whether it's the rich texture of handwoven linen, the vibrant hues of pure silk, or the versatile comfort of cotton, each piece is a testament to quality and craftsmanship.</p>
            </div>
          </div>

          <div class="col-md-3 mt-3">
             <div><img src="./assets/images/fabrics-img-2.png" alt="image" class="explore-fabric-box-img" loading="lazy"></div>
          </div>
          <div class="col-md-9 mt-3">
            <div class="explore-fabric-details">
             <h4>Threads That Inspire</h4>
             <p>Our fabrics are woven with care, bringing together tradition and modern innovation. Whether it's the rich texture of handwoven linen, the vibrant hues of pure silk, or the versatile comfort of cotton, each piece is a testament to quality and craftsmanship.</p>
            </div>
          </div>
         </div>
      </div>
      </div>
      <div class="view-more-btn-background text-center">
          <button class="explore-fabric-view-btn">View More</button>
        </div>
     </section>

     <!-- ======================================Testimonial============================================================ -->
    <section class="mb-3 timeless-elegance-container">
          <div><img src="./assets/images/main-bg-image.png" alt="background" class="elegance-bg-image-show"></div>
    <div class="container-fluid">
      <h2>What Our Customer's Say</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, soluta.</p>

      <div class="container-fluid">
          <div class="swiper testimonial-slider">
          
        <div class="swiper-wrapper">
    @foreach($testimonials as $testimonial)
    

        <div class="swiper-slide">
            <div class="testimonial-container-box">
                <i class="bi bi-quote"></i>
                <p>{{ $testimonial->description }}</p>

                <div class="dotted-line"></div>
                <div>
                    <div>
                        <img src="{{url('uploads/'.$testimonial->image)}}" alt="user" class="user-image">
                    </div>
                    <div class="user-name">{{ $testimonial->name }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>

      </div>

      </div>
    </section>



@endsection