<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biên bản yêu cầu bồi thường</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/styles.css">
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/index.js"></script>

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
            <div class="body_section_inner_left">
                <div class="navbar">
                    <ul>
                        <li><i class="fa-solid fa-chart-simple"></i><a href="#"  id="color_highlight">Báo cáo</a></li>
                            <ul class="navbar_fix1">
                                <li><a href="index.php?page_layout=phieudonhangtrave">Phiếu đơn hàng trả về</a></li>
                                <li><a href="index.php?page_layout=bienbanyeucauboithuong" id="color_highlight">Biên bản yêu cầu bồi thường</a></li>
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
                                    <th>Ngày Lập</th>
                                    <th>Mã Biên Bản</th>
                                    <th>TT Sự Cố</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Ghi chú</th>
                                    <th>Minh Chứng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>22/09/2023</th>
                                    <th>22092301</th>
                                    <th>hỏng quá 10%</th>
                                    <th>MD0509</th>
                                    <th>bồi thường trước ngày 24/09/2023</th>
                                    <th>AnhMoi</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>

        <div id="myModal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 style="width: 100%; text-align: center;">PHIẾU MỚI</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form" class="form-control">
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Ngày Lập</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtTen" type="date" placeholder="Nhập ngày lập" class="form-control">
                                    <span id="tbTen" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Mã Biên Bản</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtSCMND" type="text" placeholder="Nhập Mã Biên Bản" class="form-control">
                                    <span id="tbSCMND" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>TT sự cố</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtQQ" type="text" placeholder="Nhập thông tin sự cố" class="form-control">
                                    <span id="tbQQ" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Mã SP</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtEmail" type="email" placeholder="Nhập mã sản phẩm" class="form-control">
                                    <span id="tbEmail" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Ghi Chú</b> </label>
                                </div>
                                <div class="col-md-8">
<input id="txtSDT" type="text" placeholder="Nhập ghi chú" class="form-control">
                                    <span id="tbSDT" class="text-danger">*</span><br>
                                </div>
                            </div>
                            
                           
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Minh Chứng</b></label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtAvt" type="file" placeholder="Ảnh minh chứng" class="form-control">
                                    <span id="tbAvt" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success btn-block" id="btnSave">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>