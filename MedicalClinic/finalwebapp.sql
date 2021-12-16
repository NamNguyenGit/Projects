-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 12:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalwebapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `symptom` varchar(225) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_id`, `phone`, `date`, `symptom`, `service_id`, `price`, `status`, `updated_at`, `created_at`) VALUES
(8, 3, '0328090355', '2021-10-29', 'Covid-19', 8, 4000, 2, '2021-10-26 19:44:55', '2021-10-26 18:39:23'),
(9, 3, '0328090355', '2021-10-29', 'Covid-19', 8, 4000, 2, '2021-10-26 19:58:50', '2021-10-26 18:43:44'),
(10, 3, '0328090355', '2021-10-29', 'Covid-19', 8, 4000, 2, '2021-10-26 20:02:16', '2021-10-26 18:43:46'),
(11, 3, '0328090355', '2021-11-19', 'Covid-19', 9, 4000, 1, '2021-10-26 18:46:53', '2021-10-26 18:46:53'),
(12, 3, '0328090355', '2021-10-29', 'headache', 9, 4000, 1, '2021-10-26 18:52:00', '2021-10-26 18:52:00'),
(13, 3, '0328090355', '2021-10-29', 'Covid-19', 9, 4000, 1, '2021-10-26 18:54:23', '2021-10-26 18:54:23'),
(14, 3, '0328090355', '2021-10-29', 'Covid-19', 9, 4000, 1, '2021-10-26 18:55:53', '2021-10-26 18:55:53'),
(15, 5, '03280903551', '2021-10-29', 'Hungry every night', 8, 4000, 2, '2021-10-27 00:48:34', '2021-10-27 00:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext NOT NULL,
  `smallcontent` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date`, `title`, `content`, `smallcontent`, `image`, `updated_at`, `created_at`) VALUES
