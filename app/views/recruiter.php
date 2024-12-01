<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Reset */
* {
    margin: 0;
    padding: 0;
    border: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

.profile-container {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    min-height: 100vh;
}

.personal-info {
    display: none;
}



/* CSS basic info */

.basic_info {
    border-bottom: solid 1px #868686;
}

.basic_info h3{
    padding-bottom: 24px;
    padding-top: 24px;
}

.basic_info p{
    padding-bottom: 28px;
    color: #666f81;
}

.form_basic_info {
    padding-bottom: 16px;
    border-bottom: solid 1px #868686;
}

.form_company_info {
    padding-top: 16px;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background-color: #f8f8fd;
    border-right: 1px solid #ddd;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    justify-content: space-between;
    padding: 20px;
}

.sidebar .logo {
    font-size: 20px;
    font-weight: bold;
    color: #000;
}

.sidebar .menu ul {
    list-style: none;
    margin-top: 20px;
}

.sidebar .menu ul li {
    margin-bottom: 15px;
}

.sidebar .menu ul li a {
    text-decoration: none;
    color: #000;
    display: block;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

/* CSS icon bên trái */

.menu a i {
    margin-right: 8px;
    color: #000;
  }

.sidebar .menu ul li.active a,
.sidebar .menu ul li a:hover
{
    background-color: #e9ebfd;
    color: #4640de;
}

.sidebar .menu ul li.active a i,
.sidebar .menu ul li a:hover i {
    color: #4640de;
}

.logout {
    margin-top: auto;
    text-align: center;
}

.logout button {
    background-color: #e74c3c;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}

.logout button:hover {
    background-color: #c0392b;
}

.logout .user-info {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.logout .user-info img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
}

/* Main Content */
.main-content {
    flex: 1;
    padding: 20px;
    background-color: #fff;
    min-width: 0; /* Tránh tràn nội dung */
    overflow-x: hidden;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 26px;
    border-bottom: solid 1px #868686;
}

.header h1 {
    font-size: 24px;
}

.header .btn-back {
    text-decoration: none;
    color: #4640de;
    padding: 8px 16px;
    border: 1px solid #dfdff9;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.header .btn-back:hover {
    background-color: #4640de;
    color: #fff;
}

.form-section {
    max-width: 800px;
    margin: 0 auto;
}

.form-section h2 {
    margin-bottom: 15px;
    color: #000;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

textarea {
    resize: vertical;
}

.btn-save {
    background-color: #4640de;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-save:hover {
    background-color: #fff;
    color: #4640de;
    border: #868686 1px solid;
}

/* Responsive */
@media (max-width: 768px) {
    .profile-container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        border-right: none;
        border-bottom: 1px solid #ddd;
    }

    .main-content {
        flex: none; /* Không tự giãn */
        width: 100%; /* Chiếm toàn bộ chiều rộng */
    }

    .dashboard-stats {
        grid-template-columns: 1fr; /* Một cột cho màn hình nhỏ */
    }

}

/* CSS Nhà tuyển dụng */


.avatar-container {
    padding-top: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
  }

  .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    border: 2px solid #ddd;
  }

  .avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .upload-box {
    width: 308px;
    height: 100px;
    border: 2px dashed #007bff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #6c757d;
    cursor: pointer;
    border-radius: 8px;
  }

  .upload-box:hover {
    border-color: #0056b3;
    color: #0056b3;
  }

  .upload-box input {
    display: none;
  }

  .upload-box svg {
    width: 24px;
    height: 24px;
    margin-bottom: 8px;
    fill: #007bff;
  }

  .upload-box span {
    font-size: 14px;
  }

/* CSS Dashboard */

#dashboard {
    display: block;
}

/* Header Styles */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.header h1 {
    font-size: 1.8rem;
    color: #007BFF;
}


/* Stats Section */
.dashboard-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Cột tự điều chỉnh */
    gap: 20px;
    margin-bottom: 20px;
}

