<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Profile</title>
    <link rel="stylesheet" href="../../css/style.css">
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
                    <li><a href="#"><i class="fa-solid fa-file"></i>Các công việc</a></li>
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
            <div id="personal-info" class="profile-session">
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
            <div id="dashboard" class="profile-section" style="display: none;">
                <div class="header">
                    <h1>Trang chủ</h1>
                </div>
                <div class="dashboard-stats">
                    <div class="stat-item posted">
                        <h3>Số lượng công việc đã đăng</h3>
                        <p>5</p>
                    </div>
                    <div class="stat-item denied">
                        <h3>Số lượng từ chối</h3>
                        <p>2</p>
                    </div>
                    <div class="stat-item accepted">
                        <h3>Số lượng chấp nhận</h3>
                        <p>3</p>
                    </div>
                    <div class="stat-item pending">
                        <h3>Số lượng đang chờ xử lí</h3>
                        <p>1</p>
                    </div>
                </div>
                <div class="card company-info">
                    <h2>Company Information</h2>
                    <p><strong>Name:</strong> <span id="company-name">Heavenly Tech</span></p>
                    <p><strong>Industry:</strong> <span id="company-industry">IT Services</span></p>
                    <p><strong>Founded:</strong> <span id="company-founded">2015</span></p>
                    <p><strong>Employees:</strong> <span id="company-employees">150</span></p>
                </div>

                <!-- Upcoming Deadlines -->
                <div class="card deadlines">
                    <h2>Jobs Near Deadline</h2>
                    <ul id="deadline-list">
                        <li><strong>Frontend Developer</strong> - Deadline: <span>2024-11-25</span></li>
                        <li><strong>Backend Engineer</strong> - Deadline: <span>2024-11-28</span></li>
                        <li><strong>UI/UX Designer</strong> - Deadline: <span>2024-12-01</span></li>
                    </ul>
                </div>

                <!-- Job Performance Chart -->
                <div class="card performance">
                    <h2>Job Performance</h2>
                    <canvas id="jobPerformanceChart"></canvas>
                </div>
            </div>
        </main>
    </div>

<script src="../../js/script.js"></script>
</body>
</html>
