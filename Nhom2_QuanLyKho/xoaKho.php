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

<?php
    $tenKhoCanXoa = $_POST["tenKhoCanXoa"];
    $row_LietKe_dsKhoXoa = mysqli_query($mysqli,"SELECT * FROM kho WHERE TenKho LIKE '%$tenKhoCanXoa%'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa kho</title>
    <!-- Add CSS styles -->
    <link rel="stylesheet" href="static/css/styles.css">
    <!-- Add Font awesome -->
    <script src="https://kit.fontawesome.com/a8954462a8.js" crossorigin="anonymous"></script>
    <!-- Add favicon -->
    <link rel="shortcut icon" href="static/img/favicon1.png" type="image/x-icon">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
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
                                <li><a href="index.php?page_layout=xoakho" id="color_highlight">Xóa kho</a></li>
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
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                    <div class="text_inner_right">
                        <h1>Xóa kho</h1>
                    </div>
                    
                    <div class="search_warehouse">
                        <div class="search_warehouse_inner">
                            <form action="xoaKho.php" method="POST" style="width:100%;display:inline-flex;justify-content:right">
                            <h3>Nhập tên kho cần tìm:</h3>
                            <input type="text" method="POST"  id="tenKhoCanXoa" name="tenKhoCanXoa" placeholder="">
                            <button name="search" id="search" style="margin-left:1rem;width:10%;font-size:20px;border-radius:5px;cursor:pointer" method="POST">Tìm kiếm</button>
                            
                            </form>
                        </div>
                    </div>
                    <div class="scanQR" style="width: 100%;display: flex;justify-content: right;height: auto;">
                            <label for="" style="margin-right:10px">Hoặc đưa mã QR vào đây: </label>
                            <video src=""  id="preview" style="width:400px;height:200px;border:1px solid black"></video>
                    </div>
                    <form action="xoaKho.php" method="POST">
                    <table class="warehouse_table" cellspacing="0">
                        <thead>
                            <tr>
                                <td>Mã kho</td>
                                <td>Tên kho</td>
                                <td>Địa chỉ</td>
                                <td>Dung lượng</td>
                                <td>Mã nhân viên</td>
                                <td>Thao tác</td>
                            </tr>
                            
                        </thead>
                        <!-- Chua co so du lieu kho -->
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($row_LietKe_dsKhoXoa)){
                                    
                            ?>
                                <tr>
                                    <td name="maKhoDcLay"><?php echo $row['MaKho']; ?></td>
                                    <td name="tenKhoDcLay"><?php echo $row['TenKho']; ?></td>
                                    <td name="diaChiKhoDcLay"><?php echo $row['DiaChi']; ?></td>
                                    <td name=""><?php echo $row['DungLuong']; ?></td>
                                    <td name=""><?php echo $row['MaNhanVien']; ?></td>
                                    <th>
                                        <a class="option-warehouse" href="CtrlXoaKho.php?MaKho=<?php echo $row['MaKho']?>" class="deleteWarehouse_btn" name="xoakhoo">Xóa kho</a>
                                    </th>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    
                        <!-- <div class="warehouse_function">
                            <div class="warehouse_function_inner">
                                <div class="warehouse_delete_function">
                                    
                                </div>
                            </div>
                        </div> -->
                </form>

            </div>
        </div>
    </div>
    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
        Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            }
            else{
                alert('No webcam found');
            }  
        }).catch(function(e){
            console.error(e);
        });

        scanner.addListener('scan',function(c){
            document.getElementById('tenKhoCanXoa').value=c;
            document.forms[0].submit();
        });
    </script>


    <style>
        .option-warehouse{
            text-decoration:none;
            font-size:18px
        }
        .option-warehouse:hover{
            color:red;
        }
    </style>

<script>
    function addAudio(){
        var audio = new Audio('scanner_sound.mp3');
        audio.play();
    }
    document.getElementById('search').addEventListener("click",addAudio);
</script>
</body>

</html>