.stat-item {
    padding: 15px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.stat-item h3 {
    margin-bottom: 10px;
    color: #333;
}

.stat-item p {
    font-size: 1.5rem;
    color: #007BFF;
}

/* Card Styles */

.company-info p {
    margin-bottom: 10px;
}
.card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card h2 {
    margin-bottom: 15px;
    color: #007BFF;
}

.card ul {
    list-style: none;
    padding: 0;
}

.card ul li {
    margin-bottom: 10px;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .dashboard-stats {
        grid-template-columns: 1fr;
    }
}

/* CSS Danh sách công việc */

.job-list-section {
    display: none;
    margin-top: 20px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.job-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.job-header h2 {
    font-size: 20px;
    color: #333;
}
.btn-add-job {
    background-color: #4a90e2;
    color: #fff;
    border: none;
    padding: 10px 16px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}
.btn-add-job:hover {
    background-color: #357ab8;
}
.job-table {
    width: 100%;
    border-collapse: collapse;
}
.job-table th, .job-table td {
    text-align: left;
    padding: 10px 12px;
    border-bottom: 1px solid #ddd;
}
.job-table th {
    background-color: #f5f5f5;
    color: #333;
    font-weight: bold;
}
.job-table tr {
    background-color: #f9f9f9;
    height: 60px;
}
.job-table tr:hover {
    background: #e9ecef;
}

.job-table .job-title a {
    text-decoration: none;
    color: #000;
}
.job-table .job-title a:hover {
    color: #347ab8;
}

.badge {
    display: inline-block;
    padding: 8px;
    width: 94px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    background-color: transparent;
}


/* Với các trạng thái cụ thể */
.badge.open {
    color: #34a853;
    border: 1px solid #34a853;
}
.badge.fulltime {
    color: #4a90e2;
    border: 1px solid #4a90e2;
}
.badge.freelance {
    color: #fbbc05;
    border: 1px solid #fbbc05;
}
.badge.closed {
    color: #ea4335;
    border: 1px solid #ea4335;
}

/* CSS cho phần danh sách ứng viên */

.profile-section {
    margin: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }
  
  .job-header h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  .job-header p {
    font-size: 16px;
    color: #6c757d;
  }
  
  .applicant-info {
    margin: 15px 0;
    font-size: 18px;
    font-weight: bold;
  }
  
  .applicant-info span {
    color: #4caf50;
  }
  
  .applicant-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }
  
  .applicant-table th,
  .applicant-table td {
    padding: 15px;
    text-align: left;
  }
  
  .applicant-table thead th {
    background: #f8f9fa;
    color: #495057;
    text-transform: uppercase;
    font-size: 14px;
  }

  
  .applicant-table tbody tr:hover {
    background: #e9ecef;
  }
  
  
  .badge.reviewing {
    color: #fbbc05;
    border: 1px solid #fbbc05;
  }
  
  .badge.accepted {
    color: #34a853;
    border: 1px solid #34a853;
  }
  
  .badge.rejected {
    color: #ea4335;
    border: 1px solid #ea4335;  
  }
  
  .btn-view {
    background-color: #e9ebfd;
    color: #4640de;
    border: 1px solid #4640de;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
  }
  

/* CSS cho thông tin ứng viên */
.sidebar {
    width: 250px;
    background: #f4f4f4;
    padding: 20px;
    border-right: 1px solid #ddd;
}

.sidebar h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.sidebar nav ul {
    list-style: none;
    padding: 0;
}

.sidebar nav ul li {
    margin-bottom: 10px;
}

.sidebar nav ul li a {
    text-decoration: none;
    color: #333;
}

.main-content {
    flex: 1;
    padding: 20px;
}

/* Applicant List */
.applicant-list table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.applicant-list th,
.applicant-list td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.applicant-list .view-btn {
    padding: 5px 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
}

/* Applicant Detail */
.applicant-detail {
    display: flex;
    flex-direction: column;
}

.detail-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.left-section {
    margin-top: 43.5px;
    width: 30%;
    text-align: center;
    border: 1px solid #ccc;
}

.left-section .avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 15px;
    margin-top: 24px;

}

