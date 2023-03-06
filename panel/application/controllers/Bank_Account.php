<?php
class Bank_Account extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "bank_account_v";
        $this->load->model("bank_account_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();    
        $viewData->viewFolder = $this->viewFolder;
        $items = $this->bank_account_model->get_all();
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
       
         

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    public function add_form()
    {
        $viewData = new stdClass();        
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
       

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
     public function delete($id){
        $delete = $this->bank_account_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("bank_account"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
    public function update_status($id){

        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0 ;
            $insert = $this->bank_account_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "durum" => $isActive            
                )
                );
        }else{
            echo 'Hatali islem';
        }
    }
   
}