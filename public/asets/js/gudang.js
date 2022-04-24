$('#data-table-gudang').DataTable({
    'ajax' : '/asets/json/gudang.json',
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
        {'data' : 'nama gudang'},
        {'data' : 'kecepatan maksimal'},
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
        {'defaultContent': '<a class="edit p-2 py-1" data-toggle="modal" data-target="#edit" style="background-color:rgba(139, 212, 218, 0.192); border-radius:5px;"><i class="fas fa-pencil-alt"></i></a>'},
    ]
});

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
