<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo phiếu kiểm kho</title>
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
    <?php
        include_once 'navbar.php';
    ?>
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <div><h3><u>Tạo phiếu kiểm kho</u></h3></div>
                <div><label for="kho"><h4>Chọn kho kiểm kê:</h4></label>

                <form action="#" method='post' class="form-kho">
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
                <input type="submit" name='submit'>
                </form>
                <!-- <form action="#" method="post">
                <select class="form-control" name="TenNVL" id="TenNVL"> -->
                                <?php
                                        // $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                        // $db=mysqli_select_db($conn,"nhom2_qlkho");
                                        // $makho = $_REQUEST['kho'];
                                        // $queryNVL = "SELECT * FROM nguyenvatlieu as NVL 
                                        // inner join chitietphieunhapnvl as CT on NVL.MaNVL=CT.MaNVL 
                                        // inner join kho as K on NVL.MaKho=K.MaKho
                                        // where NVL.MaKho = $makho";
                                        // $data = mysqli_query($conn, $queryNVL);
                                        // if (!$data) {
                                        //     echo 'Data cannot be displayed!';
                                        // } else {
                                        //     while ($row = mysqli_fetch_assoc($data)) {
                                        //         if($_REQUEST['TenNVL']===$row['TenNVL'])
                                        //             echo '<option selected  value="'.$row['TenNVL'].'">'.$row['TenNVL'].'</option>';
                                        //         echo '<option  value="'.$row['TenNVL'].'">'.$row['TenNVL'].'</option>';
                                        //     }
                                        // }                                        
                                ?>
                <!-- </select>
                <input type="submit" name= 'chon'>
                </form> -->
            </div>
                <form action="processKK.php" method="post" class="form-kiemke">
                <table class="table-one">
                    <thead>
                        <tr>
                            <th>Kho</th>
                            <th>Tên nguyên vật liệu</th>
                            <th>Ngày nhập</th>
                            <th>Ngày sản xuất</th>
                            <th>Ngày hết hạn</th>
                            <th>Số lượng </th>
                            <th>Số lượng thực tế</th>
                            <th>Tên nhân viên</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php           
                                        if(isset($_REQUEST['submit'])){
                                            // $tenNVL0 = $_REQUEST['TenNVL'];
                                            $kho0 = $_REQUEST['kho'];
                                            $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
                                            $db=mysqli_select_db($conn,"nhom2_qlkho");
                                            $query="SELECT * FROM nguyenvatlieu as NVL 
                                            inner join chitietphieunhapnvl as CT on NVL.MaNVL=CT.MaNVL 
                                            inner join kho as K on NVL.MaKho=K.MaKho
                                            where NVL.MaKho = $kho0";
                                            $qr1 = "SELECT * FROM nhanvienkho";
                                            $nhanviendata = mysqli_query($conn, $qr1);
                                            $data = mysqli_query($conn, $query);
                                            // var_dump($query);
                                        while ($a = mysqli_fetch_assoc($data)) {
                                            echo '<tr>';
                                            $kho = $a['MaKho'];
                                            echo "<td> <input name = 'khoKiemKe' value='$kho' disable></td>";
                                            $ten = $a['TenNVL'];
                                            echo "<td> <input name = 'tenNVLKiemKe' value='$ten' disable></td>";
                                            $ngayNhap = $a['NgayNhap'];
                                            echo "<td> <input name = 'ngayNhapKiemKe' value='$ngayNhap' disable></td>";
                                            $ngaySX = $a['NgaySX'];
                                            echo "<td> <input name = 'ngaySXKiemKe' value='$ngaySX' disable></td>";
                                            $ngayHH = $a['NgayHH'];
                                            echo "<td> <input name = 'ngayHHKiemKe' value='$ngayHH' disable></td>";
                                            $soLuong = $a['SoLuong'];
                                            echo "<td> <input name = 'soLuongHeThong' value='$soLuong' disable></td>";
                                            echo "<td><input type='number' name = 'soLuongThucTe'></td>";
                                        }
                                        echo "<td>";
                                        echo "<select name='tenNV' id='tenNV'>";
                                        while ( $b = mysqli_fetch_assoc($nhanviendata)) {
                                            $tenNV = $b['HoTen'];
                                            $maNV = $b['MaNhanVien'];
                                            echo "<option value='".$maNV."-".$tenNV."'>$tenNV</option>";
                                        }
                                        echo "</select>
                                        </td>";
                                        echo '</tr>';

                                    }
                                    
                        ?>
                    </tbody>
                </table>
                <div class="press">
                <input style="background-color: rgb(162, 58, 58);" type="reset" value="Hủy">
                <input style="background-color: green;" type="submit" name = "submitKiemKe" value="Lưu">
                </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>