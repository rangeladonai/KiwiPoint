window.onload = function(){
    mostraLoginEmpresa();
}

function mostraLoginEmpresa(){
    $('#empresa').show();
    $('#funcionario').hide();
}

function mostraLoginFuncionario(){
    $('#empresa').hide();
    $('#funcionario').show();
}
