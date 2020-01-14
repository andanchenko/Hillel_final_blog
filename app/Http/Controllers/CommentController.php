<?php

namespace App\Http\Controllers;

use App\Sevices\CommentServiceInterface;
use App\Sevices\PostServiceInterface;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $commentService;
    private $postService;

    public function __construct(CommentServiceInterface $commentService, PostServiceInterface $postService)
    {
        $this->commentService = $commentService;
        $this->postService = $postService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment=$request->all();
        $postId=$request->input('post_id');
        $post = $this->postService->getPostById($postId);
        $this->commentService->addComment($comment, $post);
        return response(redirect('/post/' .  $postId));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->commentService->delete((int)$id);
        return back();
    }
}
