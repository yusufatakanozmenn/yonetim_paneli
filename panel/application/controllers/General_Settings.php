<?php
class General_Settings extends CI_Controller
{

    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "general_settings_v";
        $this->load->model("General_Settings_model");
    }
    public function index()
    {
        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";


        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }




}