@extends('layout.main')

@section('content')
    <div class="haraga p-4 m-auto" style="background-color:white; width:75vw; border-radius:10px; overflow:auto;">
        <div class="judul d-flex mb-5" style="justify-content:space-between;">
            <h3>Data Master Driver</h3>
            <a href="#" class="btn btn-dark p-2 px-4" data-toggle="modal" data-target="#tambahData">Tambah Data</a>

            <!-- Modal -->
            <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" style="overflow:auto" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Users</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="namaPengguna">Nama Pengguna</label>
                                    <input type="text" id="namaPengguna" class="form-control"
                                        placeholder="Cth: Lukman Hasyim">
                                </div>
                                <div class="col-md-6">
                                    <label for="username">User Name</label>
                                    <input type="text" id="username" class="form-control"
                                        placeholder="Cth: lukman.hasyim">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="namaPengguna">Role</label>
                                    <select name="role" id="role" class="form-control" placeholder="Pilih Role">
                                        <option value="" selected="selected" disabled="disabled">Pilih role</option>
                                        <option value="Order Requester">Order Requester</option>
                                        <option value="Control Tower">Control Tower</option>
                                        <option value="Driver">Driver</option>
                                        <option value="Transportir">Transportir</option>
                                        <option value="Poolboy">Poolboy</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="transportir">Transportir</label>
                                    <select name="" id="transportirChange" class="form-control" placeholder="Pilih Role"
                                        disabled="disabled">
                                        <option value="" selected="selected" disabled="disabled">Pilih role dulu</option>
                                        <option value="">CV PARAMA MANDIRI</option>
                                        <option value="">PT. Sinar Mulia Bahari</option>
                                        <option value="">PT. Javier Mandiri Transportasi</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="sandi">Sandi (Opsional)</label>
                                    <input type="password" class="form-control" placeholder="Masukkan sandi">
                                    <small class="text-muted">Jika dikosongi akan menggunakan sandi default.</small>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmSandi">Konfirmasi Sandi (Opsional)</label>
                                    <input type="password" class="form-control" placeholder="Masukkan sandi">
                                    <small class="text-muted">Jika dikosongi akan menggunakan sandi default.</small>
                                </div>
                            </div>
                            <br><br>
                            <div class="sandiDefault">
                                <span>Sandi Default:</span>
                                <br>
                                <h3><span style="color:green;"><b>Dtms12345</b></span></h3>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="isi">
            <div class="tabel">
                <table id="data-table-users" class="table table-bordered" border="0">
                    <thead>
                        <tr border="0">
                            <th border="0">NO</th>
                            <th>NAMA-USERNAME</th>
                            <th>ROLE</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="overflow:auto" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Users</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="namaPengguna">Nama Pengguna</label>
                                        <input type="text" id="namaPengguna" class="form-control"
                                            placeholder="Cth: Lukman Hasyim">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username">User Name</label>
                                        <input type="text" id="username" class="form-control"
                                            placeholder="Cth: lukman.hasyim">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="namaPengguna">Role</label>
                                        <select name="role" id="role" class="form-control" placeholder="Pilih Role">
                                            <option value="" selected="selected" disabled="disabled">Pilih role</option>
                                            <option value="Order Requester">Order Requester</option>
                                            <option value="Control Tower">Control Tower</option>
                                            <option value="Driver">Driver</option>
                                            <option value="Transportir">Transportir</option>
                                            <option value="Poolboy">Poolboy</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="transportir">Transportir</label>
                                        <select name="" id="transportirChange" class="form-control"
                                            placeholder="Pilih Role" disabled="disabled">
                                            <option value="" selected="selected" disabled="disabled">Pilih role dulu
                                            </option>
                                            <option value="">CV PARAMA MANDIRI</option>
                                            <option value="">PT. Sinar Mulia Bahari</option>
                                            <option value="">PT. Javier Mandiri Transportasi</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="sandi">Sandi (Opsional)</label>
                                        <input type="password" class="form-control" placeholder="Masukkan sandi">
                                        <small class="text-muted">Jika dikosongi akan menggunakan sandi default.</small>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="confirmSandi">Konfirmasi Sandi (Opsional)</label>
                                        <input type="password" class="form-control" placeholder="Masukkan sandi">
                                        <small class="text-muted">Jika dikosongi akan menggunakan sandi default.</small>
                                    </div>
                                </div>
                                <br><br>
                                <div class="sandiDefault">
                                    <span>Sandi Default:</span>
                                    <br>
                                    <h3><span style="color:green;"><b>Dtms12345</b></span></h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
