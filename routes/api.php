<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/projects", function () {
    $projects = Project::paginate(10);

    return response()->json([
        "projects"=> $projects,
    ]);


    // altro modo per fare la rotta API 

    // return response()->json($projects);
});