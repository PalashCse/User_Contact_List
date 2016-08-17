-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2016 at 11:20 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sign_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `registraion`
--

CREATE TABLE IF NOT EXISTS `registraion` (
`st_id` int(11) NOT NULL,
  `fastname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `session` varchar(10) DEFAULT NULL,
  `roll` int(15) DEFAULT NULL,
  `subj` varchar(100) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `image_name` varchar(64) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `registraion`
--

INSERT INTO `registraion` (`st_id`, `fastname`, `lastname`, `email`, `session`, `roll`, `subj`, `pass`, `type`, `image_name`) VALUES
(24, 'arman', 'ali', 's@gmail.com', '2011-12', 110241, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(25, 'hafiz', 'rahmn', 'd@gmail.com', '2014-15', 22003, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(26, 'Ashikur', 'Rahman', 'ku.sumon.cse@gmail.com', '2011-12', 110245, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '2', 'upload/fb1.png'),
(27, 'avi', 'srd', 'vj@gmail.com', '2011-12', 1102000, 'CS', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(28, 'palash', 'sharkar', 'p@gmail.com', '2014-15', 10202, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(29, 'mahfuz', 'khan', 'k@gmail.com', '2012-13', 1010101, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(30, 'abm', 'muhit', 'm@gmail.com', '2012-13', 1000, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(31, 'aminul', 'islam', 'i@gmail.com', '2011-12', 110231, 'CSe', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(33, 'Shaikh', 'Arman', 'Arman@gmail.com', '2015-16', 110241, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(35, 'ashik', 'sm', 'sm@gmail.com', '2121', 2121, 'kkkk', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(36, 'rubel', 'moon', 'moon@gmail.com', '000', 12121, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(37, 'anondo', 'mohon', 'mohon@gmail.com', '2015-16', 110201, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(39, 'mostafiz', 'faisal', 'f@gmail.com', '2015-16', 30000, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(52, 'shuvro', 'sharkar', 'shuvro@gmail.com', '2011-12', 110210, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(53, 'abm', 'hasan', 'abm@gmail.com', '2011-12', 110210, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(55, 'ryhan', 'frd', 'frd@gmail.com', '2011-12', 110214, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(57, 'ferdous', 'bd', 'ferdousrayhan@gmail.com', '2012-13', 110214, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(58, 'ryhanul', 'kabir', 'kabir@gmail.com', '2013-14', 110214, 'CSE', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(59, 'shuvro', 'sharkar', 'shuvrop@gmail.com', '2011-12', 110210, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(60, 'shuvro', 'saifullah', 'saifullah10@gmail.com', '2013-14', 110210, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(64, 'abm', 'hasan', 'hasan@gmail.com', '2011-12', 110210, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/128.png'),
(71, 'Rayhan', 'rian', 'rian@gmail.com', '2012-13', 112121, 'cse', 'c6f057b86584942e415435ffb1fa93d4', '', 'upload/myProf.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
`user_id` int(11) NOT NULL,
  `st_contact_id` int(11) NOT NULL,
  `firststname` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_date` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image_name` varchar(15) NOT NULL,
  `rel_status` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tbl_contact' AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`user_id`, `st_contact_id`, `firststname`, `lastname`, `address`, `email`, `contact_date`, `phone`, `image_name`, `rel_status`) VALUES
(17, 58, 'MD', 'Shakil Shaikh', 'Nirala R/A, House # 3 (2nd Floor), Rd 2, Khulna 9100, Bangladesh', 'Shakil@yahoo.com', '2016-05-19', '017-5296-9287', ' upload/128.png', ''),
(18, 23, 'MD', 'Shakil Shaikh', 'Nirala R/A, House # 3 (2nd Floor), Rd 2, Khulna 9100, Bangladesh', 'Shakil@yahoo.com', '2016-05-19', '017-5296-9287', 'upload/128.png', ''),
(19, 33, 'MD', 'Al Ferdous Ahmed', 'Nirala R/A, House # 3 (2nd Floor), Rd 2, Khulna 9100, Bangladesh', 'Shakil@yahoo.com', '2016-05-19', '017-5296-3280', 'upload/128.png', ''),
(20, 33, 'MD', 'Shakil Shaikh', 'Nirala R/A, House # 3 (2nd Floor), Rd 2, Khulna 9100, Bangladesh', 'Shakil@yahoo.com', '2016-05-19', '017-5296-3280', 'upload/128.png', ''),
(21, 33, 'ABM', 'Muhitur', 'Khan Jahan Ali Hall, Kulna University, Khulna-9208,Bangladesh', 'ABM@gmail.com', '2016-05-18', '017-5296-9287', ' upload/128.png', ''),
(22, 58, 'Rayhan', 'Ferdous', 'khanjahan Ali Hall,Khulna University, Khulna ', 'rayhan11@gmail.com', '2016-05-21', '017-5296-9287', ' upload/128.png', ' 11 Batch '),
(23, 58, 'ABM', 'Muhitur', 'khanjahan Ali Hall,Khulna University, Khulna', 'abm11@gmail.com', '2016-05-21', '017-5296-9287', ' upload/128.png', ' 11 Batch '),
(24, 58, 'Mafuz', 'Khan', 'khanjahan Ali Hall,Khulna University, Khulna', 'khan11@gmail.com', '2016-05-21', '017-5296-9287', ' upload/128.png', ' 11 Batch '),
(25, 58, 'Shaikh', 'Arman', 'khanjahan Ali Hall,Khulna University, Khulna', 'arman11@gmail.com', '2016-05-21', '017-5296-9287', ' upload/128.png', ' 11 Batch '),
(26, 58, 'Mostafizur', 'Rahman', 'Bagerhat,Khulna', 'rm@gmail.com', '2016-05-21', '017-5296-9287', ' upload/128.png', ' Family '),
(27, 33, 'Raihan', 'Rian', 'khanjahan Ali Hall,Khulna University, Khulna', 'rian46@gmail.com', '2016-05-23', '017-5296-9009', ' upload/128.png', ' 11 Batch '),
(28, 33, 'Shaikh', 'Arman', 'k.J Hall, Khulna University, Khulna, Bangladesh', 'armanali11@gmail.com', '2016-05-25', '017-5296-6925', ' upload/128.png', ' 11 Batch '),
(29, 33, 'Palash', 'Sharkar', 'k.J Hall, Khulna University, Khulna, Bangladesh', 'sarkar11@gmail.com', '2016-05-25', '017-5296-6900', ' upload/128.png', ' 11 Batch '),
(30, 33, 'Goutom', 'Roy', 'KUMC, Khulna University, Khulna, Bangladesh', 'groy@gmail.com', '2016-05-25', '017-5296-6901', ' upload/128.png', ' doctor '),
(31, 33, 'Mahfuzur Rahman', 'Khan', 'k.J Hall, Khulna University, Khulna, Bangladesh', 'mrkhan11@gmail.com', '2016-05-25', '017-5296-6944', ' upload/128.png', ' 11 Batch '),
(32, 33, 'Muhitur', 'Rahman', 'k.J Hall, Khulna University, Khulna, Bangladesh', 'mrhm11@gmail.com', '2016-05-25', '017-5296-6904', ' upload/128.png', ' 11 Batch '),
(33, 33, 'Dilruba', 'Bulbul', 'KUMC, Khulna University, Khulna, Bangladesh', 'dbl@gmail.com', '2016-05-25', '017-5296-6901', ' upload/128.png', ' doctor ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_type`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_type` (
`rel_type_id` int(11) NOT NULL,
  `rel_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `st_contact_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_contact_type`
--

INSERT INTO `tbl_contact_type` (`rel_type_id`, `rel_name`, `st_contact_id`) VALUES
(38, 'doctor', 33),
(42, '11 Batch', 33),
(43, 'doctor', 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registraion`
--
ALTER TABLE `registraion`
 ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_contact_type`
--
ALTER TABLE `tbl_contact_type`
 ADD PRIMARY KEY (`rel_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registraion`
--
ALTER TABLE `registraion`
MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_contact_type`
--
ALTER TABLE `tbl_contact_type`
MODIFY `rel_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
