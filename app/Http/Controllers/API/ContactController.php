<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\User;
/**
 * @group  Contact
 *
 * APIs for managing Contact
 */
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

       /**
     * Contact-Admin 
 * @response {
    "status": true,
    "message": "Success! Contact uploaded",
    "data": {
        "name": "test",
        "email": "test@gmail.com",
        "message": "test",
        "user_id": "1",
        "updated_at": "2021-07-28T08:33:38.000000Z",
        "created_at": "2021-07-28T08:33:38.000000Z",
        "id": 1
    }
}
 */
public function createcontact(Request $request)
{
    $validator  =   Validator::make($request->all(), [
        "name"  =>  "required",
        "email"  =>  "required|email",
        "message"  =>  "required",
        "user_id"  =>  "required",

    ]);

    if($validator->fails()) {
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
    }

    $inputs = $request->all();

    $contact  =  Contact::create($inputs);

    if(!is_null($contact)) {
        return response()->json(["status" => true, "message" => "Success! Contact uploaded", "data" => $contact]);
    }
    else {
        return response()->json(["status" => false, "message" => "Contact upload failed!"]);
    }   
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
