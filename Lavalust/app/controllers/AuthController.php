<?php
class AuthController extends Controller {
    public function logins() {
        $this->view('login');
    }
    public function registers() {
        $this->view('register');
    }
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $userModel = new UserModel();
            if ($userModel->register($email, $password)) {
                //echo "Registration successful!";
                $this->view('login');
            } else {
                //echo "Registration failed!";
                $this->view('register');
            }
        }
        
        //$this->view('register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $user = $userModel->login($email, $password);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                //echo "Login successful!";
                $this->view('send');
            } else {
                //echo "Login failed!";
                $this->view('login');
            }
        }

        //$this->view('login');
    }
}
