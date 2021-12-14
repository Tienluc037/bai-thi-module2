create database `TestModuleS`;

use `TestModuleS`;

create table products (
                          id int(11) primary key auto_increment,
                          name varchar(255) not null ,
                          sectors varchar(255),
                          price int(11),
                          quantily int (11),
                          date_created date,
                          description varchar(255)
);