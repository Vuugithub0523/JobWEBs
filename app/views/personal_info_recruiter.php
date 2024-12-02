<div id="personal-info" class="profile-session" style="display: none;">
    <div class="header">
        <h1>Hồ sơ của tôi</h1>
    </div>
    <div class="basic_info">
        <h3>Thông tin cơ bản</h3>
        <p>Đây là thông tin cá nhân của bạn mà bạn có thể cập nhật bất kỳ lúc nào.</p>
    </div>
    <div class="form-section">
        <div class="avatar-container">
        <!-- Avatar Display -->
            <div class="avatar">
                <img src="https://via.placeholder.com/100" alt="Avatar" id="avatarImage">
            </div>

            <!-- Upload Box -->
            <label class="upload-box" for="avatarInput">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2a10 10 0 1 1-10 10A10 10 0 0 1 12 2m0-2a12 12 0 1 0 12 12A12 12 0 0 0 12 0Zm2 13h-4v4H8v-4H4v-2h4V7h2v4h4Z"/>
                </svg>
                <span>Nhấn để thay thế<br>hoặc kéo và thả<br>SVG, PNG, JPG hoặc GIF (tối đa. 400 x 400px)</span>
                <input type="file" id="avatarInput" accept="image/*">
            </label>
        </div>
        <form action="#" method="POST" class="form_basic_info">
            <?php
                    foreach($userbyid as $key => $value) {
            ?>
            <div class="form-group">
                <label for="name">Họ và tên *</label>
                <input type="text" id="name" name="name" placeholder="Họ và tên" value="<?php echo $value['full_name'] ?>">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại *</label>
                <input type="text" id="phone" name="phone" placeholder="Số điện thoại" value="<?php echo $value['phone'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="Địa chỉ email" value="<?php echo $value['email'] ?>">
            </div>
            <?php
                }
            ?>
        </form>
    
        <!-- Company Information -->
        <div class="card company-info">
            <h3 class="card-header">Thông tin công ty</h3>
            <form action="#" method="POST" class="card-content form_company_info">
                <div class="form-group">
                    <label for="company-name">Tên công ty *</label>
                    <input type="text" id="company-name" name="company-name" placeholder="Tên công ty">
                </div>
                <div class="form-group">
                    <label for="logo">Logo *</label>
                    <input type="file" id="logo" name="logo" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="website">Website *</label>
                    <input type="url" id="website" name="website" placeholder="Trang web">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ *</label>
                    <input type="text" id="address" name="address" placeholder="Địa chỉ">
                </div>
                <div class="form-group">
                    <label for="employees">Số lượng nhân viên *</label>
                    <input type="number" id="employees" name="employees" placeholder="Số lượng nhân viên">
                </div>
                <div class="form-group">
                    <label for="industry">Ngành nghề *</label>
                    <input type="text" id="industry" name="industry" placeholder="Ngành nghề">
                </div>
                <div class="form-group">
                    <label for="founded">Ngày thành lập *</label>
                    <input type="date" id="founded" name="founded">
                </div>
                <div class="form-group">
                    <label for="technology">Công nghệ *</label>
                    <input type="text" id="technology" name="technology" placeholder="Công nghệ">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả *</label>
                    <textarea id="description" name="description" placeholder="Mô tả công ty"></textarea>
                </div>
                <button type="submit" class="btn-save">Lưu hồ sơ</button>
            </form>
        </div>
    </div>
</div>