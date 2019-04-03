<?php

class index extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->headText = 'Rayong Together Run Mini Marathon ครั้งที่ 1';
        $this->view->stay = 'index';
        
        $this->view->render('header');
        $this->view->render('index');
        $this->view->render('footer');
    }
}