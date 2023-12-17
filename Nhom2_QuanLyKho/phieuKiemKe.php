<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu kiểm kê</title>
    <!-- Add CSS styles -->
    <link rel="stylesheet" href="static/css/styles.css">
    <!-- Add Font awesome -->
    <script src="https://kit.fontawesome.com/a8954462a8.js" crossorigin="anonymous"></script>
    <!-- Add favicon -->
    <link rel="shortcut icon" href="static/img/favicon1.png" type="image/x-icon">
</head>
<body>
    <div class="header">
        <div class="header_inner">
            <div class="header_left">
                <a href="index.php"><img src="static/img/logo2.jpg" alt=""></a>
            </div>

            <div class="header_right">
                <h2>Hệ thống quản lý kho nhà máy</h2>
            </div>
        </div>
    </div>

    <div class="body_section">
        <div class="body_section_inner">
<!-----------------------------------------------------Tạo navbar------------------------------------------------>
<?php
        include_once 'navbar.php';
    ?>
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <h3>Danh sách phiếu kiểm kê</h3>
                <table class="table-one">
                    <thead>
                        <tr>
                            <th>Mã phiếu</th>
                            <th>Ngày kiểm</th>
                            <th>Nhân viên kiểm</th>
                            <th>Mã Kho kiểm</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                                        $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                        $db=mysqli_select_db($conn,"nhom2_qlkho");
                                        $querykiemke = 'SELECT * FROM phieukiemke';
                                        $data = mysqli_query($conn, $querykiemke);

                                        if (!$data) {
                                            echo 'Data cannot be displayed!';
                                        } else {
                                            while ($row = mysqli_fetch_assoc($data)) {
                                            //     echo '<option selected  value="'.$row['MaPhieuKiemKe'].'">'.$row['NgayKiemKe']." ".$row['NguoiKiemKe']." ".$row['MaKho'].'</option>';
                                            // echo '<option  value="'.$row['MaPhieuKiemKe'].'">'.$row['NgayKiemKe']." ".$row['NguoiKiemKe']." ".$row['MaKho'].'</option>';
                                            echo '<tr>';
                                            echo '<td>'.
                                                $row['MaPhieuKiemKe']
                                                .'</td>';
                                            echo '<td>'.
                                                $row['NgayKiemKe']
                                                .'</td>';
                                            echo '<td>'.
                                                $row['NguoiKiemKe']
                                                .'</td>';
                                            echo '<td>'.
                                                $row['MaKho']
                                                .'</td>';

                                            echo '</tr>';
                                            }
                                        }                                        
                                ?>
                        </tbody>
                    
            </div>
        </div>
    </div>
</body>
</html>