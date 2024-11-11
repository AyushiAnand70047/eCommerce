<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script> -->

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">E-Comm</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../views/product.php">Home</a></li>
                    <li><a href="/myorders">Orders</a></li>
                </ul>
                <form action="../routes/search.php" class="navbar-form navbar-left" method="GET">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control search-box" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
                <?php
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                include('../includes/db.php'); // Include your DB connection file
                
                // Check if user email is stored in session
                $userEmail = isset($_SESSION['email']) ? $_SESSION['email'] : null;

                // If email exists in session, fetch the user id from the database
                if ($userEmail) {
                    // Fetch the user ID based on the email from the session
                    $stmt = $conn->prepare("SELECT id FROM users_info WHERE email = ?");
                    $stmt->bind_param("s", $userEmail);
                    $stmt->execute();
                    $stmt->bind_result($userId);
                    $stmt->fetch();
                    $stmt->close();

                    // Fetch the total count of products in the cart for the logged-in user
                    if ($userId) {
                        $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM cart WHERE user_id = ?");
                        $stmt->bind_param("i", $userId);
                        $stmt->execute();
                        $stmt->bind_result($total);
                        $stmt->fetch();
                        $stmt->close();
                    }
                } else {
                    $total = 0; // If no user is logged in, set total to 0
                }
                ?>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cartlist.php">cart(<?php echo $total; ?>)</a></li>
                    <?php if ($userEmail): ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <?= $userEmail ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="../routes/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li><a href="login_form.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>