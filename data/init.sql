CREATE DATABASE sessions_lab_db;

use sessions_lab_db;

CREATE TABLE Member(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL
);

/*Sample members for testing*/
INSERT INTO member(username, password) VALUES ("testuser4", "asdfg");
INSERT INTO member(username, password) VALUES ("fintan33", "asdf");
INSERT INTO member(username, password) VALUES ("EPICfortniteGAMER", "cooldude44");