<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php
$db = "Fruit";
$tb = "Fruit_Market";
$con = mysqli_connect("localhost","root","",$db);
if(!$con) die ("Connection Error");

$sql = "SELECT * FROM $tb";
$res = mysqli_query($con,$sql)
?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fruit_Name</th>
      <th scope="col">Stock</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($b = mysqli_fetch_assoc($res)) {?>
        <tr>
            <td><?php echo $b['ID']?></td>
            <td><?php echo $b['Fruit_Name']?></td>
            <td><?php echo $b['Stock']?></td>
    
    
            <td><a href="Add.php?id=<?php echo $b['ID']?>" class="btn btn-primary " class="text-light">Update</a></td>
        </tr> 
  
    <?php }
    ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
