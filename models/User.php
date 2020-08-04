<?php

namespace app\models;

class User extends \rhosocial\user\User
{
    public $profileClass = Profile::class;

    public function getFavorites()
    {
        return $this->hasMany(RecipeFavorite::class,['user_guid'=>'guid']);
    }
    public function getLikes()
    {
        return $this->hasMany(RecipeLike::class, ['user_guid' => 'guid']);
    }
    public function getLikedRecipes()
    {
        return $this->hasMany(Recipe::class,['guid'=>'recipe_guid'])
            ->via('likes');
    }
    public function getFavoriteRecipes()
    {
        return $this->hasMany(Recipe::class,['guid'=>'recipe_guid'])
            ->via('favorites');
    }

}
