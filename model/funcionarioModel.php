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
}