<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\UserReview;
use App\Models\UserFavorite;
use App\Models\ReportUser;
use App\Mail\ForgetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
/**
 * @group  User Authentication
 *
 * APIs for managing basic auth functionality
 */
class UserController extends Controller
{
/** 
 * * Register-Monthly-paying-Member 
 * @bodyParam  first_name string required  Example: John
 * @bodyParam  last_name string required  Example: Doe
 * @bodyParam  email string required  Example: John@gmail.com
 * @bodyParam  phone string required  Example: 1122334455
 * @response  {
    "status": true,
    "message": "Success! registration completed",
    "data": {
        "first_name": "alok",
        "last_name": "ray",
        "username": "alro",
        "gender": "1",
        "dob": "2021-07-30 07:03:10",
        "email": "alro@gmail.com",
        "address": "uk",
        "phone": "15454664414",
        "verified_at": "2021-07-30T09:18:14.382496Z",
        "updated_at": "2021-07-30T09:18:14.000000Z",
        "created_at": "2021-07-30T09:18:14.000000Z",
        "id": 54,
        "full_name": "alok ray",
        "role_name": "CLIENT",
        "profile_photo_url": "https://ui-avatars.com/api/?name=qwqq&color=7F9CF5&background=EBF4FF",
        "roles": [
            {
                "id": 2,
                "name": "CLIENT",
                "guard_name": "web",
                "created_at": "2021-07-29T08:35:14.000000Z",
                "updated_at": "2021-07-29T08:35:14.000000Z",
                "pivot": {
                    "model_id": 54,
                    "role_id": 2,
                    "model_type": "App\\Models\\User"
                }
            }
        ]
    }
}
 */
    public function register(Request $request) {
        $validator  =   Validator::make($request->all(), [
            "first_name"  =>  "required",
            "last_name"  =>  "required",
            "username"  =>  "required|unique:users",
            "gender"  =>  "required",
            "dob"  =>  "required",
            "email"  =>  "required|email|unique:users",
            "address" =>  "required",
            "phone"  =>  "required|unique:users",
            "password"  =>  "required"
        ]);

        if($validator->fails()) {
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        }
        $verify = Carbon::now();
        $inputs = $request->all();
        // $inputs->verified_at = $verify;
        // $user   =   User::create($inputs);
        // $user->assignRole('CLIENT');

        $user=new User($inputs);
        $user->verified_at=$verify;
        $user->assignRole('CLIENT');        
        $user->save();

        if(!is_null($user)) {
            return response()->json(["status" => true, "message" => "Success! registration completed", "data" => $user]);
        }
        else {
            return response()->json(["status" => false, "message" => "Registration failed!"]);
        }       
    }

    /**
     * Register-Member 
 * @bodyParam  first_name string required  Example: Jack
 * @bodyParam  last_name string required  Example: Doe
 * @bodyParam  email string required  Example: jack@gmail.com
 * @bodyParam  phone string required  Example: 112233445
 * @response  {
    "status": true,
    "message": "Success! registration completed",
    "data": {
        "first_name": "jack",
        "last_name": "doe",
        "email": "jack@gmail.com",
        "phone": "1122334455",
        "updated_at": "2021-07-26T06:32:50.000000Z",
        "created_at": "2021-07-26T06:32:50.000000Z",
        "id": 56,
        "full_name": "jack doe",
        "role_name": "REGISTERED-MEMBER",
        "profile_photo_url": "https://ui-avatars.com/api/?name=qwqq&color=7F9CF5&background=EBF4FF",
        "roles": [
            {
                "id": 2,
                "name": "REGISTERED-MEMBER",
                "guard_name": "web",
                "updated_at": "2021-07-26T06:32:50.000000Z",
                "created_at": "2021-07-26T06:32:50.000000Z",
                "pivot": {
                    "model_id": 56,
                    "role_id": 3,
                    "model_type": "App\\Models\\User"
                }
            }
        ]
    }
}
 */


public function registermember(Request $request) {
    $validator  =   Validator::make($request->all(), [
        "first_name"  =>  "required",
        "last_name"  =>  "required",
        "username"  =>  "required|unique:users",
        "gender"  =>  "required",
        "dob"  =>  "required",
        "email"  =>  "required|email|unique:users",
        "address" =>  "required",
        "phone"  =>  "required|unique:users",
        "password"  =>  "required"
    ]);

    if($validator->fails()) {
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
    }

    $inputs = $request->all();

    $user   =   User::create($inputs);
    $user->assignRole('REGISTERED-MEMBER');

    if(!is_null($user)) {
        return response()->json(["status" => true, "message" => "Success! registration completed", "data" => $user]);
    }
    else {
        return response()->json(["status" => false, "message" => "Registration failed!"]);
    }       
}
/** 
 * Member-Login
 * @bodyParam email string required Example: user@user.com
 * @bodyParam password string required Example: 12345678
 * @response  {
    "status": true,
    "token": "6|Imv8VDsE27b1sRclxv91emCSIbLpxLmfvK3wFsAa",
    "data": {
        "id": 55,
        "first_name": "Abhik",
        "last_name": "paul",
        "email": "abhik421@gmail.com",
        "phone": "6655443321",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-17T15:13:27.000000Z",
        "updated_at": "2021-02-17T15:13:27.000000Z",
        "full_name": "Abhik paul",
        "role_name": "CLIENT"
    }
}
 */
    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
            "email" =>  "required|email",
            "password" =>  "required",
            "device_type" => "required",
            "device_token" => "required",
        ]);

        if($validator->fails()) {
            return response()->json(["validation_errors" => $validator->errors()]);
        }

        $user=User::where("email", $request->email)->first();

        if(is_null($user)) {
            return response()->json(["status" => false, "message" => "Failed! email not found"]);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user       =       Auth::user();
            $token      =       $user->createToken('token')->plainTextToken;
            User::where("id", $user->id)->update(array("device_type" => $request->device_type, "device_token" => $request->device_token));

            return response()->json(["status" => true,  "token" => $token, "data" => $user]);
        }
        else {
            return response()->json(["status" => false, "message" => "Whoops! invalid password"]);
        }
    }
