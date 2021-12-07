<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $db;
    public function __construct() {
        $this->db = db_connect();
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
        return $query->getResult();
    }

    // == CREATING USERS ==
    public function createUser($username, $password) {
        // TODO: Proper error handling
        if(!$username || !$password) {
            echo "[ERROR] Provide a username!";
        }

        $display_name = $username;
        $query = $this->db->query(
            "INSERT INTO user 
            (user_name, display_name, password)
            VALUES ('$username', '$display_name', '$password')"
        );
        return $query->getResult();
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

        $query = $this->db->query(
            "UPDATE user 
            SET password = '$data->new_password'
            WHERE id = $data->id;"
        );
        // TODO: Encrypt password maybe?
        // TODO: Create password_change 
        return $query->getResult();
    }
}
