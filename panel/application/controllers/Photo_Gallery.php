<?php
class Photo_Gallery extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "photo_gallery_v";
        $this->load->model("photo_gallery_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();    
        $items = $this->photo_gallery_model->get_all();    
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
    public function update_form($id)
    {
        $viewData = new stdClass();
        $item = $this->photo_gallery_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
    {
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_image = $this->upload->do_upload("kapak");
        $image_name = basename($_FILES["kapak"]["name"]);
        if ($upload_image) {

            $insert = $this->photo_gallery_model->add(
                array(
                    "adi" => $this->input->post("adi"),
                    "aciklama" => $this->input->post("aciklama"),
                    "description" => $this->input->post("description"),
                    "seo"=>convertToSEO($this->input->post("adi")),
                    "keywords" => $this->input->post("description"),
                    "tarih" => date("Y-m-d H:i:s"),
                    "kapak" => $image_name,
                    "dil" => 1,
                    "durum" => 1,
                )
            );
            if ($insert) {
                redirect(base_url("video"));

            } else {
                echo "Kayıt Eklenemedi";
            }
        }
    }



   
}
