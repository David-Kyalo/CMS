CREATE TABLE `apartment_details` (
  `BLOCK` varchar(5) NOT NULL,
  `APT_NUM` varchar(5) NOT NULL,
  `BHK` int(11) DEFAULT NULL
);

INSERT INTO `apartment_details` (`BLOCK`, `APT_NUM`, `BHK`) VALUES
('A-1', '001', 3),
('A-1', '002', 3),
('A-1', '003', 3),
('A-1', '101', 3),
('A-1', '102', 3),
('A-1', '103', 3),
('A-1', '201', 3),
('A-1', '202', 3),
('A-1', '203', 3),
('A-2', '001', 3),
('A-2', '002', 3),
('A-2', '003', 3),
('A-2', '101', 3),
('A-2', '102', 3),
('A-2', '103', 3),
('A-2', '201', 3),
('A-2', '202', 3),
('A-2', '203', 3),
('A-3', '001', 3),
('A-3', '002', 3),
('A-3', '003', 3),
('A-3', '101', 3),
('A-3', '102', 3),
('A-3', '103', 3),
('A-3', '201', 3),
('A-3', '202', 3),
('A-3', '203', 3),
('B-1', '001', 4),
('B-1', '002', 4),
('B-1', '003', 4),
('B-1', '101', 4),
('B-1', '102', 4),
('B-1', '103', 4),
('B-1', '201', 4),
('B-1', '202', 4),
('B-1', '203', 4),
('B-2', '001', 4),
('B-2', '002', 4),
('B-2', '003', 4),
('B-2', '101', 4),
('B-2', '102', 4),
('B-2', '103', 4),
('B-2', '201', 4),
('B-2', '202', 4),
('B-2', '203', 4),
('B-3', '001', 4),
('B-3', '002', 4),
('B-3', '003', 4),
('B-3', '101', 4),
('B-3', '102', 4),
('B-3', '103', 4),
('B-3', '201', 4),
('B-3', '202', 4),
('B-3', '203', 4),
('C-1', '001', 2),
('C-1', '002', 2),
('C-1', '003', 2),
('C-1', '101', 2),
('C-1', '102', 2),
('C-1', '103', 2),
('C-1', '201', 2),
('C-1', '202', 2),
('C-1', '203', 2),
('C-2', '001', 2),
('C-2', '002', 2),
('C-2', '003', 2),
('C-2', '101', 2),
('C-2', '102', 2),
('C-2', '103', 2),
('C-2', '201', 2),
('C-2', '202', 2),
('C-2', '203', 2),
('C-3', '001', 2),
('C-3', '002', 2),
('C-3', '003', 2),
('C-3', '101', 2),
('C-3', '102', 2),
('C-3', '103', 2),
('C-3', '201', 2),
('C-3', '202', 2),
('C-3', '203', 2);

ALTER TABLE `apartment_details`
  ADD PRIMARY KEY (`BLOCK`,`APT_NUM`);


CREATE TABLE complaints (
  CID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  APT_BLOCK varchar(5) NOT NULL,
  APT_NUM varchar(5) NOT NULL,
  NAME varchar(100) NOT NULL,
  REMAIL varchar(250) NOT NULL,
  SUBJECT varchar(15) NOT NULL,
  DESCRIPTION varchar(600) NOT NULL,
  DATE_FILED timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  STATUS varchar(15) NOT NULL
);


INSERT INTO complaints (CID, APT_BLOCK, APT_NUM, NAME, REMAIL, SUBJECT, DESCRIPTION, DATE_FILED, STATUS) VALUES
( 'A-1', '203', 'gerry', 'dictum.sapien@yahoo.edu', 'General', 'Neighbours at 003 parties late into the night.', 'SCHEDULED FOR RESOLUTION'),
( 'A-1', '003', 'Denis Herbert Sage', 'morbi.sit@outlook.net', 'General', 'Resident at 001 lies about everything.', 'NOT RESOLVED'),
( 'A-3', '201', 'Thomas Schumer', 'gravida.nunc@hotmail.com', 'Dry Repairs', 'Cement getting scraped off at multiple places.', 'SCHEDULED FOR RESOLUTION'),
( 'B-1', '002', 'Ravi Prasad', 'tellus@hotmail.couk', 'General', 'Ms. Mui has not been helpful at all. All my complaints have been turned a deaf ear to.', 'DROPPED'),
( 'B-2', '102', 'Sonia Gandhi', 'amet@outlook.org', 'Dry Repairs', 'Bedroom window broken.', 'RESOLVED'),
( 'A-1', '002', 'venus', 'et@hotmail.org', 'Drinking Water', 'No pure water supply in my apartment.', 'SCHEDULED FOR RESOLUTION'),
( 'A-1', '203', 'gerry', 'dictum.sapien@yahoo.edu', 'Drinking Water', 'No supply of drinking water', 'NOT RESOLVED'),
( 'A-1', '203', 'gerry', 'dictum.sapien@yahoo.edu', 'Wet Repairs', 'Bathroom drainage broken.', 'SCHEDULED FOR RESOLUTION'),
( 'C-1', '002', 'Ruth', 'nonummy@google.net', 'Dry Repairs', 'ABC', 'RESOLVED');


CREATE TABLE user(
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name varchar(128) NOT NULL,
  email varchar(255) UNIQUE NOT NULL,
  password_hash varchar(255) NOT NULL
);

ALTER TABLE user
  ADD `reset_token_hash` VARCHAR(64) NULL DEFAULT NULL,
  ADD `reset_token_expires_at` DATETIME NULL DEFAULT NULL,
  ADD UNIQUE (`reset_token_hash`);

CREATE TABLE contactform(
  Name varchar(128) NOT NULL,
  Email varchar(255) NOT NULL,
  Message varchar(255) NOT NULL
);


CREATE TABLE resident (
  RID int(11) NOT NULL,
  TITLE varchar(5) NOT NULL,
  FULLNAME varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  DOB varchar(15) NOT NULL,
  PHONE_NO bigint(20) NOT NULL,
  EMAIL varchar(100) NOT NULL,
  PREFERRED_BLOCK varchar(3) NOT NULL,
  PREFERRED_APT varchar(3) NOT NULL,
  REG_TIMESTAMP timestamp(6) NOT NULL,
  password_hash varchar(255) NOT NULL,
  reset_token_hash varchar(64) NULL DEFAULT NULL,
  reset_token_expires_at datetime NULL DEFAULT NULL
);

ALTER TABLE `resident`
  ADD PRIMARY KEY (`RES_ID`),
  ADD UNIQUE KEY `PREFERRED_BLOCK` (`PREFERRED_BLOCK`,`PREFERRED_APT`);

ALTER TABLE `complaints`
  ADD CONSTRAINT `Apt_Const` FOREIGN KEY (`APT_BLOCK`,`APT_NUM`) REFERENCES `resident` (`preferred_block`, `preferred_apt`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `resident`
  MODIFY `RES_ID` int(11) NOT NULL AUTO_INCREMENT;