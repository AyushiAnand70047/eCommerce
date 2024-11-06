<?php
include('header.php');
?>

<div class="container">
   <div class="row">
       <div class="col-sm-6">
           <img class="detail-img" src="<?php echo $product['gallery']; ?>" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
           <h2><?php echo $product['name']; ?></h2>
           <h3>Price: <?php echo $product['price']; ?></h3>
           <h4>Details: <?php echo $product['description']; ?></h4>
           <h4>Category: <?php echo $product['category']; ?></h4>
           <br><br>
           <form action="/add_to_cart" method="POST">
               <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
               <button class="btn btn-primary">Add to Cart</button>
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