.left-section .applied-info {
    font-weight: lighter;
    color: #ddd;
}

.left-section h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.left-section .contact-info {
    border-top: 1px solid #ccc;
    margin-top: 16px;
}
.left-section .contact-info h3 {
    margin-top: 16px;
    margin-bottom: 16px;
}

.left-section .contact-info p {
    margin: 5px 0;
}

.right-section {
    width: 65%;
}

.right-section h2 {
    margin-bottom: 15px;
    text-align: center;
}

.right-section img {
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.action-buttons {
    margin-top: 20px;
}

.action-buttons button {
    padding: 10px 15px;
    margin-right: 10px;
    border: none;
    cursor: pointer;
}

.accept-btn {
    background-color: #4caf50;
    color: white;
}

.reject-btn {
    background-color: #f44336;
    color: white;
}

    </style>
</head>
<body>
    <div class="profile-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">JobFunny</div>
            <nav class="menu">
                <ul>
                    <li><a href="#" id="home-button"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
                    <li><a href="#" id="job-list-button"><i class="fa-solid fa-file"></i>Danh sách công việc</a></li>
                    <li><a href="#" id="profile-button"><i class="fa-solid fa-user"></i>Hồ sơ của tôi</a></li>
                </ul>
            </nav>
            <div class="logout">
                <button>Đăng xuất</button>
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="Avatar">
                    <span>Luong Thong</span>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
         

        <main class="main-content">
            <div id="personal-info" class="profile-session" style="display: none;">
            <div class="header">
                <h1>Hồ sơ của tôi</h1>
                <a href="#" class="btn-back">Quay lại trang chủ</a>
            </div>
            <div class="basic_info">
                <h3>Thông tin cơ bản</h3>
                <p>Đây là thông tin cá nhân của bạn mà bạn có thể cập nhật bất kỳ lúc nào.</p>
            </div>
            <div class="form-section">
                <div class="avatar-container">
                <!-- Avatar Display -->
                    <div class="avatar">
                        <img src="https://via.placeholder.com/100" alt="Avatar" id="avatarImage">
                    </div>

                    <!-- Upload Box -->
                    <label class="upload-box" for="avatarInput">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 1 1-10 10A10 10 0 0 1 12 2m0-2a12 12 0 1 0 12 12A12 12 0 0 0 12 0Zm2 13h-4v4H8v-4H4v-2h4V7h2v4h4Z"/>
                        </svg>
                        <span>Nhấn để thay thế<br>hoặc kéo và thả<br>SVG, PNG, JPG hoặc GIF (tối đa. 400 x 400px)</span>
                        <input type="file" id="avatarInput" accept="image/*">
                    </label>
                </div>
                <form action="#" method="POST" class="form_basic_info">
                    <div class="form-group">
                        <label for="name">Họ và tên *</label>
                        <input type="text" id="name" name="name" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại *</label>
                        <input type="text" id="phone" name="phone" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" placeholder="Địa chỉ email">
                    </div>
                </form>
            
                <!-- Company Information -->
                <div class="card company-info">
                    <h3 class="card-header">Thông tin công ty</h3>
                    <form action="#" method="POST" class="card-content form_company_info">
                        <div class="form-group">
                            <label for="company-name">Tên công ty *</label>
                            <input type="text" id="company-name" name="company-name" placeholder="Tên công ty">
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo *</label>
                            <input type="file" id="logo" name="logo" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="website">Website *</label>
                            <input type="url" id="website" name="website" placeholder="Trang web">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ *</label>
                            <input type="text" id="address" name="address" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="employees">Số lượng nhân viên *</label>
                            <input type="number" id="employees" name="employees" placeholder="Số lượng nhân viên">
                        </div>
                        <div class="form-group">
                            <label for="industry">Ngành nghề *</label>
                            <input type="text" id="industry" name="industry" placeholder="Ngành nghề">
                        </div>
                        <div class="form-group">
                            <label for="founded">Ngày thành lập *</label>
                            <input type="date" id="founded" name="founded">
                        </div>
                        <div class="form-group">
                            <label for="technology">Công nghệ *</label>
                            <input type="text" id="technology" name="technology" placeholder="Công nghệ">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả *</label>
                            <textarea id="description" name="description" placeholder="Mô tả công ty"></textarea>
                        </div>
                        <button type="submit" class="btn-save">Lưu hồ sơ</button>
                    </form>
                </div>
            </div>
            </div>
            <div id="dashboard" class="profile-section">
                <div class="header">
                    <h1>Trang chủ</h1>
                </div>
                <?php 
    
                    foreach($countjob as $key => $value) {
                ?>
                <div class="dashboard-stats">
                    <div class="stat-item posted">
                        <h3>Tổng số lượng công việc đã đăng</h3>
                        <?php echo "<p id='total_jobs'>" . $value['total_jobs']. "</p>"; ?>
                    </div>
                    <div class="stat-item denied">
                        <h3>Số lượng công việc từ chối</h3>
                        <?php echo "<p id='total_rejected'>" . $value['total_rejected']. "</p>"; ?>
                    </div>
                    <div class="stat-item accepted">
                        <h3>Số lượng công việc đã chấp nhận</h3>
                        <?php echo "<p id='total_accepted'>" . $value['total_accepted']. "</p>"; ?>
                    </div>
                    <div class="stat-item pending">
                        <h3>Đang số lượng công việc chờ xử lí</h3>
                        <?php echo "<p id='total_pending'>" . $value['total_pending']. "</p>"; ?>
                    </div>
                </div>
                <?php
                    }
                ?>
                <div class="card company-info">
                    <h2>Company Information</h2>
                    <?php 
                        foreach($list_company as $key => $value) {
                    ?>
                    <p><strong>Name:</strong> <span id="company-name"><?php echo $value['company_name']; ?></span></p>
                    <p><strong>Address:</strong> <span id="company-address"><?php echo $value['company_address']; ?></span></p>
                    <p><strong>Founded:</strong> <span id="company-founded"><?php echo $value['founded_date']; ?></span></p>
                    <p><strong>Employees:</strong> <span id="company-employees"><?php echo $value['employee_count']; ?></span></p>
                    <?php
                        }
                    ?>
                </div>

                <!-- Upcoming Deadlines -->
                <div class="card deadlines">
                    <h2>Jobs Near Deadline</h2>
                    <ul id="deadline-list">
                    <?php 
                        foreach($topthreejob as $key => $value) {
                    ?>
                    <?php echo "<li><strong>" .$value['job_title'] . "</strong> - Deadline: <span>".  $value['deadline']. "</span></li>" ?>
                    <?php
                        }
                    ?>
                    </ul>
                </div>

                <!-- Job Performance Chart -->
                <div class="card performance">
                    <h2>Job Performance</h2>
                    <canvas id="jobPerformanceChart"></canvas>
                </div>
            </div>
            <div id="job-list" class="profile-section" style="display: none;">
                <div class="job-header">
                    <h2>Danh sách công việc</h2>
                    <p>Đây là trạng thái danh sách việc làm của bạn</p>
                    <button class="btn-add-job">+ Tạo việc mới</button>
                </div>
                <table class="job-table">
                    <thead>
                        <tr>
                            <th>Vai trò</th>
                            <th>Trạng thái</th>
                            <th>Ngày đăng tải</th>
                            <th>Ngày đến hạn</th>
                            <th>Loại công việc</th>
                            <th>Ứng viên</th>
                            <th>Nhu cầu</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="job-title"><a href="">Social Media Assistant</a></td>
                            <td><span class="badge open">Mở</span></td>
                            <td>20 - 10 - 2024</td>
                            <td>24 - 11 - 2024</td>
                            <td><span class="badge fulltime">Fulltime</span></td>
                            <td>19</td>
                            <td>4 / 11</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td class="job-title"><a href="">Social Media Assistant</a></td>
                            <td><span class="badge open">Mở</span></td>
                            <td>20 - 10 - 2024</td>
                            <td>24 - 11 - 2024</td>
                            <td><span class="badge freelance">Freelance</span></td>
                            <td>19</td>
                            <td>4 / 11</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td class="job-title"><a href="">Social Media Assistant</a></td>
                            <td><span class="badge open">Mở</span></td>
                            <td>20 - 10 - 2024</td>
                            <td>24 - 11 - 2024</td>
                            <td><span class="badge freelance">Freelance</span></td>
                            <td>19</td>
                            <td>4 / 11</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td class="job-title"><a href="">Social Media Assistant</a></td>
                            <td><span class="badge open">Mở</span></td>
                            <td>20 - 10 - 2024</td>
                            <td>24 - 11 - 2024</td>
                            <td><span class="badge fulltime">Fulltime</span></td>
                            <td>19</td>
                            <td>4 / 11</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td class="job-title"><a href="">Social Media Assistant</a></td>
                            <td><span class="badge closed">Đóng</span></td>
                            <td>20 - 10 - 2024</td>
                            <td>24 - 11 - 2024</td>
                            <td><span class="badge fulltime">Fulltime</span></td>
                            <td>19</td>
                            <td>4 / 11</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td class="job-title"><a href="">Social Media Assistant</a></td>
                            <td><span class="badge closed">Đóng</span></td>
                            <td>20 - 10 - 2024</td>
                            <td>24 - 11 - 2024</td>
                            <td><span class="badge fulltime">Fulltime</span></td>
                            <td>19</td>
                            <td>4 / 11</td>
                            <td>...</td>
                        </tr>
                        
                        <!-- Các dòng khác tương tự -->
                    </tbody>
                </table>
            </div>
            <div id="applicant-list" class="profile-section" style="display: none;">
                <div class="job-header">
                    <h2>Social Media Assistant</h2>
                    <p>Design · Full-Time · 4 / 11 Đã tuyển</p>
                    <button class="btn-add-job">+ Tạo việc mới</button>
                </div>
                <div class="applicant-info">
                    <p>Tổng số ứng viên: <span>19</span></p>
                </div>
                <table class="applicant-table">
                    <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th>Trạng thái</th>
                        <th>Ngày ứng tuyển</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="applicant-name">Jake Gyll</td>
                        <td><span class="badge reviewing">Xem xét</span></td>
                        <td>13 - 07 - 2021</td>
                        <td><button class="btn-view">Xem đơn ứng tuyển</button></td>
                    </tr>
                    <tr>
                        <td class="applicant-name">Guy Hawkins</td>
                        <td><span class="badge reviewing">Xem xét</span></td>
                        <td>13 - 07 - 2021</td>
                        <td><button class="btn-view">Xem đơn ứng tuyển</button></td>
                    </tr>
                    <tr>
                        <td class="applicant-name">Cyndy Lillibridge</td>
                        <td><span class="badge accepted">Chấp nhận</span></td>
                        <td>12 - 07 - 2021</td>
                        <td><button class="btn-view">Xem đơn ứng tuyển</button></td>
                    </tr>
                    <tr>
                        <td class="applicant-name">Rodolfo Goode</td>
                        <td><span class="badge rejected">Từ chối</span></td>
                        <td>11 - 07 - 2021</td>
                        <td><button class="btn-view">Xem đơn ứng tuyển</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="applicant-detail" class="profile-section" style="display: none;">
            <div class="job-header">
                    <h2>Chi tiết đơn ứng tuyển</h2>
                    <button class="btn-add-job">+ Tạo việc mới</button>
                </div>
                <div class="detail-container">
                    <!-- Bên trái -->
                    <div class="left-section">
                        <img src="https://meatworld.com.vn/wp-content/uploads/anh-avatar-anime-2-1.jpg" alt="Avatar" class="avatar">
                        <h2>Jerome Bell</h2>
                        <p class="applied-info">Product Development</p>
                        <p class="applied-info">Marketing • Full-Time</p>
                        <hr>
                        <div class="contact-info">
                            <h3>Thông tin liên hệ</h3>
                            <p>Email: jeromeBell45@email.com</p>
                            <p>Điện thoại: +44 1245 572 135</p>
                        </div>
                        <div class="action-buttons">
                            <button class="accept-btn">Chấp nhận</button>
                            <button class="reject-btn">Từ chối</button>
                        </div>
                    </div>

                    <!-- Bên phải -->
                    <div class="right-section">
                        <h2><i>CV của ứng viên</i></h2>
                        <img src="https://marketingworks.vn/common/images/cv-template/21.jpg" alt="CV">
                    </div>
                </div>
            </div>
        </main>
    </div>

<script>
    // JS để chỉnh sửa AVT nhà tuyển dụng

const avatarInput = document.getElementById('avatarInput');
const avatarImage = document.getElementById('avatarImage');
avatarInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
    const reader = new FileReader();
    reader.onload = (e) => {
        avatarImage.src = e.target.result;
    };
    reader.readAsDataURL(file);
    }
});

