@extends('layouts.app')
@section('title', 'Mahasiswa')
@section('header', 'Halaman Mahasiswa ')
@section('content')
<div class="wrapper">
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3 fs-6">Data Mahasiswa</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item fs-6"><a href="{{route('home')}}"><i class="bi bi-house-fill"></i> Beranda /</a> Mahasiswa
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body ">
                <div class="d-flex align-items-center">
                    <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal"><i class="bi bi-calendar2-plus-fill"></i> Tambah Mahasiswa</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 col-12 ">
                        <select class="form-select">
                            <option>Pilih Tahun</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2022</option>
                            <option>2021</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-12 ">
                        <select class="form-select">
                            <option>Program Studi</option>
                            <option>Informatika</option>
                            <option>Rekayasa Perangkat Lunak</option>
                            <option>Teknologi Informasi</option>
                            <option>Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-12 ">
                        <select class="form-select">
                            <option>Status Publish</option>
                            <option>Iya</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="d-flex align-items-center">
                    <div class="">
                        <div class="">
                            <a href="javascript:;" class="btn btn-sm btn-danger me-2"><i class="bi bi-file-earmark-pdf-fill"></i> Copy</a>
                            <a href="javascript:;" class="btn btn-sm btn-success me-2"><i class="bi bi-file-earmark-pdf-fill"></i> CSV</a>
                            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-secondary"><i class="bi bi-printer-fill"></i> Print</a>
                        </div>
                    </div>
                    <form class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                        <input class="form-control ps-5" type="text" placeholder="search">
                    </form>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table">
                        <thead class="table-secondary">
                            <tr>
                                <th>No</th>
                                <th>Program Studi</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>No HP</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Teknik</td>
                                <td>Teknik Elektro</td>
                                <td>FUAD HASAN, ST., MT.</td>
                                <td>0712398454</td>
                                <td>0712398454</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleLargeModal" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td> FATHOR ROZI, M.Pd.</td>
                                <td>2023</td>
                                <td>2023</td>
                                <td>2023</td>
                                <td>Hibah pemerintah</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="float-end mt-3">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <!--end page main-->
</div>
@endsection
<!-- notif -->
<!-- Modal -->
<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">Fakultas:</label>
                <select class="form-select">
                    <option>---Pilih Fakultas---</option>
                    <option>Daring</option>
                    <option>Luring</option>
                    <option>Hybrid</option>
                </select>
                <br>
                <label class="form-label">Program Studi:</label>
                <select class="form-select">
                    <option>---Pilih Program Studi---</option>
                    <option>Daring</option>
                    <option>Luring</option>
                    <option>Hybrid</option>
                </select>
                <br>
                <label class="form-label">Status:</label>
                <select class="form-select">
                    <option>---Pilih Status---</option>
                    <option>Daring</option>
                    <option>Luring</option>
                    <option>Hybrid</option>
                </select>
                <br>
                <label class="form-label">Keterangan:</label>
                <select class="form-select">
                    <option>---Pilih Keterangan---</option>
                    <option>Daring</option>
                    <option>Luring</option>
                    <option>Hybrid</option>
                </select>
                <br>
                <label class="form-label">Nama dosen:</label>
                <input type="text" class="form-control" placeholder="isi Nama dosen">
                <br>
                <label class="form-label">Mitra:</label>
                <input type="text" class="form-control" placeholder="isi Mitra">
                <br>
                <label class="form-label">Nidn:</label>
                <input type="text" class="form-control" placeholder="isi Nidn">
                <br>
                <label class="form-label">Username:</label>
                <input type="text" class="form-control" placeholder="isi Username">
                <br>
                <label class="form-label">Password:</label>
                <input type="text" class="form-control" placeholder="isi Password">
                <br>
                <label class="form-label">Ulango Password:</label>
                <input type="text" class="form-control" placeholder="isi Ulango Password">
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- endnotif -->
<!-- notif 1-->
<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="text-center">
                <h5 class="modal-title mt-2"><i class="bi bi-exclamation-triangle text-danger" style="font-size: 150px; "></i></h5>
            </div>
            <h4 class="modal-body text-center">Apakah Anda Yakin?</h4>
            <h6 class="text-center">Akan menghapus data terebut secara permanen</h6>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>