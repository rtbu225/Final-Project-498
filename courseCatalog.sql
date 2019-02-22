CREATE DATABASE courseCatalog.sql;

CREATE TABLE uky(
	collegeID          int,
	collegeName        varchar(50),
);

CREATE TABLE college(
	departmentID int,
	departmentName varchar(100),
);

CREATE TABLE department(
	classID int,
	className varchar(100),
);

CREATE TABLE class(
	professors varray(10),
	reviews varray(255),
);

CREATE TABLE review(
	interestingRate int,
	difficultyRate  int,
	professor varchar(100)
);
