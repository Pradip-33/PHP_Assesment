<?php
$db = "Fruit";
$tb = "Fruit_Market";
if(isset($_POST['Submit'])){
 $Fruit_name = $_POST['Fruit'];
 $stocks = $_POST['stock']; 
 $con = mysqli_connect("localhost","root","",$db);
 if(!$con) die("Connection Error");
 echo $sql = "INSERT INTO $tb VALUES (NULL,'$Fruit_name','$stocks')";
 if(mysqli_query($con,$sql)){
   header('Location:Stock.php');
 }
 else{
    echo "NOT INSERTED";
 }
}
?>