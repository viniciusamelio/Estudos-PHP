<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = 20;
}
if (!is_numeric($id) or strlen($id)>3){
    exit("gotcha!");
}

$connection = mysqli_connect("localhost","root","","poo");

mysqli_set_charset($connection,"utf8");

$sql = "SELECT * FROM usuarios WHERE id = $id";

$query = mysqli_query($connection,$sql);

while($resultado = mysqli_fetch_array($query)){
    echo $resultado['nome']."<br>";
}