<?php
session_start(); 
    $sdt=$_POST['SDT'];
    // $pw=$_POST['password'];
    $pw=md5($_POST['password']);
    //kết nối sever
    $db=mysqli_connect("localhost","root","","fatme");
    //truy vấn database
    $sql="SELECT *FROM khachhang WHERE SDT='$sdt'";
    $rs=mysqli_query($db,$sql);
    if (mysqli_num_rows($rs) >0) {
        $row = mysqli_fetch_assoc($rs);
        if ($row['SDT'] == $sdt && $row['password'] == $pw) {
            header("Location: ..\DanhSachMonAn\DanhSachMonAn.php?sdt=$sdt");
        }else{
            header("Location: ..\index.php?error=Tài khoản hoặc mật khẩu không đúng");
            exit();
        }
    }else{
        header("Location: ..\index.php?error=Số điện thoại chưa được đăng ký");
        exit();
    }
?>