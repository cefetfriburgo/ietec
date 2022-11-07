const mnForm = document.querySelector('form');

mnForm.addEventListener('submit', function teste (e){
    e.preventDefault();

    let monitoramento = {
        nomeEmpresa: document.querySelector("#nomeEmpresaMn").value,
        tipoEmpresa: document.querySelector("#tipoEmpresaMn").value,
        dataInicio: new Date(document.querySelector("#dataInicioMn").value),
        dataFim: new Date(document.querySelector("#dataFimMn").value),
        diaAtualizado: new Date(document.querySelector("#AtualizacaoMn").value)
    };

    fetch('/php/relatorio.php', {
        method: "POST",
        body: JSON.stringify(monitoramento),
        headers: {
            "Content-Type":"application/json;charset=UTF-8"
        }
    })
    .then(resposta => {
        if(resposta.ok !== true) {
            limpaSpans()
            let msgError = resposta.status + ' - ' + resposta.statusText;
            document.querySelector("#error").textContent = msgError;
        } return resposta;
    })
    .then(resposta => resposta.json())
    .then(monitoramento => {
        preencherSpans(monitoramento)
    })
    .catch(erro => console.log(erro))


})

function limpaSpans(){
    document.querySelector("#NomeEmpresaMN").textContent = " ";
    document.querySelector("#TipoEmpresaMN").textContent = " ";
    document.querySelector("#DataInicioMN").textContent = " ";
    document.querySelector("#DataFimMN").textContent = " ";
    document.querySelector("#DataAtualizacao").textContent = " ";
}

function preencherSpans(monitoramento){
    document.querySelector("#NomeEmpresaMN").textContent = monitoramento.nomeEmpresa
    document.querySelector("#TipoEmpresaMN").textContent = monitoramento.tipoEmpresa
    document.querySelector("#DataInicioMN").textContent = monitoramento.dataInicio
    document.querySelector("#DataFimMN").textContent = monitoramento.dataFim
    document.querySelector("#DataAtualizacao").textContent = monitoramento.diaAtualizado
}