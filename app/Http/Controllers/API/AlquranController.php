<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\EndpointAPI;

class AlquranController extends Controller
{
    public function getAllSurah()
    {
        $quranEndpoint = EndpointAPI::getFullSurahEndpoint();
        $response = Http::get($quranEndpoint);
        $response = $response->json();

        return response()->json([
            'message' => 'success',
            'data' => $response['data']
        ], 200);
    }
}
