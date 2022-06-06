
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/')}}assets/img/favicon.png" rel="icon">
  <link href="{{asset('/')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.7.1
* Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">Logo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

       @include('admin.includes.header')

    </div>
</header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/mamun_with_laptob.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am Mamun Ar Rashid</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

   @include('admin.about.about')

 @include('admin.services.service')
    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

@include('admin.protfolio.protfolio')

 @include('admin.testimonials.testimonial')


 @include('admin.blog.blog')


  @include('admin.contact.contact')
  </main><!-- End #main -->

+
@include('admin.includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/')}}assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/typed.js/typed.min.js"></script>
  <script src="{{asset('/')}}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/')}}assets/js/main.js"></script>

</body>

</html>
