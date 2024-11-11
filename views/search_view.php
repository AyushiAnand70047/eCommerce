<?php
include('header.php');
?>

<div class="custom-product">
    <div class="row">
        <div class="col-sm-4">
            <!-- <a href="#">Filter</a> -->
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                <?php foreach ($products as $item): ?>
                    <div class="searched-item">
                        <a href="../routes/web.php/<?= $item['id'] ?>">
                            <img class="trending-image" src="<?= $item['gallery'] ?>" alt="<?=$item['name'] ?>">
                            <div class="">
                                <h2><?=$item['name'] ?></h2>
                                <h5><?=$item['description'] ?></h5>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="../css/style.css">
<?php
include('footer.php');
?>