// -----------------------JS để chỉnh sửa AVT nhà tuyển dụng-----------------------------


// JS ẩn hiện các phần khi nhấn vào menu
document.getElementById("home-button").addEventListener("click", function () {
    document.getElementById("dashboard").style.display = "block";
    document.getElementById("personal-info").style.display = "none";
    document.getElementById("job-list").style.display = "none";
    document.getElementById('applicant-list').style.display = 'none';
    document.getElementById('applicant-detail').style.display = 'none';
});
document.getElementById("profile-button").addEventListener("click", function () {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("personal-info").style.display = "block";
    document.getElementById("job-list").style.display = "none";
    document.getElementById('applicant-list').style.display = 'none';
    document.getElementById('applicant-detail').style.display = 'none';

});
document.getElementById("job-list-button").addEventListener("click", function () {
    document.getElementById("dashboard").style.display = "none";
    document.getElementById("personal-info").style.display = "none";
    document.getElementById("job-list").style.display = "block";
    document.getElementById('applicant-list').style.display = 'none';
    document.getElementById('applicant-detail').style.display = 'none';

});

// --------------------------JS ẩn hiện các phần khi nhấn vào menu---------------------------

// JS Dashboard tạo biểu đồ
document.addEventListener("DOMContentLoaded", function () {
    let total_jobs =  document.getElementById('total_jobs').textContent;
    let total_rejected = document.getElementById('total_rejected').textContent;
    let total_accepted = document.getElementById('total_accepted').textContent;
    let total_pending = document.getElementById('total_pending').textContent;
  function createPerformanceData() {
      return {
          labels: ['Open Jobs', 'Closed Jobs', 'Pending Applications', 'Accepted Applications'],
          datasets: [{
              label: 'Job Performance',
              data: [total_jobs, total_rejected, total_accepted, total_pending],
              backgroundColor: [
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                  'rgba(75, 192, 192, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          }]
      };
  }
  function initializeChart(chartId, data) {
      const ctx = document.getElementById(chartId).getContext('2d');
      new Chart(ctx, {
          type: 'bar',
          data: data,
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      display: true,
                      position: 'top'
                  }
              },
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
  }
  const performanceData = createPerformanceData();
  initializeChart('jobPerformanceChart', performanceData);
});


// JS để thêm class active khi nhấn vào menu
const menuItems = document.querySelectorAll('.sidebar .menu ul li a');
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        menuItems.forEach(i => i.parentElement.classList.remove('active'));
        item.parentElement.classList.add('active');
    });
});

