<?php
class FuncionarioModel
{  
    function insereFuncionario($idEmpresa, $nomeFuncionario, $cpf, $codigo, $email, $senha)
    {
        if (empty(func_get_args())){
            return;
        }
        require '../connection.inc.php';

        $sql = "INSERT INTO Funcionario(nomeFuncionario, cpf, idEmpresa, codigo, email, senha, statu)";
        $sql .= " VALUES('$nomeFuncionario','$cpf','$idEmpresa','$codigo','$email','$senha', 1)";

        $stmt = $DB->prepare($sql);
        $query = $stmt->execute();
        return $query;
    }

    function validaLoginFuncionario($action, $codigo, $senha)
    {
        if (empty($action)){
            return 'faltou informar o action';
        }
        require_once '../connection.inc.php';
    
        $sql = "SELECT Funcionario.idFuncionario, Funcionario.nomeFuncionario, Funcionario.cpf, Funcionario.idEmpresa, Funcionario.codigo, Funcionario.email, Funcionario.senha, Funcionario.statu, Empresa.nomeEmpresa, Empresa.cnpj, Empresa.cep, Empresa.numero";
        $sql .= " FROM Funcionario";
        $sql .= " INNER JOIN Empresa ON (Funcionario.idEmpresa = Empresa.idEmpresa)";
        $sql .= " WHERE Funcionario.email = '$codigo'";
        $sql .= " AND Funcionario.senha = '$senha'";
        $sql .= " LIMIT 1";
    
        $query = $DB->prepare($sql);
        $query->execute(); // Executa a consulta
    
        return $query;
    }

    function pesquisaFuncionariosDaEmpresa($idEmpresa)
    {
        require '../connection.inc.php';
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

        $sql = "UPDATE Funcionario SET statu = 0";
        $sql .= " WHERE idFuncionario = '$idFuncionario'";

        $query = $DB->prepare($sql);
        $query->execute();
        return $query;
    }
}    