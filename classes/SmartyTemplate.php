<?php

require_once("../smarty/libs/Smarty.class.php");

class SmartyTemplate extends Smarty {
    
    public function __construct() 
    { 
        parent::__construct();
        
        $this->template_dir = '../smarty/templates/'; 
        $this->compile_dir  = '../smarty/templates_c/'; 
        $this->config_dir   = '../smarty/configs/'; 
        $this->cache_dir    = '../smarty/cache/'; 

        $this->caching = false; 
        $this->assign('app_name', 'Sports Degree'); 
   }
    
}

?>