<?php
class General_Settings_model extends CI_Model{
    public $tableName="ayarlar";
    public function __construct()
    {
        parent::__construct();

    }

    /** Tüm kayıtları bana getirecek olan metot..*/
    public function get_all()
    {
        $query="SELECT * FROM ayarlar WHERE id=1";
        return $this->db->select($query)->result();
    }
}