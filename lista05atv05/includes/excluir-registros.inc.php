<?php
 $sql = "DELETE FROM $nomeDaTabela WHERE horas < 100 AND orcamento < 1000";
 $resultado = $conexao->query($sql);

echo "
    <p> Registros deletados!
";

?>

<button onclick="history.go(-1);"> Voltar </button>