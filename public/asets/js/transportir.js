$('#simpan').on('click',function(){
    let pimpinan = $('#pimpinan').val();
    let perusahaan = $('#perusahaan').val();
    let telepon = $('#telepon').val();
    let alamat = $('#alamat').val();

    if(pimpinan.length < 1 || perusahaan.length < 1 || telepon.length < 1 || alamat.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});

$('#save').on('click',function(){
    let pimpinan = $('#pimpinan2').val();
    let perusahaan = $('#perusahaan2').val();
    let telepon = $('#telepon2').val();
    let alamat = $('#alamat2').val();

    if(pimpinan.length < 1 || perusahaan.length < 1 || telepon.length < 1 || alamat.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#edit').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});
