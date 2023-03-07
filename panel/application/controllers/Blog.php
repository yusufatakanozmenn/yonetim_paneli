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
    public function save(){
        $insert = $this->blog_model->add(
            array(
                "adi" => $this->input->post("adi"),
                "videoid" => $this->input->post("videoid"),
                "sira" => $this->input->post("sira"),
                "durum" => $this->input->post("durum"),
                "tarih" => $this->input->post("tarih"),
                "tarihg"=>$this->input->post("tarihg"),
                "spot" => $this->input->post("spot"),
                "description" => $this->input->post("description"),
            )
        );
        if($insert){
            redirect(base_url("blog"));
        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }
    public function update($id){
        $update = $this->blog_model->update(
            array(
                "id" => $id
            ),
            array(
                "adi" => $this->input->post("adi"),
                "videoid" => $this->input->post("videoid"),
                "sira" => $this->input->post("sira"),
                "durum" => $this->input->post("durum"),
                "tarih" => $this->input->post("tarih"),
                "tarihg"=>$this->input->post("tarihg"),
                "spot" => $this->input->post("spot"),
                "description" => $this->input->post("description"),
            )
        );
        if($update){
            redirect(base_url("blog"));
        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }
    public function update_form($id){
        $viewData = new stdClass();        
        $item = $this->blog_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
       

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