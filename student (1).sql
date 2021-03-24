-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 12:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intern`
--

CREATE TABLE `tbl_intern` (
  `id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `aadhar_no` varchar(15) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `alternaet_no` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `collage_name` varchar(200) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_intern`
--

INSERT INTO `tbl_intern` (`id`, `created_date`, `first_name`, `last_name`, `email`, `aadhar_no`, `mobile_no`, `alternaet_no`, `gender`, `date_of_birth`, `collage_name`, `degree`, `stream`, `year`, `city`, `address`, `img`) VALUES
(1, '2020-07-15 08:14:03', 'sonali', 'rangari', 'sonali@gmail.com', '123511235253', '8593268588', '', 'Female', '', 'rgcer', 'BE', 'CTech', 'IV Year', 'nagpur', 'nagpur', ''),
(2, '2020-07-15 04:26:26', '$first_name', '$last_name', '$email', '$aadhar_no', '$mobile_no', '$alternaet_no', '$gender', '$dob', '$collage_name', '$degree', '$stream', '$year', '$city', '$address', '$img'),
(3, '2020-07-15 05:00:29', 'sonali', 'rangari', 'sonali@gmail.com', '123511235253', '8593268588', '', 'Female', '01-01-1970', 'rgcer', 'BE', 'CTech', 'IV Year', 'nagpur', 'jaitala nagpur', ''),
(4, '2020-07-15 05:00:36', 'teffg', 'ss', 'a@g.vom', '111111111111', '6757755756', '', 'Male', '01-01-1970', 'zz', 'Diploma', 'CTech', 'I Year', 'sds', 'Andheri', ''),
(5, '2020-07-15 05:00:39', '', '', '', '', '', '', '', '01-01-1970', '', '', '', '', '', '', ''),
(6, '2020-07-15 05:00:45', 'aa', 'aa', 'dd@g.vom', '124566544444', '2233556666', '', 'Male', '10-07-2020', 'yy', 'Btech', 'CTech', 'II Year', 'rt', 'Andheri', ''),
(9, '2020-07-15 05:06:08', 'as', 'aa', 'aaa@g.com', '122333324444', '3232322233', '', 'Male', '08-08-2020', '32323dsdd', 'MCA', 'CTech', 'III Year', 'ee', 'ww', '6.jpg'),
(10, '2020-07-15 05:09:16', 'sonali', 'rangari', 'as@gmail.com', '123456789012', '2589631458', '1234567890', 'Male', '08-08-2020', 'rgcer', 'BE', 'CTech', 'II Year', 'sds', 'Andheri', '9.jpg'),
(11, '2020-07-15 05:15:56', 'nikhi', 'mate', 'nm@g.com', '123456789302', '6336336333', '5555655566', 'Male', '01-01-1970', 'amt', 'Mtech', 'ETC', 'IV Year', 'sds', 'Andheri', 'img_avatar.png'),
(12, '2020-07-15 05:18:15', 'ee', 'ss', 's@g.com', 'qqs111111111', '1233333333', '4544555555', 'Male', '11-07-2020', '5445fgfgfggf', 'Mtech', 'IT', 'III Year', 'ffd', 'gffg', '14.jpg'),
(13, '2020-07-15 06:06:42', 'payal', 'gourkhede', 'p@g.com', '123123552999', '2562359632', '2225663355', 'Female', '17-10-2018', 'raisoni', 'Mtech', 'CSE', 'III Year', 'pune', 'amar nagar', 'images (1).jpg'),
(14, '2020-07-15 07:31:24', 'ss', 'ssd', 'da@g.com', '2525 2525 2525', '8585858585', '', 'Male', '16-07-2020', 'dsd', 'BSC', 'IT', 'II Year', 'sds', 'Andheri', '14.jpg'),
(15, '2020-07-15 07:36:52', 'monika ', 'mote', 'd2@g.com', '414447444444', '8585855858', '', 'Male', '11-07-2020', 'ss', 'BSC', 'CTech', 'II Year', 'sds', 'Andheri', '5.jpg'),
(16, '2020-07-15 07:41:31', 'teffg', 'ssa', 's@g.com', '1255 5555 5555', '5252895858', '', 'Female', '29-07-2020', 'sas', 'BE', 'IT', 'II Year', 'sds', 'Andheri', '11.jpg'),
(17, '2020-07-15 07:46:28', 'Sarika', 'Rangari', 's@gmail.com', '1258 2555 5555', '8546141123', '2255585855', 'Female', '09-07-2020', 'LAD ', 'BSC', 'IT', 'II Year', 'pune', 'pune', 'img_avatar2.png'),
(18, '2020-07-15 07:51:27', 'teffg', 'aa', 'yh@g.in', '2525 5255 5555', '8558555555', '', 'Male', '09-07-2020', 'fggfg', 'BCA', 'IT', 'II Year', 'sds', 'Andheri', 'images (5).jpg'),
(19, '2020-07-15 08:37:07', 'sonali ', 'rangari', 's@g.com', '1255 5555 5555', '8585855555', '', 'Female', '24-07-2020', 'rgcer', 'BE', 'CTech', 'III Year', 'nagpur', 'pune', 'Mobile.jpg'),
(20, '2020-07-15 09:31:40', 'Divya ', 'pande', 'd@g.com', '9988 8998 8899', '3216547893', '', 'Female', '07-05-2021', 'Mokhare collage', 'BCA', 'E&TC', 'III Year', 'Kolkata', 'plot no 77,hingna,kolkata', 'web.jpg'),
(21, '2020-07-15 12:30:34', 'ss', 'assa', 's@g.com', '2225 5555 5555', '5555555555', '', 'Female', '09-07-2020', 'ssssa', 'BSC', 'IT', 'II Year', 'sds', 'Andheri', '2020-07-15-14 _ .png'),
(28, '2020-07-17 10:06:57', 'abcd', 'abcd', 'abcd@g.com', '2528 5586 5525', '3333333333', '', 'Female', '18-07-2020', 'ddsssdds', 'BCA', 'CTech', 'II Year', 'dsdssd', 'abcd', '17-07-2020-12:06 _ .png'),
(29, '2020-07-17 10:24:45', 'dd', 'dd', 'd@g.com', '5252 5252 5552', '5555555555', '', 'Female', '17-07-2020', 'fdfdff', 'BSC', 'IT', 'III Year', 'sds', 'Andheri', '17-07-2020-12 _ .png'),
(30, '2020-07-17 10:33:05', 'ss', 'ss', 's@g.com', '5252 5255 2633', '8888888888', '', 'Female', '10-07-2020', 'sdddds', 'BSC', 'CTech', 'IV Year', 'sds', 'Andheri', 'id-8888888888_1594332000.png'),
(31, '2020-07-17 10:41:15', 'Rahul ', 'Motwani', 'rahul@gmail.com', '2552 5569 9632', '9653854655', '6569665566', 'Male', '24-06-2015', 'YCCE', 'Mtech', 'E&TC', 'IV Year', 'Pune', 'Pune', 'id-9653854655_24-06-2015.png'),
(32, '2020-07-18 07:44:34', 'Test', 'Test', 'test@gmail.com', '8888 0000 9999', '9090909090', '', 'Female', '31-07-2020', 'Test   ', 'MCA', 'CSE', 'IV Year', 'test', 'test', 'id-9090909090_31-07-2020.png'),
(33, '2020-07-18 07:49:30', 'aa', 'aa', 's@g.com', '8585 9696 5885', '8585555252', '', 'Male', '23-07-2020', 'sss', 'MCA', 'CSE', 'Completed', 'sds', 'Andheri', 'id-8585555252_23-07-2020.png'),
(34, '2020-07-18 07:55:15', 'tt', 'tt', 'tt@gmail.com', '4444 6666 8888', '6767676767', '', 'Female', '18-07-2020', 'test', 'BSC', 'ETC', 'III Year', 'teeeeeeeeees', 'tetretretre', 'id-6767676767_18-07-2020.png'),
(35, '2020-07-20 05:00:30', 'ss', 'ss', 'ss@g.com', '8585 8585 5558', '8554258965', '', 'Male', '25-07-2020', 'ffdfd', 'BCA', 'CSE', 'IV Year', 'ffdfd', 'dffdfdfddsaa', 'id-8554258965_25-07-2020.png'),
(36, '2020-07-20 05:47:47', 'aaa', 'sss', 'as@gmail.com', '8588 8585 6523', '5565585655', '9659858558', 'Female', '25-07-2020', 'dfdfdfdf', 'BSC', 'ETC', 'Completed', 'sss', 'ssssss', 'id-5565585655_25-07-2020.png'),
(37, '2020-07-20 06:29:41', 'test aa', 'ss', 'assddd@g.com', '4552 5555 6666', '8575555566', '7448555555', 'Male', '24-07-2020', 'rgcer', 'MSC', 'E&TC', 'Completed', 'ddd', 'sssss', 'id-8575555566_24-07-2020.png'),
(38, '2020-07-20 07:25:15', 'ddd', 'ddds', 'dds@g.com', '2212 3233 7777', '5563443254', '2298000788', 'Female', '20-07-2020', 'fggggggfd', 'BCA', 'CSE', 'IV Year', 'sds', 'Andheri', 'id-5563443254_20-07-2020.png'),
(39, '2020-07-23 10:02:50', 'teffg', 'ffd', 'fd@g.com', '5252 5558 5255', '3233333333', '', 'Male', '25-07-2020', 'ewew', 'BCA', 'IT', 'III Year', 'sds', 'Andheri', 'id-3233333333_25-07-2020.png'),
(40, '2020-07-30 06:25:08', 'teffg', 'sssa', 's@g.com', '1111 1111 1211', '3333333333', '', 'Female', '30-07-2020', 'ddd', 'Diploma', 'CTech', 'I Year', 'sds', 'Andheri', 'id-3333333333_30-07-2020.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'Admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_registration`
--

