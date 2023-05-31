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

        $sql = "  SELECT idFuncionario, nomeFuncionario, email, codigo, senha, cpf";
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

    function inserePonto($idFuncionario, $dataTimePonto, $urlFoto = null, $mesPonto, $diaPonto, $anoPonto)
    {
        require '../connection.inc.php';
        $sql = " INSERT INTO Ponto(idFuncionario, dataPonto, urlFoto, mesPonto, diaPonto, anoPonto)";
        $sql.= " VALUES('$idFuncionario', '$dataTimePonto', '$urlFoto', '$mesPonto', '$diaPonto', '$anoPonto')";

        try{
            $insert = $DB->prepare($sql);
            $insert->execute();
        }catch(PDOException $e){
            echo $e;
            throw new Exception($e);
        }
    }

    function pesquisaPontos($action, $idFuncionario, $mes = null)
    {
        require '../connection.inc.php';
        if (empty(func_get_args())){
            throw new Exception('pesquisaTodosPontos: parametros inválidos OU vazios');
            return;
        }
        
        $sql  = "SELECT ponto.idPonto, ponto.dataPonto, ponto.idFuncionario, ponto.urlFoto, funcionario.nomeFuncionario, funcionario.idEmpresa, funcionario.cpf";
        $sql .= " FROM ponto";
        $sql .= " INNER JOIN funcionario ON (ponto.idFuncionario = funcionario.idFuncionario)";
        $sql .= " WHERE ponto.idFuncionario = '$idFuncionario'";

        $query = $DB->prepare($sql);
        $query->execute();
        return $query;
    }
}