<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitors;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordVisitor
{
    /**
     * Handle an incoming request.
     *
     *
     */
    public function handle(Request $request, Closure $next): Response
    {

        $ipAddress = $request->ip();
        $idBerita = request('id');

         //Cek apakah pengunjung dengan ip ini sudah tercatat
         $visitor = Visitors::where([
            'ip_address' => $ipAddress,
            'id_berita' => $idBerita
         ])->first();
        //  dd($visitor);

         // Logic
         if(empty($visitor)){
            //Jika belum tercatat, tambahkan catatan
            Visitors::insert([
                'ip_address'=> $ipAddress,
                'id_berita' => $idBerita
            ]);
         }

        return $next($request);
    }
}
