<?php

class PontoModel
{

    function validaFuncionario($codigo, $senha)
    {
        require '../connection.inc.php';
        if (empty(func_get_args())){
            throw new Exception('erro, algum argumento não foi enviado');
            return;
        }

        $sql = "  SELECT idFuncionario, nomeFuncionario, email, codigo, senha";
        $sql .= " FROM Funcionario";
        $sql .= " WHERE codigo = :codigo";
        $sql .= " AND senha = :senha";
        $sql .= " LIMIT 1";

        $query = $DB->prepare($sql);
        $query->bindParam(':codigo', $codigo);
        $query->bindParam(':senha', $senha);
        $query->execute();

        return $query;
    }

    function inserePonto($idFuncionario, $dataTimePonto, $urlFoto = null)
    {
        require '../connection.inc.php';
        $sql = " INSERT INTO Ponto(idFuncionario, dataPonto, urlFoto)";
        $sql.= " VALUES('$idFuncionario', '$dataTimePonto', '$urlFoto')";

        try{
            $insert = $DB->prepare($sql);
            $insert->execute();
        }catch(PDOException $e){
            echo $e;
            throw new Exception($e);
        }
    }
}