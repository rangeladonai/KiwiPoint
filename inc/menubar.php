
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    .menu {
        display: flex;
        align-items: center;
        background-color: whitesmoke;
        padding: 10px;
        border-radius: 5px;
    }

    .logo {
        width: 90px;
    }

    .nav-item{
        padding-left: 10px;
        position: relative;
        left: 20%;
    }
    
    body {
        background: linear-gradient(116.82deg, #64e44a 0%, rgba(191, 228, 118) 59.27%, #59975c 97.92%);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        /*display: grid;*/
        align-items: center;
        justify-content: center;
        position: inherit;
    }

</style>
<html>
<div class="menu">
    <div class="logo">
        <img src="../imagem/logo-pdf.png" alt="" id="logo">
    </div>
    <div class="botoes">
        <a href="#" class="nav-item">Pedro1</a>
        <a href="#" class="nav-item">Pedro2</a>
        <?php if ($_SESSION['situacao'] == 'logouComoEmpresa'): ?>
        <a href="#" class="nav-item">EMPRESA</a>
        <?php endif; ?>

        <a href="#" class="nav-item">Pedro4</a>
    </div>
</div>
</html>