<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu nhập sản phẩm</title>
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

                        <li><i class="fa-solid fa-clipboard"></i><a href="#" id="color_highlight">Phiếu nhập xuất</a></li>
                        <ul class="navbar_fix1">
                            <li><a href="index.php?page_layout=phieunhapnvl">Phiếu nhập nguyên vật liệu</a></li>
                            <li><a href="index.php?page_layout=phieunhapsp" id="color_highlight">Phiếu nhập sản phẩm</a></li>
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

                        <li><i class="fa-solid fa-file-export"></i><a href="index.php?page_layout=thongke">Thống kê</a></li>

                        <li><i class="fa-solid fa-gear"></i></i><a href="#">Cấu hình</a></li>

                        <li><i class="fa-regular fa-circle-question"></i><a href="#">Hỗ trợ</a></li>

                    </ul>
                </div>
</div>
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <div class="text_inner_right">
                    <h2>PHIẾU NHẬP SẢN PHẨM</h2><br>
                    <h3>THÔNG TIN PHIẾU</h3>
                </div>
                <div class="form_style">
                    <form action="" target="" >
                        <label for="fname">Mã phiếu:</label>
                        <input type="text" id="fphieu" name="fphieu" value="">  
                        <label for="lname">Chọn kho:</label>
                        <select id="kho" name="kho">
                            <option value="kho1">Kho 1</option>
                            <option value="kho2">Kho 2</option>
                            <option value="kho3">Kho 3</option>
                          </select>
                          <label for="ngayLap">Ngày lập</label>
                          <input type="date" id="ngayLap" name="ngayLap"> <br><br>
                        <h2 style="margin-left: 10%;">Danh sách sản phẩm nhập</h2><br><br>
                        <div class="">
                            <table border="1" cellpadding="1" cellspacing="1" class="phieu_table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>STT</p>
                                        </td>
                                        <td>
                                            <p>SẢN PHẨM</p>
                                        </td>
                                        <td>
                                            <p>SỐ LƯỢNG</p>
                                        </td>
                                        <td>
                                            <p>NGAY_SX</p>
                                        </td>
                                        <td>
                                            <p>NGAY_HH</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>1</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                                <datalist id="sp">
                                                <option value="Bánh quy đường">
                                                <option value="Kẹo dẻo">
                                                <option value="Kẹo táo">
                                                <option value="Kẹo mút">
                                                <option value="Chip chip">
                                                <option value="Oshi">
                                                <option value="Bánh bông lan">
                                                <option value="Bánh quy không đường">
                                                <option value="Bánh mì ngọt">
                                                <option value="Bánh ống">
                                                <option value="Bánh in">
                                                </datalist>
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>3</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>4</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>5</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>6</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>7</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>8</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>9</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <input list="sp">
                                        </td>
                                        <td>
                                            <input type="text"> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name=""> 
                                        </td>
                                        <td>
                                            <input type="date" id="" name="">
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <br><br><br><br>
                    <div class="phieu_button">
                            <button style="background-color: red;" type="reset"><b>Hủy bỏ</b> </button><button style="background-color: green;" type="submit"><b>Lập phiếu</b> </button>
                        </div>
                    </form> 
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
</html>