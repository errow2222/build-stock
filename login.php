<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="input-group">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="forgot-pass">
                <a href="#">Forgot Password?</a>
            </div>
            
            <div class="btn-container">
                <button class="btn">Login</button>
            </div>

            <div class="signup-link">
                Not a member? <a href="#">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>
