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
        $item = $this->General_Settings_model->get(array("id" => 1));
        $viewData->subViewFolder = "update";
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update()
    {

        $insert = $this->General_Settings_model->update(
            array(
                "site_url" => $this->input->post("site_url"),
                "site_baslik" => $this->input->post("site_title"),
                "site_keyw" => $this->input->post("site_keywords"),
                "pbirimi" => $this->input->post("pbirimi"),
                "yonetim" => $this->input->post("yonetim"),
                "site_desc" => $this->input->post("site_desc"),
                "id" => 1,
            )
        );
      

        // TODO Alert sistemi eklenecek...
        if ($insert) {

            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt başarılı bir şekilde eklendi",
                "type" => "success"
            );
            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

        } else {

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                "type" => "error"
            );
        }


        $this->session->set_flashdata("alert", $alert);

        redirect(base_url("general_settings"));

        die();



    }

    public function update_form($id)
    {

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->General_Settings_model->get(
            array(
                "id" => $id,
            )
        );

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }








}