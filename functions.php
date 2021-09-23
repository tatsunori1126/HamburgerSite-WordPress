<?php
    //テーマサポート
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); //必ず記述する
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
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.0/css/all.css' , array(), 'v5.15.0');   //FontAwesomeの読み込み
        wp_enqueue_style( 'hamburger', get_theme_file_uri (  '/css/hamburger.css' ), array(), '1.0.0' );     //自分で作成したテーマ用CSSファイルの読み込み
        wp_enqueue_style( 'style', get_theme_file_uri (  '/style.css' ), array(), '1.0.0' );       //テーマデフォルトstyle.cssの読み込み
        wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "3.6.0", true );      //CDNのjQuery本体の読み込み
        wp_enqueue_script( 'slide-menu', get_theme_file_uri('/js/slide-menu.js'), array('jquery'), '1.0.0', true );     //自分で作ったJavaScriptファイルの読み込み
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );
    
    // サイドバーにメニューを表示
    function register_my_menus() {
        register_nav_menus( array(  //複数のナビゲーションメニューを登録する関数
        //'管理画面のカスタムメニューの「メニューの位置」の識別子' => 'メニューの説明の文字列'
        'global' => 'グローバル',
        'side'   => 'サイド',
        'footer' => 'フッター'
        ) );
    }
    add_action( 'after_setup_theme', 'register_my_menus' );
    
    // 空欄・スペース検索の結果を変更する関数（結果非表示）
    function mycus_empty_and_blank_search_invalid_func( $search, \WP_Query $q ) {
        if ( $q->is_search() && $q->is_main_query() && ! $q->is_admin() ) {
            $s = $q->get( 's' );
            $s = trim( $s );
            if ( empty( $s ) ) {
                $search .=" AND 0=1 ";
            }
        }
        return $search;
    }
    add_filter( 'posts_search', 'mycus_empty_and_blank_search_invalid_func', 10, 2 );

