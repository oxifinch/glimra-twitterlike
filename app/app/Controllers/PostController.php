<?php

namespace App\Controllers;

use App\Models\PostStatus;

class PostController extends BaseController
{
    public function get_all_posts()
    {
        $allPosts = new PostStatus;
        $data["allPosts"] = $allPosts->findAll();
        return redirect()->to(base_url("/"))->with("status", $allPosts);
    }

    // public function create_a_post()
    // {
    //   $post = new PostStatus();
    // //   TODO Add validation
    //   $data = [
    //     "text_content" => $this->request->getPost("new_status");
    //   ]
    //   $post->save($data);
    //   // return redirect()->to(base_url("ofjrspojfwepjwepofoewfjo"))->with("status", "posted!");
    // }
}
