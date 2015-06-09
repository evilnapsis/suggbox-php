create database leyva;
use leyva; 

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


create table person (
	id int not null auto_increment primary key,
	image varchar(50),
	no varchar(100) not null,
	rfc varchar(50) not null,
	name varchar(50) not null,
	lastname varchar(50) not null,
	job varchar(50) not null,
	email1 varchar(255) not null,
	email2 varchar(255) not null,
	email3 varchar(255) not null,
	address1 varchar(60) not null,
	address2 varchar(60) not null,
	phone1 varchar(60) not null,
	phone2 varchar(60),
	phone3 varchar(60),
	is_active boolean not null default 1,
	created_at datetime not null,
	team_id int not null,
	foreign key (team_id) references team(id),
	category_id int not null,
	foreign key (category_id) references category(id)
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
	person_id int ,
	foreign key (person_id) references person(id)
	);

