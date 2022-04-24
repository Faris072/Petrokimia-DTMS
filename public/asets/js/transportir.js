$('#data-table-transportir').DataTable({
    'ajax' : '/asets/json/transportir.json',
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
        {'data' : 'pimpinan'},
        {
            'data' : null,
            'render' : function(data,row,type){
                return '<b>'+data['perusahaan']+'</b><br><span style="color:grey;">'+data['alamat']+'</span>';
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
