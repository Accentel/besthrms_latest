-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 07:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `best_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `acyear`
--

CREATE TABLE `acyear` (
  `id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `user` varchar(25) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `acyear`
--

INSERT INTO `acyear` (`id`, `year`, `user`, `cdate`) VALUES
(1, '2017-18', 'admin', '2017-12-20 08:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `addsub`
--

CREATE TABLE `addsub` (
  `id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `user` varchar(25) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addsub`
--

INSERT INTO `addsub` (`id`, `class`, `user`, `cdate`, `subject`) VALUES
(1, '2', 'admin', '2017-12-21 12:57:26', 'Hindi1'),
(2, '2', 'admin', '2017-12-21 12:57:32', 'Telugu1'),
(3, '3', 'admin', '2017-12-21 12:57:39', 'English'),
(4, '2', 'admin', '2017-12-21 12:02:33', 'Mathematics'),
(5, '2', 'admin', '2017-12-21 12:02:33', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `add_ao`
--

CREATE TABLE `add_ao` (
  `id` int(100) NOT NULL,
  `apdate` date NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(500) NOT NULL,
  `join_date` date NOT NULL,
  `location` varchar(500) NOT NULL,
  `sal_th` varchar(500) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `desig` varchar(500) NOT NULL,
  `ses` varchar(500) NOT NULL,
  `file` varchar(100) NOT NULL,
  `statecode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_noc`
--

CREATE TABLE `add_noc` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(200) NOT NULL,
  `emp_name` varchar(500) NOT NULL,
  `desig` varchar(500) NOT NULL,
  `doj` varchar(500) NOT NULL,
  `reason` text NOT NULL,
  `resign` varchar(150) NOT NULL,
  `np` varchar(150) NOT NULL,
  `uniform` varchar(150) NOT NULL,
  `uniform_rv` varchar(500) NOT NULL,
  `id_card` varchar(150) NOT NULL,
  `idcard_rv` varchar(500) NOT NULL,
  `shoes` varchar(150) NOT NULL,
  `shoes_rv` varchar(500) NOT NULL,
  `tools` varchar(150) NOT NULL,
  `tools_rv` varchar(500) NOT NULL,
  `sup_fb` text NOT NULL,
  `sal_adv` varchar(150) NOT NULL,
  `sal_rv` varchar(500) NOT NULL,
  `wire_certi` varchar(150) NOT NULL,
  `wire_rv` varchar(500) NOT NULL,
  `other` varchar(150) NOT NULL,
  `other_rv` varchar(500) NOT NULL,
  `state` varchar(100) NOT NULL,
  `tooldue` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_po`
--

CREATE TABLE `add_po` (
  `id` int(11) NOT NULL,
  `po_no` varchar(500) NOT NULL,
  `po_date` date NOT NULL,
  `s_date` date NOT NULL,
  `sqo_no` varchar(500) NOT NULL,
  `sqo_date` date NOT NULL,
  `to_add` text NOT NULL,
  `atten` varchar(500) NOT NULL,
  `cono` varchar(300) NOT NULL,
  `to_gst` varchar(500) NOT NULL,
  `del_add` text NOT NULL,
  `del_gst` varchar(500) NOT NULL,
  `conname` varchar(500) NOT NULL,
  `conno` varchar(500) NOT NULL,
  `st_date` date NOT NULL,
  `tot_amt` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_po1`
--

CREATE TABLE `add_po1` (
  `id` int(11) NOT NULL,
  `id1` varchar(500) NOT NULL,
  `desc1` text NOT NULL,
  `hsn` varchar(300) NOT NULL,
  `uom` varchar(300) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `rate` varchar(500) NOT NULL,
  `base_amt` varchar(500) NOT NULL,
  `gst` varchar(500) NOT NULL,
  `gst_amt` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_tool_phr`
--

CREATE TABLE `add_tool_phr` (
  `id` int(50) NOT NULL,
  `inv_date` date NOT NULL,
  `inv_no` varchar(500) NOT NULL,
  `netamount` varchar(500) NOT NULL,
  `ses` varchar(200) NOT NULL,
  `supname` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `totalgst` varchar(500) NOT NULL,
  `totamount` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `hint` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user`, `pwd`, `empname`, `hint`) VALUES
(1, 'Admin', 'c8370ad37d0828c82a46f623b5ea225e', 'Admin', '3691215');

-- --------------------------------------------------------

--
-- Table structure for table `afm`
--

CREATE TABLE `afm` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allocations`
--

CREATE TABLE `allocations` (
  `id` int(11) NOT NULL,
  `indusid` varchar(50) NOT NULL,
  `allocationdetails` varchar(255) NOT NULL,
  `prno` varchar(50) NOT NULL,
  `prvalue` float(10,2) NOT NULL,
  `postatus` varchar(20) NOT NULL,
  `received` varchar(20) NOT NULL,
  `pono` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'work in progress'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignedtools`
--

CREATE TABLE `assignedtools` (
  `id` int(11) NOT NULL,
  `employeeid` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_nominee`
--

CREATE TABLE `bank_nominee` (
  `id` int(11) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `ifsc` varchar(150) NOT NULL,
  `accno` varchar(200) NOT NULL,
  `bphoto` varchar(150) NOT NULL,
  `nname` varchar(200) NOT NULL,
  `nrelation` varchar(200) NOT NULL,
  `naddress` varchar(200) NOT NULL,
  `ndob` varchar(200) NOT NULL,
  `namount` varchar(200) NOT NULL,
  `employeeid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bank_nominee`
--

INSERT INTO `bank_nominee` (`id`, `bname`, `branch`, `ifsc`, `accno`, `bphoto`, `nname`, `nrelation`, `naddress`, `ndob`, `namount`, `employeeid`) VALUES
(10, 'Union Bank', 'HYD', 'UBIN9875467', '6598542154986552', 'http://localhost/BESTHRMS/empphotos/KVRAP40_bankimg', 'Damodar', 'Father', 'HYD', '2025-04-19', '1000004', 'KVRAP40'),
(11, 'Union Bank', 'Karimnagar', 'UBIN6598542', '659854215498655', 'http://localhost/BESTHRMS/empphotos/KVRAP48_bankimg', '', '', '', '', '', 'KVRAP48'),
(12, 'Union Bank', 'Karimnagar', 'UBIN9875467', '659854215498655', 'http://localhost/BESTHRMS/empphotos/KVRAP49_bankimg', 'Damodar', 'Father', 'HYD', '2025-04-11', '100000', 'KVRAP49'),
(13, 'Union Bank', 'Karimnagar', 'UBIN9875467', '659854215498655', 'http://localhost/BESTHRMS/empphotos/KVRAP50_bankimg', 'Damodar', 'FATHER', 'KARIMNAGAR', '2025-04-12', '100000', 'KVRAP50'),
(14, 'Union Bank', 'HYD', 'UBIN9875467', '659854215498655', 'http://localhost/BESTHRMS/empphotos/KVRAP51_bankimg', '', '', '', '', '', 'KVRAP51'),
(15, 'Union Bank', 'Karimnagar', 'UBIN9875467', '659854215498655', 'http://localhost/BESTHRMS/empphotos/KVRAP52_bankimg', 'Bharathi', 'Mother', 'KARIMNAGAR', '', '100000', 'KVRAP52'),
(16, 'Punjab National Banks', 'Karimnagarss', 'UBIN987546722', '65985421549865522', 'http://localhost/BESTHRMS/empphotos/KVRAP53_bankimg', 'Damodarss', 'Fatherss', 'HYDss', '2025-04-11', '10000013', 'KVRAP53'),
(17, 'Union Bank', 'Karimnagar', 'UBIN9875467', '659854215498655', 'http://localhost/BESTHRMS/empphotos/KVRAP54_bankimg', 'Damodar', 'Father', 'HYD', '2025-04-03', '100000', 'KVRAP54'),
(18, 'Union Bank', 'Karimnagar', 'UBIN9875467', '659854215498655', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100_bankimg', 'Damodar', 'Father', 'KARIMNAGAR', '2025-05-09', '100000', 'KVRAP100');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `shopid` int(11) DEFAULT NULL,
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cattool`
--

CREATE TABLE `cattool` (
  `id` int(11) NOT NULL,
  `tcname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cattool`
--

INSERT INTO `cattool` (`id`, `tcname`) VALUES
(1, 'tool');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `cername` varchar(500) NOT NULL,
  `cerno` varchar(500) NOT NULL,
  `cerphoto` varchar(300) NOT NULL,
  `employeeid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `cername`, `cerno`, `cerphoto`, `employeeid`) VALUES
(1, 'S S L C', '20150283845', '', 'JTKarnataka22232726'),
(2, 'I T I electronic and Mechanical', '00170829024352', '', 'JTKarnataka22232726'),
(3, 'I T I electronic and Mechanical', '00170829024352', '', 'JTKarnataka22232726'),
(4, 'I T I electronic and Mechanical', '00170829024352', '', 'JTKarnataka22232726'),
(5, 'I T I electronic and Mechanical', '00170829024352', '', 'JTKarnataka22232726'),
(6, 'I T I CERTIFICATE', '00170829024352', '', 'JTKarnataka22232726'),
(7, 'test', 't', '', 'JTTS22232733'),
(8, 'test2', '2', '', 'JTTS22232733'),
(9, 'testcer', '45', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232734certifcate1', 'JTTS22232734'),
(10, 'testtt', 'testtt', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232734certifcate2', 'JTTS22232734'),
(11, 'test3', 'test4', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232734certifcate3', 'JTTS22232734'),
(12, 'test', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232731certifcate1', 'JTKN22232731'),
(13, 'kalyan', '1234', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232729certifcate1', 'JTTS22232729'),
(14, 'Btech', '1', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232735certifcate1', 'JTKN22232735'),
(15, 'Inter', '2', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232735certifcate2', 'JTKN22232735'),
(16, 'prasen', '', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232736certifcate1', 'JTTS22232736'),
(17, 'Cpc polytechnic mysore', '108EC17062', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232739certifcate1', 'JTTS22232739'),
(18, 'Vijay Vikas Institute of engineering', '4VM22EC417', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232739certifcate2', 'JTTS22232739'),
(19, 'Sslc', '131167940', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232742certifcate1', 'JTTS22232742'),
(20, 'Iti', '1629411479', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232742certifcate2', 'JTTS22232742'),
(21, 'Iti', '1629411479', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232742certifcate3', 'JTTS22232742'),
(22, '10th marksheet', '171010179421', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232743certifcate1', 'JTTS22232743'),
(23, '12th marksheet', '0694925', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232743certifcate2', 'JTTS22232743'),
(24, 'ITI 1st year marksheet', '', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232743certifcate3', 'JTTS22232743'),
(25, 'ITI 2nd year marksheet', '', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232743certifcate4', 'JTTS22232743'),
(26, 'Puc', '', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232744certifcate1', 'JTTS22232744'),
(27, 'Bse', '', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232744certifcate2', 'JTTS22232744'),
(28, 'Basavaraja M', 'SSLC', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232747certifcate1', 'JTTS22232747'),
(29, 'Basavaraja M', 'Iti', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232747certifcate2', 'JTTS22232747'),
(30, 'Puc', '20877256715', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232749certifcate1', 'JTKN22232749'),
(31, 'Darshan', '1234', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232758certifcate1', 'JTKN22232758'),
(32, 'Darshan', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232758certifcate2', 'JTKN22232758'),
(33, 'Darshan N', '52628', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232758certifcate3', 'JTKN22232758'),
(34, 'Darshan', '6815', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232758certifcate4', 'JTKN22232758'),
(35, 'Darshan', '5671', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232758certifcate5', 'JTKN22232758'),
(36, 'Darshan', '57#72', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232758certifcate6', 'JTKN22232758'),
(37, 'Rudresha Gv', 'BA', '', 'JTKN22232764'),
(38, 'Rudresha Gv', '', '', 'JTKN22232764'),
(39, 'Rudresha Gv', '', '', 'JTKN22232764'),
(40, 'Rudresha Gv', '', '', 'JTKN22232764'),
(41, 'Rudresha Gv', '', '', 'JTKN22232764'),
(42, 'Manju Ramappa Bovi', '', '', 'JTKN22232768'),
(43, 'Manju Ramappa bovi', '', '', 'JTKN22232768'),
(44, 'Harisha H', 'NA', '', 'JTKN22232771'),
(45, 'NA', 'NA', '', 'JTKN22232771'),
(46, 'NA', 'NA', '', 'JTKN22232771'),
(47, 'NA', 'NA', '', 'JTKN22232771'),
(48, 'NA', 'NA', '', 'JTKN22232771'),
(49, 'NA', 'NA', '', 'JTKN22232771'),
(50, 'Sharifsab', '', '', 'JTKN22232763'),
(51, 'Sharifsab', '', '', 'JTKN22232763'),
(52, 'Sharifsab', '', '', 'JTKN22232763'),
(53, 'Sharifsab', '', '', 'JTKN22232763'),
(54, 'Sharifsab', '', '', 'JTKN22232763'),
(55, 'Rahil nadaf DM', '224312', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232774certifcate1', 'JTKN22232774'),
(56, 'XYZ', 'XYZ', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232775certifcate1', 'JTKN22232775'),
(57, 'XYZ', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232775certifcate2', 'JTKN22232775'),
(58, 'XYZ', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232775certifcate3', 'JTKN22232775'),
(59, 'XYZ', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232775certifcate4', 'JTKN22232775'),
(60, 'XYZ', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232775certifcate5', 'JTKN22232775'),
(61, 'XYZ', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232775certifcate6', 'JTKN22232775'),
(62, 'VINOD', 'SSLC', 'http://jtechnoassociates.in/hrms/empphotos/JTKarnataka22232711certifcate1', 'JTKarnataka22232711'),
(63, 'Vinod', 'ITI', 'http://jtechnoassociates.in/hrms/empphotos/JTKarnataka22232711certifcate2', 'JTKarnataka22232711'),
(64, 'Vinod', 'Diploma electrical', 'http://jtechnoassociates.in/hrms/empphotos/JTKarnataka22232711certifcate3', 'JTKarnataka22232711'),
(65, 'NA', 'NA', 'http://jtechnoassociates.in/hrms/empphotos/JTKarnataka22232711certifcate4', 'JTKarnataka22232711'),
(66, 'NA', 'NA', '', 'JTKarnataka22232711'),
(67, 'NA', 'NA', 'http://jtechnoassociates.in/hrms/empphotos/JTKarnataka22232711certifcate6', 'JTKarnataka22232711'),
(68, 'Arunkumar', 'XYZ', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232785certifcate1', 'JTKN22232785'),
(69, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232785certifcate2', 'JTKN22232785'),
(70, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232785certifcate3', 'JTKN22232785'),
(71, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232785certifcate4', 'JTKN22232785'),
(72, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232785certifcate5', 'JTKN22232785'),
(73, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232785certifcate6', 'JTKN22232785'),
(74, 'Iti electrical', 'R210829062809', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232787certifcate1', 'JTKN22232787'),
(75, 'Iti electrical', 'R210829062809', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232787certifcate2', 'JTKN22232787'),
(76, 'SSLC', '376439', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232787certifcate3', 'JTKN22232787'),
(77, 'SSLC', '068804190497', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232789certifcate1', 'JTKN22232789'),
(78, 'ITI', '004224', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232789certifcate2', 'JTKN22232789'),
(79, 'Arunkumar', 'XYZ', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232794certifcate1', 'JTKN22232794'),
(80, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232794certifcate2', 'JTKN22232794'),
(81, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232794certifcate3', 'JTKN22232794'),
(82, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232794certifcate4', 'JTKN22232794'),
(83, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232794certifcate5', 'JTKN22232794'),
(84, 'Arunkumar', '123', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232794certifcate6', 'JTKN22232794'),
(85, 'Dharani', '20877256715', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232786certifcate1', 'JTTS22232786'),
(86, 'B.Tech', 'C54', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232802certifcate1', 'JTTS22232802'),
(87, 'SSLC', '20030169350', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232815certifcate1', 'JTKN22232815'),
(88, 'PUC', '33334467899', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232815certifcate2', 'JTKN22232815'),
(89, 'B.com', '57888999', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232815certifcate3', 'JTKN22232815'),
(90, 'SSLC', '20030169350', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232818certifcate1', 'JTKN22232818'),
(91, 'PUC', '33334467899', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232818certifcate2', 'JTKN22232818'),
(92, 'B.com', '57888999', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232818certifcate3', 'JTKN22232818'),
(93, 'Btech', '1', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232837certifcate1', 'JTTS22232837'),
(94, 'Btech', '1', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232852certifcate1', 'JTTS22232852'),
(95, 'Diploma Electrical Engineering', '15/17774', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232857certifcate1', 'JTKN22232857'),
(96, '10th', 'N142903', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232857certifcate2', 'JTKN22232857'),
(97, 'PGDCA', '1234', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232857certifcate3', 'JTKN22232857'),
(98, '12th', '12345', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232857certifcate4', 'JTKN22232857'),
(99, 'B tech', '0987', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232857certifcate5', 'JTKN22232857'),
(100, 'ITI', '123456', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232857certifcate6', 'JTKN22232857'),
(101, 'Xxxx', 'Xxxxx', '', 'JTKN22232858'),
(102, 'Xxx', 'Xxx', '', 'JTKN22232858'),
(103, 'Xxxx', 'Xxxx', '', 'JTKN22232858'),
(104, 'Xyz', 'Xyz', '', 'JTKN22232858'),
(105, 'Xyz', 'Xyz', '', 'JTKN22232858'),
(106, 'Xyz', 'Xyz', '', 'JTKN22232858'),
(107, 'Sabareesh SK', '20160425622', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232859certifcate1', 'JTKN22232859'),
(108, 'Sabareesh SK', '18310347', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232859certifcate2', 'JTKN22232859'),
(109, 'asfsf', '', '', 'JTKN22232762'),
(110, 'Engineering', 'HJH959', 'http://jtechnoassociates.in/hrms/empphotos/JTTS22232861certifcate1', 'JTTS22232861'),
(111, 'Rakshith', '78898788', '', 'JTKN22232864'),
(112, 'Abvlc', '1', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232865certifcate1', 'JTKN22232865'),
(113, 'Bcd', '2', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232865certifcate2', 'JTKN22232865'),
(114, 'Vhff', '3', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232865certifcate3', 'JTKN22232865'),
(115, 'Hjjbgt', '4', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232865certifcate4', 'JTKN22232865'),
(116, 'Ghcd', '5', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232865certifcate5', 'JTKN22232865'),
(117, 'Fjb', '6', 'http://jtechnoassociates.in/hrms/empphotos/JTKN22232865certifcate6', 'JTKN22232865'),
(118, 'Rakshith', '564677990', '', 'JTKN22232864'),
(119, 'Rakshith', '63637889', '', 'JTKN22232864'),
(120, 'Rakshith', '6363782oo', '', 'JTKN22232864'),
(121, 'Rakshith', '6e6728899', '', 'JTKN22232864'),
(122, 'Rakshith', '56662778889', '', 'JTKN22232864'),
(0, 'er', 'jh', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS10certifcate1', 'JTTS10'),
(0, 'rgree', '4565', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS15certifcate1', 'JTTS15'),
(0, 'aff', '654', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS16certifcate1', 'JTTS16'),
(0, 'afs', '454', '', 'JTTS22'),
(0, 'sdf', 'ew34', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS23certifcate1', 'JTTS23'),
(0, 'sfsf', '543', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS26certifcate2', 'JTTS26'),
(0, 'asf', 'ewt43', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS30certifcate1', 'JTTS30'),
(0, 'asf', 'ewt43', '', 'JTTS30'),
(0, 'asfa', 'af', '', 'JTTS30'),
(0, 'asf', 'ewt43', '', 'JTTS30'),
(0, 'asfa', '342', '', 'JTTS30'),
(0, 'asf1', 'ewt433', '', 'JTTS30'),
(0, 'asfa2', '3421', '', 'JTTS30'),
(0, 'VXGFH', 'G4', '', 'JTTS32'),
(0, 'H', '46H', '', 'JTTS32'),
(0, 'TH', 'HTRH6', '', 'JTTS32'),
(0, 'TRH', '6H', '', 'JTTS32'),
(0, 'TH', 'HRT6', '', 'JTTS32'),
(0, 'H', '6H', '', 'JTTS32'),
(0, 'VXGFH1', 'G41', '', 'JTTS32'),
(0, 'H1', '46H1', '', 'JTTS32'),
(0, 'TH1', 'HTRH61', '', 'JTTS32'),
(0, 'TRH1', '6H1', '', 'JTTS32'),
(0, 'TH1', 'HRT61', '', 'JTTS32'),
(0, 'H1', '6H1', '', 'JTTS32'),
(0, 'SDG', 'FG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate1', 'JTTS33'),
(0, 'SFG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate2', 'JTTS33'),
(0, 'DFG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate3', 'JTTS33'),
(0, 'DFG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate4', 'JTTS33'),
(0, 'FDG', 'FDG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate5', 'JTTS33'),
(0, 'FDG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate6', 'JTTS33'),
(0, 'SDG', 'FG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate1', 'JTTS33'),
(0, 'SFG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate2', 'JTTS33'),
(0, 'DFG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate3', 'JTTS33'),
(0, 'DFG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate4', 'JTTS33'),
(0, 'FDG', 'FDG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate5', 'JTTS33'),
(0, 'FDG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate6', 'JTTS33'),
(0, 'SDG', 'FG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate1', 'JTTS33'),
(0, 'SFG', 'DFG', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS33certifcate2', 'JTTS33'),
(0, 'DFG', 'DFG', '', 'JTTS33'),
(0, 'DFG', 'DFG', '', 'JTTS33'),
(0, 'FDG', 'FDG', '', 'JTTS33'),
(0, 'FDG', 'DFG', '', 'JTTS33'),
(0, 'SDG564', '455G', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS34certifcate1', 'JTTS34'),
(0, 'AC', 'ASC', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS34certifcate2', 'JTTS34'),
(0, 'SAD', 'D', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS34certifcate3', 'JTTS34'),
(0, 'ASD', 'ASD', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS34certifcate4', 'JTTS34'),
(0, 'SD', 'ASD', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS34certifcate5', 'JTTS34'),
(0, 'ASD', 'ASD', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS34certifcate6', 'JTTS34'),
(0, 'INTER', 'GTR4', '', 'JTTS38'),
(0, 'HFH', '4H6H', '', 'JTTS38'),
(0, 'FGH65', 'FGH6', '', 'JTTS38'),
(0, 'FH', '6H', '', 'JTTS38'),
(0, 'FGHGFH', 'FGH6', '', 'JTTS38'),
(0, 'FGH', 'FGH', '', 'JTTS38'),
(0, 'INTER', 'GTR4', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS38certifcate1', 'JTTS38'),
(0, 'HFH', '4H6H', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS38certifcate2', 'JTTS38'),
(0, 'FGH65', 'FGH6', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS38certifcate3', 'JTTS38'),
(0, 'FH', '6H', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS38certifcate4', 'JTTS38'),
(0, 'FGHGFH', 'FGH6', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS38certifcate5', 'JTTS38'),
(0, 'FGH', 'FGH', 'http://localhost/JTECHNOHRMS_NEW/empphotos/JTTS38certifcate6', 'JTTS38');

-- --------------------------------------------------------

--
-- Table structure for table `deployment_records`
--

CREATE TABLE `deployment_records` (
  `id` int(50) NOT NULL,
  `date` date DEFAULT NULL,
  `to_company` varchar(255) DEFAULT NULL,
  `to_address` text DEFAULT NULL,
  `location_company` varchar(255) DEFAULT NULL,
  `location_address` text DEFAULT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  `joindate` varchar(100) NOT NULL,
  `deployment_date` date DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `authorized_by` varchar(100) DEFAULT NULL,
  `position_of_authorizer` varchar(100) DEFAULT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deployment_records`
--

INSERT INTO `deployment_records` (`id`, `date`, `to_company`, `to_address`, `location_company`, `location_address`, `person_name`, `joindate`, `deployment_date`, `position`, `notes`, `authorized_by`, `position_of_authorizer`, `designation`) VALUES
(57, '1970-01-01', 'Software Engineer', 'Software', 'Accentel', 'HYD', 'Ganesh', '', '1970-01-01', 'Software Engineer', 'NA', 'admin', 'NULL', ''),
(60, '2025-07-09', 'wsds', 'software engin', 'Accentel', 'HYD', 'Ganesh', '1970-01-07', '1970-01-08', 'software', '', 'admin', 'NULL', ''),
(61, '2025-07-04', 'wsdsasdfsd', 'software engin', 'Accentel', 'HYD', 'Ganesh', '1970-01-01', '2025-07-04', 'wsdsasdfsd', 'Software Engineer', 'admin', 'NULL', ''),
(105, '2025-07-09', 'wsds', 'software engin', 'Accentel', 'HYD', 'Ganesh', '1970-01-07', '1970-01-01', 'opjj', 'lkjnlk', 'admin', 'NULL', ''),
(22232709, '2025-07-09', 'wsds', 'software engin', 'Accentel', 'HYD', 'Ganesh', '1970-01-07', '2024-07-16', 'Software engineer', 'Software Engineer', 'admin', 'NULL', ''),
(22232856, '2025-07-09', 'wsds', 'software engin', 'Accentel', 'HYD', 'Ganesh', '1970-01-07', '1970-01-01', 'Software Engineer', 'software', 'admin', 'NULL', ''),
(22232861, '2025-07-09', 'wsds', 'software engin', 'Accentel', 'HYD', 'Ganesh', '1970-01-07', '2025-03-21', 'software', 'Deployment Order', 'admin', 'NULL', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empid` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `fdob` varchar(50) NOT NULL,
  `fnumber` bigint(50) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `mdob` varchar(50) NOT NULL,
  `wname` varchar(80) NOT NULL,
  `sdob` varchar(50) NOT NULL,
  `relation` varchar(80) NOT NULL,
  `rno` bigint(20) NOT NULL,
  `nok` varchar(80) NOT NULL,
  `childname` varchar(80) NOT NULL,
  `adharcardno` varchar(80) NOT NULL,
  `adharphoto` varchar(80) NOT NULL,
  `adharphotoback` varchar(80) NOT NULL,
  `mcertificate` varchar(50) NOT NULL,
  `mphoto` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `state` varchar(80) NOT NULL,
  `qualification` varchar(70) NOT NULL,
  `DOJ` varchar(70) NOT NULL,
  `designation` varchar(80) NOT NULL,
  `uan` varchar(70) NOT NULL,
  `pan` varchar(70) NOT NULL,
  `panphoto` varchar(80) NOT NULL,
  `ESI_NO` varchar(70) NOT NULL,
  `PFNO` int(50) NOT NULL,
  `photo` varchar(80) NOT NULL,
  `emp_email` varchar(80) NOT NULL,
  `user` varchar(30) NOT NULL,
  `employeeid` varchar(80) NOT NULL,
  `bname` varchar(80) NOT NULL,
  `branch` varchar(80) NOT NULL,
  `ifsc` varchar(80) NOT NULL,
  `accno` varchar(80) NOT NULL,
  `bphoto` varchar(80) NOT NULL,
  `loggedin` varchar(50) NOT NULL,
  `roles` varchar(80) NOT NULL,
  `category` varchar(80) NOT NULL,
  `DOR` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL,
  `reason` varchar(80) NOT NULL,
  `appointmentcategory` varchar(80) NOT NULL,
  `sal_th` varchar(80) NOT NULL,
  `apt_date` date NOT NULL,
  `file` varchar(80) NOT NULL,
  `start_date` varchar(70) NOT NULL,
  `last_date` varchar(70) NOT NULL,
  `reason1` varchar(80) NOT NULL,
  `reason2` varchar(80) NOT NULL,
  `reason3` varchar(80) NOT NULL,
  `reason4` varchar(80) NOT NULL,
  `bg` varchar(80) NOT NULL,
  `stat` varchar(80) NOT NULL,
  `default` varchar(80) NOT NULL,
  `licensestatus` varchar(80) NOT NULL,
  `uniform` varchar(50) NOT NULL,
  `uniformisdate` varchar(80) NOT NULL,
  `sitename` varchar(80) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `licimg` varchar(80) NOT NULL,
  `empsign` varchar(80) NOT NULL,
  `permaddress` varchar(80) NOT NULL,
  `localaddress` varchar(80) NOT NULL,
  `refeaddress` varchar(80) NOT NULL,
  `ushirt` varchar(80) NOT NULL,
  `shirtsize` varchar(80) NOT NULL,
  `shirtqty` int(30) NOT NULL,
  `upant` varchar(80) NOT NULL,
  `pantsize` varchar(80) NOT NULL,
  `pantqty` int(30) NOT NULL,
  `ushoe` varchar(80) NOT NULL,
  `shoesize` varchar(80) NOT NULL,
  `shoeqty` int(30) NOT NULL,
  `idcard` varchar(80) NOT NULL,
  `idcarddt` varchar(80) NOT NULL,
  `nname` varchar(80) NOT NULL,
  `nrelation` varchar(80) NOT NULL,
  `naddress` varchar(80) NOT NULL,
  `ndob` varchar(70) NOT NULL,
  `namount` varchar(70) NOT NULL,
  `tools` varchar(50) NOT NULL,
  `tservices` varchar(80) NOT NULL,
  `managerial` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empid`, `emp_name`, `DOB`, `gender`, `maritalstatus`, `contactno`, `fname`, `fdob`, `fnumber`, `mname`, `mdob`, `wname`, `sdob`, `relation`, `rno`, `nok`, `childname`, `adharcardno`, `adharphoto`, `adharphotoback`, `mcertificate`, `mphoto`, `address`, `state`, `qualification`, `DOJ`, `designation`, `uan`, `pan`, `panphoto`, `ESI_NO`, `PFNO`, `photo`, `emp_email`, `user`, `employeeid`, `bname`, `branch`, `ifsc`, `accno`, `bphoto`, `loggedin`, `roles`, `category`, `DOR`, `status`, `reason`, `appointmentcategory`, `sal_th`, `apt_date`, `file`, `start_date`, `last_date`, `reason1`, `reason2`, `reason3`, `reason4`, `bg`, `stat`, `default`, `licensestatus`, `uniform`, `uniformisdate`, `sitename`, `username`, `password`, `licimg`, `empsign`, `permaddress`, `localaddress`, `refeaddress`, `ushirt`, `shirtsize`, `shirtqty`, `upant`, `pantsize`, `pantqty`, `ushoe`, `shoesize`, `shoeqty`, `idcard`, `idcarddt`, `nname`, `nrelation`, `naddress`, `ndob`, `namount`, `tools`, `tservices`, `managerial`) VALUES
(103, 'Ganesh', '', '', '', 6565656565, '', '', 0, '', '', '', '', '', 0, '', '', '446781384742', '', '', 'Yes', '', '', 'TS', '', '', '', '', '', '', '', 0, '', '', '', 'JTTS103', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', 'Saree', '', '', 'JTTS103', '', '', '', '', '', '', 'T-Shirt Block', '', 0, 'NA', '', 0, 'Fiber', '', 0, '', '', '', '', '', '', '', '', '', ''),
(104, 'Shiva', '', '', '', 6532323232, '', '', 0, '', '', '', '', '', 0, '', '', '45465463', '', '', 'Yes', '', 'Hyderabad', 'AP', '', '1970-01-10', 'Developer', '', '', '', '', 0, '', '', '', 'JTAP104', '', 'Hyderabad', '', '', '', '', '', '', '', '', '', 'Software Engineer', '21000', '2025-05-01', 'Requirements_BEST.pdf', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', 'Saree', '', '', 'JTAP104', '', '', '', '', '', '', 'T-Shirt Block', '', 0, 'NA', '', 0, 'Fiber', '', 0, '', '', '', '', '', '', '', '', '', ''),
(105, 'Raju', '', '', '', 3655542121, '', '', 0, '', '', '', '', '', 0, '', '', '34665466', '', '', 'Yes', '', '', 'KN', '', '', '', '', '', '', '', 0, '', '', '', 'JTKN105', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', 'Saree', '', '', 'JTKN105', '', '', '', '', '', '', 'T-Shirt Block', '', 0, 'NA', '', 0, 'Fiber', '', 0, '', '', '', '', '', '', '', '', '', ''),
(106, 'Ramesh', '', '', '', 65656565556, '', '', 0, '', '', '', '', '', 0, '', '', '6598542154543', '', '', 'Yes', '', '', 'KL', '', '', '', '', '', '', '', 0, '', '', '', 'JTKL106', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', 'Saree', '', '', 'JTKL106', '', '', '', '', '', '', 'T-Shirt Block', '', 0, 'NA', '', 0, 'Fiber', '', 0, '', '', '', '', '', '', '', '', '', ''),
(107, 'Ragu', '', '', '', 54545455454, '', '', 0, '', '', '', '', '', 0, '', '', '446781384745', '', '', 'Yes', '', '', 'OD', '', '', '', '', '', '', '', 0, '', '', '', 'JTOD107', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', 'Saree', '', '', 'JTOD107', '', '', '', '', '', '', 'T-Shirt Block', '', 0, 'NA', '', 0, 'Fiber', '', 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `alternateno` int(20) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL,
  `wname` varchar(500) NOT NULL,
  `relation` varchar(500) NOT NULL,
  `rno` bigint(20) NOT NULL,
  `nok` varchar(100) NOT NULL,
  `childname` varchar(500) NOT NULL,
  `adharcardno` int(20) NOT NULL,
  `adharphoto` varchar(300) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `DOJ` int(20) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `uan` varchar(500) NOT NULL,
  `pan` varchar(500) NOT NULL,
  `panphoto` varchar(300) NOT NULL,
  `ESI_NO` varchar(20) NOT NULL,
  `PFNO` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `emp_email` varchar(60) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user` varchar(30) NOT NULL,
  `employeeid` varchar(30) NOT NULL,
  `bname` varchar(500) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `ifsc` varchar(500) NOT NULL,
  `accno` varchar(500) NOT NULL,
  `bphoto` varchar(500) NOT NULL,
  `level1` varchar(100) NOT NULL,
  `level2` varchar(100) NOT NULL,
  `level3` varchar(100) NOT NULL,
  `level4` varchar(100) NOT NULL,
  `level5` varchar(100) NOT NULL,
  `level6` varchar(100) NOT NULL,
  `level7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employeetoollist`
--

CREATE TABLE `employeetoollist` (
  `id` int(11) NOT NULL,
  `id1` int(11) NOT NULL,
  `employeeid` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `toolname` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `state` varchar(500) NOT NULL,
  `returned` varchar(100) NOT NULL DEFAULT 'No',
  `due` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emps`
--

CREATE TABLE `emps` (
  `empid` int(11) NOT NULL,
  `esic_number` varchar(60) NOT NULL,
  `emp_name` varchar(150) NOT NULL,
  `DOB` varchar(70) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `maritalstatus` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `fnumber` varchar(100) NOT NULL,
  `fdob` varchar(100) NOT NULL,
  `fadharno` varchar(80) NOT NULL,
  `fphoto` varchar(100) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `mdob` varchar(100) NOT NULL,
  `madharno` varchar(80) NOT NULL,
  `mophoto` varchar(100) NOT NULL,
  `wname` varchar(150) NOT NULL,
  `sdob` varchar(100) NOT NULL,
  `sadharno` varchar(80) NOT NULL,
  `sphoto` varchar(100) NOT NULL,
  `relation` varchar(150) NOT NULL,
  `rno` varchar(100) NOT NULL,
  `nok` varchar(100) NOT NULL,
  `bg` varchar(100) NOT NULL,
  `childname` varchar(200) NOT NULL,
  `adharcardno` varchar(100) NOT NULL,
  `adharphoto` varchar(100) NOT NULL,
  `adharphotoback` varchar(100) NOT NULL,
  `mcertificate` varchar(150) NOT NULL,
  `mphoto` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(100) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `qualphoto` varchar(100) NOT NULL,
  `DOJ` varchar(100) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `uan` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `panphoto` varchar(100) NOT NULL,
  `ESI_NO` varchar(100) NOT NULL,
  `PFNO` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `stat` varchar(80) NOT NULL,
  `status` varchar(100) NOT NULL,
  `emp_email` varchar(150) NOT NULL,
  `user` varchar(150) NOT NULL,
  `employeeid` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `licimg` varchar(100) NOT NULL,
  `empsign` varchar(150) NOT NULL,
  `permaddress` varchar(200) NOT NULL,
  `localaddress` varchar(200) NOT NULL,
  `refeaddress` varchar(200) NOT NULL,
  `licensestatus` varchar(100) NOT NULL,
  `tservices` varchar(100) NOT NULL,
  `managerial` varchar(100) NOT NULL,
  `sitename` varchar(150) NOT NULL,
  `tools` varchar(150) NOT NULL,
  `stutas` varchar(100) NOT NULL,
  `sal_th` varchar(100) NOT NULL,
  `appointmentcategory` varchar(80) NOT NULL,
  `apt_date` varchar(80) NOT NULL,
  `file` varchar(80) NOT NULL,
  `branch` varchar(80) NOT NULL,
  `mole1` varchar(150) NOT NULL,
  `mole2` varchar(150) NOT NULL,
  `fromdate` varchar(80) NOT NULL,
  `todate` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `emps`
--

INSERT INTO `emps` (`empid`, `esic_number`, `emp_name`, `DOB`, `gender`, `maritalstatus`, `contactno`, `fname`, `fnumber`, `fdob`, `fadharno`, `fphoto`, `mname`, `mdob`, `madharno`, `mophoto`, `wname`, `sdob`, `sadharno`, `sphoto`, `relation`, `rno`, `nok`, `bg`, `childname`, `adharcardno`, `adharphoto`, `adharphotoback`, `mcertificate`, `mphoto`, `address`, `state`, `qualification`, `qualphoto`, `DOJ`, `designation`, `uan`, `pan`, `panphoto`, `ESI_NO`, `PFNO`, `photo`, `stat`, `status`, `emp_email`, `user`, `employeeid`, `username`, `password`, `licimg`, `empsign`, `permaddress`, `localaddress`, `refeaddress`, `licensestatus`, `tservices`, `managerial`, `sitename`, `tools`, `stutas`, `sal_th`, `appointmentcategory`, `apt_date`, `file`, `branch`, `mole1`, `mole2`, `fromdate`, `todate`) VALUES
(100, '12345', 'Shiva Ganesh', '1999-07-06', 'male', 'married', '7207161882', 'Damodar', '9642935530', '1980-02-05', '875984758547', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100fphoto', 'Bharathi', '1971-02-03', '8543654876', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100mophoto', '', '', '', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100sphoto', 'Father', '', '', '', '', '4468138442', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100adharimg', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100adharphotoback', 'Yes', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100mphoto', 'HYD', 'AP', 'Btech', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100qualphoto', '2024-07-10', 'software engineer', '385HH', 'DGKPD4097K', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100panimg', '85235JK', '57295HJKH', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100empimg', 'UNBLOCKED', '', 'shivaganesh0@gmail.com', '', 'KVRAP100', 'KVRAP100', '', 'http://localhost/BESTHRMS_LATEST/empphotos/KVRAP100licimg', 'http://localhost/BESTHRMS_LATEST//empphotos/KVRAP100empsign.png', 'HYD', 'HYDERABAD', 'HYDERABAD', 'Available', 'NA', 'TESTING', 'Accentel', 'Hammersss', '', '', '', '', '', '', 'LEFT', 'RIGHT', '2025-05-01', '2025-09-13'),
(101, '3446', 'dhdhdh', '2025-05-09', '', '', '3656546', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6546', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'UNBLOCKED', 'resigned', '', '', 'KVRAP101', 'KVRAP101', '', '', '', '', '', '', 'NA', 'Wiremen', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, '5345', 'dyh', '2025-05-08', '', '', '6546', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4565', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'UNBLOCKED', 'resigned', '', '', 'KVRAP102', 'KVRAP102', '', '', '', '', '', '', 'NA', 'Wiremen', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, '436565', 'htrh', '2025-05-08', 'male', 'married', '456546', '', '', '', '', '', '', '', '', '', 'dfhh', '', '45654', '45654646', '', '', '', '', '', '456546', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', '', 'KVRAP103', 'KVRAP103', '', '', '', '', '', '', 'NA', 'NA', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, '54654', 'gdfydyy', '2025-05-05', 'male', 'married', '657655', '', '', '', '', '', '', '', '', '', '5465', '', '123', '45654544757', '', '', '', '', '', '45645457', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', '', 'KVRAP104', 'KVRAP104', '', '', '', '', '', '', 'NA', 'NA', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, '235', '34543', '2025-05-22', 'male', 'married', '3453345', '', '', '', '', '', '', '', '', '', 'gdfgdg', '', '', '3455', '', '', '', '', '', '345435', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', '', 'KVRAP105', 'KVRAP105', '', '', '', '', '', '', 'NA', 'Wiremen', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, '56', 'ghjj', '2025-05-24', 'male', 'married', '768768', '', '', '', '', '', '', '', '', '', 'ghjttj', '', '', '575876', '', '', '', '', '', '544', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', '', 'KVRAP106', 'KVRAP106', '', '', '', '', '', '', 'NA', 'Wiremen', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, '2353', 'fgdfg', '2025-05-31', 'male', 'married', '45645', '', '', '', '', '', '', '', '', '', 'dhhh', '2025-05-09', '56564', '', '', '', '', '', '', '3455', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'UNBLOCKED', '', '', '', 'KVRAP107', 'KVRAP107', '', '', '', '', '', '', 'NA', 'Wiremen', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, '23535', 'ert', '2025-05-22', '', '', '345435', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '343', '', '', 'Yes', '', '', 'AP', '', '', '', '', '', '', '', '', '', '', 'BLOCKED', '', '', '', 'KVRAP108', 'KVRAP108', '', '', '', '', '', '', 'NA', 'NA', '', '', 'Hammersss1233', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_ids`
--

CREATE TABLE `emp_ids` (
  `id` int(100) NOT NULL,
  `new_empid` varchar(500) NOT NULL,
  `old_empid` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_uniform`
--

CREATE TABLE `emp_uniform` (
  `id` int(50) NOT NULL,
  `uniform` varchar(100) NOT NULL,
  `ushirt` varchar(100) NOT NULL,
  `shirtsize` int(100) NOT NULL,
  `shirtqty` int(100) NOT NULL,
  `upant` varchar(100) NOT NULL,
  `pantsize` int(100) NOT NULL,
  `pantqty` int(100) NOT NULL,
  `ushoe` varchar(100) NOT NULL,
  `shoesize` int(100) NOT NULL,
  `shoeqty` int(100) NOT NULL,
  `uniformisdate` varchar(100) NOT NULL,
  `employeeid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `emp_uniform`
--

INSERT INTO `emp_uniform` (`id`, `uniform`, `ushirt`, `shirtsize`, `shirtqty`, `upant`, `pantsize`, `pantqty`, `ushoe`, `shoesize`, `shoeqty`, `uniformisdate`, `employeeid`) VALUES
(1, '', '', 42, 22, 'Block-Pant', 32, 0, 'Metal', 10, 6, '2025-04-11', 'KVRAP37'),
(2, 'Apron', 'Knight frank', 42, 22, 'Regular Pant', 32, 5, 'Steel', 5, 6, '2025-04-04', 'KVRAP51'),
(3, 'Saree', 'T-Shirt Block', 4223, 2224, 'Jeans', 3224, 5225, 'Fiber', 1025, 6224, '2025-04-17', 'KVRAP53'),
(4, 'Apron', 'T-Shirt Blue', 42, 22, 'Regular Pant', 322, 1, 'Metal', 10, 6, '2025-04-23', 'KVRAP54'),
(5, 'Apron', 'Knight frank', 42, 22, 'Block-Pant', 32, 5, 'Metal', 10, 6, '2025-05-09', 'KVRAP84'),
(6, 'Apron', 'T-Shirt Block', 42, 22, 'Jeans Pant', 32, 5, 'Metal', 10, 0, '2025-05-08', 'KVRAP85'),
(7, 'Apron', 'T-Shirt Blue', 422, 22, 'Jeans', 32, 5, 'Metal', 10, 6, '2025-05-29', 'KVRAP100');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `edate` date NOT NULL,
  `state` varchar(20) NOT NULL,
  `expdesc` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Pending',
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expensesmanager`
--

CREATE TABLE `expensesmanager` (
  `id` int(11) NOT NULL,
  `productname` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `supplier` varchar(1000) NOT NULL,
  `givento` varchar(1000) NOT NULL,
  `date` varchar(500) NOT NULL,
  `month` int(11) NOT NULL,
  `type` varchar(500) NOT NULL,
  `expensetype` varchar(1000) NOT NULL,
  `shopid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_admin_login`
--

CREATE TABLE `hrms_admin_login` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `hint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrms_login`
--

CREATE TABLE `hrms_login` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `hint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hrms_login`
--

INSERT INTO `hrms_login` (`id`, `user`, `pwd`, `empname`, `hint`) VALUES
(1, 'admin', 'c8370ad37d0828c82a46f623b5ea225e', 'admin', '3691215');

-- --------------------------------------------------------

--
-- Table structure for table `hr_user`
--

CREATE TABLE `hr_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `menus` varchar(100) NOT NULL,
  `currentdate` datetime NOT NULL,
  `auth_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `shippingto` text NOT NULL,
  `billingto` text NOT NULL,
  `e1` varchar(50) NOT NULL,
  `e2` varchar(50) NOT NULL,
  `e3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_districts`
--

CREATE TABLE `location_districts` (
  `id` int(11) NOT NULL,
  `state_id` varchar(100) NOT NULL,
  `districts` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_states`
--

CREATE TABLE `location_states` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategoryid` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `shopid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notificationdetails`
--

CREATE TABLE `notificationdetails` (
  `id` int(11) NOT NULL,
  `ticker` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `datetime` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `shopid` int(11) NOT NULL DEFAULT 0,
  `menuid` int(11) NOT NULL DEFAULT 0,
  `menuname` varchar(100) DEFAULT NULL,
  `itemcount` int(11) DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `timeoforder` date DEFAULT NULL,
  `authby` varchar(200) NOT NULL,
  `payment_mode` varchar(500) NOT NULL DEFAULT 'cash',
  `timestampserver` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `org_address` varchar(255) NOT NULL,
  `org_email` varchar(30) NOT NULL,
  `org_phone` bigint(12) NOT NULL,
  `org_mobile` bigint(12) NOT NULL,
  `org_url` varchar(150) NOT NULL,
  `org_code` varchar(15) NOT NULL,
  `vendor_name` text NOT NULL,
  `ap_address` text NOT NULL,
  `vendor_code` varchar(500) NOT NULL,
  `vendor_name1` text NOT NULL,
  `tg_address` text NOT NULL,
  `vendor_code1` varchar(500) NOT NULL,
  `vendor_name2` varchar(100) NOT NULL,
  `kl_address` varchar(255) NOT NULL,
  `vendor_code2` varchar(500) NOT NULL,
  `kl_gst` varchar(30) NOT NULL,
  `kl_pan` varchar(500) NOT NULL,
  `ap_gst` varchar(50) NOT NULL,
  `ap_pan` varchar(500) NOT NULL,
  `tg_gst` varchar(50) NOT NULL,
  `tg_pan` varchar(500) NOT NULL,
  `vendor_name3` varchar(500) NOT NULL,
  `tn_address` varchar(256) NOT NULL,
  `tn_gst` varchar(256) NOT NULL,
  `tn_pan` varchar(500) NOT NULL,
  `vendor_code3` varchar(500) NOT NULL,
  `vendor_name4` varchar(500) NOT NULL,
  `kn_address` varchar(255) NOT NULL,
  `kn_gst` varchar(50) NOT NULL,
  `kn_pan` varchar(500) NOT NULL,
  `vendor_code4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qutcount`
--

CREATE TABLE `qutcount` (
  `id` int(11) NOT NULL,
  `state` varchar(10) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phoneno` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `loggedin` varchar(500) NOT NULL DEFAULT 'nactive',
  `designation` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `pfnumber` varchar(30) NOT NULL,
  `pfuan` varchar(30) NOT NULL,
  `esinumber` varchar(30) NOT NULL,
  `acno` varchar(30) NOT NULL,
  `absents` varchar(10) NOT NULL,
  `basic` float(10,2) NOT NULL,
  `others` float(10,2) NOT NULL,
  `takehome` float(10,2) NOT NULL,
  `daf` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(100) NOT NULL,
  `basicamount` varchar(100) NOT NULL,
  `daamount` int(100) NOT NULL,
  `hraamount` int(100) NOT NULL,
  `otherallowance` int(100) NOT NULL,
  `advleave` int(100) NOT NULL,
  `advbonus` int(100) NOT NULL,
  `totalmonthlyem` int(100) NOT NULL,
  `employeeid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `basicamount`, `daamount`, `hraamount`, `otherallowance`, `advleave`, `advbonus`, `totalmonthlyem`, `employeeid`) VALUES
(8, '3451', 3461, 361, 4561, 4561, 4561, 4651, 'KVRAP86'),
(9, '1', 24, 3, 3, 5, 4, 40, 'KVRAP90'),
(10, '34', 23, 4, 2, 5, 2, 70, 'KVRAP100'),
(11, '3422', 511, 321, 211, 421, 331, 5217, 'KVRAP108');

-- --------------------------------------------------------

--
-- Table structure for table `shopdetails`
--

CREATE TABLE `shopdetails` (
  `shopid` int(11) NOT NULL,
  `shopname` varchar(500) NOT NULL,
  `shopphone` bigint(20) NOT NULL,
  `shopaddress` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `salt` varchar(1000) NOT NULL,
  `firebasetoken` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockentry`
--

CREATE TABLE `stockentry` (
  `orderid` int(11) NOT NULL,
  `shopid` int(11) NOT NULL DEFAULT 0,
  `menuid` int(11) NOT NULL DEFAULT 0,
  `menuname` varchar(100) DEFAULT NULL,
  `itemcount` int(11) DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `timeoforder` date DEFAULT NULL,
  `authby` varchar(200) NOT NULL,
  `payment_mode` varchar(500) NOT NULL DEFAULT 'cash',
  `timestampserver` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` varchar(100) NOT NULL DEFAULT 'stock'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategoryid` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `categoryname` varchar(100) DEFAULT NULL,
  `shopid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

CREATE TABLE `tool` (
  `id` int(11) NOT NULL,
  `tcname` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tname` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tprice` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `total_qty` varchar(500) NOT NULL,
  `bal_qty` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tool_phr_master`
--

CREATE TABLE `tool_phr_master` (
  `id` int(50) NOT NULL,
  `id1` int(50) NOT NULL,
  `date` date NOT NULL,
  `toolname` text NOT NULL,
  `rate` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `baseamount` int(11) NOT NULL,
  `gstamnt` varchar(200) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_nominee`
--
ALTER TABLE `bank_nominee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deployment_records`
--
ALTER TABLE `deployment_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `emps`
--
ALTER TABLE `emps`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `emp_uniform`
--
ALTER TABLE `emp_uniform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_nominee`
--
ALTER TABLE `bank_nominee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deployment_records`
--
ALTER TABLE `deployment_records`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22232862;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `emps`
--
ALTER TABLE `emps`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `emp_uniform`
--
ALTER TABLE `emp_uniform`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
