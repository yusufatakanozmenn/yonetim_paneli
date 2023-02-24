<?php
class Popup_Message extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "popup_message_v";
	}
    public function index(){
        $viewData = new stdClass();
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="update";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }



}
