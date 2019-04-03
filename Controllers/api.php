<?php

class api extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        echo '404 page not found.';
        exit();
    }
    function viewSlip($email){
        $this->loadModel('Model_admin');
        $result = $this->Model_admin->viewSlip($email);
        header("Content-Type: image/jpeg");
        echo $result[0];
    }
}