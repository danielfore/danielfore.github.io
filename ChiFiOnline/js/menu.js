$( ".hamburger-icon a" ).on('vclick', function () {
    showMenu ();
    return false;
});
$( ".hamburger-icon a" ).on('click', function () {
    showMenu ();
    return false;
});

$('html').on('vclick', function () {
    if ( $( "section.mobile-menu" ).hasClass ( "active") ) {
        hideMenu ();
        return false;
    }
});
$('html').on('click', function () {
    if ( $( "section.mobile-menu" ).hasClass ( "active") ) {
        hideMenu ();
        return false;
    }
});

$('.mobile-menu').on('click', function(event){
    event.stopPropagation();
});
$('.mobile-menu').on('vclick', function(event){
    event.stopPropagation();
});

function showMenu () {
    var mobileMenu = $( "section.mobile-menu" );
    mobileMenu.removeClass( "menuOutTopLeft" );
    mobileMenu.addClass( "menuInTopLeft" );
    mobileMenu.addClass( "active" );
    return false;
}

function hideMenu () {
    var mobileMenu = $( "section.mobile-menu" );
    mobileMenu.removeClass( "menuInTopLeft" );
    mobileMenu.addClass( "menuOutTopLeft" );
    setTimeout(function() {
        mobileMenu.removeClass( "active" );
    }, 200);
    return false;
}