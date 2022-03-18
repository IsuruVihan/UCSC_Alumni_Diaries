-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 12:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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

CREATE TABLE `associationcash` (
  `Id` int(11) NOT NULL,
  `Amount` double NOT NULL DEFAULT 0
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

CREATE TABLE `associationitems` (
  `Id` int(11) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bannedaccounts`
--

CREATE TABLE `bannedaccounts` (
  `Email` varchar(50) NOT NULL,
  `TBEmail` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashdonations`
--

CREATE TABLE `cashdonations` (
  `Id` int(11) NOT NULL,
  `DonorName` text NOT NULL,
  `DonorEmail` varchar(50) NOT NULL,
  `DonationFor` varchar(100) NOT NULL,
  `DonatedFrom` enum('Bank','PayHere') NOT NULL,
  `PayslipSrc` varchar(50) DEFAULT NULL,
  `Amount` double NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isAccepted` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatmessages`
--

CREATE TABLE `chatmessages` (
  `ChatId` int(11) NOT NULL,
  `isGroupChat` tinyint(1) NOT NULL,
  `SenderEmail` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `PicSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentsforposts`
--

CREATE TABLE `commentsforposts` (
  `Id` int(11) NOT NULL,
  `PostId` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(250) NOT NULL,
  `PicSrc` varchar(50) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committeechatmessages`
--

CREATE TABLE `committeechatmessages` (
  `Id` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `SenderEmail` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `PicSrc` varchar(50) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committeemembers`
--

CREATE TABLE `committeemembers` (
  `Email` varchar(50) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `Type` enum('Member','Coordinator') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupchats`
--

CREATE TABLE `groupchats` (
  `Id` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `ParticipantsGroupId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemdonations`
--

CREATE TABLE `itemdonations` (
  `Id` int(11) NOT NULL,
  `DonorName` text NOT NULL,
  `DonorEmail` varchar(50) NOT NULL,
  `DonationFor` varchar(100) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isAccepted` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberaccountrequests`
--

CREATE TABLE `memberaccountrequests` (
  `Id` int(11) NOT NULL,
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
  `isRejected` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberaccountrequests`
--

INSERT INTO `memberaccountrequests` (`Id`, `Email`, `FirstName`, `LastName`, `NameWithInitials`, `Gender`, `Address`, `NIC`, `ContactNumber`, `Batch`, `IndexNumber`, `isRejected`) VALUES
(1, 'pinsara.dhanika@gmail.com', 'Dhanika', 'Wickramathilake', 'P.D Wickramathilake', 'Male', '64/6 Ekiriyagala foot road kegalle', '970100989V', '0719135960', '2018/2019', 19020937, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participantgroups`
--

CREATE TABLE `participantgroups` (
  `GroupChatId` int(11) NOT NULL,
  `UserEmail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `PicSrc` varchar(50) DEFAULT NULL,
  `isImportant` tinyint(1) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Title` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id`, `OwnerEmail`, `Content`, `PicSrc`, `isImportant`, `Timestamp`, `Title`) VALUES
(1, '', 'hello hi there', NULL, 1, '2021-11-21 05:43:39', 'Title'),
(2, '', 'Hi there,again', '../../../uploads/wall/important-notice/6199dca311e', 1, '2021-11-21 05:44:03', 'Title1'),
(3, '', 'hello', '../../../uploads/wall/important-notice/6199dcc2c44', 1, '2021-11-21 05:44:34', 'Title3'),
(4, '', 'dsfsfsfsfsf', NULL, 1, '2021-11-21 05:45:20', 'Title4'),
(5, '', 'cacaca', '../../../uploads/wall/important-notice/6199dd0fb8f', 1, '2021-11-21 05:45:51', 'Title'),
(6, '', 'adadada', '../../../uploads/wall/important-notice/6199dd3bb14', 1, '2021-11-21 05:46:35', 'gfddgd'),
(7, '', 'gsgsgsg', '../../../uploads/wall/important-notice/6199dd46e39', 1, '2021-11-21 05:46:46', 'sefgsg'),
(8, '', 'dfgsg', '../../../uploads/wall/important-notice/6199dd99159', 1, '2021-11-21 05:48:09', 'Title'),
(9, '', 'gdggdg', NULL, 1, '2021-11-21 05:48:24', 'fgdgdgd'),
(10, '', 'gdfgdg', NULL, 1, '2021-11-21 05:49:51', 'fwegs'),
(11, '', 'dsgsgg', NULL, 1, '2021-11-21 05:52:29', 'Title'),
(12, '', 'ggdgd', '../../../uploads/wall/important-notice/6199deb3a8d', 1, '2021-11-21 05:52:51', 'Title'),
(13, '', 'ggsgs', NULL, 1, '2021-11-21 05:54:40', 'Title'),
(14, '', 'dfsffaf', '../../../uploads/wall/important-notice/6199df32b9c', 1, '2021-11-21 05:54:58', 'Title'),
(15, '', 'aaaaaaaaaaa', NULL, 1, '2021-11-21 05:55:09', 'Title'),
(16, '', 'dggdgd', NULL, 1, '2021-11-24 05:55:40', 'gdgd'),
(17, '', 'bhedhgdh', '../../../uploads/wall/important-notice/619dd401f40', 1, '2021-11-24 05:56:17', 'kjhukkh'),
(18, '', 'dfgdgd', '../../../uploads/wall/important-notice/619de8ebcca', 1, '2021-11-24 07:25:31', 'Title'),
(19, '', 'ghiutg', '../../../uploads/wall/important-notice/619de90db97', 1, '2021-11-24 07:26:05', 'hi'),
(20, '', 'iuhiuo', NULL, 1, '2021-11-24 07:34:58', 'Title'),
(21, '', 'njkjki', '../../../uploads/wall/important-notice/619deb42507', 1, '2021-11-24 07:35:30', 'Title');

-- --------------------------------------------------------

--
-- Table structure for table `privatechats`
--

CREATE TABLE `privatechats` (
  `Id` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `GuestEmail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectcash`
--

CREATE TABLE `projectcash` (
  `ProjectId` int(11) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectcashspendings`
--

CREATE TABLE `projectcashspendings` (
  `ProjectId` int(11) NOT NULL,
  `SpentAmount` double NOT NULL,
  `Description` varchar(250) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectitems`
--

CREATE TABLE `projectitems` (
  `Id` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectitemspendings`
--

CREATE TABLE `projectitemspendings` (
  `ItemId` int(11) NOT NULL,
  `SpentQuantity` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Status` enum('NotStartedYet','Ongoing','Closed','Completed') NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reactsforcomments`
--

CREATE TABLE `reactsforcomments` (
  `UserEmail` varchar(50) NOT NULL,
  `CommentId` int(11) NOT NULL,
  `ReactType` enum('Like','Dislike') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reactsforposts`
--

CREATE TABLE `reactsforposts` (
  `UserEmail` varchar(50) NOT NULL,
  `PostId` int(11) NOT NULL,
  `ReactType` enum('Like','Dislike') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeredmembers`
--

CREATE TABLE `registeredmembers` (
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
  `SubscriptionDue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredmembers`
--

INSERT INTO `registeredmembers` (`Email`, `FirstName`, `LastName`, `NameWithInitials`, `Gender`, `Address`, `NIC`, `ContactNumber`, `Batch`, `IndexNumber`, `PicSrc`, `Password`, `AccType`, `SubscriptionType`, `SubscriptionDue`) VALUES
('pinsaradhanika@gmail.com', 'pinsara', 'wickramathilake', 'R.A.P.D.Wickramthilake', 'Male', '64/6 ekiriyagala foot road kegalle', '970100989v', '47689809', '2018/2019', 19020937, '', '3f6c700617440de2b064990b349e2882', 'TopBoard', 'Anually', '2021-10-23 13:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `reportsforcomments`
--

CREATE TABLE `reportsforcomments` (
  `Id` int(11) NOT NULL,
  `CommentId` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reportsforposts`
--

CREATE TABLE `reportsforposts` (
  `Id` int(11) NOT NULL,
  `PostId` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `starredposts`
--

CREATE TABLE `starredposts` (
  `Email` varchar(50) NOT NULL,
  `PostId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionsdone`
--

CREATE TABLE `subscriptionsdone` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DonatedFrom` enum('Bank','PayHere') NOT NULL,
  `PayslipSrc` varchar(50) DEFAULT NULL,
  `isAccepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptiontypes`
--

CREATE TABLE `subscriptiontypes` (
  `Id` int(11) NOT NULL,
  `TypeName` text NOT NULL,
  `Amount` double NOT NULL,
  `Duration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `suggestions` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `PicSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associationcash`
--
ALTER TABLE `associationcash`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `associationitems`
--
ALTER TABLE `associationitems`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bannedaccounts`
--
ALTER TABLE `bannedaccounts`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `cashdonations`
--
ALTER TABLE `cashdonations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `chatmessages`
--
ALTER TABLE `chatmessages`
  ADD PRIMARY KEY (`ChatId`,`isGroupChat`);

--
-- Indexes for table `commentsforposts`
--
ALTER TABLE `commentsforposts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `committeechatmessages`
--
ALTER TABLE `committeechatmessages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `committeemembers`
--
ALTER TABLE `committeemembers`
  ADD PRIMARY KEY (`Email`,`ProjectId`);

--
-- Indexes for table `groupchats`
--
ALTER TABLE `groupchats`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `itemdonations`
--
ALTER TABLE `itemdonations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `memberaccountrequests`
--
ALTER TABLE `memberaccountrequests`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `participantgroups`
--
ALTER TABLE `participantgroups`
  ADD PRIMARY KEY (`GroupChatId`,`UserEmail`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `privatechats`
--
ALTER TABLE `privatechats`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `projectcash`
--
ALTER TABLE `projectcash`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `projectcashspendings`
--
ALTER TABLE `projectcashspendings`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `projectitems`
--
ALTER TABLE `projectitems`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `projectitemspendings`
--
ALTER TABLE `projectitemspendings`
  ADD PRIMARY KEY (`ItemId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reactsforcomments`
--
ALTER TABLE `reactsforcomments`
  ADD PRIMARY KEY (`UserEmail`,`CommentId`);

--
-- Indexes for table `reactsforposts`
--
ALTER TABLE `reactsforposts`
  ADD PRIMARY KEY (`UserEmail`,`PostId`);

--
-- Indexes for table `registeredmembers`
--
ALTER TABLE `registeredmembers`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `reportsforcomments`
--
ALTER TABLE `reportsforcomments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reportsforposts`
--
ALTER TABLE `reportsforposts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `starredposts`
--
ALTER TABLE `starredposts`
  ADD PRIMARY KEY (`Email`,`PostId`);

--
-- Indexes for table `subscriptionsdone`
--
ALTER TABLE `subscriptionsdone`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subscriptiontypes`
--
ALTER TABLE `subscriptiontypes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associationitems`
--
ALTER TABLE `associationitems`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashdonations`
--
ALTER TABLE `cashdonations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commentsforposts`
--
ALTER TABLE `commentsforposts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committeechatmessages`
--
ALTER TABLE `committeechatmessages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groupchats`
--
ALTER TABLE `groupchats`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemdonations`
--
ALTER TABLE `itemdonations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberaccountrequests`
--
ALTER TABLE `memberaccountrequests`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `privatechats`
--
ALTER TABLE `privatechats`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectitems`
--
ALTER TABLE `projectitems`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportsforcomments`
--
ALTER TABLE `reportsforcomments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportsforposts`
--
ALTER TABLE `reportsforposts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptionsdone`
--
ALTER TABLE `subscriptionsdone`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptiontypes`
--
ALTER TABLE `subscriptiontypes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
