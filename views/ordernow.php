<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$total = $_SESSION['total'];
?>

<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ <?php
                    echo $total; ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ <?php echo $total + 10; ?></td>
                </tr>
            </tbody>
        </table>

        <div>
            <form action="../routes/order_place.php" method="POST">
                <div class="form-group">
                    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label> <br> <br>
                    <input type="radio" value="online_payment" name="payment"> <span>Online Payment</span> <br> <br>
                    <input type="radio" value="emi_payment" name="payment"> <span>EMI Payment</span> <br> <br>
                    <input type="radio" value="payment_on_delivery" name="payment"> <span>Payment on Delivery</span>
                    <br> <br>
                </div>
                <button type="submit" class="btn btn-default">Order Place</button>
            </form>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/style.css">