<?php
    //テーマサポート
    add_theme_support( 'menus' );   //メニュー
    add_theme_support( 'title-tag' );   //<title>タグを出力する
    add_theme_support( 'post-thumbnails' );     //アイキャッチ画像を扱えるようにする
    add_theme_support( 'automatic-feed-links' );

    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名にする
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルにする
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.0/css/all.css', array(), 'v5.15.0' );   //Font Awesomeの読み込み
        wp_enqueue_style( 'hamburger', get_theme_file_uri (  '/css/hamburger.css' ), array(), '1.0.0' );     //自分で作成したテーマ用CSSファイルの読み込み
        wp_enqueue_style( 'style', get_theme_file_uri (  '/style.css' ), array(), '1.0.0' );       //テーマデフォルトstyle.cssの読み込み
        wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "3.6.0", true );      //CDNのjQuery本体の読み込み
        wp_enqueue_script( 'slide-menu', get_theme_file_uri('/js/slide-menu.js'), array('jquery'), '1.0.0', true );     //自分で作ったJavaScriptファイルの読み込み
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'All Menu',
                'id'            => 'menu_widget',
                'description'   => 'メニューの一覧です',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="c-category-title">',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );