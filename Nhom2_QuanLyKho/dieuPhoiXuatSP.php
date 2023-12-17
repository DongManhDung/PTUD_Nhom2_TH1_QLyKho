<?php
// connectDB nhom2_quanLyKho
$mysqli = new mysqli("localhost","root","","nhom2_qlkho");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối MYSQLLi" . $mysqli->connect_error;
  exit();
}
?>
<?php
    if(isset($_POST["dieuPhoiXuatSP"])){
        $tenSP = $_POST["TenSP"];
        $soluong = $_POST["SoLuong"];
        $dungluong = $_POST["DungLuong"];


        $sql_dieuphoixuatsp = "INSERT INTO `dieuphoixuatsp`(`TenSP `, `SoLuong`, `DungLuong`) VALUES ('$tensanpham','$soluong','$dungluong')";
        mysqli_query($mysqli,$sql_dieuphoisp);
        header('location: index.php?page_layout=phieuxuatsp');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điều phối xuât NVL</title>
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

                        <li><i class="fa-solid fa-cart-flatbed"></i><a href="#"  id="color_highlight">Điều phối kho</a></li>
                        <ul class="navbar_fix1">
                            <li><a href="index.php?page_layout=dieuphoixuatsp">Điều phối xuất sản phẩm</a></li>
                            <li><a href="index.php?page_layout=dieuphoixuatnvl"  id="color_highlight">Điều phối xuất nguyên vật liệu</a></li>
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
        <h2>ĐIỀU PHỐI XUẤT SẢN PHẨM</h2><br>
        <h3>THÔNG TIN PHIẾU ĐIỀU PHỐI</h3>
    </div>
    <div class="form_style">
        <form action="" target="" >
            <label for="lname">Kho:</label>
            <select id="kho" name="kho">
                <option value="kho6"> 6</option>
                <option value="kho7"> 7</option>
                <option value="kho8"> 8</option>
                <option value="kho9"> 9</option>
                <option value="kho10"> 10</option>
              </select>
              <label for="ngayLap">Ngày lập phiếu </label>
              <input type="date" id="ngayNhap" name="ngayNhap"> <br><br>
            <h2 style="margin-left: 10%;">Danh sách sản phẩm</h2><br><br>
            <div class="">
            <table border="1" cellpadding="1" cellspacing="1" class="phieu_table">
                        <tbody>
                            <tr>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtMaDpxsp">Mã phiếu :</label>
                                    <input type="text" name="MaDpxsp" placeholder="Mã tự tăng dần" readonly>
                                </div>
                                <span id="tbEmail" class="warning">*</span> 
                            </div>  
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenSP">Tên SP:</label>
                                    <input type="text" name="TenSP">
                                </div>  
                                <span id="tbEmail" class="warning">*</span> 
                            </div>                       
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtSoLuong">So Luong:</label>
                                    <input type="text" name="SoLuong">
                                </div>  
                                <span id="tbEmail" class="warning">*</span> 
                            </div>
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDungLuong">Dung Luong:</label>
                                    <input type="text" name="DungLuong">
                                </div>  
                                <span id="tbEmail" class="warning">*</span> 
                            </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtMaDpxsp"></label>
                                    <input type="text" name="MaDpxsp" placeholder="Mã tự tăng dần" readonly>
</div>  
                            </div>  
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenSP"></label>
                                    <input type="text" name="TenSP">
                                </div>
                            </div>                       
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtSoLuong"></label>
                                    <input type="text" name="SoLuong">
                                </div>
                            </div>
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDungLuong"></label>
                                    <input type="text" name="DungLuong">
                                </div> 
                            </div>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtMaDpxsp"></label>
                                    <input type="text" name="MaDpxsp" placeholder="Mã tự tăng dần" readonly>
</div>  
                            </div>  
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenSP"></label>
                                    <input type="text" name="TenSP">
                                </div>
                            </div>                       
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtSoLuong"></label>
                                    <input type="text" name="SoLuong">
                                </div>  
                            </div>
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDungLuong"></label>
                                    <input type="text" name="DungLuong">
                                </div>   
                            </div>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtMaDpxsp"></label>
                                    <input type="text" name="MaDpxsp" placeholder="Mã tự tăng dần" readonly>
</div>  
                            </div>  
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenSP"></label>
                                    <input type="text" name="TenSP">
                                </div>
                            </div>                       
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtSoLuong"></label>
                                    <input type="text" name="SoLuong">
                                </div> 
                            </div>
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDungLuong"></label>
                                    <input type="text" name="DungLuong">
                                </div> 
                            </div>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtMaDpxsp"></label>
                                    <input type="text" name="MaDpxsp" placeholder="Mã tự tăng dần" readonly>
</div>  
                            </div>  
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenSP"></label>
                                    <input type="text" name="TenSP">
                                </div>
                            </div>                       
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtSoLuong"></label>
                                    <input type="text" name="SoLuong">
                                </div>  
                            </div>
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDungLuong"></label>
                                    <input type="text" name="DungLuong">
                                </div> 
                            </div>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtMaDpxsp"></label>
                                    <input type="text" name="MaDpxsp" placeholder="Mã tự tăng dần" readonly>
</div>  
                            </div>  
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtTenSP"></label>
                                    <input type="text" name="TenSP">
                                </div>
                            </div>                       
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtSoLuong"></label>
                                    <input type="text" name="SoLuong">
                                </div>
                            </div>
                                </td>
                                <td>
                                <div class="form_group_inner">
                                <div class="form_group_inner_label_input">
                                    <label for="txtDungLuong"></label>
                                    <input type="text" name="DungLuong">
                                </div>
                            </div>
                                </td>
                            </tr>
                    <div class="submit">
                            <button class="btn_submit" name="euphoikho">Xác nhận điều phối</button>
                        </div>
                        </form>
        
    </div>
    </div>
    </div>
    </body>
    </html> 
    </html>