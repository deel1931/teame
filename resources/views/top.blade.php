@extends('layouts.app')

@section('child')
<h1>メンターマッチングサイト</h1>
<p>新人エンジニアの方やこれからプログラミングをはじめたい方におすすめです</p>
<p>スクールに通いたい方はこちら</p>
<a href="https://sa-i.jp/">サイテックホームページ</a><br>
<p>メンター１</p>
<a href="{{ route('syousai') }}">メンターの詳細</a><br>
<p>メンター２</p>
<a href="{{ route('syousai2') }}">メンターの詳細</a><br>
@endsection