<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="">

  <title> Carint </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">


  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>



<style>
  .page-section {
    position: relative;
    padding-top: 40px;
    padding-bottom: 40px;
    color: #898798;
    overflow: hidden;
  }

  .page-banner {
    position: relative;

    color: #645F88;
    border-radius: 30px;
    z-index: 10;
  }

  .page-banner.home-banner {
    height: auto;
  }

  .page-banner.home-banner .img-fluid {
    max-width: 400px;
    margin: 0 auto;
  }

  .page-banner.home-banner .btn-scroll {
    position: absolute;
    bottom: -14px;
    left: 0;
    right: 0;
    margin: auto;
    width: 26px;
    height: 40px;
    line-height: 44px;
    background-color: #fff;
    color: #645F88;
    text-align: center;
    border-radius: 40px;
    box-shadow: 0 2px 6px rgba(100, 95, 136, 0.24);
    transition: all .2s ease;
  }

  .page-banner.home-banner .btn-scroll:hover {
    text-decoration: none;
    background-color: #009FE3;
    color: #fff;
  }

  @media (min-width: 768px) {
    .page-banner.home-banner {
      height: 540px;
    }

    .team {
      margin-top: 0px;
    }
  }

  @media (max-width: 768px) {

    .team {
      margin-top: -115px !important;
    }

    .page-section {

      padding-top: 0px;
    }
  }

  .team {

    margin-top: 435px;

  }

  .non {
    font-size: 15px;
  }


  .hero-wrap {
    width: 100%;
    height: 750px;
    position: inherit;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
  }

  @media (max-width: 1199.98px) {
    .hero-wrap {
      background-position: center center !important;
    }
  }

  .hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .3;
    background: #000000;
    height: 850px;
  }

  @media (max-width: 991.98px) {
    .hero-wrap {
      height: 1150px;
    }

    .hero-wrap .overlay {
      height: 1150px;
    }
  }

  .hero-wrap.hero-wrap-2 {
    height: 600px !important;
    position: relative;
  }

  .hero-wrap.hero-wrap-2 .overlay {
    width: 100%;
    opacity: .3;
    height: 600px;
  }

  .hero-wrap.hero-wrap-2 .slider-text {
    height: 600px !important;

  }

  .terme {
    font-size: 20px;

  }

  .accordion-button:focus {
    z-index: 3;
    outline: 0;
    box-shadow: 0 0 0.23rem #fc9400;
  }

  .accordion-button:not(.collapsed) {

    background-color: #fc9400;
    font-size: 15px;

    color: #ffffff;
  }

  .accordion-button:hover {
    z-index: 2;
  }

  .accordion-button:not(.collapsed) {
    color: var(--bs-accordion-active-color);
    box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    color: #ffffff;
  }

  .about_section .row {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .about_section .img-box img {
    width: 100%;
  }

  .about_section .detail-box {
    text-align: center;

  }

  .about_section .detail-box h2 {
    font-weight: bold;
  }

  .about_section .detail-box p {
    margin-top: 15px;
  }

  .about_section .detail-box a {
    display: inline-block;
    padding: 8px 25px;
    background-color: #fc9400;
    color: #ffffff;
    border-radius: 5px;
    border: 1px solid #fc9400;
    margin-top: 15px;
  }



  .about_section .detail-box a:hover {
    background-color: transparent;
    color: #fc9400;
  }

  .bute {
    font-size: 60px;
    color: #fc9400;
  }

  .offcanvas,
  .offcanvas-lg,
  .offcanvas-md,
  .offcanvas-sm,
  .offcanvas-xl,
  .offcanvas-xxl {
    --bs-offcanvas-width: 65%;
  }

  .page-banner {
    position: relative;
    margin-top: 180px;
    margin-bottom: 16px;
    height: 250px;
    color: #645F88;
    border-radius: 30px;
    z-index: 10;
  }

  .dggzscg {
    display: none;

  }

  @media (max-width: 779px) {
    .dggzscg {
      display: block;
      position: absolute;
      bottom: 0;
      margin-left: 28px;
    }

    .dggzscg a {
      padding-right: 30px;
      font-size: 25px;
      color: #fc9400;
    }
  }

  .mode {
    margin-top: 150px;
  }

  @media (max-width: 768px) {
    .mode {
      margin-top: 100px;
    }
  }


  .ftco-intro {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
    overflow: hidden;
    z-index: 0;
  }

  @media (min-width: 768px) {
    .ftco-intro .overlay {
      position: absolute;
      top: -120px;
      left: -100px;
      right: 0;
      bottom: -120px;
      width: 40%;
      content: '';
      opacity: 1;
      background: #01d28e;
      -ms-transform: rotate(20deg);
      /* IE 9 */
      -webkit-transform: rotate(20deg);
      /* Safari 3-8 */
      transform: rotate(20deg);
    }
  }



  .ftco-intro:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    background: #000000;
    z-index: -2;
    opacity: .3;
  }

  .ftco-section-parallax {
    position: relative;
  }

  .ftco-section-parallax .heading-section-white h2 {
    font-weight: 400 !important;
  }

  .ftco-degree-bg {
    position: relative;
  }

  .ftco-degree-bg:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -50px;
    overflow: visible;
    width: 100%;
    height: 120px;
    z-index: 0;
    -webkit-transform: skewY(-4deg);
    -moz-transform: skewY(-4deg);
    -ms-transform: skewY(-4deg);
    -o-transform: skewY(-4deg);
    transform: skewY(-4deg);
    background-color: #f8f9fa;
  }

  .button {
    height: 50px;
    width: 150px;
    text-align: center;
    padding-top: 10px;
    background-color: #fc9400;
    border: none;
  }

  .button:hover {
    background-color: white;
    color: #fc9400 !important;
    border: #fc9400 1px solid;

  }

  .slide {
    margin-top: 110px;
  }



  .btn-dark:hover {
    color: #fff !important;
    background-color: #fc9400;
    border-color: #fc9400;
  }

  .kids {
    display: flex;
    justify-content: flex-end;
  }

  .sdzd {

    color: #fc9400;
  }

  .sdzd:hover {
    color: #fc9400;

  }

  .header_top {
    display: block;
  }

  @media (max-width: 768px) {
    .header_top {
      display: none;
    }
  }

  .back-to-top {
  position: fixed;
  bottom: 20px;
  right: 25px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #808080;
  visibility: hidden;
  cursor: pointer;
  transition: all .2s ease;
  z-index: 1100;
}

