@extends('layouts.app')
@section('syousai2')
<h2>メンター</h2>
  <form action="" method="post">
   @csrf
   名前：メンター
   <input type="submit"name="button2" value="申込"><br>
   
   
@endsection