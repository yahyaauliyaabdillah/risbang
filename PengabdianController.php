<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PengabdianController extends Controller
{
    //   Laporan Pengabdian
    public function viewDosenb(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.dosenb');
    }
    public function viewKolaborasib(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.kolaborasib');
    }
    public function viewMahasiswab(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.mahasiswab');
    }
    //  End Laporan Pengabdian
    // Luaran Dosen
    public function viewBukubd(Request $request)
    {
        return view('app.pengabdian.luarandosen.bukubd');
    }
    public function viewForumbd(Request $request)
    {
        return view('app.pengabdian.luarandosen.forumbd');
    }
    public function viewHkibd(Request $request)
    {
        return view('app.pengabdian.luarandosen.hkibd');
    }
    public function viewIntegrasibd(Request $request)
    {
        return view('app.pengabdian.luarandosen.integrasibd');
    }
    public function viewJurnalbd(Request $request)
    {
        return view('app.pengabdian.luarandosen.jurnalbd');
    }
    public function viewOutcomebd(Request $request)
    {
        return view('app.pengabdian.luarandosen.outcomebd');
    }
    public function viewProdukbd(Request $request)
    {
        return view('app.pengabdian.luarandosen.produkbd');
    }
    public function viewprosidingbd(Request $request)
    {
        return view('app.pengabdian.luarandosen.prosidingbd');
    }
    // End Luaran Dosen
    // Luaran Kolaborasi
    public function viewBukubk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.bukubk');
    }
    public function viewForumbk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.forumbk');
    }
    public function viewHkibk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.hkibk');
    }
    public function viewIntegrasibk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.integrasibk');
    }
    public function viewJurnalbk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.jurnalbk');
    }
    public function viewOutcomebk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.outcomebk');
    }
    public function viewProdukbk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.produkbk');
    }
    public function viewProsidingbk(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.prosidingbk');
    }
    // End Luaran Kolaborasi
    // Luaran Mahasiswa
    public function viewBukubm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.bukubm');
    }
    public function viewForumbm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.forumbm');
    }
    public function viewHkibm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.hkibm');
    }
    public function viewIntegrasibm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.integrasibm');
    }
    public function viewJurnalbm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.jurnalbm');
    }
    public function viewOutcomebm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.outcomebm');
    }
    public function viewProdukbm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.produkbm');
    }
    public function viewProsidingbm(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.prosidingbm');
    }
    // End Luaran Mahasiswa
}
