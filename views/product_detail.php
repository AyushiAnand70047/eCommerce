<?php

include('header.php');
include('../controller/ProductController.php');

$productId = $_GET['id'];
$product = null;
foreach ($products as $item) {
    if ($item['id'] == $productId) {
        $product = $item;
        break;
    }
}

if ($product === null) {
    echo "Product not found!";
    exit;
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="<?= $product['gallery'] ?>" alt="">
        </div>
        <div class="col-sm-6">
            <a href="../views/product.php">Go Back</a>
            <h2><?= $product['name'] ?></h2>
            <h3>Price: <?= $product['price'] ?></h3>
            <h4>Details: <?= $product['description'] ?></h4>
            <h4>Category: <?= $product['category'] ?></h4>
            <br><br>
            <form action="../routes/add_to_cart.php" method="POST">
                <input type="hidden" name="product_id"
                    value="<?php echo isset($product['id']) ? htmlspecialchars($product['id']) : ''; ?>">
                <button class="btn btn-primary" type="submit">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>