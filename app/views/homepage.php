<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/homepage.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Calistoga&family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
}

/* Header */
.job-header {
    position: fixed;
    width: 100vw;
    height: 70px;
    z-index: 1000;
    background-color: white;
    /* background-color: #F8F8FD; */
    /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
}

.job-header-container {
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.job-header-container img {
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    object-fit: cover;
    top: 15px;
    left: 100px;
}

.job-header-container span {
    position: absolute;
    top: 22px;
    left: 155px;
    font-size: 26px;
    font-weight: bold;
}

.job-header-container a {
    position: absolute;
    top: 27px;
    left: 345px;
    font-size: 16px;
    text-decoration: none;
    color: #515B6F;
}

.auth-buttons {
    padding-right: 100px;
}

.auth-buttons button {
    border: none;
    font-size: 15px;;
    width: 100px;
    height: 40px;
    margin: 0 10px;
    font-weight: bold;
}

.auth-buttons .btn-login {
    color: #4640DE;
    background-color: white;
    cursor: pointer;
}

.auth-buttons .btn-register {
    color: white;
    background-color: #4640DE;
    cursor: pointer;
}

.job-banner {
    position: relative;
    top: 70px;
    width: 100%;
    height: auto;
    padding: 10px 0 15px 0;
    background-color: #F8F8FD;
}

.job-banner-container {
    display: flex;
    flex-direction: column;
    /* background-color: pink; */
    margin: 40px 110px 30px 110px;
}

.job-banner-container h1 {
    margin: 10px 0 30px 0;
    width: 600px;
    font-family: "Calistoga", serif;
    letter-spacing: 3px;
    /* font-weight: lighter; */
    color: #26A4FF;
    font-size: 70px;
}

.job-banner-container img {
    width: 500px;
    height: auto;
    display: inline-block;
}

.job-banner-container p {
    font-family: "Epilogue", sans-serif;
    line-height: 1.5;
    color: #515B6F;
    width: 380px;
}

.input-search-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 10px 0;
    width: 900px;
    height: 70px;
    background-color: white;
    border-radius: 50px;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
}

.input-search-bar button {
    color: white;
    font-size: 15px;
    font-weight: bold;
    margin: 0 15px;
    background-color: #4640DE;
    border: none;
    border-radius: 50px;
    width: 150px;
    height: 50px;
}

.input-search-detail {
    display: flex;
    align-items: center;
}

.input-search-detail ion-icon {
    margin: 0 20px 0 25px;
    color: #25324B;
    font-size: 27px;
}

.input-search-detail input {
    width: 250px;
    padding: 7px 5px;
    border: none;
    font-size: 15px;
    border-bottom: 1px solid #D6DDEB;
}

.job-banner-container span {
    padding: 15px 0 10px 0;
    color: #60626C;
    font-size: 16px;
}

.logo-companies {
    padding: 90px 0 40px 0;
    width: 100%;
    height: auto;
}

.logo-companies-container {
    margin: 25px 110px;
}

.logo-companies-container p {
    padding: 0 0 15px 0;
    color: #8F9197;
}

.brand-logo-companies img {
    width: 120px;
    height: 30px;
}

.logo-companies-container .brand-logo-companies {
    display: flex;
    justify-content: space-between;
}

.homepage-explore {
    padding: 20px 0 60px 0;
    position: relative;
    width: 100%;
    height: auto;
}

.homepage-explore-container {
    margin: 0 110px;
}

.headline-homepage-explore {
    padding: 15px 0;
    display: flex;
    justify-content: space-between;
}

.headline-homepage-explore h2 {
    font-size: 32px;
    font-family: "ABeeZee", sans-serif;
}

.headline-homepage-explore h2 span {
    color: #26a4ff;
}

.headline-homepage-explore a {
    color: #4640DE;
    font-size: 14px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-decoration: none;;
    gap: 8px;
}

.content-homepage-explore {
    width: 100%;
}

.grid-content-homepage-explore {
    grid-column-gap: 40px;
    grid-row-gap: 40px;
    grid-template-rows: auto;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-auto-columns: 1fr;
    display: grid;
}

