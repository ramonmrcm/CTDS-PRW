<?php
 $id              = $_POST['id'];
 $orcamento       = $_POST['orcamento'];
 $horas           = $_POST['horas'];
 $data            = $_POST['data'];

 $id                = $conexao->escape_string($id);
 $orcamento         = $conexao->escape_string($orcamento);
 $horas             = $conexao->escape_string($horas);
 $data              = $conexao->escape_string($data);

 $sql = "INSERT $nomeDaTabela VALUES (
                '$id',
                $orcamento,
                $horas,
                '$data'
                )";

 $conexao->query($sql);

 ?>

 <button onclick="history.go(-1);"> Voltar </button>