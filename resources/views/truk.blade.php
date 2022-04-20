@extends('layout.main')

@section('content')
    <div class="haraga p-4 m-auto" style="background-color:white; width:75vw; border-radius:10px; overflow:auto;">
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
                            <div class="row">
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
                                    <label for="foto">Foto Truk</label>
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="isi">
            <div class="tabel">
                <table id="data-table-truk" class="table table-bordered" border="0">
                    <thead>
                        <tr border="0">
                            <th border="0">NO</th>
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
                                <div class="row">
                                    <div class="col-md-8">
                                        <form action="">
                                            <label for="transportir">Transportir</label>
                                            <select name="" id="transportir" class="form-control">
                                                <option value=""><span class="text-muted">Pilih
                                                        Transportir</span></option>
                                                <option value="">CV PARMA MANDIRI</option>
                                            </select>
                                            <br>
                                            <label for="merek">Merek</label>
                                            <input type="text" placeholder="Cth:Hino" id="merek"
                                                class="form-control">
                                            <br>
                                            <label for="nopol">Nopol</label>
                                            <input type="text" placeholder="Cth: L1239 LL" id="nopol"
                                                class="form-control">
                                            <br>
                                            <label for="tahun">Tahun</label>
                                            <input type="number" placeholder="Cth: 2022" id="tahun"
                                                class="form-control">
                                        </form>
                                    </div>
                                    <br>
                                    <div class="col-md-4">
                                        <label for="foto">Foto Truk</label>
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection