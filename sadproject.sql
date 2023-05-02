-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 04:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `allpost`
--

CREATE TABLE `allpost` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `desc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `desc`) VALUES
(2, 'Ganja', '100$');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `gst` int(11) NOT NULL,
  `title` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `gst`, `title`, `desc`) VALUES
(1, 1, 'test1 sdf sdf', 'sdf sdf sdfg sdgdf asdasd'),
(2, 1, 'Test2', 'zxxxxxxxxxxx'),
(3, 1, 'Test2sad', 'zxxxxxxxxxxx'),
(4, 1, 'Test2ddd', 'asdasdsadaasdsda'),
(5, 1, 'ভর্তি তথ্য ২০২৩ (এইচ.এস.সি ২০২২ ব্যাচ)', ' \r\n      সার্কুলার প্রকাশিত হলে সকল ভর্তি তথ্য আপডেট করে দেওয়া হবে।\r\n      শুধু নিম্নের তথ্যগুলো প্রকাশ করেছে।\r\n      ২০২২-২০২৩ শিক্ষাবর্ষে দেশের ২২ টি সাধারণ ও বিজ্ঞান প্রযুক্তি বিশ্ববিদ্যালয়ে গুচ্ছ পদ্ধতিতে ভর্তি পরীক্ষা নেওয়া হবে।\r\n      গুচ্ছ (GST) ভর্তি পরীক্ষার তথ্যসমূহ\r\n \r\n     আবেদন শুরু: ১৫ এপ্রিল\r\n     \r\n     আবেদন শেষ:  ৩০ এপ্রিল\r\n      \r\n     আবেদন ফি: \r\n      \r\n     সেকেন্ড টাইম: আছে। (ইম্প্রুভ দিলে SSC ২০১৮ ও পরীক্ষা দিতে পারবে)\r\n      \r\n     বিভাগ পরিবর্তন ইউনিট:  নেই\r\n      \r\n     প্রবেশপত্র ডাউনলোড: প্রকাশিত হয় নি।\r\n      \r\n     ভর্তি পরীক্ষার তারিখ :\r\n      \r\n     বিজ্ঞান ইউনিট (এ ইউনিট)  - ৩ জুন\r\n      \r\n     মানবিক ইউনিট (বি ইউনিট)  - ২৭ মে\r\n      \r\n     বাণিজ্য ইউনিট (সি ইউনিট) - ২০ মে\r\n      \r\n     ফলাফল প্রকাশের তারিখ:  ৮ জুনের মধ্যে।\r\n      \r\n     ওয়েবসাইটঃ www.gstadmission.ac.bd'),
(6, 1, 'New ', 'l;asdkfkl;h \r\ndfkljsgkl\r\nkoldjsfgklsd ja\r\nkljdfg kjlsdfk\r\njklkljkl'),
(7, 1, 'GST 2 NEW', 'dgjkl;hasdj h jkldhfgjkldhgjkl ghjdfjklhdfgklhdf '),
(8, 1, 'GST2 kjldsfhjksdla h', 'zzzzzzzzzkjjjjjjjjjjjjjjjjjhdaskflhasd\r\nkjsdhfgkjldaghjkla \r\njkdhfgkljadfhgjkldfg'),
(9, 2, 'GST2 Newest', 'xcvxcvxcv xxxxxx\r\nxxxxxxx\r\ny\r\nyyyyyyyyyy\r\npornhub'),
(10, 3, 'Test3', 'Porn videos. Coming Soon. Stay tuned.'),
(11, 2, 'asdgdafgadf', 'dsgadfgadfg'),
(12, 2, 'asdgdafgadf', 'dsgadfgadfg'),
(13, 2, 'asdasd', 'sdfgsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rpassword` varchar(50) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `uname`, `email`, `password`, `rpassword`, `dateandtime`, `role`) VALUES
(1, 'maruf', 'maruf.raihan.196@gmail.com', '12345678', '12345678', '2023-03-29 18:47:02', ''),
(2, 'raihan', 'maruf.raihan.165@gmail.com', '1234', '1234', '2023-03-29 18:56:13', ''),
(3, 'maruf_raihan_', 'mraihan201196@bscse.uiu.ac.bd', '12345678', '12345678', '2023-03-29 18:57:19', ''),
(4, 'maruf_raihan_', 'mraihan201196@bscse.uiu.ac.bd', '12345678', '12345678', '2023-03-29 18:58:53', ''),
(5, 'maruf_raihan_', 'mraihan201196@bscse.uiu.ac.bd', '12345678', '12345678', '2023-03-29 19:00:58', ''),
(6, 'admin', 'admin@gmail.com', '1234', '1234', '2023-04-06 20:33:56', 'admin'),
(7, 'maruf', 'maruf.raihan.999@gmail.com', '5312027289ba24637b39f5fff88d54ed', '5312027289ba24637b39f5fff88d54ed', '2023-04-06 20:51:29', 'admin'),
(8, 'raihan', 'raihan@yahoo.com', '5312027289ba24637b39f5fff88d54ed', '5312027289ba24637b39f5fff88d54ed', '2023-04-06 20:54:03', 'user'),
(9, 'redwan', 'redwan@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '2023-05-02 10:38:11', 'admin'),
(10, 'test', 'test@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '2023-05-02 10:45:55', 'user'),
(11, 'test', 'test@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2023-05-02 12:06:48', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ctg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `ctg`) VALUES
(1, 'Dhaka Univarsity', 'public'),
(2, 'Jahangirnagar University', 'public'),
(3, 'NSU', 'private'),
(4, 'UIU', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `universityresult`
--

CREATE TABLE `universityresult` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `universityresult`
--

INSERT INTO `universityresult` (`sno`, `name`, `link`) VALUES
(1, 'University of Dhaka', 'www.du.ac.bd'),
(6, 'Rajshahi University', 'www.ru.ac.bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allpost`
--
ALTER TABLE `allpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`uid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universityresult`
--
ALTER TABLE `universityresult`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allpost`
--
ALTER TABLE `allpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `universityresult`
--
ALTER TABLE `universityresult`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allpost`
--
ALTER TABLE `allpost`
  ADD CONSTRAINT `test` FOREIGN KEY (`uid`) REFERENCES `university` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
