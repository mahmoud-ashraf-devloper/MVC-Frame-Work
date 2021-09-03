<?php
class Core {
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct(){
        // Get Controller.
        $url = $this->getUrl();
        if(isset($url[0])){
            $file_path = CONTROLLERS_PATH.DS.ucwords($url[0]).".php";
            if(file_exists($file_path)){
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
        }
        require_once CONTROLLERS_PATH.DS.$this->currentController.'.php';
        $this->currentController = new $this->currentController;
        // Get Method.
        if(isset($url[1])){
            if(method_exists($this->currentController,$url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        // Get Params.
        if(isset($url[2])){
            $this->params = $url[2];
            unset($url[2]);
        }

        call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
    }
    public function getUrl()
    {
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url,'/');
            $url = filter_var($url, FILTER_SANITIZE_URL );

            $url = explode("/",$url,3);
            if(isset($url[2])){
                $url[2] = explode("/",$url[2]);
            }
            return $url;
        }
    }
}

