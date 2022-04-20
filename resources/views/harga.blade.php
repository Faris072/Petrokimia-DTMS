@extends('layout.main')

@section('content')
    <div class="haraga p-4 m-auto" style="background-color:white; width:75vw; border-radius:10px; overflow:auto;">
        <div class="judul d-flex mb-5" style="justify-content:space-between;">
            <h3>Data Master Harga</h3>
            <a href="#" class="btn btn-dark p-2 px-4" data-toggle="modal" data-target="#tambahData">Tambah Data</a>

            <!-- Modal -->
            <div class="modal fade" style="overflow:auto;" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Harga</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="transportir">Transportir</label>
                                        <select name="" id="transportir" class="form-control">
                                            <option value="" disabled selected>Pilih transportir</option>
                                            <option value="">CV PARMA MANDIRI</option>
                                            <option value="">PT. Sinar Mulia Bahari</option>
                                            <option value="">PT. Jovier Mandiri Transportasi</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="input-harga">Harga</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp</div>
                                            </div>
                                            <input type="number" class="form-control" id="input-harga"
                                                placeholder="Masukkan Harga">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="gudangAsal">Gudang Asal</label>
                                        <select name="" id="gudangAsal" class="form-control">
                                            <option value="" selected disabled>Pilih gudang asal</option>
                                            <option value="">Gudang Urea 1B</option>
                                            <option value="">Gudang Phonska Area II</option>
                                            <option value="">Gudang Pool</option>
                                            <option value="">Gudang Curah 50.000 & ALF3</option>
                                            <option value="">Gudang Non Pupuk Cair</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gudangAsal">Gudang Tujuan</label>
                                        <select name="" id="gudangAsal" class="form-control">
                                            <option value="" selected disabled>Pilih gudang tujuan</option>
                                            <option value="">Gudang Urea 1B</option>
                                            <option value="">Gudang Phonska Area II</option>
                                            <option value="">Gudang Pool</option>
                                            <option value="">Gudang Curah 50.000 & ALF3</option>
                                            <option value="">Gudang Non Pupuk Cair</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                            </form>
                            <div class="map" style="width:100%; display:none;">
                                <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7082723636645!2d112.63380561414732!3d-7.159686572232668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8011eced8fc3b%3A0xeb3c8b3c8dc30658!2sGudang%20Bayern%20PT%20Petrokimia%20Gresik!5e0!3m2!1sid!2sid!4v1650345722987!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <table id="data-table-harga" class="table table-bordered" border="0">
                    <thead>
                        <tr border="0">
                            <th border="0">NO</th>
                            <th>TRANSPORTIR</th>
                            <th>ASAL DAN TUJUAN</th>
                            <th>HARGA</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
