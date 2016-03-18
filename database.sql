-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 03, 2016 at 06:57 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `circles`
--

CREATE TABLE `circles` (
  `circleid` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circles`
--

INSERT INTO `circles` (`circleid`, `title`, `about`) VALUES
(1, 'testing', 'dsjbds'),
(2, 'abc', 'def');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usrs`
--

CREATE TABLE `tbl_usrs` (
  `userid` int(8) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `dob` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `regnum` int(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `profile` varchar(60) NOT NULL,
  `aboutme` text NOT NULL,
  `classof` int(4) NOT NULL,
  `faculty` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usrs`
--

INSERT INTO `tbl_usrs` (`userid`, `firstname`, `lastname`, `dob`, `gender`, `city`, `province`, `country`, `regnum`, `username`, `password`, `email`, `profile`, `aboutme`, `classof`, `faculty`) VALUES
(1, '', '2012002', 0, '', '', '', '', 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@mydomain.com', '', '', 0, ''),
(2, 'abcd', 'adnan', 0, '', '', '', '', 0, 'asimadnan', '21232f297a57a5a743894a0e4a801fc3', 'abc@def.com', '', '', 0, ''),
(3, 'test', 'testabc', 0, '', '', '', '', 2012999, 'test2', '21232f297a57a5a743894a0e4a801fc3', 'test@test.com', '', '', 0, ''),
(4, 'ijlal', 'tahir', 0, '', '', '', '', 2014135, 'ijlal', '21232f297a57a5a743894a0e4a801fc3', 'u2014135@giki.edu.pk', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circles`
--
ALTER TABLE `circles`
  ADD PRIMARY KEY (`circleid`),
  ADD KEY `circleid` (`circleid`),
  ADD KEY `circleid_2` (`circleid`);

--
-- Indexes for table `tbl_usrs`
--
ALTER TABLE `tbl_usrs`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `userid_2` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `circles`
--
ALTER TABLE `circles`
  MODIFY `circleid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_usrs`
--
ALTER TABLE `tbl_usrs`
  MODIFY `userid` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;