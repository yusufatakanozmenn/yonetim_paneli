<?php
class Package extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "package_v";
       
	}
    public function index(){
        $viewData = new stdClass();
        /** Tablodaki tüm kayıtları getiriyoruz.. */       
        /** View'e gönderilecek değişkenler.. */
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";     

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

   


}
