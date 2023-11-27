<?php

namespace App\Http\Controllers\Backsite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        // 1. eloquent
        $kategori = Category::orderBy('created_at', 'DESC')->get();// ini buat ambil data dari table role
        // 2. db builder
        /*
            select * from role order by created_at desc;
        */
        $data['kategori'] = $kategori;

        return view('backsite.kategori.index', $data);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


        return view('backsite.kategori.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // style synax 1
        /* $r = new Role;
        $r->nama = $request->nama;
        $r->nama_role = $request->nama_role;
        $r->save(); */

        // style synax 2

        $arr = [
            // 'nama' => $request->nama,
            'nama_kategori' =>  $request->nama_kategori
        ];

        Category::insert($arr);


        // stye syntax 3
        // dd($request->all());
        // Role::create($request->all());

        return redirect()->route('backsite.kategori.index')->with('success','Kategori berhasil ditambahkan');

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


        $kategori = Category::findOrFail($id);
        $data['kategori'] = $kategori;
        /*
            select * from role where id = 6
        */

        return view('backsite.kategori.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $kategori = Category::findOrFail($id);
    //    dd($request->all()\));
        $kategori->update($request->all());
        return redirect()->route('backsite.kategori.index')->with('success','Kategori updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $kategori = Category::findOrFail($id);

        $kategori->delete();
        return redirect()->route('backsite.kategori.index')->with('succes','Kategori delete succesfully');

    }
}
