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

document.getElementById("home-button").addEventListener("click", function() {
    // Ẩn phần thông tin cá nhân và hiển thị dashboard
    document.getElementById("personal-info").style.display = "none";
    document.getElementById("dashboard").style.display = "block";
});

document.getElementById("profile-button").addEventListener("click", function() {
    // Ẩn dashboard và hiển thị thông tin cá nhân
    document.getElementById("personal-info").style.display = "block";
    document.getElementById("dashboard").style.display = "none";
});

// JS Dashboard
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("dashboard").style.display = "block";
  document.getElementById("personal-info").style.display = "none";
  // Hàm tạo dữ liệu cho biểu đồ
  function createPerformanceData() {
      return {
          labels: ['Open Jobs', 'Closed Jobs', 'Pending Applications', 'Accepted Applications'],
          datasets: [{
              label: 'Job Performance',
              data: [5, 2, 1, 3], // Thay thế bằng dữ liệu động nếu có
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

  // Hàm khởi tạo biểu đồ
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

  // Gọi các hàm để khởi tạo biểu đồ
  const performanceData = createPerformanceData();
  initializeChart('jobPerformanceChart', performanceData);
});


