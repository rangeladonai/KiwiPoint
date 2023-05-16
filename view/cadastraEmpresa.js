var campoCep = document.querySelector('#cepEmpresa');
let url = `https://viacep.com.br/ws/${campoCep.value}/json/`;


function confirmaCadastraEmpresa(){
    const form = document.getElementById('cadastraEmpresa');
    form.action = '../controller/empresaControl.php?action=confirmaCadastraEmpresa';
    form.submit();
}

function voltaHome(){
    var end = '../view/home.php';
    window.location.href = end;
}
