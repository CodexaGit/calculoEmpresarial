formularioIMESI = document.querySelector("#IMESI");
formularioICOSA = document.querySelector("#ICOSA");
formularioPatrimonio = document.querySelector("#patrimonio");
formularioITP = document.querySelector("#ITP");
botonIMESI = document.querySelector("#IMESI2");
botonICOSA = document.querySelector("#ICOSA2");
botonPatrimonio = document.querySelector("#patrimonio2");
botonITP = document.querySelector("#ITP2");
function IMESI(){

    formularioIMESI.className = "formVisto";

    formularioICOSA.className = "formOculto";
    formularioPatrimonio.className = "formOculto";
    formularioITP.className = "formOculto";

    botonIMESI.className = "botonActivo";

    botonICOSA.classList.remove("botonActivo");
    botonPatrimonio.classList.remove("botonActivo");
    botonITP.classList.remove("botonActivo");
}

function ICOSA(){
    formularioICOSA.className = "formVisto";
    
    formularioIMESI.className = "formOculto";
    formularioPatrimonio.className = "formOculto";
    formularioITP.className = "formOculto";

    botonICOSA.className = "botonActivo";

    botonIMESI.classList.remove("botonActivo");
    botonPatrimonio.classList.remove("botonActivo");
    botonITP.classList.remove("botonActivo");
}

function patrimonio(){
    formularioPatrimonio.className = "formVisto";

    formularioIMESI.className = "formOculto";
    formularioICOSA.className = "formOculto";
    formularioITP.className = "formOculto";

    botonPatrimonio.className = "botonActivo";
    
    botonIMESI.classList.remove("botonActivo");
    botonICOSA.classList.remove("botonActivo");
    botonITP.classList.remove("botonActivo");
}

function ITP(){
    formularioITP.className = "formVisto";

    formularioIMESI.className = "formOculto";
    formularioICOSA.className = "formOculto";
    formularioPatrimonio.className = "formOculto";

    botonITP.className = "botonActivo";

    botonIMESI.classList.remove("botonActivo");
    botonICOSA.classList.remove("botonActivo");
    botonPatrimonio.classList.remove("botonActivo");
}