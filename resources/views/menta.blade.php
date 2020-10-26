@extends('layouts.app')
@section('syousai')
<h2>メンター</h2>
  <form action="" method="post">
   @csrf
   名前：葛山　宏樹
   <input type="submit"name="button1" value="申込"><br>
   名前：横山　たくみ
   <input type="submit"name="button2" value="申込"><br>
   名前：大坂間　ゆうき
   <input type="submit"name="button3" value="申込"><br>
   
 @endsection