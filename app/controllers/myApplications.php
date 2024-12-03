<?php
// app/controllers/HomeController.php

class myApplications extends DController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $profileModel = $this->load->model('profileModel');
        $applicationModel = $this->load->model('applicationModel');
        
        $user_id = 1; // Giả sử ID người dùng hiện tại là 1

        // Lấy thông tin từ model
        $data['user_info'] = $profileModel->getUserInfo($user_id); 
        $data['applications'] = $applicationModel->application($user_id); 
        
        $this->load->view('myApplications', $data); // Truyền dữ liệu sang view
    }
}

?>