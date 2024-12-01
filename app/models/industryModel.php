<?php 

class industryModel extends DModel {

    public function __construct() {
        parent::__construct();
    }

    public function industry($industry) {
        $sql = "select * from " . $industry;
        return $this->db->select($sql);
    }

    // public function getIndustryByID($industry_id) {
    //     $sql = "SELECT * FROM industry WHERE industry_id = :industry_id";//Truy vấn lấy dữ liệu theo ID
    //     $data = [':industry_id' => $industry_id]; //Truyền dữ liệu vào câu truy vấn
    //     return $this->db->select($sql, $data); // Kết quả phải trả về mảng
    // }

    public function countIndustry($industryName) {
        // Tạo câu lệnh SQL để đếm số lượng ngành
        $sql = "SELECT COUNT(*) AS total_industries
                FROM $industryName
                WHERE industry_name = '$industryName'";
    
        // Thực hiện câu truy vấn và trả về kết quả
        return $this->db->select($sql);
    }
    

    public function getIndustries() {
        $sql = "SELECT industry_id, industry_name FROM industry";
    return $this->db->select($sql); // Trả về mảng các ngành
    }


    // // Cập nhật thông tin người dùng
    // public function updateIndustryInfo($data, $industry_id) {
    //     $table = "industry";
    //     $where = "industry_id = $industry_id";
    //     return $this->db->update($table, $data, $where);
    // }  

    public function countJobsByIndustry($industry_id) {
        $sql = "SELECT COUNT(*) AS total_jobs
                FROM jobs
                WHERE industry_id = :industry_id";
        $data = [':industry_id' => $industry_id]; // Dữ liệu cần truyền vào
        $result = $this->db->select($sql, $data); // Thực hiện truy vấn
        return $result ? $result[0]['total_jobs'] : 0; // Trả về số lượng công việc
    }
}
?>