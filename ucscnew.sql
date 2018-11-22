drop database ucscnew;
create database ucscnew;
use ucscnew;

create table user(email varchar(50),password varchar(100),accountType varchar(30),constraint primary key(email));
create table interviewer(iid int auto_increment,email varchar(50),name varchar(100),constraint primary key(iid),constraint foreign key(email) references user(email));
create table applicant(aid varchar(50),email varchar(50),name varchar(100),dob varchar(20),registered_date varchar(20),address varchar(20),telephone varchar(20),interviewers_count int,marks int,comment varchar(100),primary key(aid),constraint foreign key(email) references user(email));
create table marking_field_heading(mhid int auto_increment,name varchar(100),constraint primary key(mhid));
create table marking_field(mid int auto_increment,mhid int,name varchar(100),marks int,constraint primary key(mid),constraint foreign key(mhid) references marking_field_heading(mhid));

insert into user values ('in1@gmail.com','900150983cd24fb0d6963f7d28e17f72','interview_panel'),('in2@gmail.com','900150983cd24fb0d6963f7d28e17f72','interview_panel');
insert into user values ('dimuthi1@gmail.com','900150983cd24fb0d6963f7d28e17f72','interview_panel'),('dimuthi2@gmail.com','900150983cd24fb0d6963f7d28e17f72','interview_panel');
insert into marking_field_heading (name) values ('Academic Qualifications'),('Other Qualifications / Academic Achievements'),('Publications'),('Subject Knowledge and Experience'),('Extra Curricular Activities'),('Presentation to prove teaching ability'),('Performance at the interview');
insert into interviewer (email,name) values ('in1@gmail.com','Dimuthi');
insert into applicant values ('S001','dimuthi1@gmail.com','Dimuthi Bomb1','1987-03-03','2018-03-02','Hikkaduwa','123-1234567',1,0,''),('S002','dimuthi2@gmail.com','Dimuthi Bomb2','1987-03-03','2018-03-03','Colombo','123-1234567',1,0,'');

