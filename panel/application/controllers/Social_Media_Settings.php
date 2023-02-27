<?php
class Social_Media_Settings extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "social_media_settings_v";
        $this->load->model("Social_Media_model");

	}
    public function index(){
        $viewData = new stdClass();
        $item = $this->Social_Media_model->get(array("id" => 1));        
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="update";
        $viewData->item=$item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }



}