/** 
 * @authenticated
 * @response  {
    "status": true,
    "data": {
        "id": 55,
        "first_name": "Abhik",
        "last_name": "paul",
        "email": "abhik421@gmail.com",
        "phone": "6655443321",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-17T15:13:27.000000Z",
        "updated_at": "2021-02-17T15:13:27.000000Z",
        "full_name": "Abhik paul",
        "role_name": "CLIENT"
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
    public function user() {
        $user= Auth::user();
        if(!is_null($user)) { 
            return response()->json(["status" => true, "data" => $user]);
        }

        else {
            return response()->json(["status" => false, "message" => "Whoops! no user found"]);
        }        
    }



/** 
 * Update-Member
 * @authenticated
 * @response  {
    "status": true,
    "message": "Success! Member updated",
    "data": {
        "id": 56,
        "first_name": "Jack",
        "last_name": "Dawson",
        "email" : "jack22@gmail.com",
        "phone": "6655443321",
        "address": "test",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-07-26T06:32:50.000000Z",
        "updated_at": "2021-07-26T12:30:14.000000Z",
        "full_name": "Jack Dawson",
        "role_name": "REGISTERED-MEMBER",
        "profile_photo_url": "https://ui-avatars.com/api/?name=q111&color=7F9CF5&background=EBF4FF"
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */


public function updatemember(Request $request,  User $member) {
    $validator      =       Validator::make($request->all(), [
        "first_name"   =>  "required",
        "last_name"   => "required",
        "email"  => "required|email",
        "address" => "required",
        "phone"  =>  "required",
        "username"  =>  "required",
        "gender"  =>  "required",
        "dob"  =>  "required",
    ]);
    if($validator->fails()) 
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);

    
    $member->update($request->all());

    return response()->json(["status" => true, "message" => "Success! Member updated", "data" => $member]);
}

/** 
 * View-Register-Member-User
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "first_name": "Admin",
            "last_name": "Admin",
            "email": "admin@admin.com",
            "phone": null,
            "address": null,
            "email_verified_at": null,
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 1,
            "created_at": "2021-07-21T12:48:16.000000Z",
            "updated_at": "2021-07-21T12:48:16.000000Z",
            "full_name": "Admin Admin",
            "role_name": "SUPER-ADMIN",
            "profile_photo_url": "https://ui-avatars.com/api/?name=Admin&color=7F9CF5&background=EBF4FF"
        }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */


public function getRegisterMemberList(){

    $registerMember = User::role('REGISTERED-MEMBER')->get();
        
    if(count($registerMember) > 0){
        return response()->json(["status" => true, "data" => $registerMember]);
    }
    else{
        return response()->json(["status" => true, "message" => "List not found"]);
    }
}


