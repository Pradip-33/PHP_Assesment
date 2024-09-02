<?php
$db = "Fruit";
$tb = "Fruit_Market";
if(isset($_POST['Submit'])){
 $id = $_POST['id'];
 $Fruit_name = $_POST['Fruit'];
 $stocks = $_POST['stock']; 
 $price = $_POST['Price'];
 $con = mysqli_connect("localhost","root","",$db);
 if(!$con) die("Connection Error");
$sql = "UPDATE $tb SET Fruit_Name='$Fruit_name',Stock='$stocks',Price='$price' WHERE id = ".$id;
 if(mysqli_query($con,$sql)){
   header('Location:Stock.php');
 }
 else{
    echo "NOT INSERTED";
 }
}
?>