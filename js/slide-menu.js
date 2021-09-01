$(function() {
    $(".c-button--menu--js").on("click", function() {
        $(".l-sidebar").css("left", "0");
        $("body").css("background-color", "rgba(0,0,0,0.5)");
    });
    $(".c-close__button__js").on("click", function() {
        $(".l-sidebar").css("left", "100%");
    });
});

$(function(){
	if (window.matchMedia("(max-width: 1024px)").matches) {

}});
