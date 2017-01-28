<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

use \App\Core\CoreController;

class Home extends CoreController
{
  
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['title'] = "Codeigniter com Blade";

        $this->data['posts'] = [ 
            ['id'=>1,'title'=>'Meu titulo 1','description'=>'minha descrição 1 está aqui'],
            ['id'=>2,'title'=>'Meu titulo 2','description'=>'minha descrição 2 está aqui']
        ];
    
        //render blade
        $this->view('home', $this->router->fetch_class(), $this->data);
    }
}

