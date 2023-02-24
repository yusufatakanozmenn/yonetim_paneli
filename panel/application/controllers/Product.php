<?php
class Product extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "product_v";
        $this->load->model("Product_model");
	}
    public function index(){
        $viewData = new stdClass();
        /** Tablodaki tüm kayıtları getiriyoruz.. */
        $items = $this->Product_model->get_all();
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";
        $viewData->items=$items;

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }



}
