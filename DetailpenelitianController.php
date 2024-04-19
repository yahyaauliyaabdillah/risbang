<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DetailpenelitianController extends Controller
{
    // Luaran Penelitian
    // Tambah
    public function viewDetaillapdosenpen(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.detaillaporanpenelitian.detaillapdosenpen');
    }
    public function viewDetaillapmhspen(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.detaillaporanpenelitian.detaillapmhspen');
    }
    public function viewDetaillapklbpen(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.detaillaporanpenelitian.detaillapklbpen');
    }
    // END
    // EDIT
    public function viewEditlapmhspen(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.edit.editlapmhspen');
    }
    public function viewEditlapklbpen(Request $request)
    {
        return view('app.penelitian.laporanpenelitian.edit.editlapklbpen');
    }
    // END EDIT
    // END
    // Luaran Dosen
     // Tambah
     public function viewTambahbukupdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.bukupdt');
     }
     public function viewTambahforumpdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.forumpdt');
     }
     public function viewTambahhkipdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.hkipdt');
     }
     public function viewTambahintegrasipdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.integrasipdt');
     }
     public function viewTambahjurnalpdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.jurnalpdt');
     }
     public function viewTambahoutcomepdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.outcomepdt');
     }
     public function viewTambahprodukpdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.produkpdt');
     }
     public function viewTambahprosidingpdt(Request $request)
     {
         return view('app.penelitian.luarandosen.tambah.prosidingpdt');
     }
     // END
     // EDIT
    public function viewEditbukupde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.bukupde');
    }
    public function viewEditforumpde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.forumpde');
    }
    public function viewEdithkipde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.hkipde');
    }
    public function viewEditintegrasipde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.integrasipde');
    }
    public function viewEditjurnalpde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.jurnalpde');
    }
    public function viewEditoutcomepde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.outcomepde');
    }
    public function viewEditprodukpde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.produkpde');
    }
    public function viewEditprosidingpde(Request $request)
    {
        return view('app.penelitian.luarandosen.edit.prosidingpde');
    }
    // END EDIT
    // End
      // Luaran Kolaborasi
    // Tambah
    public function viewTambahbukupkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.bukupkt');
    }
    public function viewTambahforumpkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.forumpkt');
    }
    public function viewTambahhkipkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.hkipkt');
    }
    public function viewTambahintegrasipkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.integrasipkt');
    }
    public function viewTambahjurnalpkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.jurnalpkt');
    }
    public function viewTambahoutcomepkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.outcomepkt');
    }
    public function viewTambahprodukpkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.produkpkt');
    }
    public function viewTambahprosidingpkt(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.tambah.prosidingpkt');
    }
    
    // END
    // EDIT
    public function viewEditbukupke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.bukupke');
    }
    public function viewEditforumpke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.forumpke');
    }
    public function viewEdithkipke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.hkipke');
    }
    public function viewEditintegrasipke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.integrasipke');
    }
    public function viewEditjurnalpke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.jurnalpke');
    }
    public function viewEditoutcomepke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.outcomepke');
    }
    public function viewEditprodukpke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.produkpke');
    }
    public function viewEditprosidingpke(Request $request)
    {
        return view('app.penelitian.luarankolaborasi.edit.prosidingpke');
    }
    // END EDIT
    // END
    // Luaran mahasiswa
    // Tambah
    public function viewTambahbukupmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.bukupmt');
    }
    public function viewTambahforumpmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.forumpmt');
    }
    public function viewTambahhkipmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.hkipmt');
    }
    public function viewTambahintegrasipmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.integrasipmt');
    }
    public function viewTambahjurnalpmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.jurnalpmt');
    }
    public function viewTambahoutcomepmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.outcomepmt');
    }
    public function viewTambahprodukpmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.produkpmt');
    }
    public function viewTambahprosidingpmt(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.tambah.prosidingpmt');
    }
    // END
    // EDIT
    public function viewEditbukupme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.bukupme');
    }
    public function viewEditforumpme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.forumpme');
    }
    public function viewEdithkipme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.hkipme');
    }
    public function viewEditintegrasipme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.integrasipme');
    }
    public function viewEditjurnalpme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.jurnalpme');
    }
    public function viewEditoutcomepme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.outcomepme');
    }
    public function viewEditprodukpme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.produkpme');
    }
    public function viewEditprosidingpme(Request $request)
    {
        return view('app.penelitian.luaranmahasiswa.edit.prosidingpme');
    }
    // END EDIT
    // END
}
