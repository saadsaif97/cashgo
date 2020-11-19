-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 05:59 AM
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
CREATE DATABASE IF NOT EXISTS `cashgo_admin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cashgo_admin`;

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
('logo.png', 1, '<strong>START YOUR</strong>', 'homepagetop.jpg', '<strong>LOAN APPLICATION</strong>\r\n', 'Easy &amp; Secure', 'Our 2-of-3 multi-signature wallet removes all single points of failure by using 3 keys: your private key,', 'Yeh lo', 'Our 2-of-3 multi-signature wallet removes all single points of failure by using 3 keys: your private key,', 'Phir lo', 'Our 2-of-3 multi-signature wallet removes all single points of failure by using 3 keys: your private key,', 'Secure &amp; Easy', 'Our 2-of-3 multi-signature wallet removes all single points of failure by using 3 keys: your private key,', 'GETTING CASH IS', '<strong>EASY WITH CASHGO</strong>', 'It may look like CashGo is just in the business of loans on car titles. But for us, it&rsquo;s much deeper than that. Our goal is to help you get the cash you need right when you need it most.', 'STUNNING REPAYMENT FLEXIBILITY', 'FOR YOUR LOAN', 'PERSONAL', 'LOAN COMPARISON', 'CashGo', 'Lending Club', 'Discover Loan', 'Discover Loan', '<strong>Fees:</strong>\r\nNo Fee\r\n&nbsp;\r\n<strong>Duration:</strong>\r\n3,5 or 7 years\r\n&nbsp;\r\n<strong>Amount:</strong>\r\n$7000-$80,000', '<strong>Fees:</strong> No Fee &nbsp; <strong>Duration:</strong> 3,5 or 7 years &nbsp; <strong>Amount:</strong> $7000-$80,000', '<strong>Fees:</strong> No Fee &nbsp; <strong>Duration:</strong> 3,5 or 7 years &nbsp; <strong>Amount:</strong> $7000-$80,000', '<strong>Fees:</strong> No Fee &nbsp; <strong>Duration:</strong> 3,5 or 7 years &nbsp; <strong>Amount:</strong> $7000-$80,000', 'https://google.com', '<p><strong><em>Buy this now. I would like to personally thank you for your outstanding product.</em></strong></p>', '<p><strong>Barrie I.</strong></p>', 'https://facebook.com', '<p><strong><em>Thanks for the great service.</em></strong></p>', '<p><strong>Glynda G.</strong></p>', 'https://twitter.com', '<p><strong><em>This is simply unbelievable! CashGO has got everything I need. Thanks guys, keep up the good work! I made back the purchase price in just 48 hours!</em></strong></p>', '<p><strong>Melicent R.</strong></p>');

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
(1, 'top.jpg', 'HOW IT WORKS', 'CASHGO WORKS IN THREE STEPS', 'FILL AN APPLICATION FORM ON OUR WEBSITE', 'Cupim sirloin shankle flank short ribs pork belly tenderloin boudin frankfurter doner. Pork pork chop andouille, meatball alcatra capicola corned beef tail kevin flank hamburger landjaeger shank. Tongue bresaola fatback hamburger tri-tip jowl. Brisket spacial', 'OUR MANAGER WILL CONTACT YOU TO CLEAR UP THE DETAILS', 'Tenderloin <strong>burgdoggen</strong> kielbasa chicken, ground round meatloaf ball tip cow bresaola ribeye porchetta tri-tip. Shoulder tail pork belly meatloaf ball tip bresaola. Pork fatback kevin prosciutto boudin drumstick swine ham hock short loin hamburger chicken porchetta alcatra bresaola.', 'RECEIVE YOUR MONEY IN THE MOST CONVENIENT WAY IN 15 MINUTES', 'Cupim sirloin shankle flank short ribs pork belly tenderloin boudin frankfurter doner. Pork pork chop andouille, meatball alcatra capicola corned beef tail kevin flank hamburger landjaeger shank. Tongue bresaola fatback hamburger tri-tip jowl. Brisket spare ribs pig ham hock tongue picanha.');

