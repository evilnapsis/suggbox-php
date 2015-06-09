create database suggbox;
use suggbox; 

create table admin (
	id int not null auto_increment primary key,
	username varchar(50) not null,
	name varchar(50) not null,
	lastname varchar(50) not null,
	email varchar(255) not null,
	password varchar(60) not null,
	is_active boolean not null default 1,
	is_admin boolean not null default 0,
	created_at datetime
);

insert into admin (username,password,is_admin,created_at) value ("admin","admin",1,NOW());

create table team (
	id int not null auto_increment primary key,
	name varchar(200) not null
	);

create table category (
	id int not null auto_increment primary key,
	name varchar(200) not null
	);

create table item (
	id int not null auto_increment primary key,
	fullname varchar(50) not null,
	phone varchar(50) not null,
	address varchar(50) not null,
	kind varchar(255) not null,
	msg varchar(255) not null,
	is_readed boolean not null default 0,
	created_at datetime not null,
	team_id int ,
	foreign key (team_id) references team(id)
	);

