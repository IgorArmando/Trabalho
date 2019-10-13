<?php
include 'banco.php';
$id = trim($_GET['id']);
$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM alunos WHERE id = ? ";
$q = $pdo->prepare($sql);
$q->execute(array($id));
$data = $q->fetch(PDO::FETCH_ASSOC);
$nome = $data['nome'];
$disciplina = $data['disciplina'];
$data_mat = $data['data_matricula'];
$nota = $data['nota'];
 Banco::desconectar();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Editar Notas </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
        </form>
    </head>
    <body>
    <form id="editar" name="editar" method="POST" action="editaris.php">
            <div class="form-group">
                <label for="lblid">
                    <span class="text">Id</span>
                    <span class="text"><?php echo $id?></span>
                </label>
                <input type="hidden" name="id" value="<?php echo $id?>" />
            </div>
            <div class="form-group">
                <label for="lblnome">
                    <span class="text">Nome</span>
                    <span class="text"><?php echo $nome?></span>
                </label>
                <input type="text" name="nome" id="nome" value="<?php echo $nome?>" />
            </div>
            <div class="form-group">
                <label for="lbdisciplina">
                    <span class="text">Disciplina</span>
                    <span class="text"><?php echo $disciplina?></span>
                </label>
                <input type="text" name="disciplina" id="disciplina" value="<?php echo $disciplina?>" />
            </div>
            <div class="form-group">
                <label for="lbnota">
                    <span class="text">Nota</span>
                    <span class="text"><?php echo $nota?></span>
                </label>
                <input type="hidden" name="nota" id="nota"value="<?php echo $nota?>" />
            </div>
            <input type="submit" name="btneditar" id="btneditar" class=" btn btn-danger" value="Editar"/>
            <input type="button" name="voltar" id="voltar" class="btn btn-primary" value="voltar" onclick="javascript:location.href='mostrarnota.php'">

</form>
     
    </body>
</html>