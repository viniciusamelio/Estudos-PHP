<?php



class Usuarios
{
    private $id;
    private $nome;
    private $login;
    private $senha;

    public function getId()
    {
        return $this->id;
    }

    public function setId($valor)
    {
        $this->id = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($valor)
    {
        $this->nome = $valor;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($valor)
    {
        $this->login = $valor;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($valor)
    {
        $this->senha = $valor;
    }

    public function selectID($id)
    {
        $database = new database();
        $result = $database->select("select * from usuarios where id = :id",array(
            ":id"=>$id
        ));
        if (count($result) > 0) {
            $row = $result[0];
            $this->setId($row['id']);
            $this->setNome($row['nome']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
        }
    }

    static function list()
    {
        $database = new database;
        return $database->select("Select * from usuarios order by id");

    }

    static function search($login)
    {
        $database = new database;
        return $database->select("select * from usuarios where login like :search order by login",array(
            ":search"=>"%".$login."%"
        ));
    }

    public function __toString()
    {
        return json_encode(array(
            "id"=>$this->getId(),
            "nome"=>$this->getNome(),
            "login"=>$this->getLogin(),
            "senha"=>$this->getSenha()
        ),JSON_UNESCAPED_UNICODE);
    }
}
