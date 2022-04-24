$('#data-table-harga').DataTable({
    'ajax' : '/asets/json/harga.json',
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
        {'data' : 'transportir'},
        {'defaultContent' : '<img src="/asets/images/lokasi.svg" style="height:100%;">'},
        {
            'data' : null,
            'render' : function(data,row,type){
                return '<div  style="padding-bottom:12px;">'+data['asal']+'</div>'+data['tujuan'];
            }
        },
        {'data' : 'harga'},
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

$("#transportir").on('change',function(){
    if($(this).val() == 1){
        $('.map1').fadeIn('slow');
        $('.map2').fadeOut('slow');
        $('.map3').fadeOut('slow');
    }
    else if($(this).val() == 2){
        $('.map1').fadeOut('slow');
        $('.map2').fadeIn('slow');
        $('.map3').fadeOut('slow');
    }
    else if($(this).val() == 3){
        $('.map1').fadeOut('slow');
        $('.map2').fadeOut('slow');
        $('.map3').fadeIn('slow');
    }
});

$('#simpan').on('click',function(){
    let transportir = $('#transportir').val();
    let harga = $('#input-harga').val();
    let gudangAsal = $('#gudangAsal').val();
    let gudangTujuan = $('#gudangTujuan').val();

    if(transportir == null || harga.length < 1 || gudangAsal == null || gudangTujuan == null){
        swal("Please Enter!", "Form tidak boleh kosong!", "warning");
    }
    else{
        $('#tambahData').modal('hide');
        swal("Berhasil!", "Data telah disimpan!", "success");
    }
});