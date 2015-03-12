create table board(
num int not null auto_increment,
email char(20) not null,
firstName char(15) not null,
lastName char(15) not null,
subject char(100) not null,
content text not null,
regist_day char(20) not null,
hit int,
primary key(num)
);

