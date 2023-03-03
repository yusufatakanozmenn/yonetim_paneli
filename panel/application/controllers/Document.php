<?php
class Document extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "document_v";
        $this->load->model("document_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $items = $this->document_model->get_all();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
       

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function new_form()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function delete($id){
        $delete = $this->document_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("document"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
   
}