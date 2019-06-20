<?php
include('Connection.php');
$connection->beginTransaction();
$sql = $connection->prepare("DELETE FROM usuarios WHERE id = ?");
$id = 18;
$sql->execute(array($id));
$rowCount = $sql->rowCount();
echo "<b>{$rowCount} linhas afetadas!</b>";

if ($rowCount == 1) {
    $connection->rollback();
}else{
    $connection->commit();
}
