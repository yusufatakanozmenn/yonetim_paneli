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

    public function save()
    {
        $insert = $this->product_model->add(
            array(
                "sira" => $this->input->post("sira"),
                "kategori" => $this->input->post("kategori"),
                "adi" => $this->input->post("adi"),
                "urun_kodu" => $this->input->post("urun_kodu"),
                "fiyat" => $this->input->post("fiyat"),
                "ifiyat" => $this->input->post("ifiyat"),
                "seo" => $this->input->post("seo"),
                "spot" => $this->input->post("spot"),
                "aciklama" => $this->input->post("aciklama"),
                "kapak" => $this->input->post("kapak"),
                "dokuman" => $this->input->post("dokuman"),
                "katalog" => $this->input->post("katalog"),
                "durum" => $this->input->post("durum"),
                "anasayfa" => $this->input->post("anasayfa"),
                "yeni" => $this->input->post("yeni"),
                "stok" => $this->input->post("kategori"),
                "tarih" => date("Y-m-d H:i:s"),
                "dil" => 0,
            )
        );
        if($insert){
            redirect(base_url("product"));

        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }

    public function update_form($id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->product_model->get(
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
        
        $insert = $this->product_model->update(
            array(
                "id" => $id
            ),
            array(
                "adi" => $this->input->post("adi"),
                "sira" => $this->input->post("sira"),
                "urun_kodu" => $this->input->post("urun_kodu"),
                "fiyat" => $this->input->post("fiyat"),
                "ifiyat" => $this->input->post("ifiyat"),
                "stok" => $this->input->post("stok"),
                "kategori" => $this->input->post("kategori"),
                "spot" => $this->input->post("spot"),
                "aciklama" => $this->input->post("aciklama"),
                "seo" => $this->input->post("seo"),
                
            )
            );

        if ($insert){
            redirect(base_url("product"));
        }
        else{
            echo "Kayit eklenemedi";
        }
    }
    
    public function update_status($id){

        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0 ;
            $insert = $this->product_model->update(
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
        $delete = $this->product_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("product"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }


}