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

/****send email using route /send-mail** */ 
/*
Route::get('/send-mail', function () {
   $to_name = "Silvia Yembi";
   $to_email =  "s.mik@hotmail.com";
    $details = array("name_email" => $to_name, "body_email"=>"This is the body of the email");
    //emailContact: is the blae template
    Mail::send('emailContact', $details, function($message) use ($to_name, $to_email){ 
        $message->to($to_email)->subject('Message from My Portfolio');
    });
    dd("Email is Sent.");
});*/

Route::post('contact-me','ContentController@contactMePost');

Route::get('/items', 'ContentController@showMenuNavItems');

/**View to show after send a contact form, is called from ContentController*/
Route::get('/thanks', function () {
    $itemNav['items_nav_bar'] = $GLOBALS['items_array'];
    return view('thankPage', $itemNav);
});
