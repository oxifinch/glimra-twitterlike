<?php

namespace App\Controllers;

class Post extends BaseController {
    protected $request;
    protected $userModel;
    private $data;
    private $session;
    public function __construct() {
        $this->postModel = model("PostModel", false);
        $this->data = array();
        $this->session = session();
    }
    public function index() {
        $this->data["posts"] = $this->postModel->getAllPosts();
        return view("newsfeed", $this->data);
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
        if($this->postModel->createPost($textContent)) {
            $this->data["posts"] = $this->postModel->getAllPosts();
            return view("postSave", $this->data);
        }
    }
}
