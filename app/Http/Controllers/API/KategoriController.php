<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\KategoriResource;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd($kat);
        try {
            // $kat = [
            //     'status' => true,
            //     'message' => 'Get data Success',
            //     'data' => Category::all()
            // ];
            $kat = Category::all();
            // $arr = [
            //     [
            //         'id' => 1,
            //         'nama_kat' => 'Hot',
            //     ],
            //     [
            //         'id' => 2,
            //         'nama_kat' => 'Trending',
            //     ],
            //     [
            //         'id' => 3,
            //         'nama_kat' => 'Entertainment',
            //     ],
            // ];

            // $arr = [
            //     'status' => true,
            //     'data' => $arr,
            //     'message' => 'Get data successfully !',
            // ];
        } catch (\Exception $th) {
            //throw $th;

            $kat = [
                'status' => false,
                'data' => $kat,
                'message' => 'Get data failed !',
            ];
            return response()->json($kat, 500);
        }

        // return response()->json($kat, 200);
        return KategoriResource::collection($kat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
