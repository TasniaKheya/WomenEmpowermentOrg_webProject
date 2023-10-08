SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
create table tasks
(
    task_name varchar(50),
    task_details varchar(1000),
    task_id int(10) PRIMARY KEY AUTO_INCREMENT
);

create table Employee(
    empID int(3) not null,
    empName varchar(20),
    emp_address varchar(60),
    salary int(7),
    email varchar(20),
    Emp_phone_no int(11),
    primary key(empID)
);
create table HomeCraftCollector(
    no_of_collected_items int(10),
    hcc_id int(3) not null,
    primary key(hcc_id),
    foreign key(hcc_id)  references Employee(empID)
);
create table craft_buyer(
    buyer_name varchar(20),
    buyer_id int(4) not null,
    provided_money int(10) not null,
    primary key(buyer_id)
);
create table craft_seller(
    cs_id int(3) not null,
    collected_money int(10) not null,
    primary key(cs_id),
    foreign key(cs_id) references Employee(empID)
);
create table craft_maker(
    maker_name varchar(20),
    maker_address varchar(60),
    maker_ID int(5) not null,
    earnings int(7),
    maker_phone_no int(11),
    primary key(maker_id)
);
create table collector_seller(
 hcc_id int(7) not null,
cs_id int(6) not null,
 foreign key(hcc_id)  references HomeCraftCollector(hcc_id),
 foreign key(cs_id)  references craft_seller(cs_id)
);
create table collector_maker(
 hcc_id int(7) not null,
maker_ID int(5) not null,
 foreign key(hcc_id)  references HomeCraftCollector(hcc_id),
 foreign key(maker_ID)  references craft_maker(maker_ID)
);
create table seller_buyer(
  cs_id int(3) not null,
  buyer_id int(4) not null,
  foreign key(buyer_id)  references craft_buyer(buyer_id),
  foreign key(cs_id)  references craft_seller(cs_id)
);
create table craft(
    craft_id int(4) not null,
    craft_name varchar(30),
    maker_ID int(5) not null,
    cs_id int(6) not null,
    hcc_id int(7) not null,
    buyer_id int(4) not null,
    primary key(craft_id),
    foreign key(hcc_id)  references HomeCraftCollector(hcc_id),
    foreign key(buyer_id)  references craft_buyer(buyer_id),
    foreign key(cs_id)  references craft_seller(cs_id),
    foreign key(maker_ID)  references craft_maker(maker_ID)
);
create table trainee(
        Tphoneno int(11),
        provided_fee int(5),
        traineeId int(6) not null,
        traineeName varchar(20),
        primary key(traineeId)
);
create table WeavingTrainer(
    Tid int(3) not null,
    primary key(Tid),
    foreign key(Tid) references Employee(empID)
);
create table weaving(
    traineeId int(6) not null,
     Tid int(3) not null,
    foreign key(Tid) references  WeavingTrainer(Tid),
    foreign key(traineeId) references trainee(traineeId)
);
create table primaryTeacher
(
    PEid int(3) not null,
    primary key(PEid),
    foreign key(PEid) references Employee(empID)
);
create table WomenStudent(
    studentId int(5) not null,
    studentName varchar(30),
    eduFee int(5),
    primary key(studentId)
);
create table education(
    PEid int(3) not null,
    studentId int(5) not null,
    foreign key(PEid) references primaryTeacher(PEid),
    foreign key(studentId) references WomenStudent(studentId)
);
create table loan_taker(
    takerID int(5) not null,
    loan_taken_amount int(5),
    loan_provided_amount int(5),
    primary key(takerID)
);

create table loan_collector(
    LCid int(3) not null,
    primary key(LCid),
    foreign key(LCid) references Employee(empID)
);
create table loan_provider(
    Lid int(3) not null,
    primary key(Lid),
    foreign key(Lid) references Employee(empID)
);
create table loanTakerCollector(
takerID int(5) not null,
LCid int(3) not null,
foreign key(takerID) references loan_taker(takerID),
foreign key(LCid) references loan_collector(LCid)
);
create table loanTakerProvider(
takerID int(5) not null,
Lid int(3) not null,
foreign key(takerID) references loan_taker(takerID),
foreign key(Lid) references loan_provider(Lid)
);

