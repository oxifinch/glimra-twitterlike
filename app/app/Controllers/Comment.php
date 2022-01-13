<?php

namespace App\Controllers;

class Comment extends BaseController {
    protected $request;
    protected $commentModel;
    private $data;
    private $session;
    public function __construct() {
        $this->commentModel = model("CommentModel", false);
        $this->data = array();
        $this->session = session();
    }

    public function index() {
        return "Show all comments or something?";
    }

    public function commentSave() {
        $request = service("request");
        $request->uri->getPath();

        $textContent = $request->getVar("text_content");
        if($textContent == NULL) {
            return false;
        }
        // TODO: Where does this postId actually come from? Make sure it is
        // properly handled from the client.
        $postId = $request->getVar("post_id");
        if($postId == NULL) {
            return false;
        }

        if($this->commentModel->createComment($postId, $textContent)) {
            return view("commentSave");
        }
        
    }

    
}
