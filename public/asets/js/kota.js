$('#simpan').on('click',function(){
    let namaKota = $('#namaKota').val();

    if(namaKota.length < 1 ){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});

$('#save').on('click',function(){
    let namaKota = $('#namaKota2').val();

    if(namaKota.length < 1 ){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#edit').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});