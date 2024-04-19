<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PenelitianController extends Controller
{
    public function viewLpdosen(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.dosen');
    }
    public function viewLpmahasiswa(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.mahasiswa');
    }
    public function viewLpkolaborasi(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.kolaborasi');
    }
    //    Luaran Dosen
    public function viewBukupd(Request $request)
    {
        return view('app.penelitian.luarandosen.bukupd');
    }
    public function viewForumpd(Request $request)
    {
        return view('app.penelitian.luarandosen.forumpd');
    }
    public function viewHKIpd(Request $request)
    {
        return view('app.penelitian.luarandosen.hkipd');
    }
    public function viewIntegrasipd(Request $request)
    {
        return view('app.penelitian.luarandosen.integrasipd');
    }
    public function viewJurnalpd(Request $request)
    {
        return view('app.penelitian.luarandosen.jurnalpd');
    }
    public function viewOutcomepd(Request $request)
    {
        return view('app.penelitian.luarandosen.outcomepd');
    }
    public function viewProdukpd(Request $request)
    {
        return view('app.penelitian.luarandosen.produkpd');
    }
    public function viewProsidingpd(Request $request)
    {
        return view('app.penelitian.luarandosen.prosidingpd');
    }
    // End Luaran Dosen
    // Luaran Kolaborasi
    public function viewBukupk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.bukupk');
    }
    public function viewForumpk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.forumpk');
    }
    public function viewHkipk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.hkipk');
    }
    public function viewIntegrasipk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.integrasipk');
    }
    public function viewJurnalpk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.jurnalpk');
    }
    public function viewOutcomepk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.outcomepk');
    }
    public function viewProdukpk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.produkpk');
    }
    public function viewProsidingpk(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.prosidingpk');
    }
    // End Luaran Kolaborasi
    // Luaran Mahasiswa
    public function viewBukupm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.bukupm');
    }
    public function viewforumpm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.forumpm');
    }
    public function viewHkipm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.hkipm');
    }
    public function viewIntegrasipm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.integrasipm');
    }
    public function viewJurnalpm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.jurnalpm');
    }
    public function viewOutcomepm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.outcomepm');
    }
    public function viewProdukpm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.Produkpm');
    }
    public function viewProsidingpm(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.prosidingpm');
    }
    // End Luaran Mahasiswa
}
