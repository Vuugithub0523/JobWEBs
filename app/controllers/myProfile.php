<?php
class myProfile extends DController {
    public function __construct() {
        parent::__construct();
    }

    // Hiển thị trang thông tin cá nhân
    public function myProfile() {
        $profileModel = $this->load->model('profileModel');
        $user_id = 1; // Giả sử ID người dùng hiện tại là 1

        // Lấy thông tin từ model
        $data['user'] = $profileModel->getUserInfo($user_id); 
        
        $this->load->view('myProfile', $data); // Truyền dữ liệu sang view
    }

    // Cập nhật thông tin cá nhân
    public function updateProfile() {
        $profileModel = $this->load->model('profileModel');
        $user_id = 1; // Giả sử ID người dùng hiện tại là 1
    
        // Thu thập dữ liệu từ form
        $data = [
            'full_name' => $_POST['fullname'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'date_of_birth' => $_POST['birthday'],
            'gender' => $_POST['gender']
        ];
    
        // Gọi model để cập nhật thông tin
        $result = $profileModel->updateUserInfo($data, $user_id);
    
        // Kiểm tra kết quả và phản hồi
        if ($result) {
            $message['msg'] = "Cập nhật thông tin thành công!";
        } else {
            $message['msg'] = "Cập nhật thông tin thất bại!";
        }
    
        // Gửi lại dữ liệu về view
        $data['user'] = $profileModel->getUserInfo($user_id);
        $this->load->view('myProfile', $data);
    }
}
?>
