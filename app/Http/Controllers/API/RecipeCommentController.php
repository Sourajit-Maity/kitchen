<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecipeComment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
/**
 * @group  Recipe Comment management
 *
 * APIs for managing Comments
 */
class RecipeCommentController extends Controller
{
    /** 
 * @authenticated
 * @bodyParam recipe_comment string required Example: demo comment
 * @bodyParam recipe_id number required Example: 480
 * @response {
    "status": true,
    "message": "Success! comment created",
    "data": {
        "recipe_id": "1",
        "recipe_comment": "test",
        "user_id": 51,
        "updated_at": "2021-08-02T08:56:10.000000Z",
        "created_at": "2021-08-02T08:56:10.000000Z",
        "id": 1
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function store(Request $request)
{
    $validator      =   Validator::make($request->all(), [
        "recipe_comment"   =>      "required",
        "recipe_id"   =>      "required",         
    ]);

    if($validator->fails())
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);

    $recipecomment=new RecipeComment($request->all());
    $recipecomment->user_id=auth()->user()->id;
    $recipecomment->save();

    return response()->json(["status" => true, "message" => "Success! comment created", "data" => $recipecomment]);
}



/** 
* @authenticated
* @urlParam comment number required Example: 5
* @response  {
"status": true,
"data": {
    "id": 5,
    "recipe_comment": "Qui ut itaque ut eligendi laborum id.",
    "user_id": 2,
    "recipe_id": 1,
    "created_at": "2021-02-26T10:44:35.000000Z",
    "updated_at": "2021-02-26T10:44:35.000000Z",
    "user": {
        "id": 2,
        "first_name": "Benny",
        "last_name": "Kassulke",
        "email": "rdouglas@example.org",
        "phone": "(559) 940-9961",
        "email_verified_at": "2021-02-26T10:44:27.000000Z",
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-26T10:44:31.000000Z",
        "updated_at": "2021-02-26T10:44:31.000000Z",
        "full_name": "Benny Kassulke",
        "role_name": "CLIENT"
    },
    "post": {
        "id": 1,
        "title": "Voluptatem dolorem reprehenderit qui eum qui eos.",
        "image": "https://via.placeholder.com/640x480.png/0088aa?text=voluptas",
        "user_id": 2,
        "created_at": "2021-02-26T10:44:32.000000Z",
        "updated_at": "2021-02-26T10:44:32.000000Z",
        "user": {
            "id": 2,
            "first_name": "Benny",
            "last_name": "Kassulke",
            "email": "rdouglas@example.org",
            "phone": "(559) 940-9961",
            "email_verified_at": "2021-02-26T10:44:27.000000Z",
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 0,
            "created_at": "2021-02-26T10:44:31.000000Z",
            "updated_at": "2021-02-26T10:44:31.000000Z",
            "full_name": "Benny Kassulke",
            "role_name": "CLIENT"
        }
    }
}
}
* @response  401 {
*   "message": "Unauthenticated."
*}
*/
public function show(RecipeComment $recipecomment)
{
    return response()->json(["status" => true, "data" => $recipecomment]);
}

/** 
* @authenticated
* @urlParam comment number required Example: 2501
* @bodyParam comment string required Example: this is update test
* @response  {{
    "status": true,
    "message": "Success! comment updated",
    "data": {
        "id": 1,
        "recipe_comment": "test1",
        "user_id": 51,
        "recipe_id": 1,
        "created_at": "2021-08-02T08:56:10.000000Z",
        "updated_at": "2021-08-02T09:00:13.000000Z"
    }
}
* @response  401 {
*   "message": "Unauthenticated."
*}
*/
public function update(Request $request, RecipeComment $recipecomment)
{
    $validator      =       Validator::make($request->all(), [
        "recipe_comment"           =>      "required",
    ]);
    if($validator->fails()) {
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
    }

    // update comment
    $recipecomment->update($request->all());
    return response()->json(["status" => true, "message" => "Success! comment updated", "data" => $recipecomment]);
}

/** 
* @authenticated
* @urlParam task number required Example: 2501
* @response  {
    "status": true,
    "message": "Success! comment deleted"
}
* @response  401 {
*   "message": "Unauthenticated."
*}
*/
public function destroy(RecipeComment $recipecomment)
{
    $recipecomment->delete();
    return response()->json(["status" => true, "message" => "Success! comment deleted"], 200);
}
}
