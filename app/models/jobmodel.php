<?php 

class jobmodel extends DModel {

    public function __construct() {
        parent::__construct();
    }
    public function job($table_jobs) {
        $sql = "select * from " . $table_jobs;
        return $this->db->select($sql);
    }
    public function countjob($table_jobs) {
        $sql = "SELECT 
                COUNT($table_jobs.job_id) AS total_jobs,
                SUM(CASE WHEN applications.status = 'rejected' THEN 1 ELSE 0 END) AS total_rejected,
                SUM(CASE WHEN applications.status = 'accepted' THEN 1 ELSE 0 END) AS total_accepted,
                SUM(CASE WHEN applications.status = 'pending' THEN 1 ELSE 0 END) AS total_pending
                FROM $table_jobs
                LEFT JOIN applications ON jobs.job_id = applications.job_id;";
        return $this->db->select($sql);
    }
    public function topthreejob($table_jobs) {
        $sql = "SELECT *
                FROM jobs
                ORDER BY posted_date DESC
                LIMIT 3;
                ";
        return $this->db->select($sql);
    }
     
    public function jobbyid($table_jobs, $id) {
        $sql = "select * from " . $table_jobs . " where job_id =:id";
    
        $data = array(':id' => $id);
    
        return $this->db->select($sql, $data);
    }



    public function insertjob($table_jobs, $data) {
        return $this->db->insert($table_jobs, $data);
    }

}

