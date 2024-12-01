<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Của Tôi</title>
    <link rel="stylesheet" href="myApplications.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
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

.underline {
    width: 1127px;
    /* height: 1px; */
    border-bottom: 1px solid #D6DDEB;
    background-color:#D6DDEB;
    margin-left: 50px;
}

.intro-content-myProfile {
    padding-left: 50px;
}

.intro-content-myProfile h4 {
    font-size: 18px;
    margin-top: 25px;
    margin-bottom: 5px;
}

.application-history {
    width: 96%;
    margin: 20px 0px;
    border-collapse: collapse;
    /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  */
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
}

.application-history thead th {
    text-align: left;
    padding: 20px;
    background-color: #f0f4ff; /* Màu nền cho tiêu đề */
    color: #4640DE;
    font-weight: bold;
    font-size: 16px;
    border-bottom: 2px solid #D6DDEB;
}

.application-history tbody td {
    padding: 20px;
    font-size: 14px;
    border-bottom: 1px solid #D6DDEB; /* Đường kẻ giữa các dòng */
    vertical-align: middle;
}

.application-history tbody tr:hover {
    background-color: #f0f4ff; /* Màu nền khi hover vào dòng */
}

.company-info {
    display: flex; /* Để logo và tên nằm ngang */
    align-items: center; /* Căn giữa theo chiều dọc */
    gap: 10px; /* Khoảng cách giữa logo và tên */
}

.company-info img {
    width: 35px; /* Kích thước logo */
    height: 35px;
    border-radius: 20px; /* Tùy chọn: bo góc cho logo */
    object-fit: cover; /* Giữ tỷ lệ logo */
}

.company-info span {
    margin-left: 7px;
    font-size: 14px; /* Kích thước chữ cho tên công ty */
    color: #333; /* Màu chữ */
    font-weight: 500; /* Đậm vừa phải */
}


.application-history tbody td:nth-child(5), 
.application-history thead th:nth-child(5) {
    text-align: center;
}

.status {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: bold;
}
.status.pending {
    border: 2px solid #FFC107;
    color: #FFC107; 
}

.status.accepted {
    border: 2px solid #28A745;
    color: #28A745; 
}

.status.rejected {
    border: 2px solid #DC3545;
    color: #DC3545; 
}

.pagination {
    text-align: center;
    margin: 20px 0;
    display: flex;
    justify-content: center;
    gap: 5px;
}

.pagination button {
    padding: 8px 12px;
    margin: 0;
    border: 1px solid #D6DDEB;
    background-color: white;
    cursor: pointer;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.pagination button:hover {
    background-color: #f0f4ff;
    color: #4640DE;
}

.pagination button.active {
    background-color: #4640DE;
    color: white;
    font-weight: bold;
}


</style>
<body>
    <div class="container-myProfile">
        <div class="sidebar">
            <div class="top-sidebar">
                <a href="<?php echo BASE_URL; ?>/homepage/index" style="text-decoration: none; color: black;"><h3>JobFunny</h3></a>
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>/homepage/index"><i style="padding-left: 10px;" class="fa-solid fa-house"></i> Trang chủ</a></li>
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
                        <h2>Lương Thông</h2>
                        <p>nlthong02@gmail.com</p>
                    </div>
                </div>
            </div>
            
        </div>        
    
        <div class="content-myProfile">
            <div class="myProfile">
                <div class="header-myProfile">
                    <h2>Đơn ứng tuyển của tôi</h2>
                    <a href="<?php echo BASE_URL; ?>/homepage/index" style="text-decoration: none;"><button>Quay lại trang chủ</button></a>
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
                                <!-- Dữ liệu tĩnh cho demo -->
                                <tr>
                                    <td>1</td>
                                    <td class="company-info">
                                        <img src="https://via.placeholder.com/24" alt="Nomad">
                                        <span>Nomad</span>
                                    </td>
                                    <td>Social Media Assistant</td>
                                    <td>24 July 2021</td>
                                    <td><span class="status pending">Pending</span></td>
                                    <td><i class="fa-solid fa-ellipsis"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="company-info">
                                        <img src="https://via.placeholder.com/24" alt="Udacity">
                                        <span>Udacity</span> 
                                    </td>
                                    <td>Social Media Assistant</td>
                                    <td>20 July 2021</td>
                                    <td><span class="status accepted">Accepted</span></td>
                                    <td><i class="fa-solid fa-ellipsis"></i></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="company-info">
                                        <img src="https://via.placeholder.com/24" alt="Packer">
                                        <span>Packer</span> 
                                    </td>
                                    <td>Social Media Assistant</td>
                                    <td>16 July 2021</td>
                                    <td><span class="status accepted">Accepted</span></td>
                                    <td><i class="fa-solid fa-ellipsis"></i></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="company-info">
                                        <img src="https://via.placeholder.com/24" alt="Divvy">
                                        <span>Divvy</span> 
                                    </td>
                                    <td>Social Media Assistant</td>
                                    <td>14 July 2021</td>
                                    <td><span class="status pending">Pending</span></td>
                                    <td><i class="fa-solid fa-ellipsis"></i></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="company-info">
                                        <img src="https://via.placeholder.com/24" alt="DigitalOcean">
                                        <span>DigitalOcean</span> 
                                    </td>
                                    <td>Social Media Assistant</td>
                                    <td>10 July 2021</td>
                                    <td><span class="status rejected">Rejected</span></td>
                                    <td><i class="fa-solid fa-ellipsis"></i></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="company-info">
                                        <img src="https://via.placeholder.com/24" alt="Nomad">
                                        <span>Paradox</span>
                                    </td>
                                    <td>Social Media Assistant</td>
                                    <td>08 July 2021</td>
                                    <td><span class="status accepted">Accepted</span></td>
                                    <td><i class="fa-solid fa-ellipsis"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination">
                            <button>&laquo;</button>
                            <button class="active">1</button>
                            <button>2</button>
                            <button>3</button>
                            <button>...</button>
                            <button>&raquo;</button>
                        </div>
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
