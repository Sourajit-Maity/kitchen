<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

/**
 * @group  Product Comment management
 *
 * APIs for managing Comments
 */

class CommentController extends Controller
{
   /** 
 * @authenticated
 * @bodyParam comment string required Example: demo comment
 * @bodyParam product_id number required Example: 480
 * @response  {
    "status": true,
    "message": "Success! comment created",
    "data": {
        "product_id": "2",
        "comment": "testcomment1",
        "user_id": 1,
        "updated_at": "2021-07-29T12:28:20.000000Z",
        "created_at": "2021-07-29T12:28:20.000000Z",
        "id": 3
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function store(Request $request)
{
    $validator      =   Validator::make($request->all(), [
        "comment"   =>      "required",
        "product_id"   =>      "required",         
    ]);

    if($validator->fails())
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);

    $comment=new Comment($request->all());
    $comment->user_id=auth()->user()->id;
    $comment->save();

    return response()->json(["status" => true, "message" => "Success! comment created", "data" => $comment]);
}



/** 
* @authenticated
* @urlParam comment number required Example: 5
* @response  {
"status": true,
"data": {
    "id": 5,
    "comment": "Qui ut itaque ut eligendi laborum id.",
    "user_id": 2,
    "product_id": 1,
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
public function show(Comment $comment)
{
    return response()->json(["status" => true, "data" => $comment]);
}

/** 
* @authenticated
* @urlParam comment number required Example: 2501
* @bodyParam comment string required Example: this is update test
* @response  {
"status": true,
"message": "Success! comment updated",
"data": {
    "id": 2501,
    "comment": "this is updated test",
    "user_id": 50,
    "product_id": 480,
    "created_at": "2021-02-26T14:28:25.000000Z",
    "updated_at": "2021-03-01T05:34:01.000000Z",
    "user": {
        "id": 50,
        "first_name": "Gabriella",
        "last_name": "Leuschke",
        "email": "mittie12@example.net",
        "phone": "+1.408.699.5790",
        "email_verified_at": "2021-02-26T10:44:31.000000Z",
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-26T11:10:11.000000Z",
        "updated_at": "2021-02-26T11:10:11.000000Z",
        "full_name": "Gabriella Leuschke",
        "role_name": "CLIENT"
    },
    "post": {
        "id": 480,
        "title": "Perferendis modi dolorum maxime.",
        "image": "https://via.placeholder.com/640x480.png/0022cc?text=consequatur",
        "user_id": 49,
        "created_at": "2021-02-26T11:09:29.000000Z",
        "updated_at": "2021-02-26T11:09:29.000000Z",
        "user": {
            "id": 49,
            "first_name": "Tomas",
            "last_name": "Kub",
            "email": "effie49@example.com",
            "phone": "426.362.8645",
            "email_verified_at": "2021-02-26T10:44:31.000000Z",
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 0,
            "created_at": "2021-02-26T11:09:28.000000Z",
            "updated_at": "2021-02-26T11:09:28.000000Z",
            "full_name": "Tomas Kub",
            "role_name": "CLIENT"
        }
    }
}
}
* @response  401 {
*   "message": "Unauthenticated."
*}
*/
public function update(Request $request, Comment $comment)
{
    $validator      =       Validator::make($request->all(), [
        "comment"           =>      "required",
    ]);
    if($validator->fails()) {
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
    }

    // update comment
    $comment->update($request->all());
    return response()->json(["status" => true, "message" => "Success! comment updated", "data" => $comment]);
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
public function destroy(Comment $comment)
{
    $comment->delete();
    return response()->json(["status" => true, "message" => "Success! comment deleted"], 200);
}



}
