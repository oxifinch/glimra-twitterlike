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

        #return $query->getResult();
        return $query->getNumRows();
    }

    public function getLikesByCommentId($commentId) {
        $query = $this->db->query("
            SELECT reaction.*, user.user_name, user.display_name
            FROM reaction
            INNER JOIN user 
            ON reaction.user_id = user.user_id
            WHERE comment_id = '$commentId'
        ");

        #return $query->getResult();
        return $query->getNumRows();
    }

    public function createLike($commentId, $postId) {
        $userId = $this->session->get("user_id");
        if(!$userId) {
            return "[ERROR] User session not found!";
        }

        #echo "Comment:" . var_dump($commentId) . "<br>";
        #echo "Post:"    . var_dump($postId)    . "<br>";
        #echo "User ID:" . var_dump($userId)    . "<br>";

        if($commentId == NULL) {
            $commentId = "NULL";
        }
        if($postId == NULL) {
            $postId = "NULL";
        }

        #$sql = "INSERT INTO reaction (comment_id, post_id, user_id) VALUES ($commentId, $postId, $userId)";
        #echo $sql;
        #exit;

        $query = $this->db->query("
            INSERT INTO reaction 
            (comment_id, post_id, user_id) VALUES 
            ($commentId, $postId, $userId)
        ");
    }

    public function deleteLike($id) {
        $query = $this->db->query("
            DELETE FROM reaction
            WHERE reaction_id = '$id'
        ");
    }
}
