<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Exercício Avaliativo L5 </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Atividade Avaliativa L5 - Exercício 05 </h1>
 <?php
  require_once "./includes/dados-conexao.inc.php";
  require_once "./includes/conectar.inc.php";
  require_once "./includes/criar-banco.inc.php";
  require_once "./includes/abrir-banco.inc.php";
  require_once "./includes/definir-charset.inc.php";
  require_once "./includes/criar-tabela.inc.php";

  if(isset($_POST['registro'])){
   require_once "./includes/cadastrar.inc.php";
   echo "<p> Dados registrados com sucesso no banco de dados. </p>";
   }

   if(isset($_POST['executar-operacao'])){
    $operacao = $_POST['operacao'];

    if($operacao == "1"){
          require_once "./includes/mostrarID-orcamento.inc.php";
          echo "<p>  Exibindo o ID e o Orçamento de cada Projeto Cadastrado </p>";  
      }

    elseif($operacao == "2"){
      require_once "./includes/quantidade-projeto.inc.php";
      }

    else{
      require_once "./includes/excluir-registros.inc.php";
    }   
  }

  if(isset($_POST['back'])){
    require_once "./includes/voltar-pagina.inc.php";
  }



 ?>

</body>
</html>