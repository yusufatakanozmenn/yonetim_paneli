<?php
class Video extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "video_v";
        $this->load->model("video_model");
        
    }
    public function index()
    {
        $viewData = new stdClass(); 
        $items=$this->video_model->get_all();      
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
        $insert = $this->video_model->add(
            array(
                "id" => $this->input->post("id"),
                "adi" => $this->input->post("adi"),                
                "durum" => $this->input->post("durum"),
               
            )
        );
        if($insert){
            redirect(base_url("video"));
        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }
    public function update_form($id){
        $viewData = new stdClass();
        $item = $this->video_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function delete($id){
        $delete = $this->video_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("video"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
    public function update($id){
        $update = $this->video_model->update(
            array(
                "id" => $id
            ),
            array(
                "adi" => $this->input->post("adi"),
                "durum" => $this->input->post("durum"),
            )
        );
        if($update){
            redirect(base_url("video"));
        }
        else{
            echo "Güncelleme İşlemi Gerçekleşmedi";
        }
    }
}
