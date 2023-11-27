<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ini tdi kan salah tuh, dia ga nemu file dashboard di folder resources/views, nah emg bner kan si file dashboard.blade.php itu ga disitu, faktanya memang dia masih perlu masuk ke beberapa folder lgi.. resources/views/backsite/dashboard/dashboard.blade.php, ya g? iya nahh artinya , bgtu ... lach resources/views nya ga ditulis?? engga, karena laravel itu selama kamu maggil method view(), dia otomatis tau klo itu ada di folder resources/views, ohh gitu berarti ini udah bisa ya mas? cba dulu cbain
        return view('backsite.dashboard.dashboard'); # ternyata kamu panggil view home, cba pnggil view dashboard tdi di folder resources/views .....
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backsite.berita.create');
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
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('backsite.berita.edit');
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
