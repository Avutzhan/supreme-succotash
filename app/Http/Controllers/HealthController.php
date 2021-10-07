<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HealthController extends Controller
{
    public function hello(): JsonResponse
    {
        return response()->json([
            'success' => true,
        ]);
    }
}
