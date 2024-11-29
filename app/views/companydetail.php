<style>
    *{
        box-sizing:border-box;
    }
    html,body{
        padding:0;
        margin:0;
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f9f9f9;
        color: #333;
    }
    .cf{
        width: 100%;
        padding-left:2%;
        padding-top:10px;
        padding-bottom:10px;
        padding-right:2%;
    }
    .banner-company{
        display:flex;
        margin:20px 0;
    }
    .logo-company{
        width: 120px;
        height:120px;
        border:1px solid black;
    }
    .banber-info{
        flex:1;
        padding-left:20px;
        display:flex;
        flex-direction:column;
        justify-content:space-between;
    }
    .b-row{
        display:flex;
        align-items:center;
    }
    .numJob{
        padding:5px 10px;
        display:flex;
        justify-content:center;
        align-items:center;
        border:1px solid blue;
        margin: 0 10px;
        color:blue;
    }
    .itemC{
        padding:5px 10px;
        display:flex;
        justify-content:center;
        align-items:center;
        margin-right: 10px;
        margin-bottom:5px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
    .icon-info{
        width:20px;
        height:20px;
        border-radius:50%;
        background:white;
        margin-right:10px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .b-flex-column{
        display:flex;
        flex-direction:column;
    }
    .com2{
        display:flex;
    }
    .com2-left{
        width: 70%;
    }
    .com2-right{
        flex:1;
        padding:0 10px;
    }
    .box-image{
        width: 150px;
        height:100px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
    .flex-wrap{
        flex-wrap:wrap;
    }
    .card_benefic{
        width: 240px;
        margin-right:10px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
    .card_benefic h3{
        margin-top:0;
    }
    .card_job{
        width: 49%;
        background:white;
        padding-left:4%;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
    .card__logo {
        width: 60px;
        height: 60px;
        object-fit: contain;
        margin-right: 16px;
    }
    .card__content {
        flex: 1;
    }
    .card__tags {
        display: flex;
        gap: 8px;
        margin-top: 8px;
    }
    .tag {
        display: inline-block;
        font-size: 12px;
        font-weight: 500;
        padding: 4px 8px;
        border-radius: 16px;
        text-align: center;
        display: inline-block;
        background-color: #e0e7ff;
        color: #4c51bf;
    }
    .mar{
        margin:0;
    }
</style>
<?php
if(isset($data)&&$data){
    extract($data);
}
//print_r($data);
if(isset($job)){
}
if(isset($company)){
}
$numJob= count($job);
?>
<div class="cf" style="background:rgb(248,248,253);">
    <div class="banner-company">
        <div class="logo-company">
            <img src="" alt="Logo">
        </div>
        <div class="banber-info">
            <div class="b-row">
                <h1 style="margin:0;padding:0;"><?php if(isset($company)){echo($company[0]['company_name']);} ?></h1>
                <div class="numJob"><?php if(isset($job)){echo(count($job));}?> công việc</div>
            </div>
            <div class="b-row">
                <a href="<?php if(isset($company)){echo($company[0]['company_website']);} ?>"> <?php if(isset($company)){echo($company[0]['company_website']);} ?></a>
            </div>
            <div class="b-row" style="gap:0 30px;">
                <div  class="b-row">
                    <div class="icon-info"><i></i></div>
                    <div class="b-flex-column">
                        <div>Ngày thành lập</div>
                        <div><b><?php echo isset($company[0]['founded_date']) ? htmlspecialchars($company[0]['founded_date']) : "N/A"; ?></b></div>
                    </div>
                </div>
                <div  class="b-row">
                    <div class="icon-info"><i></i></div>
                    <div class="b-flex-column">
                        <div>Nhân viên</div>
                        <div>
                            <b>
                                <?php echo($company[0]['employee_count']);?>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="b-row">
                    <div class="icon-info"><i></i></div>
                    <div class="b-flex-column">
                        <div>Trụ sở</div>
                        <div><b><?php if(isset($company)){echo($company[0]['company_address']);} ?></b></div>
                    </div>
                </div>
                <div class="b-row">
                    <div class="icon-info"><i></i></div>
                    <div class="b-flex-column">
                        <div>Ngành</div>
                        <div>
                            <b>
                                <?php 
                                    if(isset($industry)&&isset($company)){
                                        foreach($industry as $value){
                                            if($value['industry_id']==$company[0]['industry_id']){
                                                echo($value['industry_name']);
                                            }
                                        }
                                    } 
                                ?>
                            </b>
                        </div>
                    </div>
                </div>
            </div><!-- -->
        </div><!--banner-info -->
    </div><!--banner -->
</div><!-- com-->
<br>
<div class="cf" >
    <div class="com2" style="border-bottom:1px solid black">
        <div class="com2-left" >
            <h2>Hồ sơ công ty</h2>
            <div>
            Stripe là một nền tảng phần mềm để khởi nghiệp
                và điều hành các doanh nghiệp internet.
                Hàng triệu doanh nghiệp dựa vào các
                công cụ phần mềm của Stripe để chấp nhận thanh toán, 
                mở rộng trên toàn cầu và quản lý doanh nghiệp trực tuyến của họ.
                Stripe đã đi đầu trong việc mở rộng thương mại internet, thúc đẩy các
                    mô hình kinh doanh mới và hỗ trợ các nền tảng mới nhất, từ các thị trường đến
                    các trang thương mại di động. Chúng tôi tin rằng việc tăng trưởng GDP của internet 
                    là một vấn đề bắt nguồn từ mã và thiết kế, không phải tài chính.
                    Stripe được xây dựng cho các nhà phát triển, 
                    nhà sản xuất và người sáng tạo. Chúng tôi nỗ lực giải quyết các vấn đề kỹ thuật khó khăn cần thiết để xây dựng cơ sở hạ tầng kinh tế toàn cầu—từ việc thiết kế các hệ thống có độ tin cậy cao đến phát triển các thuật toán học máy tiên tiến để ngăn chặn gian lận.
                    <?php if(isset($company)){echo($company[0]['description']);} ?>
            </div>
            <h2>Các trang mạng xã hội</h2>
            <div class="b-row" style="gap:0 20px;">
                <div class="itemC">
                    <i></i><a href="#">fackebook.com</a>
                </div>
                <div class="itemC">
                    <i></i><a href="#">fackebook.com</a>
                </div>
            </div><br>
            <div class="b-row flex-wrap" style="gap: 10px 10px;">
                <div class="box-image">
                    <img src="#" alt="ảnh công ty">
                </div>
                <div class="box-image">
                    <img src="#" alt="ảnh công ty">
                </div>
            </div>
            <br>
        </div>
        <div class="com2-right">
            <h2 style="margin-bottom:10px;:padding:0;">Các công nghệ</h2>
            <div class="b-row flex-wrap" style="border-bottom:1px solid black;gap:10px 10px;padding-bottom:10px;" >
                <div class="itemC mar">HTML5</div>
                <div class="itemC mar">HTML5</div>
                <div class="itemC mar">HTML5</div>
                <?php
                    if(isset($technologies)){
                        foreach($technologies as $technology){
                            echo("<div class='itemC mar'>".$technology['technology_name']."</div>");
                        }
                    } 
                ?>
            </div>
            <h2 style="margin-bottom:10px;padding:0;">Trụ sở công ty</h2>
            <!--<p class="mar" style="margin-bottom:10px">công tay có x trụ sở</p>-->
            <div class="b-flex-column"  style="border-bottom:1px solid black;gap:20px 0;padding-bottom:10px;">
                <p class="mar"><b>Đà Nẵng</b></p>
                <p class="mar"><b><?php if(isset($company)){echo($company[0]['company_address']);} ?></b></p>

            </div>
        </div><!--com2-right-->
    </div><!--com2-->
</div>
<div class="cf">
    <h2>Quyền lợi và lợi ích</h2>
    <div class="b-row flex-wrap" >
        <p>
            <?php 
                if(isset($company)){
                    echo($company[0]['comp_benefit']);
                } 
            ?>
        </p>
    
        <!--<div class="card_benefic">
            <h3>Chăm sóc sức khỏe toàn diện</h3>
            <div>
            Chúng tôi tin vào một cộng đồng thịnh vượng 
                và điều đó bắt đầu từ việc đội ngũ của chúng tôi
                phải hạnh phúc và khỏe mạnh.
            </div>
        </div>-->
    </div>
</div>
<div class="cf" style="background:rgb(248,248,253);">
    <h2>Việt làm mở</h2>
    <div class="b-row flex-wrap" style="gap: 10px 20px;justify-content: space-between;">
        <?php
            if(isset($job)){
                foreach($job as $value){
                    $ind = null;
                    foreach($industry as $valuechil){
                        if($value['industry_id']==$valuechil['industry_id']){
                            $ind=$valuechil;
                            break;
                        }else{
                            $ind=[];
                        }
                    }
                    $ty = null;
                    foreach($job_type as $type ){
                        if($type['job_type_id']==$value['job_type_id']){
                            $ty=$type;
                            break;
                        }else{
                            $ty=[];
                        }
                    }
                    ?>
                        <div class="b-row card_job">
                            <div class="card__logo">
                                <img src="logo-placeholder.png" alt="Company Logo">
                            </div>
                            <div class="card__content">
                                <h3 ><?php echo htmlspecialchars($value['job_title']); ?></h3>
                                <p ><?php echo htmlspecialchars($value['location']); ?></p>
                                <div class="card__tags">
                                <span class="tag "><?php echo isset($ty) ? htmlspecialchars($ty['job_type_name']) : 'N/A'; ?></span>
                                <span class="tag "><?php echo isset($ind) ? htmlspecialchars($ind['industry_name']) : 'N/A';?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            } 
        ?>
        <div class="b-row card_job">
            <div class="card__logo">
                <img src="logo-placeholder.png" alt="Company Logo">
            </div>
            <div class="card__content">
                <h3 >HR Manager</h3>
                <p >Packer • Lucern, Switzerland</p>
                <div class="card__tags">
                <span class="tag ">Full-Time</span>
                <span class="tag ">Marketing</span>
                <span class="tag ">Design</span>
                </div>
            </div>
        </div>
        <div class="b-row card_job">
            <div class="card__logo">
                <img src="logo-placeholder.png" alt="Company Logo">
            </div>
            <div class="card__content">
                <h3 >HR Manager</h3>
                <p >Packer • Lucern, Switzerland</p>
                <div class="card__tags">
                <span class="tag ">Full-Time</span>
                <span class="tag ">Marketing</span>
                <span class="tag ">Design</span>
                </div>
            </div>
        </div>
    </div>
</div>