.grid-content-homepage-explore a {
    height: 150px;
    border: 1px solid #D6DDEB;
    grid-column-gap: 25px;
    grid-row-gap: 25px;
    text-decoration: none;
    flex-direction: column;
    align-items: flex-start;
    padding: 32px;
    display: flex;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

.grid-content-homepage-explore a .icon {
    color: rgb(70, 64, 222);
    font-size: 30px;
}

.homepage-explore-name {
    grid-column-gap: 12px;
    grid-row-gap: 12px;
    flex-direction: column;
    align-items: flex-start;
    display: flex;
}

.homepage-explore-name h4 {
    margin: 10px 0;
    font-size: 24px;
    color: rgb(37, 50, 75);
}

.homepage-explore-link {
    grid-column-gap: 30px;
    align-items: center;
    display: flex;
    justify-content: space-between;
}

.homepage-explore-link p {
    font-size: 18px;
    color: rgb(124, 132, 147);
}

.homepage-explore-link ion-icon {
    color: rgb(37, 50, 75);
}

.homepage-cta {
    background-color: var(--neutral--0);
    padding-top: 72px;
    padding-bottom: 72px;
    position: relative;
    overflow: hidden;
    /* background-color: pink; */
}

.homepage-cta-container {
    margin: 0 110px;
    z-index: 10;
    max-width: 1240px;
    padding-left: 24px;
    padding-right: 24px;
    position: relative;
    background-color: #4640DE;
}

.banner-homepage-cta {
    z-index: 1;
    background-color: var(--primary);
    justify-content: space-between;
    padding: 92px 70px;
    display: flex;
    position: relative;
    overflow: hidden;
}

/* .banner-homepage-cta-image {
    position: absolute;
    top: 20px;
} */


.banner-homepage-cta-text {
    grid-column-gap: 24px;
    grid-row-gap: 24px;
    flex-direction: column;
    align-items: flex-start;
    width: 100%;
    max-width: 364px;
    display: flex;
}

.banner-homepage-cta-text h2 {
    color: white;
    margin-top: 0;
    margin-bottom: 0;
    font-family: "Calistoga", serif;
    letter-spacing: 2px;
    font-size: 50px;
    font-weight: 550;
    line-height: 110%;
}

.banner-homepage-cta-text p {
    color: white;
    font-family: "Epilogue", sans-serif;
    font-weight: bold;
    font-size: 16px;
    line-height: 160%;
}

.banner-homepage-cta-text a {
    color: #4640DE;
    grid-column-gap: 10px;
    /* grid-row-gap: 100px; */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 0;
    padding: 12px 24px;
    font-family: "Epilogue", sans-serif;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    background-color: white;
    /* line-height: 160%; */
}

.banner-homepage-cta-image {
    width: 100%;
    max-width: 670px;
    max-height: 410px;
    position: absolute;
    top: auto;
    bottom: 0%;
    left: auto;
    right: 55px;
    overflow: hidden;
    transform: translate(0);
}

.banner-homepage-cta-image img {
    object-fit: contain;
    width: 100%;
    max-width: none;
    height: 100%;
}

.lastest-jobs {
    padding-top: 72px;
    padding-bottom: 72px;
    position: relative;
    overflow: hidden;
    background-color: #F8F8FD;
}

.lastest-jobs-container {
    margin: 0 110px;
}

.lastest-jobs-container .headline {
    padding: 0 0 15px 0;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    display: flex;
}

.lastest-jobs-container .headline h2 {
    font-size: 32px;
    font-family: "ABeeZee", sans-serif;
}

.lastest-jobs-container .headline span {
    color: #26a4ff;
}

.lastest-jobs-container .headline a {
    color: #4640DE;
    font-size: 14px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-decoration: none;
    gap: 8px;
}

.lastest-jobs-container .content {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 48%);
    row-gap: 30px;
    column-gap: 50px;
}

.lastest-jobs-container .content .job-card {
    padding: 15px 0;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-decoration: none;
}

.job-card .job-logo {
    margin: 0px 60px;
}

.job-card .job-logo img {
    width: 60px;
    margin-bottom: 20px;
}

