$(document).ready(function () {
    var i = 2;
    $("#formDangKy").click(function () {
        $("#myModal").modal()
    })
    
    function kiemTraSDT() {
        if ($("#txtSDT").val() == "") {
            $("#tbSDT").html("* Bắt buộc nhập");
            return false;
        }
        $("#tbSDT").html("*");
        return true;
    }
    $("#txtSDT").blur(kiemTraSDT);

    function kiemTraSCMND() {
        if ($("#txtSCMND").val() == "") {
            $("#tbSCMND").html("* Bắt buộc nhập!");
            return false;
        }
        $("#tbSCMND").html("*");
        return true;
    }
    $("#txtSCMND").blur(kiemTraSCMND);


    function kiemTraEmail() {
        if ($("#txtEmail").val() == "") {
            $("#tbEmail").html("*Bắt buộc nhập!");
            $("#tbEmail").addClass("mauDo");
            return false;
        }
        $("#tbEmail").html("*");
        return true;
    };
    $("#txtEmail").blur(kiemTraEmail);
    function kiemTraQQ() {
        if ($("#txtQQ").val() == "") {
            $("#tbQQ").html("*Bắt buộc nhập!");
            $("#tbQQ").addClass("mauDo");
            return false;
        }
        $("#tbQQ").html("*");
        return true;
    };
    $("#txtQQ").blur(kiemTraQQ);

    $("#btnSave").click(function () {
        var ten = $("#txtTen").val();
        var scmnd = $("#txtSCMND").val();
        var qq = $("#txtQQ").val();
        var email = $("#txtEmail").val();
        var sdt = $("#txtSDT").val();
        var anh = $("#txtAvt").val();
        var them = "<tr><td>" + (i++) + "</td><td>" + ten + "</td><td>" + scmnd + "</td><td>" + qq + "</td><td>" + email + "</td><td>" +
            sdt + "</td><td>" + anh + "</td></tr>";
        $("table tbody").append(them);
        $("#myModal").modal("hide");
        return true;
    })
})