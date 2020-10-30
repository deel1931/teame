@extends('layouts.app')
@section('syousai')
<h2>メンター</h2>
  <form action="" method="post">
   @csrf
   名前：葛山　宏樹
   <input type="submit"name="button1" value="申込"><br>
   
   
 @endsection