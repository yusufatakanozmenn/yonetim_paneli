<?php
class General_Settings extends CI_Controller
{

    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "general_settings_v";
        $this->load->model("General_Settings_model");
    }
    public function index()
    {
        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->General_Settings_model->get();

        if($item)
            $viewData->subViewFolder = "update";
        else
            $viewData->subViewFolder = "no_content";

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function new_form(){

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
    public function save(){

            $this->load->library("form_validation");

            // Kurallar yazilir..
            $this->form_validation->set_rules("site_url", "site_url", "required|trim");
            $this->form_validation->set_rules("site_title", "site_title", "required|trim");
            $this->form_validation->set_rules("site_description", "site_description", "required|trim");
            $this->form_validation->set_rules("site_keywords", "site_keywords", "required|trim");
            $this->form_validation->set_rules("pbirimi", "pbirimi", "required|trim");
            $this->form_validation->set_rules("video", "video", "required|trim");
            $this->form_validation->set_rules("yonetim", "yonetim", "required|trim");
            $this->form_validation->set_rules("site_desc", "site_desc", "required|trim");
            $this->form_validation->set_rules("copyright", "copyright", "required|trim");

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){
            $insert = $this->General_Settings_model->add(
                array(
                    "site_url"          => $this->input->post("site_url"),
                    "site_title"        => $this->input->post("site_title"),
                    "site_description"  => $this->input->post("site_description"),
                    "site_keywords"     => $this->input->post("site_keywords"),
                    "pbirimi"           => $this->input->post("pbirimi"),
                    "video"             => $this->input->post("video"),
                    "yonetim"           => $this->input->post("yonetim"),
                    "site_desc"         => $this->input->post("site_desc"),

            )
        );


            // TODO Alert sistemi eklenecek...
            if($insert){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }


            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings"));

            die();

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function update_form($id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->General_Settings_model->get(
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








}