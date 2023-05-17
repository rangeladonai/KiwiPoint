var btnCadastra = document.getElementById('confirma');
window.onload = function(){
    btnCadastra.disabled = true;
}

var elements = document.getElementById('cadastraEmpresa').elements; ///pega todos elementos dentro do cadastraEmpresa
for (i = 0; i < elements.length; i++){          //percorre os elementos
    $(elements[i]).on('keyup', function(){      //a cada vez q o teclado tiver o evento keyup dentro de algum dos elementos, ira fazer esta ação
        if (document.getElementById('senhaEmpresaConfirma').value == document.getElementById('senhaEmpresa').value && document.getElementById('senhaEmpresaConfirma').value != '' && document.getElementById('senhaEmpresa').value != '' && document.getElementById('nomeEmpresa').value != '' && document.getElementById('cnpjEmpresa').value != '' && document.getElementById('cepEmpresa').value != '' && document.getElementById('emailEmpresa').value != ''){
            btnCadastra.disabled = false;
            console.log('botao ativado')
        } else {
            btnCadastra.disabled = true;
            console.log('botao desativado');
        }
    });
}

$('#cepEmpresa').on("keyup", function(){    //funcao jquery para cada vez que uma tecla for solta dentro do input #cepEmpresa
    var cepCampo = document.querySelector('#cepEmpresa').value
    let url = `https://viacep.com.br/ws/${cepCampo}/json/`;
    if (cepCampo.length == 8){
        fetch(url).then(response => {
            response.json().then(data => {
                console.log(data);
                mostraRespostaViaCep(data);
            })
        });
    } else {
        apagaRespostaViaCep();
    }
});

function mostraRespostaViaCep(data){
    var rua = document.querySelector('#ruaEmpresa');
    var cidade = document.querySelector('#cidadeEmpresa');
    var uf = document.querySelector('#ufEmpresa');
    var bairro = document.querySelector('#bairroEmpresa');

    rua.value = data.logradouro;
    cidade.value = data.localidade;
    uf.value = data.uf;
    bairro.value = data.bairro;
}

function apagaRespostaViaCep(){
    var rua = document.querySelector('#ruaEmpresa');
    var cidade = document.querySelector('#cidadeEmpresa');
    var uf = document.querySelector('#ufEmpresa');
    var bairro = document.querySelector('#bairroEmpresa');

    rua.value = '';
    cidade.value = '';
    uf.value = '';
    bairro.value = '';
}


function voltaHome(){
    var end = '../view/home.php';
    window.location.href = end;
}
