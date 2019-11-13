<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuNav as MenuNav;
use DateTime;
use App\ContactMe;
use routes\web;

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

        //insert fields to the database using the model
        ContactMe::create($request->all());
        return redirect('thanks');
        /*
        Mail::send(
            'email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'user_message' => $request->get('message')
            ),
            function ($message) {
                $message->from('saquib.gt@gmail.com');
                $message->to('saquib.s.mik@hotmail.com', 'Admin')->subject('From PORTFOLIO');
            }
        );*/
    }
}
