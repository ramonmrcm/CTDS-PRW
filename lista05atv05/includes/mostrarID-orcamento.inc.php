<?php
 $sql = "SELECT id, orcamento FROM $nomeDaTabela";
 $resultado = $conexao->query($sql);

 echo "<table>
            <tr>
                <th> ID Projeto </th>
                <th> Orçamento </th>
            </tr>";

while ($registro = $resultado->fetch_array()){

    $id         = $registro["id"]; //optei por utilizar o nome da coluna por facilidade de identificação
    $orcamento  = $registro["orcamento"];

    $id         = htmlentities($id, ENT_QUOTES, "UTF-8");
    $orcamento  = htmlentities($orcamento, ENT_QUOTES, "UTF-8");

echo "<tr>
        <td> $id </td>
        <td> R$ $orcamento </td>
      </tr>";
}

?>

<button onclick="history.go(-1);"> Voltar </button>