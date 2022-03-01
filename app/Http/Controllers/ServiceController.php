<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function HomeService(){
        $homeservice = HomeService::latest()->get();
        return view('admin.homeService.index', compact('homeservice'));
    }

    public function AddService(){

        return view('admin.homeService.create');
    }

    public function StoreService(Request $request){

        HomeService::insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.service')->with('success','Service Created Successfully');

    }

    public function EditService($id){

        $homeservice = HomeService::find($id);
        return view('admin.homeService.edit', compact('homeservice'));
    }

    public function UpdateService(Request $request, $id){

        $update = HomeService::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return Redirect()->route('home.service')->with('success','Service Updated Successfully');

    }

    public function DeleteService($id){
        $delete = HomeService::find($id)->delete();

        return Redirect()->back()->with('success','Service Deleted Successfully');

    }
}
