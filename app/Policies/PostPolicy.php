<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Post $post){
        
        return $user->id == $post->user_id; 

         
    }
    
    public function published(?User $user, Post $post){
      return  $post->status == 2;   
    }

    
    public function __construct()
    {
        //
    }
}
