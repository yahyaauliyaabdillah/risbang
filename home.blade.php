@extends('layouts.app')
@section('title', 'Risbang')
@section('header', 'Halaman Beranda')
@section('content')

<!--start wrapper-->
<div class="wrapper">
  <!--start content-->
  <main class="page-content">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
      <div class="col ">
        <div class="card rounded-4 bg-info">
          <div class="card-body ">
            <div class="d-flex align-items-center text-white">
              <div class="">
                <p class="mb-1">Fakultas</p>
                <h4 class="mb-0">5</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Fakultas</span></p>
              </div>
              <div class="ms-auto widget-icon bg-light text-dark">
                <i class="bi bi-file-bar-graph-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4 bg-success">
          <div class="card-body">
            <div class="d-flex align-items-center text-white">
              <div class="">
                <p class="mb-1">Prodi</p>
                <h4 class="mb-0">24</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Prodi</span></p>
              </div>
              <div class="ms-auto widget-icon bg-light text-dark">
                <i class="bi bi-p-circle-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4 bg-warning">
          <div class="card-body">
            <div class="d-flex align-items-center text-white">
              <div class="">
                <p class="mb-1">Dosen</p>
                <h4 class="mb-0">875</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Dosen</span></p>
              </div>
              <div class="ms-auto widget-icon bg-light text-dark">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4 bg-danger">
          <div class="card-body">
            <div class="d-flex align-items-center text-white">
              <div class="">
                <p class="mb-1">Mahasiswa</p>
                <h4 class="mb-0">9853</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Mahasiswa</span></p>
              </div>
              <div class="ms-auto widget-icon bg-light text-dark">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->
    <div class="row row-cols-1 row-cols-lg-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="">
                <h4 class="mb-0">2445</h4>
                <p class="mb-0">Penelitian Dosen</p>
              </div>
              <div class="fs-2 text-facebook">
                <i class="bi bi-person-badge-fill"></i>
              </div>
            </div>
            <div id="chart7"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="">
                <h4 class="mb-0">3712</h4>
                <p class="mb-0">Penelitian Mahasiswa</p>
              </div>
              <div class="fs-2 text-twitter">
                <i class="bi bi-file-earmark-text-fill"></i>
              </div>
            </div>
            <div id="chart8"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="">
                <h4 class="mb-0">5644</h4>
                <p class="mb-0">Penelitian Kolaborasi</p>
              </div>
              <div class="fs-2 text-youtube">
                <i class="bi bi-youtube"></i>
              </div>
            </div>
            <div id="chart9"></div>
          </div>
        </div>
      </div>

    </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-3 radial-charts g-4">
      <div class="col">
        <div class="card rounded-6">
          <div class="card-body">
            <div class="text-center">
              <p class="mb-1">Pengabdian Dosen</p>
            </div>
            <div class="">
              <div id="chart3"></div>
            </div>
            <div class="text-center">
              <h4 class="">5632</h4>
              <p class="mb-1">Jumlah Pengabdian</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="text-center">
              <p class="mb-1">Pengabdian Mahasiswa</p>
            </div>
            <div class="">
              <div id="chart5"></div>
            </div>
            <div class="text-center">
              <h4 class="">45</h4>
              <p class="mb-1">Jumlah Pengabdian</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="text-center">
              <p class="mb-1">Pengabdian Kolaborasi</p>
            </div>
            <div class="">
              <div id="chart6"></div>
            </div>
            <div class="text-center">
              <h4 class="">55%</h4>
              <p class="mb-1">Jumlah Pengabdian</p>
            </div>
          </div>
        </div>
      </div>

    </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Penelitian Dosen</p>
                <h4 class="mb-0">5</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Penelitian</span></p>
              </div>
              <div class="ms-auto widget-icon bg-primary text-white">
                <i class="bi bi-bar-chart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Penelitian Mahasiswa</p>
                <h4 class="mb-0">24</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Penelitian</span></p>
              </div>
              <div class="ms-auto widget-icon bg-success text-white">
                <i class="bi bi-p-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Penelitian Kolaborasi</p>
                <h4 class="mb-0">9853</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Penelitian</span></p>
              </div>
              <div class="ms-auto widget-icon bg-info text-white">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Pengabdian Dosen</p>
                <h4 class="mb-0">5</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Pengabdian</span></p>
              </div>
              <div class="ms-auto widget-icon bg-primary text-white">
                <i class="bi bi-bar-chart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Pengabdian Mahasiswa</p>
                <h4 class="mb-0">24</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Pengabdian</span></p>
              </div>
              <div class="ms-auto widget-icon bg-success text-white">
                <i class="bi bi-p-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Pengabdian Kolaborasi</p>
                <h4 class="mb-0">9853</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Pengabdian</span></p>
              </div>
              <div class="ms-auto widget-icon bg-info text-white">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Jurnal Dosen</p>
                <h4 class="mb-0">5</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Jurnal</span></p>
              </div>
              <div class="ms-auto widget-icon bg-primary text-white">
                <i class="bi bi-bar-chart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Jurnal Mahasiswa</p>
                <h4 class="mb-0">24</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Jurnal</span></p>
              </div>
              <div class="ms-auto widget-icon bg-success text-white">
                <i class="bi bi-p-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Jurnal Kolaborasi</p>
                <h4 class="mb-0">9853</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Jurnal</span></p>
              </div>
              <div class="ms-auto widget-icon bg-info text-white">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Jurnal Pengabdian Dosen</p>
                <h4 class="mb-0">5</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Jurnal</span></p>
              </div>
              <div class="ms-auto widget-icon bg-primary text-white">
                <i class="bi bi-bar-chart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Jurnal Pengabdian Mahasiswa</p>
                <h4 class="mb-0">24</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Jurnal</span></p>
              </div>
              <div class="ms-auto widget-icon bg-success text-white">
                <i class="bi bi-p-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Jurnal Pengabdian Kolaborasi</p>
                <h4 class="mb-0">9853</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Jurnal</span></p>
              </div>
              <div class="ms-auto widget-icon bg-info text-white">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Haki Dosen</p>
                <h4 class="mb-0">5</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Haki</span></p>
              </div>
              <div class="ms-auto widget-icon bg-primary text-white">
                <i class="bi bi-bar-chart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Haki Mahasiswa</p>
                <h4 class="mb-0">24</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Haki</span></p>
              </div>
              <div class="ms-auto widget-icon bg-success text-white">
                <i class="bi bi-p-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Haki Kolaborasi</p>
                <h4 class="mb-0">9853</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Haki</span></p>
              </div>
              <div class="ms-auto widget-icon bg-info text-white">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Buku Dosen</p>
                <h4 class="mb-0">5</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Buku</span></p>
              </div>
              <div class="ms-auto widget-icon bg-primary text-white">
                <i class="bi bi-bar-chart"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Buku Mahasiswa</p>
                <h4 class="mb-0">24</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Buku</span></p>
              </div>
              <div class="ms-auto widget-icon bg-success text-white">
                <i class="bi bi-p-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Buku Kolaborasi</p>
                <h4 class="mb-0">9853</h4>
                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>Jumlah Buku</span></p>
              </div>
              <div class="ms-auto widget-icon bg-info text-white">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->





    <div class="row">
      <div class="col-12 col-lg-8 col-xl-8 d-flex">
        <div class="card w-100 rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <h6 class="mb-0">Revenue History</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="">
                <h4 class="text-success mb-0">$9,279</h4>
                <p class="mb-0">Revenue</p>
              </div>
              <div class="vr"></div>
              <div class="">
                <h4 class="text-pink mb-0">$5,629</h4>
                <p class="mb-0">Investment</p>
              </div>
            </div>
            <div id="chart1"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-xl-4 d-flex">
        <div class="card w-100 rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <h6 class="mb-0">Task Overview</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
            <div id="chart2"></div>
          </div>
          <ul class="list-group list-group-flush mb-0 shadow-none">
            <li class="list-group-item bg-transparent border-top"><i class="bi bi-circle-fill me-2 font-weight-bold text-primary"></i> Complete <span class="float-end">120</span></li>
            <li class="list-group-item bg-transparent"><i class="bi bi-circle-fill me-2 font-weight-bold text-orange"></i> In Progress <span class="float-end">110</span></li>
            <li class="list-group-item bg-transparent"><i class="bi bi-circle-fill me-2 font-weight-bold text-info"></i> Started <span class="float-end">70</span></li>
          </ul>
        </div>
      </div>

    </div><!--end row-->




    <div class="row">
      <div class="col-12 col-lg-6 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <h6 class="mb-0">Sales By Countries</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
            <div id="world-map" style="height: 242px;"></div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center">
              <tbody>
                <tr>
                  <td><i class="flag-icon flag-icon-gb"></i></td>
                  <td><i class="bi bi-circle-fill me-2 text-primary"></i> Russia</td>
                  <td>
                    <p class="mb-0">Sales: <span class="fw-bold">28,000</span></p>
                  </td>
                  <td>40%</td>
                </tr>
                <tr>
                  <td><i class="flag-icon flag-icon-au"></i></td>
                  <td><i class="bi bi-circle-fill me-2 text-warning"></i> Australia</td>
                  <td>
                    <p class="mb-0">Sales: <span class="fw-bold">58,000</span></p>
                  </td>
                  <td>60%</td>
                </tr>
                <tr>
                  <td><i class="flag-icon flag-icon-us"></i></td>
                  <td><i class="bi bi-circle-fill me-2 text-success"></i> United States</td>
                  <td>
                    <p class="mb-0">Sales: <span class="fw-bold">72,000</span></p>
                  </td>
                  <td>30%</td>
                </tr>
                <tr>
                  <td><i class="flag-icon flag-icon-in"></i></td>
                  <td><i class="bi bi-circle-fill me-2 text-secondary"></i> India</td>
                  <td>
                    <p class="mb-0">Sales: <span class="fw-bold">68,000</span></p>
                  </td>
                  <td>55%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <h6 class="mb-0">Top Selling Products</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
            <div class="">
              <div class="d-flex align-items-start gap-3">
                <div class="product-box border">
                  <img src="assets/images/products/05.png" alt="product img" />
                </div>
                <div class="flex-grow-1">
                  <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
                  <div class="progress-wrapper">

                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 42%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start gap-3">
                <div class="product-box border">
                  <img src="assets/images/products/07.png" alt="product img">
                </div>
                <div class="flex-grow-1">
                  <div class="progress-wrapper">
                    <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 42%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start gap-3">
                <div class="product-box border">
                  <img src="assets/images/products/09.png" alt="product img">
                </div>
                <div class="flex-grow-1">
                  <div class="progress-wrapper">
                    <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 42%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start gap-3">
                <div class="product-box border">
                  <img src="assets/images/products/02.png" alt="product img">
                </div>
                <div class="flex-grow-1">
                  <div class="progress-wrapper">
                    <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 42%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start gap-3">
                <div class="product-box border">
                  <img src="assets/images/products/04.png" alt="product img">
                </div>
                <div class="flex-grow-1">
                  <div class="progress-wrapper">
                    <p class="my-2 d-flex align-items-center justify-content-between flex-nowrap">iPhone 11 - A24512 <span class="text-end">(4,216 Orders) <span class="ms-3 fw-bold">42%</span></span></p>
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 42%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-3">
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="">
                <h4 class="mb-0">24.5K</h4>
                <p class="mb-0">Facebook Followers</p>
              </div>
              <div class="fs-2 text-facebook">
                <i class="bi bi-facebook"></i>
              </div>
            </div>
            <div id="chart7"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="">
                <h4 class="mb-0">37.8K</h4>
                <p class="mb-0">Twitter Followers</p>
              </div>
              <div class="fs-2 text-twitter">
                <i class="bi bi-twitter"></i>
              </div>
            </div>
            <div id="chart8"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="">
                <h4 class="mb-0">56.9K</h4>
                <p class="mb-0">Youtube Subscribers</p>
              </div>
              <div class="fs-2 text-youtube">
                <i class="bi bi-youtube"></i>
              </div>
            </div>
            <div id="chart9"></div>
          </div>
        </div>
      </div>

    </div><!--end row-->


    <div class="row">
      <div class="col-12 col-lg-6 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-header bg-transparent">
            <div class="d-flex align-items-center">
              <h6 class="mb-0">Customer Reviews</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="review-list">
              <div class="d-flex align-items-start">
                <div class="review-user">
                  <img src="assets/images/avatars/avatar-1.png" width="65" height="65" class="rounded-circle" alt="">
                </div>
                <div class="review-content ms-3">
                  <div class="rates cursor-pointer fs-6">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <h6 class="mb-0">James Caviness</h6>
                    <p class="mb-0 ms-auto">February 16, 2021</p>
                  </div>
                  <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start">
                <div class="review-user">
                  <img src="assets/images/avatars/avatar-2.png" width="65" height="65" class="rounded-circle" alt="">
                </div>
                <div class="review-content ms-3">
                  <div class="rates cursor-pointer fs-6">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <h6 class="mb-0">David Buckley</h6>
                    <p class="mb-0 ms-auto">February 22, 2021</p>
                  </div>
                  <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start">
                <div class="review-user">
                  <img src="assets/images/avatars/avatar-3.png" width="65" height="65" class="rounded-circle" alt="">
                </div>
                <div class="review-content ms-3">
                  <div class="rates cursor-pointer fs-6">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <h6 class="mb-0">Peter Costanzo</h6>
                    <p class="mb-0 ms-auto">February 26, 2021</p>
                  </div>
                  <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start">
                <div class="review-user">
                  <img src="assets/images/avatars/avatar-4.png" width="65" height="65" class="rounded-circle" alt="">
                </div>
                <div class="review-content ms-3">
                  <div class="rates cursor-pointer fs-6">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <h6 class="mb-0">Peter Costanzo</h6>
                    <p class="mb-0 ms-auto">February 26, 2021</p>
                  </div>
                  <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start">
                <div class="review-user">
                  <img src="assets/images/avatars/avatar-5.png" width="65" height="65" class="rounded-circle" alt="">
                </div>
                <div class="review-content ms-3">
                  <div class="rates cursor-pointer fs-6">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <h6 class="mb-0">Peter Costanzo</h6>
                    <p class="mb-0 ms-auto">February 26, 2021</p>
                  </div>
                  <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start">
                <div class="review-user">
                  <img src="assets/images/avatars/avatar-6.png" width="65" height="65" class="rounded-circle" alt="">
                </div>
                <div class="review-content ms-3">
                  <div class="rates cursor-pointer fs-6">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <h6 class="mb-0">Peter Costanzo</h6>
                    <p class="mb-0 ms-auto">February 26, 2021</p>
                  </div>
                  <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-start">
                <div class="review-user">
                  <img src="assets/images/avatars/avatar-7.png" width="65" height="65" class="rounded-circle" alt="">
                </div>
                <div class="review-content ms-3">
                  <div class="rates cursor-pointer fs-6">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <h6 class="mb-0">Peter Costanzo</h6>
                    <p class="mb-0 ms-auto">February 26, 2021</p>
                  </div>
                  <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-6 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-header bg-transparent">
            <div class="d-flex align-items-center">
              <h6 class="mb-0">Chat Box</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="chat-talk d-flex flex-column gap-4 p-3">
              <div class="d-flex align-items-end gap-3">
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
                <div class="chat-msg border flex-grow-1 rounded-4 p-3">
                  Hello , Codervent
                </div>
              </div>
              <div class="d-flex align-items-end gap-3">
                <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
                  Hello , Codervent
                </div>
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
              </div>
              <div class="d-flex align-items-end gap-3">
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
                <div class="chat-msg border flex-grow-1 rounded-4 p-3">
                  Hello , Codervent
                </div>
              </div>
              <div class="d-flex align-items-end gap-3">
                <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
                  Hello , Codervent
                </div>
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
              </div>
              <div class="d-flex align-items-end gap-3">
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
                <div class="chat-msg border flex-grow-1 rounded-4 p-3">
                  Hello , Codervent
                </div>
              </div>
              <div class="d-flex align-items-end gap-3">
                <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
                  Hello , Codervent
                </div>
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
              </div>
              <div class="d-flex align-items-end gap-3">
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
                <div class="chat-msg border flex-grow-1 rounded-4 p-3">
                  Hello , Codervent
                </div>
              </div>
              <div class="d-flex align-items-end gap-3">
                <div class="chat-msg border flex-grow-1 rounded-4 p-3 bg-light">
                  Hello , Codervent
                </div>
                <div class="chat-user">
                  <img src="assets/images/avatars/avatar-7.png" width="55" height="55" class="rounded-circle" alt="">
                </div>
              </div>
            </div>
            <div class="card-footer bg-transparent">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type your message">
                <button class="btn btn-primary" type="button"><i class="bi bi-send"></i></button>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!--end row-->


  </main>
  <!--end page main-->
</div>
<!--end wrapper-->

@endsection