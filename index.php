<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>


<h1>
    <?php 
    include_once './system/library/Main.php';
    include_once './system/library/DController.php';
    include_once './system/library/Load.php';
    include_once './system/library/Database.php';
    include_once './system/library/DModel.php';
    
    // $main = new Main();
    ?>
    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : NULL;
    

    if ($url != NULL) { 
        $url = rtrim($url,'/');
        $url = explode('/',filter_var($url, FILTER_SANITIZE_URL));
    }else {
        unset($url);
    }


    if(isset($url[0])) {
        if (file_exists('./app/controllers/' . $url[0] . '.php')) {
            include_once './app/controllers/' . $url[0] . '.php';
        } else {
            die("Controller not found: " . $url[0]);
        }
        
        $ctrler = new $url[0]();
        if (isset($url[2])) {
            $ctrler->{$url[1]}($url[2]);
        }else {
            if(isset($url[1])) {
                $ctrler->{$url[1]}();
            }else {
                
            }
        }
    }
    else {
        include_once './app/controllers/index.php';
        $index = new index();
        $index->homepage();
    }

    ?>
</h1>
</body>
</html>