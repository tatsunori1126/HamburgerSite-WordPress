<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">   <!-- 管理画面で設定した言語を出力 -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- WordPressでは記入必須 -->
    <!-- ここからアドミンバーが表示されている時だけサイドバーを32px下に下げるコード（スマホ、タブレットの画面の時に閉じるボタンがアドミンバーと被ってしまうため） -->
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
        .l-sidebar {
            margin-top: 32px;
        }
    </style>
    <?php endif; ?>
    <!-- ここまで -->
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="l-container">
        <div class="p-mask"></div>
        <!-- ヘッダー -->
        <header class="l-header">
            <div class="p-button--responsive">
                <button type="button" class="c-button--menu" id="js-menu-button">Menu</button>  <!-- レスポンシブ用メニューボタン -->
            </div>
            <div class="p-header__sub">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">    <!-- タイトルロゴをクリックするとトップページに戻る -->
                <?php bloginfo( 'name' ); ?></a></h1>   <!-- 設定したサイト名を表示 -->
                <!-- 検索フォーム -->
                <?php get_search_form(); ?> <!-- searchform.phpを読み込む -->
            </div>
        </header>