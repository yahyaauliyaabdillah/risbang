<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class KerjasamaController extends Controller
{
    public function viewKerjasamapenelitian(Request $request)
    {
        return view('app.kerjasama.kerjasamapenelitian');
    }
    public function viewKerjasamapengabdian(Request $request)
    {
        return view('app.kerjasama.kerjasamapengabdian');
    }
}