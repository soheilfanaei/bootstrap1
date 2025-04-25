<?php
include("theme-header.php")
?>
<?php
$code_mahsol=$_POST["code_mahsol"];
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$number=$_POST["number"];
$address=$_POST["address"];
$Emeil=$_POST["Emeil"];
$a=mysqli_connect("localhost","root","","soheil");
$b=mysqli_query($a,"INSERT INTO `sellform`(`name`, `ghymat`,`number`,`address`,`Emeil`,`code_mahsol`) VALUES ('$name','$ghymat','$number','$address','$Emeil','$code_mahsol')");
mysqli_close($a);
?>

 <script>
 location.replace("index.php");
</script>   

<?php
include("theme-footer.html");
?>




