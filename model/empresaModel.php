<?php
class EmpresaModel
{  
    function insereEmpresa($nomeEmpresa, $cnpj, $cep, $complemento, $rua, $uf, $numero, $bairro, $cidade, $email, $senha)
    {
        require '../connection.php';
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
}