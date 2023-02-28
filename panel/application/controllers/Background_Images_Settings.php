<?php
class Background_Images_Settings extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "background_images_settings_v";
        $this->load->model("Background_Images_Settings_model");
	}
    public function index(){
        $viewData = new stdClass();
        $item = $this->Background_Images_Settings_model->get();
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="update";
        $viewData->item=$item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }



}
