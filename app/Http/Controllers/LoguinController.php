<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\User;
use App\Mentor;
class LoguinController extends Controller
{
    public function index()
    {
    return view('top');
    }
    public function menta()
    {
        $mentor=Mentor::all();
        return view('menta',compact('mentor'));
    }
    public function send(Request $request)
    {
        $user=Auth::user();
        Mail::to($to)->send(new SampleNotification($user));
    }
    
}
