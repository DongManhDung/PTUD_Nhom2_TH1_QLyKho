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
        $maKhoDuocLay = $_GET["MaKho"];
        $stmt = mysqli_query($mysqli,"DELETE FROM kho WHERE MaKho = '$maKhoDuocLay'"); 
        if($stmt == true)
        {
            echo "Xóa thành công";
            header('location: index.php?page_layout=xoakho');
        }      
        else{
            echo "Xóa không thành công";
        }  
?>