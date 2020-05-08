<?php

class CartController
{
    public $error;

    public function index() {
        require_once 'views/carts/index.php';
    }
    public function payment() {
        require_once 'views/carts/payment.php';
    }

}