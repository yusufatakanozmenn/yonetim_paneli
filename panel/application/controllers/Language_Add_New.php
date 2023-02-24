<?php
class Language_Add_New extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "language_v";
	}
    public function index(){
        $viewData = new stdClass();
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="add";

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }



}
