<?php

namespace App\Controllers;

class Post extends BaseController {
    protected $request;
    protected $userModel;
    protected $commentModel;
    protected $likeModel;
    private $data;
    private $session;
    public function __construct() {
        $this->postModel    = model("PostModel", false);
        $this->commentModel = model("CommentModel", false);
        $this->likeModel    = model("LikeModel", false);
        $this->data = array();
        $this->session = session();
    }

    public function index() {
        $feed = array();
        $posts = $this->postModel->getAllPosts();
        foreach($posts as $post) {

            $comments = $this->commentModel->getCommentsByPostId($post->post_id);
            foreach($comments as $comment) {
                $comment->likes = $this->likeModel->getLikesByCommentId($comment->comment_id);
            }
            $post->comments = $comments;

            $post->likes = $this->likeModel->getLikesByPostId($post->post_id);
            $feed[] = $post;
        }
        return view("newsfeed", ["posts" => $feed]);
    }

    public function postSave() {
        // TODO add this to validation.php
        $userId = $this->session->get("user_id");
        if ($userId == NULL) {
            $errMessage = array(
                'errMessageText' => 'You need to log in if you want to post something, dear!'
            );
            return view("login", $errMessage);
        }
        $request = service("request");
        $request->uri->getPath();
        $textContent = $request->getVar("text_content");
        $this->data["posts"] = $this->postModel->getAllPosts();
        return view("postSave", $this->data);
    }
}