insert into tasks(task_name,task_details) values('Home Craft Business',' A chemical compound synthesized from simpler
                     compounds and usually intended to  be used in later 
                     syntheses of more complex products. A chemical compound synthesized from simpler
                     compounds and usually intended ');

insert into tasks(task_name,task_details) values('Training for Weaving',' A chemical compound synthesized from simpler
                     compounds and usually intended to  be used in later 
                     syntheses of more complex products. A chemical compound synthesized from simpler
                     compounds and usually intended ');
                   

insert into tasks(task_name,task_details) values('Small Loan',' A chemical compound synthesized from simpler
                     compounds and usually intended to  be used in later 
                     syntheses of more complex products. A chemical compound synthesized from simpler
                     compounds and usually intended ');


insert into tasks(task_name,task_details) values('Primary Education',' A chemical compound synthesized from simpler
                     compounds and usually intended to  be used in later 
                     syntheses of more complex products. A chemical compound synthesized from simpler
                     compounds and usually intended ');

insert into Employee values(000,'KHEYA','KHULNA',10000,'12@gmail.com',01765298481);
insert into Employee values(001,'ANONNA','DHAKA',8000,'23@gmail.com',01765298482);
insert into Employee values(002,'RENU','CHITTAGONG',10000,'34@gmail.com',01765298483);
insert into Employee values(003,'RITA','BARISAL',10000,'45@gmail.com',01765298484);
insert into Employee values(004,'GITA','COMILLA',9000,'56@gmail.com',01765298485);
insert into Employee values(005,'MITA','SYLHET',10000,'67@gmail.com',01765298486);
insert into Employee values(006,'MITU','NILPHAMARI',7000,'78@gmail.com',01765298487);
insert into Employee values(007,'HAWA','NARAYANGANJ',10000,'89@gmail.com',01765298488);
insert into Employee values(008,'LABONNO','DINAJPUR',10000,'91@gmail.com',01765298489);
insert into Employee values(009,'NABILA','TETULIA',5000,'92@gmail.com',01765298480);
insert into Employee values(010,'OISHI','KHULNA',6000,'93@gmail.com',01765298471);
insert into Employee values(011,'MUMU','DHAKA',7000,'71@gmail.com',01765298472);
insert into Employee values(012,'UMA','DHAKA',9000,'56@gmail.com',01765298473);
insert into Employee values(013,'SUFIA','RAJSHAHI',10000,'29@gmail.com',01765298474);
insert into Employee values(014,'RODELA','TETULIA',5000,'11@gmail.com',01765298180);
insert into Employee values(015,'MAISHA','KHULNA',6000,'22@gmail.com',01765293471);
insert into Employee values(016,'LABIBA','DHAKA',7000,'33@gmail.com',01735298472);
insert into Employee values(017,'JEBA','DHAKA',9000,'51@gmail.com',01764298473);
insert into Employee values(018,'MITHILA','RAJSHAHI',10000,'77@gmail.com',01765398474);
insert into HomeCraftCollector values(10,000);
insert into HomeCraftCollector values(20,001);
insert into HomeCraftCollector values(30,002);
insert into craft_buyer values('KHOKA',1212,1000);
insert into craft_buyer values('BABY',1313,1000);
insert into craft_buyer values('KHEYA',1414,1000);
insert into craft_buyer values('SIAM',1515,1000);
insert into craft_seller values(003,1000);
insert into craft_seller values(004,1000);
insert into craft_seller values(005,1000);
insert into craft_seller values(006,1000);
insert into craft_maker values('REDE','DHAKA',10100,700,01324567890);
insert into craft_maker values('REDEE','DHAKA',10111,500,01324567810);
insert into craft_maker values('RED','DHAKA',10113,600,01324567890);
insert into craft_maker values('RE','DHAKA',10114,400,01324567810);
insert into collector_maker values(000,10100);
insert into collector_maker values(000,10111);
insert into collector_maker values(001,10113);
insert into collector_maker values(002,10113);
insert into seller_buyer values(003,1212);
insert into seller_buyer values(004,1212);
insert into seller_buyer values(005,1414);
insert into seller_buyer values(005,1515);
insert into collector_seller values(000,003);
insert into collector_seller values(000,004);
insert into collector_seller values(001,005);
insert into collector_seller values(002,005);
insert into craft values(1111,'SOKHER_PUTUL',10100,003,000,1212);
insert into craft values(2222,'MATIR_PUTUL',10113,005,001,1515);
insert into trainee values(0123474587,500,323232,'Payel');
insert into trainee values(1123474587,800,323233,'nafisa');
insert into WeavingTrainer values(007);
insert into WeavingTrainer values(008);
insert into WeavingTrainer values(009);
insert into weaving values(323232,007);
insert into weaving values(323232,008);
insert into weaving values(323233,009);
insert into primaryTeacher values(010);
insert into primaryTeacher values(011);
insert into WomenStudent values(10101,'LISA',20000);
insert into WomenStudent values(20202,'JISOO',30000);
insert into education values(010,10101);
insert into education values(010,20202);
insert into education values(011,20202);
insert into loan_taker values(34560,10000,5000);
insert into loan_taker values(34561,20000,7000);
insert into loan_collector values(014);
insert into loan_collector values(015);
insert into loan_provider values(016);
insert into loan_provider values(017);
insert into loanTakerCollector(34560,014);
insert into loanTakerCollector(34561,014);
insert into loanTakerProvider(34560,016);
insert into loanTakerProvider(34561,016);
