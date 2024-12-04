<?php 

class company extends DModel {

    public function __construct() {
        parent::__construct();
    }

    public function list_company($table, $id) {
        $sql = "select * from " . $table . " where comp_id =:id";
    
        $data = array(':id' => $id);
    
        return $this->db->select($sql, $data);
    }

    public function updatecompany($table_companies, $data, $condition) {
        return $this->db->update($table_companies, $data, $condition);
    }

}