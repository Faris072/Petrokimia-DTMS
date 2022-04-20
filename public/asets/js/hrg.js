$('#data-table-harga').DataTable({
    'ajax' : '/asets/json/harga.json',
    'columnDefs' : [{
        "defaultContent": "-", //ketika bernilai null maka akan terisi "-"
        "targets": "_all" //berlaku untuk semua baris dan kolom
    }], 
    'columns' : [
        {'data' : 'no'},
        {'data' : 'transportir'},
        {'data' : 'asal'},
        {'data' : 'harga'},
        {'defaultContent' : '<div class="switch"></div>'},
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
        {'defaultContent' : '<div class="switch"></div>'},
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
        {'data' : 'merek nopol'},
        {'data' : 'transportir'},
        {'data' : 'tahun'},
        {'defaultContent' : '<div class="switch"></div>'},
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
        {'data' : 'nama-transporter'},
        {'data' : 'kota-alamat'},
        {'data' : 'telepon'},
        {'defaultContent' : '<div class="switch"></div>'},
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
        {'data' : 'perusahaan-alamat'},
        {'data' : 'telepon'},
        {'defaultContent' : '<div class="switch"></div>'},
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
        {'defaultContent' : '<div class="switch"></div>'},
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
        {'data' : 'nama-username'},
        {'data' : 'role'},
        {'defaultContent': '<div class="switch"></div>'},
        // {'defaultContent': '<a class="edit p-2 py-1" data-toggle="modal" data-target="#ubah" style="background-color:rgba(139, 212, 218, 0.192); border-radius:5px;"><i class="fas fa-sync"></i></a>'},
        {'defaultContent': '<a class="edit p-2 py-1" data-toggle="modal" data-target="#edit" style="background-color:rgba(139, 212, 218, 0.192); border-radius:5px;"><i class="fas fa-pencil-alt"></i></a>'}
    ]
});

$(".switch").on('click',function(){
    $(this).toggleClass("switchOn");
});

$("#transportir").on('click',function(){
    $('.map').css('display', 'block');
});
