<?php
// app/controllers/HomeController.php

class jobDescription extends DController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Load view myApplications
        require_once './app/views/jobDescription.php';
    }
}

?>