//configuração do lightbox
lightbox.option({
    'imageFadeDuration': 300,
    'fadeDuration': 300,
    'albumLabel': "Foto %1 do total de %2",
    'resizeDuration': 400
})

//Inicialização do plugin AOS animate
AOS.init();

//TRATAMENTO DO CAMPO RANGE
//Função de execução automática
//os códigos aqui dentro ficam encapsulados
(() => {
    //variáveis p/ selecionar os elementos
    const FIELD_IDADE = document.getElementById('idade')
    const TXT_IDADE = document.getElementById('txt-idade')
    //txt-idade mostra o valor do campo idade
    TXT_IDADE.innerText = FIELD_IDADE.value

    FIELD_IDADE.addEventListener('change', () => {
        TXT_IDADE.innerText = FIELD_IDADE.value
    })
})()


//TRATAMENTO PARA OS CAMPOS estado e cidade
const URL_ESTADOS = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome'
var estados = document.getElementById('estados')

//O 1o then() captura os dados na variável response
//O 2o then() trata os dados recebidos
//O catch() vai tratar os erros
//fetch(url).then(response).then(json).catch(erro)
fetch(URL_ESTADOS).then( response => response.json()).then(
    json => {
        //Inicia a variável options com os ítens da lista
        let options = '<option>Selecione um estado</option>'

        //Laço para CONCATENAR a variável options com
        //todos os estados
        for (const i in json) {
            options += `<option value="${json[i].id}">${json[i].nome}</option>`
        }        

        //Mostra dentro do select estados
        estados.innerHTML = options
    }
).catch(erro => alert('Houve um erro na consulta: ' + erro))


//Quando o campo estados for atualizado, o campo cidades será preenchido
estados.addEventListener('change', ()=> {
    let url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estados.value}/municipios`
    let cidades = document.getElementById('cidades')
    let options = '<option>Selecione uma cidade</option>'

    fetch(url).then(response => response.json()).then( json =>{
        for (const i in json) {
            options += `<option value="${json[i].nome}">${json[i].nome}</option>`
        }
        cidades.innerHTML = options
    }).catch(erro => alert(`Erro na conexão - ${erro}`))    
})


// mostra a seta quando rolagem for maior que x
const rolagem = ()=>{
    const tela = document.querySelector('html')
    const seta = document.querySelector('.seta-sobe')
    //console.log(tela.scrollTop)
    if(tela.scrollTop > 600){
        seta.style.display = 'block'
    }else{
        seta.style.display = 'none'
    }
}
//window.addEventListener('scroll', rolagem)
window.onscroll = ()=> rolagem()
