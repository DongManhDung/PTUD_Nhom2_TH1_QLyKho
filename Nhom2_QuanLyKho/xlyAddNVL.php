<?php
    if (isset($_REQUEST['Luu'])) {
        $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
        $db=mysqli_select_db($conn,"nhom2_qlkho");
        $kho = $_POST['kho'];
        $tenNVL =  $_POST['TenNVL'];
        $ngayNhap = $_POST['NgayNhap'];
        $ngaySX = $_REQUEST['NgaySanXuat'];
        $ngayHetHan = $_REQUEST['NgayHetHan'];
        $soLuong = $_REQUEST['SoLuong'];
        $donViTinh = $_REQUEST['DonViTinh'];
        $gia = $_REQUEST['Gia'];
        $values = "";
        $queryInsertion = "INSERT INTO nguyenvatlieu(NgayNhap, TenNVL, Gia, DonViTinh, MaKho) VALUES('$ngayNhap', '$tenNVL','$gia','$donViTinh','$kho')";
        if (mysqli_query($conn, $queryInsertion)) {
            echo '<script>alert("Them thanh cong nguyen vat lieu");</script>';
        } else {
            echo '<script>alert("Them khong thanh cong nguyen vat lieu");</script>';
        }        
        $valueselse = "";
        $maNVL = "SELECT MaNVL FROM nguyenvatlieu where NgayNhap = '$ngayNhap' AND TenNVL = '$tenNVL'";
        $da = mysqli_query($conn, $maNVL);
        while ($a = mysqli_fetch_assoc($da)) {
        $queryInsertionelse = "INSERT INTO chitietphieunhapnvl(SoLuong, NgaySX, NgayHH, MaNVL) 
        VALUES('$soLuong', '$ngaySX', '$ngayHetHan', '".$a['MaNVL']."')";
        if (mysqli_query($conn, $queryInsertionelse)) {
            echo '<script>alert("Them thanh cong phieu");</script>';
            header('location: index.php?page_layout=danhsachnguyenvatlieu');
        } else {
            echo '<script>alert("Them khong thanh cong phieu");</script>';
        }
        }
        
        
    }