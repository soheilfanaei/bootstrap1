<?php
include("theme-header.php");

$username=$_POST["username"];
$password=$_POST["password"];
include("connect.php");

$result=mysqli_query($link,"SELECT * FROM `register` WHERE `username`='$username' and `password`='$password'");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row)
{
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}else
{
    echo("نام کاربری یا کلمه عبور صحیح نیست");
}

include("theme-footer.html");
?>