<?php 

class recruitermodel extends DModel {

    public function __construct() {
        parent::__construct();
    }

    // public function userbyid($table_users, $id) {
    //     if (!is_numeric($id)) {
    //         throw new Exception("Invalid ID");
    //     }
    //     $sql = "SELECT full_name, phone, email FROM $table_users WHERE user_id = :id";
    //     $data = [':id' => $id];
    //     return $this->db->select($sql, $data);
        
    // }

    public function userbyid($table_users, $id) {
        if (!is_numeric($id)) {
            throw new Exception("Invalid ID");
        }
        $sql = "SELECT $table_users.full_name, $table_users.email, $table_users.phone 
                FROM $table_users 
                WHERE $table_users.user_id = :id";
        $data = [':id' => $id];
    
        // Debug
        $result = $this->db->select($sql, $data);
        if (empty($result)) {
            die("Không có thông tin người dùng trong database.");
        }
        return $result;
    }
    

    // public function userbyid($table_users, $id) {
    //     if (!is_numeric($id)) {
    //         throw new Exception("Invalid ID");
    //     }
    //     $sql = "SELECT users.full_name, users.email, users.phone FROM $table_users WHERE $table_users.user_id = :id";
    //     $data = [':id' => $id];
    
    //     // Kiểm tra kết quả trả về từ database
    //     $result = $this->db->select($sql, $data);
    //     if (empty($result)) {
    //         die("Không tìm thấy dữ liệu cho ID = $id.");
    //     }
    
    //     return $result;
    // }
    
    
}

