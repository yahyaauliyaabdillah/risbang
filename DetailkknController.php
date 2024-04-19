<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DetailkknController extends Controller
{
    // Buku Ajar
    public function viewBukuajard(Request $request)
    {
        return view('app.kkn.kknbukuajar.detail.bukuajard');
    }
    // KKN MBKM Santri
    public function viewHasilplotingkmsd(Request $request)
    {
        return view('app.kkn.kknmbkmsantri.detail.hasilplotingkmsd');
    }
    public function viewPlotingkmsd(Request $request)
    {
        return view('app.kkn.kknmbkmsantri.detail.plotingkmsd');
    }
    public function viewRekapproposaldanaakhirkmsd(Request $request)
    {
        return view('app.kkn.kknmbkmsantri.detail.rekapproposaldanaakhirkmsd');
    }
    // KKN Nusantara
    public function viewHasilplotingknd(Request $request)
    {
        return view('app.kkn.kknnusantara.detail.hasilplotingknd');
    }
    public function viewPlotingknd(Request $request)
    {
        return view('app.kkn.kknnusantara.detail.plotingknd');
    }
    // KKN OBE
    public function viewDatarekapkemajuankod(Request $request)
    {
        return view('app.kkn.kknobe.detail.datarekapkemajuankod');
    }
    public function viewDatarekapproposalkknkod(Request $request)
    {
        return view('app.kkn.kknobe.detail.datarekapproposalkknkod');
    }
    public function viewHasilplotingkod(Request $request)
    {
        return view('app.kkn.kknobe.detail.hasilplotingkod');
    }
    public function viewLoogbookkod(Request $request)
    {
        return view('app.kkn.kknobe.detail.loogbookkod');
    }
    public function viewPlotingkod(Request $request)
    {
        return view('app.kkn.kknobe.detail.plotingkod');
    }
    // KKN Tematik
    public function viewHasilplotingktd(Request $request)
    {
        return view('app.kkn.kkntematik.detail.hasilplotingktd');
    }
    public function viewPlotingktd(Request $request)
    {
        return view('app.kkn.kkntematik.detail.plotingktd');
    }
    // Monitoring KKN
    public function viewNilaimahasiswad(Request $request)
    {
        return view('app.kkn.monitoringkkn.detail.nilaimahasiswad');
    }
     // Seting KKN
     public function viewHasilplotingreviewerd(Request $request)
     {
         return view('app.kkn.setingkkn.detail.hasilplotingreviewerd');
     }
     public function viewPlotingreviewerd(Request $request)
     {
         return view('app.kkn.setingkkn.detail.plotingreviewerd');
     }
}
