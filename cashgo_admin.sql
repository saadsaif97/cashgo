-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 10:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashgo_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `logo` varchar(225) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `hero_img` varchar(225) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `card1_title` varchar(255) NOT NULL,
  `card1_content` varchar(255) NOT NULL,
  `card2_title` varchar(255) NOT NULL,
  `card2_content` varchar(255) NOT NULL,
  `card3_title` varchar(255) NOT NULL,
  `card3_content` varchar(255) NOT NULL,
  `card4_title` varchar(255) NOT NULL,
  `card4_content` varchar(255) NOT NULL,
  `s1_line1` varchar(225) NOT NULL,
  `s1_line2` varchar(255) NOT NULL,
  `s1_content` varchar(255) NOT NULL,
  `s2_line1` varchar(225) NOT NULL,
  `s2_line2` varchar(255) NOT NULL,
  `s3_line1` varchar(225) NOT NULL,
  `s3_line2` varchar(255) NOT NULL,
  `s3_title1` varchar(225) NOT NULL,
  `s3_title2` varchar(255) NOT NULL,
  `s3_title3` varchar(255) NOT NULL,
  `s3_title4` varchar(255) NOT NULL,
  `s3_content1` varchar(225) NOT NULL,
  `s3_content2` varchar(255) NOT NULL,
  `s3_content3` varchar(255) NOT NULL,
  `s3_content4` varchar(255) NOT NULL,
  `t1_link` varchar(225) NOT NULL,
  `t1_content` varchar(255) NOT NULL,
  `t1_name` varchar(255) NOT NULL,
  `t2_link` varchar(225) NOT NULL,
  `t2_content` varchar(255) NOT NULL,
  `t2_name` varchar(255) NOT NULL,
  `t3_link` varchar(225) NOT NULL,
  `t3_content` varchar(255) NOT NULL,
  `t3_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`logo`, `id`, `title`, `hero_img`, `tag_line`, `card1_title`, `card1_content`, `card2_title`, `card2_content`, `card3_title`, `card3_content`, `card4_title`, `card4_content`, `s1_line1`, `s1_line2`, `s1_content`, `s2_line1`, `s2_line2`, `s3_line1`, `s3_line2`, `s3_title1`, `s3_title2`, `s3_title3`, `s3_title4`, `s3_content1`, `s3_content2`, `s3_content3`, `s3_content4`, `t1_link`, `t1_content`, `t1_name`, `t2_link`, `t2_content`, `t2_name`, `t3_link`, `t3_content`, `t3_name`) VALUES
('logo.png', 1, '<h4 style=\"text-align: center;\"><span style=\"color: #ecf0f1;\">TITLE</span></h4>', 'office-front.jpeg', 'CASHGO WORKS IN THREE STEPS 1', '<h3 style=\"text-align: center;\"><span style=\"color: #ecf0f1;\">Card Title</span></h3>', '<p style=\"text-align: center;\">lorem ding dong ding dong</p>', '<h3 style=\"text-align: center;\">card 2 title</h3>', '<p style=\"text-align: center;\">card 2 content</p>', '<h3 style=\"text-align: center;\">card 3 title</h3>', '<p style=\"text-align: center;\">card 3 content</p>', '<h3 style=\"text-align: center;\">card 4 title</h3>', '<p style=\"text-align: center;\">card 4 content</p>', '<h1 style=\"text-align: center;\" data-aos=\"fade\"><span style=\"color: #34495e;\">GETTING CASH IS</span></h1>', '<h1 style=\"text-align: center;\" data-aos-delay=\"100\" data-aos=\"fade\"><span style=\"color: #000000;\"><strong>EASY WITH CASHGO</strong></span></h1>', '<p style=\"text-align: center;\"><span style=\"color: #000000;\">It may look like CashGo is just in the business of loans on car titles. But for us, it&rsquo;s much deeper than that. Our goal is to help you get the cash you need right when you need it most.</', '<p style=\"text-align: left;\"><span style=\"color: #ecf0f1;\">STUNNING REPAYMENT FLEXIBILITY</span></p>', '<h1 data-aos-delay=\"200\" data-aos=\"fade\"><span style=\"color: #ecf0f1;\"><strong>FOR YOUR LOAN</strong></span></h1>', '<p style=\"text-align: center;\">PERSONAL</p>', '<h1 style=\"text-align: center;\" data-aos-delay=\"200\" data-aos=\"fade\">LOAN COMPARISON</h1>', '<h1 style=\"text-align: center;\">CashGo</h1>', '<h1 style=\"text-align: center;\">Lending Club</h1>', '<h1 style=\"text-align: center;\">Discover Loan</h1>', '<h1 style=\"text-align: center;\">Discover Loan</h1>', '<p style=\"text-align: center;\">Fees:<br />No Fess<br /><br />Duration:<br />3,5 or 7 years<br /><br />Amount:<br />$7000 - $80,000</p>', '<p style=\"text-align: center;\">Fees:<br />No Fee<br /><br />Duration:<br />3,5 or 7 years<br /><br />Amount:<br />$7000 - $80,000</p>', '<p style=\"text-align: center;\">Fees:<br />No Fee<br /><br />Duration:<br />3,5 or 7 years<br /><br />Amount:<br />$7000 - $80,000</p>', '<p style=\"text-align: center;\">Fees:<br />3% Balance transfer fee<br /><br />Duration:<br />Rolling<br /><br />Amount:<br />Varies</p>', 'https://google.com', '<p><strong><em>Buy this now. I would like to personally thank you for your outstanding product.</em></strong></p>', '<p><strong>Barrie I.</strong></p>', 'https://facebook.com', '<p><strong><em>Thanks for the great service.</em></strong></p>', '<p><strong>Glynda G.</strong></p>', 'https://twitter.com', '<p><strong><em>This is simply unbelievable! CashGO has got everything I need. Thanks guys, keep up the good work! I made back the purchase price in just 48 hours!</em></strong></p>', '<p><strong>Melicent R.</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `howitworks`
--

CREATE TABLE `howitworks` (
  `id` int(11) NOT NULL,
  `hero_img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `s1_title` varchar(255) NOT NULL,
  `s1_content` varchar(600) NOT NULL,
  `s2_title` varchar(255) NOT NULL,
  `s2_content` varchar(600) NOT NULL,
  `s3_title` varchar(255) NOT NULL,
  `s3_content` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `howitworks`
