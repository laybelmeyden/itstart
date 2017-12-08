<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MessagesController extends Controller

{
    public function footerform(Request $request)
      {
      
         $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'email1' => request('email1'),
      'message3' => request('message3'),
      );
       \Mail::send('email.mail2', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_FOOTER');
        $message1->from($data['email'], $data['name'], $data['message3']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      session()->flash('mes', 'Ваша заявка отправлена!');
      return redirect('/#footer');
    }
    
    
     public function podpiska(Request $request)
      {
         $data= array(
      'email' => request('email'),
      );
       \Mail::send('email.mail3', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_PODPISKA');
        $message1->from($data['email']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      
      return back();
    }
    

}