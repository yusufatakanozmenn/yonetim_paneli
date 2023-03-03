<?php
class Video extends CI_Controller
{
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "video_v";
        $this->load->model("video_model");
        $this->load->helper("tools_helper");

    }
    public function index()
    {
        $viewData = new stdClass();
        $items = $this->video_model->get_all();
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
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_image = $this->upload->do_upload("resim");
        $image_name = basename($_FILES["resim"]["name"]);
        if ($upload_image) {

            $insert = $this->video_model->add(
                array(
                    "adi" => $this->input->post("adi"),
                    "sira" => $this->input->post("sira"),
                    "kod" => $this->input->post("kod"),
                    "aciklama" => $this->input->post("aciklama"),
                    "description" => $this->input->post("description"),
                    "seo"=>convertToSEO($this->input->post("adi")),
                    "keywords" => $this->input->post("description"),
                    "tarih" => date("Y-m-d H:i:s"),
                    "resim" => $image_name,
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
    public function update_form($id)
    {
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

    public function update($id)
    {
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_image = $this->upload->do_upload("resim");
        $image_name = basename($_FILES["resim"]["name"]);

        if ($upload_image) {
            $update = $this->video_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "adi" => $this->input->post("adi"),
                    "sira" => $this->input->post("sira"),
                    "kod" => $this->input->post("kod"),
                    "aciklama" => $this->input->post("description"),
                    "seo" => $this->input->post("seo"),
                    "keywords" => $this->input->post("description"),
                    "tarih" => date("Y-m-d H:i:s"),
                    "resim" => $image_name,
                )
            );
            if ($update) {
                redirect(base_url("video"));
            } else {
                echo "Güncelleme İşlemi Gerçekleşmedi";
            }
        }
    }
    public function update_status($id)
    {

        if ($id) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $insert = $this->video_model->update(
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
        $delete = $this->video_model->delete(
            array(
                "id" => $id
            )
        );
        if ($delete) {
            redirect(base_url("video"));
        } else {
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
}