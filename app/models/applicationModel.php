<?php 

class applicationModel extends DModel {

    public function __construct() {
        parent::__construct();
    }
    public function application($user_id) {
        $sql = "select companies.company_name, companies.logo, jobs.job_title, applications.apply_at, applications.status 
                from applications
                join jobs on applications.job_id = jobs.job_id
                join users on jobs.user_id = users.user_id
                join companies on users.user_id = companies.user_id
                where applications.user_id = :user_id
                ";
        $data = [':user_id' => $user_id];
        return $this->db->select($sql, $data);
    }


}
?>