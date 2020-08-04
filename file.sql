create table stud_school (
	sno char(11) not null,
	dept_name varchar(20) not null,
	specialty varchar(20) not null,
	class varchar(20) not null,
	dormitory varchar(20) not null,
	primary key(sno)
);

create table student_log (
	sno char(11) not null,
	password varchar(20) not null default '123456',
	primary key(sno),
	foreign key(sno) references stud_school(sno)
);

create table stud_info (
	sno char(11) not null,
	sname varchar(20) not null,
	ssex varchar(2) not null,
	birth date not null,
	native_place varchar(20) not null,
	political_status varchar(20) not null,
	phone varchar(20) not null,
	email varchar(40) not null,
	pic varchar(100) not null,
	primary key(sno),
	foreign key(sno) references stud_school(sno)
);

create table course (
	cno varchar(20) not null,
	cname varchar(20) not null,
	credit int not null,
	primary key(cno)
);

create table sc (
	sno char(11) not null,
	cno varchar(20) not null,
	score int,
	primary key(sno, cno),
	foreign key(sno) references stud_school(sno),
	foreign key(cno) references course(cno)
);
create table assess (
	asno int(10) not null auto_increment,
    sno char(11) not null,
	assess_name varchar(20) not null,
	date date not null,
	detail varchar(100),
	primary key(asno),
	foreign key(sno) references stud_school(sno)
);
create table award (
	awno int(10) not null auto_increment,
    sno char(11) not null,
	aname varchar(20) not null,
	date date not null,
	detail varchar(100),
	primary key(awno),
	foreign key(sno) references stud_school(sno)
);

create table punishment (
	pno int(10) not null auto_increment,
    sno char(11) not null,
	pname varchar(20) not null,
	result varchar(20) not null,
	date date not null,
	detail varchar(100),
	primary key(pno),
	foreign key(sno) references stud_school(sno)
);

create table status_change (
	changeno int(10) not null auto_increment,
    sno char(11) not null,
	change_name varchar(20) not null,
	date date not null,
	detail varchar(100),
	primary key(changeno),
	foreign key(sno) references stud_school(sno)
);

create table otherfile (
	ono int(10) not null auto_increment,
    sno char(11) not null,
	oname varchar(20) not null,
	date date not null,
	detail varchar(100),
	primary key(ono),
	foreign key(sno) references stud_school(sno)
);

create table stud_purview (
	sno char(11) not null,
	setinfo bit not null,
	setassess bit not null,
	seeotherfile bit not null,
	primary key(sno),
	foreign key(sno) references stud_school(sno)
);


create table manager (
	mno char(9) not null,
	mname varchar(20) not null,
	msex char not null,
	phone varchar(20) not null,
	email varchar(20) not null,
	primary key(mno)
);

create table manager_log (
	mno char(9) not null,
	password varchar(20) not null,
	primary key(mno),
	foreign key(mno) references manager(mno)
);