-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 08:07 AM
-- Server version: 5.7.31
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
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Section` enum('Login','Logout','Admin - Accounts','Admin - Reports','Admin - Subscriptions','Admin - Project Spendings','Admin - Inventory','Donations','Suggestions','Notifications','Wall','Chat','My Account','Projects - All','Projects - Not Started','Projects - Ongoing','Projects - Completed','Projects - Closed') NOT NULL,
  `Activity` varchar(1000) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`Id`, `Email`, `Section`, `Activity`, `Timestamp`) VALUES
(1, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-01-27 18:01:44'),
(2, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-01-27 18:02:02'),
(3, 'isuruvihan@gmail.com', 'Wall', 'Post published', '2022-01-27 18:02:28'),
(4, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-01-28 16:33:54'),
(5, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-01-28 16:34:06'),
(6, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-01-28 16:38:48'),
(7, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-16 16:37:33'),
(8, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-16 16:58:49'),
(9, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Item spent record of Project (ID): 3 - Report generated', '2022-02-16 16:59:46'),
(10, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 1 - Report generated', '2022-02-16 16:59:56'),
(11, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-16 17:00:40'),
(12, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-16 17:04:02'),
(13, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-16 17:15:24'),
(14, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-17 02:53:59'),
(15, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-02-17 02:59:33'),
(16, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-17 02:59:48'),
(17, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-17 03:09:03'),
(18, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-17 03:10:01'),
(19, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-17 03:11:13'),
(20, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-17 03:15:08'),
(21, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-02-17 03:32:49'),
(22, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Banned member (EMAIL): priyafonseka19@gmail.com Unbanned', '2022-02-17 03:36:13'),
(23, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Created Project: My Project - Management', '2022-02-24 11:15:35'),
(24, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 1 - Report generated', '2022-02-24 11:17:01'),
(25, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:25:45'),
(26, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:25:51'),
(27, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:26:08'),
(28, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:28:09'),
(29, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:28:33'),
(30, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:28:37'),
(31, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:30:06'),
(32, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 11:31:36'),
(33, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 13:09:58'),
(34, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 13:10:55'),
(35, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 13:12:58'),
(36, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 13:13:31'),
(37, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 13:13:51'),
(38, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 13:15:23'),
(39, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Changed project details of Project (ID): 2', '2022-02-24 13:17:13'),
(40, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-12 10:44:20'),
(41, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:29'),
(42, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:49'),
(43, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:50'),
(44, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:50'),
(45, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:52'),
(46, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:53'),
(47, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:54'),
(48, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:54'),
(49, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:55'),
(50, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:56'),
(51, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:57'),
(52, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:57'),
(53, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:58'),
(54, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:58'),
(55, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:44:59'),
(56, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:00'),
(57, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:01'),
(58, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:01'),
(59, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:02'),
(60, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:02'),
(61, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:03'),
(62, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:04'),
(63, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:04'),
(64, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:05'),
(65, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:06'),
(66, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:07'),
(67, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:07'),
(68, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:08'),
(69, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:11'),
(70, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:12'),
(71, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:13'),
(72, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:15'),
(73, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:16'),
(74, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:18'),
(75, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:19'),
(76, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-12 10:45:20'),
(77, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-15 03:32:05'),
(78, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-15 03:32:28'),
(79, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-15 03:34:12'),
(80, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-15 13:29:48'),
(81, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-15 13:33:09'),
(82, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-15 13:33:28'),
(83, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Transfered items for Projects - Report generated', '2022-03-15 13:33:51'),
(84, 'isuruvihan@gmail.com', 'Wall', 'Post edited', '2022-03-15 14:36:59'),
(85, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-15 19:10:27'),
(86, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-15 19:10:33'),
(87, '', 'Admin - Inventory', 'Received cash for Projects - Report generated', '2022-03-15 19:23:25'),
(88, '', 'Admin - Inventory', 'Received cash for Projects - Report generated', '2022-03-15 19:35:42'),
(89, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Cash donation (ID): 2 for association accepted', '2022-03-15 19:37:35'),
(90, 'isuruvihan@gmail.com', 'Projects - All', 'Donated LKR 12500 for Project: (ID) 3', '2022-03-15 19:47:07'),
(91, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Cash donation (ID): 8 for association accepted', '2022-03-15 19:47:36'),
(92, '', 'Admin - Inventory', 'Transfered cash for Projects - Report generated', '2022-03-15 19:48:06'),
(93, '', 'Admin - Inventory', 'Received cash for Projects - Report generated', '2022-03-15 19:49:59'),
(94, '', 'Admin - Inventory', 'Received cash for Association - Report generated', '2022-03-16 02:51:12'),
(95, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 08:33:08'),
(96, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 08:37:15'),
(97, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 11:26:49'),
(98, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-16 11:28:00'),
(99, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 11:35:39'),
(100, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 12:42:10'),
(101, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 12:44:09'),
(102, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 12:46:29'),
(103, 'isuruvihan@gmail.com', 'Admin - Subscriptions', 'Pending subscription (ID): 7 Accepted', '2022-03-16 12:48:32'),
(104, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 12:49:15'),
(105, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 12:49:48'),
(106, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 12:59:55'),
(107, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 13:59:39'),
(108, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 14:09:27'),
(109, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 14:13:18'),
(110, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 15:32:10'),
(111, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 15:33:23'),
(112, 'isuruvihan@gmail.com', 'Admin - Subscriptions', 'Pending subscription (ID): 10 Accepted', '2022-03-16 15:34:41'),
(113, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 15:35:11'),
(114, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 15:38:04'),
(115, 'isuruvihan@gmail.com', 'Admin - Subscriptions', 'Pending subscription (ID): 12 Accepted', '2022-03-16 15:42:22'),
(116, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-16 15:58:09'),
(117, 'isuruvihan@gmail.com', 'Admin - Subscriptions', 'Pending subscription (ID): 13 Accepted', '2022-03-16 15:58:48'),
(118, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-17 16:17:16'),
(119, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-17 16:17:31'),
(120, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 1 - Report generated', '2022-03-17 16:33:41'),
(121, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 3 - Report generated', '2022-03-17 16:34:00'),
(122, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Item summary of Project (ID): 3 - Report generated', '2022-03-17 16:34:32'),
(123, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 1 - Report generated', '2022-03-17 16:35:16'),
(124, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:36:46'),
(125, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:36:50'),
(126, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:36:51'),
(127, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:36:53'),
(128, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:36:55'),
(129, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:36:56'),
(130, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:36:57'),
(131, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:00'),
(132, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:01'),
(133, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:03'),
(134, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:04'),
(135, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:05'),
(136, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:08'),
(137, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:10'),
(138, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:12'),
(139, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:14'),
(140, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:17'),
(141, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:19'),
(142, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:37:21'),
(143, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:41'),
(144, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:43'),
(145, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:44'),
(146, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:46'),
(147, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:47'),
(148, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:48'),
(149, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:48'),
(150, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:50'),
(151, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:51'),
(152, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:52'),
(153, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:53'),
(154, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:53'),
(155, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:54'),
(156, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:55'),
(157, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:55'),
(158, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:56'),
(159, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:57'),
(160, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:57'),
(161, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:58'),
(162, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:58'),
(163, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:39:59'),
(164, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:00'),
(165, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:00'),
(166, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:01'),
(167, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:02'),
(168, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:03'),
(169, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:04'),
(170, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:05'),
(171, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:06'),
(172, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 16:40:07'),
(173, 'isuruvihan@gmail.com', 'Donations', 'Cash donation of LKR 12000 submitted for association - Report generated', '2022-03-17 16:55:35'),
(174, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-17 16:57:33'),
(175, 'isuruvihan@gmail.com', 'Projects - All', 'Donated LKR 28000 for Project: (ID) 2', '2022-03-17 16:58:14'),
(176, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-17 16:58:55'),
(177, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-17 17:13:28'),
(178, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 17:13:35'),
(179, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 17:13:37'),
(180, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 17:13:39'),
(181, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 17:13:40'),
(182, 'isuruvihan@gmail.com', 'Donations', 'Cash donation of LKR 1000 submitted for association - Report generated', '2022-03-17 17:14:25'),
(183, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 17:14:41'),
(184, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-17 17:14:56'),
(185, 'isuruvihan@gmail.com', 'Admin - Subscriptions', 'Pending subscription (ID): 8 Accepted', '2022-03-17 17:25:02'),
(186, 'isuruvihan@gmail.com', 'Admin - Subscriptions', 'Pending subscription (ID): 15 Accepted', '2022-03-17 17:25:04'),
(187, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 06:24:09'),
(188, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-18 06:24:20'),
(189, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 14:27:36'),
(190, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 14:28:08'),
(191, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-18 14:28:19'),
(192, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-18 14:28:23'),
(193, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-18 14:28:33'),
(194, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-18 14:28:45'),
(195, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-18 14:28:46'),
(196, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-18 14:28:49'),
(197, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 14:30:45'),
(198, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 14:32:22'),
(199, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 3 - Report generated', '2022-03-18 14:39:12'),
(200, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 14:45:17'),
(201, 'isuruvihan@gmail.com', 'Wall', 'Added a star to an important notice', '2022-03-18 14:47:05'),
(202, 'isuruvihan@gmail.com', 'Chat', 'Sent a private chat message', '2022-03-18 14:47:55'),
(203, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 3 - Report generated', '2022-03-18 14:54:19'),
(204, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 3 - Report generated', '2022-03-18 14:55:28'),
(205, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 3 - Report generated', '2022-03-18 14:55:50'),
(206, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Item spent record of Project (ID): 3 - Report generated', '2022-03-18 14:58:54'),
(207, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 1 - Report generated', '2022-03-18 14:59:46'),
(208, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-18 15:04:53'),
(209, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project items spend report generated', '2022-03-18 15:05:03'),
(210, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Transfered LKR 10000 to Project (ID): 3', '2022-03-18 15:06:22'),
(211, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-18 15:18:33'),
(212, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-18 15:21:50'),
(213, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-18 15:24:01'),
(214, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-18 15:24:10'),
(215, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 15:24:21'),
(216, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 15:24:30'),
(217, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-18 15:25:42'),
(218, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 15:26:04'),
(219, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 15:39:50'),
(220, 'isuruvihan@gmail.com', 'Wall', 'Added a comment', '2022-03-18 15:40:03'),
(221, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-18 16:08:20'),
(222, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-20 02:04:17'),
(223, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-20 02:12:54'),
(224, '', 'Suggestions', 'Suggestion submitted', '2022-03-20 02:18:58'),
(225, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-20 02:19:06'),
(226, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-20 02:22:26'),
(227, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-20 02:25:44'),
(228, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-20 02:28:01'),
(229, 'priyafonseka19@gmail.com', 'Donations', 'Cash donation of LKR 10000 submitted for association - Report generated', '2022-03-20 02:39:55'),
(230, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-20 02:40:46'),
(231, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-20 02:41:05'),
(232, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-20 02:41:06'),
(233, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-20 02:41:07'),
(234, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-20 04:22:22'),
(235, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-20 04:27:12'),
(236, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-20 06:44:01'),
(237, 'priyafonseka19@gmail.com', 'Projects - Ongoing', 'Item spent record of Project (ID): 3 - Report generated', '2022-03-20 06:50:00'),
(238, 'priyafonseka19@gmail.com', 'Projects - Ongoing', 'Sent a chat message in Project (ID): 3 chat', '2022-03-20 06:53:17'),
(239, 'priyafonseka19@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 3 - Report generated', '2022-03-20 07:02:12'),
(240, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-20 07:02:34'),
(241, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-20 09:12:34'),
(242, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received subscriptions - Report generated', '2022-03-20 09:14:33'),
(243, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received items for Projects - Report generated', '2022-03-20 09:15:01'),
(244, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received cash for Projects - Report generated', '2022-03-20 09:15:10'),
(245, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received subscriptions - Report generated', '2022-03-20 09:28:09'),
(246, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received items for Projects - Report generated', '2022-03-20 09:36:13'),
(247, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 02:36:22'),
(248, 'isuruvihan@gmail.com', 'Wall', 'Reacted to a post', '2022-03-22 02:49:08'),
(249, 'isuruvihan@gmail.com', 'Notifications', 'Notification deleted', '2022-03-22 02:55:20'),
(250, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 03:15:25'),
(251, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 03:20:12'),
(252, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 03:44:40'),
(253, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 03:45:17'),
(254, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 03:46:07'),
(255, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 04:16:54'),
(256, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Member account (EMAIL): sahanisilva98@gmail.com created', '2022-03-22 04:18:05'),
(257, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 04:19:02'),
(258, 'sahanisilva98@gmail.com', 'My Account', 'Edited profile picture', '2022-03-22 04:19:51'),
(259, 'sahanisilva98@gmail.com', 'My Account', 'Changed the password', '2022-03-22 04:21:02'),
(260, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 04:21:13'),
(261, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 04:21:24'),
(262, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 04:21:52'),
(263, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Closed Project (ID): 3', '2022-03-22 04:38:26'),
(264, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added priyafonseka19@gmail.com as a coordinator for Project (ID): 2', '2022-03-22 04:38:41'),
(265, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added sahanisilva98@gmail.com as a committee member for Project (ID): 2', '2022-03-22 04:38:56'),
(266, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Removed sahanisilva98@gmail.com (committee member) from Project (ID): 2', '2022-03-22 04:39:22'),
(267, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Started Project (ID): 2', '2022-03-22 04:40:49'),
(268, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Completed Project (ID): 2', '2022-03-22 04:43:08'),
(269, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added priyafonseka19@gmail.com as a committee member for Project (ID): 4', '2022-03-22 04:43:48'),
(270, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added sahanisilva98@gmail.com as a coordinator for Project (ID): 4', '2022-03-22 04:43:53'),
(271, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Started Project (ID): 4', '2022-03-22 04:47:02'),
(272, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Started Project (ID): 4', '2022-03-22 04:47:02'),
(273, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 04:47:24'),
(274, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Sent a chat message in Project (ID): 4 chat', '2022-03-22 04:47:39'),
(275, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 04:56:08'),
(276, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 05:06:18'),
(277, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Sent a chat message in Project (ID): 4 chat', '2022-03-22 05:08:29'),
(278, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 05:08:40'),
(279, 'priyafonseka19@gmail.com', 'Projects - Ongoing', 'Sent a chat message in Project (ID): 4 chat', '2022-03-22 05:08:59'),
(280, 'priyafonseka19@gmail.com', 'Projects - Ongoing', 'Sent a chat message in Project (ID): 4 chat', '2022-03-22 05:09:25'),
(281, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 05:11:56'),
(282, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Created Project: New Project 3', '2022-03-22 05:12:16'),
(283, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 05:23:47'),
(284, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 05:24:12'),
(285, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Transfered LKR 150000 to Project (ID): 4', '2022-03-22 05:24:40'),
(286, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Transfered item:  Qty. 25 to Project (ID): 4', '2022-03-22 05:24:53'),
(287, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 05:25:46'),
(288, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Cash spend LKR 10000 of Project (ID): 4', '2022-03-22 05:26:29'),
(289, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Cash spend LKR 15000 of Project (ID): 4', '2022-03-22 05:27:25'),
(290, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Cash spend LKR 30000 of Project (ID): 4', '2022-03-22 05:28:04'),
(291, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 05:28:22'),
(292, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Accepted Cash spend request (ID): 2 of Project (ID): 4', '2022-03-22 05:28:37'),
(293, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Rejected Cash spend request (ID): 2 of Project (ID): 4', '2022-03-22 05:28:40'),
(294, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Accepted Cash spend request (ID): 3 of Project (ID): 4', '2022-03-22 05:28:57'),
(295, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 05:29:28'),
(296, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 05:29:34'),
(297, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Cash spend LKR 25000 of Project (ID): 4', '2022-03-22 05:30:03'),
(298, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 05:30:23'),
(299, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Accepted Cash spend request (ID): 1 of Project (ID): 4', '2022-03-22 05:30:39'),
(300, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 05:31:04'),
(301, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Cash spend for request (ID): 3 in Project (ID): 4', '2022-03-22 05:31:24'),
(302, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 4 - Report generated', '2022-03-22 05:35:28'),
(303, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 05:37:43'),
(304, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 05:38:52'),
(305, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 05:39:49'),
(306, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 05:58:20'),
(307, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 05:58:24'),
(308, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 05:59:48'),
(309, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 06:43:52'),
(310, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 4 - Report generated', '2022-03-22 06:45:36'),
(311, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 4 - Report generated', '2022-03-22 06:55:17'),
(312, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 07:01:21'),
(313, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 07:08:02'),
(314, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 07:08:56'),
(315, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Created Item spend request of Laptop Qty. 10', '2022-03-22 07:12:50'),
(316, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Created Item spend request of Laptop Qty. 5', '2022-03-22 07:13:43'),
(317, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Created Item spend request of Laptop Qty. 12', '2022-03-22 07:14:58'),
(318, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Created Item spend request of Laptop Qty. 2', '2022-03-22 07:15:51'),
(319, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Item spent record of Project (ID): 4 - Report generated', '2022-03-22 07:16:05'),
(320, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 07:23:59'),
(321, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Item summary of Project (ID): 4 - Report generated', '2022-03-22 07:36:07'),
(322, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Accepted Item spend request of Laptop Qty. 10 from Project (ID): 4', '2022-03-22 07:38:03'),
(323, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Rejected Item spend request (ID): 4 of Project (ID): 4', '2022-03-22 07:38:11'),
(324, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Accepted Item spend request of Laptop Qty. 10 from Project (ID): 4', '2022-03-22 07:38:26'),
(325, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 07:38:42'),
(326, 'sahanisilva98@gmail.com', 'Projects - Ongoing', 'Items spend in request (ID): 6 of Project (ID): 4', '2022-03-22 07:39:14'),
(327, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 07:40:29'),
(328, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 07:59:45'),
(329, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 08:00:58'),
(330, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-22 08:05:40'),
(331, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-22 08:05:54'),
(332, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-22 08:16:24'),
(333, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 08:17:01'),
(334, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 09:24:51'),
(335, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 10:40:06'),
(336, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-22 10:40:56'),
(337, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Completed Project (ID): 4', '2022-03-22 10:41:10'),
(338, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Completed Project (ID): 4', '2022-03-22 10:41:10'),
(339, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added priyafonseka19@gmail.com as a committee member for Project (ID): 5', '2022-03-22 10:41:25'),
(340, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added sahanisilva98@gmail.com as a coordinator for Project (ID): 5', '2022-03-22 10:41:32'),
(341, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-22 10:42:25'),
(342, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-23 00:58:45'),
(343, 'isuruvihan@gmail.com', 'Projects - All', 'Donated Dell Laptop Qty. 6 for Project: (ID) 5', '2022-03-23 01:00:23'),
(344, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Registered member (EMAIL): priyafonseka19@gmail.com Banned', '2022-03-23 03:32:34'),
(345, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-23 03:32:43'),
(346, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-23 03:42:02'),
(347, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-23 03:42:19'),
(348, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-23 03:42:28'),
(349, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-23 03:45:18'),
(350, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-23 03:54:35'),
(351, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-23 03:54:54'),
(352, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Registered member (EMAIL): sahanisilva98@gmail.com Banned', '2022-03-23 03:55:14'),
(353, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-23 03:55:26'),
(354, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-23 03:56:04'),
(355, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Banned member (EMAIL): sahanisilva98@gmail.com Unbanned', '2022-03-23 03:56:25'),
(356, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 05:31:42'),
(357, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 05:31:56'),
(358, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Registered member (EMAIL): priyafonseka19@gmail.com Banned', '2022-03-25 05:37:03'),
(359, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 05:37:30'),
(360, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 05:38:32'),
(361, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 06:14:19'),
(362, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Banned member (EMAIL): priyafonseka19@gmail.com Unbanned', '2022-03-25 06:15:26'),
(363, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 06:16:04'),
(364, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-25 06:18:43'),
(365, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 06:27:29'),
(366, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 06:32:17'),
(367, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 06:32:48'),
(368, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 06:36:02'),
(369, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 06:36:36'),
(370, 'isuruvihan@gmail.com', 'Wall', 'Reacted to a post', '2022-03-25 06:48:12'),
(371, 'sahanisilva98@gmail.com', 'Projects - Completed', 'Expenditures of Project (ID): 2 - Report generated', '2022-03-25 06:52:50'),
(372, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Removed priyafonseka19@gmail.com (committee member) from Project (ID): 5', '2022-03-25 06:53:25'),
(373, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Created Project: Project UCSC', '2022-03-25 06:54:19'),
(374, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added priyafonseka19@gmail.com as a coordinator for Project (ID): 6', '2022-03-25 06:54:28'),
(375, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Started Project (ID): 6', '2022-03-25 06:54:40'),
(376, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Member account (EMAIL): shakyakaha123@gmail.com created', '2022-03-25 06:56:07'),
(377, 'shakyakaha123@gmail.com', 'Login', 'Logged in', '2022-03-25 07:27:20'),
(378, 'shakyakaha123@gmail.com', 'My Account', 'Edited profile picture', '2022-03-25 07:27:49'),
(379, 'shakyakaha123@gmail.com', 'My Account', 'Changed the password', '2022-03-25 07:28:52'),
(380, 'shakyakaha123@gmail.com', 'Login', 'Logged in', '2022-03-25 07:29:09'),
(381, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 07:30:07'),
(382, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-25 07:30:45'),
(383, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 07:33:45'),
(384, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 3 - Report generated', '2022-03-25 07:35:12'),
(385, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-25 07:39:12'),
(386, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Transfered cash for Projects - Report generated', '2022-03-25 07:40:04'),
(387, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received cash for Association - Report generated', '2022-03-25 07:40:40'),
(388, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Rejected member account request (EMAIL):  Accepted', '2022-03-25 07:42:17'),
(389, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Rejected member account request (EMAIL):  Accepted', '2022-03-25 07:42:26'),
(390, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 08:36:09'),
(391, 'isuruvihan@gmail.com', 'Chat', 'Added a private chat', '2022-03-25 08:39:23'),
(392, 'isuruvihan@gmail.com', 'Projects - Completed', 'Expenditures of Project (ID): 2 - Report generated', '2022-03-25 08:45:58'),
(393, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 1 - Report generated', '2022-03-25 08:46:12'),
(394, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-25 08:49:00'),
(395, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Transfered cash for Projects - Report generated', '2022-03-25 08:49:41'),
(396, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received cash for Association - Report generated', '2022-03-25 08:50:32'),
(397, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received items for Projects - Report generated', '2022-03-25 08:50:43'),
(398, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received subscriptions - Report generated', '2022-03-25 08:50:49'),
(399, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Rejected member account request (EMAIL):  Accepted', '2022-03-25 08:52:09'),
(400, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 14:27:10'),
(401, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 6 - Report generated', '2022-03-25 15:26:41'),
(402, 'isuruvihan@gmail.com', 'Projects - Ongoing', 'Cash summary of Project (ID): 6 - Report generated', '2022-03-25 16:27:57'),
(403, 'sahanisilva98@gmail.com', 'Login', 'Logged in', '2022-03-25 17:01:21'),
(404, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 17:01:35'),
(405, 'priyafonseka19@gmail.com', 'Projects - Ongoing', 'Sent a chat message in Project (ID): 6 chat', '2022-03-25 17:17:12'),
(406, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 17:20:12'),
(407, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-25 17:31:11'),
(408, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-25 17:31:51'),
(409, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-26 14:13:54'),
(410, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received items for Projects - Report generated', '2022-03-26 14:25:28'),
(411, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Received items for Projects - Report generated', '2022-03-26 15:50:24'),
(412, 'isuruvihan@gmail.com', 'Wall', 'Published an important notice', '2022-03-26 15:59:28'),
(413, 'isuruvihan@gmail.com', 'Wall', 'Published an important notice', '2022-03-26 15:59:28'),
(414, 'isuruvihan@gmail.com', 'Wall', 'Published an important notice', '2022-03-26 15:59:28'),
(415, 'isuruvihan@gmail.com', 'Wall', 'Published an important notice', '2022-03-26 15:59:28'),
(416, 'isuruvihan@gmail.com', 'Wall', 'Deleted a comment', '2022-03-26 16:26:41'),
(417, 'isuruvihan@gmail.com', 'Chat', 'Send a group chat message', '2022-03-27 02:19:13'),
(418, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-27 02:32:30'),
(419, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-27 04:59:20'),
(420, 'priyafonseka19@gmail.com', 'Login', 'Logged in', '2022-03-27 05:36:19'),
(421, 'isuruvihan@gmail.com', 'Login', 'Logged in', '2022-03-27 05:36:32'),
(422, 'isuruvihan@gmail.com', 'Chat', 'Sent a private chat message', '2022-03-27 05:39:46'),
(423, 'isuruvihan@gmail.com', 'Projects - Not Started', 'Added shakyakaha123@gmail.com as a committee member for Project (ID): 5', '2022-03-27 05:44:20'),
(424, 'isuruvihan@gmail.com', 'Projects - Completed', 'Expenditures of Project (ID): 2 - Report generated', '2022-03-27 05:46:14'),
(425, 'isuruvihan@gmail.com', 'Projects - Closed', 'Expenditures of Project (ID): 1 - Report generated', '2022-03-27 05:46:25'),
(426, 'isuruvihan@gmail.com', 'Admin - Project Spendings', 'Project cash spend report generated', '2022-03-27 05:49:18'),
(427, 'isuruvihan@gmail.com', 'Admin - Inventory', 'Transfered cash for Projects - Report generated', '2022-03-27 05:50:02'),
(428, 'isuruvihan@gmail.com', 'Admin - Accounts', 'Rejected member account request (EMAIL):  Accepted', '2022-03-27 05:52:12'),
(429, '', 'Suggestions', 'Suggestion submitted', '2022-03-27 05:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `associationcash`
--

CREATE TABLE `associationcash` (
  `Id` int(11) NOT NULL,
  `Amount` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associationcash`
