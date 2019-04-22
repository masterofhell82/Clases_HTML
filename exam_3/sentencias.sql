create database es_db;
use es_db;

create table es_person(
	id int not null auto_increment primary key,
	name varchar(500) not null,
	lastname varchar(500) not null,
	address varchar(100) not null,
	phone varchar(100) not null,
	email varchar(255) not null,
	created_at datetime not null
);