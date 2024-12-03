<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/myProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<div class="container-myProfile">
        <div class="sidebar">
            <div class="top-sidebar">
                <a href="<?php echo BASE_URL; ?>/homepage/index" style="text-decoration: none; color: black;"><h3>JobFunny</h3></a>
                
                <ul>
                    <!-- <li><a href="#"><i style="padding-left: 10px;" class="fa-solid fa-house"></i> Trang chủ</a></li>
                    <li><a href="#"><i style="padding-left: 14px;" class="fa-solid fa-file"></i> Đơn ứng tuyển của tôi</a></li>
                    <li><a href="#"><i style="padding-left: 12px;" class="fa-solid fa-user"></i> Hồ sơ của tôi</a></li> -->

                    <li><a href="<?php echo BASE_URL; ?>/homepage/index"><i style="padding-left: 10px;" class="fa-solid fa-house"></i> Trang chủ</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/myApplications/index"><i style="padding-left: 14px;" class="fa-solid fa-file"></i> Đơn ứng tuyển của tôi</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/myProfile/myProfile"><i style="padding-left: 12px;" class="fa-solid fa-user"></i> Hồ sơ của tôi</a></li>
                </ul>
            </div>
            
            <div class="bottom-sidebar">
                <button>
                    <a href="#"><i class="fa-solid fa-sign-out-alt"></i> Đăng xuất</a>
                </button>

                <div class="account-bottom-sidebar">
                    <div class="img-account">
                        <img src="<?php echo $user[0]['avatar']; ?>" alt="avt-account">
                    </div>

                    <div class="info-account">
                        <!-- <h2>Lương Thông</h2>
                        <p>nlthong02@gmail.com</p> -->

                        <h2><?php echo $user[0]['full_name']; ?></h2>
                        <p><?php echo $user[0]['email']; ?></p>
                    </div>
                </div>
            </div>
            
        </div>        
    
        <div class="content-myProfile">
            <div class="myProfile">
                <div class="header-myProfile">
                    <h2>Hồ sơ của tôi</h2>
                    <a href="<?php echo BASE_URL; ?>/homepage/index" style="text-decoration: none;"><button>Quay lại trang chủ</button></a>
                    
                </div>

                <form action="<?php echo BASE_URL; ?>/myProfile/updateProfile" method="POST" enctype="multipart/form-data">
                    <div class="intro-content-myProfile">
                        <h4>Đây là thông tin cơ bản</h4>
                        <p>Đây là thông tin cá nhân của bạn mà bạn có thể cập nhật bất cứ lúc nào.</p>
                    </div>

                    <div class="underline"></div>

                    <div class="avatar-content-myProfile">
                        <div class="left-avatar-content-myProfile">
                            <h4>Ảnh đại diện</h4>
                            <p>Hình ảnh này sẽ được hiển thị công khai như ảnh đại diện của bạn, giúp nhà tuyển dụng nhận diện bạn dễ dàng hơn!</p>
                        </div>

                        <div class="middle-avatar-content-myProfile">
                            <img src="<?php echo $user[0]['avatar']; ?>" alt="avatar_account">
                        </div>

                        <div class="right-avatar-content-myProfile">
                            <p>
                                <span style="color: blue; font-weight: bold">Nhấn để thay thế</span>
                                <!-- <span>hoặc kéo và thả</span> -->
                            </p>
                            <p>SVG, PNG, JPG hoặc GIF (tối đa 400 x 400px)</p>
                        </div>
                    </div>

                    <div class="underline"></div>
                    
                    <div class="personal-info-content-myProfile">
                        <div class="left-personal-info-content-myProfile">
                            <h4>Thông tin cá nhân</h4>
                        </div>

                        <div class="right-personal-info-content-myProfile">
                            <div class="form-group">
                                <div class="fullname">
                                    <label class="name" for="fullname">Họ và tên</label>
                                <input type="text" id="fullname" name="fullname" value="<?php echo $user[0]['full_name']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="small-form-group">
                                    <label class="phone" for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" value="<?php echo $user[0]['phone']; ?>" required>
                                </div>

                                <div class="small-form-group">
                                    <label class="email" for="email">Email</label>
                                <input type="email" id="email" name="email" value="<?php echo $user[0]['email']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="small-form-group">
                                    <label class="birthday" for="birthday">Ngày sinh</label>
                                    <input type="date" id="birthday" name="birthday" value="<?php echo $user[0]['date_of_birth']; ?>" required>
                                </div>

                                <div class="small-form-group">
                                    <label class="gender" for="gender">Giới tính</label>
                                    <select id="gender" name="gender" required>
                                        <option value="Male" <?php if ($user[0]['gender'] == 'male') echo 'selected'; ?>>Nam</option>
                                        <option value="Female" <?php if ($user[0]['gender'] == 'female') echo 'selected'; ?>>Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="underline"></div>
                    
                    <button type="submit" class="save-btn">Lưu hồ sơ</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>