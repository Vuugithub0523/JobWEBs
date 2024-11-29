<?php 

class post extends DController{
    public function __construct(){
        parent::__construct();
    }

    public function product_post() {
        echo 'Chi tiết bài viết';
    }
}