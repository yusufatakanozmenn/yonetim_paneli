<?php
class Api_Settings extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "api_settings_v";
        $this->load->model("Api_Settings_model");
	}
    public function index(){
        $viewData = new stdClass();
        $item = $this->Api_Settings_model->get(array("id" => 1));
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="update";
        $viewData->item=$item;       

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }



}
