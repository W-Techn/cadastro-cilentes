var inputCEP = document.querySelector("#CEP");

inputCEP.addEventListener("input", function() {
    var cep = inputCEP.value.replace('–', '');
    
    if (cep.length == 8) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "http://viacep.com.br/ws/" + cep + "/json");
        xhr.addEventListener("load", function() {
        var resposta = xhr.responseText;
        var dados = JSON.parse(resposta);
        
        document.querySelector('input[name=endereco]').value = dados.logradouro;
        document.querySelector('input[name=bairro]').value = dados.bairro; 
        document.querySelector('select[name=cidade]').value = dados.localidade; 
        
    })
    xhr.send();
} 
});