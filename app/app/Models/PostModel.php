<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model {
    protected $db;
    private $session;
    public function __construct() {
        $this->db = db_connect();
        $this->session = session();
    }

    public function getAllPosts() {
        $query = $this->db->query("
            SELECT * 
            FROM post
            INNER JOIN user
            ON post.user_id = user.user_id
        ");
        return $query->getResult();
    }

    public function getPostById($postId) {
        $query = $this->db->query("
            SELECT * 
            FROM post
            WHERE post_id = '$postId'
            INNER JOIN user
            ON post.user_id = user.user_id
        ");

        if($query->getNumRows() == 0) {
            return false;
        }
        return $query->getResult();
    }

    public function getPostsFromUserId($userId) {
        $query = $this->db->query("
            SELECT *
            FROM post
            WHERE user_id = '$userId'
        ");

        if($query->getNumRows() == 0) {
            return false;
        }
        return $query->getResult();
    }

    public function createPost($textContent) {
        $userId = $this->session->get("user_id");
        if(!$userId) {
            return "[ERROR] User session not found!";
        }
        if(!$textContent) {
            return "[ERROR] You did not enter any text content!";
        }

        $this->db->query("
            INSERT INTO post
            (user_id, text_content) VALUES
            ($userId, " . $this->db->escape($textContent) . ")
        ");

        return true;
    }
}
