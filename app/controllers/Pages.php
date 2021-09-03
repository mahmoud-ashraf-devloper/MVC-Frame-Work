<?php
class Pages extends Controller{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        echo "<pre>";
        var_dump($this->userModel);
    }
    public function index()
    {
        $data = $this->userModel->getAllUsers();
        $this->view('Pages'.DS.'index',$data);
    }
    public function about()
    {
        $this->view('Pages'.DS.'about');
    }

}