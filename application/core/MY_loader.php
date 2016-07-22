<?php
class MY_loader extends CI_Loader
{
    protected $title = '';
    protected $layout = '';
    const EXT = '.php';
    
    function __construct() 
    {
        parent::__construct();
        
        $layout = config_item('layout');
        if ($layout <> '') {
            $this->layout = $layout.self::EXT;
        }
    }    
    
    function setTitle($title)
    {
        $this->title = $title;
    }
    
    function setLayout($layout) 
    {
        $this->layout = $layout.self::EXT;
    }
    
    function view($view = '' , $view_data = array(), $return = FALSE) 
    {  
        if ($view <> '') {
            $view = $view.self::EXT;
        }
        if ($this->layout <> '') {
            $view_data['title'] = $this->title;
            $view_data['content'] = parent::view($view, $view_data, TRUE);
            return parent::view($this->layout, $view_data, $return);
        } else {
            return parent::view($view, $view_data, $return);
        }
    }
}
