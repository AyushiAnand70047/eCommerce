<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container custom-login">
    <div class="col-sm-6 col-md-6">
        <div class="panel" style="border-radius: 10px; background-color: #f0f8ff; opacity: 0.7;">
            <div class="panel-heading text-center">
                <h3 style="font-weight: bold; font-size: xx-large;">Login</h3>
            </div>
            <div class="panel-body" style="font-size: large;">
                <form action="../routes/login.php" method="POST" style="padding: 1rem;">

                    <div class="form-group" style="margin-top: 2%;">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="font-size: large; height:5rem;" required>
                    </div>
                    <div class="form-group" style="margin-top: 2%;">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="font-size: large; height:5rem;" required>
                    </div>
                    <div class="text-center" style="margin-top: 5%;">
                        <button type="submit" class="btn btn-primary btn-lg" style="height:5rem;width: 15rem;">Login</button>
                    </div>
                    
                    <!-- New User Prompt -->
                    <div class="mt-3 text-center" style="font-size: large;">
                        <br/>
                        <p>New user? <a href="signup_form.php">Sign up here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
