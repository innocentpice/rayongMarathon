<?php

class admin extends Controller {
    function __construct(){
        parent:: __construct();
        if(!$this->auth()){
            exit();
        }
    }
    
    private function auth(){
        if(empty($_SESSION['admin'])){
            if($_POST['username'] == 'rayongchember' && $_POST['password'] == 'chember2017'){
                $_SESSION['admin'] = 'true';
                return true;
            }else{
                $this->login();
                return false;
            }
        }else{
            return true;
        }
    }
    
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->loadModel('Model_admin');
        $result = $this->Model_admin->view($query);
        $this->view->task = $result;
        
        $this->view->render('header');
        $this->view->render('admin/view');
        $this->view->render('footer');
    }
    
    function memberpass($email){
        $this->loadModel('Model_admin');
        $result = $this->Model_admin->member_pass($email);
        if($result == 'pass'){
            header('Location: '.URL_Path.'/admin');
            exit();
        }else{
            echo 'error';
            exit();
        }
    }
    
    function memberfail($email){
        $this->loadModel('Model_admin');
        $result = $this->Model_admin->member_fail($email);
        if($result == 'pass'){
            header('Location: '.URL_Path.'/admin');
            exit();
        }else{
            echo 'error';
            exit();
        }
    }
    
    private function login(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->CSSInject[1] = URL_Public . '/css/admin_login.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        $this->view->JSInject[1] = URL_Public . '/js/admin_login.js';
        $this->view->render('header');
        $this->view->render('admin/login');
        $this->view->render('footer');
    }
    
    function logout(){
        session_unset();
        header('Location: '.URL_Path.'/admin');
        exit();
    }
}