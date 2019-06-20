<?php
class database extends PDO
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=poo","crud","7nxnNwMxpe2PVsKJ");
        $this->connection->exec("set names utf8");
    }

    private function setParams($statement,$data = array())
    {
        foreach($data as $key => $value){
            $this->setParam($key,$value);
        }
    }

    private function setParam($statement,$key,$value)
    {
        $statement->bindParam($key,$value);
    }

    public function query($sql,$params = array())
    {
        $statement = $this->connection->prepare($sql);
        $this->setParams($statement, $params);
        $statement->execute();
        return $statement;
    }

    public function select($sql, $params = array()):array
    {
        $statement = $this->query($sql,$params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


}
