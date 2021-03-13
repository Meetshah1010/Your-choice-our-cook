<?php
include('../../connection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
    $cemail = $_SESSION['cemail'];
}
else
{
    echo "<script> location.href='../login/login.php'</script>";
}
?>