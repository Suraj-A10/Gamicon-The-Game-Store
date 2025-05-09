function scrollCarousel(direction) {
    const carousel = document.getElementById('carousel');
    const scrollAmount = 240; // Scroll by one card width + margin
    carousel.scrollBy({
      left: direction * scrollAmount,
      behavior: 'smooth'
    });
  }