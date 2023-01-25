<?php

namespace App\Http\Controllers\Api\V1\certification;

use Illuminate\Http\Request;
use App\Models\Certification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CertificationResource;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Certification::all();
        return CertificationResource::collection($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCertificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificationRequest $request)
    {
        $validated = $request->validated();

        $id = Auth::user()->id;

        $education = Certification::create([
            'user_id' => $id ,
            'name' => $request->name,
            'url' => $request->url,
            'is_published' => $request->is_published,
            'started_at' => $request->started_at,
            'ended_at' => $request->ended_at,
        ]);
    
        return new CertificationResource($education);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        return new CertificationResource($certification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificationRequest  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificationRequest $request, Certification $certification)
    {
        $certification->update($request->only(['name', 'url','is_published','started_at','ended_at']));

        return new CertificationResource($certification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        $certification->delete();

        return response()->json('Certification deleted successfully', 204);
    }
}
