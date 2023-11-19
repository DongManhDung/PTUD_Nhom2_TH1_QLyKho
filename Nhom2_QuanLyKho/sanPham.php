<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem thông tin sản phẩm</title>
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

                        <li><i class="fa-solid fa-tag"></i><a href="index.php?page_layout=timkiemsanpham" id="color_highlight">Sản phẩm</a></li>

                        <li><i class="fa-solid fa-file-export"></i><a href="index.php?page_layout=thongke">Thống kê</a></li>

                        <li><i class="fa-solid fa-gear"></i></i><a href="#">Cấu hình</a></li>

                        <li><i class="fa-regular fa-circle-question"></i><a href="#">Hỗ trợ</a></li>

                    </ul>
                </div>
</div>
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <div class="product">
                    <div class="product_inner">
                        <h1>Thông tin các sản phẩm</h1>
                        <div class="search_product">
                            <label for="txtMaSP">Tìm kiếm sản phẩm:</label>
                            <input type="text" id="txtMaSP" placeholder="Nhập mã sản phẩm">
                            <button value="submit">Tìm kiếm</button>
                        </div>


                        <table class="products_table" border="1">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ngày xuất kho</th>
                                    <th>Giá tiền</th>
                                </tr>
                            </thead>
                            <!-- Du lieu san pham -->
                            <tbody></tbody>
                        </table>

                    <div class="products_detail">
                        <div class="products_detail_inner">
                            <label for="txtSanPham">Thông tin chi tiết sản phẩm sau khi tìm kiếm theo mã:</label>
                            <img src="" alt="Ảnh sản phẩm khi load data" value="">
                            <div class="product_detail_group">
                                <label for="" id="moTaSanPham">Mô tả sơ lược: Bánh xốp phủ socola hương trà xanh. Bánh xốp giòn, thơm cùng lớp socola trà
                                    xanh phủ bên ngoài ngọt thanh hòa quyện vào nhau rất hoàn hảo. Bánh xốp phủ trà xanh Kitkat gói 136G nhỏ gọn, dễ mang theo bên người....
                                </label>
                                <table cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 20%;">Loại bánh</td>
                                            <td style="text-align: left; padding-left: 8px;" id="valueLoaiBanh">Bánh xốp phủ trà xanh</td>
                                        </tr>
                                        <tr>
                                            <td >Số lượng</td>
                                            <td style="text-align: left; padding-left: 8px;"  id="valueSoLuong">8 thanh x 17g</td>
                                        </tr>
                                        <tr>
                                            <td >Khối lượng tổng</td>
                                            <td style="text-align: left; padding-left: 8px;"  id="valueKhoiLuong">136g</td>
                                        </tr>
                                        <tr>
                                            <td >Năng lượng</td>
                                            <td style="text-align: left; padding-left: 8px;"  id="valueNangLuong">91kcal/17g</td>
                                        </tr>
                                        <tr>
                                            <td >Thành phần</td>
                                            <td style="text-align: left; padding-left: 8px;"  id="valueThanhPhan">Chất béo thực vật và dầu thực vật (nhân cây cọ, cây cọ,illipe,cây hạt mỡ, sal, xoài, kikum)
                                            ,sữa bột (sữa bò), đường, bột mì, bánh quy (bột mì, đường, dầu cọ, chất nhũ hóa lecithin 322(i), muối,....)</td>
                                        </tr>
                                        <tr>
                                            <td >Lưu ý</td>
                                            <td style="text-align: left; padding-left: 8px;"  id="valueLuuY">Sản phẩm có chứa sữa, gluten, đậu nành, có thể chứa đâụ phộng và các hạt khác.</td>
                                        </tr>
                                        <tr>
                                            <td >Bảo quản</td>
                                            <td style="text-align: left; padding-left: 8px;"  id="valueBaoQuan">Bảo quản nơi khô ráo thoáng mát, tránh ánh nắng trực tiếp</td>
                                        </tr>
                                        <tr>
                                            <td >Thương hiệu</td>
                                            <td style="text-align: left; padding-left: 8px;"  id="valueThuongHieu">KitKat (Thụy Sỹ)</td>
                                        </tr>
                                    </tbody>
                                </table>
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