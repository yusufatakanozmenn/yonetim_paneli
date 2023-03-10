<?php
class Userop extends CI_Controller{
    public $viewFolder = "";
    public function __construct(){
        parent::__construct();
        $this->viewFolder = "users_v";
    }

    public function login(){
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "login";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function do_login(){
        $this->load->library("form_validation");

        $this->form_validation->set_rules("email", "E-posta", "required|trim|valid_email");
        $this->form_validation->set_rules("sifre", "Şifre", "required|trim|min_length[8]|max_length[32]");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır.",
                "valid_email" => "Lütfen geçerli bir e-posta adresi giriniz.",
                "min_length" => "<b>{field}</b> en az 8 karakterden oluşmalıdır.",
                "max_length" => "<b>{field}</b> en fazla 32 karakterden oluşmalıdır."
            )
        );

        // Form validation calistirilir...

        if ($this->form_validation->run() == FALSE){

            redirect(base_url("login"));

        }else{
            redirect(base_url("dashboard"));

        }
    }
}