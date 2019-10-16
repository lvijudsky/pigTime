// Seletores
const cepInput = document.querySelector('#CEP');
const ruaInput = document.querySelector('#endereco');
const bairroInput = document.querySelector('#bairro');
const cidadeInput = document.querySelector('#cidade')


// Funções
const buscaCep = (evento) => {
    const cepDigitado = evento.target.value;

    if (cepDigitado.length != 8) {
        // saindo da função com return vazio
        return;
    }

    fetch(`https://viacep.com.br/ws/${cepDigitado}/json`)
    .then((resposta) => { return resposta.json() })
    .then((dados) => {
        ruaInput.value = dados.logradouro;
        bairroInput.value = dados.bairro;
        cidadeInput.value = dados.localidade;
        cepInput.value = dados.cep;
    })
}

// Eventos
cepInput.oninput = buscaCep;
