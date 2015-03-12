create table member(
email varchar(80) not null,
password varchar(40) not null,
firstName varchar(15) not null,
lastName varchar(15) not null,
regist_day varchar(20),
level int,
primary key(email)
);