(2, '2021-10-20 02:42:19', 'Life and breath: outliving lung cancer', 'Are you still looking for trusted advice for a healthier life? Harvard Health Publishing is the media and publishing division of the Harvard Medical School of Harvard University, under the direction of Dr. David H. Roberts, Dean for External Education. The goal of these publications is to bring people around the world the most current health information that is authoritative, trustworthy, and accessible, drawing on the expertise of the 10,000+ faculty physicians at Harvard Medical School. Join the discussion with experts from Harvard Health Publishing and others on a variety of health topics, medical news, and views.This is an extremely helpful and informative blog which helps patients and doctors find a new and better way to talk to each other. Its purpose is to create a dialogue between patients and doctors where they can discuss important healthcare issues, such as the new health law, government health insurance programs (Medicare, Medicaid and TRICARE), health insurance, and hundreds of other topics. You are invited to join the discussion. Subscribe to the blog and feel free to ask questions, share your concerns and insights. A candid dialog about health care issues is possible here.', 'I am back home now trying to relearn simple things, such as typing and walking. My group of friends and family have been amazingly supportive. I have also been very appreciate of messages, flowers, and food sent my way.', 'gallery-1.jpg', '2021-10-25 10:47:14', '2021-10-19 19:42:19'),
(3, '2021-10-20 02:47:10', 'The Head : Center of the body', 'Bookmark this blog if you are one who follows all the health-related happenings. Kaiser Health News (KHN) is a nonprofit news service committed to in-depth coverage of health care policy and politics. They report on how the healthcare system – hospitals, doctors, nurses, insurers, governments, consumers – works. Their stories are published by news organizations throughout the country. Do not forget to check daily summaries of major health care news. From this blog, you can learn about common myths in the field of health, and the nearest medical conferences and forums.\r\nThis is the blog of Danielle Ward, a 31-year-old African-American female and single mother. She is very passionate about food, travel, science, and medicine. This blog consists of her journey through medical school and residency, along with helpful tips for both premedical and medical students alike. Danielle’s goal is to inspire and encourage millions of followers to reach for the stars (while having a little fun along the way)! Created in December 2013, the blog offers 1 post per month.', 'Featuring first-person perspectives from the HIV and AIDS community, TheBody  is an impressive network of bloggers who contribute to HIV topics tailored for specific audiences.', 'gallery-2.jpg', '2021-10-26 05:25:12', '2021-10-19 19:47:10'),
(4, '2021-10-20 04:19:36', 'The secret behind a truly healthy smile', 'Join 49,679 Facebook fans and 3,453 Twitter followers of this blog. Physician\'s Weekly is the nation’s leading multimedia, point-of-care publication. Physician’s Weekly provides trusted medical news to healthcare professionals in nearly 10,000 top medical institutions, linking current and best healthcare practices to successfully meet today’s challenges in the medical field. Physician’s Weekly print publication is delivered in a convenient “front page” poster format and updates time-crunched physicians on free CME opportunities and the latest developments in their respective fields, inspiring optimal medical decisions and patient care. Subscribe to the blog to be informed of trusted medical news.Are you curious about who they are? They are 18,000 physicians and medical students in all 50 states. They practice and study in the largest cities and the smallest towns of America from New York City to Oklahoma City. They work in private practices, academic centers, community health centers, and government-run systems like the Veteran\'s Affairs and the Indian Health Service. And they are together to improve our healthcare system. Their mission is to build a robust and sustainable national movement and improve the health of the nation.', 'At its heart, National Smile Month is all about learning what we can do to have a clean and healthy mouth. By being aware of what we can do to develop and maintain good oral health.', 'gallery-3.jpg', '2021-10-25 10:47:29', '2021-10-19 21:19:36'),
(5, '2021-10-20 04:32:13', 'Mouth Cancer – \'Learn, Check, Talk\'', 'Within the CQC’s Key Lines of Enquiry, inspectors are now looking for evidence that our teams care about safeguarding patients against oral cancer. Not only does an oral cancer management system in practice safeguard your patients’ oral and systemic health but also assists in meeting our professional obligation to do so. My take home message is definitely “Learn, check, talk and educate”.Join Medical Dialogues, a team of young professionals who share a free flow of medical information, health, and medical news. This platform is for medical professionals as well as other people associated with the healthcare sector in India, to see the latest developments happening in the healthcare sector, seek relevant medical information and update them regularly. The internet is full of different information. Save your time and energy, and read relevant resources only. This is a unique platform for consolidated news in the healthcare sector, including medical news, pharmaceutical news, news related to the latest medical technology, and much more.', 'Plenty of medical institutions have blogs, but Cedars-Sinai’s stands out for covering genuinely interesting topics. Instead of numerous posts about their faculty and facilities, expect to read about health topics relevant to just about everyone.', 'gallery-4.jpg', '2021-10-25 10:47:36', '2021-10-19 21:32:13'),
(8, '2021-10-25 07:45:12', 'Building a Successful Career', 'Despite an early and severe diagnosis with FSHD, one of our researchers from the Lek Lab at Yale School of Medicine, Justin Cohen, has persevered. After being told the world was not designed for his success, he created one that did.\r\nHis best advice for younger patients: “do not despair when facing the numerous barriers of living in an inaccessible world. No one is alone in their fight and there are resources out there to help you succeed, so long as you continue to seek them out.  As long as we do not give up, we are making a difference.”\r\nRead about his fight for accessibility in his academic and professional endeavors that led him to take action against his own rare disease here.Terry Horgan, who was diagnosed with Duchenne muscular dystrophy as a child, has turned his passion for computers and internet technology into an IT profession.\r\nTerry’s advice for younger patients: “I think everything depends on a person’s outlook in life. If you have a positive outlook, you can do almost anything. And so my advice is don’t look at a disability as something that is an end all be all. Yes, it’s a terrible disease but it won’t stop you from being the next Bill Gates or Mark Zuckerberg. Society is more accessible than it’s ever been and it’s important to follow your passions…The other piece of advice is to advocate for yourself. Doctors and others can sometimes think they know it all and are just there to tell you what to do. The perspective of the person living with the disease is very important and should be included in all aspects of care.”', 'Leading up to Rare Disease Day 2021, we highlighted people in our community who have overcome the challenges associated with a rare disease diagnosis and started a successful career. On the CRD blog, we shared stories from people from all backgrounds .', 'gallery-5.jpg', '2021-10-25 10:47:54', '2021-10-25 00:45:12'),
(9, '2021-10-25 07:46:24', 'Simple Tips to A Healthier Diet', 'A healthy lifestyle begins with nutrition. A healthy diet does not mean depriving yourself of foods you really enjoy. Proper nutrition is about having a balanced diet and listening to how your body feels. This includes a balance of protein, fat, carbohydrates, fiber, vitamins, and minerals. Limit processed foods and how much salt you consume. Stay close to fresh ingredients, made the way nature intended. \r\n\r\nTo avoid being overwhelmed, start with minor changes. Soon these changes will turn into daily habits you do not even think about. When grocery shopping, purchase healthy choices. Do not surround yourself at home with unhealthy snacks. It is challenging to avoid unhealthy snacking if chips and candy are easily accessible to you.\r\nDo not tell your mind any foods are “off-limits.” This creates a greater temptation to indulge and want these foods more. If you are craving chocolate, eat a piece of chocolate! Do not eat ten pieces of chocolate but enjoy a small portion. Portion control is a big part of maintaining a healthy diet. The bottom line is to avoid processed foods, focus on consuming fruits and vegetables, listen to your body, and create reasonable portion sizes. Follow these simple tips, and having a healthy lifestyle is right around the corner!', 'It’s no surprise that most people steered off track of their healthy habits during the summer and the pandemic. Getting back on track can be overwhelming and challenging for some.To avoid being overwhelmed, start with minor changes.', 'gallery-6.jpg', '2021-10-25 10:48:03', '2021-10-25 00:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `status` tinyint(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `messages`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Nguyễn Hoàng Nam', 'Blackkaise06012001@gmail.com', 'Hello clinic , I want to ask about the services ?', 2, '2021-10-25 10:13:09', '2021-10-24 20:27:02'),
(2, 'Nguyễn Hoàng Nam', 'namnh.bi10-123@st.usth.edu.vn', 'I want to ask about the price ?', 2, '2021-10-25 10:13:14', '2021-10-24 20:29:29'),
(3, 'Nguyễn Hoàng Nam', 'Blackkaise06012001@gmail.com', 'I want to ask about the appointment ?', 2, '2021-10-26 02:17:03', '2021-10-24 20:46:35'),
(11, 'Nguyễn Hoàng Nam', 'Blackkaise06012001@gmail.com', 's', 1, '2021-10-25 07:19:36', '2021-10-25 07:19:36'),
(12, 'Nguyễn Hoàng Nam', 'Blackkaise06012001@gmail.com', 'Hello , I want ask about the time ?', 1, '2021-10-25 10:14:34', '2021-10-25 10:14:34'),
(14, 'Nguyen Huy Hung', 'Blackkaise06012001@gmail.com', 'I want ask about the time ?', 1, '2021-10-27 00:53:12', '2021-10-27 00:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `specialty_id` int(11) NOT NULL,
  `experience` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `specialty_id`, `experience`, `image`, `updated_at`, `created_at`) VALUES
