const testForm = document.querySelector('form');

testForm.addEventListener('submit', function teste (e){
    e.preventDefault();

    let relatorio = {
        data: new Date (document.querySelector("#dataInput").value),
        empresa: document.querySelector("#empresaInput").value,
        ordem: document.querySelector("#tipoInput").value

    };

    fetch('/php/relatorio.php', {
        method: "POST",
        body: JSON.stringify(relatorio),
        headers: {
            "Content-Type":"application/json;charset=UTF-8"
        }
    })
    .then(resposta => {
        if(resposta.ok !== true) {
            limpaSpans()
            let msgError = resposta.status + ' - ' + resposta.statusText;
            document.querySelector("#erro").textContent = msgError;
        } return resposta;
    })
    .then(resposta => resposta.json())
    .then(relatorio => {
        preencherSpans(relatorio)
    })
    .catch(erro => console.log(erro))


})

function limpaSpans(){
    document.querySelector("#Empresa").textContent = " ";
    document.querySelector("#Tipo").textContent = " ";
}

function preencherSpans(relatorio){
    document.querySelector("#data").textContent = "Data: " + relatorio.data
    document.querySelector("#Empresa").textContent = "Empresa: " + relatorio.empresa
    document.querySelector("#Tipo").textContent = "Tipo: " + relatorio.ordem
}