@extends('layouts.menu')
@section('content')


<!--========== SWIPER SLIDER ==========-->
<div class="s-swiper js__swiper-one-item">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/rikudotech/img/slider/03.jpg');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Nous donnons vie a vos rêves<br>graces aux technologies<br>Web</h2>
                </div>
                <a class="js__popup__youtube" href="#">
                    <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                </a>
            </div>
        </div>
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/rikudotech/img/slider/ref.jpg');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <div class="g-margin-b-30--xs">
                        <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Nous travaillons pour que<br> vos sites soient dans les meilleurs<br>résultats de recherche</h2>
                    </div>
                    <a class="js__popup__youtube" href="#" title="Intro Video">
                        <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Swiper Wrapper -->

    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->

    <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
        <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
        <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Découvrez-nous</p>
    </a>
</div>
<!--========== END SWIPER SLIDER ==========-->

<!--========== PAGE CONTENT ==========-->
<!-- Features -->
<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-text-center--xs g-margin-b-100--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Bienvenue a Rikudotech</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md">Besoin d'aide pour vos applications mobiles?<br> Nous sommes là pour ça. </h2>
    </div>
    <div class="row g-margin-b-60--xs g-margin-b-70--md">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                        <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Développement Web</h3>
                    <p class="g-margin-b-0--xs">Nous développons pour vous tout type de projets Web.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                        <i class="g-font-size-28--xs g-color--primary ti-mobile"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Développement Mobile</h3>
                    <p class="g-margin-b-0--xs">Nous créons des applications mobiles android qui épousent parfaitement les idées de votre motivation.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                        <i class="g-font-size-28--xs g-color--primary ti-bar-chart"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Référencement et SEO</h3>
                    <p class="g-margin-b-0--xs">Nous améliorons la visibilité de vos sites sur le Web.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // end row  -->
    <div class="row">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                        <i class="g-font-size-28--xs g-color--primary ti-ruler"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                     <h3 class="g-font-size-18--xs">Formation</h3>
                    <p class="g-margin-b-0--xs">Vous pouvez bénéficier de nos formations en ligne dans le domaine digital .</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                        <i class="g-font-size-28--xs g-color--primary ti-headphone-alt"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Support</h3>
                    <p class="g-margin-b-0--xs">Nous nous efforçons de répondre a vos préoccupations.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                        <i class="g-font-size-28--xs g-color--primary ti-pencil"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Design</h3>
                    <p class="g-margin-b-0--xs">Les applications que nous développons sont au diapason des dernières normes internationales en matières de design.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // end row  -->
</div>
<!-- End Features -->

<!-- Parallax -->
<div class="js__parallax-window" style="background: url(/rikudotech/img/slider/04.jpg) 50% 0 no-repeat ; background-size: cover;" id="conctat">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-margin-b-80--xs">
            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Dites-nous de quoi vous avez besoin</h2>
        </div>
        <a href="#contact" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Contactez-nous</a>
    </div>
</div>
<!-- End Parallax -->

<!-- Culture-->
<div class="g-promo-section">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row">
            <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">A propos de</h2>
                </div>
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Rikudo technologies</h2>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <p class="g-font-size-18--xs">Nous sommes  une équipe de jeunes expérimenté dans le domaine du digital et nous utilisons les technologies Web les plus récentes (HTML ,CSS, PHP, BOOSTRAP, jAVA SCRIPT, JQUERY, LARAVEL) pour donner vie a vos idées de business.</p>
                <p class="g-font-size-18--xs">Rikudo technologies a été créé en 2016 avec pour mission d'aider les entrepreneurs Africains a réaliser leur business sur Google.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
        <img class="img-responsive" src="/rikudotech/img/slider/rikudo.jpg" alt="Image">
    </div>
</div>
<!-- End Culture -->

<!-- Subscribe -->
<div class="js__parallax-window" style="background: url('/rikudotech/img/slider/06.png') 50% 0 no-repeat; background-size: cover; ">
    <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Abonnez-vous</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Pour connaitre les dernières actualités en matières de technologies</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <form class="input-group">
                    <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="entrez votre e-mail">
                    <span class="input-group-btn">
                        <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe -->

<!-- Portfolio Filter -->
<div class="container g-padding-y-80--xs">
    <div class="g-text-center--xs g-margin-b-40--xs">
        <h2 class="g-font-size-32--xs g-font-size-36--md">Projets</h2>
    </div>
    <div class="s-portfolio">
        <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
            <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">Développement Web </div>
        </div>
    </div>
</div>
<!-- End Portfolio Filter -->

