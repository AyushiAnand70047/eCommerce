<?php
include('header.php');
include('../controller/CartController.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                <!-- <a class="btn btn-success" href="ordernow">Order Now</a> --> <br><br>
                <?php foreach ($products as $item): ?>
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail.php?id=<?= $item['id'] ?>">
                                <img class="trending-image" src="<?= $item['gallery'] ?>" alt="<?= $item['name'] ?>">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2><?= $item['name'] ?></h2>
                                <h5><?= $item['description'] ?></h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="../routes/remove_from_cart.php?cart_id=<?= $item['cart_id'] ?>"
                                class="btn btn-warning">Remove from Cart</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="btn btn-success" href="../routes/order_now.php">Order Now</a> <br><br>
        </div>
    </div>
</body>

</html>