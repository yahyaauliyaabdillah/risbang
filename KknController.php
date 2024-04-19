<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class KknController extends Controller
{
    // Buku Ajar
    public function viewBukuajar(Request $request)
    {
        return view('app.kkn.kknbukuajar.bukuajar');
    }
    // End Buku Ajar
    //   KKN MBKM Santri
    public function viewHasilplotingkms(Request $request)
    {
        return view('app.kkn.kknmbkmsantri.hasilplotingkms');
    }
    public function viewPlotingkms(Request $request)
    {
        return view('app.kkn.kknmbkmsantri.plotingkms');
    }
    public function viewRekapproposaldanakhirkms(Request $request)
    {
        return view('app.kkn.kknmbkmsantri.rekapproposaldanakhirkms');
    }
    //   End KKN MBKM Santri
    // KKN Nusantara
    public function viewHasilplotingkn(Request $request)
    {
        return view('app.kkn.kknnusantara.hasilplotingkn');
    }
    public function viewPlotingkn(Request $request)
    {
        return view('app.kkn.kknnusantara.plotingkn');
    }
    // End KKN Nusantara
    // KKN OBE
    public function viewDatarekapakhirko(Request $request)
    {
        return view('app.kkn.kknobe.datarekapakhirko');
    }
    public function viewDatarekapkemajuanko(Request $request)
    {
        return view('app.kkn.kknobe.datarekapkemajuanko');
    }
    public function viewDatarekapproposalkknko(Request $request)
    {
        return view('app.kkn.kknobe.datarekapproposalkknko');
    }
    public function viewHasilplotingko(Request $request)
    {
        return view('app.kkn.kknobe.hasilplotingko');
    }
    public function viewLoogbookko(Request $request)
    {
        return view('app.kkn.kknobe.loogbookko');
    }
    public function viewPlotingko(Request $request)
    {
        return view('app.kkn.kknobe.plotingko');
    }
    // End KKN OBE
    // KKN Tematik
    public function viewHasilplotingkt(Request $request)
    {
        return view('app.kkn.kkntematik.hasilplotingkt');
    }
    public function viewPlotingkt(Request $request)
    {
        return view('app.kkn.kkntematik.plotingkt');
    }
    // End KKN Tematik
    // Monitoring KKN
    public function viewNilaimahasiswa(Request $request)
    {
        return view('app.kkn.monitoringkkn.nilaimahasiswa');
    }
    // End Monitoring KKN
    // setingkkn
    public function viewHasilplotingreviewer(Request $request)
    {
        return view('app.kkn.setingkkn.hasilplotingreviewer');
    }
    public function viewLuaranwajib(Request $request)
    {
        return view('app.kkn.setingkkn.luaranwajib');
    }
    public function viewPlotingreviewer(Request $request)
    {
        return view('app.kkn.setingkkn.plotingreviewer');
    }
    public function viewPlotingexel(Request $request)
    {
        return view('app.kkn.setingkkn.plotingexel');
    }
    public function viewReviewer(Request $request)
    {
        return view('app.kkn.setingkkn.reviewer');
    }
    public function viewSetingdeadline(Request $request)
    {
        return view('app.kkn.setingkkn.setingdeadline');
    }
    public function viewTema(Request $request)
    {
        return view('app.kkn.setingkkn.tema');
    }
    // End setingkkn
}
