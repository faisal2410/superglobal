<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Products</title>
</head>

<body>
    <h1>Product Catalog</h1>
    <?php
// var_dump($_GET);
$test= "My name is {$_GET['name']} and age is {$_GET['age']}";
function test_func(){
    return $GLOBALS['test'];
}
echo "I love ".test_func();

    ?>


    <ul>
        <li><a href="product.php?category=electronics">Electronics</a></li>
        <li><a href="product.php?category=furniture">Furniture</a></li>
        <li><a href="product.php?category=food">Food</a></li>
        <li><a href="product.php?category=mobile">Mobile</a></li>
    </ul>

</body>

</html>