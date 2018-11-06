-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 04:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tjsl_cirebon`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activity_id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
(1, 1, 'logged in from: ::1', 'users', '2018-11-05 07:53:35', 0),
(2, 1, 'logged in from: ::1', 'users', '2018-11-05 08:14:07', 0),
(3, 1, 'logged in from: ::1', 'users', '2018-11-05 15:53:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci3_sessions`
--

CREATE TABLE `ci3_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci3_sessions`
--

INSERT INTO `ci3_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1irgnfh5jb2gr83lq86rs05b6oaoe7r6', '::1', 1541427938, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313432373732383b7265717565737465645f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b70726576696f75735f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b),
('2ebc3ef4346fcbffa109523cb9572a2405e9895f', '::1', 1541394859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313339343835393b7265717565737465645f706167657c733a35343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2d626f6e666972652f7075626c69632f696e6465782e706870223b70726576696f75735f706167657c733a35343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2d626f6e666972652f7075626c69632f696e6465782e706870223b),
('3m4o96p3lhn0kg0n20okpm0d2tgt7q1e', '::1', 1541405604, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430353435393b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('7kcp3fjc3lrr8idlt74pm831m246rj2v', '::1', 1541429853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313432393539393b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('aodrdbl11u8u3bdu95jjv8g0e9vnamnk', '::1', 1541401895, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430313839353b7265717565737465645f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b),
('bvfoudfdlu354rma474qi20bdvisil4m', '::1', 1541428226, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313432383036323b7265717565737465645f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b70726576696f75735f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b),
('c8l12qfn8tpvo8gbl81uon719p0vc9ck', '::1', 1541405806, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430353739323b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('d3o9kn8cs0d9nv7lkknc0gs04ofc5i42', '::1', 1541402048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430313931373b7265717565737465645f706167657c733a33363a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f6d656d626572223b70726576696f75735f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('dsfp88m5ii72qeo6273hh63l4m0icn2g', '::1', 1541403636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430333436303b7265717565737465645f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('efit5o38o0lss2j7ufjtjq7k0joro98s', '::1', 1541401895, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430313838383b7265717565737465645f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b),
('ko646975uv5t7p40n9ukic07n5e86aeu', '::1', 1541404860, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430343538313b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('kq2ukp15r722jc856m011a5naepjgr5h', '::1', 1541401895, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430313839353b7265717565737465645f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b),
('mkv14ig4gp9klknr4pqfg2ili5ch2gcc', '::1', 1541402510, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430323233323b7265717565737465645f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('mvn9i8h4j1dnq043fm0kd3je9808q7j7', '::1', 1541403259, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430333038373b7265717565737465645f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('o2g2398jlkruojq5571gtjj9mqtpk6mq', '::1', 1541404940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430343933393b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('o3sdlvgrarsa3hvfi1t4mcfbnlvqgfgj', '::1', 1541404402, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430343132303b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('ob127eu5bjaoajt3gjmim3i3adm1hhm5', '::1', 1541430421, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313433303432313b7265717565737465645f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b70726576696f75735f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b),
('ocdoci06c4mshkl6qf8e4bqer2gnsqcm', '::1', 1541403853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430333736333b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('qb95atf6l95e7dtifkp5nlejrttfbann', '::1', 1541427612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313432373334393b7265717565737465645f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b70726576696f75735f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b),
('qe0538hjlmkeebnkg5d8qfekp07g4pqa', '::1', 1541429952, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313432393935323b7265717565737465645f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b70726576696f75735f706167657c733a33343a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f736b7064223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('qiejrn53n3n4ig32o2j198up4mnie4is', '::1', 1541403018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430323733343b7265717565737465645f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b),
('soigc7dj65q4e6rlh2q8ofkv4f5rfb37', '::1', 1541400834, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313430303830333b7265717565737465645f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2263633434383035336535633562353937623163376561326330356263326263343233303865306636223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6c616e67756167657c733a373a22656e676c697368223b70726576696f75735f706167657c733a33353a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f7375706572223b),
('t7eaens5cteo3rff35l39gouvhas2ng2', '::1', 1541429489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534313432393232333b7265717565737465645f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b70726576696f75735f706167657c733a33303a22687474703a2f2f6c6f63616c686f73742f746a736c2d63697265626f6e2f223b);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `iso` char(2) NOT NULL DEFAULT 'US',
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`iso`, `name`, `printable_name`, `iso3`, `numcode`) VALUES
('AD', 'ANDORRA', 'Andorra', 'AND', 20),
('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784),
('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4),
('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28),
('AI', 'ANGUILLA', 'Anguilla', 'AIA', 660),
('AL', 'ALBANIA', 'Albania', 'ALB', 8),
('AM', 'ARMENIA', 'Armenia', 'ARM', 51),
('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530),
('AO', 'ANGOLA', 'Angola', 'AGO', 24),
('AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL),
('AR', 'ARGENTINA', 'Argentina', 'ARG', 32),
('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16),
('AT', 'AUSTRIA', 'Austria', 'AUT', 40),
('AU', 'AUSTRALIA', 'Australia', 'AUS', 36),
('AW', 'ARUBA', 'Aruba', 'ABW', 533),
('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31),
('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70),
('BB', 'BARBADOS', 'Barbados', 'BRB', 52),
('BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50),
('BE', 'BELGIUM', 'Belgium', 'BEL', 56),
('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854),
('BG', 'BULGARIA', 'Bulgaria', 'BGR', 100),
('BH', 'BAHRAIN', 'Bahrain', 'BHR', 48),
('BI', 'BURUNDI', 'Burundi', 'BDI', 108),
('BJ', 'BENIN', 'Benin', 'BEN', 204),
('BM', 'BERMUDA', 'Bermuda', 'BMU', 60),
('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96),
('BO', 'BOLIVIA', 'Bolivia', 'BOL', 68),
('BR', 'BRAZIL', 'Brazil', 'BRA', 76),
('BS', 'BAHAMAS', 'Bahamas', 'BHS', 44),
('BT', 'BHUTAN', 'Bhutan', 'BTN', 64),
('BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL),
('BW', 'BOTSWANA', 'Botswana', 'BWA', 72),
('BY', 'BELARUS', 'Belarus', 'BLR', 112),
('BZ', 'BELIZE', 'Belize', 'BLZ', 84),
('CA', 'CANADA', 'Canada', 'CAN', 124),
('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180),
('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140),
('CG', 'CONGO', 'Congo', 'COG', 178),
('CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756),
('CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384),
('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184),
('CL', 'CHILE', 'Chile', 'CHL', 152),
('CM', 'CAMEROON', 'Cameroon', 'CMR', 120),
('CN', 'CHINA', 'China', 'CHN', 156),
('CO', 'COLOMBIA', 'Colombia', 'COL', 170),
('CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188),
('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL),
('CU', 'CUBA', 'Cuba', 'CUB', 192),
('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132),
('CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL),
('CY', 'CYPRUS', 'Cyprus', 'CYP', 196),
('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203),
('DE', 'GERMANY', 'Germany', 'DEU', 276),
('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262),
('DK', 'DENMARK', 'Denmark', 'DNK', 208),
('DM', 'DOMINICA', 'Dominica', 'DMA', 212),
('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214),
('DZ', 'ALGERIA', 'Algeria', 'DZA', 12),
('EC', 'ECUADOR', 'Ecuador', 'ECU', 218),
('EE', 'ESTONIA', 'Estonia', 'EST', 233),
('EG', 'EGYPT', 'Egypt', 'EGY', 818),
('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732),
('ER', 'ERITREA', 'Eritrea', 'ERI', 232),
('ES', 'SPAIN', 'Spain', 'ESP', 724),
('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231),
('FI', 'FINLAND', 'Finland', 'FIN', 246),
('FJ', 'FIJI', 'Fiji', 'FJI', 242),
('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238),
('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583),
('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234),
('FR', 'FRANCE', 'France', 'FRA', 250),
('GA', 'GABON', 'Gabon', 'GAB', 266),
('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826),
('GD', 'GRENADA', 'Grenada', 'GRD', 308),
('GE', 'GEORGIA', 'Georgia', 'GEO', 268),
('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254),
('GH', 'GHANA', 'Ghana', 'GHA', 288),
('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292),
('GL', 'GREENLAND', 'Greenland', 'GRL', 304),
('GM', 'GAMBIA', 'Gambia', 'GMB', 270),
('GN', 'GUINEA', 'Guinea', 'GIN', 324),
('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312),
('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226),
('GR', 'GREECE', 'Greece', 'GRC', 300),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
('GT', 'GUATEMALA', 'Guatemala', 'GTM', 320),
('GU', 'GUAM', 'Guam', 'GUM', 316),
('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624),
('GY', 'GUYANA', 'Guyana', 'GUY', 328),
('HK', 'HONG KONG', 'Hong Kong', 'HKG', 344),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL),
('HN', 'HONDURAS', 'Honduras', 'HND', 340),
('HR', 'CROATIA', 'Croatia', 'HRV', 191),
('HT', 'HAITI', 'Haiti', 'HTI', 332),
('HU', 'HUNGARY', 'Hungary', 'HUN', 348),
('ID', 'INDONESIA', 'Indonesia', 'IDN', 360),
('IE', 'IRELAND', 'Ireland', 'IRL', 372),
('IL', 'ISRAEL', 'Israel', 'ISR', 376),
('IN', 'INDIA', 'India', 'IND', 356),
('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL),
('IQ', 'IRAQ', 'Iraq', 'IRQ', 368),
('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364),
('IS', 'ICELAND', 'Iceland', 'ISL', 352),
('IT', 'ITALY', 'Italy', 'ITA', 380),
('JM', 'JAMAICA', 'Jamaica', 'JAM', 388),
('JO', 'JORDAN', 'Jordan', 'JOR', 400),
('JP', 'JAPAN', 'Japan', 'JPN', 392),
('KE', 'KENYA', 'Kenya', 'KEN', 404),
('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417),
('KH', 'CAMBODIA', 'Cambodia', 'KHM', 116),
('KI', 'KIRIBATI', 'Kiribati', 'KIR', 296),
('KM', 'COMOROS', 'Comoros', 'COM', 174),
('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659),
('KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408),
('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410),
('KW', 'KUWAIT', 'Kuwait', 'KWT', 414),
('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136),
('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398),
('LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418),
('LB', 'LEBANON', 'Lebanon', 'LBN', 422),
('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662),
('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438),
('LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144),
('LR', 'LIBERIA', 'Liberia', 'LBR', 430),
('LS', 'LESOTHO', 'Lesotho', 'LSO', 426),
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440),
('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442),
('LV', 'LATVIA', 'Latvia', 'LVA', 428),
('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434),
('MA', 'MOROCCO', 'Morocco', 'MAR', 504),
('MC', 'MONACO', 'Monaco', 'MCO', 492),
('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498),
('MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450),
('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807),
('ML', 'MALI', 'Mali', 'MLI', 466),
('MM', 'MYANMAR', 'Myanmar', 'MMR', 104),
('MN', 'MONGOLIA', 'Mongolia', 'MNG', 496),
('MO', 'MACAO', 'Macao', 'MAC', 446),
('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580),
('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474),
('MR', 'MAURITANIA', 'Mauritania', 'MRT', 478),
('MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500),
('MT', 'MALTA', 'Malta', 'MLT', 470),
('MU', 'MAURITIUS', 'Mauritius', 'MUS', 480),
('MV', 'MALDIVES', 'Maldives', 'MDV', 462),
('MW', 'MALAWI', 'Malawi', 'MWI', 454),
('MX', 'MEXICO', 'Mexico', 'MEX', 484),
('MY', 'MALAYSIA', 'Malaysia', 'MYS', 458),
('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508),
('NA', 'NAMIBIA', 'Namibia', 'NAM', 516),
('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540),
('NE', 'NIGER', 'Niger', 'NER', 562),
('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574),
('NG', 'NIGERIA', 'Nigeria', 'NGA', 566),
('NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558),
('NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528),
('NO', 'NORWAY', 'Norway', 'NOR', 578),
('NP', 'NEPAL', 'Nepal', 'NPL', 524),
('NR', 'NAURU', 'Nauru', 'NRU', 520),
('NU', 'NIUE', 'Niue', 'NIU', 570),
('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554),
('OM', 'OMAN', 'Oman', 'OMN', 512),
('PA', 'PANAMA', 'Panama', 'PAN', 591),
('PE', 'PERU', 'Peru', 'PER', 604),
('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258),
('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598),
('PH', 'PHILIPPINES', 'Philippines', 'PHL', 608),
('PK', 'PAKISTAN', 'Pakistan', 'PAK', 586),
('PL', 'POLAND', 'Poland', 'POL', 616),
('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666),
('PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612),
('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630),
('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL),
('PT', 'PORTUGAL', 'Portugal', 'PRT', 620),
('PW', 'PALAU', 'Palau', 'PLW', 585),
('PY', 'PARAGUAY', 'Paraguay', 'PRY', 600),
('QA', 'QATAR', 'Qatar', 'QAT', 634),
('RE', 'REUNION', 'Reunion', 'REU', 638),
('RO', 'ROMANIA', 'Romania', 'ROM', 642),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643),
('RW', 'RWANDA', 'Rwanda', 'RWA', 646),
('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682),
('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90),
('SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690),
('SD', 'SUDAN', 'Sudan', 'SDN', 736),
('SE', 'SWEDEN', 'Sweden', 'SWE', 752),
('SG', 'SINGAPORE', 'Singapore', 'SGP', 702),
('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654),
('SI', 'SLOVENIA', 'Slovenia', 'SVN', 705),
('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744),
('SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703),
('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694),
('SM', 'SAN MARINO', 'San Marino', 'SMR', 674),
('SN', 'SENEGAL', 'Senegal', 'SEN', 686),
('SO', 'SOMALIA', 'Somalia', 'SOM', 706),
('SR', 'SURINAME', 'Suriname', 'SUR', 740),
('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678),
('SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222),
('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760),
('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748),
('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796),
('TD', 'CHAD', 'Chad', 'TCD', 148),
('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL),
('TG', 'TOGO', 'Togo', 'TGO', 768),
('TH', 'THAILAND', 'Thailand', 'THA', 764),
('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762),
('TK', 'TOKELAU', 'Tokelau', 'TKL', 772),
('TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL),
('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795),
('TN', 'TUNISIA', 'Tunisia', 'TUN', 788),
('TO', 'TONGA', 'Tonga', 'TON', 776),
('TR', 'TURKEY', 'Turkey', 'TUR', 792),
('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780),
('TV', 'TUVALU', 'Tuvalu', 'TUV', 798),
('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158),
('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834),
('UA', 'UKRAINE', 'Ukraine', 'UKR', 804),
('UG', 'UGANDA', 'Uganda', 'UGA', 800),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL),
('US', 'UNITED STATES', 'United States', 'USA', 840),
('UY', 'URUGUAY', 'Uruguay', 'URY', 858),
('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860),
('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336),
('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670),
('VE', 'VENEZUELA', 'Venezuela', 'VEN', 862),
('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92),
('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850),
('VN', 'VIET NAM', 'Viet Nam', 'VNM', 704),
('VU', 'VANUATU', 'Vanuatu', 'VUT', 548),
('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876),
('WS', 'SAMOA', 'Samoa', 'WSM', 882),
('YE', 'YEMEN', 'Yemen', 'YEM', 887),
('YT', 'MAYOTTE', 'Mayotte', NULL, NULL),
('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710),
('ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894),
('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716);

-- --------------------------------------------------------

--
-- Table structure for table `email_queue`
--

CREATE TABLE `email_queue` (
  `id` int(11) NOT NULL,
  `to_email` varchar(254) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  `csv_attachment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_permohonan`
--

CREATE TABLE `jenis_permohonan` (
  `jenis_permohonan_id` int(11) NOT NULL,
  `nama_jenis_permohonan` varchar(255) DEFAULT NULL,
  `ket` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_permohonan`
