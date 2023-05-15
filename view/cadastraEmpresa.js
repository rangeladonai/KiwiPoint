var campoCep = document.getElementById('cepEmpresa');
let url = `https://viacep.com.br/ws/${campoCep.value}/json/`;
if (campoCep.lenght == 8){
    
}


function confirmaCadastraEmpresa(){
    const form = document.getElementById('cadastraEmpresa');
    form.action = '../controller/empresaControl.php?action=confirmaCadastraEmpresa';
    form.submit();
}

function voltaHome(){
    var end = '../view/home.php';
    window.location.href = end;
}
