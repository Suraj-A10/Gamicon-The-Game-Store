<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>God of War Ragnarok - PC</title>
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
      <div class="game-title">God of War Ragnarok (PC)</div>
      <div class="d-flex my-2">
        <span class="badge bg-secondary">🚫 Performance check not available yet</span>
        <span class="badge bg-success ms-2">🆕 New release</span>
      </div>
      <p class="mt-3">
        Embark on a mythic journey for answers and allies before Ragnarök arrives. From Santa Monica Studio comes the sequel to the critically acclaimed God of War (2018). Fimbulwinter is well underway. Kratos and Atreus must journey to each of the Nine Realms in search of answers.
      </p>

      <p><strong>Included with:</strong> <span class="text-success">Game Pass</span> | <a href="#">1 of 2 editions</a></p>

      <div class="d-flex gap-3 mt-3">
        <a href="payment_purchase.php?game=God of War Ragnarok&price=4499"><button class="btn install-btn px-4 py-2">₹ 4499</button></a>
        <a href="payment_rent.php?game=God of War Ragnarok&price=899"><button class="btn rent-btn px-4 py-2">Rent 7 Days ₹ 899</button></a>
        <button class="btn btn-secondary" disabled>Added<br><small>To Library</small></button>
        <button class="btn btn-dark">💳</button>
        <button class="btn btn-dark">⋯</button>
      </div>
    </div>

    <!-- Right Section -->
    <div class="col-md-5">
      <!-- Main Image -->
      <img id="mainImage" src="./IMG/gameimg/1god-of-war-ragnarok.jpg" class="game-img mb-3" alt="Main Game Image">

      <!-- Thumbnails + Next Button -->
      <div class="d-flex align-items-center">
        <img src="./IMG/gameimg/1god-of-war-ragnarok.jpg" class="thumb-img active" onclick="changeImage(this)">
        <img src="./IMG/gameimg/god-of-war god-of-war.jpg" class="thumb-img" onclick="changeImage(this)">
        <img src="./IMG/gameimg/GOD.jpg" class="thumb-img" onclick="changeImage(this)">
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
      <h4>20 hrs</h4>
      <small class="text-light">MAIN STORY</small>
    </div>
    <div class="col-md-3 border-end">
      <h4>35 hrs</h4>
      <small class="text-light">MAIN + EXTRAS</small>
    </div>
    <div class="col-md-3 border-end">
      <h4>55 hrs</h4>
      <small class="text-light">COMPLETIONIST</small>
    </div>
    <div class="col-md-3">
      <h4>30 hrs</h4>
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
          <div class="col-md-3"><small class="text-muted">Developed by</small><br><strong>Santa Monica Studio</strong></div>
          <div class="col-md-3"><small class="text-muted">Published by</small><br><strong>Sony Interactive</strong></div>
          <div class="col-md-3"><small class="text-muted">Release date</small><br><strong>12-01-2025</strong></div>
          <div class="col-md-3"><small class="text-muted">Install size</small><br><strong>84.55 GB</strong></div>
        </div>
        <p class="text-secondary mb-2" style="font-size: 0.95rem;">
          Embark on a mythic journey for answers and allies before Ragnarök arrives. From Santa Monica Studio comes the sequel to the critically acclaimed God of War (2018). Fimbulwinter is well underway.
        </p>
        <p class="text-secondary mb-0" style="font-size: 0.95rem;">
          Kratos and Atreus must journey to each of the Nine Realms in search of answers as Asgardian forces prepare for a prophesied battle that will end the world...
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
          <span class="badge bg-secondary">Ray Tracing</span>
          <span class="badge bg-secondary">Spatial Sound</span>
          <span class="badge bg-secondary">Dolby Atmos</span>
          <span class="badge bg-secondary">DTS:X</span>
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
