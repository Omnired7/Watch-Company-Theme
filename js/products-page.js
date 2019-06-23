function colapseProdSidebar($){
    var parrentItems = $('#page #content #secondary .widget_product_categories>ul .cat-parent');
    parrentItems.addClass('colapse');
    parrentItems.click(function(){
        if($(this).hasClass('colapse')){
            $(this).addClass('expand');
            $(this).removeClass('colapse');
        }else{
            $(this).addClass('colapse');
            $(this).removeClass('expand');
        }
    });
}
jQuery(document).ready(function($){
    colapseProdSidebar($);
});