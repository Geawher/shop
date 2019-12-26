create table categories (
id int AUTO_INCREMENT,
name varchar(50) NOT NULL UNIQUE,
CONSTRAINT pk_categories PRIMARY KEY (id)

);

create table products (
id int AUTO_INCREMENT,
name varchar (50) NOT NULL UNIQUE,
description varchar (50) NOT NULL ,
price int,
idCat int , 
CONSTRAINT pk_products PRIMARY KEY (id),
CONSTRAINT fk_products_categories FOREIGN KEY (idCat) REFERENCES categories (id)

);