/** 
 * View-Monthly-Member-User
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "first_name": "Admin",
            "last_name": "Admin",
            "email": "admin@admin.com",
            "phone": null,
            "address": null,
            "email_verified_at": null,
            "current_team_id": null,
            "profile_photo_path": null,
            "active": 1,
            "created_at": "2021-07-21T12:48:16.000000Z",
            "updated_at": "2021-07-21T12:48:16.000000Z",
            "full_name": "Admin Admin",
            "role_name": "SUPER-ADMIN",
            "profile_photo_url": "https://ui-avatars.com/api/?name=Admin&color=7F9CF5&background=EBF4FF"
        }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */


public function getMonthlyMemberList(){

        $monthlyMember = User::role('CLIENT')->get();
            
        if(count($monthlyMember) > 0){
            return response()->json(["status" => true, "data" => $monthlyMember]);
        }
        else{
            return response()->json(["status" => true, "message" => "List not found"]);
        }
    }

    /**
     * Social Sign up
     * @bodyParam  first_name string required  Example: John
     * @bodyParam  last_name string required  Example: Doe
     * @bodyParam  email string required  Example: John@gmail.com
     * @bodyParam  social_id string required  Example: 1122334455
     * @bodyParam  social_account_type string required  Example: social_account_type
     * @bodyParam  device_type string required Example: device type
     * @bodyParam  device_token string required Example: device token
    
     * @response  {
        "status": true,
        "token": "2|VqTK5mHnzkLpicZpENqfAXZ5SvT6WmLlTw014ri3",
        "message": "Success! registration completed ?? Success! login successfull",
        "data": {
            "first_name": "John",
            "last_name": "Doe",
            "email": "John@gmaildw.com",
            "social_id": "1122334455",
            "social_account_type": "social_account_type",
            "device_type": "device type",
            "device_token": "device token",
            "updated_at": "2021-06-11T09:43:51.000000Z",
            "created_at": "2021-06-11T09:43:51.000000Z",
            "id": 64,
            "full_name": "John Doe",
            "role_name": "CLIENT",
            "profile_photo_url": "https://ui-avatars.com/api/?name=John&color=7F9CF5&background=EBF4FF",
            "roles": [
                {
                    "id": 2,
                    "name": "CLIENT",
                    "guard_name": "web",
                    "created_at": "2021-06-09T08:25:25.000000Z",
                    "updated_at": "2021-06-09T08:25:25.000000Z",
                    "pivot": {
                        "model_id": 64,
                        "role_id": 2,
                        "model_type": "App\\Models\\User"
                    }
                }
            ]
        }
    }
     
     */
    public function socialsignup(Request $request)
    {
        $validator  =   Validator::make($request->all(), [
            "first_name"  =>  "required",
            "last_name"  =>  "required",
            "email"  =>  "required|email",
            "social_id"  =>  "required",
            "social_account_type"  =>  "required",
            "device_token" => "required",
            "device_type" => "required",
            "password"  =>  "required",

            // "username"  =>  "required|unique:users",
            // "gender"  =>  "required",
            // "dob"  =>  "required",
            // "address" =>  "required",
            // "phone"  =>  "required|unique:users",

        ]);
        if ($validator->fails()) {
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        }
        $user = User::where('social_id', $request->social_id)->first();
        // dd($user);
        if (empty($user)) {
            $inputs = $request->all();

            $user   =   User::create($inputs);
            $token  =   $user->createToken('token')->plainTextToken;
            $user->assignRole('CLIENT');
            return response()->json(["status" => true, "token" => $token, "message" => "Success! registration completed", "data" => $user]);
        } else {
            $token      =       $user->createToken('token')->plainTextToken;
            // dd($request);
            User::where("id", $user->id)->update(array("device_type" => $request->device_type, "device_token" => $request->device_token));

            return response()->json(["status" => true,  "token" => $token, "message" => "Success! login successfull",  "data" => $user->assignRole('CLIENT')]);
            // return response()->json(["status" => false, "message" => "Registration failed!"]);
        }
    }
 /**
     * User Report
     *
     * @authenticated
     * @bodyParam id number required Example: 126
     * @response {
    "status": true,
    "message": "Success! user reported successfully",
    "data": {
        "user_id": "2",
        "report_description": "report",
        "reported_by_id": 1,
        "updated_at": "2021-07-29T12:03:51.000000Z",
        "created_at": "2021-07-29T12:03:51.000000Z",
        "id": 1
    }
}
 
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function userreport(Request $request)
    {

        $validator  = Validator([
            'user_id' => 'required',
            'report_description' => 'required',
           
        ]);
        if ($validator->fails()) {
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        }
        $data = ReportUser::create(array(
            'user_id' => $request->user_id,
            'report_description' => $request->report_description,
            'reported_by_id' => auth()->user()->id,
            
        ));
        return response()->json(["status" => true, "message" => "Success! user reported successfully", "data" => $data]);
    }

   /**
    * Change Password
     * @authenticated
     * @bodyParam  old_password string required Example: 11111111
     * @bodyParam  new_password string required Example: 22222222
     * @bodyParam  confirm_password string required Example: 22222222
     * @response  {
    "status": true,
    "message": "Success! password change successfully",
    "data": {
        "id": 2,
        "first_name": "Emory",
        "last_name": "Wiza",
        "email": "lueilwitz.caterina@example.com",
        "phone": "(345) 744-1545",
        "email_verified_at": "2021-03-05T06:49:30.000000Z",
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-03-05T06:49:37.000000Z",
        "updated_at": "2021-03-08T07:50:35.000000Z",
        "full_name": "Emory Wiza",
        "role_name": "CLIENT",
        "profile_photo_url": "https://ui-avatars.com/api/?name=Emory&color=7F9CF5&background=EBF4FF"
    }
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function password_change(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $password = $user->password;
        if (Hash::check($request->old_password, $password)) {

            $validator = Validator::make($request->all(), [
                "old_password" =>  "required",
                "new_password" =>  "required|min:8",
                "confirm_password" =>  "required|same:new_password",
            ]);

            if ($validator->fails()) {
                return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
            }

            $user->password = $request->confirm_password;
            $user->save();

            return response()->json(["status" => true, "message" => "Success! password change successfully", "data" => $user]);
        } else {
            return response()->json(["status" => false, "message" => "Whoops! Old password is invalid"]);
        }
    }

    /**
     * Password Forget
     * @bodyParam  email string required Example: lueilwitz.caterina@example.com
     * @bodyParam  password string required Example: danwdjdajw
     * @response  {
    "status": true,
    "message": "Success! password change successfully",
    "data": {
        "id": 2,
        "first_name": "Emory",
        "last_name": "Wiza",
        "email": "lueilwitz.caterina@example.com",
        "phone": "(345) 744-1545",
        "email_verified_at": "2021-03-05T06:49:30.000000Z",
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-03-05T06:49:37.000000Z",
        "updated_at": "2021-03-08T07:50:35.000000Z",
        "full_name": "Emory Wiza",
        "role_name": "CLIENT",
        "profile_photo_url": "https://ui-avatars.com/api/?name=Emory&color=7F9CF5&background=EBF4FF"
    }
}
     */

    public function forgot_password(Request $request)
    {

        try{
        $validator = Validator::make($request->all(), [
            "email" =>  "required|email",
            // "password" =>  "required",
        ]);

        if ($validator->fails()) {
            return response()->json(["validation_errors" => $validator->errors()]);
        }

        $user = User::where("email", $request->email)->first();

        if (is_null($user)) {
            return response()->json(["status" => false, "message" => "Failed! email not found"]);
        }
        $token = bcrypt($user->id);
        $delete_token = DB::table('password_resets')->where('email',$user->email)->delete();
        // $get_token->each->delete();

        DB::table('password_resets')->insert(['email'=>$request->email,'token'=>$token,'created_at'=>now()]);
        $data=['user'=>$user];
        $send_mail = Mail::send('email.forgot-password', $data, function($message) use ($user) {
            $message->to($user->email)->subject('Forgot Password');
        });

    return response()->json(["status" => true, "message" => "Success! We have emailed your password reset link!"]);
} catch(\Exception $e) {
    return Response()->Json(["status"=>false,"message"=> 'Something went wrong. Please try again.']);
}
        // Mail::to($request->email)->send(new ForgetPassword($user->id,$token));
        
        // $new_pass = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstvwxyzABCDEFGGHIJKLMNOPQRSTUVWXYZ', 36)), 0, 8);

        // $details = [
        //     'title' =>  "Change password  request for HeartTheLook",
        //     'body'  =>  "Your password is reset.",
        // ];

        // Mail::to($user->email)->send(new ForgotPasswordMail($details));

        // if (Mail::failures()) {
        //     return response()->json(["status" => false, "message" => "Failed! unable to send password to your mail"]);
        // } else {

        //     $update_pass = User::find($user->id);
        //     $update_pass->password = ($request->password);
        //     $update_pass->save();

        //     return response()->json(["status" => true, "message" => "Success! password change successfully", "data" => $user]);
        // }
    }

    /**
     * Email verification
     * @bodyParam  email string required Example: lueilwitz.caterina@example.com
     * @bodyParam  otp number  Example: 1234
     * @response  {

    "status": true,
    "message": "Success! Otp Send successfully",
    "data": {
        "id": 3,
        "first_name": "Makayla",
        "last_name": "Runte",
        "email": "cedrick.schmitt@example.com",
        "phone": "609.587.7230",
        "email_verified_at": "2021-03-11T07:39:50.000000Z",
        "otp": 2430,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-03-11T07:39:54.000000Z",
        "updated_at": "2021-03-12T06:36:42.000000Z",
        "full_name": "Makayla Runte",
        "role_name": "CLIENT",
        "profile_photo_url": "https://ui-avatars.com/api/?name=Makayla&color=7F9CF5&background=EBF4FF"
    }
 }
     */
    public function emailverification(Request $request)
    {
        $user = User::where("email", $request->email)->first();

        if (is_null($request->otp)) {
            $validator = Validator::make($request->all(), [
                "email" =>  "required|email",
            ]);
            if ($validator->fails()) {
                return response()->json(["validation_errors" => $validator->errors()]);
            }
            $otp = rand(1000, 9999);
            $details = [
                'title' =>  "OTP for HeartTheLook",
                'body'  =>  "Your Email Verification otp is - " . $otp,
            ];

            Mail::to($request->email)->send(new OtpVerificationMail($details));
            if (Mail::failures()) {
                return response()->json(["status" => false, "message" => "Failed! unable to send password to your mail"]);
            } else {
                $userdetail = User::find($user->id);
                $userdetail->otp = $otp;
                $userdetail->save();
                return response()->json(["status" => true, "message" => "Success! Otp Send successfully", "data" => $userdetail]);
            }
        } else {

            $validator = Validator::make($request->all(), [
                "email" =>  "required|email",
                "otp"   =>  "required|max:4"
            ]);
            if ($validator->fails()) {
                return response()->json(["validation_errors" => $validator->errors()]);
            }

            $userdetail = User::find($user->id);
            if ($userdetail->otp == $request->otp) {
                $userdetail->otp = '';
                $userdetail->email_verified_at = \Carbon\Carbon::now()->timestamp;
                $userdetail->save();
                return response()->json(["status" => true, "message" => "Success! Otp Verified successfully"]);
            } else {
                return response()->json(["status" => true, "message" => "Fail! Otp Not Verified"]);
            }
        }
    }

    public function userblock(User $user)
    {
        $user->fill(['active' => ($user->active == 1) ? 0 : 1])->save();
        if ($user->active != 1) {
            $user->tokens->each(function ($token, $key) {
                $token->delete();
            });
        }
        $this->showModal('success', 'Success', 'User status has been changed successfully');
    }

    /** 
 * @authenticated
 * User Review Store
 * @bodyParam review string required Example: demo comment
 * @bodyParam user_id number required Example: 480
 *  @bodyParam rating number required Example: 480
 * @response  {
    "status": true,
    "message": "Success! Review submitted",
    "data": {
        "rating": "1",
        "user_id": "50",
        "review": "test",
        "added_by_id": 1,
        "updated_at": "2021-08-03T06:20:39.000000Z",
        "created_at": "2021-08-03T06:20:39.000000Z",
        "id": 1
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function reviewstore(Request $request)
{
    $validator      =   Validator::make($request->all(), [
        "user_id"   =>      "required",
        "review"   =>      "required",
        "rating"   =>      "required",       
    ]);

    if($validator->fails())
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);

    $review=new UserReview($request->all());
    $review->added_by_id=auth()->user()->id;
    $review->save();

    return response()->json(["status" => true, "message" => "Success! Review submitted"]);
}
    /** 
     * Favorite Seller
 * @authenticated
 * @bodyParam favorite_id number required Example: 480
 * @response  {
    "status": true,
    "message": "Success! Favorite Seller submitted",
    "data": {
        "favorite_id": "50",
        "user_id": 1,
        "updated_at": "2021-08-04T06:56:19.000000Z",
        "created_at": "2021-08-04T06:56:19.000000Z",
        "id": 2
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function userfavoritestore(Request $request)
{
    $validator      =   Validator::make($request->all(), [
        "favorite_id"   =>      "required",      
    ]);

    if($validator->fails())
        return response()->json(["status" => false, "validation_errors" => $validator->errors()]);

    $favorite=new UserFavorite($request->all());
    $favorite->user_id=auth()->user()->id;
    $favorite->save();

    return response()->json(["status" => true, "message" => "Success! Favorite Seller submitted"]);
}
}
