@extends('layouts.menu-payment')
@section('title', 'Confirmation paiement Rikudo SARL')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/images.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="https://secure.cinetpay.com/" class="login100-form validate-form">
        <span class="login100-form-title">
          Vérifiez bien les infos suivantes:
        </span>
        <ul>
          <li>- Le montant de paiement: </li>
          <li><strong>{{session('montant')}} FCFA</strong> </li>
          <li>- Votre email:</li>
          <li><strong>{{session('email')}}</strong> </li>
        </ul><br>
        {{ csrf_field() }}
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_id">
            <option value="{{$temps}}">trans id</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_amount">
            <option value="{{session('montant')}}">montant</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_currency">
            <option value="CFA">currency</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_site_id">
            <option value="113043">Id site</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_language">
            <option value="fr">language</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_version">
            <option value="V1">version</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_payment_config">
            <option value="SINGLE">payment config</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_page_action">
            <option value="PAYMENT">page action</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_date">
            <option value="{{$time}}">trans date</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="apikey">
            <option value="134714631658c289ed716950.86091611">api key</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="signature">
            <option value="{{$signature}}">Signature</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_designation">
            <option value="Paiement Rikudo SARL">Désignation</option>
          </select>
        </div>

        <div style="display: none;" class="form-group">
          <select class="" name="return_url">
            <option value="{{ url('payment') }}">url retour</option>
          </select>
        </div>

        <div style="display: none;" class="form-group">
          <select class="" name="cancel_url">
            <option value="https://rikudotech.com">url cancel</option>
          </select>
        </div>
        @if(Session::has('montant') && Session::has('email'))
        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Aller au paiement
          </button>
        </div>
        @endif


        <div class="text-center p-t-136">
          <a class="txt2" href="/">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
