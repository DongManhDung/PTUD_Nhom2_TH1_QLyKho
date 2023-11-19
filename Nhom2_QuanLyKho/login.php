
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
    session_start();
    if(isset($_POST['submit'])){
        $userName = $_POST["Username"];
        $password = $_POST["Password"];

        if(isset($userName) && isset($password)){
            $sql_tkVsMk = "SELECT UserName,Password from taikhoan WHERE Username='$userName' AND Password='$password' ";
            $query = mysqli_query($mysqli,$sql_tkVsMk); 
            $rows = mysqli_num_rows($query);
            if($rows > 0){
                $_SESSION["Username"]=$userName;
                $_SESSION["Password"]=$password;
                header('location: index.php?page_layout=danhsachkho');
            }else{
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Tài khoản hoặc mật khẩu không chính xác. Vui lòng nhập lại!</center>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/login/reset.css">
    <link rel="stylesheet" href="static/css/login/app.css">

    
    <title>Anonynous_login</title>
</head>
<body style="background: url('static/img/login/bg3.jpg');background-size: cover;">
    <div id="wrapper">
        <form action="" method="POST" id="form-login">
            <h1 class="form-heading">Đăng nhập</h1>
            <div class="form-group">
                <input type="text" class="form-input" name="Username" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <input type="password" name="Password"  class="form-input" placeholder="Mật khẩu">
            </div>
            <input type="submit" value="Đăng nhập" name="submit"  class="form-submit">
        </form>
    </div>
</body>
</html>