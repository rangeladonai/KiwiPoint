<?php
class FuncionarioModel
{  
    function insereFuncionario($idFuncionario, $nomeFuncionario, $cpf, $idEmpresa, $codigo, $email, $senha)
    {
        require_once '../connection.php';
        if (empty(func_get_args())){
            return;
        }

        $sql = "INSERT INTO Funcionario(idFuncionario,nomeFuncionario,cpf,idEmpresa,codigo,email,senha)";
        $sql .= " VALUES('$idFuncionario','$nomeFuncionario','$cpf','$idEmpresa','$codigo','$email','$senha')";
        try{
            $stmt = $DB->prepare($sql);
            $query = $stmt->execute();
            return $query;
        }catch(PDOException $e){
            echo $e->getMessage();
            echo ' => ' . $e->getCode();
        }
    }

    function validaLoginFuncionario($action, $codigo, $senha)
    {
        if (empty($action)){
            return 'faltou informar o action';
        }
        require_once '../connection.inc.php';
    
        $sql = "SELECT Funcionario.idFuncionario, Funcionario.nomeFuncionario, Funcionario.cpf, Funcionario.idEmpresa, Funcionario.codigo, Funcionario.email, Funcionario.senha, Empresa.nomeEmpresa, Empresa.cnpj, Empresa.cep, Empresa.numero";
        $sql .= " FROM Funcionario";
        $sql .= " INNER JOIN Empresa ON (Funcionario.idEmpresa = Empresa.idEmpresa)";
        $sql .= " WHERE Funcionario.codigo = '$codigo'";
        $sql .= " AND Funcionario.senha = '$senha'";
        $sql .= " LIMIT 1";
    
        $query = $DB->prepare($sql);
        $query->execute(); // Executa a consulta
    
        return $query;
    }

    function pesquisaFuncionariosDaEmpresa($idEmpresa)
    {
        require_once '../connection.inc.php';
        $sql  = " SELECT * FROM Funcionario";
        $sql .= " WHERE idEmpresa = '$idEmpresa'";

        $query = $DB->prepare($sql);
        $query->execute();
        return $query;
    }

    function procuraFuncionarioPorId($idFuncionario)
    {
        if (empty($idFuncionario)){
            return 'ID FUNCIONARIO ESTÁ VAZIO! PRECISA SER PREENCHIDO PARA QUE POSSA SER REALIZADA A CONSULTA';
        }
        require_once '../connection.inc.php';
        $sql = "SELECT * FROM Funcionario";
        $sql .= " WHERE idFuncionario = '$idFuncionario'";

        $query = $DB->prepare($sql);
        $query->execute();
        return $query;
    }

    function deletarFuncionario($idFuncionario)
    {
        if (empty($idFuncionario)){
            return 'ID FUNCIONARIO ESTÁ VAZIO! PRECISA SER PREENCHIDO PARA QUE POSSA SER DELETADO';
        }
        require '../connection.inc.php';

        $deletePontos = "DELETE FROM Ponto WHERE idFuncionario = '$idFuncionario'";
        $query = $DB->prepare($deletePontos);
        $query->execute();

        $sql = "DELETE FROM Funcionario";
        $sql .= " WHERE idFuncionario = '$idFuncionario'";

        $query = $DB->prepare($sql);
        $query->execute();
        return $query;
    }
}    