window.onload = function(){
    mostraLoginEmpresa();
}

function mostraLoginEmpresa(){
    $('#empresa').show();
    $('#funcionario').hide();
    $('#pin').hide();
}

function mostraLoginFuncionario(){
    $('#empresa').hide();
    $('#pin').hide();
    $('#funcionario').show();
}

function mostraPinPonto(){
    $('#empresa').hide();
    $('#funcionario').hide();
    $('#pin').show();
}

function validaCampoPreenchido(input){
    let vazio = [undefined, '', null, false];

    for (let i = 0; i < vazio.length; i++){
        if (input == vazio[i]){
            return false;
        }
    }
    return true;  
}

setInterval(function () {
    const time = document.querySelector('#relogio');
    var date = new Date();
    var hora = date.getHours();
    var min = date.getMinutes();
    var seg = date.getSeconds();
    var formatHor = hora.toString().padStart(2, '0');
    var formatMin = min.toString().padStart(2, '0');
    var formatSeg = seg.toString().padStart(2, '0');
    time.textContent = formatHor + ':' + formatMin + ':' + formatSeg;
});

const cadEmpresa = document.querySelector('.cadastrarEmpresa');
const caixabranca = document.querySelector('.caixa-branca-login');

cadEmpresa.onclick = function () {
    caixabranca.classList.add('active');
};

function pin(){
    var form = document.getElementById('homeForm');
    var cod = document.getElementById('codFuncionario2').value;
    var senha = document.getElementById('senhaFuncionario2').value;

    if (!validaCampoPreenchido(cod) || !validaCampoPreenchido(senha)){
        alert('Há campos que precisam ser preenchidos!');
        return;
    }
    
    const url = '../controller/pontoControl.php?action=registraPonto';
    form.action = url;
    form.submit();
}

function funcionario(){
    var action = '../controller/funcionarioControl.php?action=LoginFuncionario';
    var form = document.querySelector('#homeForm');
    form.action = action;
    form.submit();
}

function empresa(){
    if (!validaCampoPreenchido(document.getElementById('emailEmpresaLogin').value) && !validaCampoPreenchido(document.getElementById('senhaEmpresaLogin').value)){
        alert('há campos que precisam ser preenchidos');
        return;
    }
    var action = '../controller/empresaControl.php?action=loginEmpresa';
    var form = document.querySelector('#homeForm');
    form.action = action;
    form.submit();
}
