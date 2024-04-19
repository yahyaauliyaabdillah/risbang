<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DatatendikController extends Controller
{
    public function viewDosendt(Request $request)
    {
        return view('app.datatendik.dosendt');
    }
    public function viewFakultas(Request $request)
    {
        return view('app.datatendik.fakultas');
    }
    public function viewMahasiswadt(Request $request)
    {
        return view('app.datatendik.mahasiswadt');
    }
    public function viewProdidt(Request $request)
    {
        return view('app.datatendik.prodidt');
    }
    public function viewTahunakademik(Request $request)
    {
        return view('app.datatendik.tahunakademik');
    }
}
