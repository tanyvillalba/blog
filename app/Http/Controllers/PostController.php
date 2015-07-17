<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post=$post;
    }
    //
    public function index()
    {
        $posts=$this->post->find(1);
        $comments=$posts->comments;
        return view("post.index")->with('posts',$posts)->with('comments',$comments);
    }
}
