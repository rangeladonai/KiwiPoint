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

function funcionario() {
  
 
    window.location.href = './painelPrincipal.php';
    }

