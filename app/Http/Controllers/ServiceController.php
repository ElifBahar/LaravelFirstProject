<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function HomeService(){
        $homeservice = HomeService::latest()->get();
        return view('admin.homeService.index', compact('homeservice'));
    }
}
