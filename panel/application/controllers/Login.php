<?php /* 
class Login extends CI_Controller
{
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "login_v";
        $this->load->model("managers_model");
    }
    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;

        $this->load->view("{$this->viewFolder}/index", $viewData);
    }

    public function login()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_email", "E-posta", "required|trim|valid_email");
        $this->form_validation->set_rules("user_password", "Şifre", "required|trim|min_length[6]|max_length[12]");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır.",
                "valid_email" => "Lütfen geçerli bir e-posta adresi giriniz.",
                "min_length" => "<b>{field}</b> alanı en az <b>{param}</b> karakterden oluşmalıdır.",
                "max_length" => "<b>{field}</b> alanı en fazla <b>{param}</b> karakterden oluşmalıdır."
            )
        );

        if ($this->form_validation->run() == FALSE) {
            // $viewData = new stdClass();
            // $viewData->viewFolder = $this->viewFolder;
            // $viewData->subViewFolder = "login";
            // $viewData->form_error = true;

            // $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
            redirect(base_url("login"));
        } else {
            $email = $this->input->post("user_email");
            $sifre = $this->input->post("user_password");

            $sifre_db = $this->managers_model->get(
                array(
                    "email" => $email
                ),
                "password"
            );

            if (password_verify()) {


            }


        }
    }




}
*/