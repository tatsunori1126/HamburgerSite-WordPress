<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQueryの読み込み -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="l-container">
        <div class="p-mask"></div>
        <!-- ヘッダー -->
        <header class="l-header">
            <div class="p-button--responsive">
                <button type="button" class="c-button--menu" id="js-menu-button">Menu</button>  <!-- レスポンシブ用メニューボタン -->
            </div>
            <div class="p-header__sub">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                </a>
                <!-- 検索フォーム -->
                <?php get_search_form(); ?>
            </div>
        </header>