CREATE TABLE `tbl_student_registration` (
  `stud_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `collage_name` varchar(200) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_registration`
--

INSERT INTO `tbl_student_registration` (`stud_id`, `created_date`, `first_name`, `last_name`, `email`, `mobile_no`, `gender`, `collage_name`, `degree`, `stream`, `year`, `city`, `address`) VALUES
(1, '2020-07-04 11:22:28', 'abcd', 'pqr', 'abcd@gamil.com', '8596321478', 'male', 'ycce', 'be', 'cse', '4th', 'nagpur', 'If your integrated webcam is not working due to Windows 10 update, the problem is likely to be caused by faulty drivers or driver conflicts. ... First, go to Device Manager and see if there is a yellow mark next to the webcam device. '),
(2, '2020-07-04 12:04:10', '$first_name', '$last_name', '$email', '$mobile_no', '$gender', '$collage_name', '$degree', '$stream', '$year', '$city', '$address'),
(3, '2020-07-04 12:04:22', '', '', 'JAITALA,NAGPUR', '', 'on', '', '', '', '', 'IV Year', 'RGCER'),
(4, '2020-07-04 12:07:00', '', '', 'DSDFDDF', '', 'on', '', '', '', '', 'III Year', 'SDDDD'),
(5, '2020-07-04 12:15:13', '', '', 'ssdsdsdsd', '', 'on', '', 'Diploma', 'CSE', 'II Year', '', 'sdsdds'),
(6, '2020-07-04 12:22:22', '', '', 'ssdsdsdsd', '', 'on', '', 'Diploma', 'CSE', 'II Year', '', 'sdsdds'),
(7, '2020-07-04 12:23:03', 'teffg', 'jsjjdd', 'mt@gmail.com', '8778458556', 'on', '', 'Diploma', 'CSE', 'II Year', 'sdsfdcsdsds', 'sddssdsd'),
(8, '2020-07-04 12:25:20', 'Sonali', 'Rangari', 'sonali@gmail.com', '45825858958', 'on', 'rgcer', 'BE', 'CSE', 'IV Year', 'nagpur', 'Nagpur'),
(9, '2020-07-04 12:28:18', 'Armaan', 'Shukla', 'armaan@gmail.com', '8228458556', 'on', 'ycce', 'BSC', 'CTech', 'II Year', 'pune', 'pune'),
(10, '2020-07-04 12:30:43', 'abcd', 'pqr', 'mt@gmail.com', '8778458556', 'Male', 'ycce', 'Diploma', 'IT', 'I Year', 'nagpur', 'pune'),
(11, '2020-07-04 12:36:27', 'swati', 'gedam', 'swati@gmail.com', '87594525826', 'Female', 'priydeshani', 'BE', 'CTech', 'IV Year', 'mumbai', 'mumbai'),
(12, '2020-07-04 13:37:54', 't', 't', 'a@g.com', '6767676767', '', 'yuyu  hgfhg', 'BCA', 'IT', 'I Year', 'tesyt vbv', 'test 6767 vbhgfhgf '),
(13, '2020-07-04 13:49:38', 'sonali', 'rangari', 'sonali@gmail.com', '9632584755', 'Female', 'RGCER', 'BE', 'CTech', 'IV Year', 'NAGPUR', 'NAGPUR'),
(14, '2020-07-04 14:08:33', 'ssd', 'ssd', 'a@g.com', '5521455652', 'Male', 'aass', 'BSC', 'CTech', 'III Year', 'vfvfd', 'dsdd'),
(15, '2020-07-05 06:05:07', 'test', 'test', 'test@gmail.com', '9090909090', 'Female', 'test', 'BSC', 'IT', 'II Year', 'test', 'test'),
(16, '2020-07-05 06:19:09', 'tests', 'tests', 'tes@gmail.com', '9090909090', 'Female', 'test', 'BE', '', 'II Year', 'test', 'tese'),
(17, '2020-07-05 06:21:06', 'tesrr', 'testrr', 'tesrr@gmail.com', '0909090909', 'Female', 'test', 'BSC', 'IT', 'III Year', 'testyuyu', 'tejkjk'),
(18, '2020-07-05 07:00:32', 'rizwan', 'farah', 'rf@gmail.com', '9090909090', 'Female', 'test', 'BSC', 'CTech', 'II Year', 'nagpur', 'nagpur'),
(19, '2020-07-05 07:07:35', 'rr', 'f', 'rff@gmail.com', '0909090909', 'Female', 'test', 'BE', 'CTech', 'II Year', 'tes', 'test'),
(20, '2020-07-06 09:36:13', 'teffg', 'wds', 'dssds@g.vom', '1212121111', 'Male', 'frfdf', 'Diploma', 'CSE', 'I Year', 'sds', 'Andheri'),
(21, '2020-07-06 10:45:38', 'sonali', 'Rangari', 'sonali@gmail.com', '8592658545', 'Female', 'SDMP', 'Diploma', 'CTech', 'III Year', 'pune', 'jaitala,nagpur'),
(22, '2020-07-06 10:50:17', 'Nikhli', 'Shukla', 'nm@gamil.com', '8524188855', 'Male', 'YCCE', 'Mtech', 'IT', 'IV Year', 'AMRAVATI', 'AMRAVATI'),
(23, '2020-07-06 10:55:36', 'Saket ', 'Pkhale', 'SP@gmail.com', '7854885588', 'Male', 'RGCER', 'BE', 'CTech', 'II Year', 'MUMBAI', 'MUMBAI'),
(24, '2020-07-10 12:50:02', 'teffg', 'dsdds', 'a@g.com', '2555555555', 'Female', 'efrd', 'Diploma', 'CSE', 'I Year', 'sds', 'Andheri'),
(25, '2020-07-10 13:01:55', 'tefhfgghgggg', 'gfhhhh', 's@g.com', '5555555555', 'Male', 'jkhjhjh', 'BCA', 'CTech', 'III Year', 'sds', 'Andheri'),
(26, '2020-07-15 05:21:42', 'so', 'aa', 'a@g.com', '2222222222', 'Male', 'ssassasaaas', 'BE', 'CTech', 'I Year', 'ssa', '<jkhdj>'),
(27, '2020-07-15 05:25:04', 'aa', 'aa', 's@g.com', '2589665558', 'Female', 'ffdf', 'MCA', 'IT', 'II Year', 'fdfd', '<///kfjkfd?>'),
(28, '2020-07-15 05:27:31', 'aa', 'aa', 'a@g.com', '2562255556', 'Male', 'ss', 'Btech', 'CTech', 'I Year', 'ss', '<jddsdsds>'),
(29, '2020-07-15 05:31:07', 'ffdf', 'ffdf', 'f@g.com', '2222222222', 'Male', 'fgfg', 'BE', 'CSE', 'II Year', 'sds', '<kjdk></hjdhd>'),
(30, '2020-07-15 05:34:11', 'teffg', 'ffdfd', 's@g.com', '5255555555', 'Male', 'sss', 'BE', 'CSE', 'I Year', 'sds', 'Andheri<///kkj>'),
(31, '2020-07-15 05:39:58', 'sss', 'sss', 'd@g.com', '7888888888', 'Male', 'rre', 'BE', 'IT', 'I Year', 'rere', '<hjkjkdfjkhjf></jfh>'),
(32, '2020-07-15 05:42:06', 'sss', 'sss', 'd@g.com', '7888888888', 'Male', 'rre', 'BE', 'IT', 'I Year', 'rere', '<hjkjkdfjkhjf></jfh>'),
(33, '2020-07-15 05:43:38', 'kllk', 'ff', 'fd@g.com', '8888888888', 'Female', 'ffdf', 'BE', 'CTech', 'II Year', 'sds', 'nagpur'),
(34, '2020-07-20 05:04:28', 'as', 'as', 'sa@g.com', '7455545455', 'Male', 'asdaas', 'Btech', 'CSE', 'I Year', 'ssd', 'asasadfff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_intern`
--
ALTER TABLE `tbl_intern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_registration`
--
ALTER TABLE `tbl_student_registration`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_intern`
--
ALTER TABLE `tbl_intern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_student_registration`
--
ALTER TABLE `tbl_student_registration`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
