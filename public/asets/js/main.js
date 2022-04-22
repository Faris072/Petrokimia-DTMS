$('#data-table-harga').DataTable({
    'ajax' : '/asets/json/harga.json',
    // 'pagingType' : 'simple',
    // // oLanguage : {
    // //     oPaginate : {
    // //         sNext : '<span class="p-2 px-3 pagin" style="background-color:lightblue; border-radius:5px;"><i class="fas fa-angle-double-right"></i></span>',
    // //         sPrevious : '<span class="p-2 px-3 pagin" style="background-color:lightblue; border-radius:5px;"><i class="fas fa-angle-double-left"></i></span>',
    // //         sCurrent : 's'
    // //     }
    // // },
    'columnDefs' : [{
        "defaultContent": "-", //ketika bernilai null maka akan terisi "-"
        "targets": "_all" //berlaku untuk semua baris dan kolom
    }], 
    'columns' : [
        {'data' : 'no'},
        {'data' : 'transportir'},
        {'defaultContent' : '<img src="/asets/images/lokasi.svg" style="mt-3">'},
        {
            'data' : null,
            'render' : function(data,row,type){
                return data['asal']+'<br><br>'+data['tujuan'];
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

$('#data-table-gudang').DataTable({
    'ajax' : '/asets/json/gudang.json',
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

$('#data-table-truk').DataTable({
    'ajax' : '/asets/json/truk.json',
    'columnDefs' : [{
        "defaultContent": "-", //ketika bernilai null maka akan terisi "-"
        "targets": "_all" //berlaku untuk semua baris dan kolom
    }], 
    'columns' : [
        {'data' : 'no'},
        {
            'data' : 'gambar',
            'render' : function(data, row, type){
                return '<img src="/asets/images/'+data+'" alt="gambar truk" style="border-radius:5px;">'
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

$('#data-table-driver').DataTable({
    'ajax' : '/asets/json/driver.json',
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

$('#data-table-transportir').DataTable({
    'ajax' : '/asets/json/transportir.json',
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

$('#data-table-kota').DataTable({
    'ajax' : '/asets/json/kota.json',
    'columnDefs' : [{
        "defaultContent": "-", //ketika bernilai null maka akan terisi "-"
        "targets": "_all" //berlaku untuk semua baris dan kolom
    }], 
    'columns' : [
        {'data' : 'no'},
        {'data' : 'nama kota'},
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

$('#data-table-users').DataTable({
    'ajax' : '/asets/json/users.json',
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


//event dataTable
$('.table').on('draw.dt',function(){
    $(".switch").on('click',function(){
        $(this).toggleClass("switchOn");
    });
    $('.paginate_button.current').css({'background-color' : 'black', 'color' : 'white'});
});

