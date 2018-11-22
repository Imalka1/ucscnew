DROP DATABASE ucsc;
CREATE DATABASE ucsc;
use ucsc;
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

CREATE TABLE `file_upload_links` (
  `LINK_ID` int(10) NOT NULL,
  `LINK_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `specializationarea` (
  `AREA_ID` int(10) NOT NULL,
  `AREA_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `specialization_areas` (
  `SPECIALIZATION_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `users` (
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `higher_educational_details` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `UNIVERSITY` varchar(200) NOT NULL,
  `FROM` varchar(10) NOT NULL,
  `TO` varchar(10) NOT NULL,
  `DEGREE_OBTAINED` varchar(200) NOT NULL,
  `DURATION` varchar(10) NOT NULL,
  `CLASS` varchar(10) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `INDEX_NO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `any_other_qualifications` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `INSTITUTION` varchar(200) NOT NULL,
  `DEPLOMA` varchar(200) NOT NULL,
  `DURAION` varchar(10) NOT NULL,
  `YEAR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `referees` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `DESIGNATION` varchar(200) NOT NULL,
  `ADDRESS` varchar(300) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `CONTACT_NO` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `specialization_area_for_applicant` (
  `APPLICANT_ID` varchar(100) NOT NULL,
  `SPECIFICATION_AREA_ID` varchar(100) NOT NULL,
  `SPECIFICATION_AREA_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `applicants`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `file_upload_links`
--
ALTER TABLE `file_upload_links`
  ADD PRIMARY KEY (`LINK_ID`);

--
-- Indexes for table `specializationarea`
--
ALTER TABLE `specializationarea`
  ADD PRIMARY KEY (`AREA_ID`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `file_upload_links`
--
ALTER TABLE `file_upload_links`
  MODIFY `LINK_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `specializationarea`
--
ALTER TABLE `specializationarea`
  MODIFY `AREA_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
  
  INSERT INTO `specializationarea` (`AREA_ID`, `AREA_NAME`) VALUES
(1, 'Software Engineering'),
(2, 'Information Systems Security,'),
(3, 'Computer Networks'),
(4, 'Grid Computing'),
(5, 'Artificial Neural Networks'),
(6, 'Human-Computer Interaction'),
(7, 'Data Science'),
(8, 'Embedded Systems'),
(9, 'Operating systems'),
(10, 'Software Verification and Quality Assurance'),
(11, 'Enterprise application\r\ndevelopment'),
(12, 'IT Project management'),
(13, 'Computer Graphics and Vision'),
(19, 'Computer Architecture & Engineering'),
(20, 'optional 5'),
(21, 'optional 7');

INSERT INTO `file_upload_links` (`LINK_ID`, `LINK_NAME`) VALUES
(9, 'scanned document 1'),
(10, 'scanned document 2'),
(11, 'scanned document 3'),
(12, 'scanned document 4'),
(13, 'scanned document 5'),
(14, 'scanned document 6');
  
  INSERT INTO `users` (`USERNAME`, `PASSWORD`, `EMAIL`) VALUES
('director', '900150983cd24fb0d6963f7d28e17f72', 'director@gmail.com'),
('operator', '900150983cd24fb0d6963f7d28e17f72', 'operator@gmail.com'),
('SAR', '900150983cd24fb0d6963f7d28e17f72', 'sar@gmail.com');

