@extends('layouts.app')
@section('edit')
<form action="{{route('hensyuu',$user->id)}}" method='post'>
@csrf

<divclass="name">
<label for>ユーザー名</label>
<input type="text"　name="name" value="{{$user->name}}"/>
</div>
<div class="email">
<label for>Eメール</label>
<input type="text" name="email" value="{{$user->email}}">
<br>
</div>
<div class="PR">
<br>
<label for>PR</label>
<textarea name="PR"　 rows="4" cols="40">{{$user->PR}}"</textarea>
</div>
<input type='submit' value="編集">


@endsection