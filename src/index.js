$(function () {
    // check switch for dark-mode, and pass it to the darkMode function
    darkMode($("#dark-mode-switch:checked").val());

    // dark mode switch
    $("#dark-mode-switch:checkbox").change(function () {
        if (this.checked) {
            darkMode(true);
        } else {
            darkMode(false);
        }
    });

    // turn events places heading green
    $("#events h3").css({ "color": "green" });

    // text-shadow to make them pop up
    $("h1, h2, h3, h4, h5, h6")
        .css({
            "text-shadow": "1px 1px 4px black",
            "margin": 0,
            "padding": 0
        });

    // remove margin padding from elements
    $("#events dl, dt").css({ "margin": 0, "padding": 0 })

    $("#contact-us-btn button").css({ "text-transform": "capitalize" });

    // toggle side navigation through hamburger menu
    $("#hamburger-menu ul").toggle();
    $("#navbar-menu-btn").click(function () {
        $("#hamburger-menu  ul").toggle();
    });

    // give social media buttons in the footer a title
    $(".social .btn").attr("title", "click to open in new tab")

    // listen for click events on the social media button to open them
    // ref: https://www.freecodecamp.org/news/how-to-use-html-to-open-link-in-new-tab/
    $("#social-facebook").click(function () {
        window.open("https://facebook.com/bhavik.knight", "_blank noreferrer noopener");
    });

    $("#social-instagram").click(function () {
        window.open("https://instagram.com/bhavik_knight", "_blank noreferrer noopener");
    });

    $("#social-twitter").click(function () {
        window.open("https://twitter.com/bhavik_knight", "_blank noreferrer noopener");
    });

    $("#social-github").click(function () {
        window.open("https://github.com/bhavik-knight", "_blank noreferrer noopener");
    });

    $("#social-linkedin").click(function () {
        window.open("https://linkedin.com/in/bhavikbhagat", "_blank noreferrer noopener");
    });
    // end of social media button click event-listener
});


// independent function to toggle between dark mode and normal mode
function darkMode(isTrue) {
    if (isTrue) {
        // turn dark mode on
        $("nav").addClass("navbar-dark bg-dark border-white");
        $("#hamburger-menu").addClass("bg-dark");
        $("body").addClass("bg-dark text-white");
        $(".card").addClass("bg-dark text-white border-white");
        $("#events h3").css({ "color": "cyan" });
        $("#events h1, h2, h3, h4, h5, h6").addClass("border-white");
        $("header, footer").css({
            "box-shadow": "1px 1px 4px white"
        })
        $("h1, h2, h3, h4, h5, h6, .navbar-text")
            .css({
                "text-shadow": "1px 1px 4px white",
                "padding": 0,
                "margin": 0
            });
        $("#events, .bg-img-container, #hamburger-menu")
            .css({
                "border": "2px solid white",
                "box-shadow": "2px 2px 8px white"
            });
    } else {
        // turn dark mode off
        $("nav").removeClass("navbar-dark bg-dark border-white");
        $("#hamburger-menu").removeClass("bg-dark");
        $("body").removeClass("bg-dark text-white");
        $(".card").removeClass("bg-dark text-white border-white");
        $("#events h3").css({ "color": "green" });
        $("#events h1, h2, h3, h4, h5, h6")
            .removeClass("border-white")
            .css({
                "border-bottom": "2px solid black",
                "width": "fit-content"
            });
        $("h1, h2, h3, h4, h5, h6, .navbar-text")
            .css({
                "text-shadow": "1px 1px 4px black",
                "padding": 0,
                "margin": 0
            });
        $("#events, #hamburger-menu, .bg-img-container")
            .css({
                "border": "2px solid black",
                "box-shadow": "2px 2px 8px black"
            });
    }
}
