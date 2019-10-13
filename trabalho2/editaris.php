<?php
$id = trim($_POST['id']);
$nome = trim($_POST['nome']);
$disciplina = trim($_POST['disciplina']);
$nota = trim($_POST['nota']);


if (!empty($nome) && !empty($disciplina) && !empty($nota)){
    include 'banco.php';
    $pdo = Banco::conectar();
    $pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE alunos SET nome = ?, disciplina = ?, nota = ?; ";
    $sql = $sql + "WHERE id=?";
    $qry = $pdo->prepare($sql);
    $qry->execute(array($nome, $disciplina, $nota));
    Banco::desconectar();
}
//header("location: mostrarnota.php");


?>
