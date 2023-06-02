function alteraMes(){
    let form = document.getElementById('consultaPonto');
    form.submit();
}

function pdf(){
    var action = '../controller/pdfControl.php?action=montaPDF';
    var form = document.getElementById('consultaPonto');
    form.action = action;
    form.submit();
}