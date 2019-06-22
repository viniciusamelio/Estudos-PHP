<?php
class database extends PDO
{
    private $connection;
    //Ao ser instanciada a classe monta a conexão
    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=poo","crud","7nxnNwMxpe2PVsKJ");
        $this->connection->exec("set names utf8");
    }
    //Recebe a classe setParam para setar parâmetros um a um
    private function setParams($statement,$data = array())
    {
        foreach($data as $key => $value){
            $this->setParam($statement,$key,$value);
        }
    }
    //Seta um parâmetro utilizando bindParam para a query preparada
    private function setParam($statement,$key,$value)
    {
        $statement->bindParam($key,$value);
    }
    //Recebe a string SQL, seta os parâmetros e executa a query
    public function query($sql,$params = array())
    {
        $statement = $this->connection->prepare($sql);
        $this->setParams($statement, $params);
        $statement->execute();
        return $statement;
    }
    //Seleciona os dados através dos parâmetros e string SQL passada
    public function select($sql, $params = array())
    {
        $statement = $this->query($sql,$params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


}
