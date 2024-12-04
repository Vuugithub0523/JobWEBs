<?php
// app/controllers/HomeController.php

class jobDescription extends DController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (isset($_GET['job_id'])) {
            $job_id = $_GET['job_id'];
    
            // Load model jobmodel để lấy thông tin công việc
            $jobModel = $this->load->model('jobmodel');
    
            // Lấy thông tin công việc theo job_id
            $job = $jobModel->getJobById($job_id);
    
            if ($job) {
                // Lấy industry_id của công việc
                $industry_id = $job[0]['industry_id']; // Giả sử trong bảng jobs hoặc companies có industry_id
    
                // Truyền dữ liệu công việc vào view
                $data['job'] = $job[0];
                
                // Gọi hàm getSimilarJobs để lấy các công việc cùng ngành nghề
                $similarJobs = $jobModel->getSimilarJobs($industry_id);
                $data['similarJobs'] = $similarJobs; // Lưu các công việc tương tự vào biến dữ liệu
            } else {
                $data['error'] = "No job found!";
            }
        } else {
            $data['error'] = "No job selected!";
        }
    
        // Load view jobDescription và truyền dữ liệu công việc
        $this->load->view('jobDescription', $data);
    }
    
}

?>