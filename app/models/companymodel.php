<?php 

class companymodel extends DModel {

    public function __construct() {
        parent::__construct();
    }
    public function company($table_companies) {
        $sql = "select * from " . $table_companies;
        return $this->db->select($sql);
        // return $result;
    
        // $sql = "select * from companies;";
        // $query = $this->db->query($sql);
        // $result = $query->fetchAll();
        // return $result;
    }
    
    public function compbyid($table_companies, $id) {
        $sql = "select * from " . $table_companies . " where company_id =:id";
    
        $data = array(':id' => $id);
    
        return $this->db->select($sql, $data);
    } 

}

