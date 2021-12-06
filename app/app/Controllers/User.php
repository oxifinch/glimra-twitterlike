<?php

namespace App\Controllers;

class User extends BaseController {
    protected $userModel;
    public function __construct() {
        $this->userModel = model("UserModel", false);
    }
    public function index() {
        return view("login");
    }
    
    public function register() {
        $data["users"] = $this->userModel->getAllUsers();
        return view("register", $data);
    }

    public function loginSave() {
        $username = $request->getVar("user_name");
        $password = $request->getVar("password");
        return view("loginSave", $username, $password);
    }

    public function fetchUserById($id) {
        $user = $this->userModel->getUserById($id);
        echo "<h3>Name: $user->name</h3>";
    }
}
