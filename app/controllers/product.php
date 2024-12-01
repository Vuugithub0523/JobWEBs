<?php
class product extends DController{
    public function __construct() {
        parent::__construct();
    }

    public function product_detail(){
        echo 'Chi tiết sản phẩm';
    }
}