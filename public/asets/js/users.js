$('#data-table-users').DataTable({
    'ajax' : '/asets/json/users.json',
    oLanguage : {
        oPaginate : {
            sNext : '<i class="fas fa-angle-double-right"></i>',
            sPrevious : '<i class="fas fa-angle-double-left"></i>',
        }
    },
    'columnDefs' : [{
        "defaultContent": "-", //ketika bernilai null maka akan terisi "-"
        "targets": "_all" //berlaku untuk semua baris dan kolom
    }], 
    'columns' : [
        {'data' : 'no'},
        {
            'data' : null,
            'render' : function(data,row,type){
                return '<b>'+data['nama']+'</b><br><span style="color:grey;">'+data['username']+'</span>';
            }
        },
        {
            'data' : null,
            'render' : function(data,row, type){
                let x = "-";
                let y = "";
                if(data['role'] == 'Administrator'){
                    x = '<span style="color:blue;"><i class="fas fa-circle pr-2 fa-xs"></i> '+data['role']+'</span>';
                }
                else if(data['role'] == 'Order Requester'){
                    x = '<span style="color:orange;"><i class="fas fa-circle pr-2 fa-xs"></i> '+data['role']+'</span>';
                }
                else if(data['role'] == 'Control Tower'){
                    x = '<span style="color:red;"><i class="fas fa-circle pr-2 fa-xs"></i> '+data['role']+'</span>';
                }
                else if(data['role'] == 'Driver'){
                    x = '<span style="color:black;"><i class="fas fa-circle pr-2 fa-xs"></i> '+data['role']+'</span>';
                }
                else if(data['role'] == 'Transportir'){
                    x = '<span style="color:green;"><i class="fas fa-circle pr-2 fa-xs"></i> '+data['role']+'</span>';
                }
                else if(data['role'] == 'Poolboy'){
                    x = '<span style="color:purple;"><i class="fas fa-circle pr-2 fa-xs"></i> '+data['role']+'</span>';
                }
                else{
                    x = "-";
                }

                if(data['perusahaan'] == null){
                    y = "";
                }
                else{
                    y = '<span class="text-muted">'+data['perusahaan']+'</span>';
                }

                return x+'<br>'+y;
            }
        },
        {
            'data' : 'status',
            'render' : function(data,row,type){
                if(data == true){
                    return '<div class="switch switchOn"></div>'
                }
                else{
                    return '<div class="switch"></div>'
                }
            }
        },
        // {'defaultContent': '<a class="edit p-2 py-1" data-toggle="modal" data-target="#ubah" style="background-color:rgba(139, 212, 218, 0.192); border-radius:5px;"><i class="fas fa-sync"></i></a>'},
        {'defaultContent': '<a class="edit p-2 py-1" data-toggle="modal" data-target="#edit" style="background-color:rgba(139, 212, 218, 0.192); border-radius:5px;"><i class="fas fa-pencil-alt"></i></a>'}
    ]
});


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