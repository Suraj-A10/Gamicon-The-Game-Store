<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    body {
        display: flex;
        height: 100vh;
        background: linear-gradient(45deg, #000000, #de9066, #ed964e, #000000);
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .container {
        display: flex;
        background: #2a2a2a;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.8);
        width: 850px;
        height: 500px;
    }

    .image-section {
        width: 40%;
        background: url('./cod.jpg') no-repeat center center/cover;
        position: relative;
    }

    .form-section {
        width: 60%;
        background: #121212;
        padding: 40px;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .tabs {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        justify-content: center;
    }

    .tabs button {
        background: none;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 18px;
    }

    .active-tab {
        border-bottom: 3px solid #ff6600;
        font-weight: bold;
    }

    input, button {
        width: 100%;
        margin-top: 10px;
        padding: 12px;
        background: #222;
        border: 1px solid #444;
        color: #fff;
        border-radius: 6px;
        box-sizing: border-box;
        justify-content: center;
    }

    .signup-btn {
        background: #ff6600;
        border: none;
        cursor: pointer;
        margin-top: 20px;
    }

    .social-login {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        justify-content: center;
    }

    .social-login button {
        background: #333;
        border: none;
        cursor: pointer;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .tabs button i,
    .social-login button i {
        transition: color 0.3s ease;
    }

    .tabs button:hover i,
    .social-login button:hover i {
        color: #ff6600;
    }
    .button-link {
        display: inline-block;
        background-color: #ff6600; /* same orange as your screenshot */
        color: white;
        text-align: center;
        padding: 15px 30px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 16px;
        width: 100%; /* full-width if needed */
        box-sizing: border-box;
        margin-top: 10px;
      }
</style>
<body>
    <div class="container">
        <div class="image-section"></div>

        <div class="form-section">
        <form action="login_check.php" method="POST">
    <div class="tabs">
        <button type="button">
            <i class="fa-solid fa-right-to-bracket"></i> Login
        </button>
        <button type="button" class="signup-btn">
            <i class="fa-solid fa-user"></i>
            <a href="singup.php" style="color: #fff;text-decoration:none;"> Sign Up</a> 
        </button>
    </div>

    <input type="email" name="email" placeholder="Your email here" required>
    <input type="password" name="password" placeholder="Your password here" required>

    <input type="submit" value="Login" class="signup-btn">

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
