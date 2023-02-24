<?php
class Product_model extends CI_Model{
    public $tableName="urunler";
    public function __construct()
    {
        parent::__construct();

    }

    /** Tüm kayıtları bana getirecek olan metot..*/
    public function __get($key)
    {

    }
}