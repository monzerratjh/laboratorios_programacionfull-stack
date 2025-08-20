const pantalla = document.querySelector(".pantalla") //querySelector -> clase
const botones = document.querySelectorAll(".boton") //todos los botones de clase boton (crea un array auto);


// garcias a querySelectorAll q crea un array, con forEach creamos un addEventListener para c/boton

botones.forEach(boton => {
    boton.addEventListener("click", () => {
        // console.log(boton.textContent); -> imprime c/boton en la consola: hay q imprimirlo en la PANTALLA

        const botonApretado = boton.textContent; //textContent -> string

        pantalla.textContent += botonApretado; // se imprime en PANTALLA el valor de la variable del botonApretado, se van concatenando con += ya q son strings

        if (boton.id === "c") {
            pantalla.textContent = "";
            return;
        }

        if (boton.id === "igual") {
            pantalla.textContent = eval(pantalla.textContent);
            return; //eval -> evalua un conjuto de caculos mat. en string y realiza la cuenta
        }


    })
})
