<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\kategori;
use Illuminate\Http\Request;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data['berita'] = Berita::find($id);
        $data['kategoris'] = getCategory();
        return view('fronsite.detail.index', $data);
    }

    public function detail($id)
    {
        //
        $data['berita'] = Berita::find($id);
        $data['kategoris'] = getCategory();
        // dd(1);
        return view('frontsite.detail.index', $data);
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
