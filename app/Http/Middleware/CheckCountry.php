<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Mendapatkan IP pengguna
        $ip = $request->ip();

        // API key IPinfo.io
        $apiKey = env('IPINFO_API_KEY');  // Pastikan Anda menambahkan API key di .env

        // Membuat instance client Guzzle
        $client = new Client();
        $response = $client->get("http://ipinfo.io/{$ip}/json?token={$apiKey}");
        // Mendapatkan data dari response
        $data = json_decode($response->getBody()->getContents(), true);


        // Cek apakah negara adalah Indonesia (ID)
        if (isset($data['country']) && $data['country'] !== 'ID') {
            // Jika bukan dari Indonesia, tampilkan halaman error atau redirect
            abort(403, 'Access Denied');
        }



        return $next($request);
    }
}
