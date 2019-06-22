use poo;

delimiter $
create procedure if not exists proc_usuarios_insert(
    pnome varchar(80),
    plogin varchar(60),
    psenha varchar(40)
)
begin
    insert into usuarios(nome,login,senha) values(pnome,plogin,psenha);

    select * from usuarios where id = LAST_INSERT_ID();
end
$
delimiter ;
