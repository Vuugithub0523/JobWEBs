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
            <div id="applicant-list" class="profile-section">
                <div class="job-header">
                    <h2><?php if (!empty($jobbyid)) { echo $jobbyid[0]['job_title'];} ?></h2>
                    <p><?php if (!empty($jobbyid)) { echo $jobbyid[0]['job_status'];} ?> - <?php if (!empty($jobbyid)) { echo $jobbyid[0]['job_type'];} ?> · <?php if (!empty($jobbyid)) { echo $jobbyid[0]['total_applicants'];} ?> / <?php if (!empty($jobbyid)) { echo $jobbyid[0]['required_candidates'];} ?> Đã tuyển</p>
                </div>
                <div class="applicant-info">
                    <p>Tổng số ứng viên: <span><?php if (!empty($jobbyid)) { echo $jobbyid[0]['total_applied'];} ?></span></p>
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
    <?php 
    if (!empty($jobbyid)) {
        foreach ($jobbyid as $key => $value) {
    ?>
    <tr>
        <td class="applicant-name"><?php echo !empty($value['applicant_name']) ? $value['applicant_name'] : 'Chưa có thông tin'; ?></td>
        <td><span class="badge reviewing"><?php echo !empty($value['application_status']) ? $value['application_status'] : 'Chưa cập nhật'; ?></span></td>
        <td><?php echo !empty($value['application_date']) ? $value['application_date'] : 'Chưa có thông tin'; ?></td>
        <td class=""><a class="btn-view-application" href="http://localhost/job_finder_website/recruiter/applicantbyjobid/?id=<?php echo !empty($value['application_id']) ? $value['application_id'] : '#'; ?>">Xem đơn ứng tuyển</a></td>
    </tr>
    <?php 
        }
    } else { 
    ?>
    <tr>
        <td colspan="4" class="empty-message">Không có ứng viên nào cho công việc này.</td>
    </tr>
    <?php 
    }
    ?>
</tbody>

                </table>
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