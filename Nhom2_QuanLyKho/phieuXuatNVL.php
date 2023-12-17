<?php
// connectDB nhom2_quanLyKho
$mysqli = new mysqli("localhost","root","","nhom2_qlkho");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối MYSQLLi" . $mysqli->connect_error;
  exit();
}
?>

<?php
    //reset trang
    if(isset($_POST["reset"])){
        header('location: index.php?page_layout=phieuxuatnvl');
    }
?>

<?php
    if(isset($_POST["phieuXuatNVL"])){
        
        $ngayLap = $_POST["NgayLap"];
        $maKho = $_POST["MaKho"];
        //Nguyên vật liệu 1
        $nvl1 = $_POST["MaNVL1"];
        $soLuong1 = $_POST["SoLuong1"];
        $ngaySX1 = $_POST["NgaySX1"];
        
        //Nguyên vật liệu 2
        $nvl2 = $_POST["MaNVL2"];
        $soLuong2 = $_POST["SoLuong2"];
        $ngaySX2 = $_POST["NgaySX2"];
        
        //Nguyên vật liệu 3
         $nvl3 = $_POST["MaNVL3"];
         $soLuong3 = $_POST["SoLuong3"];
         $ngaySX3 = $_POST["NgaySX3"];
         
         //Nguyên vật liệu 4
        $nvl4 = $_POST["MaNVL4"];
        $soLuong4 = $_POST["SoLuong4"];
        $ngaySX4 = $_POST["NgaySX4"];
        
        //Nguyên vật liệu 5
        $nvl5 = $_POST["MaNVL5"];
        $soLuong5 = $_POST["SoLuong5"];
        $ngaySX5 = $_POST["NgaySX5"];
        
        //Nguyên vật liệu 6
         $nvl6 = $_POST["MaNVL6"];
         $soLuong6 = $_POST["SoLuong6"];
         $ngaySX6 = $_POST["NgaySX6"];
         
         //Nguyên vật liệu 7
        $nvl7 = $_POST["MaNVL7"];
        $soLuong7 = $_POST["SoLuong7"];
        $ngaySX7 = $_POST["NgaySX7"];
        
        //Nguyên vật liệu 8
        $nvl8 = $_POST["MaNVL8"];
        $soLuong8 = $_POST["SoLuong8"];
        $ngaySX8 = $_POST["NgaySX8"];
        
        //Nguyên vật liệu 9
         $nvl9 = $_POST["MaNVL9"];
         $soLuong9 = $_POST["SoLuong9"];
         $ngaySX9 = $_POST["NgaySX9"];
         
        
        //Nguyên vật liệu 10
        $nvl10 = $_POST["MaNVL10"];
        $soLuong10 = $_POST["SoLuong10"];
        $ngaySX10 = $_POST["NgaySX10"];
        
        $i =0;
        if(!$ngayLap){
            echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
            margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
            Ngày lập không được để trống. Vui lòng nhập lại!</center>';
        }
        else{
         //Insert phieuXuatkho
         $sql_lapPhieuXuatNVL = "INSERT INTO phieuXuatkho(NgayLap,MaKho) VALUES ('$ngayLap','$maKho')";
         mysqli_query($mysqli,$sql_lapPhieuXuatNVL);
 
         //Lấy ID phieuXuatkho vừa được thêm vào
         $sql_maPhieuXuatMoi = "SELECT  MAX(MaPhieuXuatKho) as Max_id FROM phieuXuatkho";
         $result= mysqli_query($mysqli, $sql_maPhieuXuatMoi);
      
         if ($result->num_rows > 0) 
         {
             while($row = $result->fetch_assoc()) {
                 $newID= $row["Max_id"];
             }
         }
 
         // //Insert chitietphieuXuatnvl
          if($nvl1!=""){
             //Kiem Tra so luong nhap
             if($soLuong1 < 0  || !$soLuong1 ){
                 $i = 1;
                 echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                 margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                 Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX1){
                 $i = 1;
                 echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                 margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                 Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
            }
            else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong1','$ngaySX1','$nvl1', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong1' WHERE NgaySX = '$ngaySX1' AND MaNVL = '$nvl1' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);   
            }  
          }
          if($nvl2!=""){
              //Kiem Tra so luong nhap
             if($soLuong2 < 0 or !$soLuong2){
                 $i = 1;
                 echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                 margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                 Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
             }
             //Kiem tra ngay thang
            if(!$ngaySX2){
             $i = 1;
             echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
             margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
             Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
             }else{
             $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
             VALUES ('$soLuong2','$ngaySX2','$nvl2', '$newID')";
             mysqli_query($mysqli,$sql_chiTietPhieu);
             //Cap nhat so luong sau khi xuat kho
             $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong2' WHERE NgaySX = '$ngaySX2' AND MaNVL = '$nvl2' ";
             mysqli_query($mysqli,$sql_capNhatSoLuong);
             }
          }
          if($nvl3!=""){
              //Kiem Tra so luong nhap
             if($soLuong3 < 0  || !$soLuong3){
                 $i = 1;
                 echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                 margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                 Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
             }
             //Kiem tra ngay thang
            if(!$ngaySX3){
             $i = 1;
             echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
             margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
             Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
             }
             else{
             $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
             VALUES ('$soLuong3','$ngaySX3','$nvl3', '$newID')";
             mysqli_query($mysqli,$sql_chiTietPhieu);
             //Cap nhat so luong sau khi xuat kho
             $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong3' WHERE NgaySX = '$ngaySX3' AND MaNVL = '$nvl3' ";
             mysqli_query($mysqli,$sql_capNhatSoLuong);
             }
         }
             if($nvl4!=""){
                 //Kiem Tra so luong nhap
                 if($soLuong4 < 0  || !$soLuong4){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
                 }
                 //Kiem tra ngay thang
                  if(!$ngaySX4){
                 $i = 1;
                 echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                 margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                 Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
                 }        
                 else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong4','$ngaySX4','$nvl4', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong4' WHERE NgaySX = '$ngaySX4' AND MaNVL = '$nvl4' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);
                 }
              }
              if($nvl5!=""){
                  //Kiem Tra so luong nhap
                  if($soLuong5 < 0  || !$soLuong5){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
                 }
                 //Kiem tra ngay thang
                 if(!$ngaySX5){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
                     }        
                 else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong5','$ngaySX5','$nvl5', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong5' WHERE NgaySX = '$ngaySX5' AND MaNVL = '$nvl5' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);
                 }
              }
              if($nvl6!=""){
                  //Kiem Tra so luong nhap
                 if($soLuong6 < 0  || !$soLuong6){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
                 }
                 //Kiem tra ngay thang
                 if(!$ngaySX6){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
                     }                        
                 else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong6','$ngaySX6','$nvl6', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong6' WHERE NgaySX = '$ngaySX6' AND MaNVL = '$nvl6' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);
                 }
              }
              if($nvl7!=""){
                  //Kiem Tra so luong nhap
                 if($soLuong7 < 0  || !$soLuong7){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
                 }
                 //Kiem tra ngay thang
                 if(!$ngaySX7){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
                     }                        
                 else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong7','$ngaySX7','$nvl7', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong7' WHERE NgaySX = '$ngaySX7' AND MaNVL = '$nvl7' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);
                 }
              }
              if($nvl8!=""){
                  //Kiem Tra so luong nhap
                  if($soLuong8 < 0  || !$soLuong8){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
                 }
                 //Kiem tra ngay thang
                 if(!$ngaySX8){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  ;
                     }                        
                 else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong8','$ngaySX8','$nvl8', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong8' WHERE NgaySX = '$ngaySX8' AND MaNVL = '$nvl8' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);
                 }
              }
              if($nvl9!=""){
                  //Kiem Tra so luong nhap
                  if($soLuong9 < 0  || !$soLuong9){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
                 }
                 //Kiem tra ngay thang
                 if(!$ngaySX9){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
                     }                        
                 else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong9','$ngaySX9','$nvl9', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong9' WHERE NgaySX = '$ngaySX9' AND MaNVL = '$nvl9' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);
                 }
              }
              if($nvl10!=""){
                  //Kiem Tra so luong nhap
                  if($soLuong10 < 0  || !$soLuong10){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
                 }
                 //Kiem tra ngay thang
                 if(!$ngaySX10){
                     $i = 1;
                     echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                     margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                     Ngày sản xuất không để trống. Vui lòng nhập lại!</center>';  
                     }                        
                 else{
                 $sql_chiTietPhieu = "INSERT INTO chitietphieuxuatnvl(SoLuong,NgaySX,MaNVL,MaPhieuXuatKho)
                 VALUES ('$soLuong10','$ngaySX10','$nvl10', '$newID')";
                 mysqli_query($mysqli,$sql_chiTietPhieu);
                 //Cap nhat so luong sau khi xuat kho
                 $sql_capNhatSoLuong = "UPDATE chitietphieunhapnvl SET Soluong = SoLuong - '$soLuong10' WHERE NgaySX = '$ngaySX10' AND MaNVL = '$nvl10' ";
                 mysqli_query($mysqli,$sql_capNhatSoLuong);
    
              }
             }
             //Quay lại trang danh sách kho
             if($i==0){
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: red;background-color: gray;border-color: #f5c6cb;">
                LẬP PHIẾU XUẤT NGUYÊN VẬT LIỆU THÀNH CÔNG!</center>';
                }
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu xuất NVL</title>
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

                        <li><i class="fa-solid fa-clipboard"></i><a href="index.php?page_layout=phieunhapxuat" id="color_highlight">Phiếu nhập xuất</a></li>
                        <ul class="navbar_fix1">
                            <li><a href="index.php?page_layout=phieunhapnvl">Phiếu nhập nguyên vật liệu</a></li>
                            <li><a href="index.php?page_layout=phieunhapsp">Phiếu nhập sản phẩm</a></li>
                            <li><a href="index.php?page_layout=phieuxuatnvl" id="color_highlight">Phiếu xuất nguyên vật liệu</a></li>
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
                    <h2>PHIẾU XUẤT NGUYÊN VẬT LIỆU</h2><br>
                    
                </div>
                <div class="form_style">
                <form action="phieuXuatNVL.php" method="POST">
                        
                        <label for="lname">Kho nguyên vật liệu:</label>
                        <select id="kho" name="MaKho">
                            <option value="1">Kho nguyên vật liệu 1</option>
                            <option value="2">Kho nguyên vật liệu 2</option>
                            <option value="3">Kho nguyên vật liệu 3</option>
                            <option value="4">Kho nguyên vật liệu 4</option>
                            <option value="5">Kho nguyên vật liệu 5</option>
                            <option value="11">Kho nguyên vật liệu 11</option>
                          </select>
                          <label for="ngayLap">Ngày lập</label>
                          <input type="date"  name="NgayLap"> <br><br>
                        <h2 style="margin-left: 10%;">Danh sách nguyên vật liệu nhập</h2><br><br>
                        <div class="">
                            <table border="1" cellpadding="1" cellspacing="1" class="phieu_table">
                                <tr>
                                        <td>
                                            <p>STT</p>
                                        </td>
                                        <td>
                                            <p>NGUYÊN VẬT LIỆU</p>
                                        </td>
                                        <td>
                                            <p>SỐ LƯỢNG</p>
                                        </td>
                                        <td>
                                            <p>NGAY_SX</p>
                                        </td>
                                </tr>
                                    <tr>
                                        <td>
                                            <p>1</p>
                                        </td>
                                        <td>
                                            <input list="nvl" name="MaNVL1">
                                                <datalist id="nvl">
                                                <option value="1">Duong</option>
                                                <option value="2">Mach nha</option>
                                                <option value="3">Bot mi</option>
                                                <option value="4">Hat dieu</option>
                                                <option value="5">Sua khong duong</option>
                                                <option value="6">Bo</option>
                                                <option value="7">Trung</option>
                                                <option value="8">Huong vi</option>
                                                <option value="9">Muoi</option>
                                                <option value="10">Tinh dau</option>
                                                <option value="11">Vani</option>
                                                <option value="12">Huong lieu</option>
                                                </datalist>
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong1"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX1"> 
                                        </td>
                            
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <input list="nvl" name="MaNVL2">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong2"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX2"> 
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>3</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL3">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong3"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX3"> 
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>4</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL4">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong4"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX4"> 
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>5</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL5">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong5"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX5"> 
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>6</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL6">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong6"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX6"> 
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>7</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL7">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong7"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX7"> 
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>8</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL8">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong8"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX8"> 
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>9</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL9">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong9"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX9"> 
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>10</p>
                                        </td>
                                         <td>
                                            <input list="nvl" name="MaNVL10">
                                        </td>
                                        <td>
                                            <input type="number" name="SoLuong10"> 
                                        </td>
                                        <td>
                                            <input type="date"  name="NgaySX10"> 
                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <br><br><br><br>
                        <div class="phieu_button">
                            <button style="background-color: red;" type="reset"><b>Hủy bỏ</b> </button>
                            <button style="background-color: green;" type="submit" name="phieuXuatNVL"><b>Lập phiếu</b> </button>
                        </div>
                    </form> 
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
</html>