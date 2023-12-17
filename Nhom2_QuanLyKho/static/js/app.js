$(document).ready(function(){
    //-------------------------------------------------------------Kho------------------------------------------//
    // Variable RegEx
    var regTenKhoNguyenLieu = /kho nguyên liệu [1-9]{1}[0-9]{0,3}$/i;
    var regTenKhoSanPham = /kho sản phẩm [1-9]{1}[0-9]{0,3}$/i;
    var regDungLuongKho = /^[0-9]{1,4}$/;
    
    function checkTenKho(){
        
        if($("#txtTenKho").val() == ""){
            $("#tbTenKho").html("Tên kho không được để trống");
            return false;
        }
        if(!regTenKhoNguyenLieu.test($("#txtTenKho").val()) && !regTenKhoSanPham.test($("#txtTenKho").val())){
            $("#tbTenKho").html("Chỉ chấp nhận Kho nguyên liệu hoặc Kho sản phẩm + số");
            return false;
        }
        $("#tbTenKho").html("");
            return true;
    }
    $("#txtTenKho").blur(checkTenKho);

    function checkDiaChi(){
        if($("#txtDiaChi").val() == ""){
            $("#tbDiaChi").html("Địa chỉ không được để trống");
            return false;
        }
        $("#tbDiaChi").html("");
        return true;
    }
    $("#txtDiaChi").blur(checkDiaChi);

    function checkDungLuong(){
        if($("#txtDungLuong").val() == ""){
            $("#tbDungLuong").html("Dung lượng không được để trống");
            return false;
        }
        if(!regDungLuongKho.test($("#txtDungLuong").val()) || $("#txtDungLuong").val() < 0){
            $("#tbDungLuong").html("Dung lượng là số >= 0 và <= 9999");
            return false;
        }
        $("#tbDungLuong").html("");
        return true;
    }
    $("#txtDungLuong").blur(checkDungLuong);

    $("#themKho").click(function(){
        if(!checkTenKho() || !checkDiaChi() || !checkDungLuong()){
            alert("Vui lòng nhập đầy đủ thông tin theo yêu cầu của form!");
            return false;
        }
        });
        // }else{
        //     
        // }
    
    //-----------------------------------------------------------Nhan vien------------------------------------------//
});
