@extends('layout.main')

@section('content')
    <div class="haraga p-4 m-auto" style="background-color:white; width:75vw; border-radius:10px; overflow:auto;">
        <div class="judul d-flex mb-5" style="justify-content:space-between;">
            <h3>Data Master Gudang</h3>
            <a href="#" class="btn btn-dark p-2 px-4" data-toggle="modal" data-target="#tambahData">Tambah Data</a>

            <!-- Modal -->
            <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" style="overflow:auto" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Gudang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="namaGudang">Nama Gudang</label>
                                        <input type="text" id="namaGudang" class="form-control" placeholder="Masukkan nama gudang">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kecepatanMaksimal">Kecepatan Maksimal Truk</label>
                                        <div class="input-group mb-2">
                                            <input type="number" id="kecepatanMaksimal" class="form-control" id="input-harga"
                                                placeholder="Masukkan kecepatan maksimal">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Km/Jam</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="beachonCheckPoint">ID Beacon Check Point</label>
                                        <input type="number" id="beachonCheckPoint" class="form-control"
                                            placeholder="Cth: 12341">
                                        <span class="text-muted">Deteksi truk sudah masuk area gudang</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="beaconEntryPoint">ID Beacon Entry Point</label>
                                        <input type="number" id="beaconEntryPoint" class="form-control"
                                            placeholder="Cth: 12341">
                                        <span class="text-muted">Deteksi truk sudah jalan menuju gudang</span>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lokasiGudang">Lokasi Gudang</label>
                                        <input type="text" id="lokasiGudang" class="form-control" placeholder="Latitude">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="visibility: hidden;">p</label>
                                        <input type="text" id="longitude" class="form-control" placeholder="Latitude">
                                        <span class="text-muted">Longitude terisi otomatis</span>
                                    </div>
                                </div>
                                <br>
                            </form>
                            <div class="map" style="width:100%;">
                                <iframe style="width:100%;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7082723636645!2d112.63380561414732!3d-7.159686572232668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8011eced8fc3b%3A0xeb3c8b3c8dc30658!2sGudang%20Bayern%20PT%20Petrokimia%20Gresik!5e0!3m2!1sid!2sid!4v1650345722987!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <table id="data-table-gudang" class="table table-bordered hover" border="0">
                    <thead>
                        <tr border="0">
                            <th border="0">NO</th>
                            <th style="width: 40%;">NAMA GUDANG</th>
                            <th>KECEPATAN MAKSIMAL</th>
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
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Gudang</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="namaGudang2">Nama Gudang</label>
                                            <input type="text" id="namaGudang2" class="form-control"
                                                placeholder="Masukkan nama gudang">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="kecepatanMaksimal2">Kecepatan Maksimal Truk</label>
                                            <div class="input-group mb-2">
                                                <input type="number" class="form-control" id="kecepatanMaksimal2"
                                                    placeholder="Masukkan kecepatan maksimal">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Km/Jam</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="beachonCheckPoint2">ID Beacon Check Point</label>
                                            <input type="number" id="beachonCheckPoint2" class="form-control"
                                                placeholder="Cth: 12341">
                                            <span class="text-muted">Deteksi truk sudah masuk area
                                                gudang</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="beaconEntryPoint2">ID Beacon Entry Point</label>
                                            <input type="number" id="beaconEntryPoint2" class="form-control"
                                                placeholder="Cth: 12341">
                                            <span class="text-muted">Deteksi truk sudah jalan menuju
                                                gudang</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="lokasiGudang2">Lokasi Gudang</label>
                                            <input type="text" class="form-control" placeholder="Latitude">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="visibility: hidden;">p</label>
                                            <input type="text" id="longitude2" class="form-control" placeholder="Latitude">
                                            <span class="text-muted">Latitude terisi otomatis</span>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                                <div class="map" style="width:100%;">
                                    <iframe style="width:100%;"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7082723636645!2d112.63380561414732!3d-7.159686572232668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8011eced8fc3b%3A0xeb3c8b3c8dc30658!2sGudang%20Bayern%20PT%20Petrokimia%20Gresik!5e0!3m2!1sid!2sid!4v1650345722987!5m2!1sid!2sid"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
