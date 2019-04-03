<?php

class memberlist extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->headText = 'รายชื่อผู้เข้าแข่งขัน';
        $this->view->stay = 'memberlist';
        
        $this->loadModel('Model_memberlist');
        
        if($_GET['gender'] == 'F'){
            $gender = 'F';
        }else{
            $gender = 'M';
        }
        
        $this->view->memberM[19] = $this->Model_memberlist->view($gender,19);
        for($i=20;$i<=60;$i+=10){
            $this->view->memberM[$i] = $this->Model_memberlist->view($gender,$i);
        }
        $this->view->memberF[19] = $this->Model_memberlist->view($gender,19,'Fun Run');
        for($i=20;$i<=60;$i+=10){
            $this->view->memberF[$i] = $this->Model_memberlist->view($gender,$i,'Fun Run');
        }
        
        
        $this->view->render('header');
        $this->view->render('memberlist');
        $this->view->render('footer');
    }
}