-- --------------------------------------------------------

--
-- Table structure for table `plan_card`
--

CREATE TABLE `plan_card` (
  `id` int(11) NOT NULL,
  `img_name` varchar(225) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `my_rows` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_card`
--

INSERT INTO `plan_card` (`id`, `img_name`, `title`, `content`, `my_rows`) VALUES
(36, 'Updated plan card.jpg', 'Updated plan card', 'Content of the updated plan card', '<tr><td> new investment bonus <span>1000%</span>  </td><td> ek our bonus <span>80%</span> </td></tr><tr><td> investment test bonus <span>10%</span>  </td><td> new profit bonus <span>13%</span> </td></tr><tr><td> new line one <span>1%</span>  </td><td> second line <span>2%</span> </td></tr>'),
(38, 'Third Card.jpg', 'Third Card', 'How to create a dynamic grid system using css3. I\'d like to achieve an overview page with multiple cards with different heights and order of displaying cards should be the same.  Cards with different heights will be displayed on the dashboard based on the config settings so it should be auto-adjusted. Please help me to write generic css for it.', '<tr><td> new line one <span>1%</span>  </td><td> second line <span>2%</span> </td></tr><tr><td> investment test bonus <span>10%</span>  </td><td> new profit bonus <span>13%</span> </td></tr><tr><td> new investment bonus <span>1000%</span>  </td><td> ek our bonus <span>80%</span> </td></tr><tr><td> new line one <span>1%</span>  </td><td> second line <span>2%</span> </td></tr>'),
(39, 'Third Card.jpg', 'Third Card', 'How to create a dynamic grid system using css3. I\'d like to achieve an overview page with multiple cards with different heights and order of displaying cards should be the same.  Cards with different heights will be displayed on the dashboard based on the config settings so it should be auto-adjusted. Please help me to write generic css for it.', '<tr><td> new investment bonus <span>1000%</span>  </td><td> ek our bonus <span>80%</span> </td></tr><tr><td> new line one <span>1%</span>  </td><td> second line <span>2%</span> </td></tr><tr><td> investment test bonus <span>10%</span>  </td><td> new profit bonus <span>13%</span> </td></tr><tr><td> new investment bonus <span>1000%</span>  </td><td> ek our bonus <span>80%</span> </td></tr>');

-- --------------------------------------------------------

--
-- Table structure for table `plan_card_rows`
--

CREATE TABLE `plan_card_rows` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_card_rows`
--

INSERT INTO `plan_card_rows` (`id`, `content`) VALUES
(9, '&lt;td&gt; new line one &lt;span&gt;1%&lt;/span&gt;  &lt;/td&gt;&lt;td&gt; second line &lt;span&gt;2%&lt;/span&gt; &lt;/td&gt;'),
(10, '&lt;td&gt; new investment bonus &lt;span&gt;1000%&lt;/span&gt;  &lt;/td&gt;&lt;td&gt; ek our bonus &lt;span&gt;80%&lt;/span&gt; &lt;/td&gt;'),
(11, '&lt;td&gt; investment test bonus &lt;span&gt;10%&lt;/span&gt;  &lt;/td&gt;&lt;td&gt; new profit bonus &lt;span&gt;13%&lt;/span&gt; &lt;/td&gt;');

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
(14, 'shannon-tremaine-NRz7SfpnqUM-unsplash.jpg', 'The post number <em><strong>ONE</strong></em>', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi ipsum, sodales et venenatis non, suscipit nec dolor. Aliquam at neque efficitur, tincidunt leo in, aliquam orci. Sed ornare sem ut enim lacinia porta. Donec cursus mauris elit, ultricies pellentesque odio placerat at. In sollicitudin mauris at turpis maximus, a tincidunt metus luctus. Morbi venenatis vestibulum purus convallis luctus. Vivamus imperdiet metus sodales dui varius, eget ornare mi vulputate. Integer at ultrices mauris. Etiam in arcu enim. Cras malesuada justo et turpis venenatis molestie. Nunc semper luctus turpis, in dapibus enim egestas eget. Phasellus id egestas mauris. In et tellus dapibus, porttitor turpis ac, mollis enim. Nulla sagittis condimentum consequat. Phasellus molestie ultricies nibh eget dignissim.\r\nNullam auctor faucibus turpis, et porttitor mi hendrerit ut. Maecenas lacinia ac elit vel ultricies. Mauris cursus metus nibh, sit amet condimentum risus gravida nec. Proin at magna sit amet nisl dignissim ullamcorper. Etiam vitae urna sed velit fermentum mattis. In finibus mauris a ligula suscipit tempor. Ut non libero est. Vivamus ullamcorper luctus lorem, sit amet fermentum ante fringilla sit amet. Suspendisse et arcu at tortor pulvinar vehicula vitae at risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vulputate tincidunt lectus id convallis.\r\nCras suscipit neque lacus, nec fringilla arcu facilisis at. Aenean quis rhoncus est, sit amet iaculis nisl. Nam ut blandit metus. Sed euismod in neque eget sodales. Suspendisse mattis in tellus sit amet pulvinar. Fusce blandit malesuada dapibus. Cras feugiat ligula a tincidunt blandit. In at magna porta, consectetur eros eget, malesuada odio. Nulla facilisi. Nulla massa nisi, maximus et ipsum eu, consectetur luctus ante. Quisque viverra vehicula neque, id aliquet mauris commodo et. Quisque nec felis ac metus mollis euismod. Integer quis iaculis elit. Nulla eros ex, suscipit eu diam sit amet, condimentum mol', '2020-11-03', 'Earning money online', 'admin'),
(15, 'lucas-benjamin-wQLAGv4_OYs-unsplash.jpg', 'POST NUMBER <em><strong>TWO</strong></em>', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi ipsum, sodales et venenatis non, suscipit nec dolor. Aliquam at neque efficitur, tincidunt leo in, aliquam orci. Sed ornare sem ut enim lacinia porta. Donec cursus mauris elit, ultricies pellentesque odio placerat at. In sollicitudin mauris at turpis maximus, a tincidunt metus luctus. Morbi venenatis vestibulum purus convallis luctus. Vivamus imperdiet metus sodales dui varius, eget ornare mi vulputate. Integer at ultrices mauris. Etiam in arcu enim. Cras malesuada justo et turpis venenatis molestie. Nunc semper luctus turpis, in dapibus enim egestas eget. Phasellus id egestas mauris. In et tellus dapibus, porttitor turpis ac, mollis enim. Nulla sagittis condimentum consequat. Phasellus molestie ultricies nibh eget dignissim.\r\nNullam auctor faucibus turpis, et porttitor mi hendrerit ut. Maecenas lacinia ac elit vel ultricies. Mauris cursus metus nibh, sit amet condimentum risus gravida nec. Proin at magna sit amet nisl dignissim ullamcorper. Etiam vitae urna sed velit fermentum mattis. In finibus mauris a ligula suscipit tempor. Ut non libero est. Vivamus ullamcorper luctus lorem, sit amet fermentum ante fringilla sit amet. Suspendisse et arcu at tortor pulvinar vehicula vitae at risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vulputate tincidunt lectus id convallis.\r\nCras suscipit neque lacus, nec fringilla arcu facilisis at. Aenean quis rhoncus est, sit amet iaculis nisl. Nam ut blandit metus. Sed euismod in neque eget sodales. Suspendisse mattis in tellus sit amet pulvinar. Fusce blandit malesuada dapibus. Cras feugiat ligula a tincidunt blandit. In at magna porta, consectetur eros eget, malesuada odio. Nulla facilisi. Nulla massa nisi, maximus et ipsum eu, consectetur luctus ante. Quisque viverra vehicula neque, id aliquet mauris commodo et. Quisque nec felis ac metus mollis euismod. Integer quis iaculis elit. Nulla eros ex, suscipit eu diam sit amet, condimentum mol', '2020-11-03', 'Earning money online', 'admin'),
(16, 'armin-djuhic-yYHuMFSZ7A4-unsplash.jpg', 'POST NUMBER THREE', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi ipsum, sodales et venenatis non, suscipit nec dolor. Aliquam at neque efficitur, tincidunt leo in, aliquam orci. Sed ornare sem ut enim lacinia porta. Donec cursus mauris elit, ultricies pellentesque odio placerat at. In sollicitudin mauris at turpis maximus, a tincidunt metus luctus. Morbi venenatis vestibulum purus convallis luctus. Vivamus imperdiet metus sodales dui varius, eget ornare mi vulputate. Integer at ultrices mauris. Etiam in arcu enim. Cras malesuada justo et turpis venenatis molestie. Nunc semper luctus turpis, in dapibus enim egestas eget. Phasellus id egestas mauris. In et tellus dapibus, porttitor turpis ac, mollis enim. Nulla sagittis condimentum consequat. Phasellus molestie ultricies nibh eget dignissim.\r\nNullam auctor faucibus turpis, et porttitor mi hendrerit ut. Maecenas lacinia ac elit vel ultricies. Mauris cursus metus nibh, sit amet condimentum risus gravida nec. Proin at magna sit amet nisl dignissim ullamcorper. Etiam vitae urna sed velit fermentum mattis. In finibus mauris a ligula suscipit tempor. Ut non libero est. Vivamus ullamcorper luctus lorem, sit amet fermentum ante fringilla sit amet. Suspendisse et arcu at tortor pulvinar vehicula vitae at risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vulputate tincidunt lectus id convallis.\r\nCras suscipit neque lacus, nec fringilla arcu facilisis at. Aenean quis rhoncus est, sit amet iaculis nisl. Nam ut blandit metus. Sed euismod in neque eget sodales. Suspendisse mattis in tellus sit amet pulvinar. Fusce blandit malesuada dapibus. Cras feugiat ligula a tincidunt blandit. In at magna porta, consectetur eros eget, malesuada odio. Nulla facilisi. Nulla massa nisi, maximus et ipsum eu, consectetur luctus ante. Quisque viverra vehicula neque, id aliquet mauris commodo et. Quisque nec felis ac metus mollis euismod. Integer quis iaculis elit. Nulla eros ex, suscipit eu diam sit amet, condimentum mol', '2020-11-03', 'Earning money online', 'admin'),
(17, 'xps-2L-0vnCnzcU-unsplash.jpg', 'POST NUMBER FOUR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi ipsum, sodales et venenatis non, suscipit nec dolor. Aliquam at neque efficitur, tincidunt leo in, aliquam orci. Sed ornare sem ut enim lacinia porta. Donec cursus mauris elit, ultricies pellentesque odio placerat at. In sollicitudin mauris at turpis maximus, a tincidunt metus luctus. Morbi venenatis vestibulum purus convallis luctus. Vivamus imperdiet metus sodales dui varius, eget <em><strong>ornare mi vulputate</strong></em>. Integer at ultrices mauris. Etiam in arcu enim. Cras malesuada justo et turpis venenatis molestie. Nunc semper luctus turpis, in dapibus enim egestas eget. Phasellus id egestas mauris. In et tellus dapibus, porttitor turpis ac, mollis enim. Nulla sagittis condimentum consequat. Phasellus molestie ultricies nibh eget dignissim. Nullam auctor faucibus turpis, et porttitor mi hendrerit ut. Maecenas lacinia ac elit vel ultricies. Mauris cursus metus nibh, sit amet condimentum risus gravida nec. Proin at magna sit amet nisl dignissim ullamcorper. Etiam vitae urna sed velit fermentum mattis. In finibus mauris a ligula suscipit tempor. Ut non libero est. Vivamus ullamcorper luctus lorem, sit amet fermentum ante fringilla sit amet. Suspendisse et arcu at tortor pulvinar vehicula vitae at risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vulputate tincidunt lectus id convallis. Cras suscipit neque lacus, nec fringilla arcu facilisis at. Aenean quis rhoncus est, sit amet iaculis nisl. Nam ut blandit metus. Sed euismod in neque eget sodales. Suspendisse mattis in tellus sit amet pulvinar. Fusce blandit malesuada dapibus. Cras feugiat ligula a tincidunt blandit. In at magna porta, consectetur eros eget, malesuada odio. Nulla facilisi. Nulla massa nisi, maximus et ipsum eu, consectetur luctus ante. Quisque viverra vehicula neque, id aliquet mauris commodo et. Quisque nec felis ac metus mollis euismod. Integer quis iaculis elit. Nulla eros ex, suscipit eu diam', '2020-11-03', 'Earning money online', 'admin');

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
(4, 'Whatever'),
(5, 'new category');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cmnt_author` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'saad', 'admin@pos.com', '356a192b7913b04c54574d18c28d46e6395428ab'),
(2, 'saad', 'msaadbinsaif@gmail.com', 'a0f1490a20d0211c997b44bc357e1972deab8ae3');

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
-- Indexes for table `plan_card`
--
ALTER TABLE `plan_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_card_rows`
--
ALTER TABLE `plan_card_rows`
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
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
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
-- AUTO_INCREMENT for table `plan_card`
--
ALTER TABLE `plan_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `plan_card_rows`
--
ALTER TABLE `plan_card_rows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `cashgo_user`
--
CREATE DATABASE IF NOT EXISTS `cashgo_user` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cashgo_user`;

-- --------------------------------------------------------

--
-- Table structure for table `user_deposits`
--

CREATE TABLE `user_deposits` (
  `id` int(11) NOT NULL,
  `sr_no` int(11) NOT NULL DEFAULT 0,
  `user_id` varchar(225) NOT NULL,
  `portfolio_no` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) NOT NULL,
  `currency` varchar(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `deposit_fee` varchar(255) NOT NULL,
  `total_deposit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deposit_slip` varchar(225) NOT NULL,
  `transection_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_deposits`
--

INSERT INTO `user_deposits` (`id`, `sr_no`, `user_id`, `portfolio_no`, `payment_type`, `currency`, `amount`, `rate`, `deposit_fee`, `total_deposit`, `status`, `create_date`, `deposit_slip`, `transection_id`) VALUES
(15, 1, 'TW160507112638', NULL, 'newInvest', 'ripple', '5020', '1', '100.4', '5020', 'Pending', '2020-11-16 06:46:38', 'TW160507112638_1.jpg', '12121212121212'),
(16, 2, 'TW160507112638', NULL, 'newInvest', 'litecoin', '505', '1', '10.1', '5525', 'Pending', '2020-11-16 06:47:20', 'TW160507112638_2.jpg', '12121212121212'),
(17, 3, 'TW160507112638', NULL, 'reInvest', 'ethereum', '6', '1', '0.111', '5530.55', 'Pending', '2020-11-16 07:59:12', 'TW160507112638_3.jpg', 'dasdasdasdasfa'),
(18, 4, 'TW160507112638', NULL, 'newInvest', 'bitcoin', '5.55', '1', '0.111', '5536.55', 'Pending', '2020-11-16 08:00:09', 'TW160507112638_4.jpg', 'dasdasdasdasd'),
(19, 5, 'TW160507112638', NULL, 'reInvest', 'ethereum', '1', '464.83 $', '0.02', '5537.55', 'Pending', '2020-11-17 06:54:23', 'TW160507112638_5.jpg', '1231231231233'),
(20, 6, 'TW160507112638', NULL, 'reInvest', 'ethereum', '1', '464.58 $', '0.02', '5538.55', 'Pending', '2020-11-17 06:56:07', 'TW160507112638_6.jpg', 'sasasasasasasa'),
(21, 7, 'TW160507112638', NULL, 'newInvest', 'ethereum', '13', '464.58 $', '0.26', '5551.55', 'Pending', '2020-11-17 06:58:06', 'TW160507112638_7.jpg', '1231231231313'),
(22, 8, 'TW160507112638', NULL, 'newInvest', 'ethereum', '13', '463.84 $', '0.26 ethereum', '5564.55', 'Pending', '2020-11-17 06:59:30', 'TW160507112638_8.jpg', '1231231231313'),
(23, 9, 'TW160507112638', NULL, 'reInvest', 'litecoin', '1', '74.21 $', '0.02 litecoin', '5565.55', 'Pending', '2020-11-17 07:01:27', 'TW160507112638_9.jpg', '123321321123'),
(24, 10, 'TW160507112638', NULL, 'reInvest', 'litecoin', '0.22', '74.5 $', '0.0044 litecoin', '5565.77', 'Pending', '2020-11-17 07:26:27', 'TW160507112638_10.jpg', '123123123123');

-- --------------------------------------------------------

--
-- Table structure for table `user_donations`
--

CREATE TABLE `user_donations` (
  `id` int(11) NOT NULL,
  `sr_no` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `fund_type` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `rate` varchar(225) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(225) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_donations`
--

INSERT INTO `user_donations` (`id`, `sr_no`, `user_id`, `fund_type`, `currency`, `donation_type`, `amount`, `rate`, `create_date`, `status`) VALUES
(1, 1, 'TW160507112638', 'profit', 'ethereum', 'orphan_home', '0.11', '465.04 $', '2020-11-17 11:18:11', 'Pending'),
(2, 2, 'TW160507112638', 'profit', 'bitcoin-cash', 'orphan_home', '0.11', '251.7 $', '2020-11-17 11:29:03', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `parent_id` varchar(30) DEFAULT NULL,
  `user_img` varchar(255) NOT NULL DEFAULT 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y',
  `country` varchar(255) NOT NULL,
  `investment_plan` varchar(30) NOT NULL,
  `bank_name` varchar(225) NOT NULL,
  `account_title` varchar(255) NOT NULL,
  `iban` varchar(225) NOT NULL,
  `acc_holder_ph` int(30) NOT NULL,
  `next_of_kin` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `username`, `email`, `password`, `contact`, `user_id`, `parent_id`, `user_img`, `country`, `investment_plan`, `bank_name`, `account_title`, `iban`, `acc_holder_ph`, `next_of_kin`) VALUES
(38, 'saad', 'admin@test.com', '$2y$10$Ox7x7E7XDlCYMEV6IEJtQOniyGqh3iwvTKXPjFQmdhjsYSkEQW2sa', '1', 'TW160507112638', '0', 'TW160507112638.png', 'Pakistan', '', '', '', '', 0, ''),
(39, 'hamzaiqbal21', 'hamzaiqbal222@gmail.com', '$2y$10$iS9.HMctO34fHY881o/G4erIE9M1OL47eanXUBySSzrdG3/kTPknK', '2147483647', 'TW160508963639', NULL, 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y', 'Pakistan', '', '', '', '', 0, ''),
(40, 'saad saif', 'msaadbinsaif@gmail.com', '$2y$10$ufdaNLxShGLA3Gxpcrj6p.21Ji4DWFQyOQdkPkMhCElS36/2Cm7a6', '331', 'TW160567602540', NULL, 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y', 'Pakistan', '', '', '', '', 0, ''),
(49, 'saad', 'ref1@gmail.com', '$2y$10$STXBP1TRK/OzIXK0AqU5eu/eAHktx7Y1b8U9wKWjwjo28S3J/fYX.', '090078601', 'TW160568483541', 'TW160507112638', 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y', 'Egypt', '', '', '', '', 0, ''),
(50, 'ref2', 'ref2@gmail.com', '$2y$10$8hjrnH/NFlRA0lm6wjt3Fu967HQYnA.tSHObj6DxzdcCtFBXL50ry', '090078601', 'TW160568486850', 'TW160507112638', 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y', 'Ethiopia', '', '', '', '', 0, ''),
(51, 'ref3', 'ref3@gmail.cpm', '$2y$10$xbRPvBx2JC/86NOjnaNTD.yRDm/JpWZmN/zgWJOFH4OAzowC7Z5aO', '090078601', 'TW160568490151', 'TW160507112638', 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?d=mp&f=y', 'Gabon', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_referrals`
--

CREATE TABLE `user_referrals` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `ref_id` varchar(255) NOT NULL,
  `ref_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_referrals`
--

INSERT INTO `user_referrals` (`id`, `user_id`, `ref_id`, `ref_level`) VALUES
(9, 'TW160568483541', 'TW160507112638', 1),
(10, 'TW160568486850', 'TW160507112638', 2),
(11, 'TW160568490151', 'TW160507112638', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_withdrawls`
--

CREATE TABLE `user_withdrawls` (
  `id` int(11) NOT NULL,
  `sr_no` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `portfolio_no` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `rate` varchar(225) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `transfer_fee` varchar(255) NOT NULL,
  `donation` varchar(255) DEFAULT NULL,
  `withdraw_mode` varchar(255) NOT NULL,
  `fund_type` varchar(225) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_withdrawls`
--

INSERT INTO `user_withdrawls` (`id`, `sr_no`, `user_id`, `portfolio_no`, `amount`, `rate`, `currency`, `transfer_fee`, `donation`, `withdraw_mode`, `fund_type`, `status`, `create_date`) VALUES
(13, 1, 'TW160507112638', NULL, '50', '1', 'ethereum', '1', NULL, 'cash_withdraw', 'Bonus', 'Approved', '2020-11-16 10:02:45'),
(14, 2, 'TW160507112638', NULL, '50', '1', 'bitcoin', '1', NULL, 'acount_transfer', 'Bonus', 'Pending', '2020-11-16 10:07:40'),
(15, 3, 'TW160507112638', NULL, '50', '1', 'ethereum', '1', NULL, 'cash_withdraw', 'Profit', 'Pending', '2020-11-17 04:39:04'),
(16, 4, 'TW160507112638', NULL, '50', '251.38', 'bitcoin-cash', '1', NULL, 'cash_withdraw', 'Bonus', 'Pending', '2020-11-17 05:02:34'),
(17, 5, 'TW160507112638', NULL, '50', '465.54', 'ethereum', '1', NULL, 'cash_withdraw', 'Bonus', 'Pending', '2020-11-17 05:04:19'),
(18, 6, 'TW160507112638', NULL, '50', '82.77', 'dash', '1', NULL, 'cash_withdraw', 'Profit', 'Pending', '2020-11-17 05:05:51'),
(19, 7, 'TW160507112638', NULL, '50', '82.77', 'dash', '1', NULL, 'cash_withdraw', 'Profit', 'Pending', '2020-11-17 05:07:33'),
(20, 8, 'TW160507112638', NULL, '50', '251.09 $', 'bitcoin-cash', '1', NULL, 'cash_withdraw', 'Profit', 'Pending', '2020-11-17 05:09:09'),
(21, 9, 'TW160507112638', NULL, '0.14', '464.51 $', 'ethereum', '0.0028', NULL, 'cash_withdraw', 'Profit', 'Pending', '2020-11-17 10:51:26'),
(22, 10, 'TW160507112638', NULL, '0.11', '16747.93 $', 'bitcoin', '0.0022 bitcoin', NULL, 'cash_withdraw', 'Profit', 'Pending', '2020-11-17 10:54:30'),
(23, 11, 'TW160507112638', NULL, '0.11', '16747.93 $', 'bitcoin', '0.0022 bitcoin', NULL, 'cash_withdraw', 'Profit', 'Pending', '2020-11-17 10:54:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_deposits`
--
ALTER TABLE `user_deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_donations`
--
ALTER TABLE `user_donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_referrals`
--
ALTER TABLE `user_referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_withdrawls`
--
ALTER TABLE `user_withdrawls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_deposits`
--
ALTER TABLE `user_deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_donations`
--
ALTER TABLE `user_donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_referrals`
--
ALTER TABLE `user_referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_withdrawls`
--
ALTER TABLE `user_withdrawls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
