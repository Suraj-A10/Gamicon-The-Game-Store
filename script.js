// // JavaScript for Image Slider
// let currentIndex = 1; // Start from the first actual slide
// let slider = document.querySelector(".slider");
// let slides = document.querySelectorAll(".slide");
// let totalSlides = slides.length;
// let autoSlide;
// let isPlaying = true;

// // Clone first and last slides
// let firstClone = slides[0].cloneNode(true);
// let lastClone = slides[totalSlides - 1].cloneNode(true);

// // Add clones to slider
// slider.appendChild(firstClone);
// slider.insertBefore(lastClone, slides[0]);

// // Update slides list after cloning
// slides = document.querySelectorAll(".slide");
// totalSlides = slides.length;

// // Set initial position
// slider.style.transform = `translateX(-100vw)`;

// // Function to Show Slide
// function showSlide(index) {
//     slider.style.transition = "transform 1s ease-in-out";
//     slider.style.transform = `translateX(-${index * 100}vw)`;
//     currentIndex = index;

//     // Looping Logic (Jump from last to first instantly)
//     setTimeout(() => {
//         if (currentIndex >= totalSlides - 1) {
//             slider.style.transition = "none";
//             slider.style.transform = `translateX(-100vw)`;
//             currentIndex = 1;
//         } else if (currentIndex <= 0) {
//             slider.style.transition = "none";
//             slider.style.transform = `translateX(-${(totalSlides - 2) * 100}vw)`;
//             currentIndex = totalSlides - 2;
//         }
//     }, 1000); // Wait for transition to finish
// }

// // Manual Navigation
// function nextSlide() { showSlide(currentIndex + 1); }
// function prevSlide() { showSlide(currentIndex - 1); }

// // Auto Slide Function
// function startAutoSlide() {
//     autoSlide = setInterval(nextSlide, 4000); // Change every 4 seconds
// }

// function stopAutoSlide() {
//     clearInterval(autoSlide);
// }

// // Play/Pause Button
// function togglePlayPause() {
//     let playPauseIcon = document.getElementById("playPauseIcon");
//     if (isPlaying) {
//         stopAutoSlide();
//         playPauseIcon.classList.remove("fa-pause");
//         playPauseIcon.classList.add("fa-play");
//     } else {
//         startAutoSlide();
//         playPauseIcon.classList.remove("fa-play");
//         playPauseIcon.classList.add("fa-pause");
//     }
//     isPlaying = !isPlaying;
// }

// // Start Auto Slideshow
// startAutoSlide();
