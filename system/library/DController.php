<?php
//class này giúp quản lý việc tải (load) các thành phần khác trong ứng dụng như models, views
class DController {
    protected $load;

public function __construct() {
    $this->load = new Load();
}

}