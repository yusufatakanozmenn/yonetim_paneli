<?php
class Contact_Settings extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "contact_settings_v";
        $this->load->model("Contact_Settings_model");
	}
    public function index(){
        $viewData = new stdClass();
        $item = $this->Contact_Settings_model->get(array("id" => 1));
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="update";
        $viewData->item=$item;


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }



}
