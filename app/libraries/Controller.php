<?php
// This will loade model & view.
class Controller{
    public Function model($model){
        require_once MODELS_PATH.DS.$model.'.php';
        
        return new $model();
    }
    public function view($view,$data = []){
        if(file_exists(VIEWS_PATH.DS.$view.".php")){
            require_once VIEWS_PATH.DS.$view.".php";
        }else{
            die("This view does not exists");
        }
    }
}