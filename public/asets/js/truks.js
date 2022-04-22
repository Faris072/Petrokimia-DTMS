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