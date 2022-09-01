<?php

namespace App\Http\Controllers\Api\V1\social;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\SocialResource;
use App\Http\Requests\StoreSocialRequest;
use App\Http\Requests\UpdateSocialRequest;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Social::all();
        return SocialResource::collection($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSocialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialRequest $request)
    {
        $id = Auth::user()->id;

        $social = Social::create([
            'user_id' => $id ,
            'url' => $request->url,
            'name' => $request->name,
            'image_url' => $request->image_url,
            'is_public' => $request->is_public
        ]);
    
        return new SocialResource($social);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        return new SocialResource($social);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialRequest  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        $social->update($request->only(['url', 'name','image_url','is_public']));

        return new SocialResource($social);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        $social->delete();

        return response()->json([
            "success" => true,
            "message" => "Social account deleted successfully"
        ],204);
    }
}
