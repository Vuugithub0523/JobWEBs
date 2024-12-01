<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Profile</title>
    <link rel="stylesheet" href="../public/css/recruiter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tiny.cloud/1/swqgfqe5l90l69fjhsx5hywhqrqvo5n5djj34ve5in5yflqu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div class="profile-container">
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
        <?php
            if (isset($msg)) {
                echo 'Thêm thành công';
            }
        ?>
            <?php 
            include_once 'personal_info_recruiter.php';
            ?>
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
                    <h2>Thông tin công ti</h2>
                    <?php 
                        foreach($list_company as $key => $value) {
                    ?>
                    <p><strong>Tên:</strong> <span id="company-name"><?php echo $value['company_name']; ?></span></p>
                    <p><strong>Địa chỉ:</strong> <span id="company-address"><?php echo $value['company_address']; ?></span></p>
                    <p><strong>Ngày thành lập:</strong> <span id="company-founded"><?php echo $value['founded_date']; ?></span></p>
                    <p><strong>Số lượng nhân viên:</strong> <span id="company-employees"><?php echo $value['employee_count']; ?></span></p>
                    <?php
                        }
                    ?>
                </div>

                <!-- Upcoming Deadlines -->
                <div class="card deadlines">
                    <h2>Những công việc sắp đóng</h2>
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
                    <h2>Hiệu suất công việc</h2>
                    <canvas id="jobPerformanceChart"></canvas>
                </div>
            </div>
            <?php 
            include_once 'job_list_recruiter.php';
            ?>
            <form action="<?php echo BASE_URL ?>recruiter/insertjob" method="POST">
            <div id="create-job-form1" class="create-job-form1 profile-section" style="display: none;">
                <h1>Tạo việc làm</h1>
                    <!-- Tiêu đề công việc -->
                <div class="form-group">
                    <input type="hidden" value="2" name="user_id">
                    <label for="job-title">Tiêu đề công việc</label>
                    <p><i>Tiêu đề công việc phải miêu tả một vị trí</i></p>
                    <input name="job_title" type="text" id="job-title" placeholder="e.g. Software Engineer" required>
                </div>
                    <!-- Loại hình làm việc -->
                <div class="form-group">
                    <label>Loại hình việc làm</label>
                    <div class="checkbox-group" >
                        <label><input type="radio" name="job_type_id" value="1"> Full-Time</label>
                        <label><input type="radio" name="job_type_id" value="2"> Part-Time</label>
                        <label><input type="radio" name="job_type_id" value="3"> Remote</label>
                        <label><input type="radio" name="job_type_id" value="4"> Internship</label>
                        <label><input type="radio" name="job_type_id" value="5"> Contract</label>
                    </div>
                </div> 
                <input type="hidden" name="status" value="open">
                <input type="hidden" name="location" value="DaNang,VN">
                    <!-- Lương -->
                <div class="form-group">
                    <label for="salary">Lương</label>
                    <div class="salary-range">
                        <input type="number" name="salary" id="salary-max" placeholder="$ Min" required>
                    </div>
                </div>
                    <!-- Yêu cầu kỹ năng -->
                <div class="form-group">
                    <label>Yêu cầu kỹ năng</label>
                    <p><i>Mô tả chi tiết các yêu cầu cho công việc</i></p>
                    <div class="skills">
                        <textarea name="requirements" id="myTextarea" placeholder="Thêm yêu cầu công việc"></textarea>
                    </div>
                </div>
                <div class="next-button">
                    <button id="next-btn1" type="button" class="submit-btn">Tiếp theo</button>
                </div>
            </div>
            <div id="create-job-form2" class="create-job-form2 profile-section" style="display: none;">
                <h1>Tạo việc làm</h1>
                <div class="form-group">
                    <label>Trách nhiệm</label>
                    <p><i>Phát thảo các trách nhiệm cốt lõi của vị trí</i></p>
                    <div class="skills">
                        <textarea name="responsibilities" id="myTextarea" placeholder="Thêm trách nhiệm công việc" style="height: 150px;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Quyền lợi và lợi ích</label>
                    <p><i>Khuyến khích nhiều người nộp đơn hơn bằng cách chia sẻ các phần thưởng và lợi ích hấp dẫn mà bạn cung cấp cho nhân viên của mình</i></p>
                    <div class="skills">
                        <textarea name="job_benefit" id="myTextarea" placeholder="Thêm quyền lợi và lợi ích" style="height: 150px;"></textarea>
                    </div>
                </div>
                
                <div class="next-button">
                    <button type="button" id="next-btn2" class="submit-btn">Tiếp theo</button>
                </div>
            </div>
            <div id="create-job-form3" class="create-job-form3 profile-section" style="display: none;">
                <h1>Tạo việc làm</h1>
                <div class="form-group">
                    <label>Cấp bậc công việc</label>
                    <div class="checkbox-group">
                        <label><input type="radio" name="level_id" value="1">Intern</label>
                        <label><input type="radio" name="level_id" value="2">Fresher</label>
                        <label><input type="radio" name="level_id" value="3">Junior</label>
                        <label><input type="radio" name="level_id" value="4">Mid-level</label>
                        <label><input type="radio" name="level_id" value="5">Senior</label>
                        <label><input type="radio" name="level_id" value="6">Lead</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="salary">Số lượng cần tuyển</label>
                    <div class="salary-range">
                        <input type="number" name="required_candidates" id="salary-max" placeholder="Nhập số lượng" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="salary">Hạn chót</label>
                    <div class="salary-range">
                        <input name="deadline" type="date" id="salary-max" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả công việc</label>
                    <p><i>Mô tả chi tiết các công việc sẽ làm đối với công việc</i></p>
                    <div class="skills">
                        <textarea name="job_description" id="myTextarea" placeholder="Thêm mô tả công việc"></textarea>
                    </div>
                </div>
                
                <input type="hidden" required name="total_applied" value="0">
                <input type="hidden" name="posted_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
                <div class="next-button">
                    <button type="submit" id="submit" class="submit-btn">Hoàn tất</button>
                </div>
            </div>
            </form>
        </main>
    </div>
<script src="../public/js/recruiter.js"></script>
<script>
    tinymce.init({
    selector: '#myTextarea',
    plugins: 'lists link image table code',
    toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code', // Cấu hình toolbar
    height: 200
});
</script>
</body>
</html>
