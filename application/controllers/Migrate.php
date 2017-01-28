<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller 
{
    public function index()
    {
        //TODO: Descomentar trecho depois da primeira migração
        // if ($this->ion_auth->in_group(ADMIN))
        // {
            $version = $this->input->get('version');

            $this->load->library('migration');

            if ($version) 
            {
                if(!$this->migration->version($version))
                {
                    show_error($this->migration->error_string());
                } 
                else 
                {
                    echo "Migração bem sucedida! - Versão: " . $version;
                }
            } 
            else 
            {
                if(!$this->migration->latest())
                {
                    show_error($this->migration->error_string());
                } 
                else 
                {
                    echo "Migração bem sucedida!";
                }
            }
        // }
        // else
        // {
        //     echo "Você não tem permissão para executar essa ação.";
        // }
    }
}