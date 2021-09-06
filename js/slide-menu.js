jQuery(function() {
    // メニューボタンをクリックしたら
    jQuery("#js-menu-button").on("click", function() {
        // サイドバーがスライドして表示されて
        jQuery(".l-sidebar").toggleClass("is-open");
        // コンテンツにマスクがかかる
        jQuery(".p-mask").toggleClass("show");
        // body全体にfixedを指定して画面を固定する
        jQuery('body').toggleClass('is-fixed');
    });
    // Xボタンをクリックしたら
    jQuery("#js-close-button").on("click", function() {
        // サイドバーがスライドして非表示になって
        jQuery(".l-sidebar").toggleClass("is-open");
        // コンテンツにかかっていたマスクが非表示になる
        jQuery(".p-mask").toggleClass("show");
        // body全体にfixedで画面を固定していたのを解除する
        jQuery('body').toggleClass('is-fixed');
    });
    // ウィンドウサイズを変えたとき
    if (jQuery(window).resize(function(){ 
        //is-open（サイドバー表示）を削除して.l-sidebar（スマホ、タブレット用のサイドバー）を非表示の状態にする
        jQuery(".l-sidebar").removeClass("is-open"); 
        //show（マスク）を削除してマスクを非表示にする
        jQuery(".p-mask").removeClass("show");
        // body全体にfixedで画面を固定していたのを解除する
        jQuery("body").removeClass("is-fixed");
    }));
});

