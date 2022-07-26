
let campoInput = document.getElementById("texto-pesquisa");
let iconeLupa = document.getElementById("lupa");

iconeLupa.onclick = function() {

    campoInput.classList.toggle("expandido");
}