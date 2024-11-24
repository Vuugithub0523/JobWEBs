<?php
class company extends DController{
        public function __construct() {
        $data = array();
        
        parent::__construct();
    }

    public function list_company() {
        $this->load->view('header');

        $companymodel = $this->load->model('companymodel');
        $table_companies = 'companies';
        $data['company'] = $companymodel->company($table_companies);

        $this->load->view('company', $data);
        $this->load->view('footer');
    }
    public function companybyid() {
        $this->load->view('header');

        $companymodel = $this->load->model('companymodel');

        $id = 2;

        $table_companies = 'companies';
        $data['companybyid'] = $companymodel->compbyid($table_companies, $id);

        $this->load->view('companybyid', $data);
        $this->load->view('footer');
    }
}
