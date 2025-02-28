<?php
include("theme-header.php");
$title="";
$text="";
$imageurl="";
if(isset( $_GET["id"])){

    $id=$_GET["id"];
    $link=mysqli_connect("localhost","root","","onenewsdb");
    $result=mysqli_query($link,"SELECT * FROM `news` WHERE `id`=$id");
    mysqli_close($link);
    $row=mysqli_fetch_array($result);
    if($row){
        $title=$row["title"];
        $text=$row["text"];
        $imageurl=$row["imageurl"];
    }
}
?>
        <form class="row" action="news_edit_action.php" method="post" enctype="multipart/form-data">
            <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر" value="<?php echo($imageurl); ?>">
            <input class="col-12 col-md m-2" type="text" name="id" hidden placeholder="id" value="<?php echo($id); ?>">
            <input class="col-12 col-md m-2" type="text" name="title" placeholder="عنوان" value="<?php echo($title); ?>">
            <input class="col-12 col-md m-2" type="text" name="text" placeholder="متن خبر" value="<?php echo($text); ?>">
            <input class="col-12 col-md m-2" type="submit" value="ذخیره">
        </form>
<?php
include("theme-footer.html");
?>