<?php
// File: config/database.php

return [
    'host' => 'localhost',         // Tên máy chủ database (thường là localhost khi phát triển trên máy tính cá nhân)
    'dbname' => 'job_search',       // Tên database của dự án
    'username' => 'root',           // Tên người dùng database (mặc định là root trong XAMPP/WAMP)
    'password' => '',               // Mật khẩu của người dùng database (thường để trống khi phát triển trên máy cá nhân)
    'charset' => 'utf8mb4',         // Bộ mã ký tự, dùng utf8mb4 để hỗ trợ tiếng Việt và biểu tượng emoji
];
