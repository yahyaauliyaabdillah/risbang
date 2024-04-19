<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DetailpengabdianController extends Controller
{
    // Laproan Pengabdian
    // Tambah
    public function viewTambahdosenbt(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.tambah.dosenbt');
    }
    public function viewTambahkolaborasibt(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.tambah.kolaborasibt');
    }
    public function viewTambahmahasiswabt(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.tambah.mahasiswabt');
    }
    // Edit
    public function viewEditdosenbe(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.edit.dosenbe');
    }
    public function viewEditkolaborasibe(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.edit.kolaborasibe');
    }
    public function viewEditmahasiswabe(Request $request)
    {
        return view('app.pengabdian.laporanpengabdian.edit.mahasiswabe');
    }
    // End Laproan Pengabdian
    // Luaran Dosen Pengabdian
    // Tambah
    public function viewTambahbukubdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.bukubdt');
    }
    public function viewTambahforumbdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.forumbdt');
    }
    public function viewTambahhkibdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.hkibdt');
    }
    public function viewTambahintegrasibdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.integrasibdt');
    }
    public function viewTambahjurnalbdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.jurnalbdt');
    }
    public function viewTambahoutcomebdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.outcomebdt');
    }
    public function viewTambahprodukbdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.produkbdt');
    }
    public function viewTambahprosidingbdt(Request $request)
    {
        return view('app.pengabdian.luarandosen.tambah.prosidingbdt');
    }
    // Edit
    public function viewEditbukubde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.bukubde');
    }
    public function viewEditforumbde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.forumbde');
    }
    public function viewEdithkibde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.hkibde');
    }
    public function viewEditintegrasibde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.integrasibde');
    }
    public function viewEditjurnalbde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.jurnalbde');
    }
    public function viewEditoutcomebde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.outcomebde');
    }
    public function viewEditprodukbde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.produkbde');
    }
    public function viewEditprosidingbde(Request $request)
    {
        return view('app.pengabdian.luarandosen.edit.prosidingbde');
    }
    // End Luaran Dosen Pengabdian
     // Luaran Kolaborasi Pengabdian
    // Tambah
    public function viewTambahbukubkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.bukubkt');
    }
    public function viewTambahforumbkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.forumbkt');
    }
    public function viewTambahhkibkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.hkibkt');
    }
    public function viewTambahintegrasibkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.bukubkt');
    }
    public function viewTambahjurnalbkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.jurnalbkt');
    }
    public function viewTambahoutcomebkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.outcomebkt');
    }
    public function viewTambahprodukbkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.produkbkt');
    }
    public function viewTambahprosidingbkt(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.tambah.prosidingbkt');
    }
    // Edit
    public function viewEditbukubke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.bukubke');
    }
    public function viewEditforumbke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.forumbke');
    }
    public function viewEdithkibke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.hkibke');
    }
    public function viewEditintegrasibke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.integrasibke');
    }
    public function viewEditjurnalbke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.jurnalbke');
    }
    public function viewEditoutcomebke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.outcomebke');
    }
    public function viewEditprodukbke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.produkbke');
    }
    public function viewEditprosidingbke(Request $request)
    {
        return view('app.pengabdian.luarankolaborasi.edit.prosidingbke');
    }
    // End Luaran Kolaborasi Pengabdian
     // Luaran Mahasiswa Pengabdian
    // Tambah
    public function viewTambahbukubmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.bukubmt');
    }
    public function viewTambahforumbmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.forumbmt');
    }
    public function viewTambahhkibmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.hkibmt');
    }
    public function viewTambahintegrasibmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.integrasibmt');
    }
    public function viewTambahjurnalbmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.jurnalbmt');
    }
    public function viewTambahoutcomebmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.outcomebmt');
    }
    public function viewTambahprodukbmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.produkbmt');
    }
    public function viewTambahprosidingbmt(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.tambah.prosidingbmt');
    }
    // Edit
    public function viewEditbukubme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.bukubme');
    }
    public function viewEditforumbme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.forumbme');
    }
    public function viewEdithkibme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.hkibme');
    }
    public function viewEditintegrasibme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.integrasibme');
    }
    public function viewEditjurnalbme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.jurnalbme');
    }
    public function viewEditoutcomebme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.outcomebme');
    }
    public function viewEditprodukbme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.produkbme');
    }
    public function viewEditprosidingbme(Request $request)
    {
        return view('app.pengabdian.luaranmahasiswa.edit.prosidingbme');
    }
    // End Luaran Mahasiswa Pengabdian
}
