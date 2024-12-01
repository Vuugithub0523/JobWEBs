<?php
class profileModel extends DModel {
    public function __construct() {
        parent::__construct();
    }

    // Lấy thông tin người dùng từ bảng `users`
    public function getUserInfo($user_id) {
        $sql = "SELECT * FROM users WHERE user_id = :user_id";
        $data = [':user_id' => $user_id];
        return $this->db->select($sql, $data); // Kết quả phải trả về mảng
    }
    

    // Cập nhật thông tin người dùng
    public function updateUserInfo($data, $user_id) {
        $table = "users";
        $where = "user_id = $user_id";
        return $this->db->update($table, $data, $where);
    }    
}
?>
