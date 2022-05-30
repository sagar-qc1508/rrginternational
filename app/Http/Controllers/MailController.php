<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Mail;
// use App\Mail\DemoMail;


use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from codingspoint.com',
            'body' => 'This is for testing email using smtp.'
        ];
          
        Mail::to('sagar@qafieconsultancy.com')->send(new DemoMail($mailData));
            
        dd("Email is sent successfully.");
    }


    public function basic_email() {
        $data = array('name'=>"Sagar Patel");
     
        Mail::send(['text'=>'emails/demoMail'], $data, function($message) {
           $message->to('sagar@qafieconsultancy.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('noreply@rrginternational.com','Sagar Patel');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
     public function html_email() {
        $data = array('name'=>"Sagar Patel");
        Mail::send('emails/demoMail', $data, function($message) {
           $message->to('sagar@qafieconsultancy.com', 'Tutorials Point')->subject
              ('Laravel HTML Testing Mail');
           $message->from('noreply@rrginternational.com','Sagar Patel');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
     public function attachment_email() {
        $data = array('name'=>"Sagar Patel");
        Mail::send('emails/demoMail', $data, function($message) {
           $message->to('sagar@qafieconsultancy.com', 'Tutorials Point')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
           $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->from('noreply@rrginternational.com','Sagar Patel');
        });
        echo "Email Sent with attachment. Check your inbox.";
     }
}
