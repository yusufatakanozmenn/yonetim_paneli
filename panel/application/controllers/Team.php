<?php
class Team extends CI_Controller
{   
    public $viewFolder = "";
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "team_v";
        $this->load->model("team_model");
        
    }
    public function index()
    {
        $viewData = new stdClass();     
        $items = $this->team_model->get_all();   
        $viewData->viewFolder = $this->viewFolder;
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
  
    public function save(){
        $insert = $this->team_model->add(
            array(
                "sira" => $this->input->post("sira"),
                "adi" => $this->input->post("adi"),
                "twitter" => $this->input->post("twitter"),
                "facebook" => $this->input->post("facebook"),
                "instagram" => $this->input->post("instagram"),
                "linkedin" => $this->input->post("linkedin"),
                "durum" => $this->input->post("durum"),
                
            )
        );
        if ($insert){
            redirect(base_url("team"));
        }
        else{
            echo "Kayit eklenemedi";
        }
    }
    public function add(){
        $insert = $this->team_model->add(
            array(
                "sira" => $this->input->post("sira"),
                "adi" => $this->input->post("adi"),
                "twitter" => $this->input->post("twitter"),
                "facebook" => $this->input->post("facebook"),
                "instagram" => $this->input->post("instagram"),
                "linkedin" => $this->input->post("linkedin"),
                "durum" => $this->input->post("durum"),
                
            )
        );
        if ($insert){
            redirect(base_url("team"));
        }
        else{
            echo "Kayit eklenemedi";
        }
    }
  
    public function update_form($id){
        $viewData = new stdClass();
        $item = $this->team_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
    
    public function update($id){
        
        $insert = $this->team_model->update(
            array(
                "id" => $id
            ),
            array(
                "adi" => $this->input->post("adi"),
                "sira" => $this->input->post("sira"),
                "twitter" => $this->input->post("twitter"),
                "facebook" => $this->input->post("facebook"),
                "instagram" => $this->input->post("instagram"),
                "linkedin" => $this->input->post("linkedin"),
                "durum" => $this->input->post("durum"),
                
            )
            );

        if ($insert){
            redirect(base_url("team"));
        }
        else{
            echo "Kayit eklenemedi";
        }
    }
    public function update_status($id){

        if($id){
            $isActive = ($this->input->post("data") === "true") ? 1 : 0 ;
            $db_name = $this->input->post("db_name");
            $insert = $this->team_model->update(
                array(
                    "id" => $id
                ),
                array(
                    $db_name => $isActive            
                )
                );
        }else{
            echo 'Hatali islem';
        }
    }
   

    public function delete($id){
        $delete = $this->team_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("team"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }


    
}

        
        
       