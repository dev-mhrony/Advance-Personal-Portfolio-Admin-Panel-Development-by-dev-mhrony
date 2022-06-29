-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 10:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_info`
--

CREATE TABLE `about_info` (
  `id` int(11) NOT NULL,
  `fast_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `nationality` text NOT NULL,
  `freelance` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone_number` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `language` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= inactive, 1= active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_info`
--

INSERT INTO `about_info` (`id`, `fast_name`, `last_name`, `age`, `nationality`, `freelance`, `address`, `phone_number`, `email`, `language`, `status`) VALUES
(1, 'MD', 'RONY', 21, 'Bangladesh', '', 'Sonatola, Bogura.', 1608445456, 'abc@gmail.com', 'Bangla', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_work`
--

CREATE TABLE `about_work` (
  `id` int(11) NOT NULL,
  `experience_by_year` int(10) NOT NULL,
  `happy_customar` int(255) NOT NULL,
  `complet_project` int(255) NOT NULL,
  `awards` int(255) NOT NULL,
  `cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_work`
--

INSERT INTO `about_work` (`id`, `experience_by_year`, `happy_customar`, `complet_project`, `awards`, `cv`) VALUES
(1, 3, 59, 78, 24, 'abc.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `short_bio` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `short_bio`, `email`, `phone_number`, `status`) VALUES
(1, 'Contact Me', 'I am a Professional Web Developer.', 'mh.rony.dhanvi@gmail.com', 1608445456, 1),
(2, 'Contact Me', 'I am a Professional Web Developer.', 'mh.rony.dhanvi@gmail.com', 1608445456, 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `education_name` varchar(50) NOT NULL,
  `short_bio` text NOT NULL,
  `start_year` int(15) NOT NULL,
  `end_year` int(15) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= inactive, 1= active '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `education_name`, `short_bio`, `start_year`, `end_year`, `status`) VALUES
(1, 'HSC', 'I Love Collage Life', 2018, 2020, 1),
(2, 'Beck Stanley', 'Eaque alias amet in', 2015, 2010, 1),
(3, 'Noel Weeks', 'Iusto quo iste in Na', 2014, 1999, 1),
(4, 'Lois Bass', 'Modi omnis consectet', 1995, 1977, 1),
(5, 'Kirestin Roberts', 'Tenetur dolores ut r', 2005, 1979, 1),
(6, 'Wanda Camacho', 'Laborum Nam qui mag', 1996, 2011, 1),
(7, 'Bethany Rosa', 'Eligendi molestiae o', 1994, 1997, 1),
(8, 'Shad Mccullough', 'Proident corrupti ', 1999, 1971, 1),
(9, 'Alexis Castro', 'Eveniet porro tempo', 1991, 2019, 1),
(10, 'Kirsten Stephens', 'Eligendi dolor qui c', 2015, 2019, 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `short_bio` text NOT NULL,
  `start_jobe_date` int(15) NOT NULL,
  `end_jobe_date` varchar(15) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= inactive, 0= active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `company_name`, `short_bio`, `start_jobe_date`, `end_jobe_date`, `status`) VALUES
(1, 'Dhanvi', 'Nice ', 2022, '2022', 1),
(2, 'Stanley and Davidson Associates', 'Nesciunt aspernatur', 8, '16-Aug-1996', 1),
(3, 'Velasquez and Sandoval Co', 'Quis saepe maiores c', 31, '03-Oct-1980', 1),
(4, 'Moran Mckenzie Co', 'Inventore eiusmod se', 27, '27-Nov-1985', 1),
(5, 'Hensley and Leblanc LLC', 'Nobis atque aut dign', 8, '01-Nov-1995', 1),
(6, 'Juarez and Rose Trading', 'Vitae alias enim ani', 10, '06-Oct-2004', 1),
(7, 'Davenport and Pace Traders', 'Nostrud velit adipis', 27, '22-May-1972', 1),
(8, 'Collins and Short Associates', 'Temporibus amet eni', 13, '10-Dec-1994', 1),
(9, 'Mcdonald and Estes LLC', 'Enim cumque labore v', 15, '20-Sep-2010', 1),
(10, 'Mccall Hays Traders', 'Et vitae aut est exe', 1983, '25-Aug-1991', 1),
(11, 'Salinas Barber LLC', 'Eius maiores magnam ', 2016, '20-Jun-2019', 1),
(12, 'Berry Stout LLC', 'Reprehenderit sit ', 1990, '18-Jul-2011', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_edit_section`
--

CREATE TABLE `home_edit_section` (
  `id` int(11) NOT NULL,
  `your_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0 = unactive , 1= active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_edit_section`
--

INSERT INTO `home_edit_section` (`id`, `your_name`, `description`, `link`, `image`, `status`) VALUES
(1, 'MH RONY', 'eloper.', 'facebook.com', 'abc.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_bio` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `clint_name` varchar(100) NOT NULL,
  `project_language` varchar(255) NOT NULL,
  `project_preview_link` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= inactive, 1= active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_name`, `project_bio`, `category`, `clint_name`, `project_language`, `project_preview_link`, `image`, `status`) VALUES
(1, 'Admin Panel', 'Web Developer project file', 'Web Development', 'Korim', 'HTML, CSS, Javascript', 'preview.com', 'abc.jpg', 1),
(2, 'Ciara Stone', 'Iure voluptas id lor', 'Duis qui fugiat temp', 'Shelly Robles', 'Consequatur quia ni', 'Omnis voluptatibus n', '', 1),
(3, 'Ciaran Raymond', 'Ea cupiditate atque ', 'Commodi exercitation', 'Meredith Leach', 'Sint cillum Nam exer', 'Officiis quis enim i', '', 1),
(4, 'Cole Golden', 'Consequatur qui sae', 'Ea est exercitatione', 'Venus Stafford', 'Ad est atque ratione', 'Quo quis eaque dolor', '', 1),
(5, 'Luke Gregory', 'Do id quas velit ex', 'Voluptatem Placeat', 'Shoshana Slater', 'Quis ut consectetur', 'Sed quia vel tempore', '', 1),
(6, 'Montana Knox', 'Alias non ut recusan', 'Incidunt libero ill', 'Aileen Kline', 'Voluptas ea earum te', 'Aut veniam officiis', '', 1),
(7, 'Paki Mckinney', 'Cupidatat ipsa exer', 'Iste dolor aut delec', 'Charlotte Boyd', 'Dolore autem volupta', 'Recusandae Beatae s', '', 1),
(8, 'Octavius Dale', 'Sequi culpa impedit', 'Corrupti nesciunt ', 'Buckminster Barnes', 'Eius commodi consequ', 'Sunt blanditiis natu', '', 1),
(9, 'Anastasia Manning', 'Ad fuga Et ut sit ', 'Harum consequuntur e', 'Colleen Gray', 'Dolore odit sunt aut', 'Neque laborum neque ', '', 1),
(10, 'Murphy Luna', 'Est quo blanditiis n', 'Ullamco ad alias ips', 'Regan Morris', 'Excepturi consequat', 'Veniam excepteur re', '', 1),
(11, 'Rajah Castillo', 'Dolor ratione archit', 'Eum facilis ratione ', 'Iris Nelson', 'Molestias nisi tenet', 'Beatae exercitation ', '', 1),
(12, 'Chava Cameron', 'Dolores quasi assume', 'Lorem enim sequi aut', 'Iris Morales', 'Nesciunt sit et lab', 'Ut rerum iusto nostr', '', 1),
(13, 'Kelly Leach', 'Quo corrupti elit ', 'Et ea consequuntur e', 'Clinton Grant', 'Proident doloribus ', 'Repudiandae corrupti', '', 1),
(14, 'Gareth Wise', 'Velit possimus reru', 'Laudantium earum ve', 'Drake England', 'Ea aute et iste in m', 'Nostrud iusto minim ', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `percentage` int(3) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skill_name`, `percentage`, `experience`, `status`) VALUES
(1, 'PHP', 76, '1', 1),
(2, 'HTML', 86, '3', 1),
(3, 'Martina Ferguson', 0, 'Non veniam qui maio', 1),
(4, 'Roth Eaton', 0, 'Commodi dolores veli', 1),
(5, 'Lana Clemons', 0, 'Dolor alias aut est', 1),
(6, 'Blaine Alvarez', 0, 'Vero eveniet a corp', 1),
(7, 'Imani Nielsen', 0, 'In pariatur Dolorem', 1),
(8, 'Cathleen Mack', 120, 'Ea exercitation illo', 1),
(9, 'Vielka Henderson', 110, 'Deleniti voluptatum ', 1),
(10, 'Jenette Randolph', 500, 'Ipsum rerum ex ea e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `social_media_name` varchar(100) NOT NULL,
  `social_media_link` text NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0= deactive , 1= active '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_media_name`, `social_media_link`, `status`) VALUES
(1, 'facebook', 'facebook.com', 1),
(2, 'facebook', 'facebook.com', 1),
(3, 'Acton Rosales', 'Consequatur Quia su', 1),
(4, 'Acton Rosales', 'Consequatur Quia su', 1),
(5, 'Acton Rosales', 'Consequatur Quia su', 1),
(6, 'Acton Rosales', 'Consequatur Quia su', 1),
(7, 'Acton Rosales', 'Consequatur Quia su', 1),
(8, 'Hanna Marsh', 'Distinctio Nesciunt', 1),
(9, 'Caldwell Campos', 'Eiusmod reprehenderi', 1),
(10, 'Sophia Schwartz', 'Beatae alias ex reru', 1),
(11, 'Acton Rosales', 'Consequatur Quia su', 1),
(12, 'Acton Rosales', 'Consequatur Quia su', 1),
(13, 'Mufutau Mendoza', 'Dolor nostrud dolore', 1),
(14, 'Avram Monroe', 'Ex non est ea illo ', 1),
(15, 'Colt Lynch', 'Sit unde at cupidita', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_info`
--
ALTER TABLE `about_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_work`
--
ALTER TABLE `about_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_edit_section`
--
ALTER TABLE `home_edit_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_info`
--
ALTER TABLE `about_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_work`
--
ALTER TABLE `about_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_edit_section`
--
ALTER TABLE `home_edit_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
