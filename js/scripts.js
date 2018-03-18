/*
Theme name: Euler.
Author: David N Huang
Author URI: www.davidnhuang.com
Version: 23.0
*/

$(document).ready(function(){
    //loaded state
    setTimeout(function(){
        $('body').addClass('loaded')}, 2);
    //loaded state
    setTimeout(function(){
        $('#loaded-state').addClass('.fade-in')}, 2);
    //cover page javascript
    $('.arrow-down-hover').click(function(event){
        event.preventDefault();
        $('#cover').fadeOut();
        $('#arrow').fadeOut();
    });
    //show or hide button
    $(window).scroll(function() {
       if ($(this).scrollTop() > 300) {
           $('#go-top').fadeIn(500);
       } else {
           $('#go-top').fadeOut(500);
       }
    });
    //back to top animation
    $('#go-top').click(function(event) {
        event.preventDefault();

        $('html, body').animate({scrollTop: 0}, 300);
    });
    //open and close dropdown menu
    $('#mobile-menu').click(function(event) {
      event.preventDefault ();

      $('#mobile-dropdown').fadeIn(500);
    });
    $('.dropdown-close').click(function(event) {
      event.preventDefault ();

      $('#mobile-dropdown').fadeOut(500);
    });
    //disable hover states on Mobile
    var touch = 'ontouchstart' in document.documentElement
    || navigator.maxTouchPoints > 0
    || navigator.msMaxTouchPoints > 0;

    if (touch) { // remove all :hover stylesheets
        try { // prevent exception on browsers not supporting DOM styleSheets properly
            for (var si in document.styleSheets) {
                var styleSheet = document.styleSheets[si];
                if (!styleSheet.rules) continue;

                for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                    if (!styleSheet.rules[ri].selectorText) continue;

                    if (styleSheet.rules[ri].selectorText.match(':hover')) {
                        styleSheet.deleteRule(ri);
                    }
                }
            }
        } catch (ex) {}
    }
});
