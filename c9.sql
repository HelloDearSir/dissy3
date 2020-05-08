-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 09:17 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `First` varchar(255) NOT NULL,
  `Last` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `bookingd` date NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `student` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `First`, `Last`, `Phone`, `location`, `bookingd`, `tutor`, `time`, `student`) VALUES
(23, 'jon', 'barton', '075481705', 'Plymouth Uni', '2024-04-24', 'Chris_Johnson', '1pm-3pm', 'Jon_Barton'),
(24, 'jon', 'b', '075481705', 'Plymouth Uni', '2019-05-31', 'Chris_Johnson', '1pm-3pm', 'Jon_Barton'),
(26, 'jon', 'b', '075481705', 'Plymouth Uni', '2019-05-31', 'Chris_Johnson', '1pm-3pm', 'David_seaman'),
(27, 'jon', 'b', '075481705', 'Plymouth Uni', '2019-05-31', 'Chris_Johnson', '1pm-3pm', 'Jon_Barton'),
(28, 'jon', 'b', '07506481705', 'plymouth', '2019-01-17', 'Micky', '1pm', 'jon'),
(29, 'jon', 'barton', '07506481705', 'plymouth', '2020-01-30', 'Micky', '1pm', 'jon'),
(30, 'jon', 'barton', '07506481705', 'plymouth', '2019-01-15', 'Micky', '2pm - 3pm', 'jon');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(255) NOT NULL,
  `messager` varchar(255) NOT NULL,
  `messagee` varchar(20) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `messager`, `messagee`, `msg`) VALUES
(84, '', 'Jon_Barton', 'Hey man, you free tomorrow?\r\n'),
(85, '', 'micky', 'Hello'),
(86, '', 'abc', 'wwd'),
(87, 'micky', 'root', 'hi'),
(88, 'root', 'micky', 'Hello'),
(89, 'Jon_Barton', 'micky', 'Hey, you free tomorrow?\r\n'),
(90, 'micky', 'micky', 'Hello, you okay can you meet tomorrow?'),
(91, 'micky', 'Jon_Barton', 'Hello mate '),
(92, 'root', 'micky', 'Hello'),
(93, 'root', 'Jon_Barton', 'Fhi'),
(94, 'root', 'Jon_cena', 'Hefoefoefeofefoejf0oew49jfe49jr9ew4'),
(95, 'root', 'trump', 'dffdf'),
(96, 'Jake_deery', 'Jon_Barton', ''),
(97, 'Jake_deery', 'Micky_row', 'Hey man,can i see you tomorrow?'),
(98, 'Micky_row', 'Jake_deery', 'Hello man, you oka'),
(99, 'Micky_row', 'Jon_Barton', 'Hello, are you free tomorrow'),
(100, 'Micky_row', 'Jaz_mix', 'Hello, how did the exam go '),
(101, 'Micky_row', 'David_lord', 'Did you hand it all in on time?'),
(102, 'Micky_row', 'Staffie_max', 'Hello, you okay?'),
(103, 'staffie_max', 'Micky_row', 'Hello micky'),
(104, 'David_lord', 'Micky_row', 'Hello, micky can you see the date I booked in for is fine for you'),
(105, 'David_lord', 'Micky_row', 'Yes micky I did hand it all in on time '),
(106, 'Micky_row', 'David_lord', 'Hey, david i have approved on the booking see you then :)'),
(107, 'Jaz_mix', 'Micky_row', 'Hey micky, the exam went very well :D'),
(108, 'micky_row', 'Jon_Barton', 'I have accept the booking '),
(109, 'Jon_Barton', 'micky_row', 'Hello'),
(110, 'Jon_Barton', 'micky_row', 'I see you then'),
(111, 'Chris_johnson', 'Jon_Barton', 'Hello'),
(112, 'jbarton2', 'Micky_row', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(20) NOT NULL,
  `student` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `student`) VALUES
(263, 'rerer', 'Chris_Johnson'),
(264, 'efefjefefef9rj4jr4', 'Chris_johnson'),
(304, 'Hello', 'jbarton2'),
(306, 'Tuesday 2pm  - 3pm', 'Jon_Barton'),
(307, 'wdd', 'micky'),
(308, '', 'micky');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `University` varchar(25) NOT NULL,
  `dsaTutor` varchar(25) NOT NULL,
  `Study` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `Username`, `Password`, `University`, `dsaTutor`, `Study`) VALUES
