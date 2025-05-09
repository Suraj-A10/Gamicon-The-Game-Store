<?php
session_start();

// Check if game and price parameters are set
if(!isset($_GET['game']) || !isset($_GET['price'])) {
    header("Location: index.php");
    exit();
}

$game = $_GET['game'];
$price = $_GET['price'];

// Process payment form submission
if(isset($_POST['proceed_payment'])) {
    // In a real application, you would process the payment here
    
    // Connect to database
    $conn = new mysqli("localhost", "root", "", "capstone");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get user email from database using user_id from session
    if(isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        $query = "SELECT email FROM users WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($row = $result->fetch_assoc()) {
            $userEmail = $row['email'];
        } else {
            $userEmail = "test@example.com"; // Fallback if user not found
        }
        $stmt->close();
    } else {
        // If user is not logged in
        echo "<script>alert('Please login to make a purchase.'); window.location.href='login.php';</script>";
        exit();
    }
    
    // Insert into purchased table
    $sql = "INSERT INTO purchased (useremail, gamename, price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $userEmail, $game, $price);
    
    if ($stmt->execute()) {
        // Redirect to success page or back to index
        $_SESSION['purchase_success'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Gateway - Purchase</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .payment-container {
      width: 100%;
      max-width: 1000px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 30px;
    }

    .method-list {
      border-right: 1px solid #e0e0e0;
    }

    .method-list button {
      width: 100%;
      text-align: left;
    }

    .qr-img {
      display: block;
      margin: 0 auto;
      max-width: 150px;
    }

    .method-section {
      min-height: 350px;
    }
    
    .game-details {
      background-color: #f8f9fa;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<div class="container payment-container">
  <div class="game-details">
    <h4>Purchase Details</h4>
    <div class="row">
      <div class="col-md-8">
        <p><strong>Game:</strong> <?php echo htmlspecialchars($game); ?></p>
        <p><strong>Type:</strong> Permanent Purchase</p>
      </div>
      <div class="col-md-4 text-end">
        <h3>₹ <?php echo htmlspecialchars($price); ?></h3>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Left Panel -->
    <div class="col-md-4 method-list">
      <h5 class="mb-3">Recommended</h5>
      <div class="list-group">
        <button class="list-group-item list-group-item-action active" onclick="showMethod('upi', event)">Pay via UPI</button>
        <button class="list-group-item list-group-item-action" onclick="showMethod('card', event)">Credit/Debit/ATM Card</button>
        <button class="list-group-item list-group-item-action" onclick="showMethod('later', event)">Pay Later & Easy EMI</button>
        <button class="list-group-item list-group-item-action" onclick="showMethod('emi', event)">EMI</button>
        <button class="list-group-item list-group-item-action" onclick="showMethod('wallet', event)">Wallets</button>
        <button class="list-group-item list-group-item-action" onclick="showMethod('netbanking', event)">Net Banking</button>
      </div>
    </div>

    <!-- Right Panel -->
    <div class="col-md-8">
      <!-- UPI -->
      <div id="upi" class="method-section">
        <h5 class="text-center">Scan & Pay with UPI</h5>
        <p class="text-center">1. Open any UPI or banking app on your phone<br>2. Scan the QR code to pay</p>
        <img src="./IMG/qrcode.jpg" alt="QR Code" class="qr-img mb-3">
        <div class="mb-3">
          <label for="upiId" class="form-label">Or Enter your UPI ID</label>
          <input type="text" class="form-control" id="upiId" placeholder="example@upi">
        </div>
        <form method="post" action="">
          <div class="text-center">
            <button type="submit" name="proceed_payment" class="btn btn-primary">Proceed to Pay</button>
          </div>
        </form>
      </div>

      <!-- Card -->
      <div id="card" class="method-section d-none">
        <h5 class="text-center">Enter Card Details</h5>
        <div class="mb-3">
          <label class="form-label">Card Number</label>
          <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX">
        </div>
        <div class="mb-3 row">
          <div class="col-md-6">
            <label class="form-label">Expiry Date</label>
            <input type="text" class="form-control" placeholder="MM/YY">
          </div>
          <div class="col-md-6">
            <label class="form-label">CVV</label>
            <input type="password" class="form-control" placeholder="XXX">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Card Holder Name</label>
          <input type="text" class="form-control" placeholder="Name on Card">
        </div>
        <form method="post" action="">
          <div class="text-center">
            <button type="submit" name="proceed_payment" class="btn btn-primary">Proceed to Pay</button>
          </div>
        </form>
      </div>

      <!-- Pay Later -->
      <div id="later" class="method-section d-none text-center">
        <h5>Pay Later & Easy EMI</h5>
        <p>Coming soon...</p>
        <form method="post" action="">
          <button type="submit" name="proceed_payment" class="btn btn-primary">Proceed to Pay</button>
        </form>
      </div>

      <!-- EMI -->
      <div id="emi" class="method-section d-none">
        <h5 class="text-center">Select Bank for EMI</h5>
        <div class="mb-3">
          <label class="form-label">Choose Bank</label>
          <select class="form-select">
            <option>SBI</option>
            <option>HDFC Bank</option>
            <option>ICICI Bank</option>
            <option>Axis Bank</option>
            <option>Kotak Mahindra Bank</option>
            <option>Bank of Baroda</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Select EMI Plan</label>
          <select class="form-select">
            <option>3 months @ 12% interest</option>
            <option>6 months @ 13% interest</option>
            <option>9 months @ 14% interest</option>
            <option>12 months @ 15% interest</option>
            <option>18 months @ 16% interest</option>
            <option>24 months @ 18% interest</option>
          </select>
        </div>
        <form method="post" action="">
          <div class="text-center">
            <button type="submit" name="proceed_payment" class="btn btn-primary">Proceed to Pay</button>
          </div>
        </form>
      </div>

      <!-- Wallets -->
      <div id="wallet" class="method-section d-none text-center">
        <h5>Pay via Wallets</h5>
        <p>Supports MobiKwik & Amazon Pay.</p>
        <form method="post" action="">
          <button type="submit" name="proceed_payment" class="btn btn-primary">Proceed to Pay</button>
        </form>
      </div>

      <!-- Net Banking -->
      <div id="netbanking" class="method-section d-none text-center">
        <h5>Pay via Net Banking</h5>
        <select class="form-select mb-3">
          <option selected>Select your Bank</option>
          <option>State Bank of India</option>
          <option>HDFC Bank</option>
          <option>ICICI Bank</option>
          <option>Axis Bank</option>
        </select>
        <form method="post" action="">
          <button type="submit" name="proceed_payment" class="btn btn-primary">Proceed to Pay</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Script -->
<script>
  function showMethod(method, event) {
    document.querySelectorAll('.method-section').forEach(div => {
      div.classList.add('d-none');
    });
    document.getElementById(method).classList.remove('d-none');

    document.querySelectorAll('.method-list .list-group-item').forEach(btn => {
      btn.classList.remove('active');
    });
    event.target.classList.add('active');
  }
</script>

</body>
</html>
