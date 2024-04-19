@extends('layouts.app')
@section('title', 'Fakultas')
@section('header', 'Halaman Fakultas')
@section('content')
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3 fs-6">Data Fakultas</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item fs-6"><a href="javascript:;"><i class="bi bi-house-fill"></i> Beranda /</a> Fakultas
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>Form Fakultas</h6>
                <div class="card  ">
                    <div class="card-body">
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Nama Fakultas</label>
                                    <input type="text" class="form-control" placeholder="Isi Nama Fakultas">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Nama Dekan</label>
                                    <input type="text" class="form-control" placeholder="Isi Nama Dekan">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Isi Username">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" placeholder="Isi Password">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ulangi Password</label>
                                    <input type="text" class="form-control" placeholder=" Ulangi Password">
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="btn btn-primary bi bi-floppy"> Simpan</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="btn btn-primary bi bi-x-circle"> Batal</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h6>Data Fakultask</h6>
                <div class="card  ">
                    <div class="card-body">
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
                                        <th>Nama Fakultas</th>
                                        <th>Nama Dekan</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2023</td>
                                        <td>dadajsuidsd</td>
                                        <td>dadajsuidsd</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2023</td>
                                        <td>ahsgusa</td>
                                        <td>ahsgusa</td>
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
            </div>
        </div><!--end row-->
    </div>
</main>
<!--end page main-->
</div>
@endsection