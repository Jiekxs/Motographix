class ModalWindow extends HTMLElement {
    constructor() {
        super();
        this.shadow = this.attachShadow({ mode: "open" });
        this.isOpen = false;
        this.style.display = "none";
        this.shadow.innerHTML = `
        <style>
          .modal-overlay {
            position: fixed;
            top: 20vh;
            left: 10vw;
            width: 80vw;
            height: 60vh;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index         : 20;

          }
          .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            z-index         : 20;

          }
          .button {
            padding: 10px 20px;
            background-color:red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
          }
        </style>
        <div class="modal-overlay">
          <div class="modal-content">
            <slot></slot>
            <button class="button">X</button>
          </div>
        </div>`;
    }

    toggle() {
        this.isOpen = !this.isOpen;
        this.style.display = this.isOpen ? "block" : "none";
    }

    connectedCallback() {
        this.addEventListener("click", (event) => {
            if (event.target === this) {
                this.toggle();
            }
        });

        
    }
}

customElements.define("modal-window", ModalWindow);

var sonido = document.getElementById("audio");
var boton = document.getElementById("sonido");

boton.addEventListener("click", function() {
  if (sonido.paused) {
    sonido.play();
    boton.textContent = "Detener Sonido";
  } else {
    sonido.pause();
    sonido.currentTime = 0;
    boton.textContent = "Reproducir Sonido";
  }
});