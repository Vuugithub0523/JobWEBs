<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.container-myProfile {
    position: relative;
    width: 100%;
}

.sidebar {
    width: 19.7%;
    background-color: #F8F8FD;
    height: 100vh;
    position: fixed;
    padding: 0;
    box-shadow: 1px 2px 4px rgba(199, 199, 199, 0.2);
}

.top-sidebar h3 {
    display: flex;
    justify-content: center;
    font-size: 32px;
    margin-top: 27px;
}

.top-sidebar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.top-sidebar ul li {
    margin: 10px 0; /* Khoảng cách giữa các mục */
}

.top-sidebar ul li a {
    text-decoration: none;
    color: #7C8493;
    font-size: 16px;
    display: flex; /* Căn chỉnh icon và text theo chiều ngang */
    align-items: center;
    gap: 15px; /* Khoảng cách giữa icon và text */
    padding: 10px 15px; /* Tạo không gian cho mục */
    border-left: 3px solid transparent; /* Đường viền bên trái mặc định */
    transition: background-color 0.3s, border-left-color 0.3s; /* Hiệu ứng mượt */
}

.top-sidebar ul li a:hover {
    background-color: #f0f4ff;
    border-left-color: #4640DE; 
    color: #4640DE;
}


.bottom-sidebar {
    width: 100%;
    position: absolute;
    bottom: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.bottom-sidebar button {
    margin-bottom: 15px;
    width: 220px;
    height: 50px;
    box-shadow: 1px 1px 2px rgba(199, 199, 199, 0.2);
    border: 1px solid #f0f0f0;
    background-color: white;
    border-radius: 10px;
}

.bottom-sidebar button a {
    font-size: 16px;
    color: #FF6550;
}

.img-account img {
    object-fit: cover;
    width: 50px;
    height: 50px;
    border-radius: 25px;
}

.account-bottom-sidebar {
    display: flex;
    align-items: center;
    gap: 15px;
}

.account-bottom-sidebar h2 {
    font-size: 17px;
}

.account-bottom-sidebar p {
    color: #202430;
    font-size: 14px;
}

.content-myProfile {
    background-color: white;
    width: 80.3%;
    height: 100%;
    position: absolute;
    left: 19.7%;
}

.header-myProfile {
    margin: 10px 0;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #D6DDEB;
}

.header-myProfile h2 {
    font-weight: lighter;
    margin: 20px 50px;
    font-size: 30px;
}

.header-myProfile button {
    display: flex;
    justify-content: center;
    align-items: center; 
    font-size: 15px;
    background-color: white;
    color: #4640DE;
    font-weight: bold;
    margin-right: 50px;
    padding: 15px;
    border: 1px solid #D6DDEB;
    width: 200px;
    height: 40px;
}

.intro-content-myProfile {
    padding-left: 50px;
    /* border-bottom: 1px solid #D6DDEB; */
}

.intro-content-myProfile h4 {
    font-size: 17px;
    margin-top: 20px;
    margin-bottom: 0px;
}

.intro-content-myProfile  p {
    font-size: 15px;
    color:rgb(84, 84, 82);
    margin-top: 10px;
}

.underline {
    width: 1127px;
    /* height: 1px; */
    border-bottom: 1px solid #D6DDEB;
    background-color:#D6DDEB;
    margin-left: 50px;
}

.avatar-content-myProfile {
    display: flex;
    align-items: center;
    gap: 90px;
    padding: 25px 50px;
    /* border-bottom: 1px solid #D6DDEB; */
}

.left-avatar-content-myProfile {
    width: 350px;
}

.left-avatar-content-myProfile h4 {
    font-size: 17px;
    margin-top: 20px;
    margin-bottom: 0px;
}

.left-avatar-content-myProfile p {
    font-size: 15px;
    color:rgb(84, 84, 82);
    margin-top: 10px;
}

.middle-avatar-content-myProfile {
    width: 120px;
}

.middle-avatar-content-myProfile img {
    object-fit: cover;
    width: 100px;
    height: 100px;
    border-radius: 50px;
}

.right-avatar-content-myProfile {
    background-color: #F8F8FD;
    border: 2px dashed blue;
    height: 100px;
    width: 400px;
    display: flex;
    flex-direction: column;
    text-align: center;
}

.personal-info-content-myProfile {
    display: flex;
    padding: 15px 50px;
    /* border-bottom: 1px solid #D6DDEB; */
}

.left-personal-info-content-myProfile {
    width: 30%;
}

.left-personal-info-content-myProfile h4 {
    font-size: 17px;
    margin-top: 20px;
    margin-bottom: 0px;
}

.right-personal-info-content-myProfile {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    margin-bottom: 0px;
    width: 70%;
}

.right-personal-info-content-myProfile .form-group {
    display: flex;
    justify-content: space-between;
    padding: 0px 10px 10px 10px;
    width: 500px;
}

.right-personal-info-content-myProfile input {
    margin-top: 15px;
    margin-bottom: 10px;
}

.right-personal-info-content-myProfile select {
    margin-top: 15px;
    margin-bottom: 10px;
}

.right-personal-info-content-myProfile #fullname {
    width: 493px;
    height: 30px;
}

.name::after, .phone::after, .email::after, .birthday::after, .gender::after {
    content: "*";
    color: red;
    margin-left: 5px; /* Khoảng cách giữa văn bản và dấu sao */
    font-size: 1em; /* Điều chỉnh kích thước nếu cần */
}

.right-personal-info-content-myProfile #phone {
    width: 180px;
    height: 30px;
}

.right-personal-info-content-myProfile #email {
    width: 250px;
    height: 30px;
}

.right-personal-info-content-myProfile #birthday{
    width: 180px;
    height: 35px;
}

input[type="date"] {
    padding: 5px 10px;
    font-size: 15px;
    box-sizing: border-box; /* Đảm bảo padding không làm tăng kích thước ô */
}

.right-personal-info-content-myProfile #gender{
    width: 257px;
    height: 38.2px;
}

select {
    padding: 5px 10px; /* Tạo khoảng cách giữa nội dung và viền */
    font-size: 15px;
    box-sizing: border-box; /* Đảm bảo padding không làm tăng kích thước tổng thể */
    
}

.right-personal-info-content-myProfile .form-group .small-form-group {
    display: flex;
    flex-direction: column;
}

.save-btn {
    margin-top: 25px;
    margin-left: 85.3%;
    width: 130px;
    height: 40px;
    border: none;
    font-weight: bold;
    color: white;
    background-color: blue;
}
    </style>
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
                        <img src="../../public/img/avt1-applicant.webp" alt="avt-account">
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
                            <img src="../../public/img/avt1-applicant.webp" alt="avatar_account">
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