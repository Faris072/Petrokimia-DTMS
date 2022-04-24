@extends('layout.main')

@section('content')
    <div class="haraga p-4 m-auto" style="background-color:white; width:75vw; border-radius:10px; overflow-y:auto; overflow-x:hidden;">
        <div class="judul d-flex mb-5" style="justify-content:space-between;">
            <h3>Data Master Truk</h3>
            <a href="#" class="btn btn-dark p-2 px-4" data-toggle="modal" data-target="#tambahData">Tambah Data</a>

            <!-- Modal -->
            <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" style="overflow:auto" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Truk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="flex-wrap:nowrap;">
                                <div class="col-md-8">
                                    <form action="">
                                        <label for="transportir">Transportir</label>
                                        <select name="" id="transportir" class="form-control">
                                            <option value=""><span class="text-muted">Pilih Transportir</span></option>
                                            <option value="">CV PARMA MANDIRI</option>
                                        </select>
                                        <br>
                                        <label for="merek">Merek</label>
                                        <input type="text" placeholder="Cth:Hino" id="merek" class="form-control">
                                        <br>
                                        <label for="nopol">Nopol</label>
                                        <input type="text" placeholder="Cth: L1239 LL" id="nopol" class="form-control">
                                        <br>
                                        <label for="tahun">Tahun</label>
                                        <input type="number" placeholder="Cth: 2022" id="tahun" class="form-control">
                                    </form>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <label for="foto">Foto Truk
                                        <img src="/asets/images/inputtruk.png" style="width:100%; object-fit:cover; border-radius:10px;" id="display-foto" alt="">
                                    </label>
                                    <input type="file" id="foto" style="visibility:hidden;">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="simpan">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="isi">
            <div class="tabel">
                <table id="data-table-truk" class="table table-bordered hover" border="0">
                    <thead>
                        <tr border="0">
                            <th border="0">NO</th>
                            <th></th>
                            <th>MEREK-NOPOL</th>
                            <th>TRANSPORTIR</th>
                            <th>TAHUN</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="overflow:auto" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Truk</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row" style="flex-wrap:nowrap; overflow:auto;">
                                    <div class="col-md-8">
                                        <form action="">
                                            <label for="transportir2">Transportir</label>
                                            <select name="" id="transportir2" class="form-control">
                                                <option value=""><span class="text-muted">Pilih
                                                        Transportir</span></option>
                                                <option value="">CV PARMA MANDIRI</option>
                                            </select>
                                            <br>
                                            <label for="merek2">Merek</label>
                                            <input type="text" placeholder="Cth:Hino" id="merek2"
                                                class="form-control">
                                            <br>
                                            <label for="nopol2">Nopol</label>
                                            <input type="text" placeholder="Cth: L1239 LL" id="nopol2"
                                                class="form-control">
                                            <br>
                                            <label for="tahun2">Tahun</label>
                                            <input type="number" placeholder="Cth: 2022" id="tahun2"
                                                class="form-control">
                                        </form>
                                    </div>
                                    <br>
                                    <div class="col-md-4">
                                        <label for="foto2">Foto Truk
                                            {{-- <label for="foto2"><div class="icon-edit" style="border-radius:50%; border:1px solid black; width:30px; height:30px; position:absolute; right:0; margin-right:15px; background-color:white;"><i class="fas fa-pencil-alt"></i></div></label> --}}
                                            <img src="/asets/images/inputtruk.png" style="width:100%; object-fit:cover; border-radius:10px;" alt="" id="display-foto2" >
                                        </label>
                                        <input type="file" id="foto2" style="visibility:hidden;">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="save">Save</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
