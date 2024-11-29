<?php
    class loginModel  extends DModel {
        public function __construct() {
            parent::__construct();
        }
        public function getUser(){
            $sql = "select * from users";
            return $this->db->select($sql);
            // $sql = "select * from companies;";
            // $query = $this->db->query($sql);
            // $result = $query->fetchAll();
            // return $result;
        }
    }

?>