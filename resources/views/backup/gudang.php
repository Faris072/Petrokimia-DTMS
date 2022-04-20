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
                                        <label for="transportir">Nama Gudang</label>
                                        <input type="text" class="form-control" placeholder="Masukkan nama gudang">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inlineFormInputGroup">Kecepatan Maksimal Truk</label>
                                        <div class="input-group mb-2">
                                            <input type="number" class="form-control" id="input-harga"
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
                                        <input type="text" class="form-control" placeholder="Latitude">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="visibility: hidden;">p</label>
                                        <input type="text" class="form-control" placeholder="Latitude">
                                        <span class="text-muted">Latitude terisi otomatis</span>
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
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="isi">
            <div class="show-search d-flex mb-3" style="justify-content:space-between;">
                <div class="show">
                    <small>Show per page</small>
                    <select name="" id="" class="pl-1" style="border:none;">
                        <option value="">10</option>
                        <option value="">20</option>
                        <option value="">30</option>
                        <option value="">40</option>
                        <option value="">50</option>
                    </select>
                </div>
                <div class="search">
                    <form action="">
                        <label for="search"><small>Search: </small></label>
                        <input type="text" style="font-size:12px; border:1px solid lightgrey;">
                    </form>
                </div>
            </div>
            <div class="tabel">
                <table class="table table-bordered" border="0">
                    <tr border="0">
                        <th border="0">NO</th>
                        <th style="width: 40%;">NAMA GUDANG</th>
                        <th>KECEPATAN MAKSIMAL</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                    <tr>
                        <td valign="middle">1</td>
                        <td valign="middle">Gudang Urea 1B</td>
                        <td valign="middle">40 Km/Jam</td>
                        <td valign="middle">
                            <div class="switch"></div>
                        </td>
                        <td valign="middle">
                            <a class="edit p-2 py-1" data-toggle="modal" data-target="#edit" style="background-color:rgba(139, 212, 218, 0.192); border-radius:5px;"><i class="fas fa-pencil-alt"></i></a>
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
                                                        <label for="transportir">Nama Gudang</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukkan nama gudang">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inlineFormInputGroup">Kecepatan Maksimal Truk</label>
                                                        <div class="input-group mb-2">
                                                            <input type="number" class="form-control" id="input-harga"
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
                                                        <span class="text-muted">Deteksi truk sudah masuk area
                                                            gudang</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="beaconEntryPoint">ID Beacon Entry Point</label>
                                                        <input type="number" id="beaconEntryPoint" class="form-control"
                                                            placeholder="Cth: 12341">
                                                        <span class="text-muted">Deteksi truk sudah jalan menuju
                                                            gudang</span>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="lokasiGudang">Lokasi Gudang</label>
                                                        <input type="text" class="form-control" placeholder="Latitude">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" style="visibility: hidden;">p</label>
                                                        <input type="text" class="form-control" placeholder="Latitude">
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
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="botom d-flex" style="justify-content: space-between;">
                <div class="showing">
                    <small class="py-2">Showing 1 to 10 of 50 entries</small>
                </div>
                <div class="pagin">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item m-2">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item m-2"><a class="page-link"
                                    style="background-color:rgb(0, 0, 0); color:white;" href="#">1</a></li>
                            <li class="page-item m-2"><a class="page-link" href="#">2</a></li>
                            <li class="page-item m-2"><a class="page-link" href="#">3</a></li>
                            <li class="page-item m-2">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