<!-- Portfolio Gallery -->
<div class="container g-margin-b-100--xs">
    <div id="js__grid-portfolio-gallery" class="cbp">
        <!-- Item -->
       <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="/rikudotech/img/slider/05.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h3 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Le spécialiste de la micro-informatique</h3>
                            <p class="g-color--white-opacity">Etskokou</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/slider/05.png" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://etskokouservices.com " metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle" target="_blank">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="/rikudotech/img/slider/oschool.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Plateforme e-learning</h4>
                            <p class="g-color--white-opacity">Oschool</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/slider/oschool.png" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://oschool.ci" metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle" target="_blank">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="/rikudotech/img/slider/greedier.PNG" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Développe votre profil client et personnel via les médias sociaux</h4>
                            <p class="g-color--white-opacity">Greedier Social Media.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/slider/greedier.png" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" >
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://greediersocialmedia.co.uk/" metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="/rikudotech/img/slider/nmtechnologie.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">ONG oeuvrant dans l'humanitaire</h4>
                            <p class="g-color--white-opacity">ONG NM-H</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/slider/nmtechnologie.png" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" >
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.nmtechnologie.com/" metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle" target="_blank">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos">
                    <div class="s-portfolio__img-effect">
                        <img src="/rikudotech/img/slider/fsd.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">La Fondation SOUNDELE KONAN, pour le développement de l’agroforesterie et le reboisement en Côte d’Ivoire.</h4>
                            <p class="g-color--white-opacity">Fondation SOUNDELE KONAN.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/slider/fsd.png" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" >
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://fondationsoundelekonan.org/"metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle" target="-_blank">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="/rikudotech/img/slider/dev.png" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Apprendre a Développer des sites web</h4>
                            <p class="g-color--white-opacity">Deviens Développeur.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="img/slider/dev.png" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" >
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://deviens-developpeur.com/"metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle" target="_blank">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        <!-- End Item -->
    </div>
    <!-- End Portfolio Gallery -->
</div>
<!-- End Portfolio -->

<!-- Testimonials -->
<div class="js__parallax-window" style="background: url(/rikudotech/img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Témoignage</p>
        <div class="s-swiper js__swiper-testimonials">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper g-margin-b-50--xs">
                <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                    <div class="g-padding-x-20--xs g-padding-x-50--lg">
                        <div class="g-margin-b-40--xs">
                            <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" Je trouve du professionnalisme dans ce que vous faites, réactifs aux inquiétudes du clients sincère. Cependent j'ai l'impression que vous être surbooké par d'autres projets prioritaires  "</i></p>
                        </div>
                        <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                        <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs"></h4>
                    </div>
               </div>
            </div>
            <!-- End Swipper Wrapper -->

            <!-- Arrows -->
            <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
            <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Clients -->
<div class="g-bg-color--sky-light">
    <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
        <!-- Swiper Clients -->
        <div class="s-swiper js__swiper-clients">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="s-clients-v1" src="/rikudotech/img/clients/01-dark.png" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="s-clients-v1" src="/rikudotech/img/clients/02-dark.png" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                        <img class="s-clients-v1" src="/rikudotech/img/clients/03-dark.png" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                        <img class="s-clients-v1" src="/rikudotech/img/clients/04-dark.png" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                        <img class="s-clients-v1" src="/rikudotech/img/clients/05-dark.png" alt="Clients Logo">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Swiper Clients -->
    </div>
</div>
<!-- End Clients -->

<!-- News -->
<div class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-text-center--xs g-margin-b-80--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md">Articles les plus récents</h2>
    </div>
    <div class="row">
        <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
            <!-- News -->
            <article>
                <img class="img-responsive" src="/rikudotech/img/970x970/01.jpg" alt="Image">
                <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                    <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Create Something Great.</a></h3>
                    <p>The time has come to bring those ideas and plans to life.</p>
                </div>
            </article>
            <!-- End News -->
        </div>
        <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
            <!-- News -->
            <article>
                <img class="img-responsive" src="/rikudotech/img/970x970/02.jpg" alt="Image">
                <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                    <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Jacks of All. Experts in All.</a></h3>
                    <p>The time has come to bring those ideas and plans to life.</p>
                </div>
            </article>
            <!-- End News -->
        </div>
        <div class="col-sm-4">
            <!-- News -->
            <article>
                <img class="img-responsive" src="/rikudotech/img/970x970/03.jpg" alt="Image">
                <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                    <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Finding your Perfect Place.</a></h3>
                    <p>The time has come to bring those ideas and plans to life.</p>
                </div>
            </article>
            <!-- End News -->
        </div>
    </div>
</div>
<!-- End News -->

<!-- Counter -->
<div class="js__parallax-window" style="background: url('/rikudotech/img/1920x1080/06.jpg') 50% 0 no-repeat fixed;">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row">
            <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                <div class="g-text-center--xs">
                    <div class="g-margin-b-10--xs">
                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">25</figure>
                        <!--<span class="g-font-size-40--xs g-color--white">k</span>-->
                    </div>
                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                    <h4 class="g-font-size-18--xs g-color--white">Plus de 25 projets réalisés</h4>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                <div class="g-text-center--xs">
                    <div class="g-margin-b-10--xs">
                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">8</figure>
                        <span class="g-font-size-40--xs g-color--white">K</span>
                    </div>
                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                    <h4 class="g-font-size-18--xs g-color--white">Plus de 8000 fans</h4>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                <div class="g-text-center--xs">
                    <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">30</figure>
                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                    <h4 class="g-font-size-18--xs g-color--white">Plus de 30 formations</h4>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="g-text-center--xs">
                    <div class="g-margin-b-10--xs">
                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">10</figure>
                       <!-- <span class="g-font-size-40--xs g-color--white">x</span>-->
                    </div>
                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                    <h4 class="g-font-size-18--xs g-color--white">Plus de 10 offres clients</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter -->

<!-- Feedback Form -->
<div class="g-bg-color--sky-light" id="contact">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Retour d'information</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">Envoyez-nous un message</h2>
        </div>
        <div class="text-center">
         <a href="mailto:info@oschool.ci" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">
         Envoyer le message
        </a>
        </div>
    </div>
</div>
<!-- End Feedback Form -->

<!-- Google Map -->
<section class="s-google-map">
    <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
</section>
<!-- End Google Map -->
<!--========== END PAGE CONTENT ==========-->


@endsection
