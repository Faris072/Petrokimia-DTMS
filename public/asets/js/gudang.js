$('#simpan').on('click',function(){
    let namaGudang = $('#namaGudang').val();
    let kecepatanMaksimal = $('#kecepatanMaksimal').val();
    let beachonCheckPoint = $('#beachonCheckPoint').val();
    let beaconEntryPoint = $('#beaconEntryPoint').val();
    let lokasiGudang = $('#lokasiGudang').val();
    let longitude = $('#longitude').val();

    if(namaGudang.length < 1 || kecepatanMaksimal.length < 1 || beachonCheckPoint.length < 1 || beaconEntryPoint < 1 || lokasiGudang.length < 1 || longitude.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});

$('#save').on('click',function(){
    let namaGudang = $('#namaGudang2').val();
    let kecepatanMaksimal = $('#kecepatanMaksimal2').val();
    let beachonCheckPoint = $('#beachonCheckPoint2').val();
    let beaconEntryPoint = $('#beaconEntryPoint2').val();
    let lokasiGudang = $('#lokasiGudang2').val();
    let longitude = $('#longitude2').val();

    if(namaGudang.length < 1 || kecepatanMaksimal.length < 1 || beachonCheckPoint.length < 1 || beaconEntryPoint < 1 || lokasiGudang.length < 1 || longitude.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});
