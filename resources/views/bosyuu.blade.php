@extends('layouts.app')
@section('complete')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mae.css">
</head>
<body>
 <!-- ここからヘッダー -->
 <header id="header">
    <h1>メンターマッチングサイト</h1>
    <nav>
        <ul class="gnav">
            <li class="gnav-item"><a href="">メンター紹介</a></li>
            <li class="gnav-item"><a href="">コース・料金</a></li>
            <li class="gnav-item"><a href="">ユーザーの声</a></li>
            <li class="gnav-item"><a href="">メンター募集について</a></li>
            <li class="gnav-item"><a href="">新規会員登録</a></li>
        </ul>
    </nav>
</header>
<!-- ここからmain -->
<main>
    <nav class="s-nav">
        <div class="s-nav-item">
            <p>プログラミング学習が初めての方にはこちらがオススメ！　➡︎ キャリア面談付きのオンラインプログラミングスクール</p>
            <a href=""><img class="saitech-logo" src="images/saitech-logo_0.png" alt=""></a>
        </div>
    </nav>
   
    <h2>現在メンターの募集は行っておりません </h2>
</main>

<!-- ここからfooter -->
<footer id="footer">
    <div class="footer-box">
        <ul class="footer-nav">
            <li class="footer-nav-item"><a class="footer-text" href="">講師紹介</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">コース・料金</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">ユーザーの声</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">メンター募集について</a></li>
        </ul>
        <ul class="footer-nav">
            <li class="footer-nav-item"><a class="footer-text" href="">運営会社について</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">利用規約</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">プライバシーポリシー</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">特定商取引法に基づく表記</a></li>
        </ul>
        <div>
            <dl class="sns">
                <dt class="sns-title">SNS |</dt>
                <dd class="sns-item"><a class="footer-text" href="">Twitter</a></dd>
                <dd class="sns-item"><a class="footer-text" href="">Instagram</a></dd>
                <dd class="sns-item"><a class="footer-text" href="">Facebook</a></dd>
            </dl>
            <p><a class="footer-text" href="">お問い合わせ窓口</a></p>
        </div>
     </div>
     <p class="copyright">&copy;SAi Tech All Rights Reserved</p>
</footer>
</body>
</html>
   
 

@endsection