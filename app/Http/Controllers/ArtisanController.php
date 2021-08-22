<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Symfony\Component\HttpFoundation\Response;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Artisan::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artisan = Artisan::create($request->all());
        return response($artisan,Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artisan  $artisan
     * @return \Illuminate\Http\Response
     */
    public function show(Artisan $artisan)
    {
        return $artisan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artisan  $artisan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artisan $artisan)
    {
        $artisan->update($request->all());

        return response($artisan,Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artisan  $artisan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artisan $artisan)
    {
        $artisan->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
