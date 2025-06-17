<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="{{url('dashboard-css/style.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>Dashboard</title>
</head>
<body>
    <!-- ============================Header=================================== -->
 <header class="nav-container">
    <div class="nav-logo">
      <a href="{{url('index')}}"><img src="{{url('dashboard-images/header-logo.png')}}" alt="logo" /></a>
    </div>

    <!-- MOBILE: Menu + Icons -->
    <div class="mobile-icons">
      <a class="open-offcanvas"><span class="nav-apply-btn"><i class="bi bi-cart4"></i></span></a>
      <a href="#"><span class="nav-apply-btn"><i class="bi bi-person-fill"></i></span></a>
      <i class="bi bi-grid-fill open-menu"></i>
    </div>

    <div class="background"></div>

    <!-- NAVIGATION -->
    <div class="nav-link-container">
      <i class="bi bi-x-circle close-menu"></i>
      <ul class="nav-links">
        <li class="nav-link-item"><a href="{{url('/')}}">Home</a></li>

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
         <a class="open-offcanvas"><span class="nav-apply-btn"><i class="bi bi-cart4"></i></span></a>
      </li>
      <li class="nav-link-item desktop-apply-btn">
        <a href="#"><span class="nav-apply-btn"><i class="bi bi-person-fill"></i></span></a>
      </li>
    </ul>
  </header>
  
  <div class="dashboard-menu-icon-show" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
      <i class="bi bi-list"></i>
</div>

  <div class="container-fluid">
    <div class="row">
      
      <!-- Sidebar for Desktop -->
      <div class="col-md-2 d-none d-md-block sidebar-desktop">
        <a class="nav-link custom-sidebar-link active" href="{{url('index')}}">User Profile</a>
        <a class="nav-link custom-sidebar-link" href="{{url('orders')}}">My Cart</a>
        <a class="nav-link custom-sidebar-link" href="{{url('address')}}">Your Address</a>
        <a class="nav-link custom-sidebar-link" href="{{url('support')}}">Help & Support</a>
        <a class="nav-link custom-sidebar-link logout-show"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </div>




      <!-- Offcanvas Sidebar for Mobile -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Dashboard</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <a class="nav-link custom-sidebar-link active" href="index.html">User Profile</a>
      <a class="nav-link custom-sidebar-link" href="orders.html">My Cart</a>
      <a class="nav-link custom-sidebar-link" href="address.html">Your Address</a>
      <a class="nav-link custom-sidebar-link" href="support.html">Help & Support</a>
      <a class="nav-link custom-sidebar-link logout-show"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{url('dashboard-js/script.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
  
</body>
</html>