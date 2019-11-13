<?php

global $items_array;
$items_array = ['Home', 'About','Skills', 'Experience', 'Portfolio', 'Contact'];
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
Route::get('/', function () {

    $itemNav['items_nav_bar'] = $GLOBALS['items_array'];

    return view('welcome', $itemNav);
});

Route::get('/send-mail', function () {
   
    $details = [
        'title' => 'Mail from Contact Silvia Yembi.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('s.mik@hotmail.com')->send(new \App\Mail\MailSendContact($details));
   
    dd("Email is Sent.");
});

Route::post('contact-me','ContentController@contactMePost');

Route::get('/items', 'ContentController@showMenuNavItems');

Route::get('/thanks', function () {
    $itemNav['items_nav_bar'] = $GLOBALS['items_array'];
    return view('thankPage', $itemNav);
});
