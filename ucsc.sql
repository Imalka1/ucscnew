DROP DATABASE ucsc;
CREATE DATABASE ucsc;
CREATE TABLE `applicants` (
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `comments` (
  `COMMENT_ID` int(11) NOT NULL,
  `COMMENT_SUBJECT` varchar(250) NOT NULL,
  `COMMENT_CONTENT` text,
  `COMMENT_STATUS` int(1) NOT NULL,
  `COMMENT_TO` varchar(50) NOT NULL,
  `COMMENT_FROM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `specialization_areas` (
  `SPECIALIZATION_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `users` (
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `applicants`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `specialization_areas`
--
ALTER TABLE `specialization_areas`
  ADD PRIMARY KEY (`SPECIALIZATION_NAME`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USERNAME`);
  
  ALTER TABLE `comments`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
  
  INSERT INTO `users` (`USERNAME`, `PASSWORD`, `EMAIL`) VALUES
('director', '900150983cd24fb0d6963f7d28e17f72', 'director@gmail.com'),
('operator', '900150983cd24fb0d6963f7d28e17f72', 'operator@gmail.com'),
('SAR', '900150983cd24fb0d6963f7d28e17f72', 'sar@gmail.com');

delete from users;

select PASSWORD,USERNAME from users where USERNAME='SAR';
