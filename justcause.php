<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Just Cause - PC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <style>
    body {
      background-color: #111;
      color: white;
    }
    .game-title {
      font-size: 2rem;
      font-weight: bold;
    }
    .install-btn {
      background-color: #00ff00;
      color: black;
      border: none;
    }
    .install-btn:hover {
      background-color: #00cc00;
    }
    .rent-btn {
      background-color: #ff9900;
      color: black;
      border: none;
    }
    .rent-btn:hover {
      background-color: #cc7a00;
    }
    .game-img {
      border-radius: 10px;
      width: 100%;
      height: auto;
      max-height: 300px;
      object-fit: cover;
    }
    .thumb-img {
      width: 100px;
      height: 60px;
      margin: 5px;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.6;
      transition: opacity 0.3s, border 0.3s;
      object-fit: cover;
      flex-shrink: 0;
    }
    .thumb-img:hover,
    .thumb-img.active {
      opacity: 1;
      border: 2px solid #00ff00;
    }
    .badge {
      font-size: 0.85rem;
      padding: 0.45em 0.75em;
      border-radius: 1rem;
    }
  </style>
</head>
<body>

<div class="container py-4">
  <div class="row">
    <!-- Left Section -->
    <div class="col-md-7">
      <div class="game-title">Just Cause (PC)</div>
      <div class="d-flex my-2">
        <span class="badge bg-secondary">✓ Performance check passed</span>
        <span class="badge bg-primary ms-2">Classic</span>
      </div>
      <p class="mt-3">
        Just Cause delivers intense action in an open-ended world of destruction. As undercover CIA operative Rico Rodriguez, your mission is to overthrow the corrupt government of San Esperito. Explore over 250,000 acres of mountains, jungles, beaches, cities and villages. Eliminate the dictator with over 25 missions and 300 challenges.
      </p>

      <p><strong>Included with:</strong> <span class="text-success">Game Pass</span> | <a href="#">Standard Edition</a></p>

      <div class="d-flex gap-3 mt-3">
        <a href="payment_purchase.php?game=Just Cause&price=899"><button class="btn install-btn px-4 py-2">₹ 899</button></a>
        <a href="payment_rent.php?game=Just Cause&price=299"><button class="btn rent-btn px-4 py-2">Rent 7 Days ₹ 299</button></a>
        <button class="btn btn-secondary" disabled>Added<br><small>To Library</small></button>
        <button class="btn btn-dark">💳</button>
        <button class="btn btn-dark">⋯</button>
      </div>
    </div>

    <!-- Right Section -->
    <div class="col-md-5">
      <!-- Main Image -->
      <img id="mainImage" src="./IMG/gameimg/JUST CAUSE.jpg" class="game-img mb-3" alt="Main Game Image">

      <!-- Thumbnails + Next Button -->
      <div class="d-flex align-items-center">
        <img src="./IMG/gameimg/JUST CAUSE.jpg" class="thumb-img active" onclick="changeImage(this)">
        <img src="./IMG/gameimg/GOD.jpg" class="thumb-img" onclick="changeImage(this)">
        <img src="./IMG/gameimg/GOD2.jpg" class="thumb-img" onclick="changeImage(this)">
        <button class="btn btn-secondary ms-2" onclick="nextImage()">▶</button>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-2">
    <div class="d-flex align-items-center">
      <strong>HowLongToBeat</strong>
    </div>
    <a href="#" target="_blank" class="text-success text-decoration-none">VIEW DETAILS <i class="bi bi-box-arrow-up-right"></i></a>
  </div>

  <div class="row bg-dark text-center text-white rounded py-3 gx-0">
    <div class="col-md-3 border-end">
      <h4>10 hrs</h4>
      <small class="text-light">MAIN STORY</small>
    </div>
    <div class="col-md-3 border-end">
      <h4>18 hrs</h4>
      <small class="text-light">MAIN + EXTRAS</small>
    </div>
    <div class="col-md-3 border-end">
      <h4>30 hrs</h4>
      <small class="text-light">COMPLETIONIST</small>
    </div>
    <div class="col-md-3">
      <h4>15 hrs</h4>
      <small class="text-light">ALL STYLES</small>
    </div>
  </div>
</div>

<!-- Game Information Section -->
<div class="container mt-5 text-white">
  <h4><strong>Information</strong></h4>
  <div class="row mt-3">
    <!-- About Section -->
    <div class="col-md-8">
      <div class="bg-dark rounded p-4">
        <h5>About</h5>
        <div class="row mb-3" style="color: aliceblue;">
          <div class="col-md-3"><small class="text-muted">Developed by</small><br><strong>Avalanche Studios</strong></div>
          <div class="col-md-3"><small class="text-muted">Published by</small><br><strong>Eidos Interactive</strong></div>
          <div class="col-md-3"><small class="text-muted">Release date</small><br><strong>09-22-2006</strong></div>
          <div class="col-md-3"><small class="text-muted">Install size</small><br><strong>5.8 GB</strong></div>
        </div>
        <p class="text-secondary mb-2" style="font-size: 0.95rem;">
          Just Cause offers players the freedom to tackle missions as they choose. Take to the roads with a range of vehicles including cars, motorbikes, and boats to get you from A to B.
        </p>
        <p class="text-secondary mb-0" style="font-size: 0.95rem;">
          Traverse the game world with a variety of stunt positions such as parasailing and skydiving. Arm yourself with weapons including machine guns, shotguns, missile launchers, and hand grenades to defeat enemies and complete missions...
        </p>
        <p class="mt-2 mb-0">
          <a href="#" class="text-success text-decoration-none">READ MORE</a>
        </p>
      </div>
    </div>

    <!-- Platform and Capabilities -->
    <div class="col-md-4">
      <div class="bg-dark rounded p-4 mb-3">
        <h6>Playable on</h6>
        <span class="badge bg-secondary"><i class="bi bi-laptop me-1"></i>PC</span>
      </div>
      <div class="bg-dark rounded p-4">
        <h6>Capabilities</h6>
        <div class="d-flex flex-wrap gap-2">
          <span class="badge bg-secondary">Single player</span>
          <span class="badge bg-secondary">Variable Refresh Rate</span>
          <span class="badge bg-secondary">Xbox achievements</span>
          <span class="badge bg-secondary">Xbox presence</span>
          <span class="badge bg-secondary">Xbox Live</span>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- JavaScript -->
<script>
  const thumbnails = document.querySelectorAll('.thumb-img');
  const mainImage = document.getElementById('mainImage');
  let currentIndex = 0;

  function changeImage(thumb) {
    mainImage.src = thumb.src;
    thumbnails.forEach(img => img.classList.remove('active'));
    thumb.classList.add('active');
    currentIndex = Array.from(thumbnails).indexOf(thumb);
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % thumbnails.length;
    const nextThumb = thumbnails[currentIndex];
    changeImage(nextThumb);
  }
</script>

</body>
</html>
