CREATE TABLE info (
fname VARCHAR(25),
lname VARCHAR(25),
mname VARCHAR(1),
email VARCHAR(27),
qreader VARCHAR(10),
type VARCHAR(1),
pk_info_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
);

INSERT INTO info (fname, lname, mname, email, qreader, type) VALUES ('test-fname', 'test-lname', 'm', 'test@gmail.com', 'asdf12345', 'S');
INSERT INTO info (fname, lname, mname, email, qreader, type) VALUES ('test-fname', 'test-lname', 'm', 'test@gmail.com', 'asdf12345', 'A');

CREATE TABLE events (
name VARCHAR(6),
date DATETIME, 
cost DOUBLE,
flyer VARCHAR(255),
sponsors VARCHAR(255),
details VARCHAR(255),
student_flag VARCHAR(1),
fk_info_id INT(6),
pk_event_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
);

INSERT INTO events (name, date, cost, flyer, sponsors, details, student_flag, fk_info_id) VALUES ('event1', '2016-02-14 14:00:00', 10, 'Valentine Meetup', 'Student Affairs', 'An event to exchange valentines', 'Y', 1);
INSERT INTO events (name, date, cost, flyer, sponsors, details, student_flag, fk_info_id) VALUES ('event2', '2016-02-16 14:00:00', 10, 'Alumni Meetup', 'Alumni Affairs', 'An event for alumni networking', 'N', 2);
