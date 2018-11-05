$(document).on("scroll",function(){
    if($(document).scrollTop() > 0){
        $('nav').removeClass("large");
        $("a.gtco-nav-toggle").removeClass("large");
    } else{
        $('nav').addClass("large");
        $('a.gtco-nav-toggle').addClass("large");
    }
});

$(document).ready(function() {
    if($(document).scrollTop() > 0){
        $('nav').removeClass("large");
        $("a.gtco-nav-toggle").removeClass("large");
    } else{
        $('nav').addClass("large");
        $('a.gtco-nav-toggle').addClass("large");
    }
})

var pathname = window.location.pathname;

if(pathname.startsWith('/con')) {
    document.querySelectorAll('nav a[href="./con"]')[0].style.setProperty('color', 'white', 'important')
} else if(pathname.startsWith('/home')) {
    document.querySelectorAll('nav a[href="./home"]')[0].style.setProperty('color', 'white', 'important')
} else {
    document.querySelectorAll('nav a[href="#!"]')[0].style.setProperty('color', 'white', 'important')
}