@extends('layouts.menu')

@section('content')

<!--========== PROMO BLOCK ==========-->
<div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('/rikudotech/img/1920x1080/nappy.jpg');">
    <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
        <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Minaci 2019</h1>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
                <div class="row">
                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <p class="g-font-size-18--xs g-color--white-opacity">Minaci est un concours de beauté qui fait l'éloge des cheveux africains au naturel</p>
                        </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                    <span class="s-promo-block-v3__date g-font-size-100--xs g-font-size-135--lg g-font-weight--300 g-color--primary">11</span>
                                </div>
                            </div>
                            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                                <span class="s-promo-block-v3__month g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white-opacity-light">Août</span>
                                <span class="s-promo-block-v3__year g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white-opacity-light">2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-pull-8">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                    <a class="js__popup__youtube">
                        <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        <span class="text-uppercase g-font-size-13--xs g-color--white g-padding-x-15--xs">Regarder une aperçu</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->

<!--========== PAGE CONTENT ==========-->
<!-- Features -->
<div class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row g-margin-b-60--xs g-margin-b-70--md">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                        <i class="g-font-size-28--xs g-color--primary ti-calendar"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Date</h3>
                    <p class="g-margin-b-0--xs">Samedi 11 août</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                        <i class="g-font-size-28--xs g-color--primary ti-map"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Lieu</h3>
                    <p class="g-margin-b-0--xs">ISTC Cocody Abidjan</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                        <i class="g-font-size-28--xs g-color--primary ti-time"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Heure</h3>
                    <p class="g-margin-b-0--xs">18 heures</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features -->

<!-- Upcoming Event -->
<div class="s-promo-block-v2 js__parallax-window" style="background: url(/rikudotech/img/1920x1080/03.jpg) 50% 0 no-repeat fixed; background-size: cover;">
    <div class="container">
        <div class="row g-hor-centered-row--md">
            <div class="col-md-7 g-hor-centered-row__col g-padding-y-80--xs">
                <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Acheter un ticket</h2>
                <div class="g-margin-b-20--xs">
                    <span class="g-font-size-30--xs g-font-weight--700 g-color--white">11 août</span>
                </div>
                <p class="g-font-size-18--xs g-color--white-opacity g-margin-b-40--xs">
                  Pour assister à l'évènement vous pouvez acheter un ticket dans les grandes surfaces d'Abidjan à 10000 FCFA. Mais en achetant en ligne, vous obtenez une réduction de 40%, ce qui équivaut à acheter le ticket à 6000 FCFA
                </p>
            </div>
            <div class="col-md-5 g-hor-centered-row__col g-margin-b-80--xs">
                <form class="center-block s-promo-block-v2__form g-width-100-percent--xs g-width-400--sm g-bg-color--dark-light g-padding-x-50--xs g-padding-y-80--xs g-radius--4">
                    <div class="g-text-center--xs g-margin-b-40--xs">
                        <h2 class="g-font-size-30--xs g-color--white">Acheter</h2>
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Nom">
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="email" class="form-control s-form-v3__input" placeholder="* Prénom">
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Téléphone">
                    </div>
                    <div class="g-text-center--xs">
                        <a href="#redirection" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Acheter un ticket</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Upcoming Event -->

<!-- Speakers -->
<div class="g-hor-divider__dashed--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Peoples</p>
            <h2 class="g-font-size-32--xs g-font-size-36--sm">Qui aurez vous l'occasion d'entendre à ce evenement ?</h2>
        </div>
        <div class="row g-overflow--hidden">
            <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                <!-- Speaker -->
                <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                    <img class="img-responsive g-width-100-percent--xs" src="/rikudotech/img/rik/dave_speaker.jpeg" alt="David Yao">
                    <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                        <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">David Yao</h4>
                        </div>
                        <p class="g-font-weight--700">CEO-Fondateur de Rikudo Technologies</p>
                        <p>CEO de www.oschool.ci, une plateforme de formation en ligne, et fondateur de Rikudo Technologies (www.rikudotech.com), une start-up spécialisé dans la réalisation d'applications web et mobiles pour les entreprises locales et internationales.</p>
                    </div>
                </div>
                <!-- End Speaker -->
            </div>
            <div class="col-xs-6 g-full-width--xs">
                <!-- Speaker -->
                <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                    <img class="img-responsive g-width-100-percent--xs" src="/rikudotech/img/400x400/01.jpg" alt="Image">
                    <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                        <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                            <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">Lucas Richardson</h4>
                        </div>
                        <p class="g-font-weight--700">Senior Developer</p>
                        <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                    </div>
                </div>
                <!-- End Speaker -->
            </div>
        </div>
    </div>
</div>
<!-- End Speakers -->

<!-- Clients -->
<div class="g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-container--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <h2 class="g-font-size-32--xs g-font-size-36--sm">Sponsors</h2>
        </div>
    </div>
    <div class="g-container--md">
        <!-- Swiper Clients -->
        <div class="s-swiper js__swiper-clients">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="s-clients-v1" src="/rikudotech/img/sponsors/1.png">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                        <img class="s-clients-v1" src="/rikudotech/img/sponsors/3.png">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                        <img class="s-clients-v1" src="/rikudotech/img/sponsors/4.png">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                        <img class="s-clients-v1" src="/rikudotech/img/sponsors/6.jpg">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="s-clients-v1" src="/rikudotech/img/sponsors/5.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Swiper Clients -->
    </div>
</div>
<!-- End Clients -->
<!--========== END PAGE CONTENT ==========-->

@endsection
