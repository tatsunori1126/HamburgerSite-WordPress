<article class="l-sidebar p-side-menu">
    <h2 class="p-side-menu-logo">Menu</h2>
    <!-- バーガー -->
    <div class="p-gmenu">
        <span class="c-close__button" id="js-close-button"></span>   <!-- レスポンシブ用閉じるボタン -->
        <div class="p-sidebar__burger">
            <!-- テンプレートファイルのメニューを表示したい場所に記述 -->
            <?php
                // カスタムメニューの「メニューの位置」を'side'にしているのでその内容をサイドバーに表示
                wp_nav_menu( array(
                    'theme_location' => 'side',
                    'container' => 'div',
                    'container_class' => 'add-class'
                ));
            ?>
        </div>
    </div>
</article>
    