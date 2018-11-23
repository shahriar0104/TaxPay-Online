-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 03:44 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_tax_pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_no` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_no`, `pass`) VALUES
('123', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `image` varchar(200) NOT NULL,
  `nid_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `spouse` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tax_region` varchar(50) NOT NULL,
  `tax_circle` varchar(50) NOT NULL,
  `present_adds` varchar(100) NOT NULL,
  `permanent_adds` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`image`, `nid_no`, `name`, `father`, `mother`, `spouse`, `gender`, `tin`, `email`, `tax_region`, `tax_circle`, `present_adds`, `permanent_adds`, `phone`, `age`) VALUES
('maal.jpg', '1970567890987', 'Mahmud Ashraf', 'Ashraf Ali', 'Khadiza', 'Khairun Nahar', 'M', '5225556448', 'rarzahin@gmail.com', 'Dhanmondi', 'Dhanmon-27', 'Dhanmondi', 'Puran Dhaka', '01578961245', 47),
('user.jpg', '1978567890945', 'Morshed Shuvo', 'Abul Maal', 'Farida Banu', 'Sonia', 'M', '9657125864', 'rarzahin@gmail.com', 'Mirpur', 'Mirpur-2', 'Mirpur,Dhaka', 'Pabna Rajshahi', '019657458124', 36),
('5acd0da8ce39c380708502.png', '1980567890456', 'Reza', 'Ahmed Reza', 'Sonia Parvin', 'Sonia Khatun', 'M', '5596325487', 'rarzahin@gmail.com', 'Uttara', 'Uttara-10', 'Uttara-10', 'Mymensingh', '01789456321', 37),
('', '1981567890123', 'Efaz', 'Kamrul Ahmed', 'Afsana Ahmed', 'None', 'M', '2147483647', 'prantasarkar01@yahoo.com', 'Mirpur Cant.', 'Mirpur Cant.', 'MIST', 'Dhaka', '01629735079', 36),
('maal.jpg', '1985735826', 'Efaz', 'bfdf', 'fbdf', 'frr', 'M', '4655', 'rarzahin@gmail.com', 'Mirpur', 'mirpur1', 'sdg', 'sdg', '353', 23),
('maal.jpg', '1987625395', 'Efaz', 'Ishtiak', 'Jahanara', '', 'M', '123456789012', 'prantasarkar01@yahoo.com', 'Dhaka', 'Mirpur-1', 'MIrpur1,Dhaka', 'Mirpur-!,Dhaka', '01621128756', 23),
('taxing.jpg', '1989567876543', 'Hafiz Pappu', 'abdul karim', 'Sulatana Khatun', 'priyanka', 'M', '735182635813', 'hafijpappu@gmail.com', 'Mirpur', 'Mirpur-12', 'Mirpur,Dhaka', 'Rajshahi', '01769661177', 29),
('Untitled.png', '345', 'efaz', 'lyrkfk', 'lkhfkhk', 'fftt', 'M', '376537', 'doyou@gmail.com', 'red', 'green', 'rrtt', 'qqtt', '548', 31),
('', '567', 'gagasd', 'ljbfljadb', 'lkfjladf', 'uydKAJHSDKj', 'M', '48648648', 'kh,jhlhlj', 'ljhgljhglhdgflaj', 'jhdgfjlahdgfjlah', 'ljhgljhvjhvl', ';kh.v;hv;hvljh', '66497644967', 76),
('', '678', 'zdkfjfhkajffh', 'klskdufhaskdjf,', 'wkefkweyhfg', 'iuytwiuuyawiek', 'M', '7648648', 'luukfl', 'jgfkhhgfk', 'hjhgfkhgfkhgh', 'jhjv,hjhljhj', 'ljhjljhjlhlj', '48648648', 54),
('taxing.jpg', '767', 'dfxg', 'fg', 'xgd', 'zs', 'M', '5225', 'rarzahin@gmail.com', 'zs', 'D', 'sxsdgt', 'zsdgt', '453', 25),
('5acb0c2378577999116155.png', '777', 'zero One', 'zero One', 'zero One', 'zero One', 'M', '00125', 'prantasarkar01@yahoo.com', 'dacca', 'dacca', 'dacca', 'zero One gravity', '001001001', 42),
('', '98', 'gfy', 'uuyfgfu', 'uuykhiyiu', 'iufgfug', 'M', '576547547', 'ititfitfy', 'gfjfu', 'jhgifi', 'ytfitfitit', 'uiyfyiuyfi', 'iyfiyfiyfo', 65),
('maal.jpg', '999', 'hello', 'fg', 'xgd', 'zs', 'M', '4567', 'rarzahin@gmail.com', 'dacca', 'dacca', 'sxsdgt', 'zsdgt', '453', 34);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `nid_no` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`nid_no`, `pass`) VALUES
(12, 'golu'),
(98, 'gulla'),
(123, 'dfg'),
(234, 'dfg'),
(345, 'dfg'),
(456, 'dfg'),
(567, 'dfg'),
(678, 'dfg'),
(767, 'dfg'),
(12345, 'gol'),
(98765, 'golu'),
(123456, 'golu'),
(1234567, 'gulla'),
(123456789, 'diaisgolu'),
(987654321, 'diaisgolu');

