<?php
namespace App\Models;

use CodeIgniter\Model;

class LikeModel extends Model {
    protected $db;
    private $session;
    public function __construct() {
        $this->db = db_connect();
        $this->session = session();
    }
    
    public function getLikesByPostId($postId) {
        $query = $this->db->query("
            SELECT reaction.*, user.user_name, user.display_name
            FROM reaction
            INNER JOIN user 
            ON reaction.user_id = user.user_id
            WHERE post_id = '$postId'
        ");

        return $query->getResult();
    }

    public function getLikesByCommentId($commentId) {
        $query = $this->db->query("
            SELECT reaction.*, user.user_name, user.display_name
            FROM reaction
            INNER JOIN user 
            ON reaction.user_id = user.user_id
            WHERE comment_id = '$commentId'
        ");

        return $query->getResult();
    }

    public function createLike($data) {
        $query = $this->db->query("
            INSERT INTO reaction
            VALUES ($data->comment_id, $data->post_id, $data->user_id)
        ");
    }

    public function deleteLike($id) {
        $query = $this->db->query("
            DELETE FROM reaction
            WHERE reaction_id = '$id'
        ");
    }
}
