<?php

class register extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->render('header');
        $this->view->render('register/step1');
        $this->view->render('footer');
    }
    
    function step2(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->render('header');
        $this->view->render('register/step2');
        $this->view->render('footer');
    }
    function step3(){
        
        $query[0] = $_POST["runtype"];
        $query[1] = $_POST["title"];
        $query[2] = $_POST["name"];
        $query[3] = $_POST["surname"];
        $query[4] = $_POST["birthday"];
        $query[5] = $_POST["gender"];
        $query[6] = $_POST["age_group"];
        $query[7] = $_POST["nationality"];
        $query[8] = $_POST["tel"];
        $query[9] = $_POST["address"];
        $query[10] = $_POST["city"];
        $query[11] = $_POST["province"];
        $query[12] = $_POST["country"];
        $query[13] = $_POST["zip"];
        $query[14] = $_POST["save_name"];
        $query[15] = $_POST["save_tel"];
        $query[16] = $_POST["shirt_size"];
        $query[17] = $_POST["slip_time"];
        $query[18] = $_POST["slip_number"];
        $query[19] = $_FILES["slip_file"];
        $query[20] = $_POST["email"];
        $query[21] = $_POST["password"];
        
        
        $this->loadModel('Model_register');
        $result = $this->Model_register->add($query);
        if($result == '00000'){
            $this->view->CSSInject[0] = URL_Public . '/css/main.css';
            $this->view->JSInject[0] = URL_Public . '/js/main.js';
            
            $this->view->render('header');
            $this->view->render('register/step3');
            $this->view->render('footer');
        }else{
            $this->view->CSSInject[0] = URL_Public . '/css/main.css';
            $this->view->JSInject[0] = URL_Public . '/js/main.js';
            
            $this->view->render('header');
            $this->view->render('register/error');
            $this->view->render('footer');
        }
        
    }
}