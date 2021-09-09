<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //表示されたページがフロントページかつメインページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名にしてください
        } elseif ( is_singular() ) { //表示されたページが個別投稿ページなら
            $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルにしてください
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function load_js() {
        //管理画面を除外
        if ( !is_admin() ){
            //事前に読み込まれるjQueryを解除
            wp_deregister_script( 'jquery' );
    
            //Google CDNのjQueryを出力
            wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), NULL, true );
    
            //自作スクリプトや、jQueryのライブラリも同様に読み込みます。
            wp_enqueue_script( 'l-sidebar', get_template_directory_uri() . '/js/slide-menu.js', array(), '1.0.0', true );
        }
    }
    add_action( 'init', 'load_js' );

    function hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.0/css/all.css', array(), 'v5.15.0' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );