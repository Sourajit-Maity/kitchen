<?php

namespace App\Models;

use App\Models\Traits\HasProfilePhoto;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Support\Facades\URL;


class User extends Authenticatable implements HasMedia
{
    use HasMediaTrait;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'full_name', 'role_name', 'profile_photo_url'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'username',
        'gender',
        'dob',
        'device_type',
        'device_token',
        'active',
        'social_id',
        'social_account_type',
        'address',
        'verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getRoleNameAttribute()
    {
        if ($this->roles()->exists())
            return $this->roles()->first()->name;
        else
            return 0;
    }
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function recipies()
    {
        return $this->hasMany(Recipe::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function reports()
    {
        return $this->hasMany(ReportUser::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    // users that are followed by this user
    public function following()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'following_id')->withTimestamps();
    }

    // users that follow this user
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'following_id', 'follower_id')->withTimestamps();
    }

    public function likedPosts()
    {
        return $this->belongsToMany(Product::class,'post_likes')->using(PostLike::class)->withTimestamps();
    }
    public function sharedPosts()
    {
        return $this->belongsToMany(Product::class,'post_shares')->using(PostShare::class)->withTimestamps();
    }

    public function userCart(){
        return $this->hasMany(UserCart::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function wishlistProducts(){
        return $this->belongsToMany(Product::class,'wishlists')->using(Wishlist::class)->withTimestamps();
    }


    public function reciperatings(){
        return $this->hasMany(RecipeRating::class);
    }

    public function recipecomments(){
        return $this->hasMany(RecipeComment::class);
    }

    public function likedrecipePosts()
    {
        return $this->belongsToMany(Recipe::class,'recipe_likes')->using(RecipeLike::class)->withTimestamps();
    }
    public function sharedrecipePosts()
    {
        return $this->belongsToMany(Recipe::class,'recipe_shares')->using(RecipeShare::class)->withTimestamps();
    }

    public function wishlistRecipe(){
        return $this->belongsToMany(Recipe::class,'recipe_wishlists')->using(RecipeWishlist::class)->withTimestamps();
    }

    public function userreview(){
        return $this->hasMany(UserReview::class);
    }

    public function userfavorite(){
        return $this->hasMany(UserFavorite::class);
    }

}