--

INSERT INTO `jenis_permohonan` (`jenis_permohonan_id`, `nama_jenis_permohonan`, `ket`, `deleted`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 'Penyuluhan/Training', '-', 0, 1, '2018-10-30 20:15:35', NULL, NULL),
(2, 'Pengadaan Fasum', '-', 0, 1, '2018-10-30 20:15:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` bigint(20) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permission_id`, `name`, `description`, `status`) VALUES
(2, 'Site.Content.View', 'Allow users to view the Content Context', 'active'),
(3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'),
(4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'),
(5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'),
(6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'),
(7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'),
(8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'),
(9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'),
(10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'),
(11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'),
(12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'),
(13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'),
(14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'),
(15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'),
(16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'),
(17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'),
(18, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'),
(19, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'),
(20, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'),
(21, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'),
(23, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'),
(24, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'),
(26, 'Activities.Own.View', 'To view the users own activity logs', 'active'),
(27, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'),
(28, 'Activities.User.View', 'To view the user activity logs', 'active'),
(29, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'),
(30, 'Activities.Module.View', 'To view the module activity logs', 'active'),
(31, 'Activities.Module.Delete', 'To delete the module activity logs', 'active'),
(32, 'Activities.Date.View', 'To view the users own activity logs', 'active'),
(33, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'),
(34, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'),
(35, 'Bonfire.Settings.View', 'To view the site settings page.', 'active'),
(36, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'),
(37, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'),
(38, 'Bonfire.Database.View', 'To view the Database menu.', 'active'),
(39, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'),
(40, 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active'),
(41, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'),
(42, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'),
(43, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'),
(44, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'),
(45, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active'),
(48, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'),
(49, 'Bonfire.Roles.Add', 'To add New Roles', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_tjsl`
--

CREATE TABLE `permohonan_tjsl` (
  `permohonan_tjsl_id` int(11) NOT NULL,
  `program_proritas_id` int(11) NOT NULL,
  `sub_program_prioritas_id` int(11) NOT NULL,
  `desksipsi` text NOT NULL,
  `jenis_permohonan_id` int(11) NOT NULL,
  `nilai_RAB` double NOT NULL,
  `tipe_pemohon` enum('Individu','Kelompok') NOT NULL COMMENT 'individu atau kelompok',
  `nama_pj` varchar(255) NOT NULL COMMENT 'penanggung jawab',
  `nik_pj` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `tipe_perusahaan_id` int(11) NOT NULL,
  `perusahaan_id
perusahaan_id` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `perusahaan_id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `tipe_id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`perusahaan_id`, `nama_perusahaan`, `tipe_id`, `ket`, `deleted`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 'PT. BANK CENTRAL ASIA', 1, '-', 0, 1, '2018-10-30 19:55:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_prioritas`
--

CREATE TABLE `program_prioritas` (
  `program_prioritas_id` int(11) NOT NULL,
  `nama_program_prioritas` varchar(255) DEFAULT NULL,
  `ket` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_prioritas`
--

INSERT INTO `program_prioritas` (`program_prioritas_id`, `nama_program_prioritas`, `ket`, `deleted`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 'BIDANG KEMAKMURAN', '-', 0, 1, '2018-10-30 20:06:28', NULL, NULL),
(2, 'BIDANG KESEHATAN', '-', 0, 1, '2018-10-30 20:06:28', NULL, NULL),
(3, 'BIDANG PENDIDIKAN', '-', 0, 1, '2018-10-30 20:06:28', NULL, NULL),
(4, 'BIDANG LINGKUNGAN HIDUP', '-', 0, 1, '2018-10-30 20:06:28', NULL, NULL),
(5, 'BIDANG SENI DAN BUDAYA', '-', 0, 1, '2018-10-30 20:06:28', NULL, NULL),
(6, 'BIDANG OLAHRAGA', '-', 0, 1, '2018-10-30 20:06:28', NULL, NULL),
(7, 'BIDANG AGAMA', '-', 0, 1, '2018-10-30 20:06:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `realisasi_tjsl`
--

CREATE TABLE `realisasi_tjsl` (
  `realisasi_tjsl_id` int(11) NOT NULL,
  `permohonan_tjsl_id` int(11) NOT NULL,
  `nominal` double NOT NULL,
  `ket` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `default_context` varchar(255) DEFAULT 'content',
  `deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `default_context`, `deleted`) VALUES
(1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, '/skpd/', 'content', 0),
(2, 'Editor', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 'content', 0),
(4, 'User', 'This is the default user with access to login.', 1, 0, '', 'content', 0),
(6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 1, '', 'content', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 23),
(1, 24),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 48),
(1, 49),
(2, 2),
(2, 3),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 48);

-- --------------------------------------------------------

--
-- Table structure for table `schema_version`
--

CREATE TABLE `schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schema_version`
--

INSERT INTO `schema_version` (`type`, `version`) VALUES
('core', 43);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(30) NOT NULL,
  `module` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `module`, `value`) VALUES
('auth.allow_name_change', 'core', '1'),
('auth.allow_register', 'core', '1'),
('auth.allow_remember', 'core', '1'),
('auth.do_login_redirect', 'core', '1'),
('auth.login_type', 'core', 'email'),
('auth.name_change_frequency', 'core', '1'),
('auth.name_change_limit', 'core', '1'),
('auth.password_force_mixed_case', 'core', '0'),
('auth.password_force_numbers', 'core', '0'),
('auth.password_force_symbols', 'core', '0'),
('auth.password_min_length', 'core', '8'),
('auth.password_show_labels', 'core', '0'),
('auth.remember_length', 'core', '1209600'),
('auth.user_activation_method', 'core', '0'),
('auth.use_extended_profile', 'core', '0'),
('auth.use_usernames', 'core', '1'),
('form_save', 'core.ui', 'ctrl+s/⌘+s'),
('goto_content', 'core.ui', 'alt+c'),
('mailpath', 'email', '/usr/sbin/sendmail'),
('mailtype', 'email', 'text'),
('password_iterations', 'users', '8'),
('protocol', 'email', 'mail'),
('sender_email', 'email', ''),
('site.languages', 'core', 'a:3:{i:0;s:7:\"english\";i:1;s:10:\"portuguese\";i:2;s:7:\"persian\";}'),
('site.list_limit', 'core', '25'),
('site.show_front_profiler', 'core', '1'),
('site.show_profiler', 'core', '1'),
('site.status', 'core', '1'),
('site.system_email', 'core', 'admin@mybonfire.com'),
('site.title', 'core', 'My Bonfire'),
('smtp_host', 'email', ''),
('smtp_pass', 'email', ''),
('smtp_port', 'email', ''),
('smtp_timeout', 'email', ''),
('smtp_user', 'email', ''),
('updates.bleeding_edge', 'core', '1'),
('updates.do_check', 'core', '1');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `abbrev` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `abbrev`) VALUES
(1, 'Alaska', 'AK'),
(2, 'Alabama', 'AL'),
(3, 'American Samoa', 'AS'),
(4, 'Arizona', 'AZ'),
(5, 'Arkansas', 'AR'),
(6, 'California', 'CA'),
(7, 'Colorado', 'CO'),
(8, 'Connecticut', 'CT'),
(9, 'Delaware', 'DE'),
(10, 'District of Columbia', 'DC'),
(11, 'Florida', 'FL'),
(12, 'Georgia', 'GA'),
(13, 'Guam', 'GU'),
(14, 'Hawaii', 'HI'),
(15, 'Idaho', 'ID'),
(16, 'Illinois', 'IL'),
(17, 'Indiana', 'IN'),
(18, 'Iowa', 'IA'),
(19, 'Kansas', 'KS'),
(20, 'Kentucky', 'KY'),
(21, 'Louisiana', 'LA'),
(22, 'Maine', 'ME'),
(23, 'Marshall Islands', 'MH'),
(24, 'Maryland', 'MD'),
(25, 'Massachusetts', 'MA'),
(26, 'Michigan', 'MI'),
(27, 'Minnesota', 'MN'),
(28, 'Mississippi', 'MS'),
(29, 'Missouri', 'MO'),
(30, 'Montana', 'MT'),
(31, 'Nebraska', 'NE'),
(32, 'Nevada', 'NV'),
(33, 'New Hampshire', 'NH'),
(34, 'New Jersey', 'NJ'),
(35, 'New Mexico', 'NM'),
(36, 'New York', 'NY'),
(37, 'North Carolina', 'NC'),
(38, 'North Dakota', 'ND'),
(39, 'Northern Mariana Islands', 'MP'),
(40, 'Ohio', 'OH'),
(41, 'Oklahoma', 'OK'),
(42, 'Oregon', 'OR'),
(43, 'Palau', 'PW'),
(44, 'Pennsylvania', 'PA'),
(45, 'Puerto Rico', 'PR'),
(46, 'Rhode Island', 'RI'),
(47, 'South Carolina', 'SC'),
(48, 'South Dakota', 'SD'),
(49, 'Tennessee', 'TN'),
(50, 'Texas', 'TX'),
(51, 'Utah', 'UT'),
(52, 'Vermont', 'VT'),
(53, 'Virgin Islands', 'VI'),
(54, 'Virginia', 'VA'),
(55, 'Washington', 'WA'),
(56, 'West Virginia', 'WV'),
(57, 'Wisconsin', 'WI'),
(58, 'Wyoming', 'WY'),
(59, 'Armed Forces Africa', 'AE'),
(60, 'Armed Forces Canada', 'AE'),
(61, 'Armed Forces Europe', 'AE'),
(62, 'Armed Forces Middle East', 'AE'),
(63, 'Armed Forces Pacific', 'AP');

-- --------------------------------------------------------

--
-- Table structure for table `sub_program_prioritas`
--

CREATE TABLE `sub_program_prioritas` (
  `sub_program_prioritas_id` int(11) NOT NULL,
  `nama_program_prioritas` varchar(255) DEFAULT NULL,
  `program_prioritas_id` int(11) DEFAULT NULL,
  `ket` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_program_prioritas`
--

INSERT INTO `sub_program_prioritas` (`sub_program_prioritas_id`, `nama_program_prioritas`, `program_prioritas_id`, `ket`, `deleted`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 'kewirausahaan dan kemandirian', 1, '-', 0, 1, '2018-10-30 20:13:57', NULL, NULL),
(2, 'diklat kewirausahaan', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(3, 'bimbingan teknis kewirausahaan spesifik wilayah', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(4, 'magang ketenagakerjaan usia produktif pada berbagai usaha', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(5, 'fasilitasi permodalan usaha bagi UMKM', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(6, 'pengembangan pangsa pasar produk UMKM', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(7, 'promosi usaha bekerjasama dengan media massa periodik', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(8, 'pameran produk unggulan KUMKM', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(9, 'berbasis kewilayahan', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(10, 'pembinaan ekonomi kejamaahan', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(11, 'pembentukan kelompok usaha bersama KUBE dan lembaga keuangan mikro tingkat kecamatan', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(12, 'pendampingan usaha fakir miskin', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(13, 'pendampingan kelompok usaha bersama fakir miskin', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(14, 'bimbingan teknis usaha kecil berbasis lokal', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(15, 'bimbingan pemasaran produk usaha kecil fakir miskin', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(16, 'penataan infrastruktur wilayah', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(17, 'penataan taman desa sebagai media tanggung jawab sosial dan lingkungan dan pelestarian lingkungan pedesaan', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(18, 'reboisasi dan penataan hutan disekitarnya', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(19, 'sponsorship revitalisasi sarana umum dan tempat ibadah', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(20, 'kepedulian pada bidang energi terutama dalam mendukung berkelanjutan sumber energi (Sustainable energy)', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(21, 'pembangunan jalan', 1, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(22, 'peningkatan mutu SDM bidang informasi kesehatan dengan pelatihan sistem pencatatan dan basis data dan informasi kesehatan', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(23, 'peningkatan sarana dan prasarana informasi kesehatan berbasis komputer: penyempurnaan sistem informasi kesehatan melalui penyediaan teknologi informasi modern', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(24, 'sistem pendataan cakupan imunisasi dan linakes dengan pemutakhiran data dan informasi kesehatan', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(25, 'bantuan imunisasi periodik', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(26, 'peningkatan perilaku hidup sehat', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(27, 'gerakan ibu terampil dan warga sehat', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(28, 'forum kelurahan sehat', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(29, 'donor darah', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(30, 'sosialisasi penanggulangan penyakit menular (HIV, NAFZA dan lain-lain).', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(31, 'peningkatan sarana kesehatan dan kebersihan lingkungan', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(32, 'penyediaan air bersih melalui hydrant umum', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(33, 'pembangunan septic tank komunal', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(34, 'fasilitas air bersih', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(35, 'pelayanan kesehatan', 2, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(36, 'peningkatan peran serta perguruan tinggi dan dunia usaha dalam menunjang pendidikan masyarakat', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(37, 'pembangunan laboratorium lapangan berorientasi pendidikan masyarakat (lifeskill education)', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(38, 'pembuatan bulletin pendidikan masyarakat (periodik)', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(39, 'pengembangan perpustakaan kelurahan dan kecamatan sebagai bagian sarana belajar masyarakat', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(40, 'pengadaan buku-buku untuk perpustakaan sekolah dan perpustakaan sarana belajar masyarakat', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(41, 'pembangunan sarana dan prasarana yang belum memadai, mencakup', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(42, 'pendirian perpustakaan Kecamatan', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(43, 'rehabilitasi ruang kelas pada Sekolah Dasar, Sekolah Menengah Pertama, dan Sekolah Menengah', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(44, 'pendampingan dan penyuluhan pendidikan luar sekolah bermuatan motivasi berprestasi dan budaya', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(45, 'pendampingan masyarakat terutama berkaitan dengan motivasi dan prestasi', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(46, 'penyuluhan tentang bahaya merokok dan narkoba serta etika budaya bangsa', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(47, 'penyuluhan tentang bahaya merokok dan narkoba serta etika budaya bangsa', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(48, 'rehabilitasi ruang kelas pada Sekolah Dasar, Sekolah Menengah Pertama, dan Sekolah Menengah', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(49, 'program bimbingan kreativitas anak', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(50, 'lomba kreasi anak', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(51, 'beasiswa anak-anak berprestasi', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(52, 'beasiswa anak-anak berprestasi', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(53, 'penanganan anak-anak terlantar melalui pendirian rumah singgah', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(54, 'beasiswa anak asuh', 3, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(55, 'pemberdayaan masyarakat dalam pengelolaan sampah terpadu', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(56, 'penerapan sistem pengelolaan reaktor terpadu berbasis rumahtangga', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(57, 'pelatihan pengelolaan sampah terpadu', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(58, 'bimbingan teknis usaha pengelolaan sampah terpadu', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(59, 'lingkungan hidup', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(60, 'pembangunan area hijau', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(61, 'penanaman pohon dan taman', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(62, 'kegiatan pelestarian lingkungan yang memberikan manfaat untuk masyarakat sekitar', 4, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(63, 'perlindungan pengetahuan tradisional seni dan budaya dalam masyarakat', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(64, 'inventarisasi pengetahuan tradisional seni dan budaya dalam masyarakat', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(65, 'pendaftaran hak atas kekayaan intelektual (HAKI) pengetahuan tradisional seni dan budaya', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(66, 'revitalisasi pengetahuan tradisional seni dan budaya melalui event pameran atau gelar seni budaya dengan sponsorship swasta dan pemerintah', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(67, 'pembangunan sarana seni dan budaya', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(68, 'revitalisasi sarana dan prasarana seni dan budaya', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(69, 'penguatan kearifan lokal', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(70, 'pengembangan skema perlindungan sosial berbasis masyarakat dan seterusnya', 5, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(71, 'kaderisasi atlet olahraga berprestasi', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(72, 'sosialisasi cabang olahraga pada anak-anak', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(73, 'pekan olahraga antar desa', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(74, 'penguatan sarana olahraga', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(75, 'pembangunan gedung olahraga', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(76, 'penyediaan alat-alat olahraga bagi siswa sekolah', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(77, 'pengembangan pusat informasi pendidikan dan pelatihan keolahragaan', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(78, 'pendukungan atlet berprestasi dengan menjadi sponsorship pada event olahraga', 6, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(79, 'bantuan pembangunan dan/atau pemeliharaan sarana prasarana peribadatan', 7, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(80, 'bantuan peringatan hari–hari besar keagamaan', 7, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL),
(81, 'bantuan lomba dan kegiatan keagamaan', 7, '-', 0, 1, '2018-10-30 20:13:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_perusahaan`
--

CREATE TABLE `tipe_perusahaan` (
  `tipe_id` int(11) NOT NULL,
  `nama_tipe_perusahaan` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_perusahaan`
--

INSERT INTO `tipe_perusahaan` (`tipe_id`, `nama_tipe_perusahaan`, `ket`, `deleted`, `created_by`, `created_on`, `modified_by`, `modified_on`) VALUES
(1, 'BANK', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL),
(2, 'BUMN/BUMD', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL),
(3, 'HOTEL', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL),
(4, 'RESTORAN', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL),
(5, 'KONSTRUKSI/KONTRAKTOR', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL),
(6, 'PERDAGANGAN UMUM', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL),
(7, 'TRANSPORTASI', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL),
(8, 'JASA LAINNYA', '-', 0, 1, '2018-10-30 19:48:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(254) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` char(60) DEFAULT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(45) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `reset_by` int(10) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` varchar(40) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  `force_password_reset` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `last_login`, `last_ip`, `created_on`, `deleted`, `reset_by`, `banned`, `ban_message`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`, `force_password_reset`) VALUES
(1, 1, 'admin@mybonfire.com', 'admin', '$2a$08$9U5oPjRUfQh4z6c.GFpi1OAMrTRVntF8UQV9kNYiGg4E2llDZD3/6', NULL, '2018-11-05 15:53:37', '::1', '2018-10-30 13:28:06', 0, NULL, 0, NULL, 'admin', NULL, 'UM6', 'english', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_cookies`
--

CREATE TABLE `user_cookies` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `meta_id` int(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `ci3_sessions`
--
ALTER TABLE `ci3_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`iso`);

--
-- Indexes for table `email_queue`
--
ALTER TABLE `email_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_permohonan`
--
ALTER TABLE `jenis_permohonan`
  ADD PRIMARY KEY (`jenis_permohonan_id`) USING BTREE;

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `permohonan_tjsl`
--
ALTER TABLE `permohonan_tjsl`
  ADD PRIMARY KEY (`permohonan_tjsl_id`) USING BTREE;

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`perusahaan_id`);

--
-- Indexes for table `program_prioritas`
--
ALTER TABLE `program_prioritas`
  ADD PRIMARY KEY (`program_prioritas_id`) USING BTREE;

--
-- Indexes for table `realisasi_tjsl`
--
ALTER TABLE `realisasi_tjsl`
  ADD PRIMARY KEY (`realisasi_tjsl_id`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`);

--
-- Indexes for table `schema_version`
--
ALTER TABLE `schema_version`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_program_prioritas`
--
ALTER TABLE `sub_program_prioritas`
  ADD PRIMARY KEY (`sub_program_prioritas_id`) USING BTREE;

--
-- Indexes for table `tipe_perusahaan`
--
ALTER TABLE `tipe_perusahaan`
  ADD PRIMARY KEY (`tipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_cookies`
--
ALTER TABLE `user_cookies`
  ADD KEY `token` (`token`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_queue`
--
ALTER TABLE `email_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_permohonan`
--
ALTER TABLE `jenis_permohonan`
  MODIFY `jenis_permohonan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `permohonan_tjsl`
--
ALTER TABLE `permohonan_tjsl`
  MODIFY `permohonan_tjsl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `perusahaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_prioritas`
--
ALTER TABLE `program_prioritas`
  MODIFY `program_prioritas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `realisasi_tjsl`
--
ALTER TABLE `realisasi_tjsl`
  MODIFY `realisasi_tjsl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `sub_program_prioritas`
--
ALTER TABLE `sub_program_prioritas`
  MODIFY `sub_program_prioritas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tipe_perusahaan`
--
ALTER TABLE `tipe_perusahaan`
  MODIFY `tipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `meta_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
