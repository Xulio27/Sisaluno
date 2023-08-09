<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_GET['cadastrodisciplina'])){
        ##dados recebidos pelo metodo GET
        $disciplina = $_GET["disciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
        $idprofessor = $_GET["idprofessor"];
        
        ##codigo SQL
        $sql = "INSERT INTO disciplina(disciplina, ch, semestre, idprofessor) 
                VALUES('$disciplina','$ch','$semestre', '$idprofessor')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute()){
            echo " <strong>OK!</strong> a disciplina
            $disciplina foi Incluido com sucesso!!!"; 
            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }
}
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $disciplina = $_POST["disciplina"];
    $iddisciplina = $_POST["iddisciplina"];
    $ch = $_POST["ch"];
    $semestre = $_POST["semestre"];
    $idprofessor = $_POST["idprofessor"];
   
      ##codigo sql
    $sql = "UPDATE  disciplina SET disciplina= :disciplina, ch= :ch, idprofessor= :idprofessor, semestre= :semestre   WHERE id= :iddisciplina ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':disciplina',$disciplina, PDO::PARAM_STR);
    $stmt->bindParam(':iddisciplina',$iddisciplina, PDO::PARAM_INT);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $disciplina foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $iddisciplina = $_GET['iddisciplina'];
    $disciplina = $_GET['disciplina'];
    $sql ="DELETE FROM `disciplina` WHERE iddisciplina= $iddisciplina";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> a disciplina
             $disciplina foi excluido!!!"; 

            echo " <button class='button'><a href='listadisciplina.php'>voltar</a></button>";
        }

}

        
?>