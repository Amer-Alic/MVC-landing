<?php

class Login {
    use Controller;
    public function index() {
        $user = new User;
        $data = [];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $arr['email'] = $_POST['email'];    

        $account = $user->first($arr);

        if (!empty($account)) {

        if ($account->password === $_POST['password']) {
            $_SESSION['user'] = $account;
            redirect('Home');
        } else {
            $data['errors'] = ['Password is incorrect'];
        }
        } else {
            $data['errors'] = ['Email is incorrect'];
        }
        }
        $this->view('login', $data);
    }
}