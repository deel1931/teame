@extends('layouts.app')

@section('child')
<h1>メンターマッチングサイト</h1>
<p>新人エンジニアの方やこれからプログラミングをはじめたい方におすすめです</p>
<p>スクールに通いたい方はこちら</p>
<a href="https://sa-i.jp/">サイテックホームページ</a><br>
<p>メンターを希望の方はこちらから</p>
<a href="{{ route('syousai') }}">メンターをみる</a>
@endsection