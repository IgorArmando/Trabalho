<?php
$id = trim($_POST['id']);

if (!empty($nome) && !empty($disciplina) && !empty($data) && !empty($nota)){
    include 'banco.php';
    $pdo = Banco::conectar();
    $pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM alunos WHERE id=?;";
    $qry = $pdo->prepare($sql);
    $qry->execute(array($id));
    Banco::desconectar();
}
header("location: mostrarnota.php");



?>