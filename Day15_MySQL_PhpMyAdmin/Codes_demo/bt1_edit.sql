SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS salaries;
CREATE TABLE salaries(
   emp_no  INT(10) NOT NULL AUTO_INCREMENT,
   salary  INT(11) NOT NULL,
   from_date  DATE NULL,
   to_date  DATE NULL,
  PRIMARY KEY (emp_no,from_date) using BTREE
)ENGINE = InnoDB;
DROP TABLE  IF EXISTS  titles ;
CREATE TABLE  titles (
   emp_no  INT(10) NOT NULL AUTO_INCREMENT,
   title  VARCHAR(50) NULL,
   from_date  DATE NULL,
   to_date  DATE NULL,
  PRIMARY KEY(emp_no,title,from_date) using BTREE
)ENGINE = InnoDB;
drop table if exists employees ;
CREATE TABLE employees(
   emp_no  INT(10) NOT NULL AUTO_INCREMENT,
   birth_date  DATE NULL,
   first_name  VARCHAR(14) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
   last_name  VARCHAR(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
   gender  INT(10) NOT NULL,
   hire_date  DATE NULL,
  PRIMARY KEY(emp_no) using BTREE
)ENGINE = InnoDB;
drop table if exists  dept_manager ;
CREATE TABLE  dept_manager (
   dept_no  CHAR(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
   emp_no  INT(10) NOT NULL AUTO_INCREMENT,
   form_date  DATE NULL,
   to_date  DATE NULL,
  PRIMARY KEY (emp_no)
)ENGINE = InnoDB;
drop table if exists  dept_emp ;
CREATE TABLE  dept_emp (
   emp_no  INT(10) NOT NULL AUTO_INCREMENT,
   dept_no  CHAR(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
   form_date  DATE NULL,
   to_date  DATE NULL,
  PRIMARY KEY (emp_no) using BTREE
)ENGINE = InnoDB;
drop table if exists  departments ;
CREATE TABLE  departments (
   dept_no  CHAR(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
   dept_name  VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (dept_no) using BTREE
)ENGINE = InnoDB;
set FOREIGN_KEY_CHECKS=1;