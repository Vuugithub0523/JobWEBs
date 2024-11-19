<!-- hiển thị thông tin chi tiết của công việc (mô tả công việc, yêu cầu, địa điểm, v.v.). -->
<h1>Kết quả tìm kiếm</h1>
<?php foreach ($jobs as $job): ?>
  <div class="job-item">
    <h2><?php echo $job['title']; ?></h2>
    <p><?php echo $job['description']; ?></p>
    <a href="/jobs/show/<?php echo $job['id']; ?>">Xem chi tiết</a>
  </div>
<?php endforeach; ?>
