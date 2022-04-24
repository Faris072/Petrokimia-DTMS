$('#data-table-driver').DataTable({
    'ajax' : '/asets/json/driver.json',
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
                return '<b>'+data['nama']+'</b><br><span style="color:grey;">'+data['transporter']+'</span>';
            }
        },
        {
            'data' : null,
            'render' : function(data, row, type){
                return '<b>'+data['kota']+'</b><br><span style="color:grey;">'+data['alamat']+'</span>';
            }
        },
        {'data' : 'telepon'},
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
