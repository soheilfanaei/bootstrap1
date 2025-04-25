<?php
include("theme-header.php");

$id=$_GET["id"];
$fileurl="";

$link=mysqli_connect("localhost","root","","soheil");
$result=mysqli_query($link,"SELECT * FROM `news` WHERE id=$id");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){
    $fileurl=$row["imageurl"];
}

$delete=unlink($fileurl);
if($delete==true){
    $link=mysqli_connect("localhost","root","","soheil");
    $result=mysqli_query($link,"DELETE FROM `news` WHERE id=$id");
    mysqli_close($link);
    
    if($result===true)
    {
        ?>
        <script>
            location.replace("news.php");
        </script>
        <?php
    }else
    {
        echo("در عملیات ثبت نام مشکلی پیش آمده");
    }
}

include("theme-footer.html");
?>