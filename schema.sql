create table Employee (
Employee_ID  auto_increment primary key,
first_name varchar (50),
last_name varchar (50),
gender varchar (15),
age integer (2)
emailaddress varchar (50),
profession varchar (30),
date_added timestamp default current_timestamp
);