<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $db;
    private $session;
    public function __construct() {
        $this->db = db_connect();
        $this->session = session();
        if($this->db == NULL) {
            echo "AAAAAAAAAAAAAAAAAAH";
        }
    }

    // == GETTING USERS ==
    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM user");
        return $query->getResult();
    }

    public function getUserById($id) {
        $query = $this->db->query("SELECT * FROM user WHERE id=$id");
        return $query->getResult();
    }

    public function getUserByUsername($username) {
        $query = $this->db->query("SELECT * FROM user WHERE user_name=$username");
        if($query->getNumRows() == 0) {
            return "[ERROR] Requested user could not be found!";
        }
        return $query->getResult();
    }

    public function validateUserLogin($username, $password) {
        if(!$username || $username == "" || !$password || $password == "") {
            return false;
        }
        $query = $this->db->query("
            SELECT user_id 
            FROM user  
            WHERE user_name = '$username'
            AND password = '$password'
        ");
        if($query->getNumRows() < 1) {
            return false;
        }

        $user = $query->getRow(0);
        $session_data = [
            "user_name" => $username,
            "user_id"   => $user->user_id,
        ];

        $this->session->set($session_data);
        return true;
    }

    // == CREATING USERS ==
    public function createUser($username, $password) {
        $select_query = $this->db->query("
            SELECT user_id FROM user
            WHERE user_name = '$username'
        ");
        if($select_query->getNumRows() != 0) {
            return "[ERROR] Username is taken!";
        }

        if(!$username || !$password) {
            return "[ERROR] Provide a username!";
        }

        $display_name = $username;
        $this->db->query("
            INSERT INTO user 
            (user_name, display_name, password)
            VALUES ('$username', '$display_name', '$password')
        ");
        return true;
    }

    // == UPDATING USER INFO ==
    public function updateUserDisplayName($data) {
        // TODO: Proper error handling
        if(!$data->id) {
            echo "[ERROR] You did not provide a user ID!";
        }
        if(!$data->new_display_name) {
            echo "[ERROR] You did not provide a new display name!";
        }

        $query = $this->db->query(
            "UPDATE user 
            SET display_name = '$data->new_display_name' 
            WHERE id = $data->id;"
        );

        // TODO: Check if query actually went through before creating
        // display_name_change
        return $query->getResult();
    }

    public function updateUserPassword($data) {
        // TODO: Proper error handling
        if(!$data->id) {
            echo "[ERROR] You did not provide a user ID!";
        }
        if(!$data->new_password) {
            echo "[ERROR] You did not provide a new password!";
        }

        $query = $this->db->query("
            UPDATE user 
            SET password = '$data->new_password'
            WHERE id = $data->id;
        ");
        // TODO: Encrypt password maybe?
        // TODO: Create password_change 
        return $query->getResult();
    }
}
