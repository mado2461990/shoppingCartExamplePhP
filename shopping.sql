--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `adress` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` tinyint(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `description`, `image`, `price`) VALUES
(3, 1, 'windows phone', 'windows phone\r\nwindows phone\r\nwindows phone', '1.jpg', 200),
(5, 1, 'sony1', 'sony1  sony1  sony1', '2.jpg', 350),
(8, 1, 'samsung', 'samsung2 samsung2 samsung samsung2', '3.jpg', 120),
(10, 1, 'HTC', 'HTC1 HTC1 HTC1 HTC1', '5.jpg', 240),
(11, 1, 'Nokia', 'Nokia2 Nokia2 Nokia2', '4.jpg', 100),
(13, 1, 'samsung ice', 'samsung ice samsung ice samsung ice', '6.jpg', 120.2),
(14, 1, 'telphone 1980', 'telphone 1980 telphone 1980 telphone 1980', '7.jpg', 500),
(15, 1, 'sony watche 2', 'sony watche 2 sony watche 2 sony watche 2', '8.jpg', 120.05),
(16, 1, 'sony watches 3 ', 'sony watches 3  sony watches 3  sony watches 3 ', '9.jpg', 140.1),
(18, 2, 'car', 'car car car\r\n\r\nbuy day', '21.jpg', 400),
(19, 2, 'service 1', 'service 1 service 1 service 1\r\n\r\nby hours', '22.jpg', 120),
(20, 2, 'internet service', 'internet service internet service \r\n\r\nby month', '23.jpg', 77),
(21, 2, 'buetyfor', 'buetyfor buetyfor buetyfor\r\n\r\nby KG', '24.jpg', 100),
(22, 2, 'shawerma', 'shawerma shawerma shawerma\r\n\r\nby unit', '25.jpg', 100.55),
(23, 2, 'fish ', 'fish  fish fish \r\n\r\nby kg', '26.jpg', 220),
(24, 2, 'meet', 'meet meet meet\r\nby KG', '27.jpg', 200),
(25, 3, 'concept of programmer', 'concept of programmer concept of programmer', '31.jpg', 100),
(26, 3, 'c++', 'c++ c++ c++ c++', '32.jpg', 120),
(27, 3, 'java', 'java java java java', '33.jpg', 33.22),
(28, 3, 'paython', 'paython paython paython paython', '34.jpg', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
