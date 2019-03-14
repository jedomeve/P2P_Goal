<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('user.')->group(function()
{
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/buy/{product}', 'HomeController@buy')->name('buy');
});

Route::name('p2p.')->group(function()
{
    Route::post('/send-data-payment', 'PlaceToPayController@dataPayment')->name('dataPayment');
});

Route::get('/', function () {

  return view('welcome');

  /*$login = "6dd490faf9cb87a9862245da41170ff2";
  $secretKey = "024h1IlD";
  $seed = date('c'); ;

  if (function_exists('random_bytes')) {
      $nonce = bin2hex(random_bytes(16));
  } elseif (function_exists('openssl_random_pseudo_bytes')) {
      $nonce = bin2hex(openssl_random_pseudo_bytes(16));
  } else {
      $nonce = mt_rand();
  }

  $nonceBase64 = base64_encode($nonce);

  $tranKey = base64_encode(sha1($nonce . $seed . $secretKey, true));

    $placetopay = new Dnetix\Redirection\PlacetoPay([
        'login' => $login,
        'tranKey' => $tranKey,
        'url' => 'https://test.placetopay.com/redirection/',
    ]);

    $reference = "fact-01";
    $request = [
      'payment' => [
          'reference' => $reference,
          'description' => 'Testing payment',
          'amount' => [
              'currency' => 'USD',
              'total' => 120,
          ],
      ],
      'expiration' => date('c', strtotime('+2 days')),
      'returnUrl' => route( 'payment' , [ 'reference' => $reference] ),
      'ipAddress' => '127.0.0.1',
      'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
    ];

    $response = $placetopay->request($request);
    var_dump($response);*/


});

Route::get('/end-payment/{reference}', function($reference=null){
  var_dump($reference);
})->name('payment');
