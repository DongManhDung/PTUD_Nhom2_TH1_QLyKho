<?php
error_reporting(E_ERROR | E_PARSE);
// connectDB nhom2_quanLyKho
$mysqli = new mysqli("localhost","root","","nhom2_qlkho");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối MYSQLLi" . $mysqli->connect_error;
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biên bản YCBT</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/styles.css">
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/index.js"></script>
</head>
<body>
    <div class="header">
        <div class="header_inner">
            <div class="header_left">
                <img src="static/img/logo2.jpg" alt="">
            </div>

            <div class="header_right">
                <h2>Hệ thống quản lý kho nhà máy</h2>
            </div>
        </div>
    </div>
    <div class="body_section">
        <div class="body_section_inner">
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
            <div class="body_section_inner_right">
                <div class="col-md-12" >
                <ul class="nav">
                
                   <li class="nav-item" id="formDangKy">
                       <a class="nav-link" href="#">Tạo Phiếu Mới</a>
                   </li>
                </ul>
                </div>
                <div class="row" style="padding-top: 10px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã Biên Bản</th>
                                    <th>Ngày Lập</th>
                                    <th>TT Sự Cố</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Minh Chứng</th>
                                    <th>Ghi chú</th>
                                </tr>
                            </thead>
                            <tbody>	
								<?php
                                    $ketqua = mysqli_query($mysqli,"select * from bienbanyeucauboithuong");
                                    $i = mysqli_num_rows($ketqua);
                                    if ($i >0)
                                    {
                                        $dem =1;
                                        while ($row=mysqli_fetch_array($ketqua))
                                        {
                                            $MaBienBan = $row['MaBienBan'];
                                            $ngayLap = $row['ngayLap'];
                                            $ThongTinSuCo = $row['ThongTinSuCo'];
                                            $MaSanPham = $row['MaSanPham'];
                                            $HinhAnhHoacTaiLieuMinhHoa = $row['HinhAnhHoacTaiLieuMinhHoa'];
                                            $GhiChu = $row['GhiChu'];
                                        echo '
                                                <tr>
                                                    <td>'.$dem.'</td>
                                                    <td>'.$MaBienBan.'</td>
                                                    <td>'.$ngayLap.'</td>
                                                    <td>'.$ThongTinSuCo.'</td>
                                                    <td>'.$MaSanPham.'</td>
                                                    <td>'.$HinhAnhHoacTaiLieuMinhHoa.'</td>
                                                    <td>'.$GhiChu.'</td>
                                                </tr>';
                                            $dem ++;
                                        }
                                    }
                                    else
                                    {
                                        echo 'Không có dữ liệu';
                                    }
								    // $p->thongtinbbbt("select * from bienbanyeucauboithuong");
								?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
  <div id="myModal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 style="width: 100%; text-align: center;">PHIẾU MỚI</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form" class="form-control" method="POST" action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Ngày Lập</b> </label>
                                </div>
                                <div class="col-md-8">
                                  <input id="txtTen" type="date" placeholder="Nhập ngày lập" class="form-control" name="txtTen">
                                    <span id="tbTen" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Mã Biên Bản</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtSCMND" type="text" placeholder="Nhập Mã Biên Bản" class="form-control" name="txtSCMND">
                                    <span id="tbSCMND" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>TT sự cố</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtQQ" type="text" placeholder="Nhập thông tin sự cố" class="form-control" name="txtQQ">
                                    <span id="tbQQ" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Mã SP</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtEmail" type="text" name="txtEmail" placeholder="Nhập mã sản phẩm" class="form-control">
                                    <span id="tbEmail" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Ghi Chú</b> </label>
                                </div>
                                <div class="col-md-8">
								<input id="txtSDT" type="text" placeholder="Nhập ghi chú" class="form-control" name="txtSDT">
                                    <span id="tbSDT" class="text-danger">*</span><br>
                                </div>
                            </div>
                            
                           
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Minh Chứng</b></label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtAvt" name="AnhMinhChung" type="file" placeholder="Ảnh minh chứng" class="form-control">
                                    <span id="tbAvt" class="text-danger">*</span><br>
                                </div>
                            </div>
                             <div class="col-md-12">
								<button type="submit" class="btn btn-success btn-block" name="btnSave">Lưu</button>
							</div>
							
							<?php
						// Kiểm tra nếu form được gửi đi
						if (isset($_POST['btnSave'])) {
				
							$ngayLap = $_REQUEST['txtTen'];
							$MaBienBan = $_REQUEST['txtSCMND'];
							$ThongTinSuCo = $_REQUEST['txtQQ'];
							$MaSanPham = $_REQUEST['txtEmail'];
							$GhiChu = $_REQUEST['txtSDT'];
							// Thực hiện truy vấn INSERT
							$sql = "INSERT INTO bienbanyeucauboithuong (MaBienBan, ngayLap, ThongTinSuCo, MaSanPham, GhiChu) VALUES ('$MaBienBan','$ngayLap', '$ThongTinSuCo', '$MaSanPham', '$GhiChu')";
                            if(mysqli_query($mysqli,$sql))
                            {
                                return 1;
                            } else
                            {
                                return 0;
                            }

							// Kiểm tra kết quả và thông báo cho người dùng
							if ($result == 1) {
								echo "Dữ liệu đã được thêm vào CSDL thành công.";
							} else {
								echo "Lỗi khi thêm dữ liệu vào CSDL.";
							}

							// Đóng kết nối
							mysql_close($link);
						}
?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

      