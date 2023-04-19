<?php

namespace App\Http\Controllers;

use App\Models\Simpsons;
use App\Http\Resources\SimpsonsResource as SimpsonsResource;

class SimpsonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return SimpsonsResource::collection(Simpsons::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): SimpsonsResource
    {
        return new SimpsonsResource(Simpsons::findOrFail($id));
    }
}
