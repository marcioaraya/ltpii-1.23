/* altera o modo de autenticação no MySQL para aceitar o 
   modo antigo usado pelo PHP
*/
/*
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'senac'; 
*/




/* criar usuário específico para aplicação agenda */
CREATE USER 'aplicacao_curso'@'localhost' IDENTIFIED WITH mysql_native_password BY 'curso123'; 
grant select, insert, update, delete on curso.* to 'aplicacao_curso'@'localhost' ;
