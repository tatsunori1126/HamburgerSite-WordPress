<?php get_header(); ?>  <!-- header.phpを読み込む -->
        <!-- サイドバー -->
        <?php get_sidebar(); ?> <!-- sidebar.phpを読み込む -->
        <!-- メイン -->
        <div class="l-main">
            <div class="p-top-visual">  <!-- トップ画像 -->
                <h2>ダミーサイト</h2>   <!-- トップ画像見出し -->
            </div>
            <!-- ブランチメニュー -->
            <div class="p-branch-menu">
                <ul>
                    <!-- テイクアウト -->
                    <li class="p-take-out">
                        <h2><a href="<?php echo get_page_link(113); ?>">Take Out</a></h2>   <!-- テイクアウトの固定ページへ -->
                        <!-- テイクアウト説明文1 -->
                        <dl class="p-take-out__section1">
                            <dt>Take OUT</dt>
                            <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                        <!-- テイクアウト説明文2 -->
                        <dl class="p-take-out__section2">
                            <dt>Take OUT</dt>
                            <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                    </li>
                    <!-- イートイン -->
                    <li class="p-eat-in">
                        <h2><a href="<?php echo get_page_link(120); ?>">Eat In</a></h2> <!-- イートインの固定ページへ -->
                        <!-- イートイン説明文1 -->
                        <dl class="p-eat-in__section1">
                            <dt>Eat IN</dt>
                            <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                        <!-- イートイン説明文2 -->
                        <dl class="p-eat-in__section2">
                            <dt>Eat IN</dt>
                            <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- アクセス -->
            <section class="p-access">  <!-- 最背面の黒色の背景色 -->
                <div class="p-access__map"></div>   <!-- 地図 -->
                <div class="p-access__back">    <!-- 説明文の背景色 -->
                    <div class="p-access__text">    <!-- 説明文 -->
                        <h2>見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>        
                </div>
            </section> 
        </div>
        <!-- フッター -->
        <?php get_footer(); ?>  <!-- footer.phpを読み込む -->
