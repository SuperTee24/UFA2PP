-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2019 at 10:25 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revelsoft_seem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_detail`
--

CREATE TABLE `tb_about_detail` (
  `detail_id` int(11) NOT NULL,
  `detail_title_en` varchar(1000) NOT NULL,
  `detail_title_th` varchar(1000) NOT NULL,
  `detail_en` text NOT NULL,
  `detail_th` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_about_detail`
--

INSERT INTO `tb_about_detail` (`detail_id`, `detail_title_en`, `detail_title_th`, `detail_en`, `detail_th`) VALUES
(1, 'WELCOME TO SEEm Engineering', ' ยินดีต้อนรับสู่SEEm Engineering', '<p>Nemo enim ipsam voluptatem quia voluptassit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>\r\n', '<p>Nemo สำหรับ ipsam voluptatem quia voluptassit aspernatur หรือจาก fugit, ซึ่งเป็นผลมาจากภาพที่ใหญ่โตของ eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>\r\n'),
(2, 'WELCOME TO OUR COMPANY', 'ยินดีต้อนรับสู่ บริษัท ของเรา', '<p><span style=\"font-size:18px\"><strong>SEEm Engineering Consultant Co.,Ltd.</strong></span></p>\r\n\r\n<p>Established since 1995 distributes a variety range of metal cutting tools and measuring tools. All products are imported products from USA, UK, China ,Taiwan, and Korea which well known world wide.The company is also provider of tools management system.We have experienced engineers team including engineers from the manufacturer. To provide technical advice and development to achieve maximum efficiency for our customers.</p>\r\n', '<p><span style=\"font-size:18px\"><strong>บริษัท ซีอีเอ็มเอ็นจิเนียริ่งคอนซัลแตนท์ จำกัด</strong></span></p>\r\n\r\n<p>ก่อตั้งขึ้นตั้งแต่ปี 1995 จัดจำหน่ายเครื่องมือตัดโลหะและเครื่องมือวัดที่หลากหลาย ผลิตภัณฑ์ทั้งหมดเป็นผลิตภัณฑ์นำเข้าจากอเมริกาอังกฤษจีนไต้หวันและเกาหลีซึ่งเป็นที่รู้จักกันดีทั่วโลกนอกจากนี้ บริษัท ยังเป็นผู้ให้บริการระบบการจัดการเครื่องมือเรามีทีมวิศวกรที่มีประสบการณ์รวมถึงวิศวกรจากผู้ผลิต เพื่อให้คำแนะนำด้านเทคนิคและการพัฒนาเพื่อให้เกิดประสิทธิภาพสูงสุดสำหรับลูกค้าของเรา</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_header`
--

CREATE TABLE `tb_about_header` (
  `about_header_id` int(100) NOT NULL,
  `about_header_title_th` varchar(1000) NOT NULL,
  `about_header_title_en` varchar(1000) NOT NULL,
  `about_header_img` varchar(1000) NOT NULL,
  `project_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_about_header`
--

INSERT INTO `tb_about_header` (`about_header_id`, `about_header_title_th`, `about_header_title_en`, `about_header_img`, `project_img`) VALUES
(1, 'เกี่ยวกับเรา', 'ABOUT US', '22022019114037-1.jpg', '22022019140950-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_img`
--

CREATE TABLE `tb_about_img` (
  `about_img_id` int(11) NOT NULL,
  `about_detail_id` int(11) NOT NULL,
  `about_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_about_img`
--

INSERT INTO `tb_about_img` (`about_img_id`, `about_detail_id`, `about_img`) VALUES
(2, 2, '22022019141546-5.jpg'),
(5, 1, '22022019141109-2.jpg'),
(6, 1, '22022019141118-3.jpg'),
(7, 2, '22022019141538-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_project`
--

CREATE TABLE `tb_about_project` (
  `project_id` int(11) NOT NULL,
  `project_number` int(100) NOT NULL,
  `project_title_en` varchar(1000) NOT NULL,
  `project_title_th` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_about_project`
--

INSERT INTO `tb_about_project` (`project_id`, `project_number`, `project_title_en`, `project_title_th`) VALUES
(1, 10, 'Years on the Market', 'ปีในตลาด'),
(2, 326, 'Projects Completed', 'โครงการแล้วเสร็จ\r\n'),
(3, 459, 'Contractors Appointed\r\n', 'ผู้รับเหมาได้รับการแต่งตั้ง\r\n'),
(4, 23, 'Awards Won\r\n', 'รางวัลชนะเลิศ\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_why`
--

CREATE TABLE `tb_about_why` (
  `why_id` int(11) NOT NULL,
  `why_title_en` varchar(500) NOT NULL,
  `why_title_th` varchar(500) NOT NULL,
  `why_detail_en` varchar(500) NOT NULL,
  `why_detail_th` varchar(500) NOT NULL,
  `why_icon` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_about_why`
--

INSERT INTO `tb_about_why` (`why_id`, `why_title_en`, `why_title_th`, `why_detail_en`, `why_detail_th`, `why_icon`) VALUES
(1, 'PROFRESSIONAL TEAM', 'ทีมงานมืออาชีพ', 'Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack!', 'สุนัขสีน้ำตาลรีบกระโดดข้ามสุนัขจิ้งจอกขี้เกียจ เจย์, หมู, ฟ็อกซ์, ม้าลาย, และหมาป่านักต้มตุ๋นของฉัน!\r\n', '22022019152243-1.jpg'),
(2, 'WE BUILD WITH LOVE', 'เราสร้างด้วยความรัก', 'Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls.', 'คลื่นสฟิงซ์แสนสบายควอร์ตเหยือกของนมที่ไม่ดี นักต้มตุ๋นที่แย่มากอาจจะนำโชคร้ายมาให้นก\r\n', '22022019152325-2.jpg'),
(3, 'WE DELIVER ON TIME', 'เราส่งมอบตรงเวลา', 'Established since 1995 distributes a variety range of metal cutting.', 'ก่อตั้งขึ้นตั้งแต่ปี 1995 จัดจำหน่ายการตัดโลหะหลากหลายประเภท', '22022019152353-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_certification`
--

CREATE TABLE `tb_certification` (
  `certification_id` int(11) NOT NULL,
  `certification_title_en` varchar(500) NOT NULL,
  `certification_title_th` varchar(500) NOT NULL,
  `certification_detail_en` text NOT NULL,
  `certification_detail_th` text NOT NULL,
  `certification_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_certification`
--

INSERT INTO `tb_certification` (`certification_id`, `certification_title_en`, `certification_title_th`, `certification_detail_en`, `certification_detail_th`, `certification_img`) VALUES
(1, 'eiei', 'อิอิ', '<p>auau</p>\r\n', '<p>อุอุ</p>\r\n', '18022019152619-25995006_2031088440483913_7003127276465231602_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_subject` text NOT NULL,
  `contact_massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_body`
--

CREATE TABLE `tb_contact_body` (
  `contact_body_id` int(11) NOT NULL,
  `contact_body_address_en` text NOT NULL,
  `contact_body_email_en` text NOT NULL,
  `contact_body_time_en` text NOT NULL,
  `contact_body_email_th` text NOT NULL,
  `contact_body_address_th` text NOT NULL,
  `contact_body_time_th` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_header`
--

CREATE TABLE `tb_contact_header` (
  `header_id` int(11) NOT NULL,
  `header_title_en` varchar(500) NOT NULL,
  `header_title_th` varchar(500) NOT NULL,
  `header_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_home_customer`
--

CREATE TABLE `tb_home_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_title_en` varchar(500) NOT NULL,
  `customer_title_th` varchar(500) NOT NULL,
  `customer_detail_en` text NOT NULL,
  `customer_detail_th` text NOT NULL,
  `customer_img_back` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_home_customer`
--

INSERT INTO `tb_home_customer` (`customer_id`, `customer_title_en`, `customer_title_th`, `customer_detail_en`, `customer_detail_th`, `customer_img_back`) VALUES
(1, 'OUR CUSTOMER', 'ลูกค้าของเรา', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,', 'Nemo สำหรับ ipsam voluptatem quia voluptas นั่งได้อย่างไม่น่าเชื่อหรือไม่ก็หนีไปได้ Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,', '21022019145253-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_home_customer_img`
--

CREATE TABLE `tb_home_customer_img` (
  `customer_img_id` int(11) NOT NULL,
  `customer_img_icon` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_home_customer_img`
--

INSERT INTO `tb_home_customer_img` (`customer_img_id`, `customer_img_icon`) VALUES
(8, '21022019145322-1.png'),
(9, '21022019145327-2.png'),
(10, '21022019145332-3.png'),
(11, '21022019145339-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_home_slide`
--

CREATE TABLE `tb_home_slide` (
  `slide_id` int(11) NOT NULL,
  `slide_title_en` varchar(500) NOT NULL,
  `slide_title_th` varchar(500) NOT NULL,
  `slide_detail_en` text NOT NULL,
  `slide_detail_th` text NOT NULL,
  `slide_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_home_slide`
--

INSERT INTO `tb_home_slide` (`slide_id`, `slide_title_en`, `slide_title_th`, `slide_detail_en`, `slide_detail_th`, `slide_img`) VALUES
(5, 'Welcome To SEEm Enginearing ', ' ยินดีต้อนรับสู่ SEEm Enginearing', 'Nemo enim ipsam voluptatem quia voluptas\r\nsit aspernatur aut odit aut fugit, sed quia \r\nconsequuntur magni dolores eos qui ratione \r\nvoluptatem sequi nesciunt. Neque porro quisquam \r\nest, qui dolorem ipsum quia dolor sit amet, \r\nconsectetur, adipisci velit,', 'Nemo สำหรับ ipsam voluptatem quia voluptas\r\nนั่ง aspernatur หรือคิดว่าเป็นเรื่องไม่ดี\r\nผลลัพธ์ที่ได้คือภาพที่แสดงถึงความเป็นจริง\r\nฉากหลัง Neque porro quisquam\r\nเป็น, ใครก็ไม่รู้\r\nผู้ให้คำปรึกษา, adipisci velit,', '21022019143824-1.jpg'),
(6, 'Welcome To SEEm Enginearing 2', ' ยินดีต้อนรับสู่ SEEm Enginearing 2', 'Nemo enim ipsam voluptatem quia voluptas\r\nsit aspernatur aut odit aut fugit, sed quia \r\nconsequuntur magni dolores eos qui ratione \r\nvoluptatem sequi nesciunt. Neque porro quisquam \r\nest, qui dolorem ipsum quia dolor sit amet, \r\nconsectetur, adipisci velit,2', 'Nemo สำหรับ ipsam voluptatem quia voluptas\r\nนั่ง aspernatur หรือคิดว่าเป็นเรื่องไม่ดี\r\nผลลัพธ์ที่ได้คือภาพที่แสดงถึงความเป็นจริง\r\nฉากหลัง Neque porro quisquam\r\nเป็น, ใครก็ไม่รู้\r\nผู้ให้คำปรึกษา, adipisci velit,2', '21022019143932-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(11) NOT NULL,
  `type_id` int(20) NOT NULL,
  `news_name_en` varchar(500) NOT NULL,
  `news_name_th` varchar(500) NOT NULL,
  `news_description_en` varchar(500) NOT NULL,
  `news_description_th` varchar(500) NOT NULL,
  `news_detail_en` text NOT NULL,
  `news_detail_th` text NOT NULL,
  `news_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_news_header`
--

CREATE TABLE `tb_news_header` (
  `news_header_id` int(11) NOT NULL,
  `news_header_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_news_header`
--

INSERT INTO `tb_news_header` (`news_header_id`, `news_header_img`) VALUES
(1, '20022019170350-28928796_1728284417234482_1749700957_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news_type`
--

CREATE TABLE `tb_news_type` (
  `type_id` int(11) NOT NULL,
  `type_name_en` varchar(200) NOT NULL,
  `type_name_th` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_news_type`
--

INSERT INTO `tb_news_type` (`type_id`, `type_name_en`, `type_name_th`) VALUES
(1, 'News', 'ข่าวสาร'),
(2, 'Event', 'กิจกรรม');

-- --------------------------------------------------------

--
-- Table structure for table `tb_project_detail`
--

CREATE TABLE `tb_project_detail` (
  `project_detail_id` int(11) NOT NULL,
  `project_detail_type` varchar(200) NOT NULL,
  `project_detail_name_en` varchar(500) NOT NULL,
  `project_detail_name_th` varchar(500) NOT NULL,
  `project_detail_location_en` varchar(500) NOT NULL,
  `project_detail_location_th` varchar(500) NOT NULL,
  `project_detail_scope_en` varchar(500) NOT NULL,
  `project_detail_scope_th` varchar(500) NOT NULL,
  `project_detail_year` varchar(500) NOT NULL,
  `project_detail_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_project_header`
--

CREATE TABLE `tb_project_header` (
  `project_header_id` int(11) NOT NULL,
  `project_header_name_en` varchar(500) NOT NULL,
  `project_header_name_th` varchar(500) NOT NULL,
  `project_header_detail_en` text NOT NULL,
  `project_header_detail_th` text NOT NULL,
  `project_header_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_project_header`
--

INSERT INTO `tb_project_header` (`project_header_id`, `project_header_name_en`, `project_header_name_th`, `project_header_detail_en`, `project_header_detail_th`, `project_header_img`) VALUES
(1, 'eiei', 'อิอิ', 'ฮ่าๆ', 'haha', '14022019163001-25995006_2031088440483913_7003127276465231602_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_project_img`
--

CREATE TABLE `tb_project_img` (
  `img_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_project_type`
--

CREATE TABLE `tb_project_type` (
  `type_id` int(11) NOT NULL,
  `type_name_en` varchar(500) NOT NULL,
  `type_name_th` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_project_type`
--

INSERT INTO `tb_project_type` (`type_id`, `type_name_en`, `type_name_th`) VALUES
(6, 'eiei', 'อิอิ'),
(7, 'haha', 'ฮ่าฮ่า');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service_body`
--

CREATE TABLE `tb_service_body` (
  `service_body_id` int(11) NOT NULL,
  `service_body_name_en` varchar(500) NOT NULL,
  `service_body_name_th` varchar(500) NOT NULL,
  `service_body_description_en` varchar(500) NOT NULL,
  `service_body_description_th` varchar(500) NOT NULL,
  `service_body_detail_en` text NOT NULL,
  `service_body_detail_th` text NOT NULL,
  `service_body_header_img` varchar(1000) NOT NULL,
  `service_body_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_service_header`
--

CREATE TABLE `tb_service_header` (
  `service_header_id` int(11) NOT NULL,
  `service_header_title_en` varchar(500) NOT NULL,
  `service_header_title_th` varchar(500) NOT NULL,
  `service_header_detail_en` text NOT NULL,
  `service_header_detail_th` text NOT NULL,
  `service_header_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_service_header`
--

INSERT INTO `tb_service_header` (`service_header_id`, `service_header_title_en`, `service_header_title_th`, `service_header_detail_en`, `service_header_detail_th`, `service_header_img`) VALUES
(1, 'safsaf', 'safsaf', '<p>fsafsa</p>', '<p>saffsafsa</p>', '-25995006_2031088440483913_7003127276465231602_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(500) NOT NULL,
  `user_lastname` varchar(500) NOT NULL,
  `user_phone` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_username` varchar(500) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_firstname`, `user_lastname`, `user_phone`, `user_email`, `user_username`, `user_password`, `user_image`) VALUES
(1, 'ฤทธิ์ชัย ', 'จันทาโพธิ์', '091-1475599', 'ritchai.7727@gmail.com', 'admin', '123456', 'admin.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about_detail`
--
ALTER TABLE `tb_about_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tb_about_header`
--
ALTER TABLE `tb_about_header`
  ADD PRIMARY KEY (`about_header_id`);

--
-- Indexes for table `tb_about_img`
--
ALTER TABLE `tb_about_img`
  ADD PRIMARY KEY (`about_img_id`);

--
-- Indexes for table `tb_about_project`
--
ALTER TABLE `tb_about_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tb_about_why`
--
ALTER TABLE `tb_about_why`
  ADD PRIMARY KEY (`why_id`);

--
-- Indexes for table `tb_certification`
--
ALTER TABLE `tb_certification`
  ADD PRIMARY KEY (`certification_id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tb_contact_body`
--
ALTER TABLE `tb_contact_body`
  ADD PRIMARY KEY (`contact_body_id`);

--
-- Indexes for table `tb_contact_header`
--
ALTER TABLE `tb_contact_header`
  ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `tb_home_customer`
--
ALTER TABLE `tb_home_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tb_home_customer_img`
--
ALTER TABLE `tb_home_customer_img`
  ADD PRIMARY KEY (`customer_img_id`);

--
-- Indexes for table `tb_home_slide`
--
ALTER TABLE `tb_home_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tb_news_header`
--
ALTER TABLE `tb_news_header`
  ADD PRIMARY KEY (`news_header_id`);

--
-- Indexes for table `tb_news_type`
--
ALTER TABLE `tb_news_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tb_project_detail`
--
ALTER TABLE `tb_project_detail`
  ADD PRIMARY KEY (`project_detail_id`);

--
-- Indexes for table `tb_project_header`
--
ALTER TABLE `tb_project_header`
  ADD PRIMARY KEY (`project_header_id`);

--
-- Indexes for table `tb_project_img`
--
ALTER TABLE `tb_project_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tb_project_type`
--
ALTER TABLE `tb_project_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tb_service_body`
--
ALTER TABLE `tb_service_body`
  ADD PRIMARY KEY (`service_body_id`);

--
-- Indexes for table `tb_service_header`
--
ALTER TABLE `tb_service_header`
  ADD PRIMARY KEY (`service_header_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about_detail`
--
ALTER TABLE `tb_about_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_about_header`
--
ALTER TABLE `tb_about_header`
  MODIFY `about_header_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_about_img`
--
ALTER TABLE `tb_about_img`
  MODIFY `about_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_about_project`
--
ALTER TABLE `tb_about_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_about_why`
--
ALTER TABLE `tb_about_why`
  MODIFY `why_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_certification`
--
ALTER TABLE `tb_certification`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_contact_body`
--
ALTER TABLE `tb_contact_body`
  MODIFY `contact_body_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_contact_header`
--
ALTER TABLE `tb_contact_header`
  MODIFY `header_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_home_customer`
--
ALTER TABLE `tb_home_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_home_customer_img`
--
ALTER TABLE `tb_home_customer_img`
  MODIFY `customer_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_home_slide`
--
ALTER TABLE `tb_home_slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_news_header`
--
ALTER TABLE `tb_news_header`
  MODIFY `news_header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_news_type`
--
ALTER TABLE `tb_news_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_project_detail`
--
ALTER TABLE `tb_project_detail`
  MODIFY `project_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_project_header`
--
ALTER TABLE `tb_project_header`
  MODIFY `project_header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_project_img`
--
ALTER TABLE `tb_project_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_project_type`
--
ALTER TABLE `tb_project_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_service_body`
--
ALTER TABLE `tb_service_body`
  MODIFY `service_body_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_service_header`
--
ALTER TABLE `tb_service_header`
  MODIFY `service_header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
