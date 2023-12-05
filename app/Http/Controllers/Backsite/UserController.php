<?php

namespace App\Http\Controllers\backsite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // 1. eloquent
        $user = User::orderBy('created_at', 'DESC')->get(); // ini buat ambil data dari table user
        // 2. db builder
        /*
            select * from role order by created_at desc;
        */
        $data['user'] = $user;

        return view('backsite.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backsite.user.create');

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

        // $arr = [
        //     // 'nama' => $request->nama,
        //     'name' =>  $request->name,
        //     'email' =>  $request->email,
        //     'username' => $request->username
        //     'timestamp' =>$

        // ];
        // User::insert($arr);

        // stye syntax 3
        // dd($request->all());
        // Role::create($request->all());
        User::create($request->all());


        return redirect()->route('backsite.user.index')->with('succes', 'user added succesfully');
    }

    /**
     * Display the specified resource.
     */


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
        $user = User::findOrFail($id);
        $data['user'] = $user;
        /*
            select * from role where id = 6
        */

        return view('backsite.user.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::findOrFail($id);

        $user->update($request->all());
        return redirect()->route('backsite.user.index')->with('succes', 'user updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);

        $user->delete();
        return redirect()->route('backsite.user.index')->with('succes', 'user delete succesfully');

    }
}