--

INSERT INTO `howitworks` (`id`, `hero_img`, `title`, `tag_line`, `s1_title`, `s1_content`, `s2_title`, `s2_content`, `s3_title`, `s3_content`) VALUES
(1, 'top.jpg', 'HOW IT WORKS', 'CASHGO WORKS IN THREE STEPS', 'FILL AN APPLICATION FORM ON OUR WEBSITE', 'Cupim sirloin shankle flank short ribs pork belly tenderloin boudin frankfurter doner. Pork pork chop andouille, meatball alcatra capicola corned beef tail kevin flank hamburger landjaeger shank. Tongue bresaola fatback hamburger tri-tip jowl. Brisket spacial', 'OUR MANAGER WILL CONTACT YOU TO CLEAR UP THE DETAILS', 'Tenderloin burgdoggen kielbasa chicken, ground round meatloaf ball tip cow bresaola ribeye porchetta tri-tip. Shoulder tail pork belly meatloaf ball tip bresaola. Pork fatback kevin prosciutto boudin drumstick swine ham hock short loin hamburger chicken porchetta alcatra bresaola.', 'RECEIVE YOUR MONEY IN THE MOST CONVENIENT WAY IN 15 MINUTES', 'Cupim sirloin shankle flank short ribs pork belly tenderloin boudin frankfurter doner. Pork pork chop andouille, meatball alcatra capicola corned beef tail kevin flank hamburger landjaeger shank. Tongue bresaola fatback hamburger tri-tip jowl. Brisket spare ribs pig ham hock tongue picanha.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `img_name` varchar(225) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `img_name`, `title`, `content`, `date`, `category`, `author`) VALUES
(1, 'lucas-benjamin-wQLAGv4_OYs-unsplash.jpg', 'Top 8 ways to get rapid cash', 'Short ribs tenderloin corned beef pork. Picanha filet mignon cupim pastrami flank turkey jowl pork pork belly biltong venison sausage leberkas strip steak chicken. Pork chop pig prosciutto beef ribs ribeye brisket doner corned beef cupim frankfurter. Pancetta shoulder jerky, tenderloin cupim tail ribeye bresaola short ribs pig frankfurter doner ground round andouille. Pig sausage picanha, cupim strip steak jowl alcatra turducken.Short ribs tenderloin corned beef pork. Picanha filet mignon cupim pastrami flank turkey jowl pork pork belly biltong venison sausage leberkas strip steak chicken. Pork chop pig prosciutto beef ribs ribeye brisket doner corned beef cupim frankfurter. Pancetta shoulder jerky, tenderloin cupim tail ribeye bresaola short ribs pig frankfurter doner ground round andouille. Pig sausage picanha, cupim strip steak jowl alcatra turducken.“We are SO thrilled with the patio… thank you for making such a beautiful space. A couple of days ago one of the residents that ‘can’t’ stand up in th', '2020-10-14', 'cat 1', 'User'),
(9, 'armin-djuhic-yYHuMFSZ7A4-unsplash.jpg', 'New title', 'Content of the new post', '2020-10-31', 'Earning money online', 'admin'),
(11, 'shannon-tremaine-NRz7SfpnqUM-unsplash.jpg', 'Tag line goes here', 'Ding dong adasd adasdasd asdad', '2020-10-31', 'cat 1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `category`) VALUES
(1, 'Earning money online'),
(2, 'Web development'),
(4, 'Whatever');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howitworks`
--
ALTER TABLE `howitworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `howitworks`
--
ALTER TABLE `howitworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
