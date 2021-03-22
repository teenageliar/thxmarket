    <!-- Swiper -->
	  <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(<?php echo base_url()?>asset/image/img.jpg)">
          <img src="<?php echo base_url()?>asset/image/logo.png" alt="">
        </div>
        <div class="swiper-slide" style="background-image:url(<?php echo base_url()?>asset/image/img2.jpg)">
      </div>
	  </div>
  </div>

    <br>

    <div class="warning">
      <img src="img/warning.png" alt="">
      <img src="img/warning2.png" alt="">
      <img src="img/warning3.png" alt="">
    </div>

    <br>

    <div class="container-fluid py-5" id="ourPartners">
    <div class="container my-5rem">
      <h1 class="main-title text-center">OUR PARTNERS</h1>
      <div class="col-md-12 pt-4">
          <p class="text-center font-weight-bold text-light">Community Partner</p>
      </div>
      <div class="col-md-12">
          <div class="row">
              <div class="col-md-2 col-4 mx-auto"><img src="images/roadster.png" class="w-100"></div>                              
          </div>
      </div>
      <div class="col-md-12 pt-4">
          <p class="text-center font-weight-bold text-light">Manufacturer Partners</p>
      </div>
      <div class="col-md-12">
          <div class="row">
              <div class="col-md-2 col-4 ml-auto"><img src="images/HD.png" class="w-100"></div>
              <div class="col-md-2 col-4"><img src="images/kym.png" class="w-100"></div>
              <div class="col-md-2 col-4 mr-auto"><img src="images/orxa.png" class="w-100"></div>
          </div>
      </div>
      <div class="col-md-12 pt-5">
          <div class="row">
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Accessories Partner</p>
                  <img src="images/givi.png" class="w-100">
              </div>
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Automotive Media Partner</p>
                  <img src="images/autocar.png" class="w-100">
              </div>
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Bike Magazine Partner</p>
                  <img src="images/bikeindia.png" class="w-100">
              </div>
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Event Promoted By</p>
                  <img src="images/70EMG.png" class="w-100">
              </div>
          </div>
      </div>
      <div class="col-md-12 pt-5">
          <div class="row">
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Safety Partner </p>
                  <img src="images/IBW 2019 Sponsor panel - FINAL PRINT-03.png" class="w-100">
              </div>
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Digital Partner</p>
                  <img src="images/IBW 2019 Sponsor panel - FINAL PRINT-06.png" class="w-100">
              </div>
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Grooming Partner</p>
                  <img src="images/IBW 2019 Sponsor panel - FINAL PRINT-04.png" class="w-100">
              </div>
              <div class="col-md-2 col-6 pt-4 md-pt-0 mx-auto">
                  <p class="text-center font-weight-bold text-light">Radio Partner</p>
                  <img src="images/IBW 2019 Sponsor panel - FINAL PRINT-07.png" class="w-100">
              </div>
          </div>
      </div>
    </div>
    </div>

    <br>

    <footer>
    <div class="col-md-12 text-center my-4">
      <ul class="social-link">
          <li><a href="https://www.facebook.com/indiabikeweek/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/indiabikeweek/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/indiabikeweek/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
      <p class="text-center text-light">Copyright THX MARKET 2021</p>
    </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
  	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  	<!-- Initialize Swiper -->
	  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      effect: 'fade',
      speed: 2000,
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    </script>

	  <script>
      $(window).scroll(function() {
          $('nav').toggleClass('scrolled', $(this).scrollTop() > 450);
      });
    </script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>