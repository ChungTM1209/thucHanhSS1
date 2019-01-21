<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="myCss.css"/>

</head>
<body>
<h3> Product Discount Calculator </h3>
<form method="post">
    <div id="data">
        <label>Product Description</label>
        <input type="text" name="product" size="30"><br>
        <label>List Price</label>
        <input type="text" name="price" size="30"><br>
        <label>Discount Percent</label>
        <input type="number" name="discount" size="30"><br>
        <input type="submit" name="submit" value="Caculate Discount"><br>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $discount_amount = $price * $discount * 0.01;
    $discount_price = $price - $discount_amount;
    if ($price > 0 && $discount > 0) {
        echo("<h3>Product Discount Calculator</h3><br>");
        echo("Product Descripton: " . $product . "<br>");
        echo("List Price: $" . $price . "<br>");
        echo("Discount Percent: %" . $discount . "<br>");
        echo("Discount Amount: $" . $discount_amount . "<br>");
        echo("Discount Price: $" . $discount_price . "<br>");
    }
}
?>
</body>
</html>