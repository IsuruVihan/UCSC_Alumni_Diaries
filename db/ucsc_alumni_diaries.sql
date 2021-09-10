-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2021 at 07:31 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucsc_alumni_diaries`
--

-- --------------------------------------------------------

--
-- Table structure for table `associationcash`
--

DROP TABLE IF EXISTS `associationcash`;
CREATE TABLE IF NOT EXISTS `associationcash` (
  `Id` int(11) NOT NULL,
  `Amount` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associationcash`
--

INSERT INTO `associationcash` (`Id`, `Amount`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `associationitems`
--

DROP TABLE IF EXISTS `associationitems`;
CREATE TABLE IF NOT EXISTS `associationitems` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bannedaccounts`
--

DROP TABLE IF EXISTS `bannedaccounts`;
CREATE TABLE IF NOT EXISTS `bannedaccounts` (
  `Email` varchar(50) NOT NULL,
  `TBEmail` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashdonations`
--

DROP TABLE IF EXISTS `cashdonations`;
CREATE TABLE IF NOT EXISTS `cashdonations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DonorName` text NOT NULL,
  `DonorEmail` varchar(50) NOT NULL,
  `DonationFor` varchar(100) NOT NULL,
  `DonatedFrom` enum('Bank','PayHere') NOT NULL,
  `PayslipSrc` varchar(50) DEFAULT NULL,
  `Amount` double NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isAccepted` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatmessages`
--

DROP TABLE IF EXISTS `chatmessages`;
CREATE TABLE IF NOT EXISTS `chatmessages` (
  `ChatId` int(11) NOT NULL,
  `isGroupChat` tinyint(1) NOT NULL,
  `SenderEmail` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `PicSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ChatId`,`isGroupChat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentsforposts`
--

DROP TABLE IF EXISTS `commentsforposts`;
CREATE TABLE IF NOT EXISTS `commentsforposts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PostId` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(250) NOT NULL,
  `PicSrc` varchar(50) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committeechatmessages`
--

DROP TABLE IF EXISTS `committeechatmessages`;
CREATE TABLE IF NOT EXISTS `committeechatmessages` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectId` int(11) NOT NULL,
  `SenderEmail` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `PicSrc` varchar(50) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committeemembers`
--

DROP TABLE IF EXISTS `committeemembers`;
CREATE TABLE IF NOT EXISTS `committeemembers` (
  `Email` varchar(50) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `Type` enum('Member','Coordinator') NOT NULL,
  PRIMARY KEY (`Email`,`ProjectId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupchats`
--

DROP TABLE IF EXISTS `groupchats`;
CREATE TABLE IF NOT EXISTS `groupchats` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OwnerEmail` varchar(50) NOT NULL,
  `ParticipantsGroupId` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemdonations`
--

DROP TABLE IF EXISTS `itemdonations`;
CREATE TABLE IF NOT EXISTS `itemdonations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DonorName` text NOT NULL,
  `DonorEmail` varchar(50) NOT NULL,
  `DonationFor` varchar(100) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isAccepted` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberaccountrequests`
--

DROP TABLE IF EXISTS `memberaccountrequests`;
CREATE TABLE IF NOT EXISTS `memberaccountrequests` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `NameWithInitials` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Address` varchar(100) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Batch` enum('2004/2005','2005/2006','2006/2007','2007/2008','2008/2009','2009/2010','2010/2011','2011/2012','2012/2013','2013/2014','2014/2015','2015/2016','2016/2017','2017/2018','2018/2019','2019/2020','2020/2021','2021/2022') NOT NULL,
  `IndexNumber` bigint(20) NOT NULL,
  `isRejected` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participantgroups`
--

DROP TABLE IF EXISTS `participantgroups`;
CREATE TABLE IF NOT EXISTS `participantgroups` (
  `GroupChatId` int(11) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  PRIMARY KEY (`GroupChatId`,`UserEmail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `PicSrc` varchar(50) DEFAULT NULL,
  `isImportant` tinyint(1) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privatechats`
--

DROP TABLE IF EXISTS `privatechats`;
CREATE TABLE IF NOT EXISTS `privatechats` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OwnerEmail` varchar(50) NOT NULL,
  `GuestEmail` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectcash`
--

DROP TABLE IF EXISTS `projectcash`;
CREATE TABLE IF NOT EXISTS `projectcash` (
  `ProjectId` int(11) NOT NULL,
  `Amount` double NOT NULL,
  PRIMARY KEY (`ProjectId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectcashspendings`
--

DROP TABLE IF EXISTS `projectcashspendings`;
CREATE TABLE IF NOT EXISTS `projectcashspendings` (
  `ProjectId` int(11) NOT NULL,
  `SpentAmount` double NOT NULL,
  `Description` varchar(250) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ProjectId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectitems`
--

DROP TABLE IF EXISTS `projectitems`;
CREATE TABLE IF NOT EXISTS `projectitems` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectId` int(11) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectitemspendings`
--

DROP TABLE IF EXISTS `projectitemspendings`;
CREATE TABLE IF NOT EXISTS `projectitemspendings` (
  `ItemId` int(11) NOT NULL,
  `SpentQuantity` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ItemId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Status` enum('NotStartedYet','Ongoing','Closed','Completed') NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reactsforcomments`
--

DROP TABLE IF EXISTS `reactsforcomments`;
CREATE TABLE IF NOT EXISTS `reactsforcomments` (
  `UserEmail` varchar(50) NOT NULL,
  `CommentId` int(11) NOT NULL,
  `ReactType` enum('Like','Dislike') NOT NULL,
  PRIMARY KEY (`UserEmail`,`CommentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reactsforposts`
--

DROP TABLE IF EXISTS `reactsforposts`;
CREATE TABLE IF NOT EXISTS `reactsforposts` (
  `UserEmail` varchar(50) NOT NULL,
  `PostId` int(11) NOT NULL,
  `ReactType` enum('Like','Dislike') NOT NULL,
  PRIMARY KEY (`UserEmail`,`PostId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeredmembers`
--

DROP TABLE IF EXISTS `registeredmembers`;
CREATE TABLE IF NOT EXISTS `registeredmembers` (
  `Email` varchar(50) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `NameWithInitials` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Address` varchar(250) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Batch` enum('2004/2005','2005/2006','2006/2007','2007/2008','2008/2009','2009/2010','2010/2011','2011/2012','2012/2013','2013/2014','2014/2015','2015/2016','2016/2017','2017/2018','2018/2019','2019/2020','2020/2021','2021/2022') NOT NULL,
  `IndexNumber` bigint(20) NOT NULL,
  `PicSrc` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `AccType` enum('Member','TopBoard') NOT NULL,
  `SubscriptionType` enum('Monthly','Anually') NOT NULL,
  `SubscriptionDue` timestamp NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reportsforcomments`
--

DROP TABLE IF EXISTS `reportsforcomments`;
CREATE TABLE IF NOT EXISTS `reportsforcomments` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CommentId` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reportsforposts`
--

DROP TABLE IF EXISTS `reportsforposts`;
CREATE TABLE IF NOT EXISTS `reportsforposts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PostId` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `starredposts`
--

DROP TABLE IF EXISTS `starredposts`;
CREATE TABLE IF NOT EXISTS `starredposts` (
  `Email` varchar(50) NOT NULL,
  `PostId` int(11) NOT NULL,
  PRIMARY KEY (`Email`,`PostId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionsdone`
--

DROP TABLE IF EXISTS `subscriptionsdone`;
CREATE TABLE IF NOT EXISTS `subscriptionsdone` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DonatedFrom` enum('Bank','PayHere') NOT NULL,
  `PayslipSrc` varchar(50) DEFAULT NULL,
  `isAccepted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptiontypes`
--

DROP TABLE IF EXISTS `subscriptiontypes`;
CREATE TABLE IF NOT EXISTS `subscriptiontypes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TypeName` text NOT NULL,
  `Amount` double NOT NULL,
  `Duration` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptiontypes`
--

INSERT INTO `subscriptiontypes` (`Id`, `TypeName`, `Amount`, `Duration`) VALUES
(1, 'Monthly', 500, 30),
(2, 'Anually', 5000, 360);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

DROP TABLE IF EXISTS `suggestions`;
CREATE TABLE IF NOT EXISTS `suggestions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `PicSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
