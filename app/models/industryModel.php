<?php 

class industryModel extends DModel {

    public function __construct() {
        parent::__construct();
    }

    public function industry($industry) {
        $sql = "select * from " . $industry;
        return $this->db->select($sql);
    }

    public function getIndustryJobCount($industryName) {
        $sql = "SELECT COUNT(*) AS job_count FROM jobs WHERE industry_name = '$industryName'";
        return $this->db->select($sql);  // Trả về số lượng công việc trong ngành
    }
    
    

    public function getIndustries() {
        $sql = "SELECT industry_name FROM industry";
        return $this->db->select($sql);  // Giả sử phương thức `select` trả về một mảng kết quả
    }
}
?>