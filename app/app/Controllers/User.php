<?php

namespace App\Controllers;

class User extends BaseController {
    protected $request;
    protected $userModel;
    private $data;
    public function __construct() {
        $this->userModel = model("UserModel", false);
        $this->data = array();
    }
    public function index() {
        return view("login");
    }
    
    public function register() {
        $data["users"] = $this->userModel->getAllUsers();
        return view("register", $data);
    }

    public function registerSave() {
        $request = service("request");
        $request->uri->getPath();

        $username = $request->getVar("user_name");
        $password = $request->getVar("password");
        $query    = $this->userModel->createUser($username, $password);
        $this->data = [
            'username' => $username,
            'password' => $password,
            'query'    => $query
        ];
        return view("registerSave", $this->data);
    }

    public function loginSave() {
        $request = service("request");
        $request->uri->getPath();
        $username = $request->getPost('user_name');
        $password = $request->getPost('password');
        return view("loginSave", $username, $password);
    }

    public function fetchUserById($id) {
        $user = $this->userModel->getUserById($id);
        echo "<h3>Name: $user->name</h3>";
    }
}
