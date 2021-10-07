-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2021 at 12:46 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15722548_applicant`
--

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section1_Overview`
--

CREATE TABLE `Full_Section1_Overview` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section1_Overview`
--

INSERT INTO `Full_Section1_Overview` (`Q1`, `ApplicationID`, `version`) VALUES
('During ', 175, 1),
('During term time we aim to process a research ethics application within two weeks however during vacation periods and busy times eg exams and marking period it can take up to four weeks It is \r\nthe applicants responsibility to ensure that their application is submitted in good time', 178, 1),
('Lay Summary (Please provide a brief summary of the study)\r\nwill do ????', 179, 1),
('Lay Summary Please provide a brief summary of the study', 180, 1),
('Lay Summary (Please provide a brief summary of the study)', 181, 1),
('Lay Summary (Please provide a brief summary of the study)', 182, 1),
('Lay Summary (Please provide a brief summary of the study)', 183, 1),
('', 189, NULL),
('Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 191, NULL),
('Layddd Summary (Please provide a brief summary of the study) edit\r\n', 192, 1),
('<br />\r\n<b>Notice</b>:  Undefined index: Q1 in <b>/storage/ssd1/548/15722548/public_html/Applicant Interface/P10_Section1Overview.php</b> on line <b>150</b><br />\r\n', 193, 1),
('Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('test1', 195, 1),
('During ', 175, 2),
('A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 213, 1),
('Lay Summary (Please provide a brief summary of the study)\r\n', 210, 3),
('Lay Summary (Please provide a brief summary of the study)', 214, 1),
('Lay Summary (Please provide a brief summary of the study)', 214, 2),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are \r\nusually an expected part of formal writing, used to organize longer prose. \r\n', 217, 1),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are \r\nusually an expected part of formal writing, used to organize longer prose. \r\n', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section2_Risk_and_ethical_issues`
--

CREATE TABLE `Full_Section2_Risk_and_ethical_issues` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q5` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q6` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q7` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q8` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q9` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section2_Risk_and_ethical_issues`
--

