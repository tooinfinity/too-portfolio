<?php

namespace App\Http\Controllers\Api\V1\project;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProjectResource;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Project::all();
        return ProjectResource::collection($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $id = Auth::user()->id;

        $skill = Project::create([
            'user_id' => $id ,
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'image_url' => $request->image_url,
            'is_published' => $request->is_published,
            'is_opensource' => $request->is_opensource
        ]);
    
        return new ProjectResource($skill);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return new ProjectResource($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->only(['name', 'description', 'url', 'image_url', 'is_published','is_opensource']));

        return new ProjectResource($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json([
            "success" => true,
            "message" => "Project deleted successfully"
        ],204);
    }
}
