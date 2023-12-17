<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Add CSS styles -->
    <link rel="stylesheet" href="static/css/styles.css">
    <!-- Add Font awesome -->
    <script src="https://kit.fontawesome.com/a8954462a8.js" crossorigin="anonymous"></script>
    <!-- Add favicon -->
    <link rel="shortcut icon" href="static/img/favicon1.png" type="image/x-icon">
    <title>Thêm nguyên vật liệu</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/styles.css">
    <link rel="stylesheet" href="style.css">
    <script src="static/js/constraint.js"></script>
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/index.js"></script>
   
    
    
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
            <?php
                include_once 'navbar.php';
            ?>
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <h3>Danh sách nguyên vật liệu
                </h3>
                <ul class="nav">
                
                   <li class="nav-item" id="formDangKy">
                       <a class="nav-link" href="#">Thêm Nguyên Vật Liệu Mới</a>
                   </li>
                </ul>
                <br> 
                <form action="#" method='post' class="form-kho-filter">
                <h4>Xem nguyên vật liệu theo kho:</h4>
                <select class="form-control" name="kho" id="kho">
                                <?php
                                        $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                        $db=mysqli_select_db($conn,"nhom2_qlkho");
                                        $querykho = 'SELECT * FROM kho';
                                        $data = mysqli_query($conn, $querykho);

                                        if (!$data) {
                                            echo 'Data cannot be displayed!';
                                        } else {
                                            while ($row = mysqli_fetch_assoc($data)) {
                                                if($_REQUEST['kho']===$row['MaKho'])
                                                    echo '<option selected  value="'.$row['MaKho'].'">'.$row['MaKho']." ".$row['TenKho'].'</option>';
                                                echo '<option  value="'.$row['MaKho'].'">'.$row['MaKho']." ".$row['TenKho'].'</option>';
                                            }
                                        }                                        
                                ?>
                </select>
                <input type="submit" class="btn-filter-kho" name='submit'>
                </form>
                <div class="col-md-12" >
                
                <table class="table-one">
                    <thead>
                        <tr>
                            <th>Kho</th>
                            <th>Tên</th>
                            <th>Ngày nhập</th>
                            <th>Ngày sản xuất</th>
                            <th>Ngày hết hạn</th>
                            <th>Số lượng </th>
                            <th>Đơn vị tinh</th>
                            <th>Giá</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            function getAllMaterials() {
                                $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                $db=mysqli_select_db($conn,"nhom2_qlkho");
                                $query="SELECT * FROM nguyenvatlieu as NVL 
                                inner join chitietphieunhapnvl as CT on NVL.MaNVL=CT.MaNVL 
                                inner join kho as K on NVL.MaKho=K.MaKho";
                                $data=mysqli_query($conn,$query);
                                
                                while($row=mysqli_fetch_assoc($data)){
                                    echo '<tr>';
                                    echo '<td>'.
                                        $row['MaKho']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['TenNVL']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['NgayNhap']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['NgaySX']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['NgayHH']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['SoLuong']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['DonViTinh']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['Gia']
                                        .'</td>';
                                    echo '<td><a href="index.php?page_layout=danhsachnguyenvatlieu&quanlyDel='.
                                        $row['MaNVL']
                                        .'"> Xóa</a>|'.
                                        '<a href="index.php?page_layout=danhsachnguyenvatlieu&quanlyUpdate='.
                                        $row['MaNVL']
                                        .'"> Sửa</a>'
                                        .'</td>';
                                    echo '</tr>';
                                }
                            }
                            function getMaterialsByStuck($stuck) {
                                $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                        $db=mysqli_select_db($conn,"nhom2_qlkho");
                                $query="SELECT * FROM nguyenvatlieu as NVL 
                                inner join chitietphieunhapnvl as CT on NVL.MaNVL=CT.MaNVL 
                                inner join kho as K on NVL.MaKho=K.MaKho
                                where K.MaKho = $stuck
                                ";
                                $data=mysqli_query($conn,$query);
                                while($row=mysqli_fetch_assoc($data)){
                                    echo '<tr>';
                                    echo '<td>'.
                                        $row['MaKho']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['TenNVL']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['NgayNhap']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['NgaySX']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['NgayHH']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['SoLuong']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['DonViTinh']
                                        .'</td>';
                                    echo '<td>'.
                                        $row['Gia']
                                        .'</td>';
                                    echo '<td><a href="index.php?page_layout=danhsachnguyenvatlieu&quanlyDel='.
                                        $row['MaNVL']
                                        .'"> Xóa</a>|'.
                                        '<a href="index.php?page_layout=danhsachnguyenvatlieu&quanlyUpdate='.
                                        $row['MaNVL']
                                        .'"> Sửa</a>'
                                        .'</td>';
                                    echo '</tr>';
                                }
                            }
                            function delete($ma) {
                                $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                        $db=mysqli_select_db($conn,"nhom2_qlkho");
                                $query = "DELETE FROM nguyenvatlieu where MaNVL = $ma";
                                $data=mysqli_query($conn,$query);
                                if($data){
                                    echo '<script>alert("Xóa thành công nguyên vật liệu");</script>';
                                }else{
                                    echo '<script>alert("Không thể xóa nguyên vật liệu");</script>';
                                }
                            }
                            function deleteDetailsForm($ma) {
                                $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                $db=mysqli_select_db($conn,"nhom2_qlkho");
                                $query = "DELETE FROM chitietphieunhapnvl where MaNVL = $ma";
                                $data=mysqli_query($conn,$query);
                                if($data){
                                    echo '<script>alert("Xóa thành công chi tiết phiếu nhập nguyên vật liệu");</script>';
                                }else{
                                    echo '<script>alert("Không thể xóa chi tiết phiếu nhập nguyên vật liệu");</script>'; 
                                    
                                }
                            }
                            function update($ma, $soLuong) {
                                $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                $db=mysqli_select_db($conn,"nhom2_qlkho");
                                $query = "UPDATE nguyenvatlieu set soluong = $soLuong where MaNVL= $ma";
                                $data=mysqli_query($conn,$query);
                                if($data){
                                    echo '<script>alert("Cập nhật số lượng thành công");</script>';
                                }else{
                                    echo '<script>alert("Không thể cập nhật nguyên vật liệu");</script>'; 
                                }
                            }
                            isset($_REQUEST['submit'])? getMaterialsByStuck($_REQUEST['kho']) :getAllMaterials();
                            //  ? () : "";
                            if (isset($_REQUEST['quanlyDel'])) {
                                deleteDetailsForm($_REQUEST['quanlyDel']);
                                delete($_REQUEST['quanlyDel']);
                                // echo header('location: ./index.php?page_layout=danhsachnguyenvatlieu');
                                // exit;
                            }
                            // include_once 'formUpdateNVL.php';

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<div id="myModal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 style="width: 100%; text-align: center;">NGUYÊN VẬT LIỆU MỚI</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form" method='post' action='xlyAddNVL.php' class="form-control" name="Modal" >
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Kho</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="kho" id="kho">
                                <?php
                                        $querykho = 'SELECT * FROM kho';
                                        $data = mysqli_query($conn, $querykho);

                                        if (!$data) {
                                            echo 'Data cannot be displayed!';
                                        } else {
                                            while ($row = mysqli_fetch_assoc($data)) {
                                                echo '<option  value="'.$row['MaKho'].'">'.$row['MaKho']." ".$row['TenKho'].'</option>';
                                            }
                                        }                                        
                                ?>
                                </select>
                                    <span id="tbTen" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Tên NVL</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtTenNVL" type="text" onchange='checkValidation("#txtTenNVL","#tbTenNVL")' placeholder="Nhập tên NVL" class="form-control" name="TenNVL">
                                    <span id="tbTenNVL" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Ngày Nhập</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtNgayNhap" type="date" class="form-control" onchange='checkValidation("#ttxtNgayNhap","#tbNgayNhap")' name="NgayNhap">
                                    <span id="tbNgayNhap" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Ngày Sản Xuất</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtNSX" type="date" placeholder="Nhập mã sản phẩm" class="form-control" onchange='checkValidation("#txtNSX","#tbNSX")' name="NgaySanXuat">
                                    <span id="tbNSX" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Ngày Hết Hạn</b> </label>
                                </div>
                                <div class="col-md-8">
                                <input id="txtNgayHH" type="date" placeholder="Nhập ghi chú" class="form-control" onchange='checkValidation("#txtNgayHH","#tbNgayHH")' name="NgayHetHan">
                                    <span id="tbSDT" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Số lượng</b></label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtSoLuong" type="number" onchange='validNum("#txtSoLuong", "#tbSoLuong")' class="form-control" name="SoLuong">
                                    <span id="tbSoLuong" class="text-danger">*</span><br>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Đơn vị tính</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtDVT" type="text" class="form-control" onchange='checkValidation("#txtDVT","#tbDVT")' name="DonViTinh">
                                    <span id="tbDVT" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><b>Giá</b> </label>
                                </div>
                                <div class="col-md-8">
                                    <input id="txtGia" type="number" 
                                    onchange='validNum("#txtGia", "#tbGia")'
                                    class="form-control" name="Gia">
                                    <span id="tbGia" class="text-danger">*</span><br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                        <input id="btnAdd" type="submit" class="form-control btn btn-success" value="Luu" name="Luu" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
</html>
<?php
    
?>