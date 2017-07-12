$("#link-login").click(function () {
    $("#form-login").slideUp(250), $("#form-register").slideDown(250, function () {
        $("input").placeholder()
    });
});

$("#link-register").click(function () {
    $("#form-register").slideUp(250), $("#form-login").slideDown(250, function () {
        $("input").placeholder()
    });
}); 