<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles= User::orderBy('created_at', 'DESC')->get();// ini buat ambil data dari table role
        // 2. db builder
        /*
            select * from role order by created_at desc;
        */
        $data['profiles'] = $profiles;

        return view('backsite.profile.index', $data);
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Auth::user()
        // auth()->user();
        $user = User::findOrFail(auth()->id());
        $user->update($request->all());


        $gambarProfile = $request->file('imageProfile');

        if($request->hasFile('imageProfile'))
        {
            $imageName = $gambarProfile->getClientOriginalName();
            $gambarProfile->move(public_path('Profile-img'), $imageName);
            $user->update(['imageProfile' => $imageName]);

            return redirect()->route('backsite.berita.index')->with('success', 'Profile updated succesfully');
        }

        return redirect()->route('backsite.berita.index')->with('success', 'Profile updated succesfully');
    }

    // public function updateProfile(Request $request) {
    //     $gambar = $request->file('file');
    //     $imageName = $gambar->getClientOriginalName();
    //     $gambar->move(public_path('backsite-assets.img'), $imageName);



    //     return $gambar;
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