(22, '', '', 'HelloDearSir', '0185033fe00bfef0e83c10ab1dc48538ece21fe416ac0c789842e522e7cc9b3b51676813cbfed7edcdaa9c0ab89c956b6ec4e6ce2aa4c7d30178f674c983e965', '', '', ''),
(26, '', '', 'Jon_Barton', '4fbac22d521f9e7ec17ddedd034e9ba80514338a096ada38845de2500fddab89b99240d6ffd90c129ec845df8490ac929673710637b917c5517a7cc3c0029524', '', '', ''),
(36, '', '', 'Jon_Barton', 'WZal)90!!', '', '', ''),
(37, '', '', 'Micky_Row', 'QPckVp09', '', '', ''),
(38, '', '', 'David_James ', 'Password1', '', '', ''),
(39, '', '', 'Jon_Barton', 'cbe0cd68cbca3868250c0ba545c48032f43eb0e8a5e6bab603d109251486f77a91e46a3146d887e37416c6bdb6cbe701bd514de778573c9b0068483c1c626aec', '', '', ''),
(40, '', '', 'root', '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8', '', '', ''),
(41, '', '', 'Josh_moir', '41bebd7854ff2221b3d924ed8cf08464d084bd2c4dc11d3f4bf680b6d1952b96767b9b805e2af8015be0d62c1b5eace4785d883b987528cc78e27f26b32a31ef', '', '', ''),
(42, '', '', 'Jaz_mats', '0185033fe00bfef0e83c10ab1dc48538ece21fe416ac0c789842e522e7cc9b3b51676813cbfed7edcdaa9c0ab89c956b6ec4e6ce2aa4c7d30178f674c983e965', '', '', ''),
(43, '', '', 'Jeff_daneils', '102b368b0fc2058b658e7a858eaff406c609a4db7cc45125578c4639e80b4f9363045caed04e769a859a2bf8295599d0bc9b3f41d257d228e62d80245b1feaa2', '', '', ''),
(44, '', '', 'Jake_deery', '102b368b0fc2058b658e7a858eaff406c609a4db7cc45125578c4639e80b4f9363045caed04e769a859a2bf8295599d0bc9b3f41d257d228e62d80245b1feaa2', '', '', ''),
(45, '', '', 'Jaz_mix', '0185033fe00bfef0e83c10ab1dc48538ece21fe416ac0c789842e522e7cc9b3b51676813cbfed7edcdaa9c0ab89c956b6ec4e6ce2aa4c7d30178f674c983e965', '', '', ''),
(46, '', '', 'David_lord', '0185033fe00bfef0e83c10ab1dc48538ece21fe416ac0c789842e522e7cc9b3b51676813cbfed7edcdaa9c0ab89c956b6ec4e6ce2aa4c7d30178f674c983e965', '', '', ''),
(47, '', '', 'staffie_max', '102b368b0fc2058b658e7a858eaff406c609a4db7cc45125578c4639e80b4f9363045caed04e769a859a2bf8295599d0bc9b3f41d257d228e62d80245b1feaa2', '', '', ''),
(48, '', '', 'Jix_matt', '0185033fe00bfef0e83c10ab1dc48538ece21fe416ac0c789842e522e7cc9b3b51676813cbfed7edcdaa9c0ab89c956b6ec4e6ce2aa4c7d30178f674c983e965', '', '', ''),
(49, '', '', 'Chris_johnson', '41bebd7854ff2221b3d924ed8cf08464d084bd2c4dc11d3f4bf680b6d1952b96767b9b805e2af8015be0d62c1b5eace4785d883b987528cc78e27f26b32a31ef', '', '', ''),
(50, '', '', 'Jon_Barton', '7061d909301a9285451a8084afbe4d43e1e1552bd759b7e5b0d81696f511f19224443dcaf106cc9588a04bea4207feaa4f44c7b84dd2ca838e6d415fae89cd88', '', '', ''),
(51, '', '', 'Jonnymad1245', '91583dac4a1574f0fba6a71decb149101b9ed67402b84f1bcfbf529a742948e4381960ec00715b6b7c6aa721b811a703fc8b13ebc3d3f90641e00848ef06e080', 'Plymouth Uni', 'micky', ''),
(52, '', '', 'Jon_Barton', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86', 'Plymouth Uni', 'Micky', ''),
(53, '', '', 'Jon_Barton', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86', 'Plymouth Uni', 'Micky', ''),
(54, '', '', 'Jeff', 'e6c83b282aeb2e022844595721cc00bbda47cb24537c1779f9bb84f04039e1676e6ba8573e588da1052510e3aa0a32a9e55879ae22b0c2d62136fc0a3e85f8bb', 'Exeter ', 'nonce', ''),
(55, '', '', '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', '', '', ''),
(56, '', '', 'Jeff', 'e6c83b282aeb2e022844595721cc00bbda47cb24537c1779f9bb84f04039e1676e6ba8573e588da1052510e3aa0a32a9e55879ae22b0c2d62136fc0a3e85f8bb', 'University of Plymouth', 'Micky', 'Computing'),
(57, '', '', 'Jon_Barton97', 'e93238bfa3b394a3a4b6267cf0a1e8ef769e45292e55b03954f66237b545b6ab2826f8e2140420a6e9f90b8fbc28b6680165da8ac01d404e22f0b71d0f411257', 'University of Plymouth', 'Micky', 'Computing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
