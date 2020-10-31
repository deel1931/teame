<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\User;
use App\Mentor;
use Illuminate\Support\Facades\Auth;

class LoguinController extends Controller
{
    public function index()
    {
        $mentor=Mentor::all();
        return view('top');
    }
    public function menta()
    {
        $mentor=Mentor::all();
        return view('menta',compact('mentor'));
    }
    public function menta2()
    {
        
        return view('menta2',compact('mentor'));
    }
    public function send(Request $request)
    {
        if(isset($_POST['button1'])){
        $to=['yasuon1931@gmail.com'];
        }else if(isset($_POST['button2'])){
        $to=['taikun1931@gmail.com'];
        }else if(isset($_POST['button3'])){
        $to=['taiko19990301@gmail.com'];
        }else{
            echo '送信エラー';
        }
        $contact=Auth::user();
        Mail::to($to)->send(new ContactMail($contact));
        return view('complete');
    }
    public function send2(Request $request)
    {
        if(isset($_POST['button1'])){
            $to=['yasuon1931@gmail.com'];
            }else if(isset($_POST['button2'])){
            $to=['taikun1931@gmail.com'];
            }else if(isset($_POST['button3'])){
            $to=['taiko19990301@gmail.com'];
            }else{
                echo '送信エラー';
            }
            $contact=Auth::user();
            Mail::to($to)->send(new ContactMail($contact));
            return view('complete');
    }
    public function user()
        {
            $user=Auth::user();
            return view('user',['user'=>$user]);
        }
        public function edit()
        {
            $user=Auth::user();
            return view('edit',['user'=>$user]);
        }
        public function hensyuu(Request $request)
        {
            $validatedData = $request->validate([
            'email'=>'unique:users,email',
            ],
        [
             'email.unique:users,email'=>'メールアドレスが重複しています',
        ]);
         $auth=Auth::user();

         $form=$request->all();
         unset($form['_token']);

         $auth->fill($form)->save();
         return redirect('user');
        }
        public function bosyuu()
        {
            return view('bosyuu');
        }
}