// ------------------------------JS để thêm class active khi nhấn vào menu-------------------------------------


// JS chuyển sang danh sách ứng viên khi ấn vào tên công việc
// Tìm tất cả các thẻ <a> trong danh sách công việc
document.querySelectorAll("#job-list .job-title a").forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      
      // Lấy tiêu đề công việc từ nội dung của thẻ <a>
      const jobTitle = this.textContent.trim();
  
      // Gọi hàm hiển thị danh sách ứng viên với tiêu đề công việc
      showApplicants(jobTitle);
    });
  });
  
  function showApplicants(jobTitle) {
    const jobList = document.getElementById("job-list");
    const applicantsList = document.getElementById("applicants-list");
    const jobTitleElement = document.getElementById("job-title");
    const tbody = applicantsList.querySelector("tbody");
  
    // Ẩn danh sách công việc, hiển thị danh sách ứng viên
    jobList.style.display = "none";
    applicantsList.style.display = "block";
  
    // Gán tiêu đề công việc cho danh sách ứng viên
    jobTitleElement.textContent = `Tổng số ứng viên cho công việc: ${jobTitle}`;
  
    // Dữ liệu giả lập cho ứng viên (bạn có thể thay bằng dữ liệu từ server)
    const applicantsData = {
      "Social Media Assistant": [
        { name: "Jake Gyll", status: "Đang xem xét", date: "13-07-2021", action: "Xem đơn ứng tuyển" },
        { name: "Guy Hawkins", status: "Đang xem xét", date: "12-07-2021", action: "Xem đơn ứng tuyển" },
      ],
      // Thêm các job khác tương tự...
    };
  
    // Lấy danh sách ứng viên theo công việc
    const applicants = applicantsData[jobTitle] || [];
  
    // Làm trống nội dung cũ trong bảng
    tbody.innerHTML = "";
  
    // Thêm ứng viên vào bảng
    applicants.forEach((applicant) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${applicant.name}</td>
        <td>${applicant.status}</td>
        <td>${applicant.date}</td>
        <td><button>${applicant.action}</button></td>
      `;
      tbody.appendChild(row);
    });
  }
  
  // Hàm quay lại danh sách công việc
  function showJobList() {
    const jobList = document.getElementById("job-list");
    const applicantsList = document.getElementById("applicants-list");
  
    jobList.style.display = "block";
    applicantsList.style.display = "none";
  }

  document.querySelectorAll('.job-title a').forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('job-list').style.display = 'none';
      document.getElementById('applicant-list').style.display = 'block';
    });
  });
  
  
// JS khi từ danh sách ứng viên quay về menu
// Khi nhấn vào các công việc trong job-list để xem ứng viên
document.querySelectorAll('.job-title a').forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      // Ẩn danh sách công việc
      document.getElementById('job-list').style.display = 'none';
      // Hiển thị danh sách ứng viên
      document.getElementById('applicant-list').style.display = 'block';
    });
  });
  
  // Hàm để quay về trang danh sách công việc hoặc các trang khác (ẩn applicant-list và hiển thị job-list)
  function resetView() {
    document.getElementById('job-list').style.display = 'block';  // Hiển thị job-list
    document.getElementById('applicant-list').style.display = 'none';  // Ẩn applicant-list
  }
  
  // Áp dụng hàm resetView khi quay lại các trang chính (Profile, Dashboard, Job List, v.v)
  document.querySelectorAll('.back-to-main').forEach((backButton) => {
    backButton.addEventListener('click', (e) => {
      resetView();
    });
  });
  
// JS xử lí hiện thông tin ứng viên khi nhấn vào xem đơn ứng tuyển


document.addEventListener("DOMContentLoaded", () => {
    const applicantList = document.getElementById("applicant-list");
    const applicantDetail = document.getElementById("applicant-detail");
    const backBtn = document.getElementById("back-btn");
    const viewBtns = document.querySelectorAll(".btn-view");

    // Hiển thị chi tiết ứng viên
    viewBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            console.log('hello');
            applicantList.style.display = "none";
            applicantDetail.style.display = "block";
        });
    });

    // Quay lại danh sách ứng viên
    backBtn.addEventListener("click", () => {
        applicantDetail.style.display = "none";
        applicantList.style.display = "block";
    });
});


</script>
</body>
</html>
