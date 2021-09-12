<article class="l-sidebar p-side-menu">
    <h2 class="p-side-menu-logo">Menu</h2>
    <!-- バーガー -->
    <div class="p-gmenu">
        <span class="c-close__button" id="js-close-button"></span>   <!-- レスポンシブ用閉じるボタン -->
        <!--<div class="p-sidebar__burger">
            <h3 class="p-side__sub-menu-logo">バーガー</h3>
            <ul>
                <li><a href="#">ハンバーガー</a></li>
                <li><a href="/archive.html">チーズバーガー</a></li>
                <li><a href="#">テリヤキバーガー</a></li>
                <li><a href="#">アボカドバーガー</a></li>
                <li><a href="#">フィッシュバーガー</a></li>
                <li><a href="#">ベーコンバーガー</a></li>
                <li><a href="#">チキンバーガー</a></li>
            </ul>
        </div>  -->
        <!-- サイド -->
        <!--<div class="p-sidebar__side">
            <h3 class="p-side__sub-menu-logo">サイド</h3>
            <ul>
                <li><a href="#">ポテト</a></li>
                <li><a href="#">サラダ</a></li>
                <li><a href="#">ナゲット</a></li>
                <li><a href="#">コーン</a></li>
            </ul>
        </div>  -->
        <!-- ドリンク -->
        <!--<div class="p-sidebar__drink">
            <h3 class="p-side__sub-menu-logo">ドリンク</h3>
            <ul>
                <li><a href="#">コーラ</a></li>
                <li><a href="#">ファンタ</a></li>
                <li><a href="#">オレンジ</a></li>
                <li><a href="#">アップル</a></li>
                <li><a href="#">紅茶（Ice/Hot）</a></li>
                <li><a href="#">コーヒー（Ice/Hot）</a></li>
            </ul>
        </div>  -->
        <?php
            if ( is_active_sidebar( 'menu_widget' ) ) :
                dynamic_sidebar( 'menu_widget' );
            else:
        ?>
        <div class="widget">
            <h2>No Widget</h2>
            <p>ウィジットは設定されていません。</p>
        </div>
        <?php endif; ?>
    </div>
</article>
    