(2, 'Nguyen Hoang Nam', 2, '20 years', 'doc1.png', '2021-10-25 10:26:28', '2021-10-19 09:53:50'),
(3, 'Nguyen Quoc Hung', 1, '20 years', 'doc2.png', '2021-10-25 10:26:50', '2021-10-19 10:02:52'),
(4, 'Nguyen Ngoc Hai', 3, '20 years', 'doc7.png', '2021-10-25 10:27:07', '2021-10-19 10:04:43'),
(8, 'Nguyen The Anh', 6, '20 years', 'doc6.png', '2021-10-25 10:24:40', '2021-10-24 11:20:49'),
(9, 'Nguyen Huy Hung', 3, '20 years', 'doc5.png', '2021-10-25 10:24:54', '2021-10-24 11:23:00'),
(10, 'Hoang Huu Huy', 2, '30 years', 'doc1.png', '2021-10-25 10:27:19', '2021-10-24 11:23:17'),
(12, 'Ngo Van Can', 6, '20 years', 'doc6.png', '2021-10-25 10:28:03', '2021-10-25 10:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `bhyt` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `address` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `username`, `password`, `name`, `dob`, `gender`, `cmnd`, `bhyt`, `phone`, `mail`, `address`, `remember_token`, `updated_at`, `created_at`) VALUES
(3, 'hai', '$2y$10$zyj6J.yVrANb0RiPP3h/yeIHl1SNHeRMtKjrPlRpmgnymolPFEMYi', 'Nguyễn Hoàng Nam', '2021-10-01', 'Male', 99999, 111, '0328090355', 'Blackkaise06012001@gmail.com', 'Quốc Tử Giám', 'WtZYYwDeV8ojCaD7pV5verQQgUKg6BElkVtaAGjfshyKzIlzka8Q6s3qudAN', '2021-10-27', '2021-10-26 04:58:40'),
(4, 'haideptrai', '$2y$10$XIvhH5e2oFtBhtJgwPxt9e/Q22xwwH2wHur6atpZECi93H9dqhJ/.', 'Nguyen Ngoc Hai', '2021-10-30', 'Female', 12, 2, '03280903552', 'hai@gmail.com', 'Quốc Tử Giám', '36TgZdvJfKEpHztLyCEs4QZLc9JQWkR1gmHPaHsU0PGNCBeg3G5BENOeVP9G', '2021-10-26', '2021-10-26 05:02:23'),
(5, 'huyhung1', '$2y$10$NWdNZBJ/d2CjRqxn4O/4wutFP8lheyl29boCt4ClL3GdZxpkpP6bG', 'Nguyen Huy Hung', '2021-09-29', 'Female', 123456789, 123456789, '03280903551', 'Blackkaise06012001@gmail.com', 'Quốc Tử Giám', 'WHW2ZhAflB3xkD7aviTG7JYejL05v7biahBjttaRFsoOgehA5dLi6gByDLeP', '2021-10-27', '2021-10-27 00:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `benefit` longtext NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `benefit`, `updated_at`, `created_at`) VALUES
(1, 'Primary care services', 400, 'Your primary care doctor is uniquely positioned to help you avoid health problems. Based on the doctor’s examination and your medical history, he or she can determine whether you’re at increased risk for conditions like high blood pressure, diabetes, heart disease and cancer, and then help you take steps to prevent them from developing.', '2021-10-21 03:23:02', '2021-10-20 06:25:22'),
(8, 'Mental health and drug treatment', 8000, 'Imagine being free of the symptoms you’re currently facing. Without depression, anxiety, stress, and other psychological problems weighing you down, you can live your life to the fullest.', '2021-10-21 03:20:46', '2021-10-21 03:20:46'),
(9, 'Emergency medical services personnel', 4000, 'Improved concentration, enhanced creativity, reduced absenteeism, increased productivity and better overall performance are all very real benefits of good mental health.', '2021-10-21 03:24:14', '2021-10-21 03:24:14'),
(10, 'Physical, occupational', 2000, 'Some patients may need help relearning how to perform daily duties or improve their speech after an illness or injury. A physical therapist can put together a plan of care to help a patient regain or strengthen use of muscles and joints. An occupational therapist can help a patient with physical, developmental, social, or emotional disabilities relearn how to perform such daily functions as eating, bathing, dressing, and more. A speech therapist can help a patient with impaired speech regain the ability to communicate clearly.', '2021-10-27 03:25:43', '2021-10-27 03:12:11'),
(11, 'Medical social services', 5000, 'Medical social workers provide various services to the patient, including counseling and locating community resources to help the patient in his or her recovery. Some social workers are also the patient\'s case manager--if the patient\'s medical condition is very complex and requires coordination of many services.', '2021-10-27 03:12:32', '2021-10-27 03:12:32'),
(12, 'Nursing care', 10000, 'The most common form of home health care is some type of nursing care depending on the person\'s needs. In consultation with the doctor, a registered nurse will set up a plan of care. Nursing care may include wound dressing, ostomy care, intravenous therapy, administering medication, monitoring the general health of the patient, pain control, and other health support.', '2021-10-27 03:14:29', '2021-10-27 03:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE `specialty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specializing` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`id`, `name`, `specializing`, `updated_at`, `created_at`) VALUES
(1, 'Aids', 'Detection and treatment HIV , Aids  ', NULL, '2021-10-21 11:13:02'),
(2, 'Lung', 'Bronchitis, Pneumonia, Asthma, Lung cancer\r\nPleurisy, Pulmonary embolism.', NULL, '2021-10-21 11:13:02'),
(3, 'Oncology', 'Non-melanoma skin cancer, Breast cancer , Lung cancer, Stomach cancer,Prostate cancer.', '2021-10-21 04:16:17', '2021-10-21 11:13:02'),
(4, 'Surgery', 'Orthopedic, neurological, cardiovascular or plastic surgery', '2021-10-21 04:13:06', '2021-10-21 04:13:06'),
(5, 'Gynecology', 'Obstetrics, or pregnancy and childbirth, menstruation and fertility issues, sexually transmitted infections (STIs), hormone disorders, and others.', '2021-10-21 04:15:27', '2021-10-21 04:15:27'),
(6, 'Endocrinology', 'Endocrinology, a branch of medicine devoted to the study of hormonal glands and the diseases and disorders that affect them. The specialty involves the evaluation of a wide range of symptoms in relation to a deficiency or excess of hormones', '2021-10-21 04:17:26', '2021-10-21 04:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Namadmin', 'admin@gmail.com', '$2y$10$EkcF4zMbAMlIPXguTQkHIe2Hr7MySztxP0qyVWSEcVL3W1lyKHGtC', 'NamManager', 'Yk0vD9bENFhqAyypEbNqTV5DyuGpqt58Hzox8kwqQ8PmsVbGrDUPXSMjpTwq', '2021-10-18 10:30:14', '2021-10-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PersonOrder` (`patient_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialty_id` (`specialty_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `bhyt` (`bhyt`),
  ADD UNIQUE KEY `cmnd` (`cmnd`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `specialty`
--
ALTER TABLE `specialty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`specialty_id`) REFERENCES `specialty` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
