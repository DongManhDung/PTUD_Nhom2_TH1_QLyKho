<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa nhân viên</title>
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
                <a href="index.html"><img src="static/img/logo2.jpg" alt=""></a>
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
                                <li><a href="">Phiếu đơn hàng trả về</a></li>
                                <li><a href="bienBanYeuCauBT.html">Biên bản yêu cầu bồi thường</a></li>
                                <li><a href="#">Kiểm kho</a></li>
                                    <ul class="navbar_fix2">
                                        <li><a href="taoPhieuKiemKho.html">Tạo phiếu kiểm kê</a></li>
                                        <li><a href="">Phiếu kiểm kê</a></li>
                                    </ul>
                            </ul>

                        <li><i class="fa-solid fa-clipboard"></i><a href="index.php?page_layout=phieunhapxuat">Phiếu nhập xuất</a></li>
                        <ul class="navbar_fix1">
                            <li><a href="phieuNhapNVL.html">Phiếu nhập nguyên vật liệu</a></li>
                            <li><a href="phieuNhapSP.html">Phiếu nhập sản phẩm</a></li>
                            <li><a href="phieuXuatNVL.html">Phiếu xuất nguyên vật liệu</a></li>
                            <li><a href="phieuXuatSP.html">Phiếu xuất sản phẩm</a></li>
                        </ul>

                        <li><i class="fa-solid fa-cart-flatbed"></i><a href="#">Điều phối kho</a></li>
                        <ul class="navbar_fix1">
                            <li><a href="dieuPhoiXuatSP.html">Điều phối xuất sản phẩm</a></li>
                            <li><a href="dieuPhoiXuatNVL.html">Điều phối xuất nguyên vật liệu</a></li>
                            <li><a href="dieuPhoiNhapSP.html">Điều phối nhập sản phẩm</a></li>
                            <li><a href="dieuPhoiNhapNVL.html">Điều phối nhập nguyên vật liệu</a></li>
                        </ul>

                        <li><i class="fa-solid fa-warehouse"></i><a href="danhSachKho.html" >Kho</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="themKhoMoi.html">Kho mới</a></li>
                                <li><a href="xoaKho.html" >Xóa kho</a></li>
                                <li><a href="suaKho.html">Sửa kho</a></li>
                            </ul>

                        <li><i class="fa-solid fa-people-group"></i><a href="dsNhanVien.html">Nhân viên</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="themNhanVien.html">Nhân viên mới</a></li>
                                <li><a href="xoaNhanVien.html" id="color_highlight">Xóa nhân viên</a></li>
                                <li><a href="suaNhanVien.html">Sửa nhân viên</a></li>
                            </ul>
                        <li><i class="fa-solid fa-boxes-stacked"></i><a href="index.php?page_layout=danhsachnguyenvatlieu">Nguyên vật liệu</a></li>

                        <li><i class="fa-solid fa-tag"></i><a href="sanPham.html">Sản phẩm</a></li>

                        <li><i class="fa-solid fa-file-export"></i><a href="thongKe.html">Thống kê</a></li>

                        <li><i class="fa-solid fa-gear"></i></i><a href="">Cấu hình</a></li>

                        <li><i class="fa-regular fa-circle-question"></i><a href="">Hỗ trợ</a></li>

                    </ul>
                </div>
            </div>
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                    <div class="text_inner_right">
                        <h1>Xóa nhân viên</h1>
                    </div>
                    
                    <div class="search_employee">
                        <div class="search_employee_inner">
                            <h3>Nhập mã nhân viên cần xóa:</h3>
                            <input type="text" placeholder="Mã nhân viên: ">
                        </div>
                    </div>
                    
                    <table class="employee_table" cellspacing="0">
                        <thead>
                            <tr>
                                <td>Mã nhân viên</td>
                                <td>Họ tên</td>
                                <td>Vị trí làm việc</td>
                                <td>Ngày sinh</td>
                                <td>Giới tính</td>
                                <td>Địa chỉ</td>
                                <td>Email</td>
                                <td>SDT</td>
                            </tr>

                            <tr>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
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
                            <div class="warehouse_delete_function">
                                <button class="deleteWarehouse_btn">Xóa nhân viên</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>