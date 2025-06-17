          <!-- ===========================Offcanvas======================================== -->
  <div id="offcanvasContainer"></div>


  
  <!-- ==============================Footer================================================== -->
      <footer class="footer-background">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="text-center"><img src="{{url('assets/images/main-footer-logo.png')}}" alt="logo" class="main-footer-logo-img"></div>
             <form action="" style="position: relative;">
              <input type="text" class="footer-input-box" placeholder="Enter your email">
               <i class="bi bi-send-fill footer-send-btn"></i>
             </form>
            </div>
            <div class="col-md-2 col-6">
              <h5 class="footer-title">Fabric</h5>
              <ul class="footer-main-list">
                <li><a href="#">Cotton Fabric</a></li>
                 <li><a href="#">Cotton Fabric</a></li>
              <li><a href="#">Cotton Fabric</a></li>
                  <li><a href="#">Cotton Fabric</a></li>
                   <li><a href="#">Cotton Fabric</a></li>
              </ul>
            </div>

             <div class="col-md-2 col-6">
              <h5 class="footer-title">Dress</h5>
              <ul class="footer-main-list">
                <li><a href="#">Cotton Fabric</a></li>
                <li><a href="#">Cotton Fabric</a></li>
                 <li><a href="#">Cotton Fabric</a></li>
                  <li><a href="#">Cotton Fabric</a></li>
                   <li><a href="#">Cotton Fabric</a></li>
              </ul>
            </div>

             <div class="col-md-3 col-6">
              <h5 class="footer-title">Cultural Attire</h5>
              <ul class="footer-main-list">
                <li><a href="#">Cotton Fabric</a></li>
                <li><a href="#">Cotton Fabric</a></li>
                 <li><a href="#">Cotton Fabric</a></li>
                  <li><a href="#">Cotton Fabric</a></li>
                   <li><a href="#">Cotton Fabric</a></li>
              </ul>
            </div>

            <div class="col-md-1 col-6 mt-3">
             <a href="#"><div class="social-icons-show"><i class="bi bi-facebook"></i></div></a> 
             <a href="#"><div class="social-icons-show"><i class="bi bi-instagram"></i></div></a>
             <a href="#"><div class="social-icons-show"><i class="bi bi-youtube"></i></div></a>
             <a href="#"><div class="social-icons-show"><i class="bi bi-pinterest"></i></div></a>
            </div>

          </div>
        </div>
        <hr>
       <div class="text-center copy-right-text"><small>@Copyright 2025. All rights reserved by <a href="#">Rati Care</a></small></div> 
      </footer>
 <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/js/script.js')}}"></script>

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
</body>

</html>