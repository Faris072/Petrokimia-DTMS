$('#data-table-truk').DataTable({
    'ajax' : '/asets/json/truk.json',
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
            'render' : function(data, row, type){
                return '<a href="/asets/images/'+data['gambar']+'" data-fancybox data-caption="Caption for single image"><img src="/asets/images/'+data['gambar']+'" class="gambar-truk" alt="gambar truk" style="border-radius:5px;" data-gambar="'+data['gambar']+'"></a>'
            }
        },
        {
            'data' : null,
            'render' : function(data, row, type){
                return '<b>'+data['merek']+'</b><br><span style="color:grey;">'+data['nopol']+'</span>';
            }
        },
        {'data' : 'tahun'},
        {'data' : 'transportir'},
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
    let merek = $('#merek').val();
    let nopol = $('#nopol').val();
    let tahun = $('#tahun').val();
    let foto = $('#foto').val();

    if(transportir == null || merek.length < 1 || nopol.length < 1 || tahun.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});

$('#save').on('click',function(){
    let transportir = $('#transportir').val();
    let merek = $('#merek2').val();
    let nopol = $('#nopol2').val();
    let tahun = $('#tahun2').val();
    let foto = $('#foto2').val();

    if(transportir == null || merek.length < 1 || nopol.length < 1 || tahun.length < 1){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#edit').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});

$('#foto').on('change',function(){
    let images = document.querySelector('#foto');
    let previews = document.querySelector('#display-foto');
    let oFReader = new FileReader();
    oFReader.readAsDataURL(images.files[0]);
    oFReader.onload = function (oFREvent) {
        previews.src = oFREvent.target.result;
    }
});

$('#foto2').on('change',function(){
    let images = document.querySelector('#foto2');
    let previews = document.querySelector('#display-foto2');
    let oFReader = new FileReader();
    oFReader.readAsDataURL(images.files[0]);
    oFReader.onload = function (oFREvent) {
        previews.src = oFREvent.target.result;
    }
});