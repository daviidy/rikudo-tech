@extends('layouts.menu')

@section('content')

<!--========== PAGE CONTENT ==========-->
<div class="g-bg-position--center g-fullheight--xs" style="background: url('/rikudotech/img/1920x1080/slider-oschool.png');">
    <div class="container js__ver-center-aligned">
        <div class="g-text-center--xs">
            <div class="g-margin-t-40--xs g-margin-b-60--xs g-margin-b-80--sm">
                <h1 class="g-font-size-32--xs g-font-size-50--sm g-font-size-60--md g-margin-b-30--xs">Effectuez vos paiements en toute sécurité avec Rikudo</h1>
                <p style="font-weight: 900 !important;" class="g-font-size-20--md g-font-weight--300">Attention, renseignez bien le montant sur lequel vous vous êtes entendu avec notre équipe.
                  Si le montant ne correspond pas à celui défini d'un commun accord, nous n'effectuerons aucun travaux, et ne serons aucunement responsable des
                désagréments occasionnés.</p>
            </div>
            <form action="{{url('avantpayment')}}" method="post" enctype="multipart/form-data">
                <div class="row g-margin-b-80--xs">
                    <div class="col-sm-4 col-sm-offset-2 col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--md">
                      @csrf
                        <div class="input-group">
                            <span class="input-group-btn">
                                <i class="s-form-v4__icon ti-money"></i>
                            </span>
                            <input name="montant" type="text" class="form-control s-form-v4__input" placeholder="Montant (en chiffres)">
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 g-full-width--xs">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <i class="s-form-v4__icon ti-email"></i>
                            </span>
                            <input name="email" type="email" class="form-control s-form-v4__input" placeholder="Votre Email">
                        </div>
                    </div>
                </div>
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Envoyer</button>
            </form>
        </div>
    </div>
</div>
<!--========== END PAGE CONTENT ==========-->

@endsection
