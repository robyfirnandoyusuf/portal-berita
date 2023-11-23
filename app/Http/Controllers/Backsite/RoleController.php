<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. eloquent
        $role = Role::orderBy('created_at', 'DESC')->get(); // ini buat ambil data dari table role 
        // dd($role->toArray());
        // 2. db builder
        /* 
            select * from role order by created_at desc;
        */
        $data['role'] = $role;

        return view('backsite.role.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backsite.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // style synax 1
        /* $r = new Role;
        $r->nama = $request->nama;
        $r->nama_role = $request->nama_role;
        $r->save(); */

        // style synax 2
        // $arr = [
        //     'nama' => $request->nama,
        //     'nama_role' =>  $request->nama_role
        // ];
        // Role::insert($arr);

        // stye syntax 3
        // dd($request->all());
        Role::create($request->all());

        return redirect()->route('backsite.role.index')->with('succes', 'Role added succesfully');
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
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $data['role'] = $role;
        /* 
            select * from role where id = 6
        */

        return view('backsite.role.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);

        $role->update($request->all());
        return redirect()->route('backsite.role.index')->with('succes', 'Role updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // syntax ini,
        $role = Role::findOrFail($id);
        $role->delete();
        /* 
            sama artinya dengan:
            delete * from role where id = $id
            hapus data dari table role dengan id = $id 
        */
        return redirect()->route('backsite.role.index')->with('success', 'Role delete succesfully');
    }
}
