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
    
        $sql = "SELECT idFuncionario, nomeFuncionario, cpf, idEmpresa, codigo, email, senha";
        $sql .= " FROM funcionario";
        $sql .= " WHERE codigo = :codigoFuncionario";
        $sql .= " AND senha = :senhaFuncionario";
        $sql .= " LIMIT 1";
    
        $query = $DB->prepare($sql);
        $query->bindParam(':codigoFuncionario', $codigo);
        $query->bindParam(':senhaFuncionario', $senha);
        $query->execute(); // Executa a consulta
    
        return $query;
    }

}    