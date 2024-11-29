<?php
class ErrorController extends DController{

    public function __construct() {
        $data = array();
        
        parent::__construct();
    }
    public function notFound() {
        $this->load->view('404');
    }
}