.back-to-top::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  margin: -4px auto;
  width: 12px;
  height: 12px;
  border-top: 2px solid #555;
  border-right: 2px solid #555;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.back-to-top:hover {
  background: #fc9400;
}

.back-to-top:hover::after {
  border-color: #fff;
}


.social-media a {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 44px;
  text-align: center;
  border-radius: 50%;
  background-color: #fff;
  color: #fc9400;
  transition: all .2s linear;
}

.social-media a:hover {
  background-color: #fc9400;
  color: #fff;
  text-decoration: none;
  transform: rotate(360deg);
}
</style>

<body>
<div class="back-to-top"></div>

  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section fixed-top">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav ">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call :+ 229 67448799
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                atmaxtransport@gmail.com
              </span>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100064204742936">
              <i class="fa fa-facebook" aria-hidden="true"></i>

              <span>
                Facebook
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="/"><img src="/images/logo-atmax.png" alt="" width="220px" height="100px" style="margin-left: -34px;"></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
              <span class="oi oi-menu"></span>

            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/service">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/apropos"> A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/voiture">Nos voitures</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact">Contact</a>
                </li>
              </ul>
              <div class="info_social dggzscg">
              <a href="https://www.facebook.com/profile.php?id=100064204742936">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/maxime-atachi?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/max_euro_prod?utm_source=qr&igsh=M3NnMXlnanZwZzcz">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
                </a>
              </div>
            </div>


          </nav>

        </div>
      </div>

    </header>
  </div>

  <main>
    @yield('content')
  </main>



  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h5>
              Address
            </h5>
            <div class="contact_link_box">

              <a href="https://wa.me/0022940360670/?text=" style=" font-size: 13px;">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +22967448799/ +229097003728
                </span>
              </a>
              <a href="" style=" font-size: 13px;">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  atmaxtransport@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social social-media mt-4">
            <a href="https://www.facebook.com/profile.php?id=100064204742936">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/maxime-atachi?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/max_euro_prod?utm_source=qr&igsh=M3NnMXlnanZwZzcz">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h5>
              Information
            </h5>
            <p style=" font-size: 13px;">
              Nous offrons une grande variété de location de voiture à votre disposition, vous pouvez choisir entre les voitures économiques , les voitures de taille moyenne et les voitures familiales. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h5>
              Links
            </h5>
            <div class="info_links" style=" font-size: 13px;">
              <a class="active" href="/">
                <img src="images/nav-bullet.png" alt="">
                Accueil
              </a>
              <a class="" href="/apropos">
                <img src="images/nav-bullet.png" alt="">
                A propos
              </a>
              <a class="" href="/service">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="/voiture">
                <img src="images/nav-bullet.png" alt="">
                Nos voitures
              </a>
              <a class="" href="/contact">
                <img src="images/nav-bullet.png" alt="">
                Contact
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h5>
            Newsletter
          </h5>
          <form method="post" action="{{route('subscribe')}}" style=" font-size: 13px;">
            @csrf
            <input type="email" placeholder="Enter votre email" name="mail" />
            <button type="submit" style=" font-size: 13px;">
              S'abonner
            </button>
          </form>
        </div>
      </div>
    </div>


    <div class="container text-center mb-3">
      <p class="">
        &copy; <span id="displayYear"></span> Tout droits réservés,
        <a href="https://wa.me/0022995729634/?text=" class="sdzd">developpé par Safi & Freddy.</a>
        Propulsé par
        <a href="https://wa.me/0022940360670/?text=" class="sdzd">ATMAX-MULTISERVICES</a>
      </p>
    </div>

  </section>


  <!-- end info section -->

  <!-- footer section -->




  <script>




    document.addEventListener('DOMContentLoaded', function() {
      const navLinks = document.querySelectorAll('.nav-link');

      function setActiveLink() {
        const currentUrl = window.location.href;
        navLinks.forEach(function(link) {
          if (link.href === currentUrl) {
            link.parentElement.classList.add('active');
          } else {
            link.parentElement.classList.remove('active');
          }
        });
      }

      setActiveLink();

      window.addEventListener('popstate', setActiveLink);
    });
  </script>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- End Google Map -->
<script>
  $('document').ready(function() {
  // Back to top
  var backTop = $(".back-to-top");
  
  $(window).scroll(function() {
    if($(document).scrollTop() > 400) {
      backTop.css('visibility', 'visible');
    }
    else if($(document).scrollTop() < 400) {
      backTop.css('visibility', 'hidden');
    }
  });
  
  backTop.click(function() {
    $('html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});

</script>
</body>

</html>