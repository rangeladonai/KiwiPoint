function alteraConsulta(){
    let form = document.getElementById('consultaPonto');
    form.submit();
}

function pdf(){
    var action = '../controller/pdfControl.php?action=montaPDF';
    let form = document.getElementById('consultaPonto');
    form.action = action;
    form.submit();
}