<?php
class Photo_Gallery extends CI_Controller
{
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "photo_gallery_v";
        $this->load->model("photo_gallery_model");
        $this->load->helper("tools_helper");

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
    public function photo_list($id)
    {
        $viewData = new stdClass();
        $item = $this->photo_gallery_model->get_(
            array(
                "resimid" => $id
            )
        );
        $item1 = $this->photo_gallery_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "photo_list";
        $viewData->item = $item;
        $viewData->item1 = $item1;
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function upload_photo(){
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_image = $this->upload->do_upload("kapak");
        $image_name = basename($_FILES["kapak"]["name"]);

        if ($upload_image) {
            $this->photo_gallery_model->add(
                array("id" => 1),
                array(
                    "kapak" => $image_name,
                )
            );
        }
    }

    //foto galeri ekleme
    public function save()
    {
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_image = $this->upload->do_upload("kapak");
        $image_name = basename($_FILES["kapak"]["name"]);

        if ($upload_image) {
            $this->photo_gallery_model->add(
                array("id" => 1),
                array(
                    "kapak" => $image_name,
                )
            );
        }

        $insert = $this->photo_gallery_model->add(
            array(
                "adi" => $this->input->post("adi"),
                "aciklama" => $this->input->post("aciklama"),
                "description" => $this->input->post("description"),
                "seo" => convertToSEO($this->input->post("description")),
                "keywords" => $this->input->post("adi"),
                "tarih" => date("Y-m-d H:i:s"),
                "dil" => 1,
                "durum" => 1,
            )
        );
        if ($insert) {
            redirect(base_url("photo_gallery"));

        } else {
            echo "Kayıt Eklenemedi";
        }

    }
    public function update($id)
    {
        $config["allowed_types"] = "jpg|jpeg|png|svg|webp";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload_image = $this->upload->do_upload("kapak");
        $image_name = basename($_FILES["kapak"]["name"]);
        if ($upload_image) {
            $this->photo_gallery_model->update(
                array("id" => 1),
                array(
                    "kapak" => $image_name,
                )
            );
        }


        $update = $this->photo_gallery_model->update(
            array(
                "id" => $id
            ),
            array(
                "adi" => $this->input->post("adi"),
                "aciklama" => $this->input->post("aciklama"),
                "description" => $this->input->post("description"),
                "seo" => convertToSEO($this->input->post("adi")),
                "keywords" => $this->input->post("description"),
                "tarih" => date("Y-m-d H:i:s"),

            )
        );
        if ($update) {
            redirect(base_url("photo_gallery"));
        } else {
            echo "Güncelleme İşlemi Gerçekleşmedi";
        }

    }
    public function update_status($id)
    {
        if ($id) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $insert = $this->photo_gallery_model->update(
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
        $delete = $this->photo_gallery_model->delete(
            array(
                "id" => $id
            )
        );
        $delete2 = $this->photo_gallery_model->delete_photo(
            array(
                "resimid" => $id
            )
        );
        if ($delete && $delete2) {
            redirect(base_url("photo_gallery"));
        } else {
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }




}