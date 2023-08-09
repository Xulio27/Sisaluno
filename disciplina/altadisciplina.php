
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

   $iddisciplina = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where iddisciplina= :iddisciplina";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':iddisciplina',$iddisciplina, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $disciplina = $array_retorno['disciplina'];
   $semestre = $array_retorno['semestre'];


?>

  <form method="POST" action="crudadisciplina.php">
        <input type="text" name="disciplina" id="" value=<?php echo $disciplina?> >
                                                
        <input type="number" name="semestre" id="" value=<?php echo $semestre ?> >
      
        <input type="text" name="id" id="" value=<?php echo $iddisciplina ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
