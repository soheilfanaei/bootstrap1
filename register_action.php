<?php
include("theme-header.php");

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];

$link=mysqli_connect("localhost","root","","onenewsdb");
$result=mysqli_query($link,"INSERT INTO `user`(`name`, `username`, `password`) VALUES ('$name','$username','$password');");
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