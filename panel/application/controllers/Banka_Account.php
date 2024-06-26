<?php
class Banka_Account extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "banka_account_v";
        $this->load->model("banka_account_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $viewData->viewFolder = $this->viewFolder;
        $items = $this->banka_account_model->get_all();
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
       

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