INSERT INTO `Full_Section2_Risk_and_ethical_issues` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `ApplicationID`, `version`) VALUES
('Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'No', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'No', 'No', 175, 1),
('vdsfdgdgfdg', 'vdsfdgdgfdg', 'vdsfdgdgfdg', 'vdsfdgdgfdg', 'No', 'vdsfdgdgfdg', 'vdsfdgdgfdg', 'Yes', 'No', 178, 1),
('Lay Summary (Please provide a brief summary of the study)\r\nHow long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'Yes How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'No', 'Yes', 179, 1),
('Lay Summary Please provide a brief summary of the study', 'Lay Summary Please provide a brief summary of the study', 'Lay Summary Please provide a brief summary of the study', 'Lay Summary Please provide a brief summary of the study', 'No', 'Lay Summary Please provide a brief summary of the study', 'Lay Summary Please provide a brief summary of the study', 'No', 'No', 180, 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'No', 181, 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'No', 182, 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'No', 183, 1),
('sfgfjdfh', 'sgfb,lrdm,f ', 'olvdfxv[sdpls', 'sflkvsdopv', 'Yes iofvodv', 'sdklv;ldvmf', 'dfvkiopsidov', 'No', 'Yes', 189, NULL),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('asf', 'sadf', 'asdf', 'asdf', '', 'asdf', 'asdf', 'Yes', 'Yes asdf', 193, 1),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\n', 'No', 'Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\n', 'No', 'Yes Please list the principal inclusion and exclusion criteria\r\n', 195, 1),
('Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'No', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'No', 'No', 175, 2),
('A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'No', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'No', 'No', 213, 1),
('What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'No', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'No', 'No', 210, 3),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'No', 214, 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'No', 214, 2),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\nA paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'No', 217, 1),
('usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'Yes usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section3_Recruitment_and_informed_consent`
--

CREATE TABLE `Full_Section3_Recruitment_and_informed_consent` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q5` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q6` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q7` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q8` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section3_Recruitment_and_informed_consent`
--

INSERT INTO `Full_Section3_Recruitment_and_informed_consent` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `ApplicationID`, `version`) VALUES
('Please list the principal inclusion and exclusion criteria', 'No', 'Please list the principal inclusion and exclusion criteria', 'Yes', 'No', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 175, 1),
('vdsfdgdgfdg', 'No', 'vdsfdgdgfdg', 'No', 'Yes ', 'vdsfdgdgfdg', 'vdsfdgdgfdg', 'vdsfdgdgfdg', 178, 1),
('How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'No', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'No', 'No', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?\r\n', 179, 1),
('Lay Summary Please provide a brief summary of the study', 'No', 'Lay Summary Please provide a brief summary of the study', 'No', 'Yes ', 'Lay Summary Please provide a brief summary of the study', 'Lay Summary Please provide a brief summary of the study', 'Lay Summary Please provide a brief summary of the study', 180, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Yes', 'Yes ', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 181, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Yes ', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 182, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Yes  ', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 183, 1),
('lxkvmdlkf', 'No', 'sdvgsdgv', 'No', 'Yes ', 'dsvklxmv', 'kmlxcv,k', 'sdklsm;gd', 189, NULL),
('Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 'Yes', 'Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 'Yes', 'Yes ', 'Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 'Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 'Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 191, NULL),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes', 'Yes ', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes', 'Yes ', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('Please list the principal inclusion and exclusion criteria\r\n', 'No', 'Please list the principal inclusion and exclusion criteria\r\n', 'No', 'No', 'Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\n', 195, 1),
('Please list the principal inclusion and exclusion criteria', 'No', 'Please list the principal inclusion and exclusion criteria', 'Yes', 'No', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'please', 175, 2),
('A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'No', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'No', 'Yes ', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 213, 1),
('What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'Yes', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'No', 'No', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'vWhat are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 210, 3),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Yes ', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'No', 'Yes ', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 2),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'Yes ', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs \r\nare usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 1),
('usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section4_Confidentiality`
--

CREATE TABLE `Full_Section4_Confidentiality` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `Q4` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section4_Confidentiality`
--

INSERT INTO `Full_Section4_Confidentiality` (`Q1`, `Q2`, `Q3`, `ApplicationID`, `Q4`, `version`) VALUES
('Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 175, 'Please list the principal inclusion and exclusion criteria', 1),
('testjng', 'testjng', 'testjng', 178, 'testjng', 1),
('Electronic transfer by magnetic or optical media, email or computer networks\r\nSharing of personal data outside the European Economic Ar:', 'Electronic transfer by magnetic or optical media, email or computer networks\r\nSharing of personal data outside the European Economic Ar:', 'Electronic transfer by magnetic or optical media, email or computer networks\r\nSharing of personal data outside the European Economic Ar:Electronic transfer by magnetic or optical media, email or computer networks\r\nSharing of personal data outside the European Economic Ar:', 179, 'Electronic transfer by magnetic or optical media, email or computer networks\r\nSharing of personal data outside the European Economic Ar:', 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 181, 'Lay Summary (Please provide a brief summary of the study)', 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 182, 'Lay Summary (Please provide a brief summary of the study)', 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 180, 'Lay Summary (Please provide a brief summary of the study)', 1),
('isual recordi', 'isual recordi', 'isual recordi', 183, 'isual recordi', 1),
('kvjdfnvdklm', 'skldnvlkdmv', 'lmvdspg', 189, 'dfml;,v', NULL),
('Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 'Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 'Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', 191, 'Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical \r\nguidelines in the conduct of your study. You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants \r\nwith appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.', NULL),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 192, 'Lay Summary (Please provide a brief summary of the study)\r\n', 1),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 194, 'Lay Summary (Please provide a brief summary of the study)\r\n', 1),
('Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\n', 'Please list the principal inclusion and exclusion criteria\r\nPlease list the principal inclusion and exclusion criteria\r\n', 195, 'Please list the principal inclusion and exclusion criteria\r\n', 1),
('Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 175, 'Please list the principal inclusion and exclusion criteria', 2),
('In this section personal data means any data relating to a participant who could potentially be identified. It includes pseudonymised data capable of being linked to a participant through a unique code number. If \r\nyou will be undertaking any of the following activities at any stage (including in the identification of potential participants) please give details and explain the safeguarding measures you will employ:\r\n\r\n', 'vIn this section personal data means any data relating to a participant who could potentially be identified. It includes pseudonymised data capable of being linked to a participant through a unique code number. If \r\nyou will be undertaking any of the following activities at any stage (including in the identification of potential participants) please give details and explain the safeguarding measures you will employ:\r\n\r\n', 'In this section personal data means any data relating to a participant who could potentially be identified. It includes pseudonymised data capable of being linked to a participant through a unique code number. If \r\nyou will be undertaking any of the following activities at any stage (including in the identification of potential participants) please give details and explain the safeguarding measures you will employ:\r\n\r\nv', 213, 'In this section personal data means any data relating to a participant who could potentially be identified. It includes pseudonymised data capable of being linked to a participant through a unique code number. If \r\nyou will be undertaking any of the following activities at any stage (including in the identification of potential participants) please give details and explain the safeguarding measures you will employ:\r\n\r\n', 1),
('What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\nv', 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 210, 'What are the potential risks and burdens for research participants and how will you minimise them? (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, \r\ndiscomfort, distress, intrusion, inconvenience or changes to lifestyle. Describe what steps would be taken to minimise risks and burdens as far as possible)\r\n', 3),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 'Lay Summary (Please provide a brief summary of the study)', 1),
('Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 'Lay Summary (Please provide a brief summary of the study)', 2),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 217, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 1),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 217, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize \r\nlonger prose. Wikipedia\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section5_Incentives_and_payments`
--

CREATE TABLE `Full_Section5_Incentives_and_payments` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section5_Incentives_and_payments`
--

INSERT INTO `Full_Section5_Incentives_and_payments` (`Q1`, `Q2`, `Q3`, `ApplicationID`, `version`) VALUES
('No', 'No', 'No', 175, 1),
('No', 'No', 'Yes Electronic transfer by magnetic or optical media, email or computer networks\r\nSharing of personal data outside the European Economic Ar:', 179, 1),
('No', 'No', 'No', 181, 1),
('No', 'Yes Lay Summary (Please provide a brief summary of the study)', 'No', 182, 1),
('No', 'No', 'No', 180, 1),
('No', 'No', 'No', 183, 1),
('No', 'No', 'No', 178, 1),
('No', 'No', 'Yes sdfs;,dgl;s', 189, NULL),
('Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('No', 'No', 'No', 195, 1),
('No', 'No', 'No', 175, 2),
('No', 'No', 'No', 213, 1),
('No', 'No', 'No', 210, 3),
('Yes Lay Summary (Please provide a brief summary of the study)', 'Yes Lay Summary (Please provide a brief summary of the study)', 'No', 214, 1),
('Yes Lay Summary (Please provide a brief summary of the study)', 'Yes Lay Summary (Please provide a brief summary of the study)', 'No', 214, 2),
('Yes A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'No', 217, 1),
('Yes A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'No', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section6_Publications_and_dissemination`
--

CREATE TABLE `Full_Section6_Publications_and_dissemination` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section6_Publications_and_dissemination`
--

INSERT INTO `Full_Section6_Publications_and_dissemination` (`Q1`, `Q2`, `ApplicationID`, `version`) VALUES
('Please list the principal inclusion and exclusion criteria', 'No', 175, 1),
('Electronic transfer by magnetic or optical media, email or computer networks\r\nSharing of personal data outside the European Economic Ar:', 'No', 179, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 181, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 182, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 180, 1),
('isual recordi', 'Yes  isual recordi', 183, 1),
('hello', 'No', 178, 1),
('lkvcjskdnc', 'No', 189, NULL),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 'Yes Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 195, 1),
('Please list the principal inclusion and exclusion criteria', 'No', 175, 2),
('A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'No', 213, 1),
('How do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 'No', 210, 3),
('Lay Summary (Please provide a brief summary of the study)', 'No', 214, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 214, 2),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 217, 1),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section7_Management_of_the_research`
--

CREATE TABLE `Full_Section7_Management_of_the_research` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section7_Management_of_the_research`
--

INSERT INTO `Full_Section7_Management_of_the_research` (`Q1`, `Q2`, `Q3`, `ApplicationID`, `version`) VALUES
('Please list the principal inclusion and exclusion criteria', 'No', 'Please list the principal inclusion and exclusion criteria', 175, 1),
('Other key investigators/collaborators. (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student \r\nresearchers)', 'No', 'Other key investigators/collaborators. (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student \r\nresearchers)', 179, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 181, 1),
('v', 'No', 'Lay Summary (Please provide a brief summary of the study)', 182, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 180, 1),
('', 'No', 'isual recordi', 183, 1),
('hello', 'No', 'hello', 178, 1),
('zlkv lxkmfdv', 'No', 'dvldx,vlmd', 189, NULL),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('Lay Summary (Please provide a brief summary of the study)\r\n', 'Yes Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 'No', 'Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 195, 1),
('Please list the principal inclusion and exclusion criteria', 'No', 'Please list the principal inclusion and exclusion criteria', 175, 2),
('A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'No', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 213, 1),
('How do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 'No', 'How do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 210, 3),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 214, 1),
('Lay Summary (Please provide a brief summary of the study)', 'No', 'Lay Summary (Please provide a brief summary of the study)', 214, 2),
('A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 1),
('required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'No', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\n', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section8_Insurance_Indemnity`
--

CREATE TABLE `Full_Section8_Insurance_Indemnity` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section8_Insurance_Indemnity`
--

INSERT INTO `Full_Section8_Insurance_Indemnity` (`Q1`, `ApplicationID`, `version`) VALUES
('No', 175, 1),
('No', 179, 1),
('No', 181, 1),
('No', 182, 1),
('No', 180, 1),
('No', 183, 1),
('No', 178, 1),
('No', 189, NULL),
('Yes Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('Yes V2 ', 183, 2),
('Yes Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('No', 195, 1),
('Yes Lay Summary (Please provide a brief summary of the study)\r\n', 194, 2),
('No', 195, 2),
('No', 175, 2),
('No', 213, 1),
('No', 210, 3),
('Yes Lay Summary (Please provide a brief summary of the study)', 214, 1),
('Yes Lay Summary (Please provide a brief summary of the study)', 214, 2),
('No', 217, 1),
('No', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section9_Children`
--

CREATE TABLE `Full_Section9_Children` (
  `Q1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section9_Children`
--

INSERT INTO `Full_Section9_Children` (`Q1`, `Q2`, `Q3`, `Q4`, `ApplicationID`, `version`) VALUES
('No', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 175, 1),
('No', 'Other key investigators/collaborators. (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student \r\nresearchers)', 'Other key investigators/collaborators. (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student \r\nresearchers)', 'Other key investigators/collaborators. (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student \r\nresearchers)', 179, 1),
('No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 181, 1),
('No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 182, 1),
('No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 180, 1),
('No', 'isual recordi', 'isual recordi', 'isual recordi', 183, 1),
('No', 'hello', 'hello', 'hello', 178, 1),
('No', 'fkbgmlfgbkdl', 'dgdl;f,dfg', 'sfdgdgsdf', 189, NULL),
('Yes', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('Yes', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('No', 'Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 'Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 'Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 195, 1),
('No', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 175, 2),
('No', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 213, 1),
('No', 'How do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 'vHow do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 'How do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 210, 3),
('No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 1),
('No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 2),
('No', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 1),
('No', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section10_Participants_unable_to_consent_for_themselves`
--

CREATE TABLE `Full_Section10_Participants_unable_to_consent_for_themselves` (
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q2` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q3` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q4` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q5` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Q6` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section10_Participants_unable_to_consent_for_themselves`
--

INSERT INTO `Full_Section10_Participants_unable_to_consent_for_themselves` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `ApplicationID`, `version`) VALUES
('No', 'No', 'No', 'Yes', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 175, 1),
('No', 'Yes', 'Yes', 'Yes', 'Other key investigators/collaborators. (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student \r\nresearchers)', 'Other key investigators/collaborators. (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student \r\nresearchers)', 179, 1),
('No', 'Yes', 'No', 'Yes', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 181, 1),
('Yes', 'No', 'Yes', 'Yes', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 182, 1),
('No', 'Yes', 'No', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 180, 1),
('No', 'Yes', 'Yes', 'Yes', 'isual recordi', 'isual recordi', 183, 1),
('No', 'No', 'No', 'No', 'hello', 'hello', 178, 1),
('No', 'No', 'Yes', 'No', 'klmdbklcmfb', ',mc mb cfm', 189, NULL),
('Yes', 'Yes', 'Yes', 'Yes', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 192, 1),
('Yes', 'Yes', 'Yes', 'Yes', 'Lay Summary (Please provide a brief summary of the study)\r\n', 'Lay Summary (Please provide a brief summary of the study)\r\n', 194, 1),
('No', 'No', 'No', 'No', 'Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 'Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research? (If ‘yes’, please give details)\r\n', 195, 1),
('No', 'No', 'No', 'Yes', 'Please list the principal inclusion and exclusion criteria', 'Please list the principal inclusion and exclusion criteria', 175, 2),
('No', 'No', 'No', 'No', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 'A paragraph (from the Ancient Greek παράγραφος, parágraphos, \"to write beside\") is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more \r\nsentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.\r\n', 213, 1),
('No', 'No', 'No', 'No', 'How do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 'How do you intend to report and disseminate the results of the study? If you do not plan to report or disseminate the results please give your justification', 210, 3),
('No', 'Yes', 'Yes', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 1),
('No', 'Yes', 'Yes', 'No', 'Lay Summary (Please provide a brief summary of the study)', 'Lay Summary (Please provide a brief summary of the study)', 214, 2),
('No', 'No', 'Yes', 'Yes', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 1),
('No', 'No', 'Yes', 'Yes', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not \r\nrequired by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia\r\n', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section11_Declaration`
--

CREATE TABLE `Full_Section11_Declaration` (
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section11_Declaration`
--

INSERT INTO `Full_Section11_Declaration` (`Q1`, `ApplicationID`, `version`) VALUES
('yes', 175, 1),
('yes', 179, 1),
('yes', 181, 1),
('yes', 182, 1),
('yes', 180, 1),
('yes', 183, 1),
('yes', 178, 1),
('yes', 189, 1),
('yes', 191, 1),
('yes', 192, 1),
('yes', 194, 1),
('yes', 195, 1),
('yes', 213, 1),
('yes', 210, 3),
('yes', 214, 1),
('yes', 214, 2),
('yes', 217, 1),
('yes', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section_Comment_Applications`
--

CREATE TABLE `Full_Section_Comment_Applications` (
  `F1S4` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S1` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S2` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S3` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S4` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S5` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S6` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S7` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S8` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S9` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S10` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `ApplicationID` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EthicsID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section_Comment_Applications`
--

INSERT INTO `Full_Section_Comment_Applications` (`F1S4`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `S8`, `S9`, `S10`, `ApplicationID`, `status`, `EthicsID`, `version`) VALUES
('Has this or a similar application been previously rejected by a research Ethics Committee in the UK or another country? (If yes, please give details of rejected application and explain in the summary of main issues how the reasons for the unfavourable opinion have been addressed in this application)	', '', 'Has this or a similar application been previously rejected by a research Ethics Committee in the UK or another country? (If yes, please give details of rejected application and explain in the summary of main issues how the reasons for the unfavourable opinion have been addressed in this application)	', '', '', '', '', 'Has this or a similar application been previously rejected by a research Ethics Committee in the UK or another country? (If yes, please give details of rejected application and explain in the summary of main issues how the reasons for the unfavourable opinion have been addressed in this application)	', '', '', 'Could the research be undertaken as effectively with people who do have the capacity to consent to participate?	', 175, 'Minor Amendments Required', 'Sherly', 1),
('Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Max', 1),
('Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Sherly', 1),
('Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Max', 2),
('not approved ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Sherly', 2),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Dijin Joseph', 2),
('Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Max', 3),
('not approved ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Sherly', 3),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'Minor Amendments Required', 'Dijin Joseph', 3),
('', '', '', '', '', '', '', '', '', '', '', 214, 'Minor Amendments Required', 'Vishal Shah', 1),
('Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 215, 'Minor Amendments Required', 'ben johns', 1),
('Changes made', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 215, 'Approved', 'ben johns', 2),
('Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 211, 'Minor Amendments Required', 'ben johns', 1),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 211, 'Minor Amendments Required', 'Sherly', 1),
('Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', '', '', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', '', '', 217, 'Minor Amendments Required', 'Dijin', 1),
('Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', '', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', '', '', '', '', '', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', 217, 'Minor Amendments Required', 'James ', 1),
('Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', '', '', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', 'Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', '', '', 217, 'Minor Amendments Required', 'Dijin', 2),
('Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', '', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', '', '', '', '', '', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', 'Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?	', 217, 'Minor Amendments Required', 'James ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Full_Section_Reviewed_Applications`
--

CREATE TABLE `Full_Section_Reviewed_Applications` (
  `F1S4` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S1` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S2` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S3` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S4` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S5` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S6` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S7` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S8` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S9` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `S10` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `ApplicationID` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ReviewerID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `Recommendation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Full_Section_Reviewed_Applications`
--

INSERT INTO `Full_Section_Reviewed_Applications` (`F1S4`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `S8`, `S9`, `S10`, `ApplicationID`, `status`, `ReviewerID`, `version`, `Recommendation`) VALUES
('Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).	', 'Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).	', '', 'Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).	', 'Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).	', 'Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).	', '', 'Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).	', 'Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).	', '', '', 175, 'submitted', 'ben johns', 1, 'Minor Amendments Required'),
('How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?	', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?	', '', '', '', '', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?	', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?	', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?	', '', 'How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?	', 175, 'submitted', 'James ', 1, 'Minor Amendments Required'),
('Does the study involve participants aged 16 or over who are unable to give informed consent (e.g. people with learning disabilities or dementia)?	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'submitted', 'Dijin', 1, 'Minor Amendments Required'),
('Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'submitted', 'ben johns', 1, 'Minor Amendments Required'),
('Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 211, 'submitted', 'roles test2', 1, 'Minor Amendments Required'),
('Will the research take place outside the UK? You may find the find the Proportionate Risk Assessment document useful.	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 211, 'submitted', 'Max', 1, 'Minor Amendments Required'),
('Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 212, 'submitted', 'ben johns', 1, 'Minor Amendments Required'),
('Will the research take place outside the UK? You may find the find the Proportionate Risk Assessment document useful.	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 212, 'submitted', 'Max', 1, 'Minor Amendments Required'),
('Approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'submitted', 'Dijin', 2, 'Approved'),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'submitted', 'ben johns', 2, 'Approved'),
('Approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'open', 'Dijin', 3, ''),
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, 'open', 'ben johns', 3, ''),
('Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 214, 'submitted', 'ben johns', 1, 'Minor Amendments Required'),
('amazing', 'amazing', 'amazing', 'amazing', 'amazing', 'amazing', 'amazing', 'amazing', 'amazing', 'amazing', 'amazing', 214, 'submitted', 'James ', 1, 'Minor Amendments Required'),
('Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 215, 'submitted', 'Tom', 1, 'Minor Amendments Required'),
('Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 215, 'submitted', 'Sherly', 1, 'Minor Amendments Required'),
('Changes made 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 215, 'submitted', 'Sherly', 2, 'Approved'),
('Changes made', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 215, 'submitted', 'Tom', 2, 'Approved'),
('Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', '', '', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', '', '', 217, 'submitted', 'Dijin Joseph', 1, 'Major Amendments Required'),
('Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', 'Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', '', '', '', '', '', '', '', 'Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', 'Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)	', 217, 'submitted', 'ben johns', 1, 'Minor Amendments Required'),
('Approved', '', '', '', '', '', '', '', '', '', 'Approved', 217, 'submitted', 'ben johns', 2, 'Approved'),
('Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', '', '', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', 'Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?	', '', '', 217, 'open', 'Dijin Joseph', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `LinkingApplicationToApplicant`
--

CREATE TABLE `LinkingApplicationToApplicant` (
  `ApplicationID` int(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `LinkingApplicationToApplicant`
--

INSERT INTO `LinkingApplicationToApplicant` (`ApplicationID`, `UserID`, `role`, `version`, `status`) VALUES
(210, 21, 'leader', 1, 'Minor Amendments Required'),
(210, 24, 'Participant', 1, 'Minor Amendments Required'),
(211, 21, 'leader', 1, 'Minor Amendments Required'),
(211, 30, 'Participant', 1, 'Minor Amendments Required'),
(212, 21, 'leader', 1, 'submitted'),
(212, 33, 'Participant', 1, 'submitted'),
(210, 21, 'leader', 2, 'Minor Amendments Required'),
(210, 24, 'Participant', 2, 'Minor Amendments Required'),
(210, 43, 'Participant', 2, 'Minor Amendments Required'),
(213, 28, 'leader', 1, 'submitted'),
(213, 21, 'Participant', 1, 'submitted'),
(213, 43, 'Participant', 1, 'submitted'),
(210, 21, 'leader', 3, 'Minor Amendments Required'),
(210, 24, 'Participant', 3, 'Minor Amendments Required'),
(210, 43, 'Participant', 3, 'Minor Amendments Required'),
(214, 21, 'leader', 1, 'Minor Amendments Required'),
(0, 0, 'leader', 1, 'In Progress'),
(214, 27, 'Participant', 1, 'Minor Amendments Required'),
(214, 28, 'Participant', 1, 'Minor Amendments Required'),
(214, 21, 'leader', 2, 'Minor Amendments Required'),
(214, 27, 'Participant', 2, 'Minor Amendments Required'),
(214, 28, 'Participant', 2, 'Minor Amendments Required'),
(215, 33, 'leader', 1, 'Minor Amendments Required'),
(215, 21, 'Participant', 1, 'Minor Amendments Required'),
(215, 21, 'Participant', 2, 'Approved'),
(215, 33, 'leader', 2, 'Approved'),
(216, 45, 'leader', 1, 'In Progress'),
(216, 28, 'Participant', 1, 'In Progress'),
(211, 21, 'leader', 2, 'Minor Amendments Required'),
(211, 30, 'Participant', 2, 'Minor Amendments Required'),
(217, 28, 'leader', 1, 'Minor Amendments Required'),
(217, 45, 'Participant', 1, 'Minor Amendments Required'),
(217, 43, 'Participant', 1, 'Minor Amendments Required'),
(217, 28, 'leader', 2, 'Re-submitted'),
(217, 43, 'Participant', 2, 'Re-submitted'),
(217, 45, 'Participant', 2, 'Re-submitted');

-- --------------------------------------------------------

--
-- Table structure for table `LinkingApplicationToDashboard`
--

CREATE TABLE `LinkingApplicationToDashboard` (
  `ApplicationID` int(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `LinkingApplicationToDashboard`
--

INSERT INTO `LinkingApplicationToDashboard` (`ApplicationID`, `UserID`, `status`, `role`) VALUES
(210, 21, 'Re-submitted', 'leader'),
(210, 24, 'Re-submitted', 'Participant'),
(211, 21, 'Minor Amendments Required', 'leader'),
(211, 30, 'Minor Amendments Required', 'Participant'),
(212, 21, 'submitted', 'leader'),
(212, 33, 'submitted', 'Participant'),
(210, 43, 'Re-submitted', 'Participant'),
(213, 28, 'submitted', 'leader'),
(213, 21, 'submitted', 'Participant'),
(213, 43, 'submitted', 'Participant'),
(214, 21, 'Minor Amendments Required', 'leader'),
(214, 27, 'Minor Amendments Required', 'Participant'),
(214, 28, 'Minor Amendments Required', 'Participant'),
(215, 33, 'Approved', 'leader'),
(215, 28, 'Approved', 'Participant'),
(215, 21, 'Approved', 'Participant'),
(216, 45, 'In Progress', 'leader'),
(216, 28, 'In Progress', 'Participant'),
(217, 28, 'Re-submitted', 'leader'),
(217, 45, 'Re-submitted', 'Participant'),
(217, 43, 'Re-submitted', 'Participant');

-- --------------------------------------------------------

--
-- Table structure for table `LinkingApplicationToEthicsCommitteeMember`
--

CREATE TABLE `LinkingApplicationToEthicsCommitteeMember` (
  `ApplicationID` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `LinkingApplicationToEthicsCommitteeMember`
--

INSERT INTO `LinkingApplicationToEthicsCommitteeMember` (`ApplicationID`, `status`) VALUES
(210, 'Under Review (Re-submitted)'),
(211, 'Minor Amendments Required'),
(212, 'Pending'),
(213, 'submitted'),
(214, 'Minor Amendments Required'),
(215, 'Approved'),
(217, 'Pending (Re-submitted)');

-- --------------------------------------------------------

--
-- Table structure for table `LinkingApplicationToReviewer`
--

CREATE TABLE `LinkingApplicationToReviewer` (
  `ReviewerID` text COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `EthicsID` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `LinkingApplicationToReviewer`
--

INSERT INTO `LinkingApplicationToReviewer` (`ReviewerID`, `ApplicationID`, `EthicsID`, `status`) VALUES
('Dijin', 210, 28, 'Re-submitted'),
('ben johns', 210, 28, 'Re-submitted'),
('roles test2', 211, 28, 'submitted'),
('Max', 211, 28, 'submitted'),
('ben johns', 212, 28, 'submitted'),
('Max', 212, 28, 'submitted'),
('ben johns', 214, 24, 'submitted'),
('James ', 214, 24, 'submitted'),
('Tom', 215, 31, 'submitted'),
('Sherly', 215, 31, 'submitted'),
('Dijin Joseph', 217, 29, 'Re-submitted'),
('ben johns', 217, 29, 'submitted');

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `UserID` int(11) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Reviewer` tinyint(1) NOT NULL,
  `Committee_Member` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`UserID`, `Admin`, `Reviewer`, `Committee_Member`) VALUES
(19, 0, 1, 0),
(20, 0, 0, 0),
(23, 0, 0, 0),
(25, 0, 0, 0),
(27, 0, 0, 0),
(28, 0, 0, 0),
(29, 0, 0, 0),
(30, 0, 0, 0),
(31, 0, 0, 1),
(34, 0, 0, 0),
(35, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Section1_Project_Details`
--

CREATE TABLE `Section1_Project_Details` (
  `ProjectTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PlannedStartDate` date NOT NULL,
  `PlannedEndDate` date NOT NULL,
  `Funder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Section1_Project_Details`
--

INSERT INTO `Section1_Project_Details` (`ProjectTitle`, `PlannedStartDate`, `PlannedEndDate`, `Funder`, `ApplicationID`, `version`) VALUES
('resubmit part 10', '2021-03-18', '2021-03-19', 'School of Computing', 212, 1),
('resubmit part 7', '2021-03-11', '2021-03-31', 'School of Computing', 210, 1),
('resubmit part 8', '2021-03-27', '2021-04-02', 'School of Computing', 211, 1),
('resubmit working part 7', '2021-03-11', '2021-03-31', 'School of Computing', 210, 2),
('Test 9 for resubmit', '2021-03-17', '2021-03-25', 'School of Computing', 213, 1),
('resubmit working part 7', '2021-03-11', '2021-03-31', 'School of Computing', 210, 3),
('Dijin Testing Application 1', '2021-03-14', '2021-04-04', 'University Of KENT', 214, 1),
('change project title', '2021-03-14', '2021-04-04', 'University Of KENT', 214, 2),
('version test 09/03/2021', '2021-03-09', '2021-03-11', 'Self', 215, 1),
('version test 09/03/2021 updated', '2021-03-09', '2021-03-11', 'Self', 215, 2),
('Climate change', '2021-03-11', '2021-03-31', 'School of Computing', 216, 1),
('resubmit part 8', '2021-03-27', '2021-04-02', 'School of Computing', 211, 2),
('Final Test for resubmitng an application', '2021-03-11', '2021-03-27', 'School of Computing', 217, 1),
('Final Test for resubmitng an application', '2021-03-11', '2021-03-27', 'School of Computing', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Section3_Declaration`
--

CREATE TABLE `Section3_Declaration` (
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `SupervisorName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SupervisorEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Section3_Declaration`
--

INSERT INTO `Section3_Declaration` (`Q1`, `SupervisorName`, `SupervisorEmail`, `ApplicationID`, `version`) VALUES
('yes', 'sanjay', 'sanjay.kent.ac.uk', 210, 1),
('yes', 'Professor Gerald Adler', 'prof.kent.ac.uk', 211, 1),
('yes', 'Professor Gerald Adler', 'vs323@kent.ac.uk', 212, 1),
('yes', 'sanjay', 'sanjay.kent.ac.uk', 210, 2),
('yes', 'marek', 'marek@kent.ac.uk', 210, 2),
('yes', 'sanjay', 'sanjay.kent.ac.uk', 213, 1),
('yes', 'sanjay', 'sanjay.kent.ac.uk', 210, 3),
('yes', 'marek', 'marek@kent.ac.uk', 210, 3),
('yes', 'Sanjay Bakterjee', 'sanjay@gmail.com', 214, 1),
('yes', 'Sanjay Bakterjee', 'sanjay@gmail.com', 214, 2),
('yes', 'Sanjay', 'Sb123@kent.ac.uk', 215, 1),
('yes', 'Sanjay', 'Sb123@kent.ac.uk', 215, 2),
('yes', 'Professor Gerald Adler', 'prof.kent.ac.uk', 216, 1),
('yes', 'Professor Gerald Adler', 'prof.kent.ac.uk', 211, 2),
('yes', 'sanjay', 'sanjay.kent.ac.uk', 217, 1),
('yes', 'sanjay', 'sanjay.kent.ac.uk', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Section4_ResearchChecklist_PartA`
--

CREATE TABLE `Section4_ResearchChecklist_PartA` (
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q2` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q3` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q4` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q5` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q6` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q7` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q8` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q9` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Section4_ResearchChecklist_PartA`
--

INSERT INTO `Section4_ResearchChecklist_PartA` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `ApplicationID`, `version`) VALUES
('no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 210, 1),
('yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 211, 1),
('yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 212, 1),
('yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 210, 2),
('no', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 213, 1),
('no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 210, 3),
('no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 214, 1),
('no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 214, 2),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 215, 1),
('yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 215, 2),
('no', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 216, 1),
('yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 211, 2),
('no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 217, 1),
('no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Section4_ResearchChecklist_PartB`
--

CREATE TABLE `Section4_ResearchChecklist_PartB` (
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q2` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q3` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q4` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q5` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q6` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q7` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q8` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q9` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q10` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q11` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q12` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q13` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q14` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q15` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q16` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q17` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q18` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Q19` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Section4_ResearchChecklist_PartB`
--

INSERT INTO `Section4_ResearchChecklist_PartB` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `ApplicationID`, `version`) VALUES
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 210, 1),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 211, 1),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 212, 1),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 210, 2),
('yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 213, 1),
('yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 210, 3),
('yes', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 214, 1),
('yes', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 214, 2),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 215, 1),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 215, 2),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 216, 1),
('no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 211, 2),
('no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 217, 1),
('no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Section4_ResearchChecklist_PartC`
--

CREATE TABLE `Section4_ResearchChecklist_PartC` (
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Section4_ResearchChecklist_PartC`
--

INSERT INTO `Section4_ResearchChecklist_PartC` (`Q1`, `ApplicationID`, `version`) VALUES
('no', 210, 1),
('no', 211, 1),
('no', 212, 1),
('no', 210, 2),
('no', 213, 1),
('no', 210, 3),
('yes', 214, 1),
('yes', 214, 2),
('no', 215, 1),
('no', 215, 2),
('no', 216, 1),
('no', 211, 2),
('no', 217, 1),
('no', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Section4_ResearchChecklist_PartD`
--

CREATE TABLE `Section4_ResearchChecklist_PartD` (
  `Q1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `version` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Section4_ResearchChecklist_PartD`
--

INSERT INTO `Section4_ResearchChecklist_PartD` (`Q1`, `ApplicationID`, `version`) VALUES
('no', 210, 1),
('no', 211, 1),
('no', 212, 1),
('no', 210, 2),
('no', 213, 1),
('no', 210, 3),
('no', 214, 1),
('no', 214, 2),
('no', 215, 1),
('no', 215, 2),
('no', 216, 1),
('no', 211, 2),
('no', 217, 1),
('no', 217, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `KentEmail` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Postcode` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `LevelOfStudy` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Applicant` tinyint(1) NOT NULL DEFAULT 1,
  `Admin` tinyint(1) NOT NULL,
  `EthicsComittee` tinyint(1) NOT NULL,
  `Reviewer` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FullName`, `KentEmail`, `Telephone`, `Postcode`, `Address`, `LevelOfStudy`, `Department`, `Role`, `Applicant`, `Admin`, `EthicsComittee`, `Reviewer`, `Username`, `Password`) VALUES
(21, 'Dijin Joseph', 'dijin1999@gmail.com', '07878490152', 'KT6 7JR', '75 Cranborne Avenue', 'Undergraduate', 'Computing', 'Ethics Committee', 1, 0, 1, 1, 'dj274', '0e0de7c95ff16081b93377d35258cbf4'),
(24, 'Vishal Shah', 'vishal@gmail.com', '0788843242', 'hy7 8ju', '43 fhjdsfhfdsf', 'Undergraduate', 'Arts', 'Admin', 1, 1, 1, 1, 'v333', '81dc9bdb52d04dc20036dbd8313ed055'),
(27, 'Sam Parker', 'sam12@kent.ac.uk', '07839048984', 'BT6 7UR', '76 YOLO', 'Undergraduate', 'Computing', 'Applicant', 1, 0, 0, 0, 'sam12', '81dc9bdb52d04dc20036dbd8313ed055'),
(28, 'Sherly', 'sdd43@kent.ac.uk', '3213213213', 'fdf444', '34dsfdsf', 'Undergraduate', 'Computing', 'Applicant', 1, 0, 1, 1, 's222', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'Dijin', 'dijinjo8@g', '07878490152', 'dwad7', 'disajhgd7', 'Undergraduate', 'Computing', 'Reviewer', 0, 0, 1, 1, 'rw123', '81dc9bdb52d04dc20036dbd8313ed055'),
(30, 'TestUser', 'TestUser@gmail.com', '03281383132', 'HY7 8JF', '56 YHI DANFADSFJ', 'Undergraduate', 'Arts', 'Applicant', 1, 0, 1, 0, 'Testing', '81dc9bdb52d04dc20036dbd8313ed055'),
(31, 'ben johns', 'benjohn@kent.ac.uk', '0728324192', 'ct2 7dp', 'marley court', 'Staff', 'Computing', 'Ethics Committee', 0, 0, 1, 1, 'bj333', '81dc9bdb52d04dc20036dbd8313ed055'),
(33, 'Hem Joshi', 'hj234@kent.ac.uk', '0429653271', 'ct2 7uu', '1 Marley Court', 'Undergraduate', 'Computing', 'Applicant', 1, 0, 1, 1, 'hj234', '32250170a0dca92d53ec9624f336ca24'),
(34, 'Tom', 'tm274@kent.ac.uk', '07987685463', 'UR5 7LR', '45 Evans Road', 'Taught Postgraduate', 'Computing', 'Applicant', 0, 0, 1, 1, 'tm274', '81dc9bdb52d04dc20036dbd8313ed055'),
(35, 'user1', 'user1@kent.ac.uk', '073248238509', 'ct2 7uu', '2d marley court', 'Taught Postgraduate', 'Computing', 'Applicant', 0, 0, 0, 0, 'user1', '81dc9bdb52d04dc20036dbd8313ed055'),
(36, 'Hem Joshi', 'hj234@kent.ac.uk', '1234556789', 'ct2 7uu', '1 marley court', 'Undergraduate', 'Computing', 'Admin', 1, 1, 0, 0, 'hj123', '32250170a0dca92d53ec9624f336ca24'),
(37, 'Roles test', 'rt123', '12334', '12335', '123345', 'Undergraduate', 'Computing', 'Ethics Committee', 0, 0, 1, 1, 'rt123', '327f42dc9cc897f17dc63852d31d3a99'),
(40, 'roles test2', 'rt123', '123457', '123456', '12342567', 'Undergraduate', 'Computing', 'Ethics Committee', 1, 0, 0, 1, 'rt1234', '81dc9bdb52d04dc20036dbd8313ed055'),
(41, 'josh H', 'jshdhsd', '1325367', '342536475', '1234356', 'Undergraduate', 'Computing', 'Reviewer', 0, 0, 1, 0, 'jh12345', '827ccb0eea8a706c4c34a16891f84e7b'),
(43, '123', '123', '123', '123', '123', 'Undergraduate', 'Computing', 'Applicant', 1, 0, 1, 0, '123', '202cb962ac59075b964b07152d234b70'),
(44, 'James ', 'james@kent.ac.uk', '0723235235', 'ct2 7tp', 'London', 'Undergraduate', 'Computing', 'Ethics Committee', 1, 0, 1, 1, 'jm274', '81dc9bdb52d04dc20036dbd8313ed055'),
(45, 'Max', 'Max.kent.ac.uk', '073274324', 'ct2 7tp', 'London', 'Undergraduate', 'Computing', 'Ethics Committee', 1, 0, 1, 1, 'mx274', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Full_Section1_Overview`
--
ALTER TABLE `Full_Section1_Overview`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section2_Risk_and_ethical_issues`
--
ALTER TABLE `Full_Section2_Risk_and_ethical_issues`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section3_Recruitment_and_informed_consent`
--
ALTER TABLE `Full_Section3_Recruitment_and_informed_consent`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section4_Confidentiality`
--
ALTER TABLE `Full_Section4_Confidentiality`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section5_Incentives_and_payments`
--
ALTER TABLE `Full_Section5_Incentives_and_payments`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section6_Publications_and_dissemination`
--
ALTER TABLE `Full_Section6_Publications_and_dissemination`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section7_Management_of_the_research`
--
ALTER TABLE `Full_Section7_Management_of_the_research`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section8_Insurance_Indemnity`
--
ALTER TABLE `Full_Section8_Insurance_Indemnity`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section9_Children`
--
ALTER TABLE `Full_Section9_Children`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section10_Participants_unable_to_consent_for_themselves`
--
ALTER TABLE `Full_Section10_Participants_unable_to_consent_for_themselves`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section11_Declaration`
--
ALTER TABLE `Full_Section11_Declaration`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Full_Section_Comment_Applications`
--
ALTER TABLE `Full_Section_Comment_Applications`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`EthicsID`,`version`);

--
-- Indexes for table `Full_Section_Reviewed_Applications`
--
ALTER TABLE `Full_Section_Reviewed_Applications`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`ReviewerID`,`version`);

--
-- Indexes for table `LinkingApplicationToApplicant`
--
ALTER TABLE `LinkingApplicationToApplicant`
  ADD UNIQUE KEY `unique_index` (`ApplicationID`,`UserID`,`version`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `Section1_Project_Details`
--
ALTER TABLE `Section1_Project_Details`
  ADD UNIQUE KEY `unique_index` (`ApplicationID`,`version`);

--
-- Indexes for table `Section3_Declaration`
--
ALTER TABLE `Section3_Declaration`
  ADD UNIQUE KEY `unique_index` (`ApplicationID`,`version`,`SupervisorEmail`) USING BTREE;

--
-- Indexes for table `Section4_ResearchChecklist_PartA`
--
ALTER TABLE `Section4_ResearchChecklist_PartA`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Section4_ResearchChecklist_PartB`
--
ALTER TABLE `Section4_ResearchChecklist_PartB`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Section4_ResearchChecklist_PartC`
--
ALTER TABLE `Section4_ResearchChecklist_PartC`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `Section4_ResearchChecklist_PartD`
--
ALTER TABLE `Section4_ResearchChecklist_PartD`
  ADD UNIQUE KEY `ApplicationID` (`ApplicationID`,`version`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Section1_Project_Details`
--
ALTER TABLE `Section1_Project_Details`
  MODIFY `ApplicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
