<?php
// app/controllers/HomeController.php
// require_once './app/models/industryModel.php';

class homepage extends DController {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        // Code hiển thị trang chủ
        require_once './app/views/homepage.php';
    }

    public function viewIndustry($industry_id) {
        // Load view homepage
        $industryModel = $this->load->model('industryModel');

        // Lấy thông tin theo ID từ model
        $industry = $industryModel->industrybyid($industry_id); 
        
        // Kiểm tra xem dữ liệu có tồn tại hay không
        if (empty($industry)) {
            // Nếu không có sản phẩm, chuyển đến trang lỗi hoặc thông báo không tìm thấy
            $data['message'] = "Công việc không tồn tại!";
        } else {
            // Truyền dữ liệu sản phẩm vào view
            $data['industry'] = $industry;
        }

        //Truyền dữ liệu từ controllers sang view
        $this->load->view('homepage', $data);
    }

    public function getIndustries() {
        $industryModel = $this->load->model('industryModel');
        $industry = 'industry';
        $industry_id = 1;
        // $data['industrybyid'] = $industryModel->industrybyid($industry, $industry_id);
        // $this->load->view('industrybyid', $data);
    }

    public function notfound() {
        $this->load->view('404');
    }
}