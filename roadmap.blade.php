@extends('layouts.app')
@section('title', 'Risbang')
@section('header', 'Halaman Roadmap')
@section('content')
<div class="wrapper">
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3 fs-6">Data Roadmap</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class=" fs-6"><a href="{{route('home')}}"><i class="bi bi-house-fill"></i> Beranda /</a> Roadmap
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div> -->
        </div>
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
            <div class="col">
                <div class="card rounded-4">
                    <a href="{{route('roadmapprodi')}}">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Data RoadMap Prodi</p>
                                    <h4 class="mb-0">2023 - 2027</h4>
                                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Fakultas :</span> 203</p>
                                </div>
                                <div class="ms-auto fs-3 text-success">
                                    <i class="bi bi-chat-left-text-fill"></i>
                                </div>
                            </div>
                            <div class="progress mt-3" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 42%"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <a href="#">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Data RoadMap Prodi</p>
                                    <h4 class="mb-0">2023 - 2027</h4>
                                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Fakultas :</span> 203</p>
                                </div>
                                <div class="ms-auto fs-3 text-danger">
                                    <i class="bi bi-share-fill"></i>
                                </div>
                            </div>
                            <div class="progress mt-3" style="height: 5px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 42%"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
            <div class="col">
                <div class="card rounded-4">
                    <a href="{{route('roadmapdosen')}}">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Data RoadMap Dosen</p>
                                    <h4 class="mb-0">2023 - 2027</h4>
                                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Fakultas :</span> 203</p>
                                </div>
                                <div class="ms-auto fs-3 text-success">
                                    <i class="bi bi-chat-left-text-fill"></i>
                                </div>
                            </div>
                            <div class="progress mt-3" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 42%"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Data RoadMap Prodi</p>
                                <h4 class="mb-0">2023 - 2027</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Fakultas :</span> 203</p>
                            </div>
                            <div class="ms-auto fs-3 text-danger">
                                <i class="bi bi-share-fill"></i>
                            </div>
                        </div>
                        <div class="progress mt-3" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 42%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end page main-->
</div>
@endsection