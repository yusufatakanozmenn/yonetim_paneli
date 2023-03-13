<?php
class Reference extends CI_Controller
{
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "reference_v";
        $this->load->model("reference_model");

    }
    public function index()
    {
        $viewData = new stdClass();
        $items = $this->reference_model->get_all();
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
        $this->load->library("form_validation");
        //kurallar yazılır
        $this->form_validation->set_rules("adi", "adi", "required|trim");
        $this->form_validation->set_rules("sira", " sira", "required|trim");
        $this->form_validation->set_rules("aciklama", " Açıklama", "required|trim");
        $this->form_validation->set_rules("seo", " seo", "required|trim");
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
        $reference_img_name = basename($_FILES["resim"]["name"]);

        $insert = $this->reference_model->add(
            array(
                "sira" => $this->input->post("sira"),                
                "adi" => $this->input->post("adi"),
                "aciklama" => $this->input->post("aciklama"),
                "seo" => $this->input->post("seo"),
                "anasayfa" =>1,
                "durum" =>1,
                "tarih" => date("Y-m-d H:i:s"),
                "resim" => $reference_img_name,               
            )  
        );
        if($insert){
            redirect(base_url("reference"));
        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }
    public function update_form($id){

        $viewData = new stdClass();
        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->reference_model->get(
            array(
                "id"    => $id,
            )
        );
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function update($id){
        
        $this->load->library("form_validation");
        //kurallar yazılır
        $this->form_validation->set_rules("adi", "adi", "required|trim");
        $this->form_validation->set_rules("sira", " sira", "required|trim");       
        $this->form_validation->set_rules("aciklama", " Açıklama", "required|trim");
        $this->form_validation->set_rules("seo", " seo", "required|trim");
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

        $reference_img_name = basename($_FILES["resim"]["name"]);

        if ($validate) {
            $update = $this->reference_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "sira" => $this->input->post("sira"),
                    "adi" => $this->input->post("adi"),
                    "aciklama" => $this->input->post("aciklama"),
                    "seo" => $this->input->post("seo"),               
                    "resim" => $reference_img_name,
                    "tarih" => date("Y-m-d H:i:s"),

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
            redirect(base_url("reference"));         
        }
    }

    public function update_status_homepage($id)
    {

        if ($id) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $insert = $this->reference_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "anasayfa" => $isActive
                )
            );
        } else {
            echo 'Hatali islem';
        }
    }
    public function update_status_durum($id)
    {

        if ($id) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $insert = $this->reference_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "durum" => $isActive
                )
            );
        } else {
            echo 'Hatali islem';
        }
    }

    public function delete($id)
    {
        $delete = $this->reference_model->delete(
            array(
                "id" => $id
            )
        );
        if ($delete) {
            redirect(base_url("reference"));
        } else {
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }



}