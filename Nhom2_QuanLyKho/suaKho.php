<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa kho</title>
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

                        <li><i class="fa-solid fa-clipboard"></i><a href="#">Phiếu nhập xuất</a></li>
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
                                <li><a href="index.php?page_layout=suakho" id="color_highlight">Sửa kho</a></li>
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
                        <h1>Sửa thông tin kho</h1>
                    </div>
                    
                    <div class="search_warehouse">
                        <div class="search_warehouse_inner">
                            <h3>Nhập mã kho cần sửa:</h3>
                            <input type="text" placeholder="Mã kho: ">
                        </div>
                    </div>
                    
                    <table class="warehouse_table" cellspacing="0">
                        <thead>
                            <tr>
                                <td>Mã kho</td>
                                <td>Tên kho</td>
                                <td>Địa chỉ</td>
                                <td>Diện tích</td>
                                <td>Mã nhân viên</td>
                            </tr>

                            <tr>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                            </tr>

                            <tr>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                            </tr>
                            
                        </thead>
                        <!-- Chua co so du lieu kho -->
                        <tbody></tbody>
                    </table>

                    <div class="warehouse_function">
                        <div class="warehouse_function_inner">
                            <div class="warehouse_change_function">
                                <button class="changeWarehouse_btn">Sửa thông tin kho</button>
                            </div>
                            
                        </div>
                        
                            <div class="form_change">
                                <div class="form_change_inner">
                                    <h3>Thông tin kho sửa:</h3>
                                    <form action="" id="warehouse_change_form">
                                        <table cellspacing="0">
                                            <tr>
                                                <td style="width: 30%;"><label for="lblMaKho">Mã kho mới:</label></td>
                                                <td><input type="text" required id="txtMaKho" placeholder="Nhập mã kho:"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;"><label for="lblTenKho">Tên kho:</label></td>
                                                <td><input type="text" required id="txtTenKho"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;"><label for="lblDiaChi">Địa chỉ:</label></td>
                                                <td><input type="text" required placeholder="" id="txtDiaChi"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;"><label for="lblDienTich">Diện tích:</label></td>
                                                <td><input type="text" required id="txtDienTich"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;"><label for="lblNhanVien">Mã nhân viên:</label></td>
                                                <td><input type="text" required readonly id="txtNhanVien"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="warehouse_function">
                                    <div class="warehouse_function_inner">
                                        <div class="warehouse_change_function">
                                            <button class="changeWarehouse_btn">Lưu thông tin kho mới</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>