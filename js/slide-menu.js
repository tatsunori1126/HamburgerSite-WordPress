$(function() {
    // メニューボタンをクリックしたら
    $("#c-button--menu--js").on("click", function() {
        // サイドバーがスライドして表示されて
        $(".l-sidebar").toggleClass("is-open");
        // コンテンツにマスクがかかる
        $(".mask").toggleClass("show");
        $('body').toggleClass('is-fixed');
    });
    // Xボタンをクリックしたら
    $("#c-close__button__js").on("click", function() {
        // サイドバーがスライドして非表示になって
        $(".l-sidebar").toggleClass("is-open");
        // コンテンツにかかっていたマスクが非表示になる
        $(".mask").toggleClass("show");
        $('body').toggleClass('is-fixed');
    });
});


// ウィンドウサイズを変えたとき
if ($(window).resize(function(){ 
    $(".l-sidebar").removeClass("is-open"); //is-open（サイドバー表示）を削除して.l-sidebar（スマホ、タブレット用のサイドバー）を非表示の状態にする
    $(".mask").removeClass("show"); //show（マスク）を削除してマスクを非表示にする   
    $("body").removeClass("is-fixed");
}));

