<?php

class Logout {
    public function index() {
        if (!empty($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        redirect('home');
    }
}