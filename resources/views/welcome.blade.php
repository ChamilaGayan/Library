@extends('layouts.app')

@section('content')
{{-- <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Library System</h3>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  Content here
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
     
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Library System.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.min.js"></script>
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script> --}}




















  <main id="main">

    <div class="site-section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          </div>
          <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" >
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Maya and the Dragon</h3>
                <span>by Seeta Siriwardena</span>
              </div>
              <img class="img-fluid" src="img/1.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Theory Of Music</h3>
                <span>Theory Of Music</span>
              </div>
              <img class="img-fluid" src="img/2.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>My Favourite Work Book</h3>
                <span>by Swarna Gurusinghe</span>
              </div>
              <img class="img-fluid" src="img/3.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Writing is Fun Numbers</h3>
                <span>by Swarna Gurusinghe</span>
              </div>
              <img class="img-fluid" src="img/4.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>My Favourite songs Book</h3>
                <span>by Swarna Gurusinghe</span>
              </div>
              <img class="img-fluid" src="img/5.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Disney Jungle </h3>
                <span>by Imaaya Perera</span>
              </div>
              <img class="img-fluid" src="img/6.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Force Of Will : Pirates</h3>
                <span>by T. T. Sutherland</span>
              </div>
              <img class="img-fluid" src="img/7.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Kick up some Moon Dust</h3>
                <span>by M T L Ebell, Nadishka</span>
              </div>
              <img class="img-fluid" src="img/8.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Chain of Iron</h3>
                <span>by Cassandra Clare</span>
              </div>
              <img class="img-fluid" src="img/9.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="{{ route('login') }}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Kensukes Kingdom</h3>
                <span>by Michael Morpurgo</span>
              </div>
              <img class="img-fluid" src="img/10.jpg">
            </a>
          </div>

        </div>
      </div>
    </div>
  </main>
  

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
@endsection
