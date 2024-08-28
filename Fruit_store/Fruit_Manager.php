<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit_Manager</title>
</head>
<body>
    <form action="#" method="post" align="center">
        <h3 align="center">Fruit Market Manager</h3>
        <h4 align="center">1) Add  Fruit Stock</h4>
        <h4 align="center">2) View Fruit Stock</h4>
        <h4 align="center">3) Update Fruit stock</h4>
        <label ><b>Enter Your Choice</b></label><br>
    <!--<input type="submit" name="1" value="1">
        <input type="submit" name="2" value="2">
        <input type="submit" name="3" value="3"> -->
        <input type="text" name="choice" id="1">
        <input type="Submit" name="Submit" id="submit">
      </form>
      <?PHP
      $choice = $_POST['choice'];
      switch ($choice){
        case 1: header('location:Add.php');
        break;
        case 2: header('location:stock.php');
        break;
        case 3: header('location:Update.php');
        break;
        default:
        echo "Enter Number betwin 1 to 3";
      }
      ?>
</body>
</html>