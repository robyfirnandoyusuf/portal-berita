<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Berita;
use App\Models\Gambar;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Berita\GetBeritaResource;
use App\Http\Resources\Berita\PostBeritaResource;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $berita = Berita::with(['gambar','category'])->get();
        } catch (\Exception $e) {

            if (env('APP_ENV') == 'local') {
                dd($e->getMessage());
            } else {
                $berita = [
                    'status' => false,
                    'message' => 'Get Berita Failed'
                ];
            }
            return $berita;
        }
        return  GetBeritaResource::collection($berita);
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
        $user = User::where('email', $request->email)->first();
        // dd($user);

        $berita = $request->validate([
            'judul' => 'required|max:255',
            'description' => 'required',
            'kategori' => 'required_with:end_page|integer|min:1|digits_between: 1,5',
            'email' => 'required'
        ]);

        $berita = Berita::InsertGetId([
            'judul' => $request->judul,
            'description' => $request->description,
            'id_kategori' => $request->kategori,
            'id_user' => $user->id,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        if($request->hasFile('file')){
            // upload file image
            $files = $request->file('file');
            
            foreach ($files as $key => $file) {
                $fileName = $file->getClientOriginalName();
                $ekstensi = $file->extension();

                $imageUpload = new Gambar();
                $imageUpload->filename = $fileName;
                $imageUpload->id_berita = $berita;
                $imageUpload->save();

                Storage::putFileAs('image', $file, $fileName.'.'.$ekstensi);
            }

        }
        // session()->push('id_gambar', $imageUpload->id);
        
        // $request['id_user'] = Auth::user()->id;
      

       
        // dd($imageUpload->save());
        // dd($imageUpload);

        return [
            'status' => true,
            'message' => 'Berhasil membuat berita !',
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = Berita::with(['gambar'])->findOrFail($id);
        // dd($berita);
        return new PostBeritaResource($berita);
    }

    public function filter(Request $request){
        $judul_query = Berita::with(['gambar', 'category']);
        // Pencarian By Judul dan ID
        if($request->search){
            $judul_query->where('judul', 'LIKE', '%'.$request->search. '%')->orWhere('description', 'LIKE', '%'.$request->search. '%');
        }    

        // Filter By Category
        if($request->category)
        $judul_query->whereHas('category', function($query) use($request){
            $query->where('kategori',$request->category);
        });

        //sort ASC/DESC
        if($request->sortBy && in_array($request->sortBy,['id','created_at'])){
            $sortBy = $request->sortBy;
        } else {
            $sortBy = 'id';
        }
        if($request->sortOrder && in_array($request->sortOrder,['asc','desc'])){
            $sortOrder = $request->sortOrder;
        } else {
            $sortOrder = 'desc';
        }

        //Pagination
        if($request->perPage){
            $perPage = $request->perPage;

        } else {
            $perPage = 5;
        }

        if($request->paginate){
            $juduls = $judul_query->orderBY($sortBy,$sortOrder)->paginate($perPage);

        } else {
            $juduls = $judul_query->orderBY($sortBy,$sortOrder)->get();
        }

        $juduls = $judul_query->orderBY($sortBy,$sortOrder)->get();
        return  GetBeritaResource::collection($juduls);
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
        $user = User::where('email', $request->email)->first();

        $berita = $request->validate([
            'judul' => 'required|max:255',
            'description' => 'required',
            'kategori' => 'required_with:end_page|integer|min:1|digits_between: 1,5',
            'email' => 'required'
        ]);
        $berita = Berita::findOrFail($id);
        $berita->update([
            'judul' => $request->judul,
            'description' => $request->description,
            'id_kategori' => $request->kategori,
            'id_user' => $user->id
        ]);

        return new PostBeritaResource($berita->loadMissing(['gambar','category']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return new PostBeritaResource($berita->loadMissing(['gambar','category']));
    }
}
