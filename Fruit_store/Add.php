<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stock</title>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $db = "Fruit";
        $tb = "Fruit_Market";
        $con = mysqli_connect("localhost","root","",$db);
        if(!$con) die("Connection Error");
         $sql = "SELECT * FROM $tb where id= ".$id;
        $data = mysqli_query($con,$sql);
        $b = mysqli_fetch_assoc($data);
    }
    ?>
    
   <form action="<?php echo isset($id)?'update.php':'insert.php';?>" method="post"  align="center">
   <h3 align="center">Add Fruit Stock</h3>
   <input type="hidden" name="id" value="<?php echo isset($id)?$id:'' ?>">
    <label align="center" for="Fruit">Fruit Name</label>
    <input type="text" name="Fruit" id="Fruit" value="<?php echo (isset($id))?$b['Fruit_Name']:'';?>">
    <label align="center" for="stock">Stock</label>
    <input type="text" name="stock" id="stock" value="<?php echo (isset($id))?$b['Stock']:'';?>">
    <label for="Price">Price/Kg</label>
    <input type="text" name="Price" id="Price" value="<?php echo (isset($id))?$b['Price']:'';?>"><br><br><br>
    <input type="Submit" name="Submit" id="submit" value="<?php echo isset($id)?'Update':'Submit';?>" >

   </form>
   
</body>
</html> 