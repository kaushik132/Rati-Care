 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ==========================Bootstrap================================== -->
  <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
  <!-- ==========================Icons============================================== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- ========================Custom CSS============================================ -->
  <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
   <link rel="stylesheet" href="{{url('assets/css/product.css')}}">
  <title>Home Page</title>
</head>

<body>
  <!-- ============================Header=================================== -->
  <header class="nav-container">
    <div class="nav-logo">
      <a href="/"><img src="{{url('assets/images/header-logo.png')}}" alt="logo" /></a>
    </div>

    <!-- MOBILE: Menu + Icons -->
    <div class="mobile-icons">
      <a href="#"><span class="nav-apply-btn"><i class="bi bi-telephone-fill"></i></span></a>
      <a href="#"><span class="nav-apply-btn"><i class="bi bi-cart4"></i></span></a>
      <a href="#"><span class="nav-apply-btn"><i class="bi bi-person-fill"></i></span></a>
      <i class="bi bi-grid-fill open-menu"></i>
    </div>

    <div class="background"></div>

    <!-- NAVIGATION -->
    <div class="nav-link-container">
      <i class="bi bi-x-circle close-menu"></i>
      <ul class="nav-links">
        <li class="nav-link-item"><a href="/">Home</a></li>

        <!-- Desktop Mega Menu -->
        <li class="nav-link-item has-mega desktop-only">
          <a href="#">Fabric<i class="bi bi-chevron-down"></i></a>
          <div class="mega-menu">
            <div class="mega-column titles">
              <ul>
                <li data-id="fabric" class="active">Fabric</li>
                <li data-id="dress">Dress</li>
                <li data-id="attire">Cultural Attire</li>
              </ul>
            </div>
            <div class="mega-column content">
              <div class="mega-content active" id="fabric">
                <a href="#">Cotton</a>
                <a href="#">Silk</a>
                <a href="#">Linen</a>
                
              </div>
              <div class="mega-content" id="dress">
                <a href="#">Casual</a>
                <a href="#">Party Wear</a>
                <a href="#">Formal</a>
              </div>
              <div class="mega-content" id="attire">
                <a href="#">Saree</a>
                <a href="#">Kimono</a>
                <a href="#">Dashiki</a>
              </div>
            </div>
          </div>
        </li>

        <!-- Mobile Accordion Mega Menu -->
        <li class="nav-link-item mobile-dropdown mobile-only">
          <div class="dropdown-title">Fabric<i class="bi bi-chevron-down"></i></div>
          <ul class="dropdown-content">
            <li><a href="#">Cotton</a></li>
            <li><a href="#">Silk</a></li>
            <li><a href="#">Linen</a></li>
            <li><a href="#">Casual</a></li>
            <li><a href="#">Party Wear</a></li>
            <li><a href="#">Formal</a></li>
            <li><a href="#">Saree</a></li>
            <li><a href="#">Kimono</a></li>
            <li><a href="#">Dashiki</a></li>
          </ul>
        </li>

        <!-- Desktop Mega Menu -->
        <li class="nav-link-item has-mega desktop-only">
          <a href="#">Dress<i class="bi bi-chevron-down"></i></a>
          <div class="mega-menu">
            <div class="mega-column titles">
              <ul>
                <li data-id="dress1" class="active">Dress</li>
                <li data-id="dress2">Dress</li>
                <li data-id="dress3">Cultural Attire</li>
              </ul>
            </div>
            <div class="mega-column content">
              <div class="mega-content active" id="dress1">
                <a href="#">Cotton</a>
                <a href="#">Silk</a>
                <a href="#">Linen</a>
              </div>
              <div class="mega-content" id="dress2">
                <a href="#">Casual</a>
                <a href="#">Party Wear</a>
                <a href="#">Formal</a>
              </div>
              <div class="mega-content" id="dress3">
                <a href="#">Saree</a>
                <a href="#">Kimono</a>
                <a href="#">Dashiki</a>
              </div>
            </div>
          </div>
        </li>

        <!-- Mobile Accordion Mega Menu -->
        <li class="nav-link-item mobile-dropdown mobile-only">
          <div class="dropdown-title">Dress<i class="bi bi-chevron-down"></i></div>
          <ul class="dropdown-content">
            <li><a href="#">Cotton</a></li>
            <li><a href="#">Silk</a></li>
            <li><a href="#">Linen</a></li>
            <li><a href="#">Casual</a></li>
            <li><a href="#">Party Wear</a></li>
            <li><a href="#">Formal</a></li>
            <li><a href="#">Saree</a></li>
            <li><a href="#">Kimono</a></li>
            <li><a href="#">Dashiki</a></li>
          </ul>
        </li>

        <!-- Desktop Mega Menu -->
        <li class="nav-link-item has-mega desktop-only">
          <a href="#">Cultural Attire<i class="bi bi-chevron-down"></i></a>
          <div class="mega-menu">
            <div class="mega-column titles">
              <ul>
                <li data-id="attire1" class="active">Fabric</li>
                <li data-id="attire2">Dress</li>
                <li data-id="attire3">Cultural Attire</li>
              </ul>
            </div>
            <div class="mega-column content">
              <div class="mega-content active" id="attire1">
                <a href="#">Cotton</a>
                <a href="#">Silk</a>
                <a href="#">Linen</a>
              </div>
              <div class="mega-content" id="attire2">
                <a href="#">Casual</a>
                <a href="#">Party Wear</a>
                <a href="#">Formal</a>
              </div>
              <div class="mega-content" id="attire3">
                <a href="#">Saree</a>
                <a href="#">Kimono</a>
                <a href="#">Dashiki</a>
              </div>
            </div>
          </div>
        </li>

        <!-- Mobile Accordion Mega Menu -->
        <li class="nav-link-item mobile-dropdown mobile-only">
          <div class="dropdown-title">Cultural Attire<i class="bi bi-chevron-down"></i></div>
          <ul class="dropdown-content">
            <li><a href="#">Cotton</a></li>
            <li><a href="#">Silk</a></li>
            <li><a href="#">Linen</a></li>
            <li><a href="#">Casual</a></li>
            <li><a href="#">Party Wear</a></li>
            <li><a href="#">Formal</a></li>
            <li><a href="#">Saree</a></li>
            <li><a href="#">Kimono</a></li>
            <li><a href="#">Dashiki</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- Desktop Right Icons -->
    <ul class="nav-links">
      <li class="nav-link-item desktop-apply-btn">
        <a href="#"><span class="nav-apply-btn"><i class="bi bi-telephone-fill"></i></span></a>
      </li>
      <li class="nav-link-item desktop-apply-btn">
        <a href="#"><span class="nav-apply-btn"><i class="bi bi-cart4"></i></span></a>
      </li>
      <li class="nav-link-item desktop-apply-btn">
        <a href="#"><span class="nav-apply-btn"><i class="bi bi-person-fill"></i></span></a>
      </li>
    </ul>
  </header>