<?php
class Dealer_Branch extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "dealer_branch_v";
        $this->load->model("dealer_branch_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $items = $this->dealer_branch_model->get_all();       
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
        $delete = $this->dealer_branch_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("dealer_branch"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
}