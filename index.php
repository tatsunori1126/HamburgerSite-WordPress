<?php
    $get_page_id = get_page_by_path( "takeout" );   //TakeOutの固定ページのスラッグを$get_page_idに代入
    // var_dump( $get_page_id );    //IDが返ってきているか確認するためのコード
    if ( $get_page_id ) {
        $get_page_id_takeout = $get_page_id->ID;    //返ってきたIDを変数に入れて、その変数をget_page_link(この中に記述$get_page_id_takeout);
    }
    
    $get_page_id = get_page_by_path( "eatin" );
    if ( $get_page_id ) {
        $get_page_id_eatin = $get_page_id->ID;
    }
?>
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
                <?php if ( $get_page_id_takeout ) : ?>
                    <h2><a href="<?php echo get_page_link( $get_page_id_takeout ); ?>">Take Out</a></h2>   <!-- テイクアウトの固定ページへ -->
                <?php else : ?>
                    <h2>Take Out</h2>
                <?php endif; ?>
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
                <?php if ( $get_page_id_eatin ) : ?>
                    <h2><a href="<?php echo get_page_link( $get_page_id_eatin ); ?>">Eat In</a></h2> <!-- イートインの固定ページへ -->
                <?php else : ?>
                    <h2>Eat In</h2>
                <?php endif; ?>
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
    
    