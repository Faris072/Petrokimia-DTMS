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
                        <th>MEREK-NOPOL</th>
                        <th>TRANSPORTIR</th>
                        <th>TAHUN</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                    <tr>
                        <td valign="middle">1</td>
                        <td valign="middle">
                            <div class="row">
                                <div class="col-md-2">
                                    gambar truk
                                </div>
                                <div class="col-md-10">
                                    <b>Hino Dutro 110 SD</b>
                                    <br>
                                    <span class="text-muted">L 1020 MS</span>
                                </div>
                            </div>
                        </td>
                        <td valign="middle">CV Prama Mandiri</td>
                        <td valign="middle">2022</td>
                        <td valign="middle">
                            <div class="switch"></div>
                        </td>
                        <td valign="middle">
                            <a class="edit p-2 py-1" data-toggle="modal" data-target="#edit"
                                style="background-color:rgba(139, 212, 218, 0.192); border-radius:5px;"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <!-- Modal -->
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
