var inputNumero = document.querySelector('input[name=numero]');

inputNumero.addEventListener("input", function() {

    if (inputNumero.value.length == 14 || inputNumero.value.length == 17) {
        var formatted = inputNumero.value.replace('.', '').replace('.', '').replace('–', '');
        console.log(formatted);
        var lista = formatted.split("");
        switch (lista.length) {
            case 11:
            
            break;
            case 14:
                console.log("CNPJ");
                break;
            default:
                break;
        }
    } 
    function validaCPF(lista) {
        let toAdd = [];
        let a = 9;
        
        for (let index = 2; index <= 11; index++) {
            toAdd.push(index * lista[a]);
            a--;
        }
        let parametroSegundoDigito = 
    }         
});    