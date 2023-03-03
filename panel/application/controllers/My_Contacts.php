<?php
class My_Contacts extends CI_Controller {

	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "my_contacts_v";
        $this->load->model("my_contacts_model");
	}
    public function index(){
        $viewData = new stdClass();
        $items = $this->my_contacts_model->get_all(
            array()
        );
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";
        $viewData->items=$items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
    public function update_form($id){
        $viewData = new stdClass();
        $item = $this->my_contacts_model->get(
            array(
                "id" => $id
            )
        );
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";
        $viewData->item=$item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }
    public function delete($id){
        $delete = $this->my_contacts_model->delete(
            array(
                "id" => $id
            )
        );
        if($delete){
            redirect(base_url("my_contacts"));
        }
        else{
            echo "Silme İşlemi Gerçekleşmedi";
        }
    }
}
