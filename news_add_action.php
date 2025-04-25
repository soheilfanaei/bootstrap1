<?php
include("theme-header.php");

// $image=$_POST["image"];
$image=$_FILES["image"]["name"];
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$id=$_POST["id"];

$flagSaveOk=true;
$message="";

$imageurl="images/".$image;

if(file_exists($imageurl)){
    $flagSaveOk=false;
}

$size=getimagesize($_FILES["image"]["tmp_name"]);
if($size>50000){
$flagSaveOk=false;
}

$extention=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
if($extention!="jpg" && $extention!="png"){
    $flagSaveOk=false;
}

$upload=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
if($upload==false){
    $flagSaveOk=false;
    }

if($flagSaveOk){
    $link=mysqli_connect("localhost","root","","soheil");
    $result=mysqli_query($link,"INSERT INTO `modireat`(`name`, `images`, `id`,`ghymat`) VALUES ('$name','$images','$id','$ghymat')");
    mysqli_close($link);
    
    if($result===true)
    {
        ?>
        <script>
            location.replace("news_add.php");
        </script>
        <?php
    }else
    {
        echo("در عملیات ثبت نام مشکلی پیش آمده");
    }
}else{
    echo($message);
}



include("theme-footer.html");
?>