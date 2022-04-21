$("#transportir").on('change',function(){
    if($(this).val() == 1){
        $('.map1').fadeIn('slow');
        $('.map2').fadeOut('slow');
        $('.map3').fadeOut('slow');
    }
    else if($(this).val() == 2){
        $('.map1').fadeOut('slow');
        $('.map2').fadeIn('slow');
        $('.map3').fadeOut('slow');
    }
    else if($(this).val() == 3){
        $('.map1').fadeOut('slow');
        $('.map2').fadeOut('slow');
        $('.map3').fadeIn('slow');
    }
});