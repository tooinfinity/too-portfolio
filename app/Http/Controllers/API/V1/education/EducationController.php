<?php

namespace App\Http\Controllers\Api\V1\education;

use App\Models\Education;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\EducationResource;
use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;

class EducationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Education::all();
        return EducationResource::collection($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEducationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEducationRequest $request)
    {

        $validated = $request->validated();

        $id = Auth::user()->id;

        $education = Education::create([
            'user_id' => $id ,
            'degree_name' => $request->degree_name,
            'institute_name' => $request->institute_name,
            'started_at' => $request->started_at,
            'ended_at' => $request->ended_at,
            'is_completed' => $request->is_completed,
        ]);
    
        return new EducationResource($education);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return new EducationResource($education);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEducationRequest  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducationRequest $request, Education $education)
    {
        $education->update($request->only(['degree_name', 'institute_name','started_at','ended_at','is_completed']));

        return new EducationResource($education);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return response()->json('Education deleted successfully', 204);
    }
}
