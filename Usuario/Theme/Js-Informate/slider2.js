document.addEventListener('DOMContentLoaded', function() {
    let slider = document.querySelector('.slider2');
    let slides = document.querySelectorAll('.slide2');
    let currentSlide = 0;
    const slideCount = slides.length;
    
    setInterval(() => {
      currentSlide = (currentSlide + 1) % slideCount;
      slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }, 3000); // Cambia 3000 a la duración que desees para cada slide en milisegundos
  });