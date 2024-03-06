<?php

use App\Http\Controllers\ApiTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if(Auth::attempt($credentials)){
        $user = $request->user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            "access_token" => $token,
            "token_type"   => 'Bearer'
        ]);
    }

    return response()->json([
        "message" => "Usuario invalido"
    ]);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/tasks', [ApiTaskController::class, 'index']);
