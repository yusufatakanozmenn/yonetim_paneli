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
