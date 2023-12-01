
-- Database: `car_inventory_db`
--
CREATE Database car_inventory_db;
-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'yuvaraj', 'admin', '2023-05-02 10:34:00'),


-- --------------------------------------------------------

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE IF NOT EXISTS `parts` (
  `partid` varchar(50) NOT NULL,
  `parttype` varchar(50) NOT NULL,
  `cartype` varchar(50) NOT NULL,
  PRIMARY KEY (`partid`),
  UNIQUE KEY `partid` (`partid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `parts` (`partid`, `parttype`, `cartype`) VALUES
('11', 'wheels', 'Audi'),
('22', 'mirror', 'Audi'),
('33', 'headlights', 'GMC'),
('44', 'chair', 'Honda');
COMMIT;
