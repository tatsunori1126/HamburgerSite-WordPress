<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HamburgerSite</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="l-container">
        <div class="p-mask"></div>
        <!-- ヘッダー -->
        <header class="l-header">
            <div class="p-button--responsive">
                <button type="button" class="c-button--menu" id="js-menu-button">Menu</button>  <!-- レスポンシブ用メニューボタン -->
            </div>
            <div class="p-header__sub">
                <h1><a href="front-page.html">Hamburger</a></h1>
                <!-- 検索フォーム -->
                <form action="/archive-search.html" class="p-search-form">
                    <input type="search" name="search" class="c-input--keyword" placeholder="&#xf002">
                    <input type="submit" class="c-button--submit" value="検索">
                </form>
            </div>
        </header>
        <!-- サイドバー -->
        <article class="l-sidebar p-side-menu">
            <h2 class="p-side-menu-logo">Menu</h2>
            <!-- バーガー -->
            <div class="p-gmenu">
                <span class="c-close__button" id="js-close-button"></span>   <!-- レスポンシブ用閉じるボタン -->
                <div class="p-sidebar__burger">
                    <h3 class="p-side__sub-menu-logo">バーガー</h3>
                    <ul>
                        <li><a href="#">ハンバーガー</a></li>
                        <li><a href="#">チーズバーガー</a></li>
                        <li><a href="#">テリヤキバーガー</a></li>
                        <li><a href="#">アボカドバーガー</a></li>
                        <li><a href="#">フィッシュバーガー</a></li>
                        <li><a href="#">ベーコンバーガー</a></li>
                        <li><a href="#">チキンバーガー</a></li>
                    </ul>
                </div>
                <!-- サイド -->
                <div class="p-sidebar__side">
                    <h3 class="p-side__sub-menu-logo">サイド</h3>
                    <ul>
                        <li><a href="#">ポテト</a></li>
                        <li><a href="#">サラダ</a></li>
                        <li><a href="#">ナゲット</a></li>
                        <li><a href="#">コーン</a></li>
                    </ul>
                </div>
                <!-- ドリンク -->
                <div class="p-sidebar__drink">
                    <h3 class="p-side__sub-menu-logo">ドリンク</h3>
                    <ul>
                        <li><a href="#">コーラ</a></li>
                        <li><a href="#">ファンタ</a></li>
                        <li><a href="#">オレンジ</a></li>
                        <li><a href="#">アップル</a></li>
                        <li><a href="#">紅茶（Ice/Hot）</a></li>
                        <li><a href="#">コーヒー（Ice/Hot）</a></li>
                    </ul>
                </div>
            </div>
        </article>
        <!-- メイン -->
        <div class="l-archive-main">
            <div class="p-archive-top-back">
                <div class="p-archive-top-visual">
                    <h2>Menu:</h2>
                    <p>チーズバーガー</p>
                </div>
            </div>
            <div class="p-archive-menu-top">
                <div class="p-archive-main__heading-text">
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
            </div>
            <section class="p-archive-main-visual">
                <div class="p-archive-burger-menu">
                    <img src="/images/archive_main_img.png" alt="チーズバーガーの写真">
                    <div class="p-archive-menu_introduction">
                        <div class="p-archive-menu_introduction_sub">
                            <h4>チーズバーガー</h4>
                            <h5>小見出しが入ります</h5>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <div class="p-archive-detail">
                            <a href="single.html">詳しく見る</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-archive-main-visual">
                <div class="p-archive-burger-menu">
                    <img src="/images/archive_main_img.png" alt="ダブルチーズバーガーの写真">
                    <div class="p-archive-menu_introduction">
                        <div class="p-archive-menu_introduction_sub">
                            <h4>ダブルチーズバーガー</h4>
                            <h5>小見出しが入ります</h5>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <div class="p-archive-detail">
                            <a href="single.html">詳しく見る</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-archive-main-visual">
                <div class="p-archive-burger-menu">
                    <img src="/images/archive_main_img.png" alt="スペシャルチーズバーガーの写真">
                    <div class="p-archive-menu_introduction">
                        <div class="p-archive-menu_introduction_sub">
                            <h4>スペシャルチーズバーガー</h4>
                            <h5>小見出しが入ります</h5>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <div class="p-archive-detail">
                            <a href="single.html">詳しく見る</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="p-arrow">
                <div class="p-arrow-left-block">
                    <p class="p-page-display">Page 1/10</p>
                    <a class="p-arrow-logo" href="#"><div class="p-left-arrow"></div></a>
                    <a class="p-arrow-text p-arrow-before-text" href="#">前へ</a>
                </div>
                <div class="p-pagination">
                    <ul class="p-pagination-box">
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">1</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">2</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">3</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">4</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">5</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">6</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">7</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">8</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">9</a></li>
                    </ul>
                </div>
                <div class="p-arrow-right-block">
                    <a class="p-arrow-text p-arrow-next-text" href="#">次へ</a>
                    <a class="p-arrow-logo" href="#"><div class="p-right-arrow"></div></a>
                </div>
            </div>
        </div>
        <!-- フッター -->
        <footer class="l-footer">
            <ul class="p-footer__menu">
                <li class="p-pseudo"><a href="page.html">ショップ情報</a></li>
                <li><a href="#">ヒストリー</a></li>
            </ul>
            <p class="copyright">Copyright: RaiseTech</p>
        </footer>
    </div>
    <script type="text/javascript" src="js/slide-menu.js"></script>
</body>
</html>