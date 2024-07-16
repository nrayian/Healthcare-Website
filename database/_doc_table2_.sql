-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 10:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `docid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `specialist` varchar(50) DEFAULT NULL,
  `about` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`docid`, `name`, `email_id`, `phone_number`, `degree`, `hospital`, `address`, `specialist`, `about`) VALUES
(1, 'Prof. Dr. Nazir Ahammed Chowdhury (Ronju)', 'nazir@gmail.com', '01715771179', 'MBBS, D-CARD, FCCP, FACC', 'National Institute of Cardiovascular Diseases & Ho', 'Address: 32, Bir Uttam Shafiullah Sarak (Green Roa', 'Clinical & Interventional Cardiology Specialist', 'Prof. Dr. Nazir Ahammed Chowdhury (Ronju) is a Cardiologist in Dhaka. His qualification is MBBS, D-CARD, FCCP, FACC. He is a Former Professor in the Department of Cardiology at National Institute of Cardiovascular Diseases & Hospital. He regularly provides treatment to his patients at Green Life Hospital, Dhaka. Practicing hour of Prof. Dr. Nazir Ahammed Chowdhury (Ronju) at Green Life Hospital, Dhaka is 6pm to 9pm (Sun, Tue & Thu).'),
(2, 'Prof. Dr. Ashok Kumar Dutta', 'ashok@gmail.com', '09613787805', 'MBBS, FCPS (Medicine), MD (Cardiology), FACC (USA)', 'National Heart Foundation Hospital & Research Inst', 'Address: House # 21, Road # 7, Sector # 4, Uttara,', 'Cardiology & Medicine Specialist', 'Prof. Dr. Ashok Kumar Dutta is a Cardiologist in Dhaka. His qualification is MBBS, FCPS (Medicine), MD (Cardiology), FACC (USA). He is a Professor & Senior Consultant in the Department of Cardiology at National Heart Foundation Hospital & Research Institute. He regularly provides treatment to his patients at Popular Diagnostic Center, Uttara. Practicing hour of Prof. Dr. Ashok Kumar Dutta at Popular Diagnostic Center, Uttara is 7pm to 10pm (Only Saturday).'),
(3, 'Prof. Dr. M. Nazrul Islam', 'nazrul@gmail.com', '09613787801', 'MBBS, FCPS, FRCP (London), FESC, FACC (USA)', 'National Institute of Cardiovascular Diseases & Ho', 'Address: House # 16, Road # 2, Dhanmondi R/A, Dhak', 'Cardiology (Heart Diseases) Specialist', 'Prof. Dr. M. Nazrul Islam is a Cardiologist in Dhaka. His qualification is MBBS, FCPS, FRCP (London), FESC, FACC (USA). He is a Former Director and Professor in the Department of Cardiology at National Institute of Cardiovascular Diseases & Hospital. He regularly provides treatment to his patients at Popular Diagnostic Center, Dhanmondi. Practicing hour of Prof. Dr. M. Nazrul Islam at Popular Diagnostic Center, Dhanmondi is 3pm to 5pm (Closed: Thu & Friday).'),
(4, 'Prof. Dr. Dhiman Banik', 'dhiman@gmail.com', '0258051355', 'MBBS (DMC), D-CARD (DU), MD (Cardiology), FACC (US', 'National Heart Foundation Hospital & Research Inst', 'Address: Plot # 7/2, Section # 2, Mirpur, Dhaka', 'Cardiology & Heart Diseases Specialist', 'Prof. Dr. Dhiman Banik is a Cardiologist in Dhaka. His qualification is MBBS (DMC), D-CARD (DU), MD (Cardiology), FACC (USA). He is a Professor & Senior Consultant in the Department of Cardiology at National Heart Foundation Hospital & Research Institute. He regularly provides treatment to his patients at National Heart Foundation Hospital & Research Institute. Practicing hour of Prof. Dr. Dhiman Banik at National Heart Foundation Hospital & Research Institute is Unknown. Please call to know visiting hour.'),
(5, 'Dr. Md. Imran Hossain', 'imran@gmail.com', '01789280929', 'BDS (DU), PhD (Dental Surgery) France, MSS (Clinic', 'Dental View Orthodontics & Implant Center', 'Address: House No # 67/C, Road # 11, Block # E, Ba', 'Dental Implant, Invisalign, Dental Braces, Smile D', 'Dr. Md. Imran Hossain is a one of the best Dentist in Dhaka. His qualification is BDS (DU), PhD (Dental Surgery) France, MSS (Clinical) DU, MPH (USA), PGT (Orthodontic), PGT (OMS) BSMMU, Research Fellow & Surgeon (STRC Project, Smile Train, USA), Advanced Implantology (Thailand), Invisalign (Thailand & India), Advance Training in Fixed Orthodontic Braces, Implantology & Laser Dentistry (India). He is a Chief Consultant at Dental View Orthodontics & Implant Center.'),
(6, 'Prof. Dr. B.A.K Azad', 'azad@gmail.com', '01715157722', 'BDS, DDS, MCPS, MDS (London), FICP (America)', 'Dhaka Dental College, Dhaka', 'Address: House # 18/A, Road # 6, Dhanmondi Plaza (', 'Prosthodontist & Implantologist', 'rof.Dr B.A.K Azad is one of the most renowned Dentist in Bangladesh. He passed Bachelor of Dental surgery (BDS) from Dhaka Dental College in 1984. Then he took Diploma in Dental Surgery (DDS) from the University of Dhaka in 1988. '),
(7, 'Dr. Momena Begum', 'momena@gmail.com', '01301254924', 'MBBS, MD (Pediatric Hematology & Oncology), MRCP (', 'Bangabandhu Sheikh Mujib Medical University Hospit', 'Address: 26/2, Principal Abul Kashem Road, Mirpur-', 'Child Blood Diseases & Cancer Specialist', 'Dr. Momena Begum is a Pediatric Hematologist in Dhaka. His qualification is MBBS, MD (Pediatric Hematology & Oncology), MRCP (UK), Fellowship in Palliative Care (India). He is a Assistant Professor in the Department of Pediatric Hematology & Oncology at Bangabandhu Sheikh Mujib Medical University Hospital. He regularly provides treatment to his patients at Delta Hospital, Mirpur. Practicing hour of Dr. Momena Begum at Delta Hospital, Mirpur is 6pm to 8pm (Closed: Friday).'),
(8, 'Dr. Mahmuda Zaman', 'mahmuda@gmail.com', '10616', 'MBBS (DMC), FCPS (CHILD)', 'Square Hospital, Dhaka', 'Address: 8/F, Kazi Nuruzzaman Road, West Panthapat', 'Child Diseases, Child Blood Diseases Specialist', 'Dr. Mahmuda Zaman is a Pediatric Hematologist in Dhaka. Her qualification is MBBS (DMC), FCPS (CHILD). She is a Associate Consultant in the Department of Pediatric & Pediatric Hemato-Oncology at Square Hospital, Dhaka. She regularly provides treatment to her patients at Square Hospital, Dhaka. Practicing hour of Dr. Mahmuda Zaman at Square Hospital, Dhaka is 9am to 5pm (Closed: Friday).'),
(9, 'Prof. Dr. ATM Atikur Rahman', 'atikur@gmail.com', '09666710001', 'MBBS, FCPS (Pediatrics), MD (Oncology)', 'Bangabandhu Sheikh Mujib Medical University Hospit', 'Address: 26, Green Road, Dhaka', 'Pediatric/Child Diseases, Child Cancer & Blood Can', 'Prof. Dr. ATM Atikur Rahman is a Pediatric Hematologist in Dhaka. His qualification is MBBS, FCPS (Pediatrics), MD (Oncology). He is a Professor in the Department of Pediatric Hematology & Oncology at Bangabandhu Sheikh Mujib Medical University Hospital. He regularly provides treatment to his patients at Labaid Cancer Hospital & Super Speciality Center. Practicing hour of Prof. Dr. ATM Atikur Rahman at Labaid Cancer Hospital & Super Speciality Center is 5pm to 7pm (Sun, Tue & Wed).'),
(10, 'Dr. Md. Haider Ali Khan', 'haider@gmail.com', '01611957515', 'BDS (Dhaka), MPH (BSMMU), MPhil (BSMMU), BCS (Heal', 'Dhaka Medical College & Hospital', 'Address: 21/1, Zigatola Bus Stand, Dhanmondi, Dhak', 'Orthodontic, Dental Implant & General Dentistry Sp', 'Dr. Md. Haider Ali Khan is a one of the best Dentist in Dhaka. His qualification is BDS (Dhaka), MPH (BSMMU), MPhil (BSMMU), BCS (Health), TCTP (Sri Lanka). He is a Senior Consultant and In Charge in the Department of Dentistry at Dhaka Medical College & Hospital. He regularly provides treatment to his patients at Cosmodent Dental Care. Practicing hour of Dr. Md. Haider Ali Khan at Cosmodent Dental Care is 5pm to 9pm (Closed: Friday).'),
(11, 'Asst. Prof. Dr. Sharmin Akter Liza', 'sharmin@gmail.com', '01715295950', 'MBBS, FCPS (OBGYN)', 'Institute of Child and Mother Health (ICMH)', 'London Market, Sanarpar, Demra, Dhaka - 1361', 'Gynecology, Infertility Specialist & Laparoscopic ', 'Asst. Prof. Dr. Sharmin Akter Liza is one of the best gynecologist and infertility specialist in Dhaka, Bangladesh. Her qualification is MBBS, FCPS (OBGYN). She is a Assistant Professor in the Department of Gynecology & Obstetrics at Institute of Child and Mother Health (ICMH). She regularly provides treatment to her patients at Saleha Diagnostic Centre. Due to the modernization of the medical system, he is successful in about 98% of the patients. Practicing hour of Asst. Prof. Dr. Sharmin Akter Liza at Saleha Diagnostic Centre is 8pm to 10pm (Sat, Mon & Wed).'),
(12, 'Dr. Asma Khatun Aurora', 'asma@gmail.com', '01778267553', 'MBBS, FCPS (Obstetrics & Gynaecology), BCS (Health', 'Dhaka Medical College & Hospital', '290 Sonargaon Road, Kathalbagan, Dhaka - 1205', 'Obstetrics & Gynaecology Specialist & Surgeon', 'A Fellow of BCPS in Obs & Gynae and Life Member of Obstetrical & Gynaecological Society of Bangladesh (OGSB), Dr. Asma Khatun Aurora is highly reputed and vastly experienced in obstetrics, gynaecology, labour emergency, normal vaginal delivery, caesarean delivery, complicated & high-risk pregnancy, ectopic pregnancy, all types of complicated obstetrics & gynaecological operations including cancer surgeries, laparoscopic surgery, major gynaecological issues (e.g., pregnancy, menstrual, uterus, ovary, PCOD, PCOS, cyst, prolapse etc.), infertility & reproductive health, child and maternal health, family planning & communicable diseases.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`docid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
