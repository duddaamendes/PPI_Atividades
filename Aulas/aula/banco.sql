SHOW databases;
use crud_ppi;
SHOW tables;

CREATE database IF NOT exists crud_ppi;

use crud_ppi;

CREATE TABLE IF NOT exists users (
	id INT PRIMARY kEY auto_increment,
    name varchar(200),
    email varchar(200),
    senha varchar(200),
    datanascimento date
	) default charset=utf8mb4;
    
desc users;

SHOW columns FROM users;

SELECT * FROM users;