var inputNumero = document.querySelector('input[name=numero]');
var campoNumero = document.querySelector('input#CPF.form-control');
var msg = document.querySelector('#fail');

function validaCPF(lista) {
    let toAdd = [];
    let a = 9;
    
    for (let index = 2; index <= 11; index++) {
        toAdd.push(index * lista[a]);
        a--;
    }
    const total = toAdd.reduce(function (anterior, atual) {
        return anterior + atual
    }) 
    let param = total % 11
    if (param < 2) {
        if (lista[10] == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        if (lista[9] == 11 -param) {
            return true;
        } else{
            return false;
        }
    }
}
function validaCNPJ(lista) {
    let aSomar = [];
    let b = 4;
    let c = 12;
    
    for (let counter = 2; counter <= 6; counter++) {
        aSomar.push(counter * lista[b]);
        b--;
    }
    for (let contador = 2; contador <= 9; contador++) {
        aSomar.push(contador * lista[c]);
        c--;
    }
    const sum = aSomar.reduce(function (anterior, atual) {
        return anterior + atual
    }) 
    let parametro = sum % 11
    if (parametro < 2) {
        if (lista[13] == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        if (lista[13] == 11 - parametro) {
            return true;
        } else{
            return false;
        }
    }
}

inputNumero.addEventListener("input", function() {

    if (inputNumero.value.length == 14 || inputNumero.value.length == 17) {
        var formatted = inputNumero.value.replace('.', '').replace('.', '').replace('–', '');
        console.log(formatted);
        var lista = formatted.split("");
        switch (lista.length) {
            case 11:
                var validCpf = validaCPF(lista);
                if (validCpf == true) {
                    campoNumero.style.borderColor = "rgba(238,156,167,.25)";
                    msg.textContent = "";
                } else {
                    campoNumero.style.borderColor = "red";
                    msg.style.color = "red";
                    msg.textContent = "*valor de CPF inválido"
                }
            break;
            case 14:
               var validCnpj = validaCNPJ(lista);
               if (validCnpj == true) {
                campoNumero.style.borderColor = "rgba(238,156,167,.25)";
                msg.textContent = "";
                } else {
                campoNumero.style.borderColor = "red";
                msg.style.color = "red";
                msg.textContent = "*valor de CNPJ inválido"
                }
                break;
            default:
                campoNumero.style.borderColor = "rgba(238,156,167,.25)";
                msg.style.color = "#fff0";
                break;
        }
    } 
         
});    