--

INSERT INTO `associationcash` (`Id`, `Amount`) VALUES
(0, 281500);

-- --------------------------------------------------------

--
-- Table structure for table `associationitems`
--

CREATE TABLE `associationitems` (
  `Id` int(11) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associationitems`
--

INSERT INTO `associationitems` (`Id`, `ItemName`, `Quantity`, `Timestamp`) VALUES
(1, 'Laptop', 65, '2022-03-22 05:24:53'),
(2, 'Laptop', 10, '2022-03-22 04:38:26'),
(3, 'Laptop', 23, '2022-03-22 10:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `bannedaccounts`
--

CREATE TABLE `bannedaccounts` (
  `Email` varchar(50) NOT NULL,
  `TBEmail` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` enum('Pending','Accepted','Rejected') NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashdonations`
--

INSERT INTO `cashdonations` (`Id`, `DonorName`, `DonorEmail`, `DonationFor`, `DonatedFrom`, `PayslipSrc`, `Amount`, `Timestamp`, `Status`) VALUES
(1, 'Isuru Harischandra', 'isuruvihan@gmail.com', 'Association', 'Bank', '61e2492b604029.66203029.png', 25000, '2022-03-15 19:38:18', 'Accepted'),
(2, 'Isuru Harischandra', 'isuruvihan@gmail.com', '2', 'Bank', '61f23ca8160959.40698611.jpg', 12000, '2022-03-15 19:37:35', 'Accepted'),
(3, 'PayHere', 'PayHere', '2', 'PayHere', NULL, 12000, '2022-03-15 19:11:15', 'Accepted'),
(4, 'PayHere', 'PayHere', '2', 'PayHere', NULL, 10000, '2022-03-15 19:25:10', 'Accepted'),
(5, 'PayHere', 'PayHere', '2', 'PayHere', NULL, 13500, '2022-03-15 19:27:20', 'Pending'),
(6, 'PayHere', 'PayHere', '2', 'PayHere', NULL, 28000, '2022-03-15 19:35:07', 'Accepted'),
(7, 'PayHere', 'PayHere', '3', 'PayHere', NULL, 15750, '2022-03-15 19:40:42', 'Accepted'),
(8, 'qwert', 'isuruvihan@gmail.com', '3', 'Bank', '6230ed3b911569.50415324.jpg', 12500, '2022-03-15 19:47:36', 'Accepted'),
(9, 'PayHere', 'PayHere', '2', 'PayHere', NULL, 30000, '2022-03-15 19:49:22', 'Accepted'),
(10, 'PayHere', 'PayHere', '2', 'PayHere', NULL, 69000, '2022-03-15 19:51:46', 'Accepted'),
(11, 'PayHere', 'PayHere', 'Association', 'PayHere', NULL, 30000, '2022-03-16 02:46:50', 'Pending'),
(12, 'PayHere', 'PayHere', 'Association', 'PayHere', NULL, 100000, '2022-03-16 02:49:53', 'Accepted'),
(13, 'PayHere', 'PayHere', 'Association', 'PayHere', NULL, 15000, '2022-03-16 03:02:44', 'Accepted'),
(14, 'PayHere', 'PayHere', 'Association', 'PayHere', NULL, 20000, '2022-03-16 03:03:33', 'Accepted'),
(15, '', '', 'Association', 'PayHere', NULL, 69000, '2022-03-16 03:23:48', 'Accepted'),
(16, '', '', 'Association', 'PayHere', NULL, 1000, '2022-03-16 03:42:56', 'Accepted'),
(17, 'Isuru Harischandra', 'isuruvihan@gmail.com', 'Association', 'Bank', '6233680768b015.59611968.jpg', 12000, '2022-03-17 16:55:35', 'Pending'),
(18, 'PayHere', 'PayHere', 'Association', 'PayHere', NULL, 10000, '2022-03-17 16:57:01', 'Accepted'),
(19, 'Priya Fonseka', 'priyafonseka19@gmail.com', '2', 'Bank', '623368a66d5e51.01591081.jpg', 28000, '2022-03-17 16:58:14', 'Pending'),
(20, 'Isuru Harischandra', 'isuruvihan@gmail.com', 'Association', 'Bank', '62336c71e74f05.81700923.jpg', 1000, '2022-03-17 17:14:25', 'Pending'),
(21, 'PayHere', 'PayHere', 'Association', 'PayHere', NULL, 17500, '2022-03-18 14:35:02', 'Accepted'),
(22, 'Priya Fonseka', 'priyafonseka19@gmail.com', 'Association', 'Bank', '623693fbabe064.04602666.jpg', 10000, '2022-03-20 02:39:55', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `chatmessages`
--

CREATE TABLE `chatmessages` (
  `Id` int(11) NOT NULL,
  `ChatId` int(11) NOT NULL,
  `isGroupChat` tinyint(1) NOT NULL,
  `SenderEmail` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `PicSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatmessages`
--

INSERT INTO `chatmessages` (`Id`, `ChatId`, `isGroupChat`, `SenderEmail`, `Message`, `PicSrc`, `Timestamp`) VALUES
(1, 1, 0, 'isuruvihan@gmail.com', '', '61e234dc7abf52.50580388.png', '2022-01-15 02:43:40'),
(2, 1, 0, 'isuruvihan@gmail.com', 'Hello', 'wqdf', '2022-01-15 02:50:18'),
(3, 1, 0, 'isuruvihan@gmail.com', 'Good morning', '', '2022-01-15 02:52:17'),
(4, 1, 0, 'isuruvihan@gmail.com', 'Hey there', '61e236f1db7199.74669213.png', '2022-01-15 02:52:33'),
(5, 1, 1, 'isuruvihan@gmail.com', 'Good morning', '', '2022-01-15 02:58:10'),
(8, 1, 0, 'isuruvihan@gmail.com', 'hfyf', '', '2022-01-22 05:10:24'),
(7, 1, 1, 'isuruvihan@gmail.com', 'FreshHack', '61e23863880e46.43036399.png', '2022-01-15 02:58:43'),
(9, 1, 0, 'isuruvihan@gmail.com', 'Hello', '', '2022-03-18 14:47:55'),
(10, 1, 1, 'isuruvihan@gmail.com', 'Good morining', '', '2022-03-27 02:19:13'),
(11, 1, 0, 'isuruvihan@gmail.com', 'Hello', '', '2022-03-27 05:39:46');

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
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsforposts`
--

INSERT INTO `commentsforposts` (`Id`, `PostId`, `OwnerEmail`, `Content`, `PicSrc`, `Timestamp`) VALUES
(1, 2, 'isuruvihan@gmail.com', 'Hello', NULL, '2022-01-15 03:10:33'),
(2, 7, 'isuruvihan@gmail.com', 'Nice', NULL, '2022-01-22 05:13:16'),
(5, 6, 'isuruvihan@gmail.com', 'Hello', NULL, '2022-01-27 11:53:00');

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
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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

--
-- Dumping data for table `committeemembers`
--

INSERT INTO `committeemembers` (`Email`, `ProjectId`, `Type`) VALUES
('priyafonseka19@gmail.com', 1, 'Coordinator'),
('priyafonseka19@gmail.com', 3, 'Coordinator'),
('priyafonseka19@gmail.com', 2, 'Coordinator'),
('priyafonseka19@gmail.com', 4, 'Member'),
('sahanisilva98@gmail.com', 4, 'Coordinator'),
('priyafonseka19@gmail.com', 6, 'Coordinator'),
('sahanisilva98@gmail.com', 5, 'Coordinator'),
('shakyakaha123@gmail.com', 5, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `groupchats`
--

CREATE TABLE `groupchats` (
  `Id` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `PicSrc` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupchats`
--

INSERT INTO `groupchats` (`Id`, `OwnerEmail`, `PicSrc`, `Name`) VALUES
(1, 'isuruvihan@gmail.com', '61e23787eefff0.85309861.jpg', 'Group 1');

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
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` enum('Pending','Accepted','Rejected') NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdonations`
--

INSERT INTO `itemdonations` (`Id`, `DonorName`, `DonorEmail`, `DonationFor`, `ItemName`, `Quantity`, `BillSrc`, `Timestamp`, `Status`) VALUES
(1, 'Isuru Harischandra', 'isuruvihan@gmail.com', '1', 'Laptop', 100, '61e2418b0235c6.94445340.png', '2022-01-15 03:38:54', 'Accepted'),
(3, 'Isuru Harischandra', 'isuruvihan@gmail.com', '5', 'Dell Laptop', 6, '623a712768a4f2.74019197.jpg', '2022-03-23 01:00:23', 'Pending');

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
  `IndexNumber` varchar(20) NOT NULL,
  `isRejected` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` enum('Viewed','NotViewed') NOT NULL DEFAULT 'NotViewed'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Id`, `Email`, `Message`, `Timestamp`, `Status`) VALUES
(90, 'priyafonseka19@gmail.com', 'New Project 2 has been closed by isuruvihan@gmail.com', '2022-03-22 04:38:26', 'NotViewed'),
(85, 'priyafonseka19@gmail.com', 'isuruvihan@gmail.com has transfered Rs.10000 to New Project 2', '2022-03-18 15:06:22', 'NotViewed'),
(91, 'isuruvihan@gmail.com', 'New Project 2 has been closed by isuruvihan@gmail.com', '2022-03-22 04:38:26', 'NotViewed'),
(92, 'priyafonseka19@gmail.com', 'you have been added as cordinator of project New Project 1 by isuruvihan@gmail.com', '2022-03-22 04:38:41', 'NotViewed'),
(93, 'sahanisilva98@gmail.com', 'you have been added as commitee member of project New Project 1 by isuruvihan@gmail.com', '2022-03-22 04:38:56', 'NotViewed'),
(94, 'sahanisilva98@gmail.com', 'you have been removed from the commitee member position of New Project 1 by isuruvihan@gmail.com', '2022-03-22 04:39:22', 'NotViewed'),
(95, 'priyafonseka19@gmail.com', 'New Project 1 has been start by isuruvihan@gmail.com', '2022-03-22 04:40:49', 'NotViewed'),
(96, 'isuruvihan@gmail.com', 'New Project 1 has been start by isuruvihan@gmail.com', '2022-03-22 04:40:49', 'NotViewed'),
(97, 'priyafonseka19@gmail.com', 'New Project 1 has been completed by isuruvihan@gmail.com', '2022-03-22 04:43:08', 'NotViewed'),
(98, 'isuruvihan@gmail.com', 'New Project 1 has been completed by isuruvihan@gmail.com', '2022-03-22 04:43:08', 'NotViewed'),
(99, 'priyafonseka19@gmail.com', 'you have been added as commitee member of project My Project - Management by isuruvihan@gmail.com', '2022-03-22 04:43:48', 'NotViewed'),
(100, 'sahanisilva98@gmail.com', 'you have been added as cordinator of project My Project - Management by isuruvihan@gmail.com', '2022-03-22 04:43:53', 'NotViewed'),
(101, 'priyafonseka19@gmail.com', 'My Project - Management has been start by isuruvihan@gmail.com', '2022-03-22 04:47:02', 'NotViewed'),
(102, 'sahanisilva98@gmail.com', 'My Project - Management has been start by isuruvihan@gmail.com', '2022-03-22 04:47:02', 'NotViewed'),
(103, 'isuruvihan@gmail.com', 'My Project - Management has been start by isuruvihan@gmail.com', '2022-03-22 04:47:02', 'NotViewed'),
(104, 'isuruvihan@gmail.com', 'isuruvihan@gmail.com has transfered Rs.150000 to My Project - Management', '2022-03-22 05:24:40', 'NotViewed'),
(105, 'priyafonseka19@gmail.com', 'isuruvihan@gmail.com has transfered Rs.150000 to My Project - Management', '2022-03-22 05:24:40', 'NotViewed'),
(106, 'sahanisilva98@gmail.com', 'isuruvihan@gmail.com has transfered Rs.150000 to My Project - Management', '2022-03-22 05:24:40', 'NotViewed'),
(107, 'isuruvihan@gmail.com', 'isuruvihan@gmail.com has transfered 25 of Laptop to My Project - Management', '2022-03-22 05:24:53', 'NotViewed'),
(108, 'priyafonseka19@gmail.com', 'isuruvihan@gmail.com has transfered 25 of Laptop to My Project - Management', '2022-03-22 05:24:53', 'NotViewed'),
(109, 'sahanisilva98@gmail.com', 'isuruvihan@gmail.com has transfered 25 of Laptop to My Project - Management', '2022-03-22 05:24:53', 'NotViewed'),
(110, 'isuruvihan@gmail.com', 'Rs. cash spending request of My Project - Management has been submited by sahanisilva98@gmail.com', '2022-03-22 05:26:29', 'NotViewed'),
(111, 'isuruvihan@gmail.com', 'Rs. cash spending request of My Project - Management has been submited by sahanisilva98@gmail.com', '2022-03-22 05:27:25', 'NotViewed'),
(112, 'isuruvihan@gmail.com', 'Rs. cash spending request of My Project - Management has been submited by sahanisilva98@gmail.com', '2022-03-22 05:28:04', 'NotViewed'),
(113, 'isuruvihan@gmail.com', 'Rs.10000 cash spend request of project My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 05:28:37', 'NotViewed'),
(114, 'priyafonseka19@gmail.com', 'Rs.10000 cash spend request of project My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 05:28:37', 'NotViewed'),
(115, 'isuruvihan@gmail.com', 'Rs.10000 cash spend request of My Project - Management has been rejected by isuruvihan@gmail.com', '2022-03-22 05:28:40', 'NotViewed'),
(116, 'sahanisilva98@gmail.com', 'Rs.10000 cash spend request of My Project - Management has been rejected by isuruvihan@gmail.com', '2022-03-22 05:28:40', 'NotViewed'),
(117, 'isuruvihan@gmail.com', 'Rs.10000 cash spend request of project My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 05:28:57', 'NotViewed'),
(118, 'priyafonseka19@gmail.com', 'Rs.10000 cash spend request of project My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 05:28:57', 'NotViewed'),
(119, 'isuruvihan@gmail.com', 'Rs. cash spending request of My Project - Management has been submited by sahanisilva98@gmail.com', '2022-03-22 05:30:03', 'NotViewed'),
(120, 'isuruvihan@gmail.com', 'Rs.10000 cash spend request of project My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 05:30:39', 'NotViewed'),
(121, 'priyafonseka19@gmail.com', 'Rs.10000 cash spend request of project My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 05:30:39', 'NotViewed'),
(122, 'isuruvihan@gmail.com', 'item spend request on 10 Laptop of  has been submitted by sahanisilva98@gmail.com', '2022-03-22 07:12:50', 'NotViewed'),
(123, 'isuruvihan@gmail.com', 'item spend request on 5 Laptop of  has been submitted by sahanisilva98@gmail.com', '2022-03-22 07:13:43', 'NotViewed'),
(124, 'isuruvihan@gmail.com', 'item spend request on 12 Laptop of  has been submitted by sahanisilva98@gmail.com', '2022-03-22 07:14:58', 'NotViewed'),
(125, 'isuruvihan@gmail.com', 'item spend request on 2 Laptop of  has been submitted by sahanisilva98@gmail.com', '2022-03-22 07:15:51', 'NotViewed'),
(126, 'isuruvihan@gmail.com', 'Item spend request of 10 Laptop from My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 07:38:03', 'NotViewed'),
(127, 'sahanisilva98@gmail.com', 'Item spend request of 10 Laptop from My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 07:38:03', 'NotViewed'),
(128, 'isuruvihan@gmail.com', 'Item spend request of My Project - Management has been rejected by isuruvihan@gmail.com', '2022-03-22 07:38:11', 'NotViewed'),
(129, 'sahanisilva98@gmail.com', 'Item spend request of My Project - Management has been rejected by isuruvihan@gmail.com', '2022-03-22 07:38:11', 'NotViewed'),
(130, 'isuruvihan@gmail.com', 'Item spend request of 10 Laptop from My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 07:38:26', 'NotViewed'),
(131, 'sahanisilva98@gmail.com', 'Item spend request of 10 Laptop from My Project - Management has been accepted by isuruvihan@gmail.com', '2022-03-22 07:38:26', 'NotViewed'),
(132, 'priyafonseka19@gmail.com', 'My Project - Management has been completed by isuruvihan@gmail.com', '2022-03-22 10:41:10', 'NotViewed'),
(133, 'sahanisilva98@gmail.com', 'My Project - Management has been completed by isuruvihan@gmail.com', '2022-03-22 10:41:10', 'NotViewed'),
(134, 'isuruvihan@gmail.com', 'My Project - Management has been completed by isuruvihan@gmail.com', '2022-03-22 10:41:10', 'NotViewed'),
(135, 'priyafonseka19@gmail.com', 'you have been added as commitee member of project New Project 3 by isuruvihan@gmail.com', '2022-03-22 10:41:25', 'NotViewed'),
(136, 'sahanisilva98@gmail.com', 'you have been added as cordinator of project New Project 3 by isuruvihan@gmail.com', '2022-03-22 10:41:32', 'NotViewed'),
(137, 'isuruvihan@gmail.com', 'Member account of Priya Fonseka banned by isuruvihan@gmail.com', '2022-03-23 03:32:34', 'NotViewed'),
(138, 'isuruvihan@gmail.com', 'Member Account of Priya Fonseka has been unbanned by isuruvihan@gmail.com', '2022-03-23 03:54:18', 'NotViewed'),
(139, 'isuruvihan@gmail.com', 'Member account of Sahani Silva banned by isuruvihan@gmail.com', '2022-03-23 03:55:14', 'NotViewed'),
(140, 'isuruvihan@gmail.com', 'Member account of Sahani Silva has been unbanned by isuruvihan@gmail.com', '2022-03-23 03:56:25', 'NotViewed'),
(141, 'isuruvihan@gmail.com', 'Member account of Priya Fonseka banned by isuruvihan@gmail.com', '2022-03-25 05:37:03', 'NotViewed'),
(142, 'isuruvihan@gmail.com', 'Member account of Priya Fonseka has been unbanned by isuruvihan@gmail.com', '2022-03-25 06:15:26', 'NotViewed'),
(143, 'priyafonseka19@gmail.com', 'you have been removed from the commitee member position of New Project 3 by isuruvihan@gmail.com', '2022-03-25 06:53:25', 'NotViewed'),
(144, 'priyafonseka19@gmail.com', 'you have been added as cordinator of project Project UCSC by isuruvihan@gmail.com', '2022-03-25 06:54:28', 'NotViewed'),
(145, 'priyafonseka19@gmail.com', 'Project UCSC has been start by isuruvihan@gmail.com', '2022-03-25 06:54:40', 'NotViewed'),
(146, 'isuruvihan@gmail.com', 'Project UCSC has been start by isuruvihan@gmail.com', '2022-03-25 06:54:40', 'NotViewed'),
(147, 'sahanisilva98@gmail.com', 'you have added to the Isuru Harischandra chat list', '2022-03-25 08:39:23', 'NotViewed'),
(148, 'isuruvihan@gmail.com', 'New Important Notice has been submitted by isuruvihan@gmail.com on ', '2022-03-26 15:59:28', 'NotViewed'),
(149, 'priyafonseka19@gmail.com', 'New Important Notice has been submitted by isuruvihan@gmail.com on ', '2022-03-26 15:59:28', 'NotViewed'),
(150, 'sahanisilva98@gmail.com', 'New Important Notice has been submitted by isuruvihan@gmail.com on ', '2022-03-26 15:59:28', 'NotViewed'),
(151, 'shakyakaha123@gmail.com', 'New Important Notice has been submitted by isuruvihan@gmail.com on ', '2022-03-26 15:59:28', 'NotViewed'),
(152, 'shakyakaha123@gmail.com', 'you have been added as commitee member of project New Project 3 by isuruvihan@gmail.com', '2022-03-27 05:44:20', 'NotViewed'),
(153, 'isuruvihan@gmail.com', 'A Suggestion has been submitted by isuruvihan@gmail.com', '2022-03-27 05:56:08', 'NotViewed');

-- --------------------------------------------------------

--
-- Table structure for table `participantgroups`
--

CREATE TABLE `participantgroups` (
  `GroupChatId` int(11) NOT NULL,
  `UserEmail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participantgroups`
--

INSERT INTO `participantgroups` (`GroupChatId`, `UserEmail`) VALUES
(1, 'priyafonseka19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `PicSrc` varchar(500) DEFAULT NULL,
  `isImportant` tinyint(1) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Title` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id`, `OwnerEmail`, `Content`, `PicSrc`, `isImportant`, `Timestamp`, `Title`) VALUES
(2, 'isuruvihan@gmail.com', 'This is my first post', NULL, 0, '2022-01-15 03:09:41', NULL),
(3, 'isuruvihan@gmail.com', 'This is my second post', '../../../uploads/wall/common-wall/61e23b78bb1f45.87875578.jpg', 0, '2022-01-15 03:11:52', NULL),
(4, 'isuruvihan@gmail.com', 'Hello', '../../../uploads/wall/important-notice/61e25428bee721.97764700.jpg', 1, '2022-01-15 04:57:12', 'Important Notice 1'),
(5, 'isuruvihan@gmail.com', 'Hello world', '../../../uploads/wall/important-notice/61e2544965ba98.10593879.jpg', 1, '2022-01-15 04:57:45', 'Important Notice 2'),
(6, 'isuruvihan@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...\r\n\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris...', '../../../uploads/wall/common-wall/61e25555debc50.82993824.jpg', 0, '2022-01-15 05:02:13', NULL),
(8, 'isuruvihan@gmail.com', 'Hello World!', NULL, 0, '2022-01-27 18:02:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privatechats`
--

CREATE TABLE `privatechats` (
  `Id` int(11) NOT NULL,
  `Person1` varchar(50) NOT NULL,
  `Person2` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privatechats`
--

INSERT INTO `privatechats` (`Id`, `Person1`, `Person2`) VALUES
(1, 'priyafonseka19@gmail.com', 'isuruvihan@gmail.com'),
(2, 'isuruvihan@gmail.com', 'sahanisilva98@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `projectcash`
--

CREATE TABLE `projectcash` (
  `ProjectId` int(11) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectcash`
--

INSERT INTO `projectcash` (`ProjectId`, `Amount`) VALUES
(5, 0),
(6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projectcashspendings`
--

CREATE TABLE `projectcashspendings` (
  `Id` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `SpentAmount` double NOT NULL,
  `Description` varchar(250) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` enum('Accepted','Pending','Rejected','Paid') NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectcashspendings`
--

INSERT INTO `projectcashspendings` (`Id`, `ProjectId`, `SpentAmount`, `Description`, `BillSrc`, `Timestamp`, `Status`) VALUES
(1, 4, 10000, 'To buy 4 keyboards', '62395e05e398d7.99521974.jpg', '2022-03-22 05:30:39', 'Accepted'),
(2, 4, 15000, 'To buy 2 LCD monitors', '62395e3d113593.61351915.jpg', '2022-03-22 05:28:40', 'Rejected'),
(3, 4, 30000, 'To buy 5 computer table chairs', '62395e64c79da9.75038582.jpg', '2022-03-22 05:31:24', 'Paid'),
(4, 4, 25000, 'To buy a computer table', '62395edb177d87.66218841.jpg', '2022-03-22 05:30:03', 'Pending');

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
  `Id` int(11) NOT NULL,
  `ItemId` int(11) NOT NULL,
  `SpentQuantity` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `BillSrc` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` enum('Pending','Accepted','Rejected','Paid') NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectitemspendings`
--

INSERT INTO `projectitemspendings` (`Id`, `ItemId`, `SpentQuantity`, `Description`, `BillSrc`, `Timestamp`, `Status`) VALUES
(1, 1, 10, 'For undergraduates', '61e24304b8f710.31552412.png', '2022-01-15 03:44:04', 'Pending'),
(2, 2, 2, 'Test', '61f24f5c994368.86949506.png', '2022-01-27 07:53:00', 'Pending'),
(3, 3, 10, 'For 10 first year students', '623976f2a96052.32851124.jpg', '2022-03-22 07:38:03', 'Accepted'),
(4, 3, 5, 'For 5 second year students', '62397727a86fd6.77724439.jpg', '2022-03-22 07:38:11', 'Rejected'),
(5, 3, 12, 'For 12 third year students', '623977720a3f09.21286731.jpg', '2022-03-22 07:14:58', 'Pending'),
(6, 3, 2, 'For 2 fourth year students', '623977a7e23b28.32205792.jpg', '2022-03-22 07:39:14', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Status` enum('NotStartedYet','Ongoing','Closed','Completed') NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Id`, `Name`, `Description`, `Status`, `Timestamp`) VALUES
(1, 'ProjectOne', 'This is our first project', 'Closed', '2022-01-27 05:31:47'),
(2, 'New Project 1', 'Test Description', 'Completed', '2022-03-22 04:43:08'),
(3, 'New Project 2', 'New Project 2', 'Closed', '2022-03-22 04:38:26'),
(4, 'My Project - Management', 'Test project', 'Completed', '2022-03-22 10:41:10'),
(5, 'New Project 3', 'This is the description', 'NotStartedYet', '2022-03-22 05:12:16'),
(6, 'Project UCSC', 'University of Colombo School of Computing', 'Ongoing', '2022-03-25 06:54:40');

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

--
-- Dumping data for table `reactsforposts`
--

INSERT INTO `reactsforposts` (`UserEmail`, `PostId`, `ReactType`) VALUES
('isuruvihan@gmail.com', 8, 'Like');

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
  `PicSrc` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `AccType` enum('Member','TopBoard') NOT NULL,
  `SubscriptionType` enum('Monthly','Anually') NOT NULL,
  `SubscriptionDue` timestamp NOT NULL,
  `Availability` tinyint(1) NOT NULL DEFAULT '1',
  `CashDonated` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredmembers`
--

INSERT INTO `registeredmembers` (`Email`, `FirstName`, `LastName`, `NameWithInitials`, `Gender`, `Address`, `NIC`, `ContactNumber`, `Batch`, `IndexNumber`, `PicSrc`, `Password`, `AccType`, `SubscriptionType`, `SubscriptionDue`, `Availability`, `CashDonated`) VALUES
('isuruvihan@gmail.com', 'Isuru', 'Harischandra', 'B. A. I. V. Harischandra', 'Male', '634/21, Jayanthi Road, Athurugiriya', '992462698v', '0768036130', '2019/2020', 19020333, '61e2440e565c56.73032962.jpg', '475844e2521659102b90600c3e7c2617', 'TopBoard', 'Monthly', '2030-08-15 02:32:44', 1, '40500.00'),
('priyafonseka19@gmail.com', 'Priya', 'Fonseka', 'P. Fonseka', 'Male', 'Reid Avenue, Colombo 07', '992462698v', '0768945628', '2004/2005', 19020573, 'user-default.png', '3e17f774c90d60dc17444c0423470e04', 'Member', 'Monthly', '2022-02-14 22:08:10', 0, '38000.00'),
('sahanisilva98@gmail.com', 'Sahani', 'Silva', 'S. Silva', 'Female', 'Town Hall, Colombo', '992462698v', '0768036130', '2010/2011', 19020821, '62394e6724dfa1.27181462.jpeg', '3eee4c3e5c6d299c760067dbb22e6f56', 'Member', 'Monthly', '2022-04-21 23:48:00', 0, '0.00'),
('shakyakaha123@gmail.com', 'Shakya', 'Kahatapitiya', 'K. M. S. Kahatapitiya', 'Female', 'Kalutara', '992662698v', '+94768036130', '2016/2017', 19020573, '623d6ef56ec7b9.31155436.jpeg', '75afaf49af4eb200efef03052eb73ca5', 'Member', 'Monthly', '2022-04-25 02:26:03', 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `reportsforcomments`
--

CREATE TABLE `reportsforcomments` (
  `Id` int(11) NOT NULL,
  `CommentId` int(11) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `starredposts`
--

CREATE TABLE `starredposts` (
  `Email` varchar(50) NOT NULL,
  `PostId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `starredposts`
--

INSERT INTO `starredposts` (`Email`, `PostId`) VALUES
('isuruvihan@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionsdone`
--

CREATE TABLE `subscriptionsdone` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DonatedFrom` enum('Bank','PayHere') NOT NULL,
  `PayslipSrc` varchar(50) DEFAULT NULL,
  `Status` enum('Accepted','Pending','Rejected') NOT NULL DEFAULT 'Pending',
  `SubType` enum('Monthly','Anually') NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptionsdone`
--

INSERT INTO `subscriptionsdone` (`Id`, `Email`, `Timestamp`, `DonatedFrom`, `PayslipSrc`, `Status`, `SubType`, `Amount`) VALUES
(1, 'isuruvihan@gmail.com', '2022-01-15 04:53:57', 'Bank', '61e253135b6670.79424039.png', 'Accepted', 'Monthly', 500),
(2, 'isuruvihan@gmail.com', '2022-01-15 04:56:01', 'Bank', '61e2538a979cd4.01877892.jpg', 'Rejected', 'Monthly', 500),
(4, 'isuruvihan@gmail.com', '2022-03-16 11:47:55', 'PayHere', NULL, 'Accepted', 'Monthly', 500),
(5, 'isuruvihan@gmail.com', '2022-03-16 12:43:06', 'PayHere', NULL, 'Accepted', 'Monthly', 500),
(6, 'isuruvihan@gmail.com', '2022-03-16 12:46:04', 'PayHere', NULL, 'Accepted', 'Monthly', 500),
(7, 'isuruvihan@gmail.com', '2022-03-16 12:48:32', 'Bank', '6231dc6a0d4ff1.43473049.jpg', 'Accepted', 'Monthly', 500),
(8, 'isuruvihan@gmail.com', '2022-03-17 17:25:02', 'Bank', '623201cae58797.85596796.jpg', 'Accepted', 'Monthly', 500),
(9, 'isuruvihan@gmail.com', '2022-03-16 15:27:47', 'PayHere', NULL, 'Accepted', 'Monthly', 500),
(10, 'isuruvihan@gmail.com', '2022-03-16 15:34:41', 'Bank', '62320328952189.89144731.jpg', 'Accepted', 'Anually', 5000),
(11, 'isuruvihan@gmail.com', '2022-03-16 15:36:40', 'PayHere', NULL, 'Accepted', 'Anually', 5000),
(12, 'isuruvihan@gmail.com', '2022-03-16 15:42:22', 'Bank', '623204438956c8.56375850.jpg', 'Accepted', 'Anually', 5000),
(13, 'isuruvihan@gmail.com', '2022-03-16 15:58:48', 'Bank', '6232091f654106.16977227.jpg', 'Accepted', 'Anually', 5000),
(14, 'isuruvihan@gmail.com', '2022-03-16 15:59:53', 'PayHere', NULL, 'Accepted', 'Anually', 5000),
(15, 'isuruvihan@gmail.com', '2022-03-17 17:25:04', 'Bank', '62320a2387baa4.00806726.jpg', 'Accepted', 'Monthly', 500);

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
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `PicSrc` varchar(50) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`Id`, `Name`, `Email`, `Title`, `Message`, `PicSrc`, `Timestamp`) VALUES
(2, 'Priya Fonseka', 'priyafonseka@gmail.com', 'Reconsider about annual subscription fee', 'Can you please reconsider about the annual subscription Rs.5000/= ', NULL, '2022-03-20 02:18:58'),
(3, 'Priya Fonseka', 'priyafonseka19@gmail.com', 'Blood Donation', 'Shall we organize a blood donation campaign? So we can promote our association among the society and donate bool to hospitals.', '623690a27b7f69.01660700.jpg', '2022-03-20 02:25:38'),
(4, 'Isuru Harischandra', 'isuruvihan@gmail.com', 'Title', 'Suggestion', NULL, '2022-03-27 05:56:08'),
(5, 'Isuru Harischandra', 'isuruvihan@gmail.com', 'Meeting', 'Haloooo heta enawatheee', '623ffd58953298.79869104.png', '2022-03-27 05:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `transferedcash`
--

CREATE TABLE `transferedcash` (
  `Id` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `TransferedBy` varchar(200) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transferedcash`
--

INSERT INTO `transferedcash` (`Id`, `ProjectId`, `Amount`, `TransferedBy`, `Timestamp`) VALUES
(1, 3, '12500.00', 'isuruvihan@gmail.com', '2022-03-15 19:47:36'),
(2, 3, '10000.00', 'isuruvihan@gmail.com', '2022-03-18 15:06:22'),
(3, 4, '150000.00', 'isuruvihan@gmail.com', '2022-03-22 05:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `transfereditems`
--

CREATE TABLE `transfereditems` (
  `Id` int(11) NOT NULL,
  `ItemName` varchar(150) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `TransferedBy` varchar(150) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfereditems`
--

INSERT INTO `transfereditems` (`Id`, `ItemName`, `Quantity`, `ProjectId`, `TransferedBy`, `Timestamp`) VALUES
(1, 'Laptop', 100, 1, 'isuruvihan@gmail.com', '2022-01-15 03:38:54'),
(2, 'Laptop', 10, 3, 'isuruvihan@gmail.com', '2022-01-27 07:51:00'),
(3, 'Laptop', 25, 4, 'isuruvihan@gmail.com', '2022-03-22 05:24:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`Id`);

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
  ADD PRIMARY KEY (`Id`) USING BTREE;

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
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `projectitems`
--
ALTER TABLE `projectitems`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `projectitemspendings`
--
ALTER TABLE `projectitemspendings`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `transferedcash`
--
ALTER TABLE `transferedcash`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transfereditems`
--
ALTER TABLE `transfereditems`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430;

--
-- AUTO_INCREMENT for table `associationitems`
--
ALTER TABLE `associationitems`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cashdonations`
--
ALTER TABLE `cashdonations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `chatmessages`
--
ALTER TABLE `chatmessages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `commentsforposts`
--
ALTER TABLE `commentsforposts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `committeechatmessages`
--
ALTER TABLE `committeechatmessages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groupchats`
--
ALTER TABLE `groupchats`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `itemdonations`
--
ALTER TABLE `itemdonations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memberaccountrequests`
--
ALTER TABLE `memberaccountrequests`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `privatechats`
--
ALTER TABLE `privatechats`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectcashspendings`
--
ALTER TABLE `projectcashspendings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projectitems`
--
ALTER TABLE `projectitems`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projectitemspendings`
--
ALTER TABLE `projectitemspendings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscriptiontypes`
--
ALTER TABLE `subscriptiontypes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transferedcash`
--
ALTER TABLE `transferedcash`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transfereditems`
--
ALTER TABLE `transfereditems`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
