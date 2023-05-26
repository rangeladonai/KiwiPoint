<?php
class pontoModel
{  
    function inserePonto($idPonto, $dataponto, $idFuncionario)
    {
        require '../connection.php';
        if (empty(func_get_args())){
            return;
        }

        $sql = "INSERT INTO Ponto(idPonto,dataponto,idFuncionario)";
        $sql .= " VALUES('$idPonto','$dataponto','$idFuncionario')";
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