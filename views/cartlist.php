<?php
include('header.php');
include('../controller/CartController.php');
?>

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
                        <a href="removecart.php?cart_id=<?= $item['cart_id'] ?>" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="btn btn-success" href="ordernow.php">Order Now</a> <br><br>
    </div>
</div>

<style>
    .custom-login{
        height: 500px;
    }
    .custom-signup{
        height: 500px;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
</style>