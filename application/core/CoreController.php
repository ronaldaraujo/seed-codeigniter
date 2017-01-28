<?php

namespace App\Core;

use Philo\Blade\Blade;

class CoreController extends \CI_Controller
{
    /**
    *@Blade
    */
    protected $blade;

    /**
    *$data Array
    */
    protected $data = array();

    public function __construct() 
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in())
            redirect('login');
        
        //initialize instance blade.
        $this->blade = new Blade(VIEWPATH, APPPATH.'/cache/');
    }

    /**
    * render view with Blade instance
    */
    protected function view($view, $class, $data = [], $return = false)
    {
        if (count($data))
            $this->data = array_merge($this->data, $data);

        $blview = $this->blade->view()->make($class . '/' . $view, $this->data)->render();

        if (!$return)
            return print($blview);
        
        return $blview;
    }
}