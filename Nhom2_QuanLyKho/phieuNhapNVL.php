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
    // Reset trang
    if(isset($_POST["reset"])){
        header('location: index.php?page_layout=phieunhapnvl');
    }
?>



<?php
    if(isset($_POST["phieuNhapNVL"])|| isset($_POST["bienban"] )){

        $ngayLap = $_POST["NgayLap"];
        $maKho = $_POST["MaKho"];
        //Nguyên vật liệu 1
        $nvl1 = $_POST["MaNVL1"];
        $soLuong1 = $_POST["SoLuong1"];
        $ngaySX1 = $_POST["NgaySX1"];
        $ngayHH1 = $_POST["NgayHH1"];
        // Nguyên vật liệu 2
        $nvl2 = $_POST["MaNVL2"];
        $soLuong2 = $_POST["SoLuong2"];
        $ngaySX2 = $_POST["NgaySX2"];
        $ngayHH2 = $_POST["NgayHH2"];
        //Nguyên vật liệu 3
         $nvl3 = $_POST["MaNVL3"];
         $soLuong3 = $_POST["SoLuong3"];
         $ngaySX3 = $_POST["NgaySX3"];
         $ngayHH3 = $_POST["NgayHH3"];
         //Nguyên vật liệu 4
        $nvl4 = $_POST["MaNVL4"];
        $soLuong4 = $_POST["SoLuong4"];
        $ngaySX4 = $_POST["NgaySX4"];
        $ngayHH4 = $_POST["NgayHH4"];
        //Nguyên vật liệu 5
        $nvl5 = $_POST["MaNVL5"];
        $soLuong5 = $_POST["SoLuong5"];
        $ngaySX5 = $_POST["NgaySX5"];
        $ngayHH5 = $_POST["NgayHH5"];
        //Nguyên vật liệu 6
         $nvl6 = $_POST["MaNVL6"];
         $soLuong6 = $_POST["SoLuong6"];
         $ngaySX6 = $_POST["NgaySX6"];
         $ngayHH6 = $_POST["NgayHH6"];
         //Nguyên vật liệu 7
        $nvl7 = $_POST["MaNVL7"];
        $soLuong7 = $_POST["SoLuong7"];
        $ngaySX7 = $_POST["NgaySX7"];
        $ngayHH7 = $_POST["NgayHH7"];
        //Nguyên vật liệu 8
        $nvl8 = $_POST["MaNVL8"];
        $soLuong8 = $_POST["SoLuong8"];
        $ngaySX8 = $_POST["NgaySX8"];
        $ngayHH8 = $_POST["NgayHH8"];
        //Nguyên vật liệu 9
         $nvl9 = $_POST["MaNVL9"];
         $soLuong9 = $_POST["SoLuong9"];
         $ngaySX9 = $_POST["NgaySX9"];
         $ngayHH9 = $_POST["NgayHH9"];
        
        //Nguyên vật liệu 10
        $nvl10 = $_POST["MaNVL10"];
        $soLuong10 = $_POST["SoLuong10"];
        $ngaySX10 = $_POST["NgaySX10"];
        $ngayHH10 = $_POST["NgayHH10"];     

        //Insert phieunhapkho nếu đủ thông tin
        if(!$ngayLap){
            echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
            margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
            Ngày lập không được để trống. Vui lòng nhập lại!</center>';            
        }
        else{
            //Insert phieunhapkho
            $sql_lapPhieuNhapNVL = "INSERT INTO phieunhapkho(NgayLap,MaKho) VALUES ('$ngayLap','$maKho')";
            mysqli_query($mysqli,$sql_lapPhieuNhapNVL);
            //Lấy ID phieunhapkho vừa được thêm vào
            $sql_maPhieuNhapMoi = "SELECT  MAX(MaPhieuNhapKho) as Max_id FROM phieunhapkho";
            $result= mysqli_query($mysqli, $sql_maPhieuNhapMoi);
        
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) {
                    $newID= $row["Max_id"];
                }
            } 
            $i=0;
            
            // //Insert chitietphieunhapnvl
            if($nvl1!=""){
                //Kiem Tra so luong nhap
                if($soLuong1 < 0  || !$soLuong1 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';                    
            }
            //Kiem tra ngay thang
            if(!$ngaySX1 || !$ngayHH1){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX1 > $ngayHH1){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';                
                }
            else{                        
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong1','$ngaySX1','$ngayHH1','$nvl1', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl2!=""){
                //Kiem Tra so luong nhap
                if($soLuong2 < 0  || !$soLuong2 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX2 || !$ngayHH2){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX2 > $ngayHH2){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{            
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong2','$ngaySX2','$ngayHH2','$nvl2', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl3!=""){
                //Kiem Tra so luong nhap
                if($soLuong3 < 0  || !$soLuong3 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX3 || !$ngayHH3){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX3 > $ngayHH3){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong3','$ngaySX3','$ngayHH3','$nvl3', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl4!=""){
                //Kiem Tra so luong nhap
                if($soLuong4 < 0  || !$soLuong4 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX4 || !$ngayHH4){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX4 > $ngayHH4){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong4','$ngaySX4','$ngayHH4','$nvl4', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl5!=""){
                //Kiem Tra so luong nhap
                if($soLuong5 < 0  || !$soLuong5 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX5 || !$ngayHH5){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX5 > $ngayHH5){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong5','$ngaySX5','$ngayHH5','$nvl5', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl6!=""){
                //Kiem Tra so luong nhap
                if($soLuong6 < 0  || !$soLuong6 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX6 || !$ngayHH6){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX6 > $ngayHH6){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong6','$ngaySX6','$ngayHH6','$nvl6', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl7!=""){
                //Kiem Tra so luong nhap
                if($soLuong7 < 0  || !$soLuong7 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX7 || !$ngayHH7){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX7 > $ngayHH7){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong7','$ngaySX7','$ngayHH7','$nvl7', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl8!=""){
                //Kiem Tra so luong nhap
                if($soLuong8 < 0  || !$soLuong8 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX8 || !$ngayHH8){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX8 > $ngayHH8){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong8','$ngaySX8','$ngayHH8','$nvl8', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl9!=""){
                //Kiem Tra so luong nhap
                if($soLuong9 < 0  || !$soLuong9 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX9 || !$ngayHH9){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';
            }
            if($ngaySX9 > $ngayHH9){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong9','$ngaySX9','$ngayHH9','$nvl9', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            if($nvl10!=""){
                //Kiem Tra so luong nhap
                if($soLuong10 < 0  || !$soLuong10 ){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Số lượng phải lớn hơn 0 và không để trống. Vui lòng nhập lại!</center>';
            }
            //Kiem tra ngay thang
            if(!$ngaySX10 || !$ngayHH10){
                    $i = 1;
                    echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                    margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                    Ngày Sản xuất và ngày hết hạn không để trống. Vui lòng nhập lại!</center>';                    
            }
            if($ngaySX10 > $ngayHH10){
                $i = 1;
                echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">
                Ngày Hết Hạn phải sau ngày sản xuất. Vui lòng nhập lại!</center>';
                }
            else{
                $sql_chiTietPhieu = "INSERT INTO chitietphieunhapnvl(SoLuong,NgaySX,NgayHH,MaNVL,MaPhieuNhapKho)
                VALUES ('$soLuong10','$ngaySX10','$ngayHH10','$nvl10', '$newID')";
                mysqli_query($mysqli,$sql_chiTietPhieu);
            }
            }
            
            //Quay lại trang danh sách kho
            if(isset($_POST["phieuNhapNVL"])){
                if($i==0){
                   // header('location: index.php?page_layout=phieunhapnvl');
                   echo '<center style="position: relative;padding: 0.75rem 1.25rem;transition: ease-in-out 0.2s;
                   margin-bottom: 1rem;border: 1px solid transparent;border-radius: 0.25rem;color: red;background-color: gray;border-color: #f5c6cb;">
                   LẬP PHIẾU NHẬP NGUYÊN VẬT LIỆU THÀNH CÔNG!</center>';                   
                }
            }
            if(isset($_POST['bienban'])){
                if($i==0){
                    header('location: index.php?page_layout=bienbanyeucauboithuong');
                }
                
            }
        }
          
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu nhập NVL</title>
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
                            <li><a href="index.php?page_layout=phieunhapnvl" id="color_highlight">Phiếu nhập nguyên vật liệu</a></li>
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
<!------------------------------------------------Tạo nội dung--------------------------------------------------->
            <div class="body_section_inner_right">
                <div class="text_inner_right">
                    <h2>PHIẾU NHẬP NGUYÊN VẬT LIỆU</h2><br>
                </div>
                <div class="form_style">
                    <form action="phieuNhapNVL.php" method="POST">
                        
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
                                <tbody>
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
                                        <td>
                                            <p>NGAY_HH</p>
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
                                        <td>
                                            <input type="date"  name="NgayHH1">
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
                                        <td>
                                            <input type="date"  name="NgayHH2">
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
                                        <td>
                                            <input type="date"  name="NgayHH3">
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
                                        <td>
                                            <input type="date"  name="NgayHH4">
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
                                        <td>
                                            <input type="date"  name="NgayHH5">
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
                                        <td>
                                            <input type="date"  name="NgayHH6">
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
                                        <td>
                                            <input type="date"  name="NgayHH7">
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
                                        <td>
                                            <input type="date"  name="NgayHH8">
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
                                        <td>
                                            <input type="date"  name="NgayHH9">
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
                                        <td>
                                            <input type="date"  name="NgayHH10">
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <!-- <div class="phieu_button">
                            <button  style="background-color: blue;" type="submit" name="bienBan">Lập biên bản bồi thường</button>
                        </div> -->
                        <br><br><br><br>
                        
                        <div class="phieu_button" style="flex-direction: row;">
                            <button style="background-color: red; margin-left: 20%;" type="reset" name="reset"><b>Hủy bỏ</b> </button>
                            <button style="background-color: green; margin-left: 10%" type="submit" name="phieuNhapNVL"><b>Lập phiếu</b> </button>
                            <button style="background-color: blue; margin-left: 10%; width: 300px;" type="submit" name="bienban"><b>Lập biên bản bồi thường</b> </button>
                            
                        </div>
                    </form> 
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
</html>