<?php

use App\Http\Resources\MeetingCollection;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/list/meetings/resource', function (Request $request) {
    $meetings = Meeting::get();
    return new MeetingCollection($meetings);
});

Route::post('/list/meetings/where', function (Request $request) {
    $meetings = Meeting::with('users')->get();
    return response()->json($meetings);
});
