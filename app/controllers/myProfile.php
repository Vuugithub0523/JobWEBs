<?php
class myProfile extends DController {
    public function __construct() {
        parent::__construct();
    }

    // Hiển thị trang thông tin cá nhân
    public function myProfile() {
        session_start(); // Bắt đầu session

        // Giả lập thông tin người dùng trong session
        $_SESSION['current'] = [
            'user_id' => 1,
            'password' => '1',
            'email' => '1@123',
            'full_name' => 'VUVUVUV',
            'phone' => '1234567890',
            'date_of_birth' => '1990-01-01',
            'gender' => 'male',
            'rule' => 'applicant',
            'avatar' => 'https://iaslinks.org/wp-content/uploads/2020/09/anh-gau-truc-do.jpg'
        ];

        // Lấy thông tin người dùng từ session
        $user = $_SESSION['current'];

        // Truyền thông tin người dùng vào view
        $data['user'] = $user;

        // Hiển thị trang thông tin cá nhân
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

        // Kiểm tra xem người dùng có upload ảnh không
        if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
            $avatarPath = $this->uploadAvatar($_FILES['avatar']);
            if ($avatarPath) {
                $data['avatar'] = $avatarPath;
            }
        }

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

    // Hàm upload ảnh đại diện
    private function uploadAvatar($file) {
        $uploadDir = 'public/img/'; // Thư mục lưu ảnh
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxSize = 5000000; // 5MB

        // Kiểm tra loại tệp
        if (!in_array($file['type'], $allowedTypes)) {
            return false;
        }

        // Kiểm tra kích thước tệp
        if ($file['size'] > $maxSize) {
            return false;
        }

        // Đặt tên tệp ảnh mới
        $fileName = uniqid('avatar_') . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
        $filePath = $uploadDir . $fileName;

        // Di chuyển tệp từ tạm thời đến thư mục upload
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            return $filePath;  // Trả về đường dẫn file ảnh
        }

        return false;
    }
}
?>
