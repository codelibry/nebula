import $ from 'jquery';

function scrollToTop(){
    $(".footer__goUpBtn a").click(function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
}

export{scrollToTop};