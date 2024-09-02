<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="img1.jpg">
    
    
    <form action="#" method="post" align="center">
    <h3 align="center">WELCOME TO FRUIT MARKET</h3>
    <h4 align="center">1) Manager</h4>
    <h4 align="center">2) Customer</h4>
    <label align="center">Select Your Role</label><br>
   <!-- <input  type="text" name="role" id="role"> -->
    <input type="text" name="1" id="1">
    <input type="submit" name="Submit" id="Submit">
    </form>
    <?php
$store = $_POST['1'];
switch ($store){
    case 1: header('location:Fruit_Manager.php');
    break;
    case 2: header('location:Customer.php');
    break;
    default:
    echo "Select 1 or 2 ";
}
    ?>
</body>
</html>
