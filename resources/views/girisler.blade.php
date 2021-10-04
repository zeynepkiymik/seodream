
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>SEO Dream - Creative SEO HTML5 Template by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>SEO Dream <img src="assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ route('homepage') }}" class="active">ANASAYFA</a></li>
              <li class="scroll-to-section"><a href="{{ route('girisler') }}">GİRİŞLER</a></li>
              <li class="scroll-to-section"><a href="#about">ÇIKIŞLAR</a></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


  <div class="header-button">

                   <table border="1" class="table ">

                     <tr>
                        <td> NO </td>
                        <td> TC </td>
                        <td> TYPE </td>
                        <td> ZAMAN </td>
                      </tr>

                     @foreach ($pdksz as $key => $value)
                       <tr>
                     <td> {{$key+1 }} :</td>
                     <td>  {{ $value->tc }}</td>
                     <td>  {{ $value->type }}</td>
                     <td>  {{ $value->tarih }}</td>
                       </tr>
                     @endforeach

                   </table>
                 </div>


  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>SEO &amp; Digital Marketing Agency</h2>
                  </div>

                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="tc" id="tc" placeholder="TC Giriniz" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <div class="main-green-button scroll-to-section">
                      <a href="#contact">GİRİŞ</a>
                    </div>
                  </div>
                  <br><br>
                  <hr>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="tc" id="tc" placeholder="TC Giriniz" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <div class="main-green-button scroll-to-section">
                      <a href="#contact">ÇIKIŞ</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021

          <br>Web Designed by <a rel="nofollow" href="#" title="free CSS templates"></a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>
