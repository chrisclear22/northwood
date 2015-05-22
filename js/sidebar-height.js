jQuery(document).ready(function($) {

    if ( $(".content-area").height() > $("#secondary").height() ) {
        $("#secondary").css({'height': ($(".content-area").height() + 'px')});
    } else {
        $(".content-area").css({'height': ($("#secondary").height() + 'px')});
    }
});