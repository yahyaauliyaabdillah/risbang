<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProgramkerjaController extends Controller
{
    public function viewProgram(Request $request)
    {
        return view('app.programkerja.programkerja');
    }
    public function viewDetailprogram(Request $request)
    {
        return view('app.programkerja.detailprogramkerja');
    }
}
