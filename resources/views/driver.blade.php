@extends('layout.main')

@section('content')
    <div class="haraga p-4 m-auto" style="background-color:white; width:75vw; border-radius:10px; overflow:auto;">
        <div class="judul d-flex mb-5" style="justify-content:space-between;">
            <h3>Data Master Driver</h3>
            <a href="#" class="btn btn-dark p-2 px-4" data-toggle="modal" data-target="#tambahData">Tambah Data</a>

            <!-- Modal -->
            <div class="modal fade" id="tambahData" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="overflow:auto" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Driver</h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="transportir">Transportir</label>
                                <select name="" id="transportir" class="form-control">
                                    <option value="">CV PARAMA MANDIRI</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="namaDriver">Nama Driver</label>
                                <input type="text" id="namaDriver" class="form-control" placeholder="Cth: Lukman Hisyam">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telepon">Telepon</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                    </div>
                                    <input type="number" class="form-control" id="telepon" placeholder="Cth: 085706389042">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="kota">Kota</label>
                                <select name="" id="kota" class="form-control">
                                    <option value="">Kota Surabaya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <label for="alamat">Alamat</label>
                        <textarea name="" id="alamat" rows="5" class="form-control" placeholder="Cth: Jl. Jenderal Ahmad Yani - Gresik 61119"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="isi">
            <div class="tabel">
                <table id="data-table-driver" class="table table-bordered hover" border="0">
                    <thead>
                        <tr border="0">
                            <th border="0">NO</th>
                            <th>NAMA-TRANSPORTER</th>
                            <th>KOTA-ALAMAN</th>
                            <th>TELEPON</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="overflow:auto" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Driver</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="transportir2">Transportir</label>
                                        <select name="" id="transportir2" class="form-control">
                                            <option value="">CV PARAMA MANDIRI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="namaDriver2">Nama Driver</label>
                                        <input type="text" id="namaDriver2" class="form-control" placeholder="Cth: Lukman Hisyam">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="telepon2">Telepon</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                            </div>
                                            <input type="number" class="form-control" id="telepon2" placeholder="Cth: 085706389042">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kota2">Kota</label>
                                        <select name="" id="kota2" class="form-control">
                                            <option value="">Kota Surabaya</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <label for="alamat2">Alamat</label>
                                <textarea name="" id="alamat2" rows="5" class="form-control" placeholder="Cth: Jl. Jenderal Ahmad Yani - Gresik 61119"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" id="save">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
