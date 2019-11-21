CREATE TABLE members (
	ID int(64) unsigned AUTO_INCREMENT PRIMARY KEY NOT NULL,
    firstName VARCHAR(32) NOT NULL,
    lastName VARCHAR(32) NOT NULL,
    joinDate date NOT NULL,
    imgNum int(8) NOT NULL 
)
INSERT INTO members(firstName, lastName, joined) VALUES ('Sebastiaan', 'Landstra', '2019-11-4')