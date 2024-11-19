-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 12:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `course_id` int(11) NOT NULL,
  `course_img` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(250) NOT NULL,
  `author_qua` varchar(250) NOT NULL,
  `author_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`course_id`, `course_img`, `course_name`, `course_desc`, `course_author`, `author_qua`, `author_desc`) VALUES
(1, '../img/courseimg/FRL.png', 'Freelancing', 'This course is meant to teach the tips and tricks of freelancing in the simplest and effective way. The do`s and don`ts are discussed, about which a freelancer must be aware of. Introduction of different types of freelance marketplaces is given in this course. Web portals like Fiverr, Upwork, and Freelancer are introduced and discussed in detail so that a trainee could effectively make money by using these portals.', 'Hisham Sarwar', 'Master of Business Administration (MBA)', 'Hisham Sarwar\r\nHisham, a seasoned freelancer has always been known to be an independent thinker and a risk-taker, proving his vision time and again.\r\nInfomist, his brainchild, was established at the time when not many had foreseen the demand for website development. Since then, it has grown leaps and bounds under his visionary leadership, perseverance and hard work. Starting with a single computer to now a medium sized team to provide the best possible services as an outsource company, Infomist is a success story. With branches in different cities and head office based in Dublin, Ireland, Infomist primarily caters to the international market.\r\nHisham`s determination, relentless energy, motivation and adaptability have proved him as a true leader. His contribution towards humanitarian causes and respect towards individuals has been exemplary.\r\nHisham is a tech social entrepreneur by heart who wants to give back to the community.'),
(2, '../img/courseimg/DGM.png', 'Digital Marketing', 'This course aims to provide trainees a deeper understanding of planning of a digital marketing campaign and the role of various digital channels in achieving that goal through integrated marketing communication. It starts by building a foundation through digital marketing strategy and helps trainees to acquire a set of concepts and tools to digitally create, distribute and promote products and services.\r\n\r\nWhether you are a business owner, a freelancer, a job seeker, a working professional, a student, or a housewife, this course is for you. If you have a smartphone or a computer, chances are that you already know and use the internet. It only makes sense that you also learn the art of promoting yourself or your business and start making money from the internet. If that sounds like a good idea, this course will help you understand digital marketing and how you can get started as a beginner and become a pro at digital marketing and start earning online or grow your business.', 'Usman Latif', 'MS in Communication Studies', 'Usman Latif is a Digital Marketer and growth hacker having over 13 years of experience. He is the founder of Marcom Works and Digital Marketing Pakistan™, a Certified Digital Guru by Google, certified trainer, and Marketing Instructor at LUMS, Punjab University, Superior University, Bahria University Lahore, and other top educational institutes in Pakistan. He is also a Digital Marketing Consultant and Trainer for the USAID SMEA program and USAID PATTA program. Furthermore, he has also conducted training sessions at the US Embassy Islamabad, US Consulate Lahore, FNF Pakistan, NIC Karachi, NIC Islamabad, NIC Lahore, i2i, and other organizations.'),
(3, '../img/courseimg/GRD.png', 'Graphic Design', 'Graphic Design, also known as communication design, is the art and practice of planning and projecting ideas and experiences with visual and textual content. This course is focused on both theoretical and practical parts. The aim of the course is to develop design sense in trainees by the help of theoretical concepts and practice.\r\nThe focus of practical part will be on designing software e.g. Adobe Photoshop and Illustrator. Different exercises related to online market requirements will be assigned to the trainees. So that they can work professionally in online market.', 'Rafay Anwer Siddiqi ', 'Bachelor in Communication Design with Distinction', 'Mr Rafay is an accomplished multi-versed Creative Director working for over two decades in the Creative media industry in Pakistan and outside Pakistan. He graduated from NCA, Lahore, in the Communication Design department (2003). He has done FA in fine arts from Government University College, Lahore, and started gaining Professional experience right after his Matric exams (1996). \r\nDuring the early learning stage, he produced animated works and client storyboards. His professional career started in media and advertising design. He joined a Lahore-based Tech company as a Multimedia Designer. Moving on from there, he joined the Broadcast Design industry as a Creative Coordinator at Express News TV. He produced many Virtual sets, Graphics, Documentaries, In-house packages, and Motion graphics there. Then he joined a Lifestyle based company as a Creative Head in Islamabad.\r\nAfter spending years in Print design, Illustration, Photography, Videography, Digital and Web design, UI design, 2D animation, and motion graphics, he joined a Game-based company, Game chefs, where he produced 20 plus titles as a Game Designer. He has produced 2D animated series for the children at Dot Republic Media.\r\nHe also went to UAE to help an international Tech startup. There, he assisted in product designing, branding, and advertisement. He gained skills in UI/UX Design, filming, Architectural photography, and Videography by joining startups, e.g., He worked as a Creative Head at a Tech Company Conrad labs and Architectural based startup Banjaiga.\r\nHe has teaching expertise at BNU Lahore for Animation Tools and Techniques Course.\r\nHe has been a Juror for many Art institutes of Pakistan, Like NCA, BNU, Comsats, Lahore/Islamabad, IAC, Gujrat University, and Lahore University for Women.\r\nCurrently, he is running a Rafay Anwer Creative Studio for design-related services.'),
(5, '../img/courseimg/SEO101_Image.png', '(SEO) (Search Engine Optimization)', 'Search Engine Optimization (SEO) empowers a business to rank higher in search engine results which helps in reaching a wider audience. Humans are inquisitive in nature and they search for answers all the time. This was made easier with the advent of technology and Google has become the go-to search engine for Billions of people all around the world. This can be achieved by understanding how Google search engine works and how it ranks websites. This course is the key to understand one of the most important skills in Digital Marketing. If businesses can learn to rank their websites on Google, then they can literally expect millions of visitors to their website with millions of opportunities to get leads and sales.\r\n\r\nThis course is in line with international curriculum standards. In this course, you will learn about what Google and Bing are, how search works, how do Search Engines rank websites, why Google is the ultimate search engine, what does it take to be a favorite in Google’s algorithm, how can you rank high for your targeted keywords, which tools and techniques do you need to outrank your competitors. In this course, you will also learn how to optimize your content and websites to rank high in those search engines, how to use tools to perform SEO, and how to run an SEO project successfully. The course is based on hands-on exercises with detailed video lectures, MCQs, and reference learning material for detailed review.', 'Usman Latif', 'MS in Communication Studies', 'Usman is a Marcom Technologist and he hacks growth for businesses with a mix of marketing, communication, and user experience (UX) strategies. He has over 10 years of experience in digital marketing and growth hacking. He is the founder of Marcom Works and Digital Marketing Pakistan™, a Certified Digital Guru by Google, certified trainer and Marketing Instructor at LUMS, top-rated Digital Marketing Consultant on UpWork with 100% Job success score. He has helped numerous companies around the globe in cracking their ROI through effective digital marketing strategies. He knows marketing inside out and has worked in marketing for the web, mobile apps, and mobile games.\r\n \r\nUsman is an accomplished industry expert and has been involved in different communities as a consultant, an expert, a guest speaker and as a mentor. He has spoken at several local and international conferences. Some of his affiliations include Google, OpenStreetMap Foundation, U.S. Embassy in Pakistan, U.S. Consulate General Lahore, The Indus Entrepreneurs (TiE), Open Ideo, Elance, Payoneer, P@SHA, Google Maps, and different universities in Pakistan.'),
(7, '../img/courseimg/COM101_Image.png', 'Communication and Soft Skills', 'This course is designed to equip freelancers with the most essential communication skills and tools needed to establish themselves in the international market. The course is divided into three components: English Language, Communication and Soft Skills.\r\n\r\nThe English Language component emphasizes on providing a basic yet comprehensive introduction to English grammar with a view to providing learners a fair command on correct English usage. It is aimed at teaching English as a secondary language to Urdu speaking audience. It covers basic to advance level knowledge of written English communication.\r\n\r\nThe component on Communication is geared to provide essentials tools of effective communication to freelancers considering the best practices vital for building and establishing cordial business relationships with the clients.\r\n\r\nThe component on Soft Skills enables freelancers to become robust professionals by grooming them in vital soft skills like leadership, teamwork, decision making, conflict resolution, problem solving, work ethics and netiquettes.', 'Dr. Altaf Ur Rehman Malik ', 'PhD in TESOL', 'Professor Altaf Malik got his PhD in TESOL and Post-Grad Diploma in Professional Studies in Education from The Open University, Milton Keynes, UK.\r\n\r\nHaving an experience of over 35 years, Professor Altaf Malik has taught English Language and Communication Skills in a number of renowned institutions like FCC University, GC University, COMSATS and FAST in addition to teaching at universities in Saudi Arabia and UK. \r\n\r\nAs an English language expert, he has taught, and groomed thousands of students become successful in their careers by mastering the art of communicating in English language. His experience is grounded in the solid foundations of action research. Besides teaching, he is presently Chief Editor of International Bulletin of Linguistics and Literature (IBLL): an international refereed journal published by Research Syndicate of which he is the cofounder. \r\n\r\nWith a vision to establishing a responsible and ethical society, Professor Altaf Malik participates in a number of community service projects including Clean-Green Pakistan and Justice Equity, a charity to support poor people get free legal services. He is also an international motorbike traveler, putting his efforts in promoting eco friendly tourism and promoting Pakistan as a safe and friendly tourist destination. '),
(8, '../img/courseimg/ECM101_Image.png', 'E-Commerce Management', 'Ever wondered how people could sell without a shop? Even if you have zero knowledge of e-commerce, this course entails covering all concepts from basic to advance e-commerce. What is Shopify? What is WooCommerce? How do you setup an online store? What are the payment gateways? What are the marketing methods to promote your e-commerce website? How to setup a store on Daraz? How to drive traffic using Google Ads, Facebook Ads and SEO? All this and more in this exclusive course on e-commerce management.\r\n\r\nIn this course, you will learn about e-commerce and its types, and how to build, launch and rank your own online store. Do not want to invest? No problem! Learn this skill and sell it online on freelance marketplaces like Upwork and Fiverr. The entire course covers everything you need to launch your own online store, sell services as a freelancer, promote your business, and explore the various types of e-commerce platforms. Gone were the days of coding. Today, you can easily build your e-commerce store through apps like Shopify, WooCommerce, and start managing your sales on the go through mobile apps. You will also learn to integrate payment gateways and other useful plugins with a process of integration with an online store.', 'Abdul Wahab', 'BS (CS), Software Engineering', 'Abdul Wahab Ahmad \r\nAbdul Wahab is a Digital Marketing Consultant, Amazon & Daraz Seller and a Professional Trainer with over 15 years of experience in eCommerce industry. He is proficient in various mandatory growth hacking tools and technologies including Google Trends, Google AdWords, Google Analytics, Google Webmasters Tools, Helium 10 and Jungle scout. In addition, he is experienced in setting up eCommerce stores using Shopify and WooCommerce. He has helped over 100 businesses to achieve their Digital Marketing and Online Sales goals.\r\n\r\nMoreover, he has successfully conducted several training programs regarding Freelancing, Selling On Amazon & other marketplaces and Digital Marketing. He has trained over hundreds of trainees in last 8 years. His trainees have been successfully serving in various industries, doing freelancing and maturing their own startups. He is a mentor for many individuals. He believes on TRUE UNLOCKING – Time Independence, Location Independence, Money Independence.\r\n\r\nHe is a Software Engineer, graduated from FAST, Lahore. He is a hard-working individual with strong analytical and leadership qualities. He is currently working as Director eMarketing Department, ABFA Technologies (PVT) Ltd and Chief Trainer at various online platforms.'),
(10, '../img/courseimg/WPS.png', 'Video Editing, Animation and Vlogging', 'The course is aimed to familiarize students with the art of Video Post-Production that is the need of current Broadcast and Digital Media Industry. It is going to be productive as well as practical course so that the learners can excel in their respective fields. This intensive practice based course will encourage students to understand from basics to advance video editing, motion graphics and Vlogging skills. They will also be able to identify and discover different Production/Post production practices and develop their own style.\r\n\r\nThis demanding Course is divided into 3 parts. The first two parts; “Video Editing and Animation” will involve trainees to learn the craft of editing, motion graphics, VFX, text animations and other post production techniques. The third part is about expressing yourself with the art of “Vlogging” that helps connect with people from all over the world. The videos created by the creator reach the audience all over the world and that\'s how it helps people connect with each other. It also helps in gaining exposure and makes the creators stand out in the community. This course will cover theory and practice of editing and focus on highlighting the roles and responsibilities of an individual carrying the fundamental skills of the expertise.\r\n\r\nThis course will not only benefit an individual to learn the skill and start earning in local, international and freelance market but it will guide you make new connections and start enjoying creative and financial freedom in broadcast, film and digital media industry.', 'Syed Umair Ali', 'M.SC Mass Communication', 'Syed Umair Ali has extensive work experience in the fields of Broadcast, Filmmaking, Electronic and Digital Media. He prides himself on working with some of the top-notch companies in Pakistan as well as abroad. He has been working with different TV Channels, Private Production Houses and Live Sports events globally for more than 20 years at their Creative, Production and Post-production side. He started his career at Shin Satellite, Thailand but since has worked for numerous mainstream TV Channels including Din News, Waqt TV, Geo TV. He has contributed his expertise to several award-winning and nominated international projects. Besides being a full-time practitioner of his craft, Mr. Umair is now dedicating his energies to coaching and facilitating future filmmakers through comprehensive trainings. He teaches at the National College of Arts (NCA), The University of Lahore, The Millennium Universal College and the Institute of Art and Culture as a visiting faculty member.\r\n\r\nLeveraging his background as a broadcaster, filmmaker, and trainer, he has supported organizations and institutes in developing the competency of Media Production and Filmmaking with their people to maximize results. Currently, he is running his own Production company “White Frog Works” and “Ask Trainings”, a training institute focusing on skills development. Mr. Umair is among very few Media professionals from Pakistan associated with Live International Sports Productions around the World and worked for events like ICC Men’s T20 World Cup Australia, Major League Cricket USA, International League T20 UAE and Pakistan Super League as an E.N.G Producer, Editor, Preditor and EVS operator. He recently completed his Broadcast Trainings from London.');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `email`, `course_id`) VALUES
(1, 'one@gmail.com', 6),
(2, ' two@gmail.com', 2),
(3, ' five@gmail.com', 7),
(4, ' one@gmail.com', 3),
(5, ' one@gmail.com', 3),
(6, ' two@gmail.com', 5),
(7, ' two@gmail.com', 8),
(8, ' two@gmail.com', 8),
(9, ' ', 7),
(10, ' two@gmail.com', 7),
(11, ' two@gmail.com', 8),
(12, ' two@gmail.com', 0),
(13, ' two@gmail.com', 0),
(14, ' two@gmail.com', 0),
(15, ' five@gmail.com', 0),
(16, ' admin@gmail.com', 0),
(17, ' two@gmail.com', 0),
(18, ' studentthree@gmail.com', 0),
(19, ' two@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `std_id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `fb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`std_id`, `feedback`, `fb_id`) VALUES
(1, 'Awesome Course', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(250) NOT NULL,
  `lesson_desc` varchar(250) NOT NULL,
  `course_id` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `lesson_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `course_id`, `course_name`, `lesson_link`) VALUES
(2, 'Lecture 1', 'lesson desc', '2', 'New Course 2', '../img/lessonvideo/Digital Marketing Promo.mp4'),
(6, 'Lecture 2', 'Introduction to the Course', '2', 'Digital Marketing', '../lessonvideo/DGM101_Topic001_New.mp4'),
(7, 'Lecture 3', 'How to Study this Course', '2', 'Digital Marketing', '../img/lessonvideo/DGM101_Topic002_New.mp4'),
(8, 'Lecture 4', 'What is Marketing?', '2', 'Digital Marketing', '../img/lessonvideo/DGM101_Topic003_New.mp4'),
(9, 'Lecture 1', 'Theory: Introduction of the Instructor and Course', '3', 'Graphic Design', '../img/lessonvideo/GRD101_Topic001_New.mp4'),
(10, 'Lecture 2', 'Theory: What will You Learn in this Course?', '3', 'Graphic Design', '../img/lessonvideo/GRD101_Topic002_New.mp4'),
(11, 'Lecture 3', 'Theory: What is Graphic Design?', '3', 'Graphic Design', '../img/lessonvideo/GRD101_Topic003_New.mp4'),
(12, 'Theory: Objectives of a Design and a Graphic Designer', 'Theory: Objectives of a Design and a Graphic Designer', '3', 'Graphic Design', '.../img/lessonvideo/DGM101_Topic003_New.mp4'),
(13, 'Lecture 1', 'Perform Pre-production, Production and Post-production process and workflow', '4', 'Video Editing, Animation and Vlogging', '../img/lessonvideo/GRD101_Topic002_New.mp4'),
(14, 'Lecture 2', 'Understand the basics of Filming and Framing Techniques', '4', 'Video Editing, Animation and Vlogging', '../img/lessonvideo/GRD101_Topic003_New.mp4'),
(15, 'Lecture 3', 'Understand Video Editing Theory and Techniques', '4', 'Video Editing, Animation and Vlogging', '../img/lessonvideo/GRD101_Topic004_New.mp4'),
(16, 'Lecture 4', 'Learn Different Video Formats, Types of Editing', '4', 'Video Editing, Animation and Vlogging', '../img/lessonvideo/GRD101_Topic001_New.mp4'),
(17, ' Introduction to Freelancing: What is Freelancing?', ' Introduction to Freelancing: What is Freelancing?', '2', 'Digital Marketing', '../lessonvideo/GRD101_Topic004_New.mp4'),
(20, 'Introduction of the instructor', 'Introduction of the instructor', '1', 'Freelancing', '../lessonvideo/DGM101_Topic001_New.mp4'),
(21, 'What is covered in the Course and Course Support', 'What is covered in the Course and Course Support', '1', 'Freelancing', '../lessonvideo/GRD101_Topic004_New.mp4'),
(22, 'Introduction to Freelancing: What is Freelancing?', 'Introduction to Freelancing: What is Freelancing?', '1', 'Freelancing', '../lessonvideo/GRD101_Topic002_New.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `stu_img` text NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstName`, `lastName`, `email`, `password`, `stu_img`, `stu_occ`, `stu_course`) VALUES
(1, 'Mr.Abc', 'LastName', 'admin@gmail.com', 'abc123', '../img/stu/carousel-1.jpg', 'Dev', 1),
(2, 'Student', 'one', 'one@gmail.com', 'one123', '../img/stu/carousel-2.jpg', 'Student', 4),
(3, 'Student ', 'two', 'two@gmail.com', 'two123', '../img/stu/courseimgCapture1.PNG', 'Student', 3),
(4, 'Student ', 'three', 'studentthree@gmail.com', 'three456', '../img/stu/courseimgCapture1.PNG', 'dev', 1),
(5, 'Student', 'four', 'four@gmail.com', 'four123', '', '', 0),
(6, 'Student ', 'five', 'five@gmail.com', 'five123', '../img/stu/course-3.jpg', 'Student', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
