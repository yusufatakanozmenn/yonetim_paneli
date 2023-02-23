<?php
class General_Settings extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "general_settings_v";
	}
    public function index(){
        echo "urunler index";
    }



}
