<?php
include("theme-header.php");

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];

include("connect.php");
$result=mysqli_query($link,"INSERT INTO `register`(`name`, `username`, `password`) VALUES ('$name','$username','$password');");
mysqli_close($link);

if($result===true)
{
    ?>
    <script>
        location.replace("login.php");
    </script>
    <?php
}else
{
    echo("در عملیات ثبت نام مشکلی پیش آمده");
}

include("theme-footer.html");
?>