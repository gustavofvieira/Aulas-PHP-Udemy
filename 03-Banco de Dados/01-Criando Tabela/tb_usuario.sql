use dbphp7;
CREATE TABLE tb_usuarios(
	idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
    
);

INSERT INTO tb_usuarios(deslogin,dessenha) values('root','123');

select * from tb_usuarios;

update tb_usuarios set dessenha = '123456' where idusuario = 1;


