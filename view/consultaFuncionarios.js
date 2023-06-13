
function deletar(idFuncionario){
    console.log(`Deletar: ${idFuncionario}`);
    var end = '../controller/funcionarioControl.php?action=deletaFuncionario' + '&idFuncionario=' + idFuncionario;
    window.location.href = end;
}

function editar(idFuncionario){
    console.log(`Editar: ${idFuncionario}`);
}