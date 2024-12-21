-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2024 at 04:19 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `count` int(11) NOT NULL,
  `id` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`count`, `id`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `doctor` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `mobile`, `doctor`, `date`, `time`, `problem`) VALUES
(1, 'John Doe', 'john.doe@example.com', '1234567890', 'Dr. Michael Johnson', '2024-04-05', '10:00 AM', 'Check-up for fever and cough'),
(2, 'Jane Smith', 'jane.smith@example.com', '9876543210', 'Dr. Jen Wong', '2024-04-06', '02:30 PM', 'Consultation for back pain'),
(3, 'Michael Johnson', 'michael.johnson@example.com', '5555555555', 'Dr. Emily Chen', '2024-04-07', '11:45 AM', 'Follow-up for diabetes management'),
(4, 'Emily Davis', 'emily.davis@example.com', '1112223333', 'Dr. Sarah Patel', '2024-04-08', '03:15 PM', 'Dental check-up and cleaning'),
(5, 'Christopher Wilson', 'chris.wilson@example.com', '4444444444', 'Dr. David Lee', '2024-04-09', '09:30 AM', 'Eye examination and prescription renewal'),
(6, 'Jessica Martinez', 'jessica.martinez@example.com', '6666666666', 'Dr. Sarah Patel', '2024-04-10', '01:00 PM', 'Annual physical examination'),
(7, 'Matthew Anderson', 'matthew.anderson@example.com', '7777777777', 'Dr. Jen Wong', '2024-04-11', '10:45 AM', 'Therapy session for anxiety management'),
(8, 'Sarah Taylor', 'sarah.taylor@example.com', '8888888888', 'Dr. Michael Johnson', '2024-04-12', '02:00 PM', 'Blood pressure monitoring and medication adjustment'),
(9, 'Daniel Thomas', 'daniel.thomas@example.com', '9999999999', 'Dr. Emily Chen', '2024-04-13', '11:30 AM', 'Allergy testing and treatment discussion'),
(10, 'Amanda Garcia', 'amanda.garcia@example.com', '1231231234', 'Dr. David Lee', '2024-04-14', '03:45 PM', 'Nutritional counseling and diet planning'),
(11, 'Jerome Kirkland', 'kifogojyx@mailinator.com', '1231231234', 'Dr. Emily Chen', 'Friday, April 5, 2024', '1:00 PM', 'Ipsum voluptas iusto'),
(12, 'Name', 'email@mail.com', '66666666', 'Dr. Sarah Patel', 'Thursday, April 11, 2024', '10:00 AM', 'Sleep deprived '),
(13, 'Ratandeep Singh', 'ratandeep@gmail.com', '123456789', 'Dr. Emily Chen', 'Sunday, April 7, 2024', '6:00 PM', 'Want to check up my Eyesight'),
(14, 'Sharon Powers', 'sofo@mailinator.com', 'Porro repellendus P', 'Dr. David Lee', 'Tuesday, April 9, 2024', '2:30 PM', 'Proident ut exercit');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'Inquiry about COVID-19 Vaccination', 'Hello,\r\n\r\nI would like to inquire about the availability of COVID-19 vaccination at your clinic. Can you please provide me with information regarding the vaccine types offered, appointment scheduling, and any eligibility criteria? Thank you.'),
(2, 'Jane Smith', 'jane.smith@example.com', 'Question about Flu Symptoms', 'Dear Sir/Madam,\r\n\r\nI have been experiencing flu-like symptoms recently and I am concerned about my health. Could you please advise me on the typical duration of flu symptoms and whether I should seek medical attention? Thank you for your assistance.'),
(3, 'Michael Johnson', 'michael.johnson@example.com', 'Enquiry about Diabetes Management', 'Hello,\r\n\r\nI am interested in learning more about diabetes management strategies. Can you provide information on dietary recommendations, exercise plans, and medication options for controlling blood sugar levels? Your guidance would be greatly appreciated.'),
(4, 'Emily Davis', 'emily.davis@example.com', 'Question about Allergies', 'Dear Doctor,\r\n\r\nI have been experiencing frequent allergic reactions lately and I am unsure about the triggers. Could you please advise me on common allergens and recommend any tests or treatments for identifying and managing my allergies? Thank you for your assistance.'),
(5, 'Christopher Wilson', 'chris.wilson@example.com', 'Inquiry about Asthma Treatment', 'Hello,\r\n\r\nI have been diagnosed with asthma and I am seeking information about effective treatment options. Can you please provide details on inhalers, medications, and lifestyle changes that can help manage asthma symptoms? Thank you for your time.'),
(6, 'Jessica Martinez', 'jessica.martinez@example.com', 'Question about Heart Health', 'Dear Doctor,\r\n\r\nI am concerned about my heart health and would like to know more about preventive measures and screenings for heart diseases. Can you provide guidance on maintaining a healthy heart and detecting any potential issues early? Thank you for your assistance.'),
(7, 'Matthew Anderson', 'matthew.anderson@example.com', 'Enquiry about Mental Health Services', 'Hello,\r\n\r\nI am interested in seeking mental health support and would like to know more about the services offered at your clinic. Can you provide information on therapy options, counseling sessions, and support groups available? Thank you for your assistance.'),
(8, 'Sarah Taylor', 'sarah.taylor@example.com', 'Question about Vaccination Side Effects', 'Dear Doctor,\r\n\r\nI am considering getting vaccinated against COVID-19 and I have some concerns about potential side effects. Could you please provide information on common side effects of the vaccine and how they can be managed? Thank you for your guidance.'),
(9, 'Daniel Thomas', 'daniel.thomas@example.com', 'Inquiry about Cancer Screening', 'Hello,\r\n\r\nI am interested in scheduling a cancer screening and would like to know more about the procedure and its importance for early detection. Can you provide information on available screening tests and their accuracy in detecting cancer? Thank you for your assistance.'),
(10, 'Amanda Garcia', 'amanda.garcia@example.com', 'Question about Nutrition and Diet', 'Dear Nutritionist,\r\n\r\nI am looking to improve my overall health through better nutrition and diet choices. Can you provide guidance on creating a balanced meal plan and incorporating essential nutrients into my diet? Thank you for your expertise.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(50) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `gender`, `age`, `city`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'password123', 'Male', 30, 'New York'),
(2, 'Jane Smith', 'jane.smith@example.com', 'letmein', 'Female', 25, 'Los Angeles'),
(3, 'Michael Johnson', 'michael.johnson@example.com', 'securepass', 'Male', 35, 'Chicago'),
(4, 'Emily Davis', 'emily.davis@example.com', 'p@ssw0rd', 'Female', 28, 'Houston'),
(5, 'Christopher Wilson', 'chris.wilson@example.com', 'password123', 'Male', 32, 'Philadelphia'),
(6, 'Jessica Martinez', 'jessica.martinez@example.com', '123456', 'Female', 27, 'Phoenix'),
(7, 'Matthew Anderson', 'matthew.anderson@example.com', 'qwerty', 'Male', 29, 'San Antonio'),
(8, 'Sarah Taylor', 'sarah.taylor@example.com', 'abc123', 'Female', 31, 'San Diego'),
(9, 'Daniel Thomas', 'daniel.thomas@example.com', 'iloveyou', 'Male', 33, 'Dallas'),
(10, 'Amanda Garcia', 'amanda.garcia@example.com', 'football', 'Female', 26, 'San Jose'),
(11, 'Ratandeep Singh', 'ratandeep@ccmail.uk', '1234', 'Male', 19, 'Patna, Bihar'),
(12, 'Janavi kumari', 'janavikumari5589@gmail.com', 'suwar4736', 'female', 24, 'Patna'),
(13, 'Vladimir Vargas', 'gujowyka@mailinator.com', 'Pawrd123!', 'female', 28, 'Rerum sequi aut atqu'),
(14, 'Name', 'email@mail.com', 'Abc123$%^', 'male', 23, 'Patna'),
(15, 'RatanDeep Singh', 'ratandeep1017@gmail.com', 'Hello123!', 'male', 30, 'Patna, Bihar'),
(16, 'Stacey Mathews', '123@123.com', '123Hack!', 'male', 85, 'Quam aliquip dolor p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
