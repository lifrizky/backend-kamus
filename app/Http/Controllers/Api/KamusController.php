<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kamus;
use Illuminate\Http\Request;

class KamusController extends Controller
{
    public function index(){
        $kamus = Kamus::oldest()->get();
    
            if ($kamus->isEmpty()) {
                return response()->json([
                    "response" => [
                        "status"    => 204,
                        "message"   => "Tidak ada data Istilah yang ditemukan."
                    ],
                    "data" => []
                ], 204);
            }
    
            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => "List Data Istilah Komputer"
                ],
                "data" => $kamus
            ], 200);
        }
}
