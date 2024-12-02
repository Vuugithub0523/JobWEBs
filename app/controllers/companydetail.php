<?php
class companydetail extends DController{
    public function __construct(){
        $data=array();
        parent::__construct();
    }
    public function companydetail($name){
        if($name){
            $name = trim($name);
            $model=$this->load->model('companydetailmodule');
            $data['company']=$model->getCompany($name);
            if(count($data['company'])!=1){
                echo("error");
            }else{
                $idU=$data['company'][0]['user_id'];
                $data['job']=$model->getJob($idU);
                $data['industry']=$model->getIndustry();
                $data['technologies']=$model->getTechnologies($data['company'][0]['industry_id']);
                $data['job_type']=$model->getJob_Type();
                $this->load->view('companydetail',$data);
            }
        }else{
            echo("Không có tham số truyền vào");
        }
    }
}
?>