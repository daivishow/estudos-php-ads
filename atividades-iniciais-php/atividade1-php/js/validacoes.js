function validarFormulario(){

let nome = document.getElementById("nome").value.trim();

if(nome===""){

    alert("O campo 'nome' não pode estar vazio!");
    return false;
}

// A parte do regex não foi solicitada, foi apenas um teste, para deixar o exercício completo.

const regexApenasLetrasEspacos = /^[a-zA-Z\s]+$/;

if (!regexApenasLetrasEspacos.test(nome)) {
    alert("O campo 'nome' deve conter apenas letras e espaços!");
    return false;
}

return true;

}