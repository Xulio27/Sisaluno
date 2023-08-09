<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário</title>
    <link rel="stylesheet" href="../pagina.css">
</head>

<body>
<form method="GET" action="crudaluno.php">
    <div class="container">
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                </div>

                <div class="input-group">

                    <div class="cx1">

                        <div class="input-box">
                            <label for=""> ALUNO<br></label>
                            <input type="text" name="nome" required>
                        </div>

                        <div class="input-box">
                            <label for="">IDADE<br></label>
                            <input type="number" name="idade" required>
                        </div>

                    </div>

                    <div class="cx2">

                        <div class="input-box">
                            <label for="">ENDEREÇO<br></label>
                            <input type="text" name="endereco" required>
                        </div>

                        <div class="input-box">
                            <label for="">DATA ALUNO<br></label>
                            <input type="date" name="dataluno" required>
                        </div>

                    </div>

                </div>

                <div class="login-button">
                    <input type="submit" name="cadastrar" value="CADASTRAR">
                </div>
            </form>


        </div>
    </div>
</form> 

<div class="voltar-button">
    <button class="button"><a href="../index.php">voltar</a></button>
</div>
</body>

</html>