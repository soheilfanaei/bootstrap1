<?php
include("theme-header.php");
if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){

}else{
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}
?>
<div class="row">
    <p class="col">
        <a href="news_add.php">+</a>
       افزودن محصولات
    </p>
</div>


<?php 
$link=mysqli_connect("localhost","root","","soheil");
$result=mysqli_query($link,"SELECT * FROM `news`");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row card  m-1">
    <span class="col-12 col-md-6 m-2 h5"><?php echo($row["title"]); ?></span>
    <img class="col-12 col-md-6 card-image mt-1" src="<?php echo($row["imageurl"]); ?>" alt="">
    <span class="col-12 col-md-12 m-2"><?php echo($row["text"]); ?></span>
    <div class="col">
        <a class="btn btn-success" href="news_edit.php?id=<?php echo($row["id"]); ?>">*</a>
        <a class="btn btn-danger" href="news_delete.php?id=<?php echo($row["id"]); ?>">-</a>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
}
?>
<?php
include("theme-footer.html");
?>