$(function() {
    // メニューボタンをクリックしたら
    $("#js-menu-button").on("click", function() {
        // サイドバーがスライドして表示されて
        $(".l-sidebar").toggleClass("is-open");
        // コンテンツにマスクがかかる
        $(".p-mask").toggleClass("show");
        // body全体にfixedを指定して画面を固定する
        $('body').toggleClass('is-fixed');
    });
    // Xボタンをクリックしたら
    $("#js-close-button").on("click", function() {
        // サイドバーがスライドして非表示になって
        $(".l-sidebar").toggleClass("is-open");
        // コンテンツにかかっていたマスクが非表示になる
        $(".p-mask").toggleClass("show");
        // body全体にfixedで画面を固定していたのを解除する
        $('body').toggleClass('is-fixed');
    });
    // ウィンドウサイズを変えたとき
    if ($(window).resize(function(){ 
        //is-open（サイドバー表示）を削除して.l-sidebar（スマホ、タブレット用のサイドバー）を非表示の状態にする
        $(".l-sidebar").removeClass("is-open"); 
        //show（マスク）を削除してマスクを非表示にする
        $(".p-mask").removeClass("show");
        // body全体にfixedで画面を固定していたのを解除する
        $("body").removeClass("is-fixed");
    }));
});

