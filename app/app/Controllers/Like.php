<?php

namespace App\Controllers;

class Like extends BaseController {
    protected $request;
    protected $likeModel;
    private $data;
    private $session;
    public function __construct() {
        $this->likeModel = model("LikeModel", false);
        $this->data = array();
        $this->session = session();
    }

    public function index() {
        return "Likes or something idk";
    }

    public function likeSave() {
        // TODO add this to validation.php
        $userId = $this->session->get("user_id");
        if ($userId == NULL) {
            $errMessage = array(
                'errMessageText' => 'Want to like a post or comment? Log in!'
            );
            return view("login", $errMessage);
        }
        $request = service("request");
        $request->uri->getPath();

        $postId    = $request->getVar("post_id");
        $commentId = $request->getVar("comment_id");
        if(!$commentId && !$postId) {
            echo "COMMENT ID OR POST ID MISSING!";
            exit;
        }
        $this->likeModel->createLike($commentId, $postId);

        # TODO: Validate post/comment id
        # TODO: Redirect back to post 
    }
}
