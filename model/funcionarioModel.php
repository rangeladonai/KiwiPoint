<?php
class FuncionarioModel
{  
    function insereFuncionario($idFuncionario, $nomeFuncionario, $cpf, $idEmpresa, $codigo, $email, $senha)
    {
        require '../connection.php';
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
        require '../connection.inc.php';
    
        $sql = "SELECT funcionario.idFuncionario, funcionario.nomeFuncionario, funcionario.cpf, funcionario.idEmpresa, funcionario.codigo, funcionario.email, funcionario.senha, empresa.nomeEmpresa, empresa.cnpj, empresa.cep, empresa.numero";
        $sql .= " FROM funcionario";
        $sql .= " INNER JOIN empresa ON (funcionario.idEmpresa = empresa.idEmpresa)";
        $sql .= " WHERE funcionario.codigo = '$codigo'";
        $sql .= " AND funcionario.senha = '$senha'";
        $sql .= " LIMIT 1";
    
        $query = $DB->prepare($sql);
        $query->execute(); // Executa a consulta
    
        return $query;
    }

}    