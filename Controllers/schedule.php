<?php

class schedule extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->headText = 'กำหนดการแข่งขัน';
        $this->view->stay = 'schedule';
        
        $this->view->render('header');
        $this->view->render('schedule');
        $this->view->render('footer');
    }
}