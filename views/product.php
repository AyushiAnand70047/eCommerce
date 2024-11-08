<?php

include('header.php');

include('../controller/ProductController.php');

?>


<div class="custom-product">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php foreach ($products as $item): ?>
        <div class="item <?= $item['id'] == 1 ? 'active' : '' ?>">
          <a href="product_detail/<?= $item['id'] ?>">
            <img class="slider-img" src="<?= $item['gallery'] ?>">
            <div class="carousel-caption slider-text">
              <h3><?= $item['name'] ?></h3>
              <p><?= $item['description'] ?></p>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="trending-wrapper">
    <h3>Trending Products</h3>
    <?php foreach ($products as $item): ?>
      <div class="col-md-2 col-sm-6 card shadow-sm custom-card" style="width: 22rem;">
        <div class="trending-item">
          <a href="../routes/web.php/<?= $item['id'] ?>" style="margin: 20px">
            <img class="trending-image card-img-top" src="<?= $item['gallery'] ?>">
            <div class="card-body text-center">
              <h3 class="card-title text-dark text-center"><?= $item['name'] ?></h3>
            </div>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Bootstrap cdn link and jquery cdn link -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
  img.slider-img {
    height: 400px !important
  }

  .custom-product {
    height: 600px
  }

  .slider-text {
    background-color: #35443585 !important;
  }

  .trending-image {
    height: 100px;
  }

  .trening-item {
    float: left;
    width: 20%;
  }

  .trending-wrapper {
    margin: 30px;
  }

  .detail-img {
    height: 200px;
  }

  .search-box {
    width: 500px !important
  }

  .cart-list-devider {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px
  }

  .custom-card {
    border: none;
    background: linear-gradient(135deg, #e3f2fd, #FFFFFF, #FFFFFF, #bbdefb);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 8px;
    overflow: hidden;
    padding: 40px;
    margin: 30px;
  }

  .custom-card:hover {
    transform: scale(1.09);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    background: linear-gradient(135deg, #f8f9fa, #FFFFFF, #FFFFFF, #e3f2fd);
  }

  .trending-image {
    object-fit: cover;
    transition: opacity 0.3s;
  }

  .trending-image:hover {
    opacity: 0.9;
  }

  .card-title {
    font-weight: bold;
    color: #333;
    text-decoration: none;
  }
</style>


<?php
include('footer.php');
?>