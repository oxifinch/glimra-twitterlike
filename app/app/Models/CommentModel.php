<?php
namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model {
    protected $db;
    private $session;
    public function __construct() {
        $this->db = db_connect();
        $this->session = session();
    }

    public function getCommentsByPostId($postId) {
        $query = $this->db->query("
            SELECT *
            FROM comment
            ORDER BY comment_id ASC
            WHERE comment_id = '$postId'
        ");

        if($query->getNumRows() == 0) {
            return false;
        }

        return $query->getResult();
    }

    public function createComment($postId, $textContent) {
        # Check if the postId exists first
        $query = $this->db->query("
            SELECT post_id 
            FROM post
        ");
        if($query->getNumRows() == 0) {
            return "[ERROR] The post you are trying to comment on doesn't exist!";
        }

        $userId = $this->session->get("user_id");
        if(!$userId) {
            return "[ERROR] User session not found!";
        }
        if(!$textContent) {
            return "[ERROR] You did not enter any text content!";
        }

        $this->db->query("
            INSERT INTO comment
            (post_id, user_id, text_content) VALUES
            ($postId, $userId, '$textContent')
        ");

        return true;
    }

    public function deleteComment($id) {
        $query = $this->db->query("
            DELETE FROM comment
            WHERE comment_id = '$id'
        ");
    }

    public function updateComment($id, $textContent) {
        $query = $this->db->query("
            UPDATE comment
            SET text_content = '$textContent' 
            WHERE id = '$id'
        ");
    }
}
