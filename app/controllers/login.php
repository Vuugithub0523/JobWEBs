<?php
session_start();

class login extends DController{
    public function __construct(){
        parent::__construct();
    }

    public function login(){
        $model = $this->load->model('loginModel');
        $data['user'] = $model->getUser(); // Lấy thông tin người dùng từ database

        if (isset($_POST['logIn'])) { // Kiểm tra nếu form đăng nhập đã được gửi
            foreach ($data['user'] as $value) {
                // Kiểm tra email và mật khẩu
                if ($value['email'] == $_POST['rg-email'] && $value['password'] == md5($_POST['rg-password'])) {
                   
                    $_SESSION['current'] = [
                        'user_id' => $value['user_id'],
                        'email' => $value['email'],
                        'full_name' => $value['full_name'],
                        'phone' => $value['phone'],
                        'avatar' => $value['avatar'],
                        'role' => $value['role'] // Lưu role để chuyển hướng đúng
                    ];

                    // Sau khi đăng nhập thành công, chuyển hướng đến trang myProfile và truyền user_id qua URL
                    header('Location: ' . BASE_URL . '/myProfile/myProfile?id=' . $value['user_id']);
                    exit();
                }
            }

            // Nếu không tìm thấy tài khoản hợp lệ
            echo("<script>alert('Không tìm thấy tài khoản hợp lệ!');</script>");
        }

        // Nếu đăng nhập không thành công, hiển thị lại trang đăng nhập
        $this->load->view('login');
    }
}
?>
