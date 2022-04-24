//event dataTable
$('.table').on('draw.dt',function(){
    $(".switch").on('click',function(){
        $(this).toggleClass("switchOn");
    });

    $('.current').removeClass('paginate_button');
    $('.current').addClass('btn btn-dark');
    
    $('.gambar-truk').on('click',function(){
        let dataGambar = $(this).attr('data-gambar');
        // $('.gambar-truk-fluid').css('display','block');
        // $.fancybox.open({
        //     url:'/asets/images/'+dataGambar,
        //     type: 'iframe',
        //     opts : {
        //         afterShow : function( instance, current ) {
        //             console.info( 'done!' );
        //         }
        //     }
        // });
    });
});

