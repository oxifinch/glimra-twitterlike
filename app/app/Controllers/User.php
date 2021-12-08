<?php

namespace App\Controllers;

class User extends BaseController {
    protected $request;
    protected $userModel;
    private $data;
    private $session;
    public function __construct() {
        // Used to force the class to call validation when constructed
        // parent::__construct()
        $this->userModel = model("UserModel", false);
        $this->data = array();
        $this->session = session();
    }
    public function index() {
        return view("login");
        // return redirect()->to('/'); 
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
        if($this->userModel->createUser($username, $password)) {
            $this->data = [
                'username' => $username,
                'password' => $password,
            ];
            return view("registerSave", $this->data);
        }
    }

    public function loginSave() {
        $request = service("request");
        $request->uri->getPath();
        $username = $request->getPost('user_name');
        $password = $request->getPost('password');

        if($this->userModel->validateUserLogin($username, $password)) {
            $userId = $this->session->get("user_id");
            $this->data = [
                "username" => $username,
                "password" => $password,
                "user_id"  => $userId
            ];
            return view("loginSave", $this->data);
        }

    }

    public function fetchUserById($id) {
        $user = $this->userModel->getUserById($id);
        echo "<h3>Name: $user->name</h3>";
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/'); 
    }
}
