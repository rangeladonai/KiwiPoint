
function deletar(idFuncionario){
    console.log(`Deletar: ${idFuncionario}`);
    if (window.confirm('Deseja Inativar o Funcionario Selecionado?')){
        var end = '../controller/funcionarioControl.php?action=deletaFuncionario' + '&idFuncionario=' + idFuncionario;
        window.location.href = end;
    }

}

function editar(idFuncionario){
    console.log(`Editar: ${idFuncionario}`);
    var end = '../controller/funcionarioControl.php?action=editaFuncionario'
    + '&idFuncionario=' + idFuncionario
    + '&operacao=editar';
    window.location.href = end;
}

function reativar(idFuncionario)
{
    console.log(`Reativar: ${idFuncionario}`);
    var end = '../controller/funcionarioControl.php?action=reativarFuncionario'
    + '&idFuncionario=' + idFuncionario
    window.location.href = end;
}