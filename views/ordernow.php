<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ <?php echo $total; ?></td>
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
            <form action="/orderplace" method="POST">
                <!-- Assuming the CSRF token is handled elsewhere in the project -->
                <div class="form-group">
                    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label> <br> <br>
                    <input type="radio" value="online_payment" name="payment"> <span>Online Payment</span> <br> <br>
                    <input type="radio" value="emi_payment" name="payment"> <span>EMI Payment</span> <br> <br>
                    <input type="radio" value="payment_on_delivery" name="payment"> <span>Payment on Delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>
</div>
