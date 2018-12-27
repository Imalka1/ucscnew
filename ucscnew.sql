drop database ucscnew;	
create database ucscnew;	
use ucscnew;	
create table user(personalEmail varchar(50),password varchar(100),accountType varchar(30),constraint primary key(personalEmail));	

create table staff(sid int auto_increment,title varchar(10),personalEmail varchar(50),name varchar(100),constraint primary key(sid),constraint foreign key(personalEmail) references user(personalEmail));	

-- Applicant --

create table applicant(
aid varchar(50),
postFor int,
title varchar(10),
fullName varchar(100),
surName varchar(100),
nic varchar(20),
gender varchar(10),
civilStatus varchar(20),
postalAddress varchar(100),
permanentAddress varchar(100),
mobileNo varchar(20),
homeNo varchar(20),
officeNo varchar(20),
personalEmail varchar(50),
OfficailEmail varchar(50),
dob varchar(30),
citizenship varchar(30),
citizen varchar(30),
registered_date varchar(20),
interviewers_count int,
marks int,
dataIndex int,
constraint primary key(aid),
constraint foreign key(personalEmail) references user(personalEmail));	

create table areas_of_specialization (aosid int auto_increment,aid varchar(50),description varchar(200),constraint primary key(aosid),constraint foreign key(aid) references applicant(aid));

create table secondary_education (seid int auto_increment,aid varchar(50),seNameOfSchool varchar(100),seFrom varchar(50),seTo varchar(50),seExam varchar(100),seYear varchar(10),constraint primary key(seid),constraint foreign key(aid) references applicant(aid));

create table professional_qualifications (pqid int auto_increment,aid varchar(50),pqInstitution varchar(100),pqFrom varchar(50),pqTo varchar(50),pqDuration varchar(10),pqQualification varchar(100),constraint primary key(pqid),constraint foreign key(aid) references applicant(aid));

create table employment_records (erid int auto_increment,aid varchar(50),erPost varchar(100),erInstitution varchar(100),erFrom varchar(50),erTo varchar(50),erDuration varchar(10),erSalary varchar(50),constraint primary key(erid),constraint foreign key(aid) references applicant(aid));

create table referees (refid int auto_increment,aid varchar(50),refName varchar(100),refDesignation varchar(100),refAddress varchar(100),refEmail varchar(100),refContact varchar(20),constraint primary key(refid),constraint foreign key(aid) references applicant(aid));

-- Interview Panel --

create table comment(cmid int auto_increment,sid int,aid varchar(50),description varchar(100),constraint primary key(cmid),constraint foreign key(sid) references staff(sid),constraint foreign key(aid) references applicant(aid));	

create table marking_field_heading(mhid int auto_increment,name varchar(100),detailed int,constraint primary key(mhid));	

create table marking_field(mid int auto_increment,mhid int,name varchar(100),marks varchar(10),constraint primary key(mid),constraint foreign key(mhid) references marking_field_heading(mhid));	

create table advertisement(adid int auto_increment,message varchar(3000),notified int,confirmed int,constraint primary key(adid));

insert into user values ('in1@gmail.com','900150983cd24fb0d6963f7d28e17f72','interview_panel'),('in2@gmail.com','900150983cd24fb0d6963f7d28e17f72','interview_panel');	
insert into user values ('di1@gmail.com','900150983cd24fb0d6963f7d28e17f72','sar'),('di2@gmail.com','900150983cd24fb0d6963f7d28e17f72','sar');	
insert into user values ('dimuthi1@gmail.com','900150983cd24fb0d6963f7d28e17f72','applicant'),('dimuthi2@gmail.com','900150983cd24fb0d6963f7d28e17f72','applicant');	
insert into user values ('imalkagunawardana1@gmail.com','900150983cd24fb0d6963f7d28e17f72','operator'),('dimuthi@gmail.com','900150983cd24fb0d6963f7d28e17f72','operator'),('imalkagunawardana4@gmail.com','900150983cd24fb0d6963f7d28e17f72','operator');
insert into staff (title,personalEmail,name) values ('Ms','in1@gmail.com','Dimuthi Tharaka'),('Ms','in2@gmail.com','Dimuthi Tharaka');	
insert into staff (title,personalEmail,name) values ('Ms','di1@gmail.com','Dimuthi Tharaka'),('Ms','di2@gmail.com','Dimuthi Tharaka');
insert into staff (title,personalEmail,name) values ('Mr','imalkagunawardana1@gmail.com','Imalka Gunawardana'),('Ms','dimuthi@gmail.com','Dimuthi Tharaka');
insert into marking_field_heading (name,detailed) values ('Academic Qualifications',1),('Other Qualifications / Academic Achievements',1),('Publications',1),('Subject Knowledge and Experience',0),('Extra Curricular Activities',1),('Presentation to prove teaching ability',0),('Performance at the interview',0);	
insert into marking_field (mhid,name,marks) values (1,'Bachelors Degree','0'),(1,'1st Class','15'),(1,'2nd Class','08'),(1,'3rd Class','04');	
insert into marking_field (mhid,name,marks) values (1,'Postgraduate / Professional Qualifications','0'),(1,'PhD','20'),(1,'MPhil','10'),(1,'MSc(Research 2 years)','08'),(1,'MSc(Taught 2 years)','05');	
insert into marking_field (mhid,name,marks) values (2,'National / International Awards','10'),(2,'Academic Awards','08'),(2,'Other','05');	
insert into marking_field (mhid,name,marks) values (3,'Journal','10'),(3,'Refreed Conference','05'),(3,'Abstract / Non-Refreed','02');	
insert into marking_field (mhid,name,marks) values (5,'Interfaculty (1st,2nd,3rd)','02'),(5,'Inter University','03'),(5,'National Pool','05'),(5,'Union President Secretary','03');
insert into advertisement (message,notified,confirmed) values ('<p style="text-align: center;"><span style="font-size:18px"><strong><span style="color:#16a085">Vacancy</span></strong></span></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse hic atque suscipit officia reiciendis <span style="font-size:16px">voluptatibus </span>enim fugiat quaerat exercitationem architecto ex, quam perferendis. Totam quos officiis perferendis, soluta vero corrupti?</p><p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse hic atque suscipit officia reiciendis voluptatibus enim fugiat quaerat exercitationem architecto ex, quam perferendis. Totam quos officiis perferendis, soluta vero corrupti?</em></p><p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse hic atque suscipit officia reiciendis voluptatibus enim fugiat quaerat exercitationem architecto ex, quam perferendis. Totam quos officiis perferendis, soluta vero corrupti?</strong></p><p><span style="font-family:Comic Sans MS,cursive">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse hic atque suscipit officia reiciendis voluptatibus enim fugiat quaerat exercitationem architecto ex, quam perferendis. Totam quos officiis perferendis, soluta vero corrupti?</span></p><p>&nbsp;</p>',1,1);
