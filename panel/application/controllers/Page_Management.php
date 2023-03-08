<?php
class Page_Management extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "page_management_v";
        $this->load->model("pages_model");
        $this->load->helper("tools_helper");
       
	}
    public function index(){
        $viewData = new stdClass();
        /** Tablodaki tüm kayıtları getiriyoruz.. */    
        $items = $this->pages_model->get_all();   
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";  
        $viewData->items=$items;


        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
    public function new_page(){
        $viewData = new stdClass();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="add";  
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
    public function save(){
        $insert = $this->pages_model->add(
            array(
                "adi" => $this->input->post("adi"),
                "seo" => convertToSEO($this->input->post("adi")),
                "sayfa" => $this->input->post("sayfa"),                
                "aciklama" => $this->input->post("aciklama"),
                "durum" => 1,  
                "anasayfa" => 1, 
                "tarih" => date("Y-m-d H:i:s"),
            )
        );
        if($insert){
            redirect(base_url("page_management"));
        }
        else{
            echo "Kayıt Eklenemedi";
        }
    }
    public function update_form($id){
        $viewData = new stdClass();        
        $item = $this->pages_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
       

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function update($id){
        $update = $this->pages_model->update(
            array(
                "id" => $id
            ),
            array(
                "adi" => $this->input->post("adi"),
                "seo" => convertToSEO($this->input->post("adi")),
                "sayfa" => $this->input->post("sayfa"),                
                "aciklama" => $this->input->post("aciklama"),
            )
        );
        if($update){
            redirect(base_url("page_management"));
        }
        else{
            echo "Güncelleme İşlemi Gerçekleşmedi";
        }
    }
    public function update_status($id){

        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0 ;
            $db_name = $this->input->post("db_name");
            $insert = $this->pages_model->update(
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
    public function delete($id){
        $delete = $this->pages_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("page_management"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
    


}
