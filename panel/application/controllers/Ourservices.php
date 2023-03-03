<?php
class Ourservices extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "ourservices_v";
        $this->load->model("ourservices_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $items = $this->ourservices_model->get_all(
            array()
        );
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
        $delete = $this->ourservices_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("ourservices"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
}