-- --------------------------------------------------------

--
-- Table structure for table `defaulters`
--

CREATE TABLE `defaulters` (
  `image` varchar(200) NOT NULL,
  `nid_no` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tax_region` text NOT NULL,
  `tax_circle` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defaulters`
--

INSERT INTO `defaulters` (`image`, `nid_no`, `name`, `gender`, `tax_region`, `tax_circle`, `phone`, `age`) VALUES
('timeslot.jpg', '1981567890123', 'Efaz', 'M', 'Mirpur Cant.', 'Mirpur Cant.', '01629735079', 36),
('timeslot.jpg', '1989567876543', 'Hafij Pappu', 'M', 'Mirpur', 'Mirpur-12', '01769661177', 29);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `nid_no` varchar(255) NOT NULL,
  `landunit` varchar(255) NOT NULL,
  `landvalue` varchar(255) NOT NULL,
  `goldunit` varchar(255) NOT NULL,
  `goldvalue` varchar(255) NOT NULL,
  `furniturevalue` varchar(255) NOT NULL,
  `gadgetsvalue` varchar(255) NOT NULL,
  `capitalvalue` varchar(255) NOT NULL,
  `cashvalue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`nid_no`, `landunit`, `landvalue`, `goldunit`, `goldvalue`, `furniturevalue`, `gadgetsvalue`, `capitalvalue`, `cashvalue`) VALUES
('1978567890945', '10 bigha', '5000000', '10oz', '2000000', '5000000', '1000000', '10000000', '500000'),
('1980567890456', '20 bigha', '5000000', '10oz', '2000000', '5000000', '1000000', '10000000', '500000'),
('1981567890123', '5 katha', '5000000', '10oz', '2000000', '5000000', '1000000', '10000000', '500000'),
('1989567876543', '10 katha', '5000000', '10oz', '2000000', '5000000', '1000000', '10000000', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `nid_no` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`nid_no`, `amount`, `pay_date`) VALUES
('123456789', 25000, '2018-04-15'),
('123456789', 25000, '2018-04-15'),
('345', 14850, '2018-04-22'),
('345', 14850, '2018-04-22'),
('123', 1500, '2018-04-22'),
('123', -37500, '2018-04-23'),
('123', -37500, '2018-04-23'),
('123', 584192, '2018-04-23'),
('123', 964380, '2018-04-23'),
('123', 2000, '2018-04-23'),
('123', 10000, '2018-04-24'),
('123', 39600, '2018-04-24'),
('123', 12500, '2018-04-24'),
('123', 5000, '2018-04-24'),
('123', 5000, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('123', 2500, '2018-04-24'),
('678', 5000, '2018-04-24'),
('678', 7500, '2018-04-24'),
('678', 5000, '2018-04-24'),
('678', 5000, '2018-04-24'),
('678', 5000, '2018-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `recordall`
--

CREATE TABLE `recordall` (
  `nid_no` varchar(255) NOT NULL,
  `pay_date` date NOT NULL,
  `total_income` int(200) NOT NULL,
  `total_invest` int(200) NOT NULL,
  `payable_tax` int(200) NOT NULL,
  `tax_free_amount` int(200) NOT NULL,
  `net_payable_tax` int(200) NOT NULL,
  `income_image` varchar(200) NOT NULL,
  `invest_image` varchar(200) NOT NULL,
  `payable_tax_image` varchar(200) NOT NULL,
  `tax_free_image` varchar(200) NOT NULL,
  `net_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recordall`
--

INSERT INTO `recordall` (`nid_no`, `pay_date`, `total_income`, `total_invest`, `payable_tax`, `tax_free_amount`, `net_payable_tax`, `income_image`, `invest_image`, `payable_tax_image`, `tax_free_image`, `net_image`) VALUES
('1981567890123', '2018-05-13', 420000, 140000, 25500, 14000, 11500, '2018_05_13_totalIncome.jpg', '2018_05_13_totalInvest.jpg', '2018_05_13_payableTax.jpg', '2018_05_13_taxFree.jpg', '2018_05_13_netPayable.jpg'),
('1989567876543', '2018-05-16', 400000, 332500, 22500, 33250, 5000, '2018_05_16_totalIncome.jpg', '2018_05_16_totalInvest.jpg', '2018_05_16_payableTax.jpg', '2018_05_16_taxFree.jpg', '2018_05_16_netPayable.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recordapproved`
--

CREATE TABLE `recordapproved` (
  `nid_no` varchar(255) NOT NULL,
  `pay_date` date NOT NULL,
  `total_income` int(200) NOT NULL,
  `total_invest` int(200) NOT NULL,
  `payable_tax` int(200) NOT NULL,
  `tax_free_amount` int(200) NOT NULL,
  `net_payable_tax` int(200) NOT NULL,
  `income_image` varchar(200) NOT NULL,
  `invest_image` varchar(200) NOT NULL,
  `payable_tax_image` varchar(200) NOT NULL,
  `tax_free_image` varchar(200) NOT NULL,
  `net_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recordapproved`
--

INSERT INTO `recordapproved` (`nid_no`, `pay_date`, `total_income`, `total_invest`, `payable_tax`, `tax_free_amount`, `net_payable_tax`, `income_image`, `invest_image`, `payable_tax_image`, `tax_free_image`, `net_image`) VALUES
('1970567890987', '2018-05-30', 560000, 245000, 46500, 24500, 22000, '2018_05_30_totalIncome.pdf', '2018_05_30_totalInvest.jpg', '2018_05_30_payableTax.jpg', '2018_05_30_taxFree.jpg', '2018_05_30_netPayable.jpg'),
('1978567890945', '2018-05-28', 350000, 100000, 15000, 10000, 5000, '2018_05_28_totalIncome.pdf', '2018_05_28_totalInvest.pdf', '2018_05_28_payableTax.pdf', '2018_05_28_taxFree.pdf', '2018_05_28_netPayable.pdf'),
('1980567890456', '2018-05-10', 350000, 100000, 15000, 10000, 5000, '2018_05_10_totalIncome.jpg', '2018_05_10_totalInvest.jpg', '2018_05_10_payableTax.jpg', '2018_05_10_taxFree.jpg', '2018_05_10_netPayable.jpg'),
('1985735826', '2018-05-30', 420000, 155000, 25500, 15500, 10000, '2018_05_30_totalIncome.jpg', '2018_05_30_totalInvest.jpg', '2018_05_30_payableTax.jpg', '2018_05_30_taxFree.jpg', '2018_05_30_netPayable.jpg'),
('1987625395', '2018-05-30', 700000, 215000, 67500, 21500, 46000, '2018_05_30_totalIncome.jpg', '2018_05_30_totalInvest.jpg', '2018_05_30_payableTax.jpg', '2018_05_30_taxFree.jpg', '2018_05_30_netPayable.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nid_no` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nid_no`, `pass`, `status`) VALUES
('001', 'asd', '2'),
('123', 'dfg', '1'),
('1970567890987', 'asd', '2'),
('1978567890945', 'asd', '2'),
('1980567890456', 'asd', '2'),
('1981567890123', 'dfg', '2'),
('1985735826', 'dfg', '2'),
('1987625395', 'asd', '2'),
('1989567876543', '123', '2'),
('777', 'dfg', '2'),
('999', 'dfg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `usertmp`
--

CREATE TABLE `usertmp` (
  `nid_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rand` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertmp`
--

INSERT INTO `usertmp` (`nid_no`, `email`, `pass`, `rand`, `status`) VALUES
('1970567890987', 'rarzahin@gmail.com', 'asd', '190', '2'),
('1978567890945', 'rarzahin@gmail.com', 'asd', '462', '2'),
('1980567890456', 'rarzahin@gmail.com', 'asd', '737', '2'),
('1981567890123', 'prantasarkar01@yahoo.com', 'dfg', '875', '2'),
('1987524938', 'prantasarkar01@yahoo.com', 'dfg', '3569', '2'),
('1987625395', 'prantasarkar01@yahoo.com', 'asd', '5364', '2'),
('1989567876543', 'hafijpappu@gmail.com', '123', '116', '2'),
('9876543210', 'efazdipon@gmail.com', 'dfg', '1755', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_no`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`nid_no`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`nid_no`);

--
-- Indexes for table `defaulters`
--
ALTER TABLE `defaulters`
  ADD PRIMARY KEY (`nid_no`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD UNIQUE KEY `nid_no` (`nid_no`);

--
-- Indexes for table `recordall`
--
ALTER TABLE `recordall`
  ADD PRIMARY KEY (`nid_no`);

--
-- Indexes for table `recordapproved`
--
ALTER TABLE `recordapproved`
  ADD PRIMARY KEY (`nid_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `nid_no` (`nid_no`);

--
-- Indexes for table `usertmp`
--
ALTER TABLE `usertmp`
  ADD PRIMARY KEY (`nid_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
