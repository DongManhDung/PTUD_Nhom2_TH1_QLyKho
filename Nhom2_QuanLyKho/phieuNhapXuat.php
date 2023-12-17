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
    //Hien thi danh sach phieu nhap nvl
    if(isset($_POST["dsPhieuNhapNVL"])){
        header('location: index.php?page_layout=dsphieunhapnvl');
    }
?>
<?php
    //Hien thi danh sach phieu nhap sp
    if(isset($_POST["dsPhieuNhapSP"])){
        header('location: index.php?page_layout=dsphieunhapsp');
    }
?>
<?php
    //Hien thi danh sach phieu xuat nvl
    if(isset($_POST["dsPhieuXuatNVL"])){
        header('location: index.php?page_layout=dsphieuxuatnvl');
    }
?>
<?php
    //Hien thi danh sach phieu xuat sp
    if(isset($_POST["dsPhieuXuatSP"])){
        header('location: index.php?page_layout=dsphieuxuatsp');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu nhập xuất</title>
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
                                <li><a href="index.php?page_layout=bienbanyeucauboithuong" >Biên bản yêu cầu bồi thường</a></li>
                                <li><a href="index.php?page_layout=phieukiemke">Kiểm kho</a></li>
                                    <ul class="navbar_fix2">
                                        <li><a href="index.php?page_layout=taophieukiemke">Tạo phiếu kiểm kê</a></li>
                                        <li><a href="index.php?page_layout=phieukiemke">Phiếu kiểm kê</a></li>
                                    </ul>
                            </ul>

                        <li><i class="fa-solid fa-clipboard"></i><a href="index.php?page_layout=phieunhapxuat" id="color_highlight">Phiếu nhập xuất</a></li>
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
                                <li><a href="index.php?page_layout=suakho" >Sửa kho</a></li>
                            </ul>

                        <li><i class="fa-solid fa-people-group"></i><a href="index.php?page_layout=danhsachnhanvien">Nhân viên</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=themnhanvien">Nhân viên mới</a></li>
                                <li><a href="index.php?page_layout=xoanhanvien">Xóa nhân viên</a></li>
                                <li><a href="index.php?page_layout=suanhanvien">Sửa nhân viên</a></li>
                            </ul>
                        <li><i class="fa-solid fa-boxes-stacked"></i><a href="">Nguyên vật liệu</a></li>

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
                        <h1>DANH SÁCH PHIẾU NHẬP XUẤT</h1>
                    </div>
                    <br><br><br><br>
                    <div class="form_style">
                    <form action="phieuNhapXuat.php" method="POST">
                    <div class="phieu_button" style="flex-direction: row;">
                            <button style="background-color: red; margin-left: 20%; width: 300px;" type="submit"  name="dsPhieuNhapNVL"  ><b>Danh sách phiếu nhập NVL</b> </button>
                            <button style="background-color: green; margin-left: 10%; width: 300px;" type="submit" name="dsPhieuNhapSP"><b>Danh sách phiếu nhập SP</b> </button>
                               
                    </div>

                    <br><br><br><br>
                    <div class="phieu_button" style="flex-direction: row;">
                            <button style="background-color: blue; margin-left: 20%; width: 300px;" type="submit" name="dsPhieuXuatNVL"><b>Danh sách phiếu xuất NVL</b> </button>
                            <button style="background-color: gray; margin-left: 10%; width: 300px;" type="submit" name="dsPhieuXuatSP"><b>Danh sách phiếu xuất SP</b> </button>                            
                    </div>  
                        
                    </form>                     
                    
                    
            </div>
        </div>
    </div>
</body>
</html>