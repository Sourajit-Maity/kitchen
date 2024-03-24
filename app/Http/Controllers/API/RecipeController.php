<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\RecipeCategory;

use App\Models\RecipeComment;
use App\Models\RecipeLike;
use App\Models\RecipeRating;
use App\Models\RecipeShare;

/**
 * @group  Recipe
 *
 * APIs for managing products
 */
class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
     /** 
 * Get-Recipes
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "recipe_name": "recipe1",
            "recipe_description": "gfdgfh bngjhj",
            "recipe_category_id": 1,
            "added_by_id": null,
            "active": 1,
            "created_at": "2021-07-27T11:56:42.000000Z",
            "updated_at": "2021-07-27T12:56:23.000000Z",
            "deleted_at": null
        },

        {
            "id": 3,
            "recipe_name": "recipe2",
            "recipe_description": "recipe2",
            "recipe_category_id": 1,
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-07-27T12:31:41.000000Z",
            "updated_at": "2021-07-27T12:31:41.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
    public function getRecipe()
    {
        $recipe = Recipe::where(['active'=>1])->latest()->get();
        
        if(count($recipe) > 0){
            return response()->json(["status" => true, "data" => $recipe]);
        }
        else{
            return response()->json(["status" => true, "message" => "Recipe not found"]);
        }
    }

         /** 
 * Get-Own-Recipes
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "recipe_name": "testrecipe57",
            "recipe_description": "test",
            "recipe_category_id": 1,
            "recipe_video_path": "1627649499.asf",
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-07-30T12:51:39.000000Z",
            "updated_at": "2021-08-02T07:42:15.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "recipe_name": "recipe2",
            "recipe_description": "recipe2 details",
            "recipe_category_id": 1,
            "recipe_video_path": null,
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-08-02T07:44:19.000000Z",
            "updated_at": "2021-08-02T07:44:19.000000Z",
            "deleted_at": null
        },
        {
            "id": 3,
            "recipe_name": "recipe23",
            "recipe_description": "recipe23",
            "recipe_category_id": 1,
            "recipe_video_path": null,
            "added_by_id": 1,
            "active": 1,
            "created_at": "2021-08-02T09:55:23.000000Z",
            "updated_at": "2021-08-02T09:55:23.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
public function getmyRecipe()
{
    $recipe = Recipe::where("added_by_id", auth()->user()->id)->where(['active'=>1])->get();
    
    if(count($recipe) > 0){
        return response()->json(["status" => true, "data" => $recipe]);
    }
    else{
        return response()->json(["status" => true, "message" => "Recipe not found"]);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

      /**
     * Recipe-Create 
 * @response {
    "status": true,
    "message": "Success! Recipe uploaded",
    "data": {
        "recipe_name": "recipe321",
        "recipe_description": "recipe3",
        "recipe_category_id": "1",
        "active": "1",
        "recipe_video_path": "1627649499.asf",
        "added_by_id": 1,
        "updated_at": "2021-07-30T12:51:39.000000Z",
        "created_at": "2021-07-30T12:51:39.000000Z",
        "id": 1
    }
}
 */
    public function createrecipe(Request $request)
    {
        $validator  =   Validator::make($request->all(), [
            "recipe_name"  =>  "required|unique:recipes",
            "recipe_description"  =>  "required",
            "recipe_category_id"  =>  "required",
           // "recipe_video_path"  =>  "required|mimes:mp4,mov,ogg,qt | max:40000",
            "active" =>  "required",

        ]);
    
        if($validator->fails()) {
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        }
    
        // $inputs = $request->all();
    
        // $recipe  =  Recipe::create($inputs);

     


        $recipe = new Recipe($request->all());
        $recipe->added_by_id=auth()->user()->id;

        $videofile = time().'.'.$request->recipe_video_path->extension();  

        $request->recipe_video_path->move(public_path('/storage/attachFile/l'), $videofile);
        $recipe->recipe_video_path= $videofile;
    
        $recipe->save();
    
        if(!is_null($recipe)) {
            return response()->json(["status" => true, "message" => "Success! Recipe uploaded", "data" => $recipe]);
        }
        else {
            return response()->json(["status" => false, "message" => "Recipe upload failed!"]);
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
     /** 
 * Get-Recipe-Category
 * @authenticated
 * @response  {
    "status": true,
    "data": [
        {
            "id": 1,
            "recipe_category": "RecipeCategory1",
            "active": 1,
            "created_at": "2021-07-23T12:12:57.000000Z",
            "updated_at": "2021-07-23T12:13:08.000000Z",
            "deleted_at": null
        }
    ]
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
    public function getrecipecategory()
    {
        $recipecategory = RecipeCategory::where(['active'=>1])->get();
        
        if(count($recipecategory) > 0){
            return response()->json(["status" => true, "data" => $recipecategory]);
        }
        else{
            return response()->json(["status" => true, "message" => "Recipe category not found"]);
        }
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
    /** 
 * Update-Recipe
 * @authenticated
 * @response  {
    "status": true,
    "message": "Success! Recipe updated",
    "data": {
        "id": 4,
        "recipe_name": "testrecipe5",
        "recipe_description": "test",
        "recipe_category_id": "2",
        "added_by_id": "1",
        "active": "0",
        "created_at": "2021-07-27T13:34:09.000000Z",
        "updated_at": "2021-07-27T13:44:08.000000Z",
        "deleted_at": null
    }
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */
    public function updaterecipe(Request $request, Recipe $recipe)
    {
        $validator      =       Validator::make($request->all(), [
            "recipe_name"  =>  "required",
            "recipe_description"  =>  "required",
            "recipe_category_id"  =>  "required",
            "added_by_id"  =>  "required",
            "active" =>  "required",
        ]);
        if($validator->fails()) 
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
    
        
        $recipe->update($request->all());
    
        return response()->json(["status" => true, "message" => "Success! Recipe updated", "data" => $recipe]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     /** 
    * Destroy-Recipe
 * @authenticated
 * @urlParam task number required Example: 5
 * @response  {
    "status": true,
    "message": "Success! Product deleted"
}
 * @response  401 {
 *   "message": "Unauthenticated."
*}
 */

    public function destroyrecipe(Recipe $recipe)
{
    $recipe->delete();
    return response()->json(["status" => true, "message" => "Success! recipe deleted"], 200);
}

/**
     * User-Recipe Rating
     *
     * @authenticated
     * @bodyParam id number required Example: 126
     * @response {
    "status": true,
    "message": "Success! rated successfully",
    "data": {
        "recipe_id": "2",
        "rating": "3",
        "user_id": 51,
        "updated_at": "2021-08-02T08:23:15.000000Z",
        "created_at": "2021-08-02T08:23:15.000000Z",
        "id": 1
    }
}
 
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function reciperating(Request $request)
    {

        $validator      =   Validator::make($request->all(), [
            "rating"   =>      "required",
            "recipe_id"   =>      "required",         
        ]);

        if($validator->fails())
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);

        $rating=new RecipeRating($request->all());
        $rating->user_id=auth()->user()->id;
        $rating->save();

        return response()->json(["status" => true, "message" => "Success! rated successfully", "data" => $rating]);
    }


     /**
     * Recipe Like/Dislike
     *
     * @authenticated
     * @bodyParam recipe_id number required Example: 126
     * @bodyParam rating number required Example: 2
     * @response{
    "status": true,
    "message": "Success! Recipe liked"
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function recipelike(Request $request)
    {
        $recipeid = $request->recipe_id;
       
            if ($request->rating == '') {
                $recipe = new Recipe;
                $recipe->likedrecipeByUsers()->attach($recipeid, [
                    'recipe_id' => $recipeid,
                    'user_id' => auth()->user()->id
                ]);
            } else {
                $recipe = new Recipe;
                $recipe->likedrecipeByUsers()->attach($recipeid, [
                    'rating' => $request->rating,
                    'recipe_id' => $recipeid,
                    'user_id' => auth()->user()->id
                ]);
            }
            return response()->json(["status" => true, "message" => "Success! Recipe liked"]);
        
    }

    /**
     * Recipe Share
     *
     * @authenticated
     * @bodyParam user_id number required Example: 50
     * @bodyParam recipe_id number required Example: 3
     * @response{
    "status": true,
    "message": "Success! recipe shared"
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function recipeshare(Request $request)
    {

        $validator      =   Validator([
            "user_id"   =>      "required",
            "recipe_id"      =>      "required"
        ]);

        if ($validator->fails())
            return response()->json(["status" => false, "validation_errors" => $validator->errors()]);
        $recipeid = $request->recipe_id;
        $recipe = Recipe::find($recipeid);
        $recipe->sharedrecipeToUsers()->attach($request->user_id);


        return response()->json(["status" => true, "message" => "Success! recipe shared"]);
    }


     /**
     * Recipe Like Count
     *
     * @authenticated
     * @response{
    "status": true,
    "message": "1 number of likes found.",
    "data": 1
}
     * @response  401 {
     *   "message": "Unauthenticated."
     *}
     */

    public function countUserrecipeLike()
    {
       
        $recipes = Recipe::withcount('likedrecipeByUsers')->where('user_id', auth()->user()->id)->get();
      

        return response()->json(["status" => true, "message" => count($recipes) . " number of likes found.", "data" => count($recipes)]);
    }
}
