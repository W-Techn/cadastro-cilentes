var inputName = document.querySelector('input[name=nome]');
var msg2 = $('#too-short');

inputNumero.addEventListener("focus", function () {
    if (inputName.value.length < 12) {
        inputNumero.style.borderColor = "darkred";
        msg2.textContent = "O nome não pode ser tão curto";
        button.classList.add('disabled');
    } else {
        inputNumero.style.borderColor = "rgba(238,156,167,.25)";
        msg2.textContent = "";
        button.classList.remove('disabled');
    }
    
});