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

function empresa(){
    var action = '../controller/empresaControl.php?action=loginEmpresa';
    var form = document.querySelector('#homeForm');
    form.action = action;
    form.submit();
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