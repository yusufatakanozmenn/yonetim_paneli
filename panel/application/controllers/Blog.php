<?php
class Blog extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "blog_v";
        $this->load->model("blog_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $items = $this->blog_model->get_all();
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
    public function update_status($id){

        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0 ;
            $insert = $this->blog_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "durum" => $isActive            
                )
                );
        }else{
            echo 'Hatali islem';
        }
    }

    public function delete($id){
        $delete = $this->blog_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("blog"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
   
}