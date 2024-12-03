<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Profile</title>
    <link rel="stylesheet" href="../../public/css/recruiter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tiny.cloud/1/swqgfqe5l90l69fjhsx5hywhqrqvo5n5djj34ve5in5yflqu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div class="profile-container">
    <aside class="sidebar">
            <div class="logo">JobFunny</div>
            <button id="add-new-job-btn" class="btn-add-job back-to-home">Quay về trang chủ</button>
            <div class="logout">
                <button>Đăng xuất</button>
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="Avatar">
                    <span>Luong Thong</span>
                </div>
            </div>
        </aside>
        <main class="main-content">
            <div id="applicant-detail" class="profile-section">
            <div class="job-header">
                    <h2>Chi tiết đơn ứng tuyển</h2>
                </div>
                        <?php 
                            foreach($applicantbyjobid as $key => $value) {
                        ?>
                <div class="detail-container">
                    <!-- Bên trái -->
                    <div class="left-section">
                        <img src="https://meatworld.com.vn/wp-content/uploads/anh-avatar-anime-2-1.jpg" alt="Avatar" class="avatar">
                        <h2><?php echo $value['candidate_name'];?></h2>
                        <p class="applied-info"><?php echo $value['job_title'];?></p>
                        <p class="applied-info"><?php echo $value['application_date'];?></p>
                        <hr>
                        <div class="contact-info">
                            <h3>Thông tin liên hệ</h3>
                            <p>Email: <?php echo $value['email_address'];?></p>
                            <p>Điện thoại: <?php echo $value['phone_number'];?></p>
                        </div>
                        <div class="action-buttons">
                            <button class="accept-btn">Chấp nhận</button>
                            <button class="reject-btn">Từ chối</button>
                        </div>
                    </div>

                    <!-- Bên phải -->
                    <div class="right-section">
                        <h2><i>CV của ứng viên</i></h2>
                        <img src="../../public/img/<?php echo $value['cv_file'];?>" alt="CV">
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </main>
    </div>
    
<script src="../../public/js/applicant_list.js"></script>
<!-- <script>
    tinymce.init({
    selector: '#myTextarea',
    plugins: 'lists link image table code',
    toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code', // Cấu hình toolbar
    height: 200
});
</script> -->
</body>
</html>