@extends('layouts.app')
@section('syousai')
<h2>メンター</h2>
     @foreach($mentor as $menta)
   <p> 名前：{{$menta->name}}</p>
   <p> 年齢：{{$menta->age}}</p>
    <p>性別：{{$menta->gender}}</p>
   <p> git:{{$menta->git}}</p>
    <p>qiita:{{$menta->qiita}}</p>
   <p> 経歴：{{$menta->carrier}}<p>
   <p> 得意な言語：{{$menta->like}}</p>
   <p> 連絡方法：{{$menta->contact}}</p>
   <input type="submit" value="申込">
    @endforeach
    
   
 @endsection