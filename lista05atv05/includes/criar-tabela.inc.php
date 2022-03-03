<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
            id VARCHAR(3) PRIMARY KEY,
            orcamento int NOT NULL,
            horas int NOT NULL,
            inicio date NOT NULL
          )";

 $conexao->query($sql);