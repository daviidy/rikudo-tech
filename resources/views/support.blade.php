@extends('layouts.menu')

@section('content')

<div class="s-swiper">
  <div class="swiper-wrapper">
      <div class="g-bg-position--center js__parallax-window" style="background: url('/rikudotech/img/slider/team5.jpg'); width: 100%;">
          <div class="g-container--md g-padding-y-150--xs">
              <div class="row">
                  <div class="col-md-7">
                      <div class="g-margin-b-50--xs">
                          <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-60--md g-color--white">Vous rencontrez des difficultés ?</h1>
                          <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">
                            N'hésitez pas et ouvrez un ticket en remplissant le formulaire<br>ci-dessous. Vous serez contacté dans de bref délai.
                          </p>
                      </div>
                      <a href="#support" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">De quoi avez vous besoin ?</a>
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
<style media="screen">
#support{
  display : flex;
  justify-content : center;
}
</style>
<div id="support">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeWrBKMk2u9fjGU6S2Jf7H4AJKpIYqTWF4GcD1VmpbJKSBlIw/viewform?embedded=true" width="100%" height="870" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
</div>

@endsection
