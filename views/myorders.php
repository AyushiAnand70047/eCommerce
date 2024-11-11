<?php
// Start session if not already started
include('header.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Assuming you have already stored the user's email in the session
$email = $_SESSION['email'];  // Get email from session

// Database connection details
include('../includes/db.php');

// Get the user ID using the email
$userQuery = "SELECT id FROM users_info WHERE email = '$email'";
$userResult = $conn->query($userQuery);

if ($userResult && $userResult->num_rows > 0) {
    $userRow = $userResult->fetch_assoc();
    $userId = $userRow['id'];

    // Retrieve orders for the user and join with the products table
    $orderQuery = "
        SELECT orders.*, products.gallery, products.name 
        FROM orders 
        JOIN products ON orders.product_id = products.id
        WHERE orders.user_id = '$userId'
    ";

    $orderResult = $conn->query($orderQuery);

    if ($orderResult && $orderResult->num_rows > 0) {
        // Display orders
        while ($order = $orderResult->fetch_assoc()) {
            ?>
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail.php?id=<?php echo $order['product_id']; ?>">
                        <img class="trending-image" src="<?php echo htmlspecialchars($order['gallery']); ?>" alt="Product Image">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>Name: <?php echo htmlspecialchars($order['name']); ?></h2>
                        <h5>Delivery Status: <?php echo htmlspecialchars($order['status']); ?></h5>
                        <h5>Address: <?php echo htmlspecialchars($order['address']); ?></h5>
                        <h5>Payment Status: <?php echo htmlspecialchars($order['payment_status']); ?></h5>
                        <h5>Payment Method: <?php echo htmlspecialchars($order['payment_method']); ?></h5>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p>No orders found.</p>";
    }
} else {
    echo "<p>User not found.</p>";
}

// Close the database connection
$conn->close();
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


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