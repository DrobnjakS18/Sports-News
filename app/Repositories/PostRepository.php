<?php


namespace App\Repositories;


use App\Models\Post;

class PostRepository extends BaseRepository
{
    public function __construct()
    {
        $this->className = 'App\Models\Post';
    }


    /**
     * All posts
     */
    static public function all()
    {
        return Post::all();
    }

    /**
     * Single post by Id
     */
    static public function findById($id)
    {
        return Post::find($id);
    }

    /**
     * Single post by category
     */
    static public function findByCategory($id)
    {
        return Post::where('category_id',$id)->simplePaginate(4) ;
    }



}
