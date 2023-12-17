<?php
    if (isset($_REQUEST['submitKiemKe'])) {
        $khoKiemKe = $_REQUEST['khoKiemKe'];
        $tenNVLKiemKe = $_REQUEST['tenNVLKiemKe'];
        $ngayNhapKiemKe = $_REQUEST['ngayNhapKiemKe'];
        $ngaySXKiemKe = $_REQUEST['ngaySXKiemKe'];
        $ngayHHKiemKe = $_REQUEST['ngayHHKiemKe'];
        $tenNV = substr($_REQUEST['tenNV'],2);
        $maNV = substr($_REQUEST['tenNV'],0,1);
        $ngayKiemKe = getdate()['year'].'-'.getdate()['mon'].'-'.getdate()['mday'];
        $soLuongHeThong = $_REQUEST['soLuongHeThong'];
        $soThucTe = $_REQUEST['soLuongThucTe'];
        $conn=mysqli_connect("localhost","root","" ,"nhom2_qlkho");
        $db=mysqli_select_db($conn,"nhom2_qlkho");
        $query = "INSERT INTO phieukiemke(NgayKiemKe,NguoiKiemKe,MaNVKK,MaKho)
        VALUES('$ngayKiemKe', '$tenNV','$maNV', $khoKiemKe)";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo "<script>alert('Them khong thanh cong');</script>";
        }else{
            echo "<script>alert('Them thanh cong');</script>";
        }
        $maPhieu = "select distinct * from phieukiemke where NgayKiemKe = '$ngayKiemKe' and NguoiKiemKe = '$tenNV' and MaNVKK = $maNV and MaKho = $khoKiemKe";
        $maPhieuData = mysqli_query($conn, $maPhieu);
        while ($a = mysqli_fetch_assoc($maPhieuData)) {
            $ma = $a['MaPhieuKiemKe'];
        }
        $qr = "INSERT INTO nguyenvatlieukiemke(TenNVL,MaPhieuKiemKe,SoLuongTonHeThong,SoLuongThucTe) 
        VALUES('$tenNVLKiemKe', '$ma', $soLuongHeThong, $soThucTe)";
        var_dump($qr);
        $res = mysqli_query($conn, $qr);
        if(!$res){
            echo "<script>alert('Them khong thanh cong');</script>";
        }else{
            echo "<script>alert('Them thanh cong');</script>";
        }
        header('location: index.php?page_layout=taophieukiemke');
    }
    