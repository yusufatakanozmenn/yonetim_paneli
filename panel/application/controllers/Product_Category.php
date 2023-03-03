<?php
class Product_Category extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "product_category_v";
        $this->load->model("product_category_model");
	}
    public function index(){
        $viewData = new stdClass();
        /** Tablodaki tüm kayıtları getiriyoruz.. */
        $items = $this->product_category_model->get_all(
            array()
        );
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";
        $viewData->items=$items;

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public function new_form()
    {
        $viewData = new stdClass();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="add";

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
    public function update_form($id){

        $viewData = new stdClass();
        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->product_category_model->get(
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
        
        $insert = $this->product_category_model->update(
            array(
                "id" => $id
            ),
            array(
                "adi" => $this->input->post("adi"),
                "sira" => $this->input->post("sira"),
                "seo" => $this->input->post("urun_kodu"),
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
    public function update_status_homepage($id)
    {

        if ($id) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $insert = $this->product_category_model->update(
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
            $insert = $this->product_category_model->update(
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


    public function delete($id){
        $delete = $this->product_category_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("product_category"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
  


}
