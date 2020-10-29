@extends('layouts.app')
@section('user')
<h2>ユーザー情報</h2>
{{$user->name}}<br>
{{$user->email}}<br>
{{$user->age}}<br>
{{$user->gender}}<br>
{{$user->PR}}<br>
<a href="{{ route('edit') }}">編集</a>
@endsection