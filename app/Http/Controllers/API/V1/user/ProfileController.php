<?php

namespace App\Http\Controllers\Api\V1\user;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function getProfile(){
        $id = Auth::user()->id;
        
        $user = User::find($id);
        
        $profile = $user->profile;

        if (is_null($profile)) {

            return response()->json([
                "success" => false,
                "message" => 'Profile not found. Create one first'
            ]);
        }
         
        return response()->json([
            "success" => true,
            "data" => $profile
        ]);
    }

    public function updateProfile(Request $request){
       
        $id = Auth::user()->id;
        $user = User::find($id);
        $profile = $user->profile;
    
        $validator = Validator::make($request->all(),[
            'phone' => 'required',
            'address' => 'required',
            'function' => 'required',
            'about_me' => 'required'
        ]);
        
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "message" => 'Validation Error',
                "errors"  => $validator->errors()
            ]);     
        }

        if (is_null($profile)) {
            $profile = Profile::create([
                'phone' => $request->phone, 
                'address' => $request->address,
                'function' => $request->function,
                'about_me' => $request->about_me,
                'avatar' => $request->avatar,
                'user_id' => $id
            ]);

        }else{
            $profile->phone = $request->phone;
            $profile->address = $request->address;
            $profile->function = $request->function;
            $profile->about_me = $request->about_me;
            $profile->avatar = $request->avatar;
            $profile->user_id = $user->id;
            $profile->save();
        }
    
        return response()->json([
            "success" => true,
            "message" => "Profile updated successfully.",
            "data" => $profile
        ]);
    }
}
