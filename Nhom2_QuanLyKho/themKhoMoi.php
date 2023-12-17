<?php
// connectDB nhom2_quanLyKho
$mysqli = new mysqli("localhost","root","","nhom2_qlkho");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối MYSQLLi" . $mysqli->connect_error;
  exit();
}
?>


<!-- Truy van ma kho luu vao select option Ma Nhan Vien-->
<?php
    $sql_LietKe_maKho = "SELECT MaNhanVien,HoTen FROM nhanvienkho";
    $row_LietKe_maKho = mysqli_query($mysqli,$sql_LietKe_maKho);   
?>   
<!-- Validage cho tên kho -->
<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        //Khai báo mảng thông báo
        $notice = [];
        //Yêu cầu họ tên không được để trống
        if(empty(trim($_POST['TenKho']))){
            $notice['TenKho']['required'] = 'Tên kho không được để trống';
        }
        //Tên kho chỉ là: chuỗi Kho nguyên liệu hoặc Kho sản phẩm + số
        else if(!preg_match("/kho nguyên liệu [1-9]{1}[0-9]{0,3}$/i",(trim($_POST['TenKho']))) and !preg_match("/kho sản phẩm [1-9]{1}[0-9]{0,3}$/i",(trim($_POST['TenKho'])))){
            $notice['TenKho']['invalid'] = 'Chỉ chấp nhận Kho nguyên liệu hoặc Kho sản phẩm + số và phải có dấu';
        }   
           
        //Yêu cầu địa chỉ không được để trống
        if(empty(trim($_POST['DiaChi']))){
            $notice['DiaChi']['required'] = 'Địa chỉ không được để trống';
        }
                                                      
        //Yêu cầu dung lượng không được để trống
        if(empty(trim($_POST['DungLuong']))){
            $notice['DungLuong']['required'] = 'Dung lượng không được để trống';
        }
        //Yêu cầu dung lượng luôn là số > 0 và < 10000
        if(!preg_match("/^[0-9]{1,4}$/",(trim($_POST['DungLuong']))) or trim($_POST['DungLuong']) <= 0){
            $notice['DungLuong']['invalid'] = 'Dung lượng là số >= 0 và <= 9999';
        }
        //Kiểm thử để addd vào csdl
        if(!empty($notice))
        {
            // Thông báo lỗi nhưng k cần return
        }else{
            $tenKho = $_POST["TenKho"];
            $diaChi = $_POST["DiaChi"];
            $dungLuong = $_POST["DungLuong"];
            $maNhanVien = $_POST['MaNhanVien'];
            $sql_them = "INSERT INTO kho(TenKho,DiaChi,DungLuong,MaNhanVien) VALUES ('$tenKho','$diaChi','$dungLuong','$maNhanVien')";
            mysqli_query($mysqli,$sql_them);
            header('location: index.php?page_layout=danhsachkho');
        }
    }
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm kho mới</title>
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

                        <li><i class="fa-solid fa-warehouse"></i><a href="index.php?page_layout=danhsachkho" id="color_highlight">Kho</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=themkhomoi" id="color_highlight">Kho mới</a></li>
                                <li><a href="index.php?page_layout=xoakho">Xóa kho</a></li>
                                <li><a href="index.php?page_layout=suakho">Sửa kho</a></li>
                            </ul>

                        <li><i class="fa-solid fa-people-group"></i><a href="index.php?page_layout=danhsachnhanvien">Nhân viên</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=themnhanvien">Nhân viên mới</a></li>
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
                    <h1>Thêm kho mới</h1>
                </div>
                
                <div class="warehouse_from">
                    <h2 class="warehouse_form_title">Thông tin kho</h2>
                    <form action="themKhoMoi.php" method="POST"  class="warehouse_from_inner">
                        
                        <div class="warehouse_form-group">
                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="">Mã kho:</label>
                                    <input type="text" name="MaKho" id="txtMaKho" placeholder="" readonly>
                                </div>
                                <span id="tbMaKho" name = "MaKho" class="warning">Mã kho phát sinh tự động</span>
                            </div>    

                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenKho">Tên Kho:</label>
                                    <input type="text" value="<?php echo (!empty($_POST['TenKho']))?$_POST['TenKho']:false; ?>" style="width:350px" name="TenKho" id="txtTenKho"  placeholder="Kho nguyên liệu hoặc kho sản phẩm">
                                </div>
                                <?php
                                    if(!empty($notice['TenKho']['required'])){
                                        echo '<span class="warning">'.$notice['TenKho']['required'].'</span>';
                                    }else if(!empty($notice['TenKho']['invalid'])){
                                        echo '<span class="warning">'.$notice['TenKho']['invalid'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?>
                            </div>                       
                        </div>
                        
                        <div class="warehouse_form-group">
                                <div class="form_group_inner">
                                    <div class="form_group_inner_label_input">
                                        <label for="txtDiaChi">Địa chỉ:</label>
                                        <input type="text" value="<?php echo (!empty($_POST['DiaChi']))?$_POST['DiaChi']:false; ?>" name="DiaChi" id="txtDiaChi"placeholder="">
                                    </div>
                                    <?php
                                    if(!empty($notice['DiaChi']['required'])){
                                        echo '<span class="warning">'.$notice['DiaChi']['required'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?>
                                          
                                </div> 
                           

                            <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDungLuong">Dung lượng:</label>
                                    <input type="text" value="<?php echo (!empty($_POST['DungLuong']))?$_POST['DungLuong']:false; ?>" name="DungLuong" id="txtDungLuong" placeholder="">
                                </div>
                                <?php
                                    if(!empty($notice['DungLuong']['required'])){
                                        echo '<span class="warning">'.$notice['DungLuong']['required'].'</span>';
                                    }else if(!empty($notice['DungLuong']['invalid'])){
                                        echo '<span class="warning">'.$notice['DungLuong']['invalid'].'</span>';
                                    }else{
                                        echo '<span class="warning"></span>';
                                    }
                                ?>
                            </div>                   
                        </div>
                        
                        <div class="warehouse_form-group">
                            <div class="form_group_inner">
                                <label for="">Mã nhân viên:</label>
                                <select name="MaNhanVien" onmousedown="if(this.options.length>8){this.size=5;}" onchange='this.size=0;' onblur="this.size=0;" style="width:400px">
                                    <?php
                                        while($row = mysqli_fetch_array($row_LietKe_maKho)){
                                    ?>
                                    <option><?php echo $row['MaNhanVien']."  -  ".$row['HoTen'];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="submit">
                            <a class="btn_submit" id="btn_fix" href="index.php?page_layout=danhsachkho">Quay lại</a>
                            <button type="submit" class="btn_submit" name="themKhoMoi" id="themKho">Lưu</button>
                                        
                        </div>

                        
                    </form>
                    
                </div>
            </div>

        </div>
    </div>

    
</body>

</html>