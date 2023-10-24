<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TempImage;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::latest();

        if (!empty($request->get('keyword'))) {
            $categories = $categories->where('name','like','%'.$request->get('keyword').'%');
        }

        $categories = $categories->paginate(10);

        return view('admin.category.list',compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:categories', 
        ]);

        if ($validator->passes()) {

            $category = new Category();
            $category->name = $request->name;
            $category->slug = $request->slug; 
            $category->status = $request->status;
            $category->save();


            //save Image Disini
            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.',$tempImage->name);
                $ext = last($extArray);

                $newImageName = $category->id.'.'.$ext;
                $sPath = public_path().'/temp/'.$tempImage->name;
                $dPath = public_path().'/uploads/category/'.$newImageName;
                File::copy($sPath,$dPath);


            }

            $request->session()->put('success', 'Category added successfully');
            
            return response()->json([
                'status' => false, 
                'message' => 'Category added successfully'
            ]);

        } else {
            return response()->json([
                'status' => false, 
                'errors' => $validator->errors()
            ]);
        }
    }

    public function edit($categoryId, Request $request){
        $category = Category::find($categoryId);
        if (empty($category)) {
          return redirect()->route('categories.index');  
        }
        
        
        return view('admin.category.edit', compact('category'));

    }

    public function update($categoryId, Request $request){

        $category = Category::find($categoryId);

        if (empty($category)) {
          return response()->json([
            'status' => false,
            'notFound' => true,
            'message' => 'Category not found'
          ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,'.$category->id.',id', 
        ]);
    }

    public function destroy(){

    }
}
