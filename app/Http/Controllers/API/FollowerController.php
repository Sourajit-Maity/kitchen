<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Follower;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

/**
 * @group  Followers management
 *
 * APIs for managing Followers
 */
class FollowerController extends Controller
{
   /** 
 * @authenticated
 * @bodyParam user_id number required Example: 51
 * @bodyParam action string required Example: FOLLOW / UNFOLLOW
 * @response {
    "status": true,
    "message": "Success! follower created",
    "data": {
        "following_id": "52",
        "follower_id": 1,
        "updated_at": "2021-07-29T13:01:22.000000Z",
        "created_at": "2021-07-29T13:01:22.000000Z",
        "id": 1
    }
}
* @response  200 {
    "status": true,
    "message": "Success! follower deleted"
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function store(Request $request)
{
    if ($request->action == "FOLLOW") {

        $validator      =   Validator::make($request->all(), [
            "following_id"   =>      "required",         
        ]);

        if($validator->fails())
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        
            $follower=new Follower($request->all());
            $follower->following_id=$request->following_id;
            $follower->follower_id=auth()->user()->id;
            $follower->save();

            return response()->json(["status" => true, "message" => "Success! follower created", "data" => $follower]);
    }else{

        $follower_id = Follower::where(['following_id'=>$request->following_id, 'follower_id'=>auth()->user()->id])->get();
        Follower::where('id', $follower_id[0]->id)->delete();
        return response()->json(["status" => true, "message" => "Success! follower deleted"], 200);
    }
}
}

