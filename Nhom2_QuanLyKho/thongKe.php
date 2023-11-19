<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>
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
                                <li><a href="index.php?page_layout=suakho">Sửa kho</a></li>
                            </ul>

                        <li><i class="fa-solid fa-people-group"></i><a href="index.php?page_layout=danhsachnhanvien">Nhân viên</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=themnhanvien">Nhân viên mới</a></li>
                                <li><a href="index.php?page_layout=xoanhanvien">Xóa nhân viên</a></li>
                                <li><a href="index.php?page_layout=suanhanvien">Sửa nhân viên</a></li>
                            </ul>
                        <li><i class="fa-solid fa-boxes-stacked"></i><a href="">Nguyên vật liệu</a></li>

                        <li><i class="fa-solid fa-tag"></i><a href="index.php?page_layout=timkiemsanpham">Sản phẩm</a></li>

                        <li><i class="fa-solid fa-file-export"></i><a href="index.php?page_layout=thongke" id="color_highlight">Thống kê</a></li>

                        <li><i class="fa-solid fa-gear"></i></i><a href="#">Cấu hình</a></li>

                        <li><i class="fa-regular fa-circle-question"></i><a href="#">Hỗ trợ</a></li>

                    </ul>
                </div>
            </div>
            <!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <div class="statistics">
                    <div class="statistics_inner">
                        <h2>Danh mục thống kê</h2>
                        <div class="statistics_group">
                            <input name="radio" type="radio" value="Thống kê thành phẩm theo tháng" checked>
                            <label for="Thống kê thành phẩm theo tháng">Thống kê thành phẩm theo tháng</label>
                        </div>
                        <div class="statistics_group">
                            <input name="radio" type="radio"value="Thống kê thành phẩm theo quý">
                            <label for="Thống kê thành phẩm theo quý">Thống kê thành phẩm theo quý</label>
                        </div>
                                

                        <div class="statistics_group"> 
                            <input name="radio" type="radio" value="Thống kê nguyên vật liệu theo tháng">
                            <label for="Thống kê nguyên vật liệu theo tháng">Thống kê nguyên vật liệu theo tháng</label>
                        </div>


                        <div class="statistics_group">
                            <input name="radio" type="radio" value="Thống kê nguyên vật liệu theo quý">
                            <label for="Thống kê nguyên vật liệu theo quý">Thống kê nguyên vật liệu theo quý</label>
                        </div>

                        <div class="statistics_btn">
                           <button type="submit">Thống kê</button>
                        </div>
                        

                        <table class="statistics_table" border="1">
                            <thead>
                                <tr>
                                    <th>Mã thành phẩm</th>
                                    <th>Tên thành phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Ngày sản xuất</th>
                                </tr>
                                <tr>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                </tr>
                                <tr>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                </tr>
                                <tr>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                </tr><tr>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                    <th>.</th>
                                </tr>
                            </thead>
                            <!-- Add data thống kê -->
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

</div>
</div>
</div>
</div>
</body>

</html>