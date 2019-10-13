<?php
    $nome = trim($_POST['txtnome']);
    $disciplina = trim($_POST['txtdisciplina']);
    $nota = trim($_POST['txtnota']);

    if (!empty($nome) && !empty($disciplina) && !empty($data) && !empty($nota)){
        include 'banco.php';
        $pdo = Banco::conectar();
        $pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO 'alunos' (disciplina, nome, nota ) 
                values(?, ?, ? );";
        $qry = $pdo->prepare($sql);
        $qry->execute(array($disciplina, $nome, $nota));
        Banco::desconectar();
    }
header("location: mostrarnota.php");
?>