<?php
class Managers extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "managers_v";
        $this->load->model("managers_model");

        
    }
    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $items = $this->managers_model->get_all();
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
        $delete = $this->managers_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("managers"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
    public function save(){
        $insert = $this->managers_model->add(
            array(
                "isim" => $this->input->post("isim"),                
                "email" => $this->input->post("email"),
                "kadi" => $this->input->post("kadi"),
                "sifre" => $this->input->post("sifre"),           
                               
            )
        );
        if($insert){
            redirect(base_url("managers"));
        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }
    public function update_form($id){
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $this->managers_model->get(
            array(
                "id" => $id
            )
        );
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function update($id){
        $update = $this->managers_model->update(
            array(
                "id" => $id
            ),
            array(
                "isim" => $this->input->post("isim"),                
                "email" => $this->input->post("email"),
                "kadi" => $this->input->post("kadi"),
                "sifre" => $this->input->post("sifre"),           
            )
        );
        if($update){
            redirect(base_url("managers"));
        }
        else{
            echo "Güncelleme İşlemi Gerçekleşmedi";
        }
    }
    

}
