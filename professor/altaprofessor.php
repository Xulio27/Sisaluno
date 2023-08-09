<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once('../conexao.php');

   $idprofessor = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where idprofessor= :idprofessor";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':idprofessor',$idprofessor, PDO::PARAM_STR);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomeprof = $array_retorno['nomeprof'];
   $idade = $array_retorno['idade'];


?>

  <form method="POST" action="crudaprofessor.php">
        <input type="text" name="nome" id="" value=<?php echo $nomeprof?> >
                                                
        <input type="text" name="idade" id="" value=<?php echo $idade ?> >
      
        <input type="hidden" name="id" id="" value=<?php echo $idprofessor ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>