<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Của Tôi</title>
    <link rel="stylesheet" href="../public/css/myApplication.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container-myProfile">
        <div class="sidebar">
            <div class="top-sidebar">
                <a href="<?php echo BASE_URL; ?>" style="text-decoration: none; color: black;"><h3>JobFunny</h3></a>
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>"><i style="padding-left: 10px;" class="fa-solid fa-house"></i> Trang chủ</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/myApplications/index"><i style="padding-left: 14px;" class="fa-solid fa-file"></i> Đơn ứng tuyển của tôi</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/myProfile/myProfile"><i style="padding-left: 12px;" class="fa-solid fa-user"></i> Hồ sơ của tôi</a></li>
                </ul>
            </div>
            
            <div class="bottom-sidebar">

                <div class="account-bottom-sidebar">
                    <div class="img-account">
                        <img src="https://i.pinimg.com/originals/6f/d6/1f/6fd61fe74b3851261242655f07cd0259.jpg" alt="avt-account">
                    </div>

                    <div class="info-account">
                        <!-- <h2>Lương Thông</h2>
                        <p>nlthong02@gmail.com</p> -->

                        <h2><?php echo htmlspecialchars($user_info[0]['full_name']); ?></h2>
                        <p><?php echo htmlspecialchars($user_info[0]['email']); ?></p>
                    </div>
                </div>
            </div>
            
        </div>        
    
        <div class="content-myProfile">
            <div class="myProfile">
                <div class="header-myProfile">
                    <h2>Đơn ứng tuyển của tôi</h2>
                    <a href="<?php echo BASE_URL; ?>" style="text-decoration: none;"><button>Quay lại trang chủ</button></a>
                </div>

                <form action="process.php" method="POST" enctype="multipart/form-data">
                    <div class="intro-content-myProfile">
                        <h4>Lịch sử ứng tuyển</h4>
                        <table class="application-history">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên công ty</th>
                                    <th>Vị trí</th>
                                    <th>Ngày ứng tuyển</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
        if (isset($applications) && !empty($applications)) {
            $counter = 1;
            foreach ($applications as $application) {
                ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <td class="company-info">
                        <?php
                        $logo = isset($application['logo']) && !empty($application['logo']) ? $application['logo'] : 'default_logo.png';
                        ?>
                        <img src="<?php echo htmlspecialchars($logo); ?>" alt="Company Logo">
                        <span><?php echo htmlspecialchars($application['company_name']); ?></span>
                    </td>
                    <td><?php echo htmlspecialchars($application['job_title']); ?></td>
                    <td><?php echo htmlspecialchars($application['apply_at']); ?></td>

                    <?php if ($application['status'] == 'accepted'): ?>
                        <td><span class="status accepted"><?php echo htmlspecialchars($application['status']); ?></span></td>
                    <?php elseif ($application['status'] == 'pending'): ?>
                        <td><span class="status pending"><?php echo htmlspecialchars($application['status']); ?></span></td>
                    <?php elseif ($application['status'] == 'rejected'): ?>
                        <td><span class="status rejected"><?php echo htmlspecialchars($application['status']); ?></span></td>
                    <?php endif; ?>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='5'>No applications available.</td></tr>";
        }
        ?>
                            </tbody>
                        </table>
                        <!-- <div class="pagination">
                            <button>&laquo;</button>
                            <button class="active">1</button>
                            <button>2</button>
                            <button>3</button>
                            <button>...</button>
                            <button>&raquo;</button>
                        </div> -->
                    </div>
                    

                    <!-- <div class="underline"></div> -->

                    
                </form>
            </div>
        </div>
    </div>

    <!-- <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('preview');
                preview.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script> -->
</body>
</html>
