<?php
class EmpresaModel
{  
    function insereEmpresa($nomeEmpresa, $cnpj, $cep, $complemento, $rua, $uf, $numero, $bairro, $cidade, $email, $senha)
    {
        require '../connection.inc.php';
        if (empty(func_get_args())){
            return;
        }

        $sql = "INSERT INTO Empresa(nomeEmpresa,cnpj,cep,complemento,rua,uf,numero,bairro,cidade,email,senha)";
        $sql .= " VALUES('$nomeEmpresa','$cnpj','$cep','$complemento','$rua','$uf','$numero','$bairro','$cidade','$email','$senha')";
        try{
            $stmt = $DB->prepare($sql);
            $query = $stmt->execute();
            return $query;
        }catch(PDOException $e){
            echo $e->getMessage();
            echo ' => ' . $e->getCode();
        }
    }

    function validaLoginEmpresa($action, $emailEmpresa, $senhaEmpresa)
    {
        if (empty($action)){
            return 'faltou informar o action';
        }
        require '../connection.inc.php';
    
        $sql = "SELECT idEmpresa, nomeEmpresa, cnpj, cep, complemento, rua, uf, numero, bairro, cidade, email, senha";
        $sql .= " FROM empresa";
        $sql .= " WHERE email = :emailEmpresa";
        $sql .= " AND senha = :senhaEmpresa";
        $sql .= " LIMIT 1";
    
        $query = $DB->prepare($sql);
        $query->bindParam(':emailEmpresa', $emailEmpresa);
        $query->bindParam(':senhaEmpresa', $senhaEmpresa);
        $query->execute(); // Executa a consulta
    
        return $query;
    }
    
}