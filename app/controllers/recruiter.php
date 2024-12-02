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

    public function recruiter() {
        $jobmodel = $this->load->model('jobmodel');
        $company = $this->load->model('company');
        $recruitermodel = $this->load->model('recruitermodel');


        $table_jobs = 'jobs';
        $table_users = 'users';
        $company_id = 1;
        $user_id = 3;
        $table_company = 'companies';

        $data['countjob'] = $jobmodel->countjob($table_jobs);
        $data['list_all_job'] = $jobmodel->list_all_job($table_jobs);
        $data['list_company'] = $company->list_company($table_company, $company_id);
        $data['topthreejob'] = $jobmodel->topthreejob($table_jobs);
        $data['userbyid'] = $recruitermodel->userbyid($table_users, $user_id);
        
        $this->load->view('recruiter', $data);
    }
    public function jobbyid() {
        $id = $_GET['id'];
        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'jobs';
        $data['jobbyid'] = $jobmodel->jobbyid($table_jobs, $id);
        $this->load->view('applicant_list', $data);
    }
    public function applicantbyjobid() {
        $id = $_GET['id'];

        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'applications';

        $data['applicantbyjobid'] = $jobmodel->applicantbyjobid($table_jobs, $id);
        $this->load->view('applicant_detail', $data);
    }  

    public function insertjob() {
        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'jobs';
        $user_id = $_POST['user_id'];
        $job_title = $_POST['job_title'];
        $job_type_id = $_POST['job_type_id'];
        $status = $_POST['status'];
        $level_id = $_POST['level_id'];
        $job_description = $_POST['job_description'];
        $responsibilities = $_POST['responsibilities'];
        $requirements = $_POST['requirements'];
        $location = $_POST['location'];
        $job_benefit = $_POST['job_benefit'];
        $salary = $_POST['salary'];
        $posted_date = $_POST['posted_date'];
        $deadline = $_POST['deadline'];
        $required_candidates = $_POST['required_candidates'];
        $total_applied = $_POST['total_applied'];

        $data = array(
            'user_id' => $user_id,
            'job_title' => $job_title,
            'job_type_id' => $job_type_id,
            'status' => $status,
            'level_id' => $level_id,
            'job_description' => $job_description,
            'responsibilities' => $responsibilities,
            'requirements' => $requirements,
            'location' => $location,
            'job_benefit' => $job_benefit,
            'salary' => $salary,
            'posted_date' => $posted_date,
            'deadline' => $deadline,
            'required_candidates' => $required_candidates,
            'total_applied' => $total_applied
        );

        $result = $jobmodel->insertjob($table_jobs, $data);
        
        
    }
    public function updatejob() {
        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'jobs';

        $user_id = 2;
        $job_title = 'Fullstack Developer intern';
        $job_type_id = 1;
        $industry_id = 4;
        $status = 'close';
        $level_id = 1;
        $job_description = 'Develop software solutions.';
        $responsibilities = 'Code, test, and debug.';
        $requirements = 'JavaScript, Git.';
        $location = 'Da Nang';
        $job_benefit = 'Health Insurance, Gym Membership';
        $salary = 1500;
        $posted_date = '2024-11-25 10:04:03';
        $deadline = '2024-12-31';
        $required_candidates = 2;
        $total_applied = 0;
        // $recruiter_id = $_POST['recruiter_id'];
        // $job_title = $_POST['job_title'];
        // $job_type_id = $_POST['job_type_id'];
        // $category_id = $_POST['category_id'];
        // $status = $_POST['status'];
        // $level = $_POST['level'];
        // $job_description = $_POST['job_description'];
        // $responsibilities = $_POST['responsibilities'];
        // $requirements = $_POST['requirements'];
        // $location = $_POST['location'];
        // $benefit_id = $_POST['benefit_id'];
        // $salary = $_POST['salary'];
        // $posted_date = $_POST['posted_date'];
        // $deadline = $_POST['deadline'];
        // $required_candidates = $_POST['required_candidates'];
        // $total_applied = $_POST['total_applied'];

        $id = 1;
        $condition = "$table_jobs.job_id = '$id'";
        $data = array(
            'user_id' => $user_id,
            'job_title' => $job_title,
            'job_type_id' => $job_type_id,
            'industry_id' => $industry_id,
            'status' => $status,
            'level_id' => $level_id,
            'job_description' => $job_description,
            'responsibilities' => $responsibilities,
            'requirements' => $requirements,
            'location' => $location,
            'job_benefit' => $job_benefit,
            'salary' => $salary,
            'posted_date' => $posted_date,
            'deadline' => $deadline,
            'required_candidates' => $required_candidates,
            'total_applied' => $total_applied
        );

        $result = $jobmodel->updatejob($table_jobs, $data, $condition);
        
        if($result == 1) {
            echo 'Cập nhật thành công'; 
        }else {
            echo 'Cập nhật thất bại'; 
        }
    }

    public function deletejob() {
        $jobmodel = $this->load->model('jobmodel');
        $table_jobs = 'jobs';

        $condition ="job_id = 1";


        $result = $jobmodel->deletejob($table_jobs, $condition);
        
        if($result == 1) {
            echo 'Xoá thành công'; 
        }else {
            echo 'Xoá thất bại'; 
        }
    }

    public function addjob() {
        $this->load->view('addjob');
    }
}
