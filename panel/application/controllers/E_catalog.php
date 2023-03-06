<?php
class E_catalog extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "e_catalog_v";
        $this->load->model("e_catalog_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();       
        $items = $this->e_catalog_model->get_all();           
        
        $viewData->viewFolder = $this->viewFolder;
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
    public function delete($id){
        $delete = $this->e_catalog_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("e_catalog"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
   
}