<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function AllCat(){
        $categories = Category::latest()->paginate(5);
        return view('admin.category.index',compact('categories'));
    }

    public function AddCat(Request $request){
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255'
        ],
            [
                'category_name.required' => 'Please input category name'
            ]
        );

        Category::insert([
           'category_name' => $request->category_name,
           'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success','Category Inserted Successfully');

        /*$category = new Category;
        $category->category_name = $request->category_name;
        $category->user_id = Auth::user()->id;
        $category->save();
        */
    }

    public function Edit($id){
        $categories = Category::find($id);

        return view('admin.category.edit',compact('categories'));
    }

    public function Update(Request $request , $id){
        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id
        ]);

        return Redirect()->route('all.category')->with('success','Category Updated Successfully');


    }
}
