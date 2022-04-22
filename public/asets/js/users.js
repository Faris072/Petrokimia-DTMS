$('#role').on('change', function(){
    $('#transportirChange').removeAttr('disabled');
});

$('#role2').on('change', function(){
    $('#transportirChange2').removeAttr('disabled');
});

$('#simpan').on('click',function(){
    let namaPengguna = $('#namaPengguna').val();
    let username = $('#username').val();
    let role = $('#role').val(); //s
    let transportirChange = $('#transportirChange').val(); //s
    let sandi = $('#sandi').val();
    let confirmSandi = $('#confirmSandi').val();
    let sandiDefault = $('#sandiDefault').text();

    if(namaPengguna.length < 1 || username.length < 1 || role == null || transportirChange == null){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else if(sandi.length < 1 && confirmSandi.length < 1){
        $('#sandi').val(sandiDefault);
        $('#confirmSandi').val(sandiDefault);
    }
    else if(sandi.length >= 1 && confirmSandi.length < 1 || sandi.length < 1 && confirmSandi >= 1){
        swal("Please Enter!", "Sandi harus di isi semua atau tidak di isi keduanya!", "warning");
    }
    else if(sandi != confirmSandi){
        swal("Password tidak sesuai!", "Sandi dan konfirmasi sandi harus sama!", "warning");
    }
    else{
        swal("Berhasil!", "Data telah disimpan!\nSandi Anda: "+sandiDefault, "success");
        $('#tambahData').modal('hide');
    }
});

$('#save').on('click',function(){
    let namaPengguna = $('#namaPengguna2').val();
    let username = $('#username2').val();
    let role = $('#role2').val(); //s
    let transportirChange = $('#transportirChange2').val(); //s
    let sandi = $('#sandi2').val();
    let confirmSandi = $('#confirmSandi2').val();
    let sandiDefault = $('#sandiDefault2').text();

    if(namaPengguna.length < 1 || username.length < 1 || role == null || transportirChange == null){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else if(sandi.length < 1 && confirmSandi.length < 1){
        $('#sandi2').val(sandiDefault);
        $('#confirmSandi2').val(sandiDefault);
    }
    else if(sandi.length >= 1 && confirmSandi.length < 1 || sandi.length < 1 && confirmSandi >= 1){
        swal("Please Enter!", "Sandi harus di isi semua atau tidak di isi keduanya!", "warning");
    }
    else if(sandi != confirmSandi){
        swal("Password tidak sesuai!", "Sandi dan konfirmasi sandi harus sama!", "warning");
    }
    else{
        swal("Berhasil!", "Data telah disimpan!\nSandi Anda: "+sandiDefault, "success");
        $('#edit').modal('hide');
    }
});