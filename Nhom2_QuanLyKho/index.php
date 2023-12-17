<?php 
//MasterPage
    if(isset($_GET["page_layout"])){
        switch($_GET["page_layout"]){

            // Kho
            case 'danhsachkho':include_once './danhSachKho.php';
                break;
            case 'themkhomoi':include_once './themKhoMoi.php';
                break; 
            case 'xoakho':include_once './xoaKho.php';
                break;  
            case 'suakho':include_once './suaKho.php';
                break;

            // Nhan vien
            case 'danhsachnhanvien':include_once './dsNhanVien.php';
                break;
            case 'themnhanvien':include_once './themNhanVien.php';
                break;
            case 'xoanhanvien':include_once './xoaNhanVien.php';
                break;
            case 'suanhanvien':include_once './suaNhanVien.php';
                break;

            //Bao cao
            case 'bienbanyeucauboithuong':include_once './bienbanYeuCauBT.php';
                break;
            case 'phieudonhangtrave':include_once './phieuYCHangTraVe.php';
                break;
            case 'taophieukiemke':include_once './taoPhieuKiemKe.php';
                break;
            case 'phieukiemke':include_once './phieuKiemKe.php';
                break;

            // Phieu nhap xuat
            case 'phieunhapxuat':include_once './phieuNhapXuat.php';
                break;
            case 'dsphieunhapnvl':include_once './DSphieuNhapNVL.php';
                break;
            case 'dsphieunhapsp':include_once './DSphieuNhapSP.php';
                break;  
            case 'dsphieuxuatnvl':include_once './DSphieuXuatNVL.php';
                break;
            case 'dsphieuxuatsp':include_once './DSphieuXuatSP.php';
                break;                  
            case 'phieunhapnvl':include_once './phieuNhapNVL.php';
                break;
            case 'phieunhapsp':include_once './phieuNhapSP.php';
                break;
            case 'phieuxuatnvl':include_once './phieuXuatNVL.php';
                break;
            case 'phieuxuatsp':include_once './phieuXuatSP.php';
                break;

            // Dieu Phoi Kho
            case 'dieuphoinhapnvl':include_once './dieuPhoiNhapNVL.php';
                break;
            case 'dieuphoinhapsp':include_once './dieuPhoiNhapSP.php';
                break;
            case 'dieuphoixuatnvl':include_once './dieuPhoiXuatNVL.php';
                break;
            case 'dieuphoixuatsp':include_once './dieuPhoiXuatSP.php';
                break;

            // Thong ke
            case 'thongke':include_once './thongKe.php';
                break;

            // Tim kiem SP
            case 'timkiemsanpham':include_once './sanPham.php';
                break;
            case 'danhsachnguyenvatlieu':include_once './themNVL.php';
                break;
        }
    }
    else{
        include_once './login.php';
    }   
?>


<!-- Code html -->
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
</head>
</html>