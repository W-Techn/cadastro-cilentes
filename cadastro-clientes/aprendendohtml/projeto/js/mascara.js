$(document).ready(function(){

var SPMaskBehavior = function (val) {
return val.replace(/\D/g, '').length === 14 ? '00.000.000/0000–00' : '000.000.000–00999';
},
spOptions = {
onKeyPress: function(val, e, field, options) {
  field.mask(SPMaskBehavior.apply({}, arguments), options);
}
};  

//máscaras nos inputs. Máscaras são formatações visuiais de como os dados inseridos pelo client-side deve se dispor;
$("#CPF").mask(SPMaskBehavior, spOptions); //os dois números após o traço são so dígitos verificadores
});