<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class RoadmapController extends Controller
{
    public function viewRoadmap(Request $request)
    {
        return view('app.roadmap.roadmap');
    }



    public function viewDetailroadmapprodi(Request $request)
    {
        return view('app.roadmap.detailroadmap.roadmapprodi');
    }
    public function viewDetailroadmapdosen(Request $request)
    {
        return view('app.roadmap.detailroadmap.roadmapdosen');
    }
}
