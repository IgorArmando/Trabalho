<html>
<head>
    <title> Mostrar Notas dos Alunos      </title>
</head>
<body>
      <h1> Notas </h1>
      <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Disciplina</th>
            <th>Data da Matricula</th>
            <th>Nota</th>
            <th>Excluir</th>
            <th>Editar</th>
        </tr>
        <?php
            include 'banco.php';
            $pdo = Banco::conectar();
            $sql ="SELECT * FROM alunos order by nome";
            foreach($pdo->query($sql) as $row){
        ?>
         <tr>
            <td><?php echo $row['id']?></th>
            <td><?php echo $row['nome']?></td>
            <td><?php echo $row['disciplina']?></td>
            <td><?php echo $row['data_matricula']?></td>
            <td><?php echo $row['nota']?></td>
            <td>
                <button type="button" onclick="javascript:location.href='remover.php?id='+ 
                <?php echo $row['id'] ?>" >
                Excluir

                </button>
            </td>
            <td>
                <button type="button" onclick="javascript:location.href'editar.php?id='+
                <?php echo $row['id']?>" >
                Editar
            </button>
            </td>
        </tr>

            <?php }?>
      </table>
      <input type ="button" id="btadicionar" class="btn btn-primary" value="Adicionar"
       onclick="javascript:location.href='inserirnota.html'">
</body>
</html>