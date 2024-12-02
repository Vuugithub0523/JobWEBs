<?php
// app/controllers/HomeController.php
// require_once './app/models/industryModel.php';

class homepage extends DController {
    public function __construct() {
        parent::__construct();
    }
    
    //Phương thức index để hiển thị trang chủ
    public function index() {
        // Load model industryModel để lấy danh sách ngành
        $industryModel = $this->load->model('industryModel');

        // Lấy danh sách ngành từ model
        $industries = $industryModel->getIndustries();

        if (!empty($industries)) {
            foreach ($industries as &$industry) {
                // Kiểm tra xem mỗi phần tử có chứa 'industry_id' không
                if (isset($industry['industry_id'])) {
                    // Gọi hàm countJobsByIndustry để đếm số lượng công việc theo industry_id
                    $industry['job_count'] = $industryModel->countJobsByIndustry($industry['industry_id']);
                } else {
                    // Nếu không có 'industry_id', có thể báo lỗi hoặc xử lý trường hợp này
                    echo "Missing 'industry_id' in industry data!";
                }
            }
        } else {
            echo "No industries found!";
        }
        // Truyền dữ liệu ngành vào view
        $data['industries'] = $industries;

        // Load view homepage và truyền dữ liệu ngành
        $this->load->view('homepage', $data);
    }

    //Phương thức viewIndustry để hiển thị thông tin một ngành theo ID
    public function viewIndustry($industry_id) {
        // Load view homepage
        $industryModel = $this->load->model('industryModel');

        // Lấy thông tin theo ID từ model
        $industry = $industryModel->industrybyid($industry_id); 
        
        // Kiểm tra xem dữ liệu có tồn tại hay không
        if (empty($industry)) {
            // Nếu không có ngành, thông báo lỗi
            $data['message'] = "Công việc không tồn tại!";
        } else {
            // Truyền dữ liệu ngành vào view
            $data['industry'] = $industry;
        }

        //Load view homepage và truyền dữ liệu ngành
        $this->load->view('homepage', $data);
    }

    // Phương thức industrybyid (nếu cần) để lấy thông tin một ngành theo ID
    public function industrybyid() {
        $this->load->view('header');
        $industryModel = $this->load->model('industryModel');
        $industry = 'industry';
        $industry_id = 1;
        $data['industrybyid'] = $industryModel->industrybyid($industry, $industry_id);
        $this->load->view('industrybyid', $data);
        $this->load->view('footer');
    }

    public function notfound() {
        $this->load->view('404');
    }
}
?>