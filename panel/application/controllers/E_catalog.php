<?php
class E_catalog extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "e_catalog_v";
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
       

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function add_form()
    {
        $viewData = new stdClass();        
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
       

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
   
}