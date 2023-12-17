<?php
// connectDB nhom2_quanLyKho
$mysqli = new mysqli("localhost","root","","nhom2_qlkho");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối MYSQLLi" . $mysqli->connect_error;
  exit();
}
?>

<!-- Biểu thức chính quy cho nhân viên kho -->
<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        //Khai báo mảng thông báo
        $notice= [];
        //Yêu cầu họ tên không được để trống
        if(empty(trim($_POST['TenNhanVien']))){
            $notice['TenNhanVien']['required'] = 'Tên nhân viên không được để trống';
        }
        //Tên nhân viên chỉ là kĩ tự chuỗi và không áp dụng kí tự đặc biệt
        else if(!preg_match("/\b[A-Za-z]+\b/",(trim($_POST['TenNhanVien'])))){
            $notice['TenNhanVien']['invalid'] = 'Chỉ chấp nhận kí tự chuỗi và không dùng kí tự đặc biệt';
        }   


        // Vị trí làm việc không được để trống
        if(empty(trim($_POST['ViTriLamViec']))){
            $notice['ViTriLamViec']['required'] = 'Vị trí làm việc không được để trống';
        }

        //Ngày sinh không được để trống
        $today = date('m/d/Y');
        $dateInput = $_POST['NgaySinh'];
        //Ngày sinh phải sau ngày hiện tại
        if($dateInput < $today){
            $notice['NgaySinh']['invalid'] = 'Ngày sinh phải sau ngày hiện tại';
        }
                                                   
        // Giới tính chỉ là nam hoặc nữ
        if(empty(trim($_POST['GioiTinh']))){
            $notice['GioiTinh']['required'] = 'Giới tính không được để trống';
        }
        // Giới tính chỉ là nam hoặc nữ
        else if(!preg_match("/nam$/i",(trim($_POST['GioiTinh']))) and !preg_match("/nữ$/i",(trim($_POST['GioiTinh'])))){
            $notice['GioiTinh']['invalid'] = 'Giới tính chỉ là nam hoặc nữ';
        }

        //Yêu cầu địa chỉ không được để trống
        if(empty(trim($_POST['DiaChi']))){
            $notice['DiaChi']['required'] = 'Địa chỉ không được để trống';
        }

        // SDT không được để trống
        if(empty(trim($_POST['SDT']))){
            $notice['SDT']['required'] = 'Số điện thoại không được để trống';
        }
        // SDT là chuỗi số chỉ cho phép từ 10 đến 15 kí tự
        else if(!preg_match("/^[0-9]{10,15}$/",(trim($_POST['SDT'])))){
            $notice['SDT']['invalid'] = 'Số điện thoại chỉ cho phép chuỗi số từ 10 - 15 kí tự';
        }


        // Email không được để trống
        if(empty(trim($_POST['Email']))){
            $notice['Email']['required'] = 'Email không được để trống';
        }
        // Regex email quốc dân
        else if(!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/",(trim($_POST['Email'])))){
            $notice['Email']['invalid'] = 'Email phải định dạng example@gmail.com';
        }


        //Kiểm thử để addd vào csdl
        if(!empty($notice))
        {
            // Thông báo lỗi nhưng k cần return
        }else{
            $hotennv = $_POST["HoTen"];
            $vitrilamviec = $_POST["ViTriLamViec"];
            $ngaysinh = $_POST["NgaySinh"];
            $gioitinh = $_POST["GioiTinh"];
            $diachi = $_POST["DiaChi"];
            $sdt = $_POST["SDT"];
            $email = $_POST["Email"];

            $sql_them_nv = "INSERT INTO `nhanvienkho`(`HoTen`, `ViTriLamViec`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SDT`, `Email`) VALUES ('$hotennv','$vitrilamviec','$ngaysinh','$gioitinh','$diachi','$sdt','$email')";
            mysqli_query($mysqli,$sql_them_nv);
            header('location: index.php?page_layout=danhsachnhanvien');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên mới</title>
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
            <div class="body_section_inner_left">
            <div class="navbar">
                    <ul>
                        <li><i class="fa-solid fa-chart-simple"></i><a href="#">Báo cáo</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=phieudonhangtrave">Phiếu đơn hàng trả về</a></li>
                                <li><a href="index.php?page_layout=bienbanyeucauboithuong">Biên bản yêu cầu bồi thường</a></li>
                                <li><a href="index.php?page_layout=phieukiemke">Kiểm kho</a></li>
                                    <ul class="navbar_fix2">
                                        <li><a href="index.php?page_layout=taophieukiemke">Tạo phiếu kiểm kê</a></li>
                                        <li><a href="index.php?page_layout=phieukiemke">Phiếu kiểm kê</a></li>
                                    </ul>
                            </ul>

                        <li><i class="fa-solid fa-clipboard"></i><a href="index.php?page_layout=phieunhapxuat">Phiếu nhập xuất</a></li>
                        <ul class="navbar_fix1">
                            <li><a href="index.php?page_layout=phieunhapnvl">Phiếu nhập nguyên vật liệu</a></li>
                            <li><a href="index.php?page_layout=phieunhapsp">Phiếu nhập sản phẩm</a></li>
                            <li><a href="index.php?page_layout=phieuxuatnvl">Phiếu xuất nguyên vật liệu</a></li>
                            <li><a href="index.php?page_layout=phieuxuatsp">Phiếu xuất sản phẩm</a></li>
                        </ul>

                        <li><i class="fa-solid fa-cart-flatbed"></i><a href="#">Điều phối kho</a></li>
                        <ul class="navbar_fix1">
                            <li><a href="index.php?page_layout=dieuphoixuatsp">Điều phối xuất sản phẩm</a></li>
                            <li><a href="index.php?page_layout=dieuphoixuatnvl">Điều phối xuất nguyên vật liệu</a></li>
                            <li><a href="index.php?page_layout=dieuphoinhapsp">Điều phối nhập sản phẩm</a></li>
                            <li><a href="index.php?page_layout=dieuphoinhapnvl">Điều phối nhập nguyên vật liệu</a></li>
                        </ul>

                        <li><i class="fa-solid fa-warehouse"></i><a href="index.php?page_layout=danhsachkho">Kho</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=themkhomoi">Kho mới</a></li>
                                <li><a href="index.php?page_layout=xoakho">Xóa kho</a></li>
                                <li><a href="index.php?page_layout=suakho">Sửa kho</a></li>
                            </ul>

                        <li><i class="fa-solid fa-people-group"></i><a href="index.php?page_layout=danhsachnhanvien">Nhân viên</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=themnhanvien" id="color_highlight">Nhân viên mới</a></li>
                                <li><a href="index.php?page_layout=xoanhanvien">Xóa nhân viên</a></li>
                                <li><a href="index.php?page_layout=suanhanvien">Sửa nhân viên</a></li>
                            </ul>
                        <li><i class="fa-solid fa-boxes-stacked"></i><a href="index.php?page_layout=danhsachnguyenvatlieu">Nguyên vật liệu</a></li>

                        <li><i class="fa-solid fa-tag"></i><a href="index.php?page_layout=timkiemsanpham">Sản phẩm</a></li>

                        <li><i class="fa-solid fa-file-export"></i><a href="index.php?page_layout=thongke">Thống kê</a></li>

                        <li><i class="fa-solid fa-gear"></i></i><a href="#">Cấu hình</a></li>

                        <li><i class="fa-regular fa-circle-question"></i><a href="#">Hỗ trợ</a></li>

                    </ul>
                </div>
            </div>
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <div class="text_inner_right">
                    <h1>Thêm nhân viên mới</h1>
                </div>
                
                <div class="warehouse_from">
                    <h2 class="warehouse_form_title">Thông tin nhân viên</h2>
                    <form action="" method="POST" class="warehouse_from_inner">

                        <div class="warehouse_form-group">
                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtMaNhanVien">Mã nhân viên:</label>
                                    <input type="text" name="MaNhanVien"  placeholder="Mã tự tăng dần" readonly>
                                </div>
                            </div>    

                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenNhanVien">Họ Tên:</label>
                                    <input type="text" value="<?php echo (!empty($_POST['TenNhanVien']))?$_POST['TenNhanVien']:false;?>" name="TenNhanVien">
                                </div>
                                <!-- Validate Họ Tên Nhân Viên Kho -->
                                <?php
                                    if(!empty($notice['TenNhanVien']['required'])){
                                        echo '<span class="warning">'.$notice['TenNhanVien']['required'].'</span>';
                                    }else if(!empty($notice['TenNhanVien']['invalid'])){
                                        echo '<span class="warning">'.$notice['TenNhanVien']['invalid'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?> 
                            </div>                       
                        </div>
                        
                        <div class="warehouse_form-group">
                                <div class="form_group_inner">
                                    <div class="form_group_inner_label_input">
                                        <label for="txtViTri">Vị trí làm việc:</label>
                                        <input type="text" name="ViTriLamViec" value="<?php echo (!empty($_POST['ViTriLamViec']))?$_POST['ViTriLamViec']:false;?>" placeholder="">
                                    </div> 
                                    <?php
                                        if(!empty($notice['ViTriLamViec']['required'])){
                                            echo '<span class="warning">'.$notice['ViTriLamViec']['required'].'</span>';
                                        }else{
                                            echo '<span class="warning"></span>';
                                        }
                                    ?> 
                                </div> 

                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtNgaySinh">Ngày sinh:</label>
                                    <input type="date" name="NgaySinh" value="<?php echo (!empty($_POST['NgaySinh']))?$_POST['NgaySinh']:false;?>">
                                </div>
                                <?php
                                        if(!empty($notice['NgaySinh']['invalid'])){
                                            echo '<span class="warning">'.$notice['NgaySinh']['invalid'].'</span>';
                                        }else{
                                            echo '<span class="warning"></span>';
                                        }
                                    ?>  
                            </div>                   
                        </div>

                        <div class="warehouse_form-group">
                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtGioiTinh">Giới tính:</label>
                                    <input type="text" name="GioiTinh" value="<?php echo (!empty($_POST['GioiTinh']))?$_POST['GioiTinh']:false;?>">
                                </div>
                                <?php
                                    if(!empty($notice['GioiTinh']['required'])){
                                        echo '<span class="warning">'.$notice['GioiTinh']['required'].'</span>';
                                    }else if(!empty($notice['GioiTinh']['invalid'])){
                                        echo '<span class="warning">'.$notice['GioiTinh']['invalid'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?>   
                            </div>    

                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDiaChi">Địa chỉ:</label>
                                    <input type="text" name="DiaChi" value="<?php echo (!empty($_POST['DiaChi']))?$_POST['DiaChi']:false;?>">
                                </div>
                                <?php
                                    if(!empty($notice['DiaChi']['required'])){
                                        echo '<span class="warning">'.$notice['DiaChi']['required'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?> 
                            </div>                       
                        </div>

                        <div class="warehouse_form-group">
                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtSDT">SDT:</label>
                                    <input type="text" name="SDT" value="<?php echo (!empty($_POST['SDT']))?$_POST['SDT']:false;?>">
                                </div>
                                <?php
                                    if(!empty($notice['SDT']['required'])){
                                        echo '<span class="warning">'.$notice['SDT']['required'].'</span>';
                                    }else if(!empty($notice['SDT']['invalid'])){
                                        echo '<span class="warning">'.$notice['SDT']['invalid'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?> 
                            </div>                       
                       

                        
                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtEmail">Email:</label>
                                    <input type="email" name="Email" value="<?php echo (!empty($_POST['Email']))?$_POST['Email']:false;?>">
                                </div>
                                <?php
                                    if(!empty($notice['Email']['required'])){
                                        echo '<span class="warning">'.$notice['Email']['required'].'</span>';
                                    }else if(!empty($notice['Email']['invalid'])){
                                        echo '<span class="warning">'.$notice['Email']['invalid'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?> 
                            </div>   
                        </div> 
                        
                        
                        <div class="submit">
                            <a class="btn_submit" id="btn_fix" href="index.php?page_layout=danhsachnhanvien">Quay lại</a>
                            <button class="btn_submit" name="themnhanvienmoi">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>