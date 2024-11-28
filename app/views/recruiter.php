<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Profile</title>
    <link rel="stylesheet" href="public/css/recruiter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <button id="add-new-job-btn" class="btn-add-job">+ Tạo việc mới</button>
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

                    <?php 
                        foreach($list_all_job as $key => $value) {
                            $statusClass = ($value['status'] === 'open') ? 'open' : 'close';
                            $job_type;
                            switch ($value['Job_Type']) {
                                case 'fulltime':
                                    $job_type = 'fulltime';
                                  break;
                                case 'parttime':
                                    $job_type = 'parttime';
                                  break;
                                case 'remote':
                                    $job_type = 'remote';
                                  break;
                                case 'internship':
                                    $job_type = 'internship';
                                  break;
                                default:
                                    $job_type = 'contract';
                            }
                    ?>

                        <tr>
                            <td class="job-title"><a href=""><?php echo $value['job_title']; ?></a></td>
                            <td><span class="badge <?php echo $statusClass; ?> "><?php echo ucwords($value['status']); ?></span></td>
                            <td><?php echo $value['posted_date']; ?></td>
                            <td><?php echo $value['deadline']; ?></td>
                            <td><span class="badge <?php echo $job_type ?>"><?php echo $value['Job_Type']; ?></span></td>
                            <td><?php echo $value['total_applied']; ?></td>
                            <td><?php echo $value['Accepted_Applicants']; ?> / <?php echo $value['required_candidates']; ?></td>
                            <td>...</td>
                        </tr>

                    <?php
                        }
                    ?>

                    </tbody>
                </table>
            </div>
            <div id="applicant-list" class="profile-section" style="display: none;">
                <div class="job-header">
                    <h2>Social Media Assistant</h2>
                    <p>Design · Full-Time · 4 / 11 Đã tuyển</p>
                    <button id="add-new-job-btn" class="btn-add-job">+ Tạo việc mới</button>
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
                    <button id="add-new-job-btn" class="btn-add-job">+ Tạo việc mới</button>
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
            <div id="create-job-form" class="create-job-form" style="display: none;">
                <h1>Tạo việc làm</h1>
                <form>
                    <!-- Tiêu đề công việc -->
                    <div class="form-group">
                        <label for="job-title">Tiêu đề công việc</label>
                        <input type="text" id="job-title" placeholder="e.g. Software Engineer" required>
                    </div>

                    <!-- Loại hình làm việc -->
                    <div class="form-group">
                        <label>Loại hình việc làm</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="job-type" value="Full-Time"> Full-Time</label>
                            <label><input type="checkbox" name="job-type" value="Part-Time"> Part-Time</label>
                            <label><input type="checkbox" name="job-type" value="Remote"> Remote</label>
                            <label><input type="checkbox" name="job-type" value="Internship"> Internship</label>
                            <label><input type="checkbox" name="job-type" value="Contract"> Contract</label>
                        </div>
                    </div>

                    <!-- Lương -->
                    <div class="form-group">
                        <label for="salary">Lương</label>
                        <div class="salary-range">
                            <input type="number" id="salary-min" placeholder="$ Min" required>
                            <span>to</span>
                            <input type="number" id="salary-max" placeholder="$ Max" required>
                        </div>
                    </div>

                    <!-- Yêu cầu kỹ năng -->
                    <div class="form-group">
                        <label>Yêu cầu kỹ năng</label>
                        <div class="skills">
                            <span>Graphic Design</span>
                            <span>Communication</span>
                            <span>Illustrator</span>
                            <button type="button">+ Thêm kỹ năng</button>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">Tiếp theo</button>
                </form>
            </div>
        </div>
        </main>
    </div>
<script src="public/js/recruiter.js"></script>
</body>
</html>
