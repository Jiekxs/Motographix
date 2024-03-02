
  // js para la trnsicion de las imágenes
  let currentIndex = 0;

  document.querySelector('.prev-button').addEventListener('click', () => {
      navigate(-1);
  });
  
  document.querySelector('.next-button').addEventListener('click', () => {
      navigate(1);
  });
  
  function navigate(direction) {
      const gallery2Container = document.querySelector('.gallery2-container');
      const totalImages = document.querySelectorAll('.gallery2-item').length;
      
      currentIndex = (currentIndex + direction + totalImages) % totalImages;
      const offset = -currentIndex * 100;
      
      gallery2Container.style.transform = `translateX(${offset}%)`;
  }
  
  
  //AUTOPLAY
  let autoplayInterval = null;
  
  function startAutoplay(interval) {
      stopAutoplay();  // Detiene cualquier autoplay anterior para evitar múltiples intervalos.
      autoplayInterval = setInterval(() => {
          navigate(1);  // Navega a la siguiente imagen cada intervalo de tiempo.
      }, interval);
  }
  
  function stopAutoplay() {
      clearInterval(autoplayInterval);
  }
  
  // Iniciar autoplay con un intervalo de 3 segundos.
  startAutoplay(3000);
  
  // Opcional: Detener autoplay cuando el usuario interactúa con los botones de navegación.
  document.querySelectorAll('.nav-button').forEach(button => {
      button.addEventListener('click', stopAutoplay);
  });
  