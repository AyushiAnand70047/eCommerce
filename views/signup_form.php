<!-- /views/signup_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container custom-signup">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel" style="border-radius: 10px; background-color: #f0f8ff; opacity: 0.7;">
                <div class="panel-heading text-center">
                    <h3 style="font-weight: bold; font-size: xx-large;">Sign Up</h3>
                </div>
                <div class="panel-body" style="font-size: large;">
                    <form action="../public/signup.php" method="POST" style="padding: 1rem;">
                        <div class="form-group" style=" margin-top: 2%;">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                   style="font-size: large;height:5rem;" required>
                        </div>
                        <div class="form-group" style=" margin-top: 2%;">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   placeholder="Email" style="font-size: large;height:5rem;" required>
                        </div>
                        <div class="form-group" style=" margin-top: 2%;">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" style="font-size: large;height:5rem;" required>
                        </div>
                        <div class="text-center" style=" margin-top: 5%;">
                            <button type="submit" class="btn btn-primary btn-lg" style="height:5rem;width: 15rem;">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
