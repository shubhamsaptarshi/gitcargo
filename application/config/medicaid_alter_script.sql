-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 09:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `accreditions`
--

CREATE TABLE `accreditions` (
  `accrid` int(11) NOT NULL AUTO_INCREMENT,
  `accredition` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
   PRIMARY KEY (`accrid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accreditions`
--

INSERT INTO `accreditions` (`accrid`, `accredition`, `type`, `image`) VALUES
(1, 'NABH', 'Accredition', ''),
(2, 'AIIMS', 'Accredition', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(150) NOT NULL,
  `isd_code` int(11) NOT NULL,
  `currencycode` varchar(10) NOT NULL,
  PRIMARY KEY (country_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `isd_code`, `currencycode`) VALUES
(1, 'Afghanistan', 93, 'AFN'),
(2, 'Albania', 355, 'ALL'),
(3, 'Algeria', 213, 'DZD'),
(4, 'American Samoa', 1684, 'DZD'),
(5, 'Andorra', 376, 'EUR'),
(6, 'Angola', 244, 'AOA'),
(7, 'Anguilla', 1264, 'XCD'),
(8, 'Antarctica', 0, ''),
(9, 'Antigua And Barbuda', 1268, 'XCD'),
(10, 'Argentina', 54, 'ARS'),
(11, 'Armenia', 374, 'AMD'),
(12, 'Aruba', 297, 'AWG'),
(13, 'Australia', 61, 'AUD'),
(14, 'Austria', 43, 'EUR'),
(15, 'Azerbaijan', 994, 'AZN'),
(16, 'Bahamas The', 1242, 'BSD'),
(17, 'Bahrain', 973, 'BHD'),
(18, 'Bangladesh', 880, 'BDT'),
(19, 'Barbados', 1246, 'BBD'),
(20, 'Belarus', 375, 'BYN'),
(21, 'Belgium', 32, 'EUR'),
(22, 'Belize', 501, 'BZD'),
(23, 'Benin', 229, 'XOF'),
(24, 'Bermuda', 1441, 'BMD'),
(25, 'Bhutan', 975, 'BTN / INR'),
(26, 'Bolivia', 591, ''),
(27, 'Bosnia and Herzegovina', 387, ''),
(28, 'Botswana', 267, ''),
(29, 'Bouvet Island', 0, ''),
(30, 'Brazil', 55, ''),
(31, 'British Indian Ocean Territory', 246, ''),
(32, 'Brunei', 673, ''),
(33, 'Bulgaria', 359, ''),
(34, 'Burkina Faso', 226, ''),
(35, 'Burundi', 257, ''),
(36, 'Cambodia', 855, ''),
(37, 'Cameroon', 237, ''),
(38, 'Canada', 1, 'USD'),
(39, 'Cape Verde', 238, ''),
(40, 'Cayman Islands', 1345, ''),
(41, 'Central African Republic', 236, ''),
(42, 'Chad', 235, ''),
(43, 'Chile', 56, ''),
(44, 'China', 86, ''),
(45, 'Christmas Island', 61, ''),
(46, 'Cocos (Keeling) Islands', 672, ''),
(47, 'Colombia', 57, ''),
(48, 'Comoros', 269, ''),
(49, 'Republic Of The Congo', 242, ''),
(50, 'Democratic Republic Of The Congo', 242, ''),
(51, 'Cook Islands', 682, ''),
(52, 'Costa Rica', 506, ''),
(53, 'Cote D\'Ivoire (Ivory Coast)', 225, ''),
(54, 'Croatia (Hrvatska)', 385, ''),
(55, 'Cuba', 53, ''),
(56, 'Cyprus', 357, ''),
(57, 'Czech Republic', 420, ''),
(58, 'Denmark', 45, ''),
(59, 'Djibouti', 253, ''),
(60, 'Dominica', 1767, ''),
(61, 'Dominican Republic', 1809, ''),
(62, 'East Timor', 670, ''),
(63, 'Ecuador', 593, ''),
(64, 'Egypt', 20, ''),
(65, 'El Salvador', 503, ''),
(66, 'Equatorial Guinea', 240, ''),
(67, 'Eritrea', 291, ''),
(68, 'Estonia', 372, ''),
(69, 'Ethiopia', 251, ''),
(70, 'External Territories of Australia', 61, ''),
(71, 'Falkland Islands', 500, ''),
(72, 'Faroe Islands', 298, ''),
(73, 'Fiji Islands', 679, ''),
(74, 'Finland', 358, ''),
(75, 'France', 33, ''),
(76, 'French Guiana', 594, ''),
(77, 'French Polynesia', 689, ''),
(78, 'French Southern Territories', 0, ''),
(79, 'Gabon', 241, ''),
(80, 'Gambia The', 220, ''),
(81, 'Georgia', 995, ''),
(82, 'Germany', 49, ''),
(83, 'Ghana', 233, ''),
(84, 'Gibraltar', 350, ''),
(85, 'Greece', 30, ''),
(86, 'Greenland', 299, ''),
(87, 'Grenada', 1473, ''),
(88, 'Guadeloupe', 590, ''),
(89, 'Guam', 1671, ''),
(90, 'Guatemala', 502, ''),
(91, 'Guernsey and Alderney', 44, ''),
(92, 'Guinea', 224, ''),
(93, 'Guinea-Bissau', 245, ''),
(94, 'Guyana', 592, ''),
(95, 'Haiti', 509, ''),
(96, 'Heard and McDonald Islands', 0, ''),
(97, 'Honduras', 504, ''),
(98, 'Hong Kong S.A.R.', 852, ''),
(99, 'Hungary', 36, ''),
(100, 'Iceland', 354, ''),
(101, 'India', 91, 'INR'),
(102, 'Indonesia', 62, ''),
(103, 'Iran', 98, ''),
(104, 'Iraq', 964, ''),
(105, 'Ireland', 353, ''),
(106, 'Israel', 972, ''),
(107, 'Italy', 39, ''),
(108, 'Jamaica', 1876, ''),
(109, 'Japan', 81, ''),
(110, 'Jersey', 44, ''),
(111, 'Jordan', 962, ''),
(112, 'Kazakhstan', 7, ''),
(113, 'Kenya', 254, ''),
(114, 'Kiribati', 686, ''),
(115, 'Korea North', 850, ''),
(116, 'Korea South', 82, ''),
(117, 'Kuwait', 965, ''),
(118, 'Kyrgyzstan', 996, ''),
(119, 'Laos', 856, ''),
(120, 'Latvia', 371, ''),
(121, 'Lebanon', 961, ''),
(122, 'Lesotho', 266, ''),
(123, 'Liberia', 231, ''),
(124, 'Libya', 218, ''),
(125, 'Liechtenstein', 423, ''),
(126, 'Lithuania', 370, ''),
(127, 'Luxembourg', 352, ''),
(128, 'Macau S.A.R.', 853, ''),
(129, 'Macedonia', 389, ''),
(130, 'Madagascar', 261, ''),
(131, 'Malawi', 265, ''),
(132, 'Malaysia', 60, ''),
(133, 'Maldives', 960, ''),
(134, 'Mali', 223, ''),
(135, 'Malta', 356, ''),
(136, 'Man (Isle of)', 44, ''),
(137, 'Marshall Islands', 692, ''),
(138, 'Martinique', 596, ''),
(139, 'Mauritania', 222, ''),
(140, 'Mauritius', 230, ''),
(141, 'Mayotte', 269, ''),
(142, 'Mexico', 52, ''),
(143, 'Micronesia', 691, ''),
(144, 'Moldova', 373, ''),
(145, 'Monaco', 377, ''),
(146, 'Mongolia', 976, ''),
(147, 'Montserrat', 1664, ''),
(148, 'Morocco', 212, ''),
(149, 'Mozambique', 258, ''),
(150, 'Myanmar', 95, ''),
(151, 'Namibia', 264, ''),
(152, 'Nauru', 674, ''),
(153, 'Nepal', 977, ''),
(154, 'Netherlands Antilles', 599, ''),
(155, 'Netherlands The', 31, ''),
(156, 'New Caledonia', 687, ''),
(157, 'New Zealand', 64, ''),
(158, 'Nicaragua', 505, ''),
(159, 'Niger', 227, ''),
(160, 'Nigeria', 234, ''),
(161, 'Niue', 683, ''),
(162, 'Norfolk Island', 672, ''),
(163, 'Northern Mariana Islands', 1670, ''),
(164, 'Norway', 47, ''),
(165, 'Oman', 968, ''),
(166, 'Pakistan', 92, ''),
(167, 'Palau', 680, ''),
(168, 'Palestinian Territory Occupied', 970, ''),
(169, 'Panama', 507, ''),
(170, 'Papua new Guinea', 675, ''),
(171, 'Paraguay', 595, ''),
(172, 'Peru', 51, ''),
(173, 'Philippines', 63, ''),
(174, 'Pitcairn Island', 0, ''),
(175, 'Poland', 48, ''),
(176, 'Portugal', 351, ''),
(177, 'Puerto Rico', 1787, ''),
(178, 'Qatar', 974, ''),
(179, 'Reunion', 262, ''),
(180, 'Romania', 40, ''),
(181, 'Russia', 70, ''),
(182, 'Rwanda', 250, ''),
(183, 'Saint Helena', 290, ''),
(184, 'Saint Kitts And Nevis', 1869, ''),
(185, 'Saint Lucia', 1758, ''),
(186, 'Saint Pierre and Miquelon', 508, ''),
(187, 'Saint Vincent And The Grenadines', 1784, ''),
(188, 'Samoa', 684, ''),
(189, 'San Marino', 378, ''),
(190, 'Sao Tome and Principe', 239, ''),
(191, 'Saudi Arabia', 966, ''),
(192, 'Senegal', 221, ''),
(193, 'Serbia', 381, ''),
(194, 'Seychelles', 248, ''),
(195, 'Sierra Leone', 232, ''),
(196, 'Singapore', 65, ''),
(197, 'Slovakia', 421, ''),
(198, 'Slovenia', 386, ''),
(199, 'Smaller Territories of the UK', 44, ''),
(200, 'Solomon Islands', 677, ''),
(201, 'Somalia', 252, ''),
(202, 'South Africa', 27, ''),
(203, 'South Georgia', 0, ''),
(204, 'South Sudan', 211, ''),
(205, 'Spain', 34, ''),
(206, 'Sri Lanka', 94, ''),
(207, 'Sudan', 249, ''),
(208, 'Suriname', 597, ''),
(209, 'Svalbard And Jan Mayen Islands', 47, ''),
(210, 'Swaziland', 268, ''),
(211, 'Sweden', 46, ''),
(212, 'Switzerland', 41, ''),
(213, 'Syria', 963, ''),
(214, 'Taiwan', 886, ''),
(215, 'Tajikistan', 992, ''),
(216, 'Tanzania', 255, ''),
(217, 'Thailand', 66, ''),
(218, 'Togo', 228, ''),
(219, 'Tokelau', 690, ''),
(220, 'Tonga', 676, ''),
(221, 'Trinidad And Tobago', 1868, ''),
(222, 'Tunisia', 216, ''),
(223, 'Turkey', 90, ''),
(224, 'Turkmenistan', 7370, ''),
(225, 'Turks And Caicos Islands', 1649, ''),
(226, 'Tuvalu', 688, ''),
(227, 'Uganda', 256, ''),
(228, 'Ukraine', 380, ''),
(229, 'United Arab Emirates', 971, ''),
(230, 'United Kingdom', 44, ''),
(231, 'United States', 1, ''),
(232, 'United States Minor Outlying Islands', 1, ''),
(233, 'Uruguay', 598, ''),
(234, 'Uzbekistan', 998, ''),
(235, 'Vanuatu', 678, ''),
(236, 'Vatican City State (Holy See)', 39, ''),
(237, 'Venezuela', 58, ''),
(238, 'Vietnam', 84, ''),
(239, 'Virgin Islands (British)', 1284, ''),
(240, 'Virgin Islands (US)', 1340, ''),
(241, 'Wallis And Futuna Islands', 681, ''),
(242, 'Western Sahara', 212, ''),
(243, 'Yemen', 967, ''),
(244, 'Yugoslavia', 38, ''),
(245, 'Zambia', 260, ''),
(246, 'Zimbabwe', 263, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doccode` varchar(10) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qualification` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `assochospitalcode` varchar(10) NOT NULL,
  `cityid` int(11) NOT NULL,
  `doctor_image` varchar(200) NOT NULL,
  `status` varchar(20) DEFAULT 'Active',
  `del` int(11) NOT NULL,
  `updatedby` int(11) NOT NULL,
  `updatedate` datetime NOT NULL,
  PRIMARY KEY (doccode)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doccode`, `doctor_name`, `designation`, `qualification`, `description`, `contact_no`, `email_id`, `gender`, `assochospitalcode`, `cityid`, `doctor_image`, `status`, `del`, `updatedby`, `updatedate`) VALUES
('D000001', 'Dr. Ankur Pruthi', 'HOD', 'MBBS', '', '9871160436', 'ankur_pruthi@gmail.com', 'Male', 'H0001', 0, 'ankur_pruthi.jpg', 'Active', 0, 1, '0000-00-00 00:00:00'),
('D000002', 'Dr. Anusheel Munshee', 'MD', 'BAMS', '', '9757106788', 'anusheel@gmail.com', 'Male', 'H0002', 0, 'anusheel.jpg', 'Active', 0, 1, '0000-00-00 00:00:00'),
('D000003', 'Dr. Ashish Vashishth', 'Sr.Specilist', 'BHMS', '', '8767103648', 'ashishv@gmail.com', 'Male', 'H0003', 0, 'ashishv.jpg', 'Active', 0, 0, '0000-00-00 00:00:00'),
('D000004', 'Dr. Bijoy Kumar Nayak', 'HOD', 'MBBS', '', '4766104628', 'bijoy@gmail.com', 'Male', 'H0005', 0, 'bijoy.jpg', 'Active', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctorinstituteenquiry`
--

CREATE TABLE `doctorinstituteenquiry` (
  `enquiryid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `aassoc_hospital` varchar(200) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `updatedby` int(11) NOT NULL,
  `updatedate` datetime NOT NULL,
  PRIMARY KEY (enquiryid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorinstituteenquiry`
--

INSERT INTO `doctorinstituteenquiry` (`enquiryid`, `type`, `name`, `speciality`, `address`, `city`, `country`, `phoneno`, `email_id`, `aassoc_hospital`, `contact_person`, `comments`, `status`, `updatedby`, `updatedate`) VALUES
(1, 'Doctor', 'Dr. Ankur Pruthi', 'Nuclear Medicine', 'New Delhi', '', 'India', '9757106788', 'ankur_pruthi@gmail.com', 'H0001', 'Rakesh Kale', '', 'Open', 1, '0000-00-00 00:00:00'),
(2, 'Institute', 'San Jose', 'Cancer Care', 'Gurugram', '', 'India', '8767103648', 'san_jose@gmail.com', 'H0001', 'Jose', '', 'Open', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctornetworklinks`
--

CREATE TABLE `doctornetworklinks` (
  `docnetworklinkid` int(11) NOT NULL AUTO_INCREMENT,
  `linktitle` varchar(50) NOT NULL,
  `filtertype` varchar(20) NOT NULL,
  `filtervalue` varchar(50) NOT NULL,
  PRIMARY KEY (docnetworklinkid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctornetworklinks`
--

INSERT INTO `doctornetworklinks` (`docnetworklinkid`, `linktitle`, `filtertype`, `filtervalue`) VALUES
(1, 'Best oncologists in India', 'Treatment', 'T000001'),
(2, 'Best urologist in India', 'Speciality', 'S017');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecialtymap`
--

CREATE TABLE `doctorspecialtymap` (
  `docspecid` int(11) NOT NULL AUTO_INCREMENT,
  `doccode` varchar(10) NOT NULL,
  `specialitycode` varchar(10) NOT NULL,
  PRIMARY KEY (docspecid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecialtymap`
--

INSERT INTO `doctorspecialtymap` (`docspecid`, `doccode`, `specialitycode`) VALUES
(1, 'D000001', 'S017'),
(2, 'D000002', 'S003'),
(3, 'D000003', 'S007'),
(4, 'D000004', 'S025'),
(5, 'D000004', 'S023');

-- --------------------------------------------------------

--
-- Table structure for table `doctortreatmentmap`
--

CREATE TABLE `doctortreatmentmap` (
  `doctreatid` int(11) NOT NULL AUTO_INCREMENT,
  `doccode` varchar(10) NOT NULL,
  `treatmentcode` varchar(10) NOT NULL,
  PRIMARY KEY (doctreatid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctortreatmentmap`
--

INSERT INTO `doctortreatmentmap` (`doctreatid`, `doccode`, `treatmentcode`) VALUES
(1, 'D000001', 'T000001'),
(2, 'D000002', 'T000002'),
(3, 'D000003', 'T000003'),
(4, 'D000004', 'T000004'),
(5, 'D000004', 'T000005');

-- --------------------------------------------------------

--
-- Table structure for table `featuredhospital`
--

CREATE TABLE `featuredhospital` (
  `featuredhospitalid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalcode` varchar(10) NOT NULL,
  `sequenceno` int(10) NOT NULL,
  PRIMARY KEY (featuredhospitalid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featuredhospital`
--

INSERT INTO `featuredhospital` (`featuredhospitalid`, `hospitalcode`, `sequenceno`) VALUES
(1, '0', 1),
(2, '2', 2),
(3, '3', 3),
(4, '4', 4),
(5, '5', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospitalcode` varchar(10) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `gallaryid` int(11) NOT NULL,
  `no_of_beds` varchar(20) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `cityid` int(11) NOT NULL,
  `establisheddate` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `technologies` varchar(200) NOT NULL,
  `services` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `del` int(11) NOT NULL,
  `updatedate` datetime NOT NULL,
  PRIMARY KEY (hospitalcode)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospitalcode`, `hospital_name`, `logo`, `gallaryid`, `no_of_beds`, `contact_no`, `email_id`, `website`, `address`, `cityid`, `establisheddate`, `type`, `technologies`, `services`, `status`, `del`, `updatedate`) VALUES
('H0001', 'Manipal Hospital', 'manipal_logo.jpg', 5, '150', '9871160436', 'manipal hospital@gmail.com', 'http://www.manipalhospital.com', 'New Delhi', 0, '1970', 'Super Speciality', 'Digitalized X-Ray,3 Tesla MRI,C-Arm Scan', 'Physiotherapy,General Medicine,Gynaecology', 'Active', 0, '0000-00-00 00:00:00'),
('H0002', 'Fortis Healthcare', 'fortis_healthcare_logo.jpg', 4, '250', '8765341978', 'fortis_healthcare@gmail.com', 'http://www.fortishealthcare.com', 'Noida', 0, '1965', 'MultiSpecialty', 'Digitalized X-Ray, USG, CT-Scan, MRI', 'Emergency Department,Intensive Care Unit', 'Active', 0, '0000-00-00 00:00:00'),
('H0003', 'Artemis Hospital', 'artemis_hospital.jpg', 3, '300', '9765342889', 'artemis_hospital@gmail.com', 'http://www.artemishospital.com', 'Gurugram', 0, '1980', 'Clinic', 'Digitalized X-Ray,Smartphone TRI Analyzer', 'Emergency Department,Diagnostic Services', 'Active', 0, '0000-00-00 00:00:00'),
('H0004', 'Indraprastha Apollo Hospital', 'apollo_hospital.jpg', 2, '120', '8967345622', 'apollohospital@gmail.com', 'http://www.apollohospital.com', 'New Delhi', 0, '1975', 'SuperSpecialty', 'Digitalized X-Ray,3 Tesla MRI,C-Arm Scan', 'Physiotherapy,General Medicine,Gynaecology', 'Active', 0, '0000-00-00 00:00:00'),
('H0005', 'Fortis Memorial Research Institute', 'fortis_memorial_research_institute.jpg', 1, '130', '8765342845', 'fmri@gmail.com', 'http://www.fortismemorial.com', 'Gurugram', 0, '1980', 'MultiSpecialty', 'Digitalized X-Ray, USG, CT-Scan, MRI', 'Emergency Department,Intensive Care Unit', 'Active', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalgallary`
--

CREATE TABLE `hospitalgallary` (
  `gallaryid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalcode` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (gallaryid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalgallary`
--

INSERT INTO `hospitalgallary` (`gallaryid`, `hospitalcode`, `image`) VALUES
(1, 'H0001', 'H0001.jpg'),
(2, 'H0002', 'H0002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalnetworklinks`
--

CREATE TABLE `hospitalnetworklinks` (
  `hospitalnetworklinkid` int(11) NOT NULL AUTO_INCREMENT,
  `linktitle` varchar(100) NOT NULL,
  `filtertype` varchar(50) NOT NULL,
  `filtervalue` varchar(100) NOT NULL,
  PRIMARY KEY (hospitalnetworklinkid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalnetworklinks`
--

INSERT INTO `hospitalnetworklinks` (`hospitalnetworklinkid`, `linktitle`, `filtertype`, `filtervalue`) VALUES
(1, 'Best oncology Hospital in India', 'Treatment', 'T000001'),
(2, 'Best urology Hospital in India', 'Speciality', 'S017');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalspecialitymap`
--

CREATE TABLE `hospitalspecialitymap` (
  `hospitalspecid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalcode` varchar(10) NOT NULL,
  `specialitycode` varchar(10) NOT NULL,
  PRIMARY KEY (hospitalspecid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalspecialitymap`
--

INSERT INTO `hospitalspecialitymap` (`hospitalspecid`, `hospitalcode`, `specialitycode`) VALUES
(1, 'H0001', 'S017'),
(2, 'H0002', 'S003'),
(3, 'H0003', 'S007'),
(4, 'H0004', 'S025'),
(5, 'H0005', 'S018');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaltreatmentmap`
--

CREATE TABLE `hospitaltreatmentmap` (
  `hospitaltreatid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalcode` varchar(10) NOT NULL,
  `treatmentcode` varchar(50) NOT NULL,
  PRIMARY KEY (hospitaltreatid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitaltreatmentmap`
--

INSERT INTO `hospitaltreatmentmap` (`hospitaltreatid`, `hospitalcode`, `treatmentcode`) VALUES
(1, 'H0001', 'T000001'),
(2, 'H0002', 'T000002'),
(3, 'H0003', 'T000003'),
(4, 'H0004', 'T000004'),
(5, 'H0005', 'T000005');

-- --------------------------------------------------------

--
-- Table structure for table `mainpagebanner`
--

CREATE TABLE `mainpagebanner` (
  `bannerid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `banner_text` varchar(500) NOT NULL,
  `banner_image` varchar(200) NOT NULL,
  `external_link` varchar(200) NOT NULL,
  `sequenceno` int(11) NOT NULL,
  `del` int(11) NOT NULL,
  `updatedby` int(11) NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (bannerid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainpagebanner`
--

INSERT INTO `mainpagebanner` (`bannerid`, `title`, `banner_text`, `banner_image`, `external_link`, `sequenceno`, `del`, `updatedby`, `updatedate`) VALUES
(1, 'Welcome to Medicaid ', 'Your one stop platform for all medical value treatments', 'bannerimage1.jpg', '', 1, 0, 1, '2020-07-20 11:24:15'),
(2, 'Welcome to Medicaid ', 'Your one stop platform for all medical value treatments', 'bannerimage2.jpg', '', 2, 0, 1, '2020-07-20 11:24:18'),
(3, 'Welcome to Medicaid ', 'Your one stop platform for all medical value treatments', 'bannerimage3.jpg', '', 3, 0, 1, '2020-07-20 11:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `mostsearchedspeciality`
--

CREATE TABLE `mostsearchedspeciality` (
  `specsearchid` int(11) NOT NULL AUTO_INCREMENT,
  `specialitycode` varchar(10) NOT NULL,
  PRIMARY KEY (specsearchid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mostsearchedspeciality`
--

INSERT INTO `mostsearchedspeciality` (`specsearchid`, `specialitycode`) VALUES
(1, 'S017'),
(2, 'S003'),
(3, 'S007'),
(4, 'S025'),
(5, 'S023'),
(6, 'S018');

-- --------------------------------------------------------

--
-- Table structure for table `mostsearchedtreatment`
--

CREATE TABLE `mostsearchedtreatment` (
  `treatsearchid` int(11) NOT NULL AUTO_INCREMENT,
  `specsearchid` int(10) NOT NULL,
  `treatmentcode` varchar(10) NOT NULL,
  PRIMARY KEY (treatsearchid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mostsearchedtreatment`
--

INSERT INTO `mostsearchedtreatment` (`treatsearchid`, `specsearchid`, `treatmentcode`) VALUES
(1, 1, 'T000001'),
(2, 2, 'T000002'),
(3, 3, 'T000003'),
(4, 4, 'T000004'),
(5, 5, 'T000005'),
(6, 6, 'T000006');

-- --------------------------------------------------------

--
-- Table structure for table `nearbyplaces`
--

CREATE TABLE `nearbyplaces` (
  `placeid` int(11) NOT NULL AUTO_INCREMENT,
  `placename` varchar(100) NOT NULL,
  `placetype` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `cityid` int(11) NOT NULL,
  PRIMARY KEY (placeid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nearbyplaces`
--

INSERT INTO `nearbyplaces` (`placeid`, `placename`, `placetype`, `description`, `cityid`) VALUES
(1, 'Amanora Mall', 'Mall', 'mall offering brand-name stores, restaurants, a bowling alley, arcade & movie theater', 2763),
(2, 'Blue Diamond', 'Hotel', 'Blue Diamond is a luxury hotel that boasts multiple on-site dining options, 24-hour fitness centre and an expansive outdoor swimming pool', 2763),
(3, 'Lal Mahal', 'Tourist Places', 'The Lal Mahal of Pune is one of the most famous monuments located in Pune, India. In the year 1630 AD, Shivaji\'s Father Shahaji Bhosale, established the Lal Mahal for his wife Jijabai and son.', 2763),
(4, 'Holiday Inn Resort Goa', 'Hotel', 'The Holiday Inn Resort Goa offers hotel accommodation that is a unique blend of traditional Goan and contemporary architecture. just 17km from the Margao Railway Station', 733);

-- --------------------------------------------------------

--
-- Table structure for table `prioritydoctorpertreatment`
--

CREATE TABLE `prioritydoctorpertreatment` (
  `priorityid` int(11) NOT NULL AUTO_INCREMENT,
  `doccode` varchar(10) NOT NULL,
  `treatmentcode` varchar(50) NOT NULL,
  PRIMARY KEY (priorityid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prioritydoctorpertreatment`
--

INSERT INTO `prioritydoctorpertreatment` (`priorityid`, `doccode`, `treatmentcode`) VALUES
(1, 'D000001', 'T000001'),
(2, 'D000002', 'T000002'),
(3, 'D000003', 'T000003'),
(4, 'D000004', 'T000004'),
(5, 'D000005', 'T000005');

-- --------------------------------------------------------

--
-- Table structure for table `priorityhospitalpertreatment`
--

CREATE TABLE `priorityhospitalpertreatment` (
  `priorityid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalcode` varchar(10) NOT NULL,
  `treatmentcode` varchar(50) NOT NULL,
  PRIMARY KEY (priorityid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priorityhospitalpertreatment`
--

INSERT INTO `priorityhospitalpertreatment` (`priorityid`, `hospitalcode`, `treatmentcode`) VALUES
(1, 'H0001', 'T000001'),
(2, 'H0002', 'T000002'),
(3, 'H0003', 'T000003'),
(4, 'H0004', 'T000004'),
(5, 'H0005', 'T000005');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `specialitycode` varchar(10) NOT NULL,
  `speciality` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `del` int(11) NOT NULL,
  `updatedby` int(11) NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (specialitycode)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`specialitycode`, `speciality`, `description`, `image`, `status`, `del`, `updatedby`, `updatedate`) VALUES
('S003', 'Cancer Care', 'Radiation Oncology', '', 'Active', 0, 1, '2020-07-20 05:57:17'),
('S007', 'ENT', 'Otorhinolaryngology, Head & Neck and Cranial Base Surgery, ENT', '', 'Active', 0, 1, '2020-07-20 05:57:22'),
('S017', 'Nuclear Medicine', 'Nuclear Medicine', '', 'Active', 0, 1, '2020-07-20 05:57:34'),
('S023', 'Robotic Surgeries', 'Minimal Access & Robotic Gynaecologic Surgeries', '', 'Active', 0, 1, '2020-07-20 05:57:39'),
('S025', 'Women\'s Health', 'Minimal Access & Robotic Gynaecologic Surgeries', '', 'Active', 0, 1, '2020-07-20 05:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `specialitykeywordmap`
--

CREATE TABLE `specialitykeywordmap` (
  `speckeywordid` int(11) NOT NULL AUTO_INCREMENT,
  `specialitycode` varchar(10) NOT NULL,
  `keywords` varchar(50) NOT NULL,
  PRIMARY KEY (speckeywordid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialitykeywordmap`
--

INSERT INTO `specialitykeywordmap` (`speckeywordid`, `specialitycode`, `keywords`) VALUES
(1, 'S017', 'Nuclear Medicine'),
(2, 'S003', 'Radiation Oncology'),
(3, 'S007', 'Otorhinolaryngology, Head & Neck and Cranial Base '),
(4, 'S025', 'Minimal Access & Robotic Gynaecologic Surgeries'),
(5, 'S023', 'Minimal Access & Robotic Gynaecologic Surgeries');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `del` int(11) NOT NULL,
  `updatedate` datetime NOT NULL,
  PRIMARY KEY (staffid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `email_id`, `mobile`, `role`, `password`, `otp`, `status`, `del`, `updatedate`) VALUES
(1, 'Pankaj Shinde', 'admin@gmail.com', '9876345678', 'admin', 'admin', '12234', 'Active', 0, '0000-00-00 00:00:00'),
(2, ' Manoj Patil', 'manojp@gmail.com', '8765341231', 'staff', 'staff', '123456', 'Active', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '101',
  PRIMARY KEY (state_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Islands', 101),
(2, 'Andhra Pradesh', 101),
(3, 'Arunachal Pradesh', 101),
(4, 'Assam', 101),
(5, 'Bihar', 101),
(6, 'Chandigarh', 101),
(7, 'Chhattisgarh', 101),
(8, 'Dadra and Nagar Haveli', 101),
(9, 'Daman and Diu', 101),
(10, 'Delhi', 101),
(11, 'Goa', 101),
(12, 'Gujarat', 101),
(13, 'Haryana', 101),
(14, 'Himachal Pradesh', 101),
(15, 'Jammu and Kashmir', 101),
(16, 'Jharkhand', 101),
(17, 'Karnataka', 101),
(18, 'Kenmore', 101),
(19, 'Kerala', 101),
(20, 'Lakshadweep', 101),
(21, 'Madhya Pradesh', 101),
(22, 'Maharashtra', 101),
(23, 'Manipur', 101),
(24, 'Meghalaya', 101),
(25, 'Mizoram', 101),
(26, 'Nagaland', 101),
(27, 'Narora', 101),
(28, 'Natwar', 101),
(29, 'Odisha', 101),
(30, 'Paschim Medinipur', 101),
(31, 'Pondicherry', 101),
(32, 'Punjab', 101),
(33, 'Rajasthan', 101),
(34, 'Sikkim', 101),
(35, 'Tamil Nadu', 101),
(36, 'Telangana', 101),
(37, 'Tripura', 101),
(38, 'Uttar Pradesh', 101),
(39, 'Uttarakhand', 101),
(40, 'Vaishali', 101),
(41, 'West Bengal', 101);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonialid` int(11) NOT NULL AUTO_INCREMENT,
  `patientname` varchar(100) NOT NULL,
  `patientphoto` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `treatmentcode` varchar(10) NOT NULL,
  `hospitalcode` varchar(10) NOT NULL,
  `bloglink` varchar(200) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY (testimonialid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonialid`, `patientname`, `patientphoto`, `country`, `description`, `treatmentcode`, `hospitalcode`, `bloglink`, `createdate`) VALUES
(1, 'Manoj Mane', 'manoj.jpg', 'India', 'Nice Treatment', 'T000001', 'H0001', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonialdocmap`
--

CREATE TABLE `testimonialdocmap` (
  `testimonialid` int(11) NOT NULL,
  `doccode` varchar(10) NOT NULL,
  PRIMARY KEY (testimonialid, doccode)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonialdocmap`
--

INSERT INTO `testimonialdocmap` (`testimonialid`, `doccode`) VALUES
(1, 'D000001'),
(2, 'D000002');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatmentcode` varchar(10) NOT NULL,
  `treatmentname` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `stagedescription` varchar(500) NOT NULL,
  `stageimage` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `del` int(11) NOT NULL,
  `updatedate` datetime NOT NULL,
  PRIMARY KEY (treatmentcode)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatmentcode`, `treatmentname`, `image`, `description`, `stagedescription`, `stageimage`, `status`, `del`, `updatedate`) VALUES
('T000001', 'Tetralogy Of Fallot (TOF) Correction', 'T000001.jpg', 'The surgeon places a patch over the ventricular septal defect to close the hole between the lower chambers of the heart (ventricles).', '1) Physical Exam2) Diagnostic Tests and Procedures. 3) Echocardiography. 4) EKG (Electrocardiogram). 5) Chest X Ray. 6) Pulse Oximetry', '', 'Active', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `treatmentcost`
--

CREATE TABLE `treatmentcost` (
  `treatmentcode` varchar(10) NOT NULL,
  `avg_cost` int(50) NOT NULL,
  `min_cost` int(50) NOT NULL,
  `max_cost` int(50) NOT NULL,
  `travellercount` int(50) NOT NULL,
  `hospitaldays` varchar(100) NOT NULL,
  `outsidedays` varchar(100) NOT NULL,
  `totaldays` varchar(100) NOT NULL,
  PRIMARY KEY (treatmentcode)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatmentcost`
--

INSERT INTO `treatmentcost` (`treatmentcode`, `avg_cost`, `min_cost`, `max_cost`, `travellercount`, `hospitaldays`, `outsidedays`, `totaldays`) VALUES
('T000001', 6323, 3323, 100000, 2, '15', '5', '20'),
('T000002', 6323, 3323, 3323, 5, '20', '10', '30');

-- --------------------------------------------------------

--
-- Table structure for table `treatmentdoctormap`
--

CREATE TABLE `treatmentdoctormap` (
  `treatdocid` int(11) NOT NULL AUTO_INCREMENT,
  `doccode` varchar(10) NOT NULL,
  `treatmentcode` varchar(50) NOT NULL,
  PRIMARY KEY (treatdocid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatmentdoctormap`
--

INSERT INTO `treatmentdoctormap` (`treatdocid`, `doccode`, `treatmentcode`) VALUES
(1, 'D000001', 'T000001'),
(2, 'D000002', 'T000002'),
(3, 'D000003', 'T000003'),
(4, 'D000004', 'T000004'),
(5, 'D000005', 'T000005');

-- --------------------------------------------------------

--
-- Table structure for table `treatmentfaqs`
--

CREATE TABLE `treatmentfaqs` (
  `faqid` int(11) NOT NULL AUTO_INCREMENT,
  `treatmentcode` varchar(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(500) NOT NULL,
  PRIMARY KEY (faqid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatmentfaqs`
--

INSERT INTO `treatmentfaqs` (`faqid`, `treatmentcode`, `question`, `answer`) VALUES
(1, 'T000001', 'What Is Tetralogy of Fallot (TOF)?', 'Tetralogy of Fallot (fah-LO) is a congenital (present at birth) heart defect. In tetralogy of Fallot (TOF), four related heart defects change the way blood flows to the lungs and through the heart.'),
(2, 'T000002', 'What is a bidirectional Glenn procedure?', 'The bidirectional Glenn procedure directs the blood flow from the upper body veins directly to the lungs rather than the heart pumping the blood to the lungs first. The bidirectional Glenn shunt redirects blood flow from the upper body veins and is often performed prior to having a Fontan procedure.'),
(3, 'T000003', 'What is a bypass machine used for?', 'Cardiopulmonary bypass (CPB) is a technique in which a machine temporarily takes over the function of the heart and lungs during surgery, maintaining the circulation of blood and the oxygen content of the patient\'s body.');

-- --------------------------------------------------------

--
-- Table structure for table `treatmenthospitalmap`
--

CREATE TABLE `treatmenthospitalmap` (
  `treathospitalid` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalcode` varchar(10) NOT NULL,
  `treatmentcode` varchar(50) NOT NULL,
  PRIMARY KEY (treathospitalid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatmenthospitalmap`
--

INSERT INTO `treatmenthospitalmap` (`treathospitalid`, `hospitalcode`, `treatmentcode`) VALUES
(1, 'H0001', 'T000001'),
(2, 'H0002', 'T000002'),
(3, 'H0003', 'T000003'),
(4, 'H0004', 'T000004'),
(5, 'H0005', 'T000005');

-- --------------------------------------------------------

--
-- Table structure for table `treatmentkeywordmap`
--

CREATE TABLE `treatmentkeywordmap` (
  `treatkeywordmap` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(500) NOT NULL,
  `treatmentcode` varchar(10) NOT NULL,
  PRIMARY KEY (`treatkeywordmap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatmentkeywordmap`
--

INSERT INTO `treatmentkeywordmap` (`treatkeywordmap`, `keyword`, `treatmentcode`) VALUES
(1, 'Child heart surgery', 'T000001'),
(2, 'hole in the heart', 'T000001'),
(3, 'Valve defect', 'T000002'),
(4, 'Aorta defect', 'T000003'),
(5, 'Adult heart surgery', 'T000003'),
(6, 'heart bypass', 'T000004'),
(7, 'heart failure', 'T000004');
-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE mainpagebanner
ADD COLUMN button_text VARCHAR(20) NULL AFTER banner_image;

ALTER TABLE featuredhospital
ADD COLUMN hospital_chain VARCHAR(100) NULL AFTER hospital_chain;

ALTER TABLE hospital
ADD COLUMN hospital_chain VARCHAR(100) NULL AFTER hospital_chain;

-- Table structure for table `featureddoctors`
--
CREATE TABLE `featureddoctors` (
  `featureddoctorid` int(11) NOT NULL AUTO_INCREMENT,
  `doctorcode` varchar(10) NOT NULL,
  `sequenceno` int(11) NOT NULL,
  PRIMARY KEY (`featureddoctorid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `country` CHANGE COLUMN `country_name` `country` varchar(150) NOT NULL;
ALTER TABLE `city` CHANGE COLUMN `name` `city_name` varchar(30) NOT NULL;
ALTER TABLE `city` CHANGE COLUMN `city` `cityid` varchar(30) NOT NULL;
ALTER TABLE `doctorinstituteenquiry` CHANGE COLUMN `speciality` `specialty` varchar(100) NOT NULL;
ALTER TABLE `doctorinstituteenquiry` CHANGE COLUMN `aassoc_hospital` `assoc_hospitalclinic` varchar(200) NOT NULL;
