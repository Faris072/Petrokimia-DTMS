$('#simpan').on('click',function(){
    let transportir = $('#transportir').val();
    let namaDriver = $('#namaDriver').val();
    let telepon = $('#telepon').val();
    let kota = $('#kota').val();
    let alamat = $('#alamat').val();

    if(transportir == null || namaDriver.length < 1 || telepon.length < 1 || kota == null || alamat.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});

$('#save').on('click',function(){
    let transportir = $('#transportir2').val();
    let namaDriver = $('#namaDriver2').val();
    let telepon = $('#telepon2').val();
    let kota = $('#kota2').val();
    let alamat = $('#alamat2').val();

    if(transportir == null || namaDriver.length < 1 || telepon.length < 1 || kota == null || alamat.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#edit').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});
