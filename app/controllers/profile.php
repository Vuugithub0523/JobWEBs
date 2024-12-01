<?php 

class post extends DController{
    public function __construct(){
        parent::__construct();
    }

    public function recruiter() {
        $this->load->view('recruiter');
    }

}