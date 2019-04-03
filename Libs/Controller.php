<?php

class Controller {
    function __construct(){
        session_start();
        $this->view = new View();
    }
    
    function loadModel($name){
        $file_path = 'Models/' . $name . '.php'; 
        if(file_exists($file_path)){
            require $file_path;
            $this->$name = new $name();
        }
    }
}