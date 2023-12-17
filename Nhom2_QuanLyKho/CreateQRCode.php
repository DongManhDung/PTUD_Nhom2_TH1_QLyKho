<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/login/reset.css">
    <link rel="stylesheet" href="static/css/login/app.css">

    
    <title>TẠO QR CODE</title>
</head>
<body>
    <div id="wrapper">
        <form action="" method="POST" id="form-login" >
            <h1 class="form-heading">Tạo QR code</h1>
            <?php
                $tenKho = "Kho nguyên liệu";

                if(isset($_POST['createQR'])){
                    $tenKho = $_POST["tenKho"];

                    echo "<pre>";
                    var_dump($_POST);
                    echo "</pre>";
                }
            ?>
            <div class="form-group">
                <label for="" style="color:#fff">Tên kho:</label>
                <input type="text" style="width:100%" value = "<?php echo $tenKho;?>" class="form-input" name="tenKho" id="tenKho" placeholder="">
            </div>
            <input type="submit" value="Tạo" name="createQR" class="form-submit">
        </form>
        <?php
            include "static/phpqrcode/qrlib.php";
            $PNG_TEMP_DIR = 'temp/';
            if(!file_exists($PNG_TEMP_DIR))
                    mkdir($PNG_TEMP_DIR);


                    $filename = $PNG_TEMP_DIR . 'test.png';
                    

                    if(isset($_POST['createQR'])){
                        $codeString = $_POST["tenKho"];

                        $filename = $PNG_TEMP_DIR . 'test' . md5($codeString) . '.png';

                        QRcode::png($codeString, $filename,'L',10);
                        
                        echo '<img src="' . $PNG_TEMP_DIR . 
                        basename($filename) . '" /><hr/>';
                    }
        ?>
    </div>
</body>
</html>