<?php

class service extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->headText = 'การอำนวยความสะดวก';
        $this->view->stay = 'service';
        
        $this->view->render('header');
        $this->view->render('service');
        $this->view->render('footer');
    }
}