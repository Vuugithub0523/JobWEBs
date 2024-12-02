<?php
// app/controllers/HomeController.php

class myApplications extends DController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Load view myApplications
        require_once './app/views/myApplications.php';
    }
}

?>