.job-card .infor-job-card {
    margin-right: 230px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.job-card .infor-job-card h3 {
    color: #25324B;
    width: 300px;
    font-size: 20px;
    margin: 10px 0 7px 0;
}

.job-card .infor-job-card p {
    color: #7C8493;
    font-size: 16px;
    margin: 7px 0;
}

.job-card .infor-job-card .job-tags {
    font-size: 16px;
    margin: 12px 0 10px 0;
}

.tag-full-time, .tag-part-time {
    width: 50px;
    padding: 10px 15px 10px 15px;
    border-radius: 25px;
    margin-right: 15px;
}

.tag-full-time {
    background-color: #EEFAF7;
    color: #56CDAD;
}

.tag-part-time {
    background-color: rgb(243, 243, 255);
    color:rgb(98, 98, 160)
}


.footer {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 99vw;
    height: 400px;
    background-color: black;
}

.footer-container {
    width: 80.2%;
    height: 80%;
    display: flex;
    flex-direction: column;
}

.footer-small1-container, .footer-small2-container {
    width: 100%;
}

.footer-small1-container {
    color: white;
    display: flex;
    gap: 60px;
    height: 80%;
    padding-bottom: 30px;
}

.footer-small1-container h4 {
    font-size: 18px;
}

.footer-small1-container p {
    margin: 15px 0;
    
}

.intro-small-container {
    width: 565px;
}

.intro-small-container p {
    line-height: 1.5;
}


.category-small-container {
    width: 140px;
}

.resources-small-container {
    width: 140px;
}

.notifications-small-container {
    width: 100px;
}

.notifications-small-container, input {
    height: 35px; 
    width: 280px; 
    border: none;
}

.notifications-small-container, button {
    height: 37px; 
    width: 100px; 
    border: none; 
    margin-left: 10px; 
    border-radius: 7px; 
    background-color: #4640DE; 
    color: white;
}

.footer-small2-container {
    padding-top: 30px;
    border-top: 1px solid #4A4E58;
    height: 20%;
    display: flex;
    justify-content: space-between;
}

.footer-small2-container p {
    color: #8F9197;
}

.footer-small2-container .icon-footer {
    display: flex; 
    gap: 10px;
    padding-top: 5px;
    justify-content: space-between;
    width: 200px;
}

.footer-small2-container i {
    display: flex;               
    justify-content: center; 
    align-items: center;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 20px;
    background-color: #4A4E58;
}
</style>
<?php
    require_once './app/models/jobmodel.php';
?>
<body>
    <!-- Header -->
    <div class="job-header">
        <div class="job-header-container">
            <div class="logo-job-header">
                <img src="https://th.bing.com/th/id/OIP.nENBwk5XIZwapRzUo_7VWQHaHa?w=512&h=512&rs=1&pid=ImgDetMain" alt="Stripe">
                <span>JobFunny</span>
                <a href="#">Tìm việc</a>
                <!-- <a href="#">Duyệt các công ty</a> -->
            </div>
    
            <div class="auth-buttons" >
                <button id="btn-login" class="btn-login">Đăng nhập</button>
                <button id="btn-register" class="btn-register">Đăng ký</button>
            </div>
            <div id="user-info" class="user-info" style="display:none;">
                <img src="https://via.placeholder.com/40" alt="User Avatar" class="user-avatar">
                <span id="username" class="username">Tên người dùng</span>
            </div>
        </div>
    </div>

    <div class="job-banner">
        <div class="job-banner-container">
            <h1>Khám phá hơn 5000+ <br> công việc</h1>
            <img src="https://cdn.prod.website-files.com/6690d5b648b98d802b9b2a05/6690d5b648b98d802b9b2a5d_Homepage%20Hero%20Title%20Pattern.png" alt="">
            <p>Nền tảng tuyệt vời dành cho người tìm việc đang tìm kiếm những đỉnh cao nghề nghiệp mới và đam mê khởi nghiệp.</p>
            <div class="input-search-bar">
                <div class="input-search-detail">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="text" placeholder="Tiêu đề công việc hoặc từ khóa">
                </div>

                <div class="input-search-detail">
                    <ion-icon name="navigate-outline"></ion-icon>
                    <input type="text" placeholder="Nhập địa điểm bạn muốn làm việc">
                </div>

                <button>Tìm kiếm</button>
            </div>
            <span>Phổ biến: UI Designer, UX Researcher, Androi, Admin</span>
        </div>
    </div>

    <div class="logo-companies">
        <div class="logo-companies-container">
            <p>Các công ty chúng tôi đã giúp phát triển</p>
            <div class="brand-logo-companies">
                <img src="https://cdn.prod.website-files.com/6690d5b648b98d802b9b2a05/6690d5b648b98d802b9b2a79_Companies%20Logo%20Vodafone.svg" alt="">
                <img src="https://cdn.prod.website-files.com/6690d5b648b98d802b9b2a05/6690d5b648b98d802b9b2a78_Companies%20Logo%20Intel.svg" alt="">
                <img src="https://cdn.prod.website-files.com/6690d5b648b98d802b9b2a05/6690d5b648b98d802b9b2a5e_Companies%20Logo%20Tesla.svg" alt="">
                <img src="https://cdn.prod.website-files.com/6690d5b648b98d802b9b2a05/6690d5b648b98d802b9b2a77_Companies%20Logo%20AMD.svg" alt="">
                <img src="https://cdn.prod.website-files.com/6690d5b648b98d802b9b2a05/6690d5b648b98d802b9b2a7a_Companies%20Logo%20Talkit.svg" alt="">
            </div>
        </div>
    </div>
    
    <div class="homepage-explore">
        <div class="homepage-explore-container">
            <div class="headline-homepage-explore">
                <h2>Khám phá theo <span>danh mục</span></h2>
                <a href="#">
                    <p>Hiển thị tất cả công việc</p>
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>

            <div class="content-homepage-explore">
                <div class="grid-content-homepage-explore">
                    <?php
                    // Lấy danh sách ngành nghề
                    $industries = $this->getIndustries();

                    // Kiểm tra xem $industries có phải là mảng và không rỗng không
                    if (is_array($industries) && !empty($industries)) {
                        // Lặp qua mảng ngành nghề
                        foreach ($industries as $industry) {
                            // Lấy số lượng công việc cho từng ngành
                            $jobCount = $this->getIndustryJobCount($industry['industry_name']);

                            echo '<a href="#">';
                            echo '    <div class="icon"><i class="fa-solid fa-pencil"></i></div>';
                            echo '    <div class="homepage-explore-name">';
                            echo '        <h4>' . htmlspecialchars($industry['industry_name']) . '</h4>';
                            echo '        <div class="homepage-explore-link">';
                            echo '            <p>' . $jobCount[0]['job_count'] . ' jobs available</p>';
                            echo '            <ion-icon name="arrow-forward-outline"></ion-icon>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</a>';
                        }
                    } else {
                    echo "Không có dữ liệu ngành.";
                    }

                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="homepage-cta">
        <div class="homepage-cta-container">
            <div class="banner-homepage-cta">
                <div class="banner-homepage-cta-text">
                    <h2>Bắt đầu đăng tuyển dụng ngay hôm nay</h2>
                    <p>Bắt đầu đăng tuyển dụng chỉ với 10 đô la.</p>
                    <a href="#">Đăng ký miễn phí</a>
                </div>

                <div class="banner-homepage-cta-image">
                    <img src="https://cdn.prod.website-files.com/6690d5b648b98d802b9b2a05/6690d5b648b98d802b9b2a54_Dashboard%20Company%203.1%20Image.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="lastest-jobs">
        <div class="lastest-jobs-container">
            <div class="headline">
                <h2>Những công việc <span>mới nhất</span></h2>
                <a href="#">
                    <p>Hiển thị tất cả</p>
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
            <div class="content">
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                    
                </a>
    
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                </a>
    
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                </a>
    
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                </a>
    
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                </a>
    
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                </a>
    
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                </a>
    
                <a href="#" class="job-card">
                    <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                    
                    <div class="infor-job-card">
                        <h3>Social Media Assistant</h3>
                        <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                        <div class="job-tags">
                            <span class="tag-full-time">Full-Time</span>
                            <span class="tag-part-time">Part-Time</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-container">
            <div class="footer-small1-container">
                <div class="intro-small-container">
                    <h2>JobFunny</h2>
                    <p>Dành cho những người tìm việc đam mê khởi nghiệp tìm việc đam mê khởi nghiệp. Tìm công việc mơ ước của bạn dễ dàng hơn.</p>
                </div>

                <div class="category-small-container">
                    <h4>Danh mục</h4>
                    <p>Công ty</p>
                    <p>Giá cả</p>
                    <p>Điều khoản</p>
                    <p>Lời khuyên</p>
                </div>

                <div class="resources-small-container">
                    <h4>Tài nguyên</h4>
                    <p>Hướng dẫn</p>
                    <p>Liên hệ</p>
                    <p>Cập nhật</p>
                    <p>Chính sách bảo mật</p>
                </div>

                <div claas="notifications-small-container">
                    <h4>Nhận thông báo việc làm</h4>
                    <p>Những tin tức, bài viết việc làm mới nhất, được gửi tới hộp thư đến của bạn hàng tuần</p>
                    <input class="input-Email" type="text" placeholder="Địa chỉ Email"> 
                    <button >Đăng ký</button>
                </div>
            </div>

            <div class="footer-small2-container">
                <p>2021@JobFunny. All rights reserved.</p>
                <div class="icon-footer">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>

<script>
    const loginBtn = document.getElementById('btn-login');
    const registerBtn = document.getElementById('btn-register');
    loginBtn.addEventListener('click', function () {
        window.location.href = "http://localhost/job_finder_website/login/login";
    });
    registerBtn.addEventListener('click', function () {
        window.location.href = "http://localhost/job_finder_website/login/login?url=register/registerUser";
    }
    );
</script>
</body>
</html>