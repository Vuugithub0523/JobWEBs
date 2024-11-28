<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head> -->
<!-- <body> -->
    <?php 
    // include_once './system/library/Main.php';
    // include_once './system/library/DController.php';
    // include_once './system/library/Load.php';
    // include_once './system/library/Database.php';
    // include_once './system/library/DModel.php';
    
    // $main = new Main();
    ?>
    <?php
    // $url = isset($_GET['url']) ? $_GET['url'] : NULL;
    

    // if ($url != NULL) { 
    //     $url = rtrim($url,'/');
    //     $url = explode('/',filter_var($url, FILTER_SANITIZE_URL));
    // }else {
    //     $url = [];
    // }


    // if(isset($url[0])) {
    //     if (file_exists('./app/controllers/' . $url[0] . '.php')) {
    //         include_once './app/controllers/' . $url[0] . '.php';
    //     } else {
    //         die("Controller not found: " . $url[0]);
    //     }
        
    //     $ctrler = new $url[0]();
    //     if (isset($url[2])) {
    //         $ctrler->{$url[1]}($url[2]);
    //     }else {
    //         if(isset($url[1])) {
    //             $ctrler->{$url[1]}();
    //         }else {
                
    //         }
    //     }
    // }
    // else {
    //     include_once './app/controllers/index.php';
    //     $index = new index();
    //     $index->homepage();
    // }
    ?>
<!-- </body> -->
<!-- </html> -->
<?php
// Load các thư viện

spl_autoload_register(function($class){
    include_once 'system/library/' .$class . '.php';
});
include_once 'app/config/config.php';

$main = new Main();

?>
