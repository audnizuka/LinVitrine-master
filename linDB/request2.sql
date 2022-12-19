CREATE DATABASE LinDB;

CREATE TABLE Contact(
ContactID INT,
Fullname VARCHAR(255),
Tel VARCHAR(20),
Mail VARCHAR(255),
Message VARCHAR(1000)
);
CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL
);