<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Signup</title>
    <link rel="stylesheet" href="login_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="image-section"></div>

        <div class="form-section">
            <form action="add_record.php" method="POST">
                <div class="tabs">
                    <button type="button">
                        <i class="fa-solid fa-right-to-bracket"></i><a href="login.php" style="color: #fff;text-decoration:none;"> Login</a> 
                    </button>
                    <button type="button" class="signup-btn">
                        <i class="fa-solid fa-user"></i> Sign Up
                    </button>
                </div>

                <input type="text" id="username" name="username" placeholder="Your username here" required>
                <input type="email" id="email" name="email"placeholder="Your email here" required>
                <input type="password" id="password" name="password"placeholder="Your password here" required>

                <!-- <button type="submit" class="signup-btn">Sign Up</button> -->

                <input type="submit" value="Register" name="submit" class="signup-btn">

                <div class="social-login">
                    <button type="button">
                        <i class="fa-brands fa-steam"></i> Sign in via Steam
                    </button>
                    <button type="button">
                        <i class="fa-brands fa-google"></i> Sign in via Google
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

