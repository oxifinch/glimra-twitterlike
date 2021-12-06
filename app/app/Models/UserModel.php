<?php
# TODO
# 1. connect to db
# 2. check if username already exists
# 3. add user if not

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $db;
    public function __construct() {
        $this->db = db_connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM user");
        return $query->getResult();
    }

    public function getUserById($id) {
        $query = $this->db->query("SELECT * FROM user WHERE id=$id");
        return $query->getResult();
    }

    public function getUserByUsername($username) {
        $query = $this->db->query("SELECT * FROM user WHERE username=$username");
        return $query->getResult();
    }

    public function createUser($data) {
        if(!$data->username) {
            // TODO: Handle errors correctly here.
            echo "ERROR: Provide a username!";
        }

        $query = $this->db->query("INSERT INTO user 
            (username, password)
            VALUES ('$data->username', '$data->password')");
        return $query->getResult();
    }
}
