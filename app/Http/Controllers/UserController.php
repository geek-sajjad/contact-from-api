<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // return response()
        //     ->json(['name' => 'Abigail', 'state' => 'CA']);
        
        return response()
            ->json(['name' => 'Abigail', 'state' => 'CA']);
    }

    public function make(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        // return response()->json(['error' => 'Unauthorized'], 401, ['X-Header-One' => 'Header Value']);

                  
        
        $name = $request->input('name');
        return response()->json($request->all());
        return response()->json(['id' => $name]);
    }

    public function makeMail(Request $request){
        // return response()->json(['rter']);
        // dd(new Mail());
        $name = $request->input('name');
        $number = $request->input('number');
        $option = $request->input('option');
        $website = $request->input('website');
        $detail = $request->input('detail');
        
        // Mail::to(['email'=>'test@test.com'])->send(new ContactFormMail(['test'=>'test']));
        
        Mail::send('contact-form', ['name' => $name, 'number' => $number, 'option'=> $option, 'website' => $website, 'detail' => $detail], function($message)
        {
            $message->to('sajjad.sohrabi2@gmail.com', 'Sajad Sohrabi')->subject('New SEO Contact');
        });
        return response()->json(['status' => 'succesfull']);
        // dd($test);
        // Mail::raw('Text to e-mail', function($message)
        //     {
        //         $message->from('us@example.com', 'Laravel');

        //         $message->to('foo@example.com')->cc('bar@example.com');
        //     });

    }
}

// return response()
//             ->json(['name' => 'Abigail', 'state' => 'CA'])