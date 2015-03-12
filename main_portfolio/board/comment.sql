create table comment(
num int not null auto_increment,
parent int not null,
email char(20) not null,
firstName char(15) not null,
lastName char(15) not null,
content text not null,
regist_day char(20) not null,
primary key(num)
);