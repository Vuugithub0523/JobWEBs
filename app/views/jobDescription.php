<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Công Việc</title>
    <link rel="stylesheet" href="jobDescriptions.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<style>
    /* Tổng quan */
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
    /* display: flex;
    justify-content: space-between;
    align-items: center; */
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.job-header img {
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    object-fit: cover;
    top: 15px;
    left: 100px;
}

.job-header span {
    position: absolute;
    top: 22px;
    left: 155px;
    font-size: 26px;
    font-weight: bold;
}

.job-header a {
    position: absolute;
    top: 27px;
    left: 345px;
    font-size: 16px;
    text-decoration: none;
    color: #5e5b5b;
}


.job-details {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.job-details .job-overview {
    margin-top: 71px;
    width: 99vw;
    height: 220px;
    background-color: #F8F8FD;
    display: flex;
    justify-content: center;
    align-items: center;
}

.job-summary {
    width: 80vw;
    height: 110px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.left-job-summary {
    display: flex;
    gap: 15px;
    width: 45%;
    height: 60px;
    background-color: rgb(255, 255, 255);
    margin-left: 25px;
}

.left-job-summary img {
    width: 60px;
    height: 60px;
    object-fit: cover;
}

.left-job-summary .info-job-summary {
    display: flex;
    flex-direction: column;
}

.left-job-summary .info-job-summary h2 {
    margin: 5px;
    font-size: 19px;
}

.left-job-summary .info-job-summary p {
    margin: 5px;
    font-size: 15px;
    color: #5e5b5b;
}

.right-job-summary {
    display: flex;
    justify-content: right;
    align-items: center;
    background-color: white;
    width: 15%;
    height: 60px;
    margin-right: 25px;
}

/* .right-job-summary i {
    font-size: 20px;
    color: #c3c3c3;
}

.right-job-summary .behind-line {
    width: 1px;
    height: 45px;
    background-color: #5e5b5b;
} */

.right-job-summary button {
    margin-right: 10px;
    width: 120px;
    height: 50px;
    background-color: rgb(80, 80, 242);
    border: none;
    font-weight: bold;
    color: white;
}

.job-benefits {
    display: flex;
    flex-direction: column;
    margin: 0px 150px;
    width: 80vw;
    height: 350px;
}

.job-benefits .intro-job-benefits {
    width: 100%;
    height: 140px;
}

.job-benefits .intro-job-benefits h2 {
    margin: 50px 0 10px 0;
    font-size: 26px;
    font-weight: lighter;
}

.job-benefits .intro-job-benefits span {
    color: #5e5b5b;
    font-weight: lighter;
    font-size: 17px;
}

.details-job-benefits {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 210px;
}

.left-job-details-benefits {
    width: 31%;
    height: 190px;
}

.left-job-details-benefits i {
    font-size: 35px;
    color: #4640DE;
}

.left-job-details-benefits h3 {
    font-weight: lighter;
    width: 270px;
    font-size: 22px;
    margin: 25px 0px 15px 0px;
}

.left-job-details-benefits p {
    font-size: 16px;
    color: #5e5b5b;
}

.middle-job-details-benefits {
    width: 31%;
    height: 190px;
}

.middle-job-details-benefits i {
    font-size: 35px;
    color: #4640DE;
}

.middle-job-details-benefits h3 {
    font-weight: lighter;
    width: 270px;
    font-size: 22px;
    margin: 25px 0px 15px 0px;
}

.middle-job-details-benefits p {
    font-size: 16px;
    color: #5e5b5b;
}

.right-job-details-benefits {
    width: 31%;
    height: 190px;
}

.right-job-details-benefits i {
    font-size: 35px;
    color: #4640DE;
}

.right-job-details-benefits h3 {
    font-weight: lighter;
    width: 270px;
    font-size: 22px;
    margin: 25px 0px 15px 0px;
}

.right-job-details-benefits p {
    font-size: 16px;
    color: #5e5b5b;
}

.job-description {
    margin-top: 50px;
    width: 55vw;
}

.details-job-description {
    margin-bottom: 30px;
}

.details-job-description h2 {
    font-size: 26px;
    font-weight: lighter;
    margin: 15px 0 10px 0;
}

.details-job-description p {
    font-size: 16px;
    color: #5e5b5b;
}

.details-job-description p span {
    color: #56CDAD;
    margin-right: 5px;
}

.company-info {
    display: flex;
    justify-content: space-between;
    margin: 0px 145px;
    align-items: center;
    /* width: 99vw; */
    height: 370px;
    border-top: 1px solid #c8c8c8;
}

.company-description{
    display: flex;
    flex-direction: column;
    width: 40%;
    height: 170px;
}


.top-company-description {
    height: 35%;
    display: flex;
}

.top-company-description img {
    width: 60px; 
    height: 60px;
}

.moreInfo-company {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

.moreInfo-company h3 {
    margin: 0;
    margin-left: 15px;
    font-weight: lighter;
    font-size: 26px;
}

.moreInfo-company a {
    margin: 0;
    margin-left: 15px;
    font-weight: bold;
    color: #4640DE;
    text-decoration: none;
    font-size: 14px;
}

.bottom-company-description {
    margin-top: 10px;
    font-size: 15px;
    color: #515B6F;
}

.company-images {
    display: flex;
    justify-content: space-between;
    width: 45%;
    height: 270px;
}

.company-images .main-company-images {
    object-fit: cover;
    width: 300px;
    height: 270px;
    margin-left: 50px;
}

.small-company-images {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.small-company-images img {
    object-fit: cover;
    width: 170px;
    height: 130px;
}

.similar-jobs {
    width: 99vw;
    height: auto;
    background-color: #F8F8FD;
    display: flex;
    flex-direction: column;
    padding-bottom: 70px;
}

.similar-jobs .header-similar-jobs {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 130px;
    background-color: #F8F8FD;
}

.similar-jobs .header-similar-jobs h2, a {
    margin: 0 150px;
}

.similar-jobs .header-similar-jobs h2 {
    font-weight: lighter;
    font-size: 26px;
}

.similar-jobs .header-similar-jobs a {
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    color: #4640DE;
}

.similar-jobs .header-similar-jobs a i{
    margin-left: 10px;
}

.similar-jobs .job-grid {
    display: grid;
    grid-template-columns: repeat(2, 48%);
    row-gap: 30px;
    column-gap: 50px;
    margin: 0 150px;
}

.job-grid .job-card {
    padding: 15px 0;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
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
    width: 300px;
    font-size: 20px;
    margin: 10px 0 7px 0;
}

.job-card .infor-job-card p {
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

/* */
</style>

<body>
    <!-- Header -->
    <div class="job-header">
        <img src="https://th.bing.com/th/id/OIP.nENBwk5XIZwapRzUo_7VWQHaHa?w=512&h=512&rs=1&pid=ImgDetMain" alt="Stripe">
        <span>JobFunny</span>

        <a href="#">Tìm việc</a>

        <!-- <div class="auth-buttons">
            <button class="btn-login">Đăng nhập</button>
            <button class="btn-register">Đăng ký</button>
        </div> -->
    </div>

    <!-- Job Overview -->
    <div class="job-details">
        <div class="job-overview">
            <div class="job-summary">
                <div class="left-job-summary">
                    <img src="https://th.bing.com/th/id/OIP.nENBwk5XIZwapRzUo_7VWQHaHa?w=512&h=512&rs=1&pid=ImgDetMain" alt="logo-company">
                    <div class="info-job-summary">
                        <h2>Social Media Assistant</h2>
                        <p>Stripe • Paris, France • Full-Time</p>
                    </div>
                </div>

                <div class="right-job-summary">
                    <!-- <i class="fas fa-share-alt"></i>
                    <div class="behind-line"></div> -->
                    <button class="btn-apply">Nộp</button>
                </div>
            </div>

            <!-- <h1>Social Media Assistant</h1>
            <p>Stripe • Paris, France • Full-Time</p>
            <div class="job-actions">
                <button class="btn-apply">Nộp</button>
                <i class="fas fa-share-alt"></i>
            </div> -->
        </div>

        <!-- Benefits -->
        <div class="job-benefits">
            <div class="intro-job-benefits">
                <h2>Quyền lợi & Lợi ích</h2>
                <span>Công việc này đi kèm với một số đặc quyền và lợi ích</span>
            </div>

            <div class="details-job-benefits">
                <div class="left-job-details-benefits">
                    <i class="fa-solid fa-stethoscope"></i>
                    <h3>Chăm sóc sức khỏe đầy đủ</h3>
                    <p>Chúng tôi tin và những cộng đồng thịnh vượng và điều đó bắt đầu từ việc nhóm của chúng tôi hạnh phúc và khỏe mạnh</p>
                </div>

                <div class="middle-job-details-benefits">
                    <i class="fa-solid fa-water-ladder"></i>
                    <h3>Kỳ nghỉ không giới hạn</h3>
                    <p>Chúng tôi tin rằng bạn nên có một lịch trình linh hoạt để tạo không gian cho gia đình, sức khỏe và niềm vui.</p>
                </div>

                <div class="right-job-details-benefits">
                    <i class="fa-solid fa-camera"></i>
                    <h3>Phát triển kỹ năng</h3>
                    <p>Chúng tôi tin vào việc luôn học hỏi và nâng cao kỹ năng của mình. Cho dù đó là một hội nghị hay khóa học trực tuyến.</p>
                </div>
            </div>
            <!-- 
            <div class="benefits-list">
                <div class="benefit-item">
                    <i class="fas fa-stethoscope"></i>
                    <p><strong>Chăm sóc sức khỏe đầy đủ</strong></p>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-plane"></i>
                    <p><strong>Kỳ nghỉ không giới hạn</strong></p>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p><strong>Phát triển kỹ năng</strong></p>
                </div>
            </div> -->
        </div>

        <!-- Job Description -->
        <div class="job-description">
            <div class="details-job-description">
                <h2>Mô tả</h2>
                <p>Stripe đang tìm kiếm chuyên gia Tiếp thị truyền thông xã hội để giúp quản lý mạng trực tuyến của chúng tôi. Bạn sẽ chịu trách nhiệm giám sát các kênh truyền thông xã hội của chúng tôi, tạo nội dung, tìm ra những cách hiệu quả để thu hút cộng đồng và khuyến khích người khác tham gia trên các kênh của chúng tôi.</p>
            </div>

            <div class="details-job-description">
                <h2>Trách nhiệm</h2>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Sự tham gia của cộng đồng để đảm bảo điều đó được hỗ trợ và đại diện tích cực trực tuyến</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Tập trung vào phát triển và xuất bản nội dung truyền thông xã hội</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Hỗ trợ tiếp thị và chiến lược</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Luôn cập nhật các xu hướng trên nền tảng truyền thông xã hội và đề xuất ý tưởng nội dung cho nhóm</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Tương tác với cộng đồng trực tuyến</p>
            </div>

            <div class="details-job-description">
                <h2>Bạn là ai</h2>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Bạn nhận được năng lượng từ mọi người và xây dựng môi trường làm việc lý tưởng</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Bạn có ý thức về không gian đẹp và trải nghiệm văn phòng</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Bạn là một người quản lý văn phòng tự tin, sẵn sàng đảm nhận thêm trách nhiệm</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Bạn là người có định hướng chi tiết và sáng tạo</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Bạn là nhà tiếp thị tăng trưởng và biết cách chạy chiến dịch</p>
            </div>

            <div class="details-job-description">
                <h2>Những điều cần có</h2>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Thông thạo tiếng Anh</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Kỹ năng quản lý dự án</p>
                <p><span><ion-icon name="checkmark-circle-outline"></ion-icon></span>Sao chép kỹ năng chỉnh sửa</p>
            </div>
            <!-- <h2>Mô tả</h2>
            <p>Stripe đang tìm kiếm chuyên gia Tiếp thị truyền thông xã hội...</p> -->
        </div>
    </div>

    <!-- Company Info Section -->
    <div class="company-info">
        <div class="company-description">
            <div class="top-company-description">
                <img src="https://th.bing.com/th/id/OIP.nENBwk5XIZwapRzUo_7VWQHaHa?w=512&h=512&rs=1&pid=ImgDetMain" alt="Stripe">

                <div class="moreInfo-company">
                    <h3>Stripe</h3>
                    <a href="#" class="read-more">Đọc thêm về Stripe <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="bottom-company-description">
                <p>Stripe là một công ty công nghệ xây dựng cơ sở hạ tầng kinh tế cho Internet. Các doanh nghiệp thuộc mọi quy mô - từ các công ty khởi nghiệp mới đến các công ty đại chúng - sử dụng phần mềm của chúng tôi để chấp nhận thanh toán và quản lý doanh nghiệp của họ trực tuyến.</p>
            </div>
        </div>

        <div class="company-images">
            <img class="main-company-images" src="https://japan-itworks.vn/storage/media/tinymce/blog/1628560382-1628560382-435.jpg" alt="Image 1">
            <div class="small-company-images">
                <img src="https://weconnect.co/wp-content/uploads/2019/11/services-leadJapan.jpg" alt="Image 2">
                <img src="https://weconnect.co/wp-content/uploads/2019/11/services-leadJapan.jpg" alt="Image 3">
            </div>
        </div>
    </div>

    <!-- Similar Jobs -->
    <div class="similar-jobs">
        <div class="header-similar-jobs">
            <h2>Similar Jobs</h2>
            <a href="#" class="show-more-jobs">Hiển thị tất cả công việc <i class="fas fa-arrow-right"></i></a>
        </div>
    
        <div class="job-grid">
            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
                
            </div>

            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
            </div>

            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
            </div>

            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
            </div>

            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
            </div>

            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
            </div>

            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
            </div>

            <div class="job-card">
                <div class="job-logo"><img src="https://via.placeholder.com/50" alt="Logo"></div>
                
                <div class="infor-job-card">
                    <h3>Social Media Assistant</h3>
                    <p>Nomad <span>• Sơn Trà, Đà Nẵng</span></p>
                    <div class="job-tags">
                        <span class="tag-full-time">Full-Time</span>
                        <span class="tag-part-time">Part-Time</span>
                    </div>
                </div>
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
</body>
</html>
