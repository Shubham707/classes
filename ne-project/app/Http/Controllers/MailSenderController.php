<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 use SimpleSoftwareIO\QrCode\Facades\QrCode;
 use Illuminate\Support\Facades\Storage;
class MailSenderController extends Controller
{

    public function sendMail(Request $request){

        //dd($request->all());
    // Mail::raw("", function ($msg) {
    //     $msg->to("sohamjadhav2609@gmail.com")
    //         ->subject("dfjdsfds");
    // });

      Mail::send('mails.send-mail', ['data' => $request->all()], function ($message) use ($request) {
        $message->to($request->input('email'))
                ->subject($request->input('subject'));
    });
    // Mail::send('emails.my-email', $data, function($message) use ($request) {
    //         $message->to($request->email)->subject('Subject');
    //     });
    return 'Mail sent';
    }


    public function sendMailopen()
    {
            return view("open-mail");
    }


    public function qrCode(){
         $url = 'https://dailybowls.in';
            // return QrCode::size(300)
            // ->format('png')
            // ->generate($url);
        //      QrCode::format('png')
        //     ->size(300)
        //     ->generate(
        //         $url,
        //     Storage::path('public/qrcode.png')
        // );
         echo  QrCode::format('svg')
    ->size(300)
    ->generate('https://dailybowls.in');

    }
  
}
