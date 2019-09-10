<?php
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-mail', function () {
    // return view('welcome');
    $data = [
        'title'=>'Hi student i hope you like this course',
        'content'=>'This laravel course was created with a lot of love and dedication for you',
    ];
    Mail::send('emails.test', $data, function ($message) {
        // $message->from('john@johndoe.com', 'John Doe');
        // $message->sender('john@johndoe.com', 'John Doe');
        // $message->to('animesh.ultimate@gmail.com', 'Animesh Kumar');
        // $message->cc('john@johndoe.com', 'John Doe');
        // $message->bcc('john@johndoe.com', 'John Doe');
        // $message->replyTo('john@johndoe.com', 'John Doe');
        // $message->subject('Hello student how are you?');
        // $message->priority(3);
        // $message->attach('pathToFile');
        $message->to('animesh.ultimate@gmail.com', 'animesh kumar')->subject('Hello student how are you?');
    });
    echo "Mail Sent!";
});