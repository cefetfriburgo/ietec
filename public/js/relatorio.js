const testForm = document.querySelector('form');

testForm.addEventListener('submit', function teste (e){
    e.preventDefault();

    // let relatorio = {
    //     data: new Date (document.querySelector("#dataInput").value),
    //     empresa: document.querySelector("#empresaInput").value,
    //     ordem: document.querySelector("#tipoInput").value
    // };

    let nomeEmpresa = document.querySelector("#empresaInput").value

    fetch('empresas/nome/'+nomeEmpresa)
    .then(resposta => {
        console.log(resposta)
        if(resposta.ok !== true) {
            limpaSpans()
            let msgError = resposta.status + ' - ' + resposta.statusText;
            document.querySelector("#erro").textContent = msgError;
        } return resposta;
    })
    .then((resposta )=> {
        console.log(resposta)
        return resposta.json()
    })
    .then(relatorio => {
        console.log(relatorio)
        relatorio.forEach(empresa => {
            const divRelatorio = document.querySelector("#div_relatorio")
            divRelatorio.innerHTML += preencherSpans(empresa)
        });
    })
    .catch(erro => console.log(erro))


})

function limpaSpans(){
    document.querySelector("#Empresa").textContent = " ";
    document.querySelector("#Tipo").textContent = " ";
}

function preencherSpans(empresa){
    return `<div class="empresa">
        <h3>Nome: ${empresa.nome_empresa}</h3>
        <p>Setor: ${empresa.setor}</p>
        <p>Capital: ${empresa.capital_social}</p>
        <img src="${empresa.imagem}" alt="Logo da ${empresa.nome_empresa}">
        <p>${empresa.descricao}
            <a href="empresas/${empresa.empresa_id}">Veja mais</a>
        </p>
    </div>`
}