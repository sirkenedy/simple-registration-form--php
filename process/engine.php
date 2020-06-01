<?php

$connect = mysqli_connect("localhost","root","","login");

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users(email, pw, gender) Values('{$email}', '{$password}', '{$gender}')";
    $sql_fld = mysqli_query($connect, $sql);
    if($sql_fld)
    {
        echo "Inserted Successfully";
        header("location:../index.php?success=1");
        exit;
    }else{
        echo mysqli_error($connect);
        header("location:../index.php?error=1");
        exit;
    }
}