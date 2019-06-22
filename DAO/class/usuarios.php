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
            $this->setData($result[0]);
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

    public function setData($data)
    {
        $this->setId($data['id']);
        $this->setNome($data['nome']);
        $this->setLogin($data['login']);
        $this->setSenha($data['senha']);
    }

    public function insert()
    {
        $database = new database;
        $result  = $database->select("CALL proc_usuarios_insert(:nome,:login,:senha)",array(
            ":nome"=>$this->getNome(),
            ":login"=>$this->getLogin(),
            ":senha"=>$this->getSenha()
        ));

        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }

    public function update($nome,$login,$senha)
    {
        $this->setNome($nome);
        $this->setLogin($login);
        $this->setSenha($senha);
        $database = new database;
        $database->query("update usuarios set nome = :nome,login = :login, senha = :senha where id= :id", array(
            ":nome"=>$this->getNome(),
            ":login"=>$this->getLogin(),
            ":senha"=>$this->getSenha(),
            ":id"=>$this->getId()
        ));
    }

    public function __toString()
    {
        return json_encode(array(
            $this->setData($result[0])
        ),JSON_UNESCAPED_UNICODE);
    }
}
