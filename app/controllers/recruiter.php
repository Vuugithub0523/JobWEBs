<?php
class recruiter extends DController{
        public function __construct() {
        $data = array();
        $message = array();
        
        parent::__construct();
    }

    public function list_job() {
        $this->load->view('header');

        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'jobs';
        $data['job'] = $jobmodel->job($table_jobs);

        $this->load->view('job', $data);
        $this->load->view('footer');
    }
    public function list_recruiter() {

        $jobmodel = $this->load->model('jobmodel');
        $company = $this->load->model('company');

        $table_jobs = 'jobs';
        $table_company = 'companies';
        $id = 1;

        $data['countjob'] = $jobmodel->countjob($table_jobs);
        $data['list_company'] = $company->list_company($table_company, $id);
        $data['topthreejob'] = $jobmodel->topthreejob($table_jobs);

        $this->load->view('recruiter', $data);
    }
    
    public function jobbyid() {
        $this->load->view('header');
        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'jobs';
        $id = 1;
        $data['jobbyid'] = $jobmodel->jobbyid($table_jobs, $id);
        $this->load->view('jobbyid', $data);
        $this->load->view('footer');
    }

    public function insertjob() {
        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'jobs';

        $recruiter_id = $_POST['recruiter_id'];
        $job_title = $_POST['job_title'];
        $job_type_id = $_POST['job_type_id'];
        $category_id = $_POST['category_id'];
        $status = $_POST['status'];
        $level = $_POST['level'];
        $job_description = $_POST['job_description'];
        $responsibilities = $_POST['responsibilities'];
        $requirements = $_POST['requirements'];
        $location = $_POST['location'];
        $benefit_id = $_POST['benefit_id'];
        $salary = $_POST['salary'];
        $posted_date = $_POST['posted_date'];
        $deadline = $_POST['deadline'];
        $required_candidates = $_POST['required_candidates'];
        $total_applied = $_POST['total_applied'];

        $data = array(
            'recruiter_id' => $recruiter_id,
            'job_title' => $job_title,
            'job_type_id' => $job_type_id,
            'category_id' => $category_id,
            'status' => $status,
            'level' => $level,
            'job_description' => $job_description,
            'responsibilities' => $responsibilities,
            'requirements' => $requirements,
            'location' => $location,
            'benefit_id' => $benefit_id,
            'salary' => $salary,
            'posted_date' => $posted_date,
            'deadline' => $deadline,
            'required_candidates' => $required_candidates,
            'total_applied' => $total_applied
        );

        $result = $jobmodel->insertjob($table_jobs, $data);
        
        if($result == 1) {
            $message['msg'] = 'Thêm thành công'; 
        }else {
            $message['msg'] = 'Thêm thất bại'; 
        }
        $this->load->view('addjob', $message);
    }

    public function addjob() {
        $this->load->view('addjob');
    }
}
