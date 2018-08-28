<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{


    public function mail()
    {
      //envoi mail admin
      Mail::send(['text' => 'mailsOnline.mailtest'], ['name', 'Oschool'], function($message){
        $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Test');
        $message->from('eventsoschool@gmail.com', 'David');
      });
      return redirect('ticket')->with('status', 'Achat validé ! Votre payment a été envoyé dans votre boîte de réception. Merci de la consulter.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $montant = Session::put('montant', $request['montant']);
      $email = Session::put('email', $request['email']);

      function postData($params, $url)
          {
           try {
           $curl = curl_init();
           $postfield = '';
           foreach ($params as $index => $value) {
           $postfield .= $index . '=' . $value . "&";
           }
           $postfield = substr($postfield, 0, -1);
           curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 45,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => $postfield,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/x-www-form-urlencoded",
           ),
           ));
           $response = curl_exec($curl);
           $err = curl_error($curl);
           curl_close($curl);
           if ($err) {
           throw new Exception("cURL Error #:" . $err);
           return $err;
           } else {
           return $response;
           }
           } catch (Exception $e) {
           throw new Exception($e);
           }
          }
          $time = Carbon::now();
          $temps = date("YmdHis");
        $params = array('cpm_amount' => $montant,
                        'cpm_currency' => 'CFA',
                        'cpm_site_id' => '113043',
                        'cpm_trans_id' => $temps,
                        'cpm_trans_date' => $time,
                        'cpm_payment_config' => 'SINGLE',
                        'cpm_page_action' => 'PAYMENT',
                        'cpm_version' => 'V1',
                        'cpm_language' => 'fr',
                        'cpm_designation' => 'Paiement Rikudo SARL',
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $signature = json_decode($resultat, true);

        return view('payment',['signature' => str_replace('"',"",$resultat),
                                     'temps' => $temps,
                                     'time' => $time,
                                     'montant' => $montant,
                                     'email' => $email,
                                   ]);

    }

    public function achat()
    {
      $email = session('email');

     //envpi mail client
      Mail::send('mails.mail', ['email' => $email], function($message) use($email){
        $message->to($email, 'Cher(ère) Client(e)')->subject('Votre paiement a bien été recu !');
        $message->from('eventsoschool@gmail.com', 'Rikudo');
      });

      //envoi mail admin
      Mail::send('mails.mail-admin', ['email' => $email], function($message) use($payment){
        $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouveau paiement Rikudo');
        $message->from('eventsoschool@gmail.com', 'Rikudo');
      });
      return redirect('/')->with('status', 'Achat validé ! Votre recu a été envoyé dans votre boîte de réception. Merci de la consulter.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
