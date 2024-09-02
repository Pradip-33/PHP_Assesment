<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$db = "Fruit";
$tb = "Fruit_Market";
$con = mysqli_connect("localhost", "root", "", $db);
if (!$con) die("Connection Error");

$sql = "SELECT * FROM $tb";
$res = mysqli_query($con, $sql);

$totals = [];
if (isset($_POST['Order'])) {
    $quantities = $_POST['quantity'];
    $prices = $_POST['price'];
    for ($i = 0; $i < count($quantities); $i++) {
        $totals[$i] = $quantities[$i] * $prices[$i];
    }
}
?>

<h1 class="text-center">Fruit Market</h1>
<form action="#" method="POST">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Fruit Name</th>
                <th scope="col">Price/KG</th>
                <th scope="col">Enter Quantity (KG)</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; while ($b = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $b['Fruit_Name']; ?></td>
                    <td>
                        <input type="text" name="price[]" value="<?php echo $b['Price']; ?>" readonly>
                    </td>
                    <td>
                        <input type="number" name="quantity[]" min="0" step="0.1" value="<?php echo isset($quantities[$i]) ? $quantities[$i] : ''; ?>">
                    </td>
                    <td>
                        <input type="text" name="total[]" value="<?php echo isset($totals[$i]) ? number_format($totals[$i], 2) : ''; ?>" readonly>
                    </td>
                </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
    <button type="submit" name="Order" class="btn btn-primary">Place Order</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
