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

$('#simpan').on('click',function(){
    let transportir = $('#transportir').val();
    let harga = $('#input-harga').val();
    let gudangAsal = $('#gudangAsal').val();
    let gudangTujuan = $('#gudangTujuan').val();

    if(transportir == null || harga.length < 1 || gudangAsal == null || gudangTujuan == null){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});