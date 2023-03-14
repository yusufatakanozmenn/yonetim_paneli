<?php
class Project extends CI_Controller
{

    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "project_v";
        $this->load->model("project_model");
        $this->load->helper("tools_helper");
    }
    public function index()
    {
        $viewData = new stdClass();
        /** Tablodaki tüm kayıtları getiriyoruz.. */
        $items = $this->project_model->get_all();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form()
    {
        $viewData = new stdClass();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update_form($id)
    {
        $viewData = new stdClass();
        $item = $this->project_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);;
    }

    public function update_status($id){

        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0 ;
            $db_name = $this->input->post("db_name");
            $insert = $this->project_model->update(
                array(
                    "id" => $id
                ),
                array(
                    $db_name => $isActive            
                )
                );
        }else{
            echo 'Hatali islem';
        }
    }


    public function save()
    {
        $this->load->library("form_validation");
        //kurallar yazılır
        $this->form_validation->set_rules("adi", "adi", "required|trim");
        $this->form_validation->set_rules("sira", " sira", "required|trim");
        $this->form_validation->set_rules("aciklama", "aciklama", "required|trim");
        $this->form_validation->set_rules("description", "description", "required|trim");
        $this->form_validation->set_rules("keywords", "keywords", "required|trim");
        $this->form_validation->set_rules("seo", "seo", "required|trim");
        $this->form_validation->set_rules("kategori", "kategori", "required|trim");
        $this->form_validation->set_rules("videoid", "videoid", "required|trim");
        $this->form_validation->set_rules("spot", "spot", "required|trim");
        $this->form_validation->set_rules("tarih", "tarih", "required|trim");
        $this->form_validation->set_rules("tarihg", "tarihg", "required|trim");
        //hata mesajları
        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır."
            )                                              
        );                                              
        $validate = $this->form_validation->run();                                              
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";                                              
        $config["upload_path"] = "uploads/$this->viewFolder/";                                              
        $this->load->library("upload", $config);                                              
        $upload_logo = $this->upload->do_upload("resim");                                              
        $project_img_name = basename($_FILES["resim"]["name"]);                                              
        $insert = $this->project_model->add(                                              
            array(                                              
                "sira" => $this->input->post("sira"),                                              
                "adi" => $this->input->post("adi"),
                "aciklama" => $this->input->post("aciklama"),
                "description" => $this->input->post("description"),
                "keywords" => $this->input->post("description"),
                "seo" => convertToSEO($this->input->post("description")),
                "kategori" => $this->input->post("kategori"),
                "videoid" => $this->input->post("videoid"),
                "spot" => $this->input->post("spot"),
                "tarih" => $this->input->post("tarih"),
                "tarihg" => $this->input->post("tarihg"),   
                "resim" => $project_img_name,               
            )  
        );
        if($insert){
            redirect(base_url("project"));
        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }

    public function update($id)
    {
        $this->load->library("form_validation");
        //kurallar yazılır
        $this->form_validation->set_rules("adi", "adi", "required|trim");
        $this->form_validation->set_rules("sira", " sira", "required|trim");
        $this->form_validation->set_rules("aciklama", "aciklama", "required|trim");
        $this->form_validation->set_rules("description", "description", "required|trim");
        $this->form_validation->set_rules("keywords", "keywords", "required|trim");
        $this->form_validation->set_rules("seo", "seo", "required|trim");
        $this->form_validation->set_rules("kategori", "kategori", "required|trim");
        $this->form_validation->set_rules("videoid", "videoid", "required|trim");
        $this->form_validation->set_rules("spot", "spot", "required|trim");
        $this->form_validation->set_rules("tarih", "tarih", "required|trim");
        $this->form_validation->set_rules("tarihg", "tarihg", "required|trim");
        //hata mesajları
        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır."
            )
        );
        $validate = $this->form_validation->run();
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";
        $this->load->library("upload", $config);
        $upload_logo = $this->upload->do_upload("resim");
        $project_img_name = basename($_FILES["resim"]["name"]);       
        $update = $this->project_model->update(
            array(
                "id" => $id
            ),
            array(
            "sira" => $this->input->post("sira"),
            "adi" => $this->input->post("adi"),
            "aciklama" => $this->input->post("aciklama"),
            "description" => $this->input->post("description"),
            "keywords" => $this->input->post("description"),
            "seo" => convertToSEO($this->input->post("description")),
            "kategori" => $this->input->post("kategori"),
            "videoid" => $this->input->post("videoid"),
            "spot" => $this->input->post("spot"),
            "tarih" => $this->input->post("tarih"),
            "tarihg" => $this->input->post("tarihg"),   
            "resim" => $project_img_name,               
            ) 
        );
        if ($update) {
            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt başarıyla güncellendi",
                "type" => "success"
            );
        } else {
            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Kayıt güncellenemedi",
                "type" => "error"
            );
        }
        $this->session->set_flashdata("alert", $alert);  
        redirect(base_url("project"));         
       
    }





}