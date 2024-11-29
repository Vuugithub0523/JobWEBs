<style>
    *{
        box-sizing:border-box;
    }
    .a {
        text-decoration:none;
        color:black;
    }
    html, body{
        height:100vh;
        margin:0;
        padding:0;
        background:pink;
        display:flex;
        flex-direction:column;
    }
    .rg-parent{
        width:100%;
        display:flex;
        flex-grow:1;
        background-color:green;
    }
    .rg-left{
        width:40%;
        height:100%;
    }
    .rg-right{
        width:60%;
        height:100%;
        display:flex;
        flex-direction:column;
        align-items:center;
        background-color:yellow;
        padding-top:50px;
    }
    .lg-right{
        width:60%;
        height:100%;
        display:flex;
        flex-direction:column;
        align-items:center;
        background-color:yellow;
        padding-top:120px;
    }
    .rg-mainPart{
        width:60%;
    }
    .rg-section{
        width:100%;
        display:flex;
        justify-content:center;
        padding:0 10px;
    }
    .rg-option{
        padding:5px 10px;
        margin:0 10px;
    }
    .rg-option:hover{
        background:green;
    }
    .rg-option:hover > a > b{
        color:white;
    }
    .rg-form{
        width:100%;
    }
    .rg-form h1{
        text-align:center;
    }
    .rg-field{
        width:100%;
        display:flex;
        margin-bottom:20px;
    }
    .rg-field input{
        flex:1;
        background:inherit;
        display:inline-block;
        height:30px;
    }
    .rg-industry{
        flex:1;
        background:inherit;
        display:inline-block;
        height:30px;
    }
    .rg-button1{
        width: 100%;
        margin:10px 0;
        padding: 10px 0;
    }
    .rg-titleField{
        margin-bottom:5px;
    }
    .rg-button2{
        margin:10px 0;
        padding: 10px 20px;
        margin-left:20px;
    }
    .rg-progress{
        width: 100%;
        padding:0 30px 40px 30px;
        display:flex;
        justify-content: space-around;
        margin-bottom:20px;
    }
    .rg-State{
        width: 30px;
        height:30px;
        border-radius:50px;
        border:1px solid black;
        display:flex;
        justify-content:center;
        align-items:center;
        position:relative;
    }
    .rg-statusInfo{
        display:inline-block;
        width:80px;
        position:absolute;
        bottom:-90%;
        left:50%;
        transform: translateX(-50%);
        text-align:center;
    }
    .rg-boxButton{
        width:100%;
        display:flex;
        flex-direction:row-reverse;
        margin:10px 0;
    }
    .background-green{
        background-color:green !important;
    }
    .border-green{
        border:1px solid green !important;
    }
    .text-white{
        color:white !important;
    }
    .text-green{
        color:green !important;
    }
</style>
<div class="rg-parent">
    <div class="rg-left">
        
    </div>
    <div class="lg-right">
        <div class="rg-mainPart">
            <div class="rg-section">
                <div class="rg-option" id="rg-op1"><a class="a" href="register-back.php?register=1"><b id="rg-opB1">Ứng viên</b></a></div>
                <div class="rg-option" id="rg-op2"><a class="a" href="register-back.php?register=2"><b id="rg-opB2">Nhà tuyển dụng</b></a></div>
            </div>
            <form action="?url=login/login" method="POST" name="myForm" class="rg-form">
                <h1>Đăng Nhập</h1>
                <div class="rg-titleField"><b>Email</b></div>
                <div class="rg-field">
                    <input type="email" placeholder="Nhập email" name="rg-email" required>
                </div>
                <div class="rg-titleField"><b>Mật khẩu</b></div>
                <div class="rg-field">
                    <input type="password" placeholder="Nhập mật khẩu" name="rg-password" required>
                </div>
                <button type="submit" class="rg-button1" name="logIn">Đăng Nhập</button>
            </form>
            <div class="rg-field">Bạn chưa có tài khoản?<a href="?url=register/registerUser">Đăng ký</a></div>
        </div><!--body right-->
    </div><!-- rg-right-->
</div><!--container-->