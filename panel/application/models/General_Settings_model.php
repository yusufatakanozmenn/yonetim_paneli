<?php
class General_Settings_model extends CI_Model
{
    public $tableName = "ayarlar";
    public function __construct()
    {
        parent::__construct();

    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public function getName($where = array(), $data = array())
    {
        return $this->db->where($where)->get($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {

        return $this->db->where($where)->update($this->tableName, $data);
    }

}