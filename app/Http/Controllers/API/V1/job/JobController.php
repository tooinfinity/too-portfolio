<?php

namespace App\Http\Controllers\Api\V1\job;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Resources\JobResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Job::all();
        return JobResource::collection($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        $id = Auth::user()->id;

        $job = Job::create([
            'user_id' => $id ,
            'company_name' => $request->company_name,
            'role' => $request->role,
            'started_at' => $request->started_at,
            'ended_at' => $request->ended_at,
            'is_ended' => $request->is_ended,
        ]);
    
        return new JobResource($job);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return new JobResource($job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->update($request->only(['company_name', 'role','started_at','ended_at','is_ended']));

        return new JobResource($job);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return response()->json('Job deleted successfully', 204);
    }
}
