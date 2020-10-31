
@extends('layouts.app')
@section('child')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>メンターマッチングサイト</title>
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
                <li class="gnav-item"><a href="bosyuu">メンター募集について</a></li>
                <li class="gnav-item"><a href="{{ route('register') }}">新規会員登録</a></li>
            </ul>
        </nav>
    </header>
    <!-- ここからmain -->
    <main>
        <nav class="s-nav">
            <div class="s-nav-item">
                <p>プログラミング学習が初めての方にはこちらがオススメ！　➡︎ キャリア面談付きのオンラインプログラミングスクール</p>
                <a href=""><img class="saitech-logo" src="images/saitech-logo.png" alt=""></a>
            </div>
        </nav>
        <figure class="img-box"><img class="main-img" src="images/img1.jpg" alt=""></figure>
        <!-- NEWS -->
        <section class="news">
            <h2 class="news-title">- NEWS -</h2>
            <div class="news-box">
                <article class="article">
                    <h2 class="article-title"><span>2020/00/00</span>仮文章仮文章仮文章</h2>
                    <img class="article-img" width="325" height="175" src="images/FFFFFF.png" alt="">
                </article>
                <article class="article">
                    <h2 class="article-title"><span>2020/00/00</span>仮文章仮文章仮文章</h2>
                    <img class="article-img" width="325" height="175" src="images/FFFFFF.png" alt="">
                </article>
                <article class="article">
                    <h2 class="article-title"><span>2020/00/00</span>仮文章仮文章仮文章</h2>
                    <img class="article-img" width="325" height="175" src="images/FFFFFF.png" alt="">
                </article>
            </div>
            <p><a class="button-more" href="">MORE</a></p>
        </section>
        <!-- 講師紹介 -->
        <section class="mentor-intro">
            <h2 class="mentor-intro-title">- 講師紹介 -</h2>
            <div class="mentor-intro-box">
                <section class="mentor-info">
                    <div class="mentor-info-text">
                        <p>シルバーランク<img class="rank-icon" width="25px" height="25px" src="images/silver.png" alt=""></p>
                        <h3>佐藤 太郎 (Sato Taro)</h3>
                        <p>30歳</p>
                        <p>フリーランスエンジニア</p>
                        <p>◯◯◯が得意です！よろしくお願いします！</p>
                        <p class="button"><a href="{{ route('syousai') }}">詳しくはこちら</a></p>
                    </div>
                    <img class="mentor-info-img" width="250" height="250" src="images/FFFFFF.png" alt="">
                </section>
                <section class="mentor-info">
                    <div class="mentor-info-text">
                        <p>シルバーランク<img class="rank-icon" width="25px" height="25px" src="images/silver.png" alt=""></p>
                        <h3>佐藤 太郎 (Sato Taro)</h3>
                        <p>30歳</p>
                        <p>フリーランスエンジニア</p>
                        <p>◯◯◯が得意です！よろしくお願いします！</p>
                        <p class="button"><a href="{{ route('syousai') }}">詳しくはこちら</a></p>
                    </div>
                    <img class="mentor-info-img" width="250" height="250" src="images/FFFFFF.png" alt="">
                </section>
                <section class="mentor-info">
                    <div class="mentor-info-text">
                        <p>シルバーランク<img class="rank-icon" width="25px" height="25px" src="images/silver.png" alt=""></p>
                        <h3>佐藤 太郎 (Sato Taro)</h3>
                        <p>30歳</p>
                        <p>フリーランスエンジニア</p>
                        <p>◯◯◯が得意です！よろしくお願いします！</p>
                        <p class="button"><a href="{{ route('syousai') }}">詳しくはこちら</a></p>
                    </div>
                    <img class="mentor-info-img" width="250" height="250" src="images/FFFFFF.png" alt="">
                </section>
                <section class="mentor-info">
                    <div class="mentor-info-text">
                        <p>シルバーランク<img class="rank-icon" width="25px" height="25px" src="images/silver.png" alt=""></p>
                        <h3>佐藤 太郎 (Sato Taro)</h3>
                        <p>30歳</p>
                        <p>フリーランスエンジニア</p>
                        <p>◯◯◯が得意です！よろしくお願いします！</p>
                        <p class="button"><a href="{{ route('syousai') }}">詳しくはこちら</a></p>
                    </div>
                    <img class="mentor-info-img" width="250" height="250" src="images/FFFFFF.png" alt="">
                </section>
            </div>
        </section>
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