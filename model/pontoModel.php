<?php
class PontoModel
{
    function validaFuncionario($codigo, $senha)
    {
        if (empty(func_get_args())){
            echo 'erro, algum argumento não foi enviado';
            return;
        }

        require '../connection.inc.php';
        $sql = "SELECT idFuncionario, nomeFuncionario, email, codigo, senha";
        $sql .= " FROM funcionario";
        $sql .= " WHERE codigo = :codigo";
        $sql .= " AND senha = :senha";
        $sql .= " LIMIT 1";

        $query = $DB->prepare($sql);
        $query->bindParam(':email', $codigo);
        $query->bindParam(':senha', $senha);
        $query->execute();

        return $query;
    }
}