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
            <img class="detail-img" src="<?php echo htmlspecialchars($product['gallery']); ?>" alt="">
        </div>
        <div class="col-sm-6">
            <a href="../views/product.php">Go Back</a>
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <h3>Price: <?php echo htmlspecialchars($product['price']); ?></h3>
            <h4>Details: <?php echo htmlspecialchars($product['description']); ?></h4>
            <h4>Category: <?php echo htmlspecialchars($product['category']); ?></h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <!-- CSRF token (if required for your PHP app) -->
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
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