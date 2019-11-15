<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuNav as MenuNav;
use App\ContactMe;
use Illuminate\Support\Facades\Mail;

class ContentController extends Controller
{
    //constructor
    public function __construct(MenuNav $menuNav)
    {
        $this->menuNav = $menuNav->all();
    }

    public function showMenuNavItems()
    {
        dd($this->menuNav);
    }


    /**
     * Function to post the form.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactMePost(Request $request)
    {
        //to validate form fields
        $this->validate($request, [
            'name' => 'required | min : 3',
            'phone',
            'email' => 'required | email',
            'message' => 'required | max : 350'
        ]);

        //print_r($request->input());

        //insert fields to the database using ContacMe model
        ContactMe::create($request->all());

        //Getting data from ContactMe form fields
        $nameUser = $request->input('name');
        $emailUser = $request->input('email');
        $message = $request->input('message');
        $phoneUser = $request->input('phone');
        
        //I send two differents emails: one to the user and other one to the admin
        self::sendEmail($nameUser, $emailUser, $phoneUser, $message, 'emailContactUser');
        self::sendEmail($nameUser, $emailUser, $phoneUser, $message, 'emailContactAdmin');
        
        return redirect('thanks');
    }

    function sendEmail($to_name, $to_email, $to_phone, $body, $emailBladeTemplate)
    {
        if($emailBladeTemplate == 'emailContactAdmin'){
            $to_email = 'silviamyembi@gmail.com'; //Admin email address 
        }
        $details = array("name_email" => $to_name, "phone" => $to_phone, "body_email" => $body);
        Mail::send($emailBladeTemplate, $details, function ($message) use ($to_name, $to_email) {
            //option when I want different sender
            //$message->from('silviamyembi@gmail.com')->subject('SYA Portfolio Contact');
            $message->to($to_email)->subject('SYA Portfolio Contact');
        });
    }

}
