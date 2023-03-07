<?php
class Slider extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "slider_v";
        $this->load->model("slider_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();        
        $items = $this->slider_model->get_all();
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
    public function save()
    {
        $insert = $this->slider_model->add(
            array(
                "sira" => $this->input->post("sira"),
                "adi" => $this->input->post("adi"),
                "url" => $this->input->post("url"),
                "sekme"=> $this->input->post("sekme"),                
                "durum" => $this->input->post("durum"),
                "aciklama" => $this->input->post("aciklama"),
                "video" => $this->input->post("video"),                
            )
        );
        if($insert){
            redirect(base_url("slider"));

        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }
    public function update_form($id){
        $viewData = new stdClass();
        $item = $this->slider_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function update($id){
        $update = $this->slider_model->update(
            array(
                "id" => $id
            ),
            array(
                "sira" => $this->input->post("sira"),
                "adi" => $this->input->post("adi"),
                "url" => $this->input->post("url"),
                "sekme"=> $this->input->post("sekme"),                
                "durum" => $this->input->post("durum"),
                "aciklama" => $this->input->post("aciklama"),
                "video" => $this->input->post("video"),                
            )
        );
        if($update){
            redirect(base_url("slider"));
        }
        else{
            echo "Güncelleme İşlemi Gerçekleşmedi";
        }
    }


    public function update_status($id){

        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0 ;
            $insert = $this->slider_model->update(
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
        $delete = $this->slider_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("slider"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }

}