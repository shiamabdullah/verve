-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 09:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 1,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `imgsrc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`, `usertype`, `gender`, `email`, `dob`, `address`, `imgsrc`) VALUES
('abcuser', 'abc', 'abc', 1, 'Male', 'abc@gmail.com', '2021-04-13', 'sss', '../Assets/AdminPhotos/abc_ddd.jpg'),
('abcd', 'abcd', 'abcdabcd', 1, 'Male', 'abcd@com.com', '2021-04-07', 'ssss', NULL),
('abcdabcd', 'abcdacb', 'abcdacbd', 1, 'Male', 'abcd@gmail.com', '2021-04-07', 'ssssss', NULL),
('shiam', 'abcde', 'abcdabcd', 1, 'Male', 'abcde@gmail.com', '2021-04-13', 'mmmm', NULL),
('Abdullah', 'Abdullah', 'Abdullah ', 0, 'Male', 'shdullah1@gmail.com', '2021-04-14', 'East Adalat Para, 197, Block 3\r\nGreen Road', NULL),
('Maamun', 'abdullah.sh', 'Abdullah Abdullah ', 0, 'Male', 'bdullah1@gmail.com', '2021-04-10', 'East Adalat Para, 197, Block 3\r\nGreen Road', NULL),
('dddd', 'dddd', 'dddddddd', 1, 'Female', 'dd@gmail.com', '2021-04-16', 'dddd', NULL),
('pApA', 'pApA', 'stat_codestat_code', 1, '', 'stat_code@gmail.com', '2021-04-17', 'pApA', NULL),
('shiam', 'shiam1', 'shiam1234', 0, 'Male', 'shiam@gmail.com', '2021-04-21', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssss', NULL),
('shiam1234', 'shiam1234', 'shiam1234', 1, 'Male', 'shiamabh1@gmail.com', '2021-04-21', 'sss', NULL),
('shiam1234', 'shiam12342', 'shiam1234', 1, 'Male', 'shiamabh12@gmail.com', '2021-04-21', 'sss', NULL),
('signupAdmin', 'signupAdmin', 'signupAdmin', 1, 'Male', 'signupAdmin@ss.com', '2021-04-07', 'signupAdminsignupAdmin', NULL),
('signupAdminsignupAdmin', 'signupAdminsignupAdmin', 'signupAdmin', 1, 'Male', 'signupAdmin@gmai.com', '2021-03-31', 'signupAdmin', NULL),
('statcode', 'statcodestatode', 'stat_codestat_code', 1, 'Male', 'st@gmail.com', '2021-04-13', 'stat_codestat_code', NULL),
('stat', 'statstatstat', 'statstat', 1, 'Male', 'stat@gmail.com', '2021-04-22', 'stat', NULL),
('xyas', 'xhx', 'signupAdmin', 0, 'Male', 'shiamllah1@gmail.com', '2021-04-15', 'East Adalat Para, 197, Block', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `designation`, `email`, `salary`) VALUES
(6, 'Dniren', 'bQdD4c8as', 'Assistant Manager', 'darnoldi5@msu.edu', 1738),
(7, 'Jodee', 'JkLDwBKmOj', 'Professor', 'jdurtnel6@ifeng.com', 625),
(8, 'Edie', 'hUCk9M4', 'Research Assistant III', 'evamplers7@t.co', 2530),
(9, 'Garrek', 'Zgo8RGQ', 'Staff Accountant II', 'gperche8@wikia.com', 720),
(10, 'Brinna', 'THLTRVEEB', 'Teacher', 'bhamshaw9@flickr.com', 1441),
(11, 'shiam', '12', 'service', 's@gmail.com', 5000),
(12, 'Angie', '4ITgIG09', 'Senior Financial Analyst', 'apodmoreb@nydailynews.com', 2302),
(13, 'Alleyn', 'WkjL4P5hhEU', 'Nurse Practicioner', 'adalziellc@columbia.edu', 1239),
(14, 'Danni', 'CYvFM7gQh0E', 'Senior Quality Engineer', 'dmenhcid@ebay.co.uk', 1734),
(15, 'Mufi', 'z8lUGpP', 'Senior Quality Engineer', 'mbothae@businessweek.com', 1884),
(16, 'anik', 'dum', 'delivery', 's@google.com', 3000),
(17, 'anik2', 'dum', 'accounts', 'dums@google.com', 25000),
(18, 'shiam2', 'dummy', 'delivery', 'dummy', 2500),
(19, 'dummy2', 'dummy', 'delivery', 'dummy', 3800),
(20, 'Wilone', '7qLxypae', 'Nurse Practicioner', 'wleelej@behance.net', 1325),
(21, 'Agosto', 'FaDkBqNb', 'Developer I', 'akeransk@pinterest.com', 2100),
(22, 'shahil', '12', 'accounts', 'd@yahoo.com', 67000),
(23, 'Marita', 'xD2UHg', 'Social Worker', 'mspatarom@zdnet.com', 908),
(24, 'Johan', '6klOorQsM', 'Paralegal', 'jjurasekn@booking.com', 1115),
(25, 'Jeffie', 'eJB3Q8vW', 'Human Resources Assistant III', 'jthomazino@senate.gov', 1178),
(26, 'Mordecai', '0CuyZVYpp1', 'Nurse', 'mguerreirop@edublogs.org', 759),
(27, 'Laney', 'w2nga6VmHuv', 'Assistant Manager', 'lblaydonq@eepurl.com', 1192),
(28, 'Zolly', 'H5pNwVMa', 'Recruiting Manager', 'zawinr@boston.com', 1942),
(29, 'Danita', 'TiU7kjdd', 'Geologist III', 'dcovendons@dion.ne.jp', 989),
(30, 'Hilton', 'rnNzaynSCx', 'Legal Assistant', 'hterzzat@gizmodo.com', 2346),
(31, 'Wynnie', 'DYTTvhy0gjno', 'Software Consultant', 'wjansenu@twitter.com', 1306),
(32, 'Timothee', 'WU0HZ2tI', 'Staff Scientist', 'tturnv@utexas.edu', 807),
(33, 'shoisob', '12', 'service', 's@google.com', 0),
(34, 'Becky', '4VqQ8NOPgcO3', 'Accounting Assistant I', 'bcaddensx@amazon.de', 1582),
(35, 'Kane', '18NEnE', 'Operator', 'kglasspooly@cbsnews.com', 1564),
(36, 'Alister', 'q264XJ', 'Librarian', 'aandrysekz@indiegogo.com', 1532),
(37, 'Corbett', 'm0yzHrsJqJ9', 'Registered Nurse', 'ccadreman10@tiny.cc', 2104),
(38, 'Cthrine', 'F1fy8q', 'Cost Accountant', 'ccarradice11@weebly.com', 1937),
(39, 'Maxim', 'Cdu8yysV', 'Software Test Engineer II', 'mcaldero12@qq.com', 671),
(40, 'Bev', 'EMJzj2EY', 'Analog Circuit Design manager', 'bhallgough13@diigo.com', 2928),
(41, 'Putnem', '693n7yjtGDE', 'Legal Assistant', 'pmerkel14@utexas.edu', 1903),
(42, 'Terencio', '37yaNak', 'General Manager', 'tcosser15@ibm.com', 2359),
(43, 'Katya', 'oPaegN', 'Computer Systems Analyst I', 'khoyes16@europa.eu', 2612),
(44, 'Aube', 'pP07auA', 'Graphic Designer', 'alamberton17@goodreads.com', 2918),
(45, 'Susanna', 'UFbRME6Hl', 'Senior Editor', 'syashaev18@oaic.gov.au', 2220),
(46, 'Jana', '1wJP4XroW', 'VP Quality Control', 'jgolston19@godaddy.com', 992),
(47, 'Dominic', 'bO96mu', 'Internal Auditor', 'dkubat1a@fastcompany.com', 2264),
(48, 'Ximenes', 'rC0LBeImLoQp', 'Help Desk Operator', 'xabbay1b@google.cn', 1942),
(49, 'Hailee', 'vRON2MkXcxt', 'Safety Technician IV', 'helks1c@slideshare.net', 1336),
(50, 'Ruddie', 'QGgmpQC', 'Nuclear Power Engineer', 'rtarry1d@reuters.com', 2289),
(51, 'Carlotta', 'NtevCRU7B9x', 'Clinical Specialist', 'cakehurst1e@naver.com', 1405),
(52, 'Libbi', 'sOpL5NCF', 'Mechanical Systems Engineer', 'lpicton1f@symantec.com', 977),
(53, 'Clarine', 'jCGTXe1LV', 'Product Engineer', 'clewing1g@adobe.com', 794),
(54, 'Sutherland', 'PBzlaHrKYz2f', 'Financial Analyst', 'swoodroffe1h@arizona.edu', 2404),
(55, 'Kliment', 'GJlriPK', 'Engineer III', 'klillie1i@europa.eu', 2659),
(56, 'Quinlan', 'gpR70FC', 'Assistant Manager', 'qdearlove1j@who.int', 1808),
(57, 'Franz', 'n207R80vx3p', 'Systems Administrator I', 'fricardet1k@youku.com', 1622),
(58, 'Wynn', 'HTOyZEXNHOF', 'Automation Specialist II', 'wduberry1l@cyberchimps.com', 2215),
(59, 'Humfried', 'TEBdpO9s15E', 'Design Engineer', 'hskatcher1m@mozilla.org', 1419),
(60, 'Terrance', 'ORnJzs36M', 'VP Sales', 'tlamberton1n@utexas.edu', 1697),
(61, 'Kevina', 'm1EKPLfMunl', 'Senior Editor', 'kputtock1o@ft.com', 807),
(62, 'Terry', 'xgE91mbfxm', 'Account Representative II', 'tmilner1p@shareasale.com', 1071),
(63, 'Roobbie', 'YmrKJIc', 'Developer III', 'rzanolli1q@google.pl', 2698),
(64, 'Shanie', 'RJ6Eerx', 'Database Administrator IV', 'sstracey1r@domainmarket.com', 648),
(65, 'Loreen', 'ShEIasz18mG', 'Project Manager', 'lbuckenhill1s@mac.com', 1490),
(66, 'Jasmin', 'sgP8XN', 'Automation Specialist IV', 'jfranses1t@europa.eu', 505),
(67, 'Gardy', '9SdRGp2u8', 'Paralegal', 'grousel1u@shutterfly.com', 2401),
(68, 'Bart', 'YN1eX0WQ4', 'Software Engineer II', 'bbruckstein1v@hc360.com', 901),
(69, 'Blake', '4goBBGRxN9p', 'Assistant Professor', 'bcumpsty1w@webeden.co.uk', 2091),
(70, 'Nate', 'SIlY734DR', 'Web Developer III', 'nferry1x@uiuc.edu', 2211),
(71, 'Alene', 'DaA5ztUHeayz', 'VP Product Management', 'awardingly1y@studiopress.com', 2161),
(72, 'Marney', 'lbTV1H', 'Librarian', 'mbulluck1z@ycombinator.com', 699),
(73, 'Cornie', 'xrrykRi', 'Research Nurse', 'cmayne20@etsy.com', 2997),
(74, 'Inesita', 'qakoph', 'Design Engineer', 'iabdon21@digg.com', 2116),
(75, 'Genovera', '0LZNWjg5o', 'Nurse Practicioner', 'gmaccaffery22@squidoo.com', 1035),
(76, 'Giorgi', 'Qgbyhv4', 'Executive Secretary', 'gfarryn23@auda.org.au', 2185),
(77, 'Geoffry', 'P2syRPln', 'Registered Nurse', 'gsprigin24@nps.gov', 2027),
(78, 'Morgan', 'CRaHc8C0', 'Chief Design Engineer', 'mblackborn25@about.me', 2556),
(79, 'Gavan', 'QnsCfK', 'Senior Developer', 'glawn26@rakuten.co.jp', 2382),
(80, 'Riordan', 'ldp69Js5', 'Paralegal', 'rautin27@free.fr', 1748),
(81, 'Frederick', 'pvLY1T', 'Engineer IV', 'fmainwaring28@myspace.com', 1359),
(82, 'Temp', 'rEFzHM1', 'Programmer IV', 'tvernazza29@alibaba.com', 632),
(83, 'Kevon', 'DgMaGig', 'Database Administrator IV', 'kebertz2a@drupal.org', 1495),
(84, 'Rolfe', 'SDuFKNRNqB9F', 'Senior Sales Associate', 'rwantling2b@weather.com', 2313),
(85, 'Trudie', 'rch6p7Z', 'Executive Secretary', 'tconnichie2c@ebay.com', 1179),
(86, 'Rubin', 'yhAJHVwhlX7d', 'Biostatistician I', 'rlutton2d@huffingtonpost.com', 1389),
(87, 'Kate', 'DIzWJJ0Mg4Q', 'Database Administrator II', 'knoice2e@liveinternet.ru', 2333),
(88, 'Welch', 'uRe78pQazl', 'Chief Design Engineer', 'wspilisy2f@issuu.com', 1267),
(89, 'Garnet', '8owc2w2c', 'Recruiting Manager', 'gswarbrigg2g@g.co', 2273),
(90, 'Abel', 'prHBqo3XU', 'Social Worker', 'apietruszka2h@nyu.edu', 1431),
(91, 'Willamina', '8Yy0jAtGmWhX', 'Computer Systems Analyst IV', 'wclaiton2i@printfriendly.com', 1049),
(92, 'Reuben', 'k7JwUevoWti', 'Financial Analyst', 'rwichard2j@biblegateway.com', 1491),
(93, 'Mellisent', 'xdoOoT0tDs', 'Executive Secretary', 'morourke2k@go.com', 2997),
(94, 'Candra', 'OZspRB', 'Food Chemist', 'cbosche2l@webs.com', 1321),
(95, 'Britteny', '0YrVU1Nt', 'Business Systems Development Analyst', 'bhaverty2m@etsy.com', 2163),
(96, 'Sylvan', 'T9C9vbYLKtrI', 'Editor', 'scuddy2n@ucla.edu', 2680);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `productName` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subCategory` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `buyingPrice` float NOT NULL,
  `sellingPrice` float NOT NULL,
  `stock` int(11) NOT NULL,
  `displayable` tinyint(4) DEFAULT 0,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `deliveryStatus` tinyint(4) DEFAULT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `productName`, `category`, `subCategory`, `description`, `buyingPrice`, `sellingPrice`, `stock`, `displayable`, `photo1`, `photo2`, `photo3`, `deliveryStatus`, `discount`) VALUES
(1, 'Skirt4343', 'Woman', 'Clothing', 'sss', 5003, 4003, 502, 1, '../Assets/ProductPhotos/Skirt4343_rome-wilkerson-NGJeZt-0F4U-unsplash.jpg', '../Assets/ProductPhotos/Skirt43432_joseph-kellner-fFjfDHCorDY-unsplash.jpg', '../Assets/ProductPhotos/Skirt43433_ali-pazani-NufctI2NGJQ-unsplash.jpg', NULL, 23),
(2, 'shirtcotto', 'Men', 'Clothing', 'shirt cton', 500, 800, 30, 1, '../Assets/ProductPhotos/shirtcotton_logan-weaver-q77hZX8eMtY-unsplash.jpg', '../Assets/ProductPhotos/shirtcotton2_allgo-an-app-for-plus-size-people-Ld9fQtZl_pc-unsplash.jpg', '../Assets/ProductPhotos/shirtcotton3_nathan-van-de-graaf-K33_mCu8qek-unsplash.jpg', NULL, 0),
(3, 'Shitcotton', 'Men', 'Clothing', 'loremempsdfksdd', 500, 800, 100, 1, '../Assets/ProductPhotos/Shitcotton2_dinesh-kumar-8qys-mGSOko-unsplash.jpg', '../Assets/ProductPhotos/Shitcotton22_oriol-hausmann-fbwPvGN6U1Y-unsplash.jpg', '../Assets/ProductPhotos/Shitcotton23_long-truong-NSfjmz11k7k-unsplash.jpg', NULL, 0),
(5, 'suitmen', 'Men', 'Clothing', 'loremempsdfksdd', 6000, 7000, 30, 1, '../Assets/ProductPhotos/suitmen_ben-rosett-WdJkXFQ4VHY-unsplash.jpg', '../Assets/ProductPhotos/suitmen2_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/suitmen3_hunters-race-MYbhN8KaaEc-unsplash.jpg', NULL, 0),
(65, 'Shirt', 'Men', 'Clothing', 'fsgjgffd', 300, 600, 20, 1, '../Assets/ProductPhotos/Shirt_hannah-morgan-ycVFts5Ma4s-unsplash.jpg', '../Assets/ProductPhotos/Shirt2_pexels-asiama-junior-6568253.jpg', '../Assets/ProductPhotos/Shirt3_pexels-kenneth-carpina-2205839.jpg', NULL, 0),
(70, 'Lorem', 'Kids', 'Shoes', 'Lorem ipsum sit amet, tempor ', 300, 600, 20, 1, '../Assets/ProductPhotos/Lorem_rome-wilkerson-NGJeZt-0F4U-unsplash (1).jpg', '../Assets/ProductPhotos/Lorem2_mnz-ToLMORRb97Q-unsplash.jpg', '../Assets/ProductPhotos/Lorem3_pexels-rahul-shah-1043148.jpg', NULL, 0),
(71, 'Lorem2', 'Kids', 'Shoes', 'Lorem ipsum sit amet, tempor ', 300, 600, 20, 1, '../Assets/ProductPhotos/Lorem_noah-black-Hng0RpHDgHI-unsplash.jpg', '../Assets/ProductPhotos/Lorem2_pexels-rahul-shah-1043148.jpg', '../Assets/ProductPhotos/Lorem3_noah-black-Hng0RpHDgHI-unsplash.jpg', NULL, 0),
(72, 'Lorem1', 'Men', 'Shoes', 'loremempsdfksdd', 300, 600, 20, 1, '../Assets/ProductPhotos/Lorem_mnz-ToLMORRb97Q-unsplash.jpg', '../Assets/ProductPhotos/Lorem2_felipe-vieira-sw80_07Rm-E-unsplash.jpg', '../Assets/ProductPhotos/Lorem3_mathilde-langevin-8nPbfQLMg1A-unsplash (1).jpg', NULL, 0),
(73, 'Lorem2', 'Men', 'Shoes', '', 300, 600, 20, 1, '../Assets/ProductPhotos/Lorem_mnz-ToLMORRb97Q-unsplash.jpg', '../Assets/ProductPhotos/Lorem2_felipe-vieira-sw80_07Rm-E-unsplash.jpg', '../Assets/ProductPhotos/Lorem3_mathilde-langevin-8nPbfQLMg1A-unsplash (1).jpg', NULL, 0),
(74, 'Lorem3', 'Men', 'Shoes', 'loremempsdfksdd', 300, 600, 20, 1, '../Assets/ProductPhotos/Lorem_mnz-ToLMORRb97Q-unsplash.jpg', '../Assets/ProductPhotos/Lorem2_felipe-vieira-sw80_07Rm-E-unsplash.jpg', '../Assets/ProductPhotos/Lorem3_mathilde-langevin-8nPbfQLMg1A-unsplash (1).jpg', NULL, 0),
(75, 'Lorem4', 'Men', 'Shoes', 'loremempsdfksdd', 300, 600, 20, 1, '../Assets/ProductPhotos/Lorem_mnz-ToLMORRb97Q-unsplash.jpg', '../Assets/ProductPhotos/Lorem2_felipe-vieira-sw80_07Rm-E-unsplash.jpg', '../Assets/ProductPhotos/Lorem3_mathilde-langevin-8nPbfQLMg1A-unsplash (1).jpg', NULL, 0),
(76, 'Lorem5', 'Men', 'Shoes', 'loremempsdfksdd', 300, 600, 20, 1, '../Assets/ProductPhotos/Lorem_mnz-ToLMORRb97Q-unsplash.jpg', '../Assets/ProductPhotos/Lorem2_felipe-vieira-sw80_07Rm-E-unsplash.jpg', '../Assets/ProductPhotos/Lorem3_mathilde-langevin-8nPbfQLMg1A-unsplash (1).jpg', NULL, 0),
(82, 'tshirt', 'Men', 'Clothing', 'ttt', 500, 900, 400, 1, '../Assets/ProductPhotos/tshirt_jimmy-jimenez-hGxReQwL5jE-unsplash.jpg', '../Assets/ProductPhotos/tshirt2_pexels-salah-amrani-1232459.jpg', '../Assets/ProductPhotos/tshirt3_felipe-vieira-sw80_07Rm-E-unsplash.jpg', NULL, 0),
(83, 'tshirt', 'Men', 'Clothing', 'ttt', 500, 900, 400, 1, '../Assets/ProductPhotos/tshirt_jimmy-jimenez-hGxReQwL5jE-unsplash.jpg', '../Assets/ProductPhotos/tshirt2_pexels-salah-amrani-1232459.jpg', '../Assets/ProductPhotos/tshirt3_felipe-vieira-sw80_07Rm-E-unsplash.jpg', NULL, 0),
(84, 'ssde', 'Men', 'Clothing', 'sssss', 222, 22, 222, 1, '../Assets/ProductPhotos/ssde_daoud-abismail-CFpYfk4H_Hw-unsplash.jpg', '../Assets/ProductPhotos/ssde2_pepi-stojanovski-EF7BVa9BB2M-unsplash.jpg', '../Assets/ProductPhotos/ssde3_pexels-liza-summer-6347967.jpg', NULL, 0),
(85, 'ssde', 'Men', 'Clothing', 'sssss', 222, 22, 222, 1, '../Assets/ProductPhotos/ssde_daoud-abismail-CFpYfk4H_Hw-unsplash.jpg', '../Assets/ProductPhotos/ssde2_pepi-stojanovski-EF7BVa9BB2M-unsplash.jpg', '../Assets/ProductPhotos/ssde3_pexels-liza-summer-6347967.jpg', NULL, 0),
(86, 'ssde', 'Men', 'Clothing', 'sssss', 222, 22, 222, 1, '../Assets/ProductPhotos/ssde_daoud-abismail-CFpYfk4H_Hw-unsplash.jpg', '../Assets/ProductPhotos/ssde2_pepi-stojanovski-EF7BVa9BB2M-unsplash.jpg', '../Assets/ProductPhotos/ssde3_pexels-liza-summer-6347967.jpg', NULL, 0),
(87, 'ssde', 'Men', 'Clothing', 'sssss', 222, 22, 222, 1, '../Assets/ProductPhotos/ssde_daoud-abismail-CFpYfk4H_Hw-unsplash.jpg', '../Assets/ProductPhotos/ssde2_pepi-stojanovski-EF7BVa9BB2M-unsplash.jpg', '../Assets/ProductPhotos/ssde3_pexels-liza-summer-6347967.jpg', NULL, 0),
(88, 'ssde', 'Men', 'Clothing', 'sssss', 222, 22, 222, 1, '../Assets/ProductPhotos/ssde_daoud-abismail-CFpYfk4H_Hw-unsplash.jpg', '../Assets/ProductPhotos/ssde2_pepi-stojanovski-EF7BVa9BB2M-unsplash.jpg', '../Assets/ProductPhotos/ssde3_pexels-liza-summer-6347967.jpg', NULL, 0),
(89, 'ssde', 'Men', 'Clothing', 'sssss', 222, 22, 222, 1, '../Assets/ProductPhotos/ssde_daoud-abismail-CFpYfk4H_Hw-unsplash.jpg', '../Assets/ProductPhotos/ssde2_pepi-stojanovski-EF7BVa9BB2M-unsplash.jpg', '../Assets/ProductPhotos/ssde3_pexels-liza-summer-6347967.jpg', NULL, 0),
(90, 'ssde', 'Men', 'Clothing', 'sssss', 222, 22, 222, 1, '../Assets/ProductPhotos/ssde_daoud-abismail-CFpYfk4H_Hw-unsplash.jpg', '../Assets/ProductPhotos/ssde2_pepi-stojanovski-EF7BVa9BB2M-unsplash.jpg', '../Assets/ProductPhotos/ssde3_pexels-liza-summer-6347967.jpg', NULL, 0),
(91, 'ss', 'Men', 'Clothing', 'sss', 22, 22, 22, 1, '../Assets/ProductPhotos/ss_ben-rosett-WdJkXFQ4VHY-unsplash.jpg', '../Assets/ProductPhotos/ss2_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss3_logan-weaver-q77hZX8eMtY-unsplash.jpg', NULL, 0),
(92, 'ss', 'Men', 'Clothing', 'sss', 22, 22, 22, 1, '../Assets/ProductPhotos/ss_ben-rosett-WdJkXFQ4VHY-unsplash.jpg', '../Assets/ProductPhotos/ss2_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss3_logan-weaver-q77hZX8eMtY-unsplash.jpg', NULL, 0),
(93, 'sad', 'Men', 'Clothing', 'sad', 600, 500, 500, 0, '../Assets/ProductPhotos/sad_hunters-race-MYbhN8KaaEc-unsplash.jpg', '../Assets/ProductPhotos/sad2_tunnel-2033983_1920.jpg', '../Assets/ProductPhotos/sad3_ben-rosett-WdJkXFQ4VHY-unsplash.jpg', NULL, 0),
(94, 'sad', 'Men', 'Clothing', 'sad', 600, 500, 500, 0, '../Assets/ProductPhotos/sad_hunters-race-MYbhN8KaaEc-unsplash.jpg', '../Assets/ProductPhotos/sad2_tunnel-2033983_1920.jpg', '../Assets/ProductPhotos/sad3_ben-rosett-WdJkXFQ4VHY-unsplash.jpg', NULL, 0),
(95, 'ss', 'Men', 'Clothing', 'ss', 0, 0, 0, 1, '../Assets/ProductPhotos/ss_Pure Lust.jpg', '../Assets/ProductPhotos/ss2_Pure Lust.jpg', '../Assets/ProductPhotos/ss3_Pure Lust.jpg', NULL, 0),
(96, 'ss22s', 'Men', 'Clothing', 'ss', 22, 22, 22, 1, '../Assets/ProductPhotos/ss22s_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss22s2_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss22s3_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', NULL, 0),
(97, 'ss22s', 'Men', 'Clothing', 'ss', 22, 22, 22, 1, '../Assets/ProductPhotos/ss22s_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss22s2_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss22s3_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', NULL, 0),
(98, 'ss', 'Men', 'Clothing', 'ss22', 22, 22, 22, 1, '../Assets/ProductPhotos/ss_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss2_oriol-hausmann-fbwPvGN6U1Y-unsplash.jpg', '../Assets/ProductPhotos/ss3_logan-weaver-q77hZX8eMtY-unsplash.jpg', NULL, 0),
(99, 'ss', 'Men', 'Clothing', 'ss22', 22, 22, 22, 1, '../Assets/ProductPhotos/ss_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss2_oriol-hausmann-fbwPvGN6U1Y-unsplash.jpg', '../Assets/ProductPhotos/ss3_logan-weaver-q77hZX8eMtY-unsplash.jpg', NULL, 0),
(100, 'ss', 'Men', 'Clothing', 'ss22', 22, 22, 22, 1, '../Assets/ProductPhotos/ss_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss2_oriol-hausmann-fbwPvGN6U1Y-unsplash.jpg', '../Assets/ProductPhotos/ss3_logan-weaver-q77hZX8eMtY-unsplash.jpg', NULL, 0),
(101, 'ss', 'Men', 'Clothing', 'ss', 22, 22, 22, 1, '../Assets/ProductPhotos/ss_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss2_ruthson-zimmerman-Ws4wd-vJ9M0-unsplash.jpg', '../Assets/ProductPhotos/ss3_oriol-hausmann-fbwPvGN6U1Y-unsplash.jpg', NULL, 0),
(102, 'watch', 'Woman', 'Accessories', 'watch', 400, 700, 400, 1, '../Assets/ProductPhotos/watch_a.png', '../Assets/ProductPhotos/watch2_banglafire.jpg', '../Assets/ProductPhotos/watch3_2213426.jpg', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `gender`, `dob`) VALUES
(2, 'userdummy', 'rSmVX4V', 'rnormadell@ibm.com', 'Non-binary', '7/17/1993'),
(3, 'Lance', 'UmImOzSPld', 'llistone2@loc.gov', 'Genderqueer', '11/12/2008'),
(4, 'Sadie', '4XYyHZidRA', 'sgawthrop3@cnbc.com', 'Genderfluid', '8/19/1956'),
(5, 'Bran', '8k8Pd0ix', 'bfolcarelli4@acquirethisname.com', 'Female', '4/20/2008'),
(6, 'Hali', 'YxWeyqmhodq', 'hcadamy5@samsung.com', 'Agender', '5/13/1989'),
(7, 'Tine', 'o1QgThP6ZI5u', 'tdunning6@cisco.com', 'Non-binary', '10/30/1955'),
(8, 'Elfrieda', 'ASlhH1rB', 'ekelle7@mac.com', 'Bigender', '8/13/1992'),
(10, 'Louie', 'opaohPTm49Qf', 'lellesworth9@shinystat.com', 'Genderfluid', '10/4/2005'),
(11, 'Rorie', '0MBG2h9u', 'rfauguela@soundcloud.com', 'Genderfluid', '1/17/1990'),
(12, 'Stanly', 'dr6Nw4ZW', 'srudkinb@mit.edu', 'Genderfluid', '12/22/1970'),
(13, 'Eddie', 'f2aXmGnSC', 'eohenehanc@sciencedirect.com', 'Bigender', '10/2/1966'),
(14, 'Torey', 'rtjaG1', 'tbouskilld@loc.gov', 'Female', '4/2/1988'),
(15, 'Heida', 'nnHg9YvBP2JR', 'hjoddense@hp.com', 'Genderqueer', '1/31/2008'),
(16, 'Riannon', 'i3aMI5CMUtrh', 'rfairsf@umn.edu', 'Non-binary', '2/17/1967'),
(17, 'Felisha', 'pA94cJQM', 'fotsong@cdbaby.com', 'Genderqueer', '5/30/1982'),
(18, 'Kin', 'HkYYUXUJvRil', 'kelphinstonh@whitehouse.gov', 'Male', '10/19/1992'),
(19, 'Delia', 'Jdtwwdg0CV68', 'dglydei@slate.com', 'Non-binary', '6/6/2007'),
(20, 'Melli', 'IIRWj6KlS', 'mrubinlichtj@dailymail.co.uk', 'Genderqueer', '2/16/1967'),
(21, 'Christal', '9wKbxyvEPcGb', 'chugonneauk@altervista.org', 'Agender', '5/26/1987'),
(22, 'Gard', 'r9YM55u2wa', 'gharkl@cbsnews.com', 'Non-binary', '2/6/2001'),
(23, 'Cyndy', 'aXhQ7HKz6', 'ccolledgem@wix.com', 'Agender', '10/20/1972'),
(24, 'Corby', 'aGsr61Ww', 'cblenkinn@comcast.net', 'Non-binary', '8/19/1971'),
(25, 'Preston', 'YrDXHE', 'pannetto@yahoo.co.jp', 'Non-binary', '9/24/1996'),
(26, 'Boyd', 'tnjHyZ2hHg7J', 'bbroomep@indiegogo.com', 'Bigender', '10/5/2004'),
(27, 'Daisi', '1rkTSEInRaTT', 'dnutleyq@usa.gov', 'Genderfluid', '10/7/1983'),
(28, 'Rodie', '5QwWGvNis3Z', 'rkilfetherr@delicious.com', 'Polygender', '5/19/1957'),
(29, 'Carce', 'D9IIwDIx', 'cvauns@vkontakte.ru', 'Non-binary', '5/26/1983'),
(30, 'Stacy', '0jnNqpnftRi', 'sgozneyt@examiner.com', 'Polygender', '9/12/1992'),
(31, 'Valentine', 'p9RA8rgpyF', 'vsimionatou@house.gov', 'Non-binary', '7/21/1990'),
(32, 'Mariellen', 'MMLTqEPsxEZ', 'mcusickv@zdnet.com', 'Bigender', '7/18/1985'),
(33, 'Carissa', 'n4qOKcc7', 'crabbagew@issuu.com', 'Non-binary', '6/10/1987'),
(34, 'Wittie', 'QCZuSlFsu', 'wblackleyx@xing.com', 'Male', '11/17/2011'),
(35, 'Lyndy', 'AhKLhGwko', 'lboddingtony@usda.gov', 'Genderfluid', '6/13/2017'),
(36, 'Ado', 'r8KswZ', 'agaffneyz@gizmodo.com', 'Genderqueer', '5/2/1969'),
(37, 'Sherrie', 'xAYbJ5I2B7', 'sbriggs10@webmd.com', 'Polygender', '11/26/2009'),
(38, 'Nil', 'HII5jr', 'nwoodyatt11@disqus.com', 'Genderqueer', '5/15/2011'),
(39, 'Rafferty', '0EBnlhG', 'ready12@storify.com', 'Genderfluid', '3/20/2001'),
(40, 'Fanechka', '1KWAzF4', 'fkempstone13@phoca.cz', 'Female', '4/11/1985'),
(41, 'Nicholas', '4dyMXp', 'nrichford14@blogspot.com', 'Agender', '8/2/1966'),
(42, 'Nikita', 'jjuvF8Y2xLz', 'ngrey15@uol.com.br', 'Genderfluid', '10/11/1984'),
(43, 'Haze', '904LsTwct', 'hlambden16@domainmarket.com', 'Polygender', '9/17/1950'),
(44, 'Emmy', 'RnO6QQP12c', 'ehubber17@cam.ac.uk', 'Bigender', '12/25/1999'),
(45, 'Nicolis', '25PfWQthl', 'nspatarul18@scientificamerican.com', 'Genderfluid', '2/4/2000'),
(46, 'Amberly', 'uHEirIwfkHJ', 'amaw19@craigslist.org', 'Male', '1/8/1959'),
(47, 'Corrinne', 'xtzgF2', 'cscudders1a@fotki.com', 'Male', '10/25/1957'),
(48, 'Chico', 'Z7Y6iNj', 'cetherton1b@ustream.tv', 'Bigender', '2/1/1972'),
(49, 'Sherline', 'dJlE4I', 'slowder1c@narod.ru', 'Genderqueer', '11/7/1996'),
(50, 'Shellysheldon', 'TmOBTXLSH6RP', 'sbarnham1d@time.com', 'Genderfluid', '6/25/1977'),
(51, 'Florie', '8fa7gbKpUhpi', 'fspenclay1e@de.vu', 'Female', '4/15/1999'),
(52, 'Lind', '9B94isCj5on', 'lhallbird1f@usnews.com', 'Agender', '9/13/2003'),
(53, 'Simona', 'UfojddIfe', 'srosensaft1g@gizmodo.com', 'Polygender', '5/21/1988'),
(54, 'Candy', 'H1iKja4', 'cklehyn1h@digg.com', 'Female', '10/12/1982'),
(55, 'Francyne', '60YZAxM', 'fcalven1i@yale.edu', 'Non-binary', '10/22/1950'),
(56, 'Sheilah', '2x07Dj', 'shurdidge1j@webeden.co.uk', 'Bigender', '4/25/1984'),
(57, 'Allene', 'Yfz8lUc', 'alondsdale1k@opensource.org', 'Genderqueer', '5/27/2004'),
(58, 'Kevin', 'TXlerg', 'kwace1l@sun.com', 'Genderqueer', '10/11/1973'),
(59, 'Olly', 'gHAlzau', 'oplane1m@bandcamp.com', 'Bigender', '6/15/2011'),
(60, 'Paola', '4tJFFI4EF7Yu', 'pgoodley1n@behance.net', 'Genderqueer', '4/10/1963'),
(61, 'Dorie', 'tfJAzye', 'dwebbbowen1o@cornell.edu', 'Genderqueer', '12/16/2014'),
(62, 'Godard', '4ei00WqS', 'gtaynton1p@archive.org', 'Polygender', '2/19/1977'),
(63, 'Dale', 'B9OWDXd3bF', 'dgladwin1q@unesco.org', 'Genderqueer', '10/26/1952'),
(64, 'Shelton', '7vpeqClY', 'smcrobb1r@noaa.gov', 'Female', '10/23/1997'),
(65, 'Elli', 'rX3s6Pf', 'eblacklidge1s@behance.net', 'Non-binary', '9/15/1984'),
(66, 'Alice', '5iDhq9K', 'apython1t@europa.eu', 'Polygender', '11/25/2007'),
(67, 'Cassi', 'rCthiMMk', 'caleixo1u@columbia.edu', 'Genderfluid', '1/16/1983'),
(68, 'Kaine', 'h7wpMD0WZU1t', 'kmartino1v@census.gov', 'Genderqueer', '4/14/2002'),
(69, 'Homer', 'Ym68lym', 'hmarrill1w@fema.gov', 'Genderfluid', '5/9/2005'),
(70, 'Liliane', 'mGMzisIC', 'lbrigham1x@purevolume.com', 'Male', '10/18/1958'),
(71, 'Kincaid', 'IdALuWDnBDt', 'ksymers1y@freewebs.com', 'Male', '1/10/1999'),
(72, 'Audrie', 'Qirab4BMkk', 'aleivesley1z@delicious.com', 'Polygender', '9/26/1974'),
(73, 'Addia', 'NU3tdmJWHISq', 'alemmer20@artisteer.com', 'Agender', '9/23/1965'),
(74, 'Perrine', 'HSIgQz0r', 'pdarrington21@cbslocal.com', 'Female', '4/6/2000'),
(75, 'Lila', 'bkGF5B3UD3', 'lpendleberry22@nps.gov', 'Male', '9/4/1980'),
(76, 'Arluene', '2LMVG2Y7', 'athomann23@soundcloud.com', 'Agender', '6/8/2002'),
(77, 'Conni', '4u99HNyLO', 'cgillie24@ocn.ne.jp', 'Bigender', '3/17/1970'),
(78, 'Bronny', 'iWkOdvNrp1V', 'bantrobus25@mac.com', 'Genderqueer', '8/31/2018'),
(79, 'Saw', 'ObLIqdXFj', 'smacconnel26@zimbio.com', 'Female', '6/23/2000'),
(80, 'Marillin', 'vVG32rG', 'mbeaney27@gizmodo.com', 'Bigender', '10/1/1983'),
(81, 'Rhetta', 'iCIWG91aAd27', 'rlomath28@dyndns.org', 'Non-binary', '9/16/1988'),
(82, 'Roobbie', 'r1ymzKTQAh', 'rdunstone29@printfriendly.com', 'Bigender', '4/15/1968'),
(83, 'Giraldo', 'TyR7BugvUl52', 'gkarpets2a@tinypic.com', 'Female', '12/5/1953'),
(84, 'Morse', 'TdIYW7h7c', 'meverist2b@sciencedaily.com', 'Genderqueer', '5/1/1971'),
(85, 'Ozzie', '9PBTZPPfR', 'ojarmyn2c@redcross.org', 'Agender', '3/26/1962'),
(86, 'Magdalen', 'k4LUuNBFc', 'mmapston2d@thetimes.co.uk', 'Male', '3/14/1956'),
(87, 'Theressa', 'aqDhjXkmk', 'tbengtson2e@upenn.edu', 'Non-binary', '5/22/1976'),
(88, 'Klara', '8YN4v6VyzAe', 'kedgeworth2f@discovery.com', 'Male', '12/3/1995'),
(89, 'Fraser', 'JKIBsR', 'fzahor2g@creativecommons.org', 'Female', '12/17/1952'),
(90, 'Lorrin', '4qrjXSuagkI', 'lgrishanin2h@jigsy.com', 'Genderqueer', '10/10/1983'),
(91, 'Neall', 'jDKPKjux2wU', 'ngutman2i@prlog.org', 'Genderqueer', '6/26/1963'),
(92, 'Yolande', 'AYfa4r', 'ycampo2j@trellian.com', 'Bigender', '8/24/2016'),
(93, 'Onida', '85EBTx18u2l', 'omiles2k@liveinternet.ru', 'Bigender', '1/1/2021'),
(94, 'Glyn', 'ILGIdK7', 'gmarikhin2l@columbia.edu', 'Bigender', '6/16/1957'),
(95, 'Del', 'ASydh0U', 'dslaney2m@moonfruit.com', 'Polygender', '9/24/2013'),
(96, 'Ketty', 'bU8v4hq', 'kplewman2n@utexas.edu', 'Genderqueer', '7/20/1959'),
(97, 'Margy', 'yrbeZ0', 'mlitzmann2o@twitpic.com', 'Bigender', '11/22/1992'),
(98, 'Addy', 'UKQ9o1Qg6zL', 'ahaxley2p@uol.com.br', 'Genderfluid', '6/25/1974'),
(99, 'Ariel', 'GKyHrS4fgEES', 'akubat2q@hexun.com', 'Genderqueer', '12/17/1970'),
(100, 'Harald', 'cDVnUmu9B', 'hepelett2r@twitpic.com', 'Genderqueer', '5/23/1970');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`pid`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
