   // JS để chỉnh sửa AVT nhà tuyển dụng

   const avatarInput = document.getElementById('avatarInput');
   const avatarImage = document.getElementById('avatarImage');
   avatarInput.addEventListener('change', (event) => {
       const file = event.target.files[0];
       if (file) {
       const reader = new FileReader();
       reader.onload = (e) => {
           avatarImage.src = e.target.result;
       };
       reader.readAsDataURL(file);
       }
   });
   
   // JS xử lí nút open, close
   
   // let action = document.querySelectorAll(".badge").textContent;
   // if (action == 'Open') {
   //     action.classList.add("open");
   // }else {
   //     action.classList.add("close");
   // }
   
   // -----------------------JS để chỉnh sửa AVT nhà tuyển dụng-----------------------------
   
   
   // JS ẩn hiện các phần khi nhấn vào menu
   document.getElementById("home-button").addEventListener("click", function () {
       document.getElementById("dashboard").style.display = "block";
       document.getElementById("personal-info").style.display = "none";
       document.getElementById("job-list").style.display = "none";
       document.getElementById('applicant-list').style.display = 'none';
       document.getElementById('applicant-detail').style.display = 'none';
       document.getElementById('create-job-form').style.display = 'none';
   });
   document.getElementById("profile-button").addEventListener("click", function () {
       document.getElementById("dashboard").style.display = "none";
       document.getElementById("personal-info").style.display = "block";
       document.getElementById("job-list").style.display = "none";
       document.getElementById('applicant-list').style.display = 'none';
       document.getElementById('applicant-detail').style.display = 'none';
       document.getElementById('create-job-form').style.display = 'none';
   
   });
   document.getElementById("job-list-button").addEventListener("click", function () {
       document.getElementById("dashboard").style.display = "none";
       document.getElementById("personal-info").style.display = "none";
       document.getElementById("job-list").style.display = "block";
       document.getElementById('applicant-list').style.display = 'none';
       document.getElementById('applicant-detail').style.display = 'none';
       document.getElementById('create-job-form').style.display = 'none';
   
   });
   
   // --------------------------JS ẩn hiện các phần khi nhấn vào menu---------------------------
   
   // JS Dashboard tạo biểu đồ
   document.addEventListener("DOMContentLoaded", function () {
       let total_jobs =  document.getElementById('total_jobs').textContent;
       let total_rejected = document.getElementById('total_rejected').textContent;
       let total_accepted = document.getElementById('total_accepted').textContent;
       let total_pending = document.getElementById('total_pending').textContent;
     function createPerformanceData() {
         return {
             labels: ['Open Jobs', 'Closed Jobs', 'Pending Applications', 'Accepted Applications'],
             datasets: [{
                 label: 'Job Performance',
                 data: [total_jobs, total_rejected, total_accepted, total_pending],
                 backgroundColor: [
                     'rgba(75, 192, 192, 0.2)',
                     'rgba(255, 99, 132, 0.2)',
                     'rgba(255, 206, 86, 0.2)',
                     'rgba(54, 162, 235, 0.2)'
                 ],
                 borderColor: [
                     'rgba(75, 192, 192, 1)',
                     'rgba(255, 99, 132, 1)',
                     'rgba(255, 206, 86, 1)',
                     'rgba(54, 162, 235, 1)'
                 ],
                 borderWidth: 1
             }]
         };
     }
     function initializeChart(chartId, data) {
         const ctx = document.getElementById(chartId).getContext('2d');
         new Chart(ctx, {
             type: 'bar',
             data: data,
             options: {
                 responsive: true,
                 plugins: {
                     legend: {
                         display: true,
                         position: 'top'
                     }
                 },
                 scales: {
                     y: {
                         beginAtZero: true
                     }
                 }
             }
         });
     }
     const performanceData = createPerformanceData();
     initializeChart('jobPerformanceChart', performanceData);
   });
   
   
   // JS để thêm class active khi nhấn vào menu
   const menuItems = document.querySelectorAll('.sidebar .menu ul li a');
   menuItems.forEach(item => {
       item.addEventListener('click', () => {
           menuItems.forEach(i => i.parentElement.classList.remove('active'));
           item.parentElement.classList.add('active');
       });
   });
   
   // ------------------------------JS để thêm class active khi nhấn vào menu-------------------------------------
   
   
   // JS chuyển sang danh sách ứng viên khi ấn vào tên công việc
   // Tìm tất cả các thẻ <a> trong danh sách công việc
   document.querySelectorAll("#job-list .job-title a").forEach((link) => {
       link.addEventListener("click", function (event) {
         event.preventDefault();
         
         // Lấy tiêu đề công việc từ nội dung của thẻ <a>
         const jobTitle = this.textContent.trim();
     
         // Gọi hàm hiển thị danh sách ứng viên với tiêu đề công việc
         showApplicants(jobTitle);
       });
     });
     
     function showApplicants(jobTitle) {
       const jobList = document.getElementById("job-list");
       const applicantsList = document.getElementById("applicants-list");
       const jobTitleElement = document.getElementById("job-title");
       const tbody = applicantsList.querySelector("tbody");
     
       // Ẩn danh sách công việc, hiển thị danh sách ứng viên
       jobList.style.display = "none";
       applicantsList.style.display = "block";
     
       // Gán tiêu đề công việc cho danh sách ứng viên
       jobTitleElement.textContent = `Tổng số ứng viên cho công việc: ${jobTitle}`;
     
       // Dữ liệu giả lập cho ứng viên (bạn có thể thay bằng dữ liệu từ server)
       const applicantsData = {
         "Social Media Assistant": [
           { name: "Jake Gyll", status: "Đang xem xét", date: "13-07-2021", action: "Xem đơn ứng tuyển" },
           { name: "Guy Hawkins", status: "Đang xem xét", date: "12-07-2021", action: "Xem đơn ứng tuyển" },
         ],
         // Thêm các job khác tương tự...
       };
     
       // Lấy danh sách ứng viên theo công việc
       const applicants = applicantsData[jobTitle] || [];
     
       // Làm trống nội dung cũ trong bảng
       tbody.innerHTML = "";
     
       // Thêm ứng viên vào bảng
       applicants.forEach((applicant) => {
         const row = document.createElement("tr");
         row.innerHTML = `
           <td>${applicant.name}</td>
           <td>${applicant.status}</td>
           <td>${applicant.date}</td>
           <td><button>${applicant.action}</button></td>
         `;
         tbody.appendChild(row);
       });
     }
     
     // Hàm quay lại danh sách công việc
     function showJobList() {
       const jobList = document.getElementById("job-list");
       const applicantsList = document.getElementById("applicants-list");
     
       jobList.style.display = "block";
       applicantsList.style.display = "none";
     }
   
     document.querySelectorAll('.job-title a').forEach((link) => {
       link.addEventListener('click', (e) => {
         e.preventDefault();
         document.getElementById('job-list').style.display = 'none';
         document.getElementById('applicant-list').style.display = 'block';
       });
     });
     
     
   // JS khi từ danh sách ứng viên quay về menu
   // Khi nhấn vào các công việc trong job-list để xem ứng viên
   document.querySelectorAll('.job-title a').forEach((link) => {
       link.addEventListener('click', (e) => {
         e.preventDefault();
         // Ẩn danh sách công việc
         document.getElementById('job-list').style.display = 'none';
         // Hiển thị danh sách ứng viên
         document.getElementById('applicant-list').style.display = 'block';
       });
     });
     
     // Hàm để quay về trang danh sách công việc hoặc các trang khác (ẩn applicant-list và hiển thị job-list)
     function resetView() {
       document.getElementById('job-list').style.display = 'block';  // Hiển thị job-list
       document.getElementById('applicant-list').style.display = 'none';  // Ẩn applicant-list
     }
     
     // Áp dụng hàm resetView khi quay lại các trang chính (Profile, Dashboard, Job List, v.v)
     document.querySelectorAll('.back-to-main').forEach((backButton) => {
       backButton.addEventListener('click', (e) => {
         resetView();
       });
     });
     
   // JS xử lí hiện thông tin ứng viên khi nhấn vào xem đơn ứng tuyển
   
   
   document.addEventListener("DOMContentLoaded", () => {
       const applicantList = document.getElementById("applicant-list");
       const applicantDetail = document.getElementById("applicant-detail");
       const backBtn = document.getElementById("back-btn");
       const viewBtns = document.querySelectorAll(".btn-view");
   
       // Hiển thị chi tiết ứng viên
       viewBtns.forEach((btn) => {
           btn.addEventListener("click", () => {
               console.log('hello');
               applicantList.style.display = "none";
               applicantDetail.style.display = "block";
           });
       });
   
       // Quay lại danh sách ứng viên
       backBtn.addEventListener("click", () => {
           applicantDetail.style.display = "none";
           applicantList.style.display = "block";
       });
   });
   
   document.addEventListener("DOMContentLoaded", () => {
       const addNewJobBtns = document.querySelectorAll("#add-new-job-btn");
       const jobList = document.getElementById("job-list");
       const applicantList = document.getElementById("applicant-list");
       const applicantDetail = document.getElementById("applicant-detail");
       const createJobForm = document.getElementById("create-job-form");
   
       addNewJobBtns.forEach((btn) => {
           btn.addEventListener("click", () => {
               createJobForm.style.display = "block";
               jobList.style.display = "none";
               applicantList.style.display = "none";
               applicantDetail.style.display = "none";
           });
       });
   });
   
   