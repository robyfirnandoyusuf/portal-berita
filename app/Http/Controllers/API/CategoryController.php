<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Kategori\GetCategoryResource;

class CategoryController extends Controller
{

    public function index()
    {
        //
        // return response()->json(['data'=> $category]);

        $category = Category::all();

        return GetCategoryResource::collection($category);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
         $validated = $request -> validate([
            'kategori' => 'required|max:255'
         ]);

        //  return response()->json('test');
        $category = Category::create($request->all());
        return new GetCategoryResource ($category);    }

    public function show(string $id)
    {
        //

        $category = Category::findOrFail($id);
        return new GetCategoryResource ($category);

        // Kalau Collection tidak bisa di pakai di show karena collection mengembalikan semua dalam bentuk array
        // Sedangkan kalau mau di show menggunakan new
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, $id)
    {

        $validated = $request -> validate([
            'kategori' => 'required|max:255'
         ]);

         $category = Category::findOrFail($id);
         $category->update($request->all());
         return new GetCategoryResource($category);


    }


    public function destroy($id)
    {

        $category = Category::findOrFail($id);
        $category->delete();
        return new GetCategoryResource($category);
    }

    public function filter(Request $request){
        $category_filter = DB::table('category');

        if ($request->name){
            $category_filter->where('kategori', 'LIKE','%'.$request->name.'%');
        }

        // if($request->name)
        // $category_filter->whereHas('category', function($query) use($request){
        //     $query->where('kategori',$request->name);
        // });

        $category = $category_filter->get();
        return GetCategoryResource::collection($category);
    }


}
