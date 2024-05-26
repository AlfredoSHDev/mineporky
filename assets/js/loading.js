// script.js
window.addEventListener("load", function(){
    const loader = document.querySelector(".loader-wrapper");
    const content = document.querySelector(".content");
  
    // Agregar un retraso de 1 segundo (1000 milisegundos) antes de ocultar la animación de carga
    setTimeout(function() {
      loader.style.display = "none"; // Oculta la animación de carga después del retraso
  
      // Mostrar el contenido con una transición suave
      content.style.opacity = "1";
    }, 1000);
  });
  