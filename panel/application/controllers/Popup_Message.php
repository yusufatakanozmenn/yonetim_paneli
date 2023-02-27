<?php
class Popup_Message extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "popup_message_v";
        $this->load->model("Popup_Message_model");

        
	}
    public function index(){
        $viewData = new stdClass();
        $item = $this->Popup_Message_model->get(array("id" => 1));
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="update";
        $viewData->item=$item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
}
