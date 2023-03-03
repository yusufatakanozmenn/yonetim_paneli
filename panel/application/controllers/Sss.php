<?php
class Sss extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "sss_v";
        $this->load->model("sss_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $items = $this->sss_model->get_all();
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
    public function update_form($id)
    {
        $viewData = new stdClass();        
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
       

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function delete($id){
        $delete = $this->sss_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("sss"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
   
}