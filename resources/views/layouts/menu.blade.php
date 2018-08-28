<!DOCTYPE html>
<html lang="fr" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rikudo Technologies</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/logo-sm.jpg" type="image/x-icon">
        <title>Rikudotech</title>
        <meta name="keywords" content="Faire son site web, convevoir son site internet, agence web, développer son site web, développer application" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="/rikudotech/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/rikudotech/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="/rikudotech/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="/rikudotech/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="/rikudotech/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="/rikudotech/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="/rikudotech/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="/rikudotech/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/rikudotech/css/global/global.css" rel="stylesheet" type="text/css"/>

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

      <!--========== HEADER ==========-->
      <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
          <!-- Navbar -->
          <div class="s-header__navbar">
              <div class="s-header__container">
                  <div class="s-header__navbar-row">
                      <div class="s-header__navbar-row-col">
                          <!-- Logo -->
                          <div class="s-header__logo">
                              <a href="/" class="s-header__logo-link">
                                  <img class="s-header__logo-img s-header__logo-img-default" width="150" src="/rikudotech/img/rik/logo.png" alt="Rikudo Technologies Logo">
                                  <img class="s-header__logo-img s-header__logo-img-shrink" width="150" src="/rikudotech/img/rik/logo-dark.webp" alt="Rikudo Technologies Logo">
                              </a>
                          </div>
                          <!-- End Logo -->
                      </div>
                      <div class="s-header__navbar-row-col">
                          <!-- Trigger -->
                          <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                              <span class="s-header__trigger-icon"></span>
                              <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                  <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                              </svg>
                          </a>
                          <!-- End Trigger -->
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Navbar -->

          <!-- Overlay -->
          <div class="s-header-bg-overlay js__bg-overlay">
              <!-- Nav -->
              <nav class="s-header__nav js__scrollbar">
                  <div class="container-fluid">
                      <!-- Menu List -->
                      <ul class="list-unstyled s-header__nav-menu">
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/dev">Développment web et mobile</a></li>
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/ref">Référencement et SEO</a></li>
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/team">Equipe</a></li>
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/services">Services</a></li>
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/events">Evénements</a></li>
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/#contact">Contactez nous</a></li>
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/support">Support</a></li>
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/pagepayment">Faire un paiement</a></li>
                      </ul>
                      <!-- End Menu List -->
                  </div>
              </nav>
              <!-- End Nav -->

              <!-- Action -->
              <ul class="list-inline s-header__action s-header__action--rb">
                  <li class="s-header__action-item">
                      <a class="s-header__action-link" href="https://www.facebook.com/davidyaoentrepreneur">
                          <i class="g-padding-r-5--xs ti-facebook"></i>
                          <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                      </a>
                  </li>
                  <li class="s-header__action-item">
                      <a class="s-header__action-link" href="https://twitter.com/DavidYao3">
                          <i class="g-padding-r-5--xs ti-twitter"></i>
                          <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                      </a>
                  </li>
              </ul>
              <!-- End Action -->
          </div>
          <!-- End Overlay -->
      </header>
      <!--========== END HEADER ==========-->

      @yield('content')

      <!--========== FOOTER ==========-->
      <footer class="g-bg-color--dark">
          <!-- Links -->
          <div class="g-hor-divider__dashed--white-opacity-lightest">
              <div class="container g-padding-y-80--xs">
                  <div class="row">
                      <div class="col-sm-3 g-margin-b-20--xs g-margin-b-0--md">
                          <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                              <li class="s-header__nav-menu-item"><a class="g-font-size-15--xs g-color--white-opacity" href="dev.html">Développment web et mobile</a></li>
                              <li class="s-header__nav-menu-item"><a class="g-font-size-15--xs g-color--white-opacity" href="ref.html">Référencement et SEO</a></li>
                              <li class="s-header__nav-menu-item"><a class="g-font-size-15--xs g-color--white-opacity" href="team.html">Equipe</a></li>
                              <li class="s-header__nav-menu-item"><a class="g-font-size-15--xs g-color--white-opacity" href="services.html">Services</a></li>
                              <li class="s-header__nav-menu-item"><a class="g-font-size-15--xs g-color--white-opacity" href="events.html">Evènement</a></li>
                              <li class="s-header__nav-menu-item"><a class="g-font-size-15--xs g-color--white-opacity" href="index.html#contact">Contactez nous</a></li>
                              <li class="s-header__nav-menu-item"><a class="g-font-size-15--xs g-color--white-opacity" href="support.html">Support</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                          <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://twitter.com/DavidYao">Twitter</a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.facebook.com/davidyaoentrepreneur">Facebook</a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.instagram.com/davidyao.entrepreneur">Instagram</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                          <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                              <li class="g-font-size-15--xs g-color--white-opacity"><span class="h4">Nos projets</span></a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://rikudomedia.com/">Rikudo Media</a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://www.oschool.ci">Oschool E-learning</a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://freelance.oschool.ci/">Oschool Freelance</a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Oschool CV</a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Oschool Shop</a></li>
                              <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Whatprice</a></li>
                          </ul>
                      </div>
                      <div class="col-md-4 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                          <h3 class="g-font-size-18--xs g-color--white">Rikudo Technologies</h3>
                          <p class="g-color--white-opacity">C’est simple, nous sommes ceux qui résolvent toutes vos préoccupations, grâce la technologie web et mobile. Vous avez besoin d’aide pour concevoir une application web ? mobile ? Ou bien vous avez besoin d’une excellente stratégie marketing pour votre business ?</p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Links -->

          <!-- Copyright -->
          <div class="container g-padding-y-50--xs">
              <div class="row">
                  <div class="col-xs-6">
                      <a href="index.html">
                          <img class="g-width-100--xs g-height-auto--xs" src="/rikudotech/img/rik/logo.png" alt="Rikudo Technologies Logo">
                      </a>
                  </div>
                  <div class="col-xs-6 g-text-right--xs">
                      <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                  </div>
              </div>
          </div>
          <!-- End Copyright -->
      </footer>
      <!--========== END FOOTER ==========-->

      <!-- Back To Top -->
      <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

      <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
      <!-- Vendor -->
      <script type="text/javascript" src="/rikudotech/vendor/jquery.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/jquery.migrate.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/jquery.smooth-scroll.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/jquery.back-to-top.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/scrollbar/jquery.scrollbar.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/swiper/swiper.jquery.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/waypoint.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/counterup.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
      <script type="text/javascript" src="/rikudotech/vendor/jquery.parallax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2381jE5yHl-iSg2NbN_YIZdQAJlWaTQo"></script>
      <script type="text/javascript" src="/rikudotech/vendor/jquery.wow.min.js"></script>

      <!-- General Components and Settings -->
      <script type="text/javascript" src="/rikudotech/js/global.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/header-sticky.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/scrollbar.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/magnific-popup.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/swiper.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/counter.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/portfolio-3-col.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/parallax.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/google-map.min.js"></script>
      <script type="text/javascript" src="/rikudotech/js/components/wow.min.js"></script>
      <!--========== END JAVASCRIPTS ==========-->

  </body>
  <!-- End Body -->
  </html>
