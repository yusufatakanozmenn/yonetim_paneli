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
        $item1 = $this->project_model->get_all_foto();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
        $viewData->item1 = $item1;
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
            array
            (
                "id" => $id
            )
        );
        $item1 = $this->project_model->get_all_foto();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
        $viewData->item1 = $item1;

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
    {
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_kapak = $this->upload->do_upload("kapak");
        $upload_image = $this->upload->do_upload("resim");

        $kapak_name = basename($_FILES["kapak"]["name"]);
        $image_name = basename($_FILES["resim"]["name"]);

        if ($upload_kapak) {
            $this->project_model->add(
                array(
                    "kapak" => $kapak_name,
                )
            );
        }
        if ($upload_image) {
            $this->project_model->add_foto(
                array(
                    "pid" => $this->input->post("sira"),
                    "resim" => $image_name,
                )
            );
        }

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
                "durum" => 1,
                "anasayfa" => 1,
                "tarih" => $this->input->post("tarih"),
                "tarihg" => $this->input->post("tarihg"),
                "dil" => 1,
            )
        );
        if ($insert) {
            redirect(base_url("project"));

        } else {
            echo "Kayıt Eklenemedi";
        }
    }

    public function update($id)
    {
        $item = $this->project_model->get(
            array
            (
                "id" => $id
            )
        );

        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_kapak = $this->upload->do_upload("kapak");
        $upload_image = $this->upload->do_upload("resim");

        $kapak_name = basename($_FILES["kapak"]["name"]);
        $image_name = basename($_FILES["resim"]["name"]);

        if ($upload_kapak) {
            $this->project_model->update(
                array(
                    "kapak" => $kapak_name,
                )
            );
        }
        if ($upload_image) {
            $this->project_model->update_foto(
                array("pid" => $item->sira),
                array(

                    "resim" => $image_name,
                )
            );
        }


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
            )
        );
    }





}