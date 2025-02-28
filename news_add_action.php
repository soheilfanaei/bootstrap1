<?php
include("theme-header.php");

// $image=$_POST["image"];
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$flagSaveOk=true;
$message="";

$imageurl="images/".$image;

if(file_exists($imageurl)){
    $flagSaveOk=false;
    $message+="فایل مشابه در سرور وجود دارد";
}

$size=getimagesize($_FILES["image"]["tmp_name"]);
if($size>50000){
$flagSaveOk=false;
$message+="اندازه فایل بزرگتر از 5 مگابایت است";
}

$extention=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
if($extention!="jpg" && $extention!="png"){
    $flagSaveOk=false;
    $message+="نوع فایل باید jpg یا png باشد";
}

$upload=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
if($upload==false){
    $flagSaveOk=false;
    $message+="در آپلود فایل مشکل پیش آمد";
}

if($flagSaveOk){
    $link=mysqli_connect("localhost","root","","onenewsdb");
    $result=mysqli_query($link,"INSERT INTO `news`(`title`, `text`, `imageurl`) VALUES ('$title','$text','$imageurl')");
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
}else{
    echo($message);
}



include("theme-footer.html");
?>