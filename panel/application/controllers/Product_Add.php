<?php
class Product_Add extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "product_v";
	}
    public function index(){
        $viewData = new stdClass();
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="add";


        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public function product_add(){
        $viewData = new stdClass();
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="add";


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
    public function save(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("adi","Ürün Adı","required|trim");
        $this->form_validation->set_rules("urun_kodu","Ürün Kodu","required|trim");
        $this->form_validation->set_rules("fiyat","Fiyat","required|trim");
        $this->form_validation->set_rules("ifiyat","İndirimli Fiyat","required|trim");
        $this->form_validation->set_rules("stok","Stok","required|trim");
        $this->form_validation->set_rules("kategori","Kategori","required|trim");
        $this->form_validation->set_rules("resim","Resim","required|trim");
        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır."
            )
        );
        $validate = $this->form_validation->run();

        if($validate){
            $insert = $this->product_model()->add(

                array(
                    "adi" => $this->input->post("adi"),
                    "urun_kodu" => $this->input->post("urun_kodu"),
                    "fiyat" => $this->input->post("fiyat"),
                    "ifiyat" => $this->input->post("ifiyat"),
                    "stok" => $this->input->post("stok"),
                    "kategori" => $this->input->post("kategori"),
                    "resim" => $this->input->post("resim"),
                )
            );
            if($insert) {
                echo "Kayıt başarılı";
            }else{
                echo "Kayıt başarısız";
                }

            }else{
            echo validation_errors();
            }
        }
        




}
