<?php
class Product extends CI_Controller
{

    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "product_v";
        $this->load->model("product_model");
    }
    public function index()
    {
        $viewData = new stdClass();
        /** Tablodaki tüm kayıtları getiriyoruz.. */
        $items = $this->product_model->get_all();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public  function  new_form(){
        $viewData = new stdClass();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    
    public function save()
    {
        $insert = $this->product_model->add(
            array(
                "sira" => "",
                "kategori" => $this->input->post("kategori"),
                "ozellik" => "deneme-urunu",
                "adi" => $this->input->post("adi"),
                "urun_kodu" => "deneme-urunu",
                "fiyat" => "deneme-urunu",
                "ifiyat" => "deneme-urunu",
                "seo" => $this->input->post("seo_description"),
                "description" => "deneme-urunu",
                "keywords" => "deneme-urunu",
                "spot" => "deneme-urunu",
                "aciklama" => $this->input->post("description"),
                "kapak" => "deneme-urunu",
                "dokuman" => "deneme-urunu",
                "katalog" => "deneme-urunu",
                "durum" => 1,
                "anasayfa" => "deneme-urunu",
                "yeni" => "deneme-urunu",
                "stok" => 1,
                "tarih" => date("Y-m-d H:i:s"),
                "dil" => 0,
            )
        );
        if($insert){
            echo "Kayıt Eklendi";}
        else{
            echo "Kayıt Eklenemedi";
        }
    }



}