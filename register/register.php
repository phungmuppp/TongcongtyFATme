<?php
session_start();

if(isset($_POST['checkbox']) && isset($_POST['SDT'])&&isset($_POST['password'])&&isset($_POST['repassword'])){
    
    $sdt=$_POST['SDT'];
    $password=md5($_POST['password']);
    $repassword=md5($_POST['repassword']);

    if ($password!=$repassword){
        header("location:  dangKy.php?error=Mật khẩu không trùng khớp");
        exit();
    }
        
    $db=mysqli_connect("localhost","root","","fatme");


    $sql="SELECT *FROM khachhang WHERE SDT='$sdt'";


    $rs=mysqli_query($db,$sql);

    if (mysqli_num_rows($rs)==1){
         header("location:DangKy.php?error=Số điện thoại đã được sử dụng");
         exit();
    }
    $sql="INSERT INTO khachhang (SDT,password) VALUES('$sdt','$password')";
    
    mysqli_query($db,$sql);
    header("Location: ..\DanhSachMonAn\DanhSachMonAn.php?sdt=$sdt");  
}
else {
    header("location:DangKy.php?error=Yêu cầu không hợp lệ");
}
?>  