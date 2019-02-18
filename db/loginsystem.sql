-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 11:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(255) NOT NULL,
  `user_last` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Ian', 'Wright', 'ditclassit2017@gmail.com', 'localhost', ''),
(2, 'Ian', 'Wright', 'aaa@gmail.com', 'root', ''),
(3, 'Harun', 'Kilas', 'harun@gmail.com', 'tutorial', '$2y$10$1R9aiivg5ECQZ5TZyeLYEe.AFrsTCIDGXTe6bWIRO2Lt/OeJkZp2e'),
(4, 'Guyo', 'Claude', 'guyo.ahmad@gmail.com', 'guyoone', '$2y$10$QEnjOqHr8vAczxeYJIznRuREQzldx2Z3c8NH/cT5aWeJsPtffYEtW'),
(5, 'Harun', 'Kilas', 'ditclassit2017@gmail.com', 'harun', '$2y$10$k4HK4JlOTJmiLi1WqnxFM.MAwIo.PA4de06bh1j7XT8DO4PxeuWZK'),
(6, 'Harun', 'Kilas', 'aaa@gmail.com', 'kilas', '$2y$10$ZgyJxdB/tvoahcPsk.84yeIr6KsliI1yrBkDgblp.DbNQLRpp47Pi'),
(7, 'fff', 'fff', 'ditclassit2017@gmail.com', 'localhost', '$2y$10$wfswP7dQOpZOt8iZOWZVz.Qn9gAd.4kNfjfGL4mu3YmUCxGZu/F0O'),
(8, 'lola', 'keylan', 'lola@gmail.com', 'loladiva', '$2y$10$.gHh4x4p59Rb9hrtXYgFq.tZaA4T2K5cvsmU/o2BLjEXatQaIy94W'),
(9, 'Yahya', 'Bin', 'yahya@gmail.com', '33791346', '$2y$10$4D8M1.k29Wb3JLQ283YtDOiewijGE5ySfi9XiCmFaXi71MocnaeL.'),
(10, 'Aisha', 'Mohamed', 'aisha@gmail.com', '45454545', '$2y$10$vwnlnzuKzD4kiHL//LskIe18DFs4anKSo8kgePSHyNe3DZCkgcM/6'),
(11, 'Aisha', 'Mohamed', 'aisha@outlook.com', '45454545', '$2y$10$g2D0O468LcEyKi1M1YGio.n2mZ5FZnL9Lvf5kc.xNsRchCWhA12Qm'),
(12, 'Aisha', 'Mohamed', 'aisha@gmail.com', '45454545', '$2y$10$1hV6kvXaLPfNBVanNhstWON499GqqT2XaEzlIyKzBCKYPestS3kEq'),
(13, 'Aisha', 'Kilas', 'ibrahimclaude009@gmail.com', '33791346', '$2y$10$VbTAAODZwrGgNzyfAf2xWuLh3iaCeQWQ3xwX8CLQqdjU5/5gs45FO'),
(14, 'Pinky', 'cuty', 'pinkny@gmail.com', '45698745', '$2y$10$eza0y726rmVvRQaRQ.FBgOKgdRphbxzsjpY9L1d6R2SUe2jtNI3da'),
(15, 'yasin', 'kim', 'ditclassit2017@gmail.com', '78965412', '$2y$10$rVXQyxgLJQeVR4mQTVStduW0nspA96HwMRNrxm1n1CaeiuLZ8NooK'),
(16, 'yasin', 'kim', 'ditclassit2017@gmail.com', '78965412', '$2y$10$h89Z1e2gpxqfnRYokvBCgubx3bQIv0nq7KaGjdFrd8cjeG91h2ALO'),
(17, 'Dan', 'Wright', 'Dan@gmail.com', '12121212', '$2y$10$H4h2gidHfi9vfM5pnxq/4.JnUPsuZv2IPUhjGz99ZRb0CfcOnauT6'),
(18, 'Guyo', 'Abdi', 'aaa@gmail.com', '47474747', '$2y$10$SWQeR.UzTXKgDSdWldP5DeVXACzBX7wMlBX10sJDG2/0vximwn8J.'),
(19, 'Ian', 'Wright', 'aaa@gmail.com', '85858585', '$2y$10$6WXE8snVR5.UckvvdTOWEuBPY.vm/OhVDisy1Cf4NDhmanN80vZky'),
(20, 'Aisha', 'Kilas', 'aaa@gmail.com', '469874568', '$2y$10$EyL4GUDqKW/49TDC8/QgaO4H9U/RJfjSW.bawNw2VFbfQ8J.6MT/y'),
(21, 'Tom', 'keylan', 'rahim00@gmail.com', '758694', '$2y$10$oDEPLhzaaSTlrv3S3l818.zCmPaMA22ewNkD9HWCmYuy3hwl7ZPXK'),
(22, 'Jame', 'very', 'Joeguy009@gmail.com', '798674', '$2y$10$zjy1u5H28j9z25FEHYN3lOUtBR/VPkQfUIL5NGWixyoPD/6Y6GKCe'),
(23, 'lam', 'popola', 'frank@gmail.com', '7584698', '$2y$10$k70Sr3oXhtivWBR9LET.L.dbDQLmv3yh8vJjF8jh5FBruWgt1koLi'),
(24, 'Aisha', 'keylan', 'aaa@gmail.com', '87452', '$2y$10$bVnVYZGqVbF7gPalPvLr9.840akJAOXf4WL1jLDD.JnezmuON7l/.'),
(25, 'James', 'keylan', 'ditclassit2017@gmail.com', '42125263', '$2y$10$H3sZXOZYxD4vS3hLQSLBhuMD86zxbgvCWa5DFioyZToThQuhrjJhG');

-- --------------------------------------------------------

--
-- Table structure for table `user_votes`
--

CREATE TABLE `user_votes` (
  `id` int(255) NOT NULL,
  `user_ID` varchar(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `for_president` varchar(255) NOT NULL,
  `for_governor` varchar(255) NOT NULL,
  `for_senator` varchar(255) NOT NULL,
  `for_mp` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_votes`
--

INSERT INTO `user_votes` (`id`, `user_ID`, `user_name`, `for_president`, `for_governor`, `for_senator`, `for_mp`, `created_at`) VALUES
(1, '33791346', 'Claude', 'Uhuru Kenyatta', 'Miguna Miguna', 'Sakaja Johnson', 'Charles Njagua', '2018-10-29 09:17:49'),
(2, '33791346', 'Mike', 'Raila Odinga', 'Mike Mbuvi Sonko', 'Sakaja Johnson', 'Charles Njagua', '2018-10-29 09:24:55'),
(3, '42125263', 'James', 'Uhuru Kenyatta', 'Mike Mbuvi Sonko', 'Bishop Wanjiru', 'Chege Mwaura', '2018-10-29 09:33:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_votes`
--
ALTER TABLE `user_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_votes`
--
ALTER TABLE `user_votes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
