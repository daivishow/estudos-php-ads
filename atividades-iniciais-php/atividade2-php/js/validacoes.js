function validarFormulario(){

let numero = document.getElementById("numero").value.trim();

if(numero===""){

    alert("O campo 'número' não pode estar vazio!");
    return false;
}

// A parte do regex não foi solicitada, foi apenas um teste, para deixar o exercício completo.

const regexApenasNumeros = /^\d+$/;

if (!regexApenasNumeros.test(numero)) {
    // Alerta modificado para refletir a nova validação
    alert("O campo 'número' deve conter apenas dígitos numéricos!");
    return false;
}

return true;

}