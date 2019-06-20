jQuery(document).ready(function($){
    function clearMobile(nav, navCont, navFont){
        nav.prop('style', '');
        navCont.prop('style', '');
        navFont.prop('style', '');
        $('body').css('overflow', 'scroll');
    }
    $('#menu-icon').click(function(){
        var nav = $('#page #masthead #site-navigation #primary-menu');
        var navCont = $('#page #masthead #site-navigation #primary-menu li');
        var navFont = $('#page #masthead #site-navigation #primary-menu li a');
        if(nav.css('display') == 'none'){
            nav.css({
                'display' : 'flex',
                'flex-flow' : 'column nowrap',
                'position' : 'fixed',
                'background' : '#FFFFFF',
                'height' : '100vh',
                'top' : '0em',
                'z-index' : '1000'
            });
            navCont.css({
                'margin-left' : '20vw',
                'font-size' : '1em'
            });
            navFont.css({
                'color': '#000',
                'text-transform' : 'uppercase'
            });
            $('body').css('overflow', 'hidden');
        }else{
            clearMobile(nav, navCont, navFont);
        }
    });
    $(window).resize(function(){
        if($( window ).width() > 776){
            var nav = $('#page #masthead #site-navigation #primary-menu');
            var navCont = $('#page #masthead #site-navigation #primary-menu li');
            var navFont = $('#page #masthead #site-navigation #primary-menu li a');
            clearMobile(nav, navCont, navFont);
        }
    });
});