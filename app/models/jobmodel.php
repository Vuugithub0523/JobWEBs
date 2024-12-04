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
                SUM(CASE WHEN applications.application_status = 'rejected' THEN 1 ELSE 0 END) AS total_rejected,
                SUM(CASE WHEN applications.application_status = 'accepted' THEN 1 ELSE 0 END) AS total_accepted,
                SUM(CASE WHEN applications.application_status = 'pending' THEN 1 ELSE 0 END) AS total_pending
                FROM $table_jobs
                LEFT JOIN applications ON jobs.job_id = applications.job_id;";
        return $this->db->select($sql);
    }

    public function list_all_job($table_jobs) {
        $sql = "SELECT 
                j.*,
                jt.job_type_name AS Job_Type,
                COUNT(a.application_id) AS Accepted_Applicants
                FROM jobs j
                JOIN job_types jt ON j.job_type_id = jt.job_type_id
                LEFT JOIN applications a ON j.job_id = a.job_id AND a.application_status = 'accepted'
                GROUP BY j.job_id
                ORDER BY j.job_posted_date DESC;";
        return $this->db->select($sql);
    }
    

    public function topthreejob($table_jobs) {
        $sql = "SELECT *
                FROM jobs
                ORDER BY job_posted_date DESC
                LIMIT 3;
                ";
        return $this->db->select($sql);
    }
     
    // public function jobbyid($table_jobs, $id) {
    //     $sql = "select * from " . $table_jobs . " where job_id =:id";
    
    //     $data = array(':id' => $id);
    
    //     return $this->db->select($sql, $data);
    // }

    // public function userbyid($table_users, $id) {
    //     if (!is_numeric($id)) {
    //         throw new Exception("Invalid ID");
    //     }
    //     $sql = "SELECT users.full_name, users.email, users.phone 
    //             FROM $table_users 
    //             WHERE $table_users.user_id = :id";
    //     $data = [':id' => $id];
    
    //     // Debug
    //     $result = $this->db->select($sql, $data);
    //     if (empty($result)) {
    //         die("Không có thông tin người dùng trong database.");
    //     }
    
    //     return $result;
    // }

    public function jobbyid($table_jobs, $id) {
        if (!is_numeric($id)) {
            throw new Exception("Invalid ID");
        }
        $sql = "SELECT 
                j.*,
                a.application_status AS application_status,
                a.application_id AS application_id,
                u.full_name AS applicant_name,
                a.apply_at AS application_date,
                COUNT(a.application_id) OVER (PARTITION BY j.job_id) AS total_applicants
                FROM 
                $table_jobs j
                LEFT JOIN applications a ON j.job_id = a.job_id
                LEFT JOIN users u ON a.user_id = u.user_id
                LEFT JOIN job_type jt ON j.job_type_id = jt.job_type_id
                WHERE 
                j.job_id = :id";
        $data = [':id' => $id];
        
        return $this->db->select($sql, $data);
    }
    
    public function applicantbyjobid($table_jobs, $id) {
        if (!is_numeric($id)) {
            throw new Exception("Invalid ID");
        }
        $sql = "SELECT 
                    a.application_id,
                    u.full_name AS candidate_name,
                    j.job_title,
                    a.apply_at AS application_date,
                    u.phone as phone_number,
                    u.email as email_address,
                    a.cv AS cv_file
                FROM 
                    $table_jobs a
                JOIN 
                    users u ON a.user_id = u.user_id
                JOIN 
                    jobs j ON a.job_id = j.job_id
                WHERE
                    a.application_id = :id";
        $data = [':id' => $id];
    
        return $this->db->select($sql, $data);
    }
    
    public function insertjob($table_jobs, $data) {
        return $this->db->insert($table_jobs, $data);
    }

    public function updatejob($table_jobs, $data, $condition) {
        return $this->db->update($table_jobs, $data, $condition);
    }

    public function deletejob($table_jobs, $condition) {
        return $this->db->delete($table_jobs, $condition);
    }

}

