-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2020 at 09:27 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarkari`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `caturl` varchar(255) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cname`, `caturl`, `createdon`, `status`) VALUES
(1, 'ssc', '', '2019-11-13 04:30:26', 1),
(2, 'Defence', '', '2019-11-13 04:44:24', 1),
(3, 'psc', '', '2019-11-13 04:44:24', 1),
(4, 'banks', '', '2019-11-13 04:44:24', 1),
(5, 'education', '', '2019-11-13 04:44:24', 1),
(6, 'oil-gas', '', '2019-11-13 04:44:24', 1),
(7, 'power', '', '2019-11-13 04:44:24', 1),
(8, 'health-care', '', '2019-11-13 04:44:24', 1),
(9, 'Railway', '', '2019-11-13 04:44:24', 1),
(10, 'telecom', '', '2019-11-13 04:44:24', 1),
(11, 'indian-postal', '', '2019-11-13 04:44:24', 1),
(12, 'state-govt-jobs', '', '2019-11-13 04:44:24', 1),
(13, 'central-govt-jobs', '', '2019-11-13 04:44:24', 1),
(14, 'Other Category', '', '2019-11-13 04:44:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobtypes`
--

CREATE TABLE `jobtypes` (
  `jid` int(11) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobtypes`
--

INSERT INTO `jobtypes` (`jid`, `job_type`, `url`, `createdon`, `status`) VALUES
(1, 'Latest Notifications', '', '2019-11-14 05:08:58', 1),
(2, 'Exam Results', '', '2019-11-14 05:08:58', 1),
(3, 'Answer Key', '', '2019-11-14 05:08:58', 1),
(4, 'Syllabus', '', '2019-11-14 05:08:58', 1),
(5, 'Sarkari Jobs', '', '2019-11-14 05:08:58', 1),
(6, 'Interview Results', '', '2019-11-14 05:08:58', 1),
(7, 'Exam Pattern', '', '2019-11-14 05:08:58', 1),
(8, 'Previous Papers', '', '2019-11-14 05:08:58', 1),
(9, 'Govt Interview Questions', '', '2019-11-14 05:08:58', 1),
(10, 'Interview Schedule', '', '2019-11-14 05:08:58', 1),
(11, 'Exam Dates', '', '2019-11-14 05:08:58', 1),
(12, 'Eligibility', '', '2019-11-14 05:08:58', 1),
(13, 'Current Affairs', '', '2019-11-14 05:08:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sarkari_info`
--

CREATE TABLE `sarkari_info` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `jt_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `job_postings` varchar(255) NOT NULL,
  `job_desc` text NOT NULL,
  `profile_desc` text NOT NULL,
  `imp_dates` text NOT NULL,
  `job_url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarkari_info`
--

INSERT INTO `sarkari_info` (`id`, `cid`, `sc_id`, `st_id`, `jt_id`, `title`, `img_url`, `job_postings`, `job_desc`, `profile_desc`, `imp_dates`, `job_url`, `status`, `createdon`) VALUES
(3, 12, 318, 7, 1, 'AIIMS Raipur Recruitment 2019 - Research Assistant Post', '', '', '<p>The Medical organization invites applications for Research Assistant Post from eligible candidates having required qualifications. The vacancy is in AIIMS Raipur, Raipur, Chhattisgarh on a project entitled &ldquo;Usefulness of STOPP / START Criteria and Beers Criteria for prescribing in geriatric patient in tertiary health care center, Raipur, Central India&rdquo;.&nbsp;</p>\r\n\r\n<p>The job applications for AIIMS Raipur Jobs 2019 will be accepted as per the attached application format before 07 Dec 2019.</p>\r\n\r\n<p>AIIMS Raipur Vacancy Details:<br />\r\nTotal Vacancies: 1</p>\r\n\r\n<p>Name of the Post: Research Assistant</p>\r\n\r\n<p>Qualification:</p>\r\n\r\n<p>&bull;&nbsp;Pharmacy Diploma or Degree OR</p>\r\n\r\n<p>&bull;&nbsp;Graduate in Science Stream</p>\r\n\r\n<p>Experience:</p>\r\n\r\n<p>1. Fresher may also apply</p>\r\n\r\n<p>2. Candidate with work experience of dealing with patient and having previous experience in clinical studies will be given preference.</p>\r\n\r\n<p>Age Limit:&nbsp;35 Years</p>\r\n\r\n<p>Project:&nbsp;&ldquo;Usefulness of STOPP / START Criteria and Beers Criteria for prescribing in geriatric patient in tertiary health care center, Raipur, Central India&rdquo;</p>\r\n\r\n<p>Pay Scale:</p>\r\n\r\n<p>Rs. 15000 per&nbsp;&nbsp;month consolidated</p>\r\n\r\n<p>Selection Process:</p>\r\n\r\n<p>On the basis of interview / written test.</p>\r\n\r\n<p>AIIMS Raipur Vacancy&nbsp;How to Apply:<br />\r\nEligible candidates may send their application in the prescribed format along with self-attested photocopies of all the relevant documents in support age, educational qualification, experience, category etc&nbsp;&nbsp;to Dr. Yogendra Narayanrao Keche Additional Professor Department of Pharmacology Room No. 2215, 2nd Floor, Gate No. 05, Medical College Building All India Institute of Medical Sciences Raipur Tatibandh, G.E. Road, Raipur, Chhattisgarh &ndash; 492099 on or before 07 Dec 2019</p>\r\n\r\n<p>The envelope should be super-scribed &ldquo;APPLICATION FOR THE POST OF RESEARCH ASSISTANT&rdquo;</p>\r\n\r\n<p>Job Location:</p>\r\n\r\n<p>AIIMS Raipur (C.G.)&nbsp;&nbsp;Chhattisgarh</p>\r\n\r\n<p>Last Date for Submission of Application Form: 07 Dec 2019</p>\r\n\r\n<p>Click here for Advt Details &amp;Application Form</p>\r\n', '', '', '', 1, '2019-11-28 13:53:16'),
(4, 12, 330, 20, 2, 'MP High Court District Judge HJS Interview Schedule 2019', '', '', '<h2>MP High Court District Judge HJS Interview Schedule 2019</h2>\r\n', '', '', '', 1, '2019-12-03 05:48:55'),
(5, 12, 323, 13, 1, 'RITES Gurgaon Notification 2019 – Opening for 07 ARE Engineer Posts', '', '', '<p>Rail India Technical and Economic Services have issued the latest notification for the recruitment of 2019. Applications are invited for the post of ARE Engineer. Other details of like Education Qualification Details, Required Age Limit, Mode Of selection, Fee Details and How to Apply are given below&hellip;</p>\r\n\r\n<h2><strong>RITES Gurgaon Recruitment Details:</strong></h2>\r\n\r\n<p><strong>Total Vacancies:&nbsp;07</strong></p>\r\n\r\n<p><strong>Post Name:&nbsp;ARE Engineer</strong></p>\r\n\r\n<p><strong>Qualification Details:</strong></p>\r\n\r\n<p>The candidates must have passed Diploma, B.E/ B.Tech or the equivalent from a recognized Board.</p>\r\n\r\n<p><strong>Required Age Limit:</strong></p>\r\n\r\n<p>Maximum Age Limit: 55 years</p>\r\n\r\n<p><strong>Salary Package:</strong>&nbsp;Rs. 70,000 &ndash; 2,00,000/-</p>\r\n\r\n<p><strong>Mode of Selection:</strong></p>\r\n\r\n<p>&bull;&nbsp;Written test</p>\r\n\r\n<p>&bull;&nbsp;Interview</p>\r\n\r\n<h2><strong>RITES Gurgaon Recruitment -&nbsp;</strong><strong>Steps To Apply For Online Mode:</strong></h2>\r\n\r\n<p>&bull;&nbsp;Log on to the official website www.ritesltd.com</p>\r\n\r\n<p>&bull;&nbsp;Candidates can apply through online</p>\r\n\r\n<p>&bull;&nbsp;Candidates should ensure that they fulfill the eligibility criteria as per requirements</p>\r\n\r\n<p>&bull;&nbsp;Pay the application fee, if needed.</p>\r\n\r\n<p>&bull;&nbsp;Click on the submit button for submission of the application.</p>\r\n\r\n<p>&bull;&nbsp;Take a print out the application for future use</p>\r\n\r\n<p><strong>Important Instructions:</strong></p>\r\n\r\n<p>Before Applying, Candidates are advised to go through the instructions given in the notice of examination very carefully.</p>\r\n\r\n<p><strong>Important</strong><strong>&nbsp;Dates:</strong></p>\r\n\r\n<p><strong>Application Submission Dates: 30.11.2019 to 19.12.2019</strong></p>\r\n\r\n<p><strong><a href=\"https://www.wisdomjobs.com/userfiles/jobs/file/Dec19-03/Rites-ltd-72%20-%2074%20_%202019%20SnT%20DFC%20Phase%201,%202%20pay%20scale.pdf\" target=\"_blank\">Click here for Advt Details</a></strong></p>\r\n\r\n<p><strong><a href=\"http://ritesltd.com/\" target=\"_blank\">Click here for Apply Online</a></strong></p>\r\n', '', '', '', 1, '2019-12-03 05:53:25'),
(7, 13, 349, 1, 2, 'LIC Assistant Pre Exam Result 2019', '', '', '<p>Life Insurance Corporation of India (LIC) has Recently Uploaded Pre Exam Result for the Post of Assistant in Various Zone Recruitment 2019. Those Candidates Who have Applied for this Recruitment Exam Can Download Result.</p>\r\n\r\n<table style=\"width:750px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<p>Life Insurance Corporation of India (LIC)</p>\r\n\r\n			<h3>Assistants Recruitment 2019</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"text-align:center\">\r\n			<h3>Application Fee</h3>\r\n\r\n			<ul>\r\n				<li>General, OBC Candidates :&nbsp;<strong>Rs. 510/-</strong></li>\r\n				<li>SC, ST Candidates :&nbsp;<strong>Rs. 85/-</strong></li>\r\n				<li>PH Candidates :&nbsp;<strong>Rs. 85/-</strong></li>\r\n			</ul>\r\n			</td>\r\n			<td colspan=\"2\" rowspan=\"2\" style=\"text-align:center; vertical-align:top\">\r\n			<h3>Important Dates</h3>\r\n\r\n			<ul>\r\n				<li>Online Application Start :&nbsp;<strong>17&nbsp;September 2019</strong></li>\r\n				<li>Registration Last Date :&nbsp;<strong>01 October 2019</strong></li>\r\n				<li>Fee Payment Last Date :&nbsp;<strong>01 October 2019</strong></li>\r\n				<li>New Exam Date :&nbsp;<strong>30-31 October 2019</strong></li>\r\n				<li>Admit Card Available :&nbsp;<strong>16 October 2019</strong></li>\r\n				<li>Result Available :&nbsp;<strong>29 November 2019</strong></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"text-align:center\">\r\n			<h3>Payment Mode</h3>\r\n\r\n			<ul>\r\n				<li>Pay the Exam Fee Through Credit Card, Debit Card, Net Banking Fee Mode.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\" style=\"text-align:center\">\r\n			<h3>Age Limit as on 01/09/2019</h3>\r\n\r\n			<ul>\r\n				<li>Min. Age :&nbsp;<strong>18 Yrs.</strong></li>\r\n				<li>Max. Age :&nbsp;<strong>30 Yrs.</strong></li>\r\n				<li>Read the Notification for Age Relaxation.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\" style=\"text-align:center\">\r\n			<h3>Eligibility Details</h3>\r\n\r\n			<ul>\r\n				<li>Candidates Have Bachelor Degree in any Stream from Recognized University.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\" style=\"text-align:center\">\r\n			<h3>Vacancy Details</h3>\r\n\r\n			<h3>Total Vacancy : 7634 Post</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\" style=\"text-align:center\">\r\n			<h3>Region Wise Vacancy Details</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><strong>Zone Name</strong></td>\r\n			<td style=\"text-align:center\"><strong>District Name</strong></td>\r\n			<td style=\"text-align:center\"><strong>Total Post</strong></td>\r\n			<td style=\"text-align:center\"><strong>District Name</strong></td>\r\n			<td style=\"text-align:center\"><strong>Total Post</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"6\" style=\"text-align:center\">North Central Zone</td>\r\n			<td style=\"text-align:center\">Agra</td>\r\n			<td style=\"text-align:center\">99</td>\r\n			<td style=\"text-align:center\">Gorakhpur</td>\r\n			<td style=\"text-align:center\">262</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Aligarh</td>\r\n			<td style=\"text-align:center\">63</td>\r\n			<td style=\"text-align:center\">Haldwani</td>\r\n			<td style=\"text-align:center\">42</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Allahabad</td>\r\n			<td style=\"text-align:center\">105</td>\r\n			<td style=\"text-align:center\">Kanpur</td>\r\n			<td style=\"text-align:center\">54</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Bareilly</td>\r\n			<td style=\"text-align:center\">71</td>\r\n			<td style=\"text-align:center\">Lucknow</td>\r\n			<td style=\"text-align:center\">54</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Dehradun</td>\r\n			<td style=\"text-align:center\">34</td>\r\n			<td style=\"text-align:center\">Meerut</td>\r\n			<td style=\"text-align:center\">122</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Faizabad</td>\r\n			<td style=\"text-align:center\">185</td>\r\n			<td style=\"text-align:center\">Varanasi</td>\r\n			<td style=\"text-align:center\">222</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"7\" style=\"text-align:center\">Northern Zone</td>\r\n			<td style=\"text-align:center\">Ajmer</td>\r\n			<td style=\"text-align:center\">95</td>\r\n			<td style=\"text-align:center\">Jodhpur</td>\r\n			<td style=\"text-align:center\">188</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Amritsar</td>\r\n			<td style=\"text-align:center\">47</td>\r\n			<td style=\"text-align:center\">Karnal</td>\r\n			<td style=\"text-align:center\">65</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Bikaner</td>\r\n			<td style=\"text-align:center\">126</td>\r\n			<td style=\"text-align:center\">Ludhiana</td>\r\n			<td style=\"text-align:center\">64</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Chandigarh</td>\r\n			<td style=\"text-align:center\">50</td>\r\n			<td style=\"text-align:center\">Rohtak</td>\r\n			<td style=\"text-align:center\">97</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Delhi/ Haryana</td>\r\n			<td style=\"text-align:center\">254</td>\r\n			<td style=\"text-align:center\">Shimla</td>\r\n			<td style=\"text-align:center\">138</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Jaipur</td>\r\n			<td style=\"text-align:center\">217</td>\r\n			<td style=\"text-align:center\">Srinagar</td>\r\n			<td style=\"text-align:center\">71</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Jalandhar</td>\r\n			<td style=\"text-align:center\">25</td>\r\n			<td style=\"text-align:center\">Udaipur</td>\r\n			<td style=\"text-align:center\">107</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"6\" style=\"text-align:center\">East Central Zone</td>\r\n			<td style=\"text-align:center\">Begusarai</td>\r\n			<td style=\"text-align:center\">156</td>\r\n			<td style=\"text-align:center\">Bhubaneshwar</td>\r\n			<td style=\"text-align:center\">73</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Berhampur</td>\r\n			<td style=\"text-align:center\">86</td>\r\n			<td style=\"text-align:center\">Cuttack</td>\r\n			<td style=\"text-align:center\">244</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Bhagalpur</td>\r\n			<td style=\"text-align:center\">70</td>\r\n			<td style=\"text-align:center\">Hazaribagh</td>\r\n			<td style=\"text-align:center\">123</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Jamshedpur</td>\r\n			<td style=\"text-align:center\">74</td>\r\n			<td style=\"text-align:center\">Patna 02</td>\r\n			<td style=\"text-align:center\">242</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Muzaffarpur</td>\r\n			<td style=\"text-align:center\">220</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">Sambhalpur</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">21</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Patna 01</td>\r\n			<td style=\"text-align:center\">188</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"4\" style=\"text-align:center\">Central Zone</td>\r\n			<td style=\"text-align:center\">Bhopal</td>\r\n			<td style=\"text-align:center\">43</td>\r\n			<td style=\"text-align:center\">Jabalpur</td>\r\n			<td style=\"text-align:center\">90</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Bilaspur</td>\r\n			<td style=\"text-align:center\">33</td>\r\n			<td style=\"text-align:center\">Raipur</td>\r\n			<td style=\"text-align:center\">36</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Gwalior</td>\r\n			<td style=\"text-align:center\">51</td>\r\n			<td style=\"text-align:center\">Shahdol</td>\r\n			<td style=\"text-align:center\">55</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Indore</td>\r\n			<td style=\"text-align:center\">90</td>\r\n			<td style=\"text-align:center\">Satna</td>\r\n			<td style=\"text-align:center\">74</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"5\" style=\"text-align:center\">Eastern Zone</td>\r\n			<td style=\"text-align:center\">Asamsol</td>\r\n			<td style=\"text-align:center\">65</td>\r\n			<td style=\"text-align:center\">Bardhwan</td>\r\n			<td style=\"text-align:center\">100</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Guwahati</td>\r\n			<td style=\"text-align:center\">66</td>\r\n			<td style=\"text-align:center\">Jalpaiguri</td>\r\n			<td style=\"text-align:center\">98</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Kharagpur</td>\r\n			<td style=\"text-align:center\">235</td>\r\n			<td style=\"text-align:center\">Kolkata Metropoleun02</td>\r\n			<td style=\"text-align:center\">60</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Slither</td>\r\n			<td style=\"text-align:center\">39</td>\r\n			<td style=\"text-align:center\">Bongai Gaon</td>\r\n			<td style=\"text-align:center\">41</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Kolkata Suburban</td>\r\n			<td style=\"text-align:center\">103</td>\r\n			<td style=\"text-align:center\">Jorhat</td>\r\n			<td style=\"text-align:center\">42</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"6\" style=\"text-align:center\">Southern Zone</td>\r\n			<td style=\"text-align:center\">Chennai</td>\r\n			<td style=\"text-align:center\">20</td>\r\n			<td style=\"text-align:center\">Coimbatore</td>\r\n			<td style=\"text-align:center\">39</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Kottayam</td>\r\n			<td style=\"text-align:center\">43</td>\r\n			<td style=\"text-align:center\">Kozhikode</td>\r\n			<td style=\"text-align:center\">39</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Salem</td>\r\n			<td style=\"text-align:center\">45</td>\r\n			<td style=\"text-align:center\">Thanjavur</td>\r\n			<td style=\"text-align:center\">34</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Tirunelveli</td>\r\n			<td style=\"text-align:center\">21</td>\r\n			<td style=\"text-align:center\">Vellore</td>\r\n			<td style=\"text-align:center\">18</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Ernkulum</td>\r\n			<td style=\"text-align:center\">10</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">Madurai</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">58</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Thriven Drum</td>\r\n			<td style=\"text-align:center\">20</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"8\" style=\"text-align:center\">South Central Zone</td>\r\n			<td style=\"text-align:center\">Bengaluru</td>\r\n			<td style=\"text-align:center\">40</td>\r\n			<td style=\"text-align:center\">Belgaum</td>\r\n			<td style=\"text-align:center\">73</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Hyderabad</td>\r\n			<td style=\"text-align:center\">40</td>\r\n			<td style=\"text-align:center\">Kadapa</td>\r\n			<td style=\"text-align:center\">40</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Machallipatnam</td>\r\n			<td style=\"text-align:center\">24</td>\r\n			<td style=\"text-align:center\">Maisour</td>\r\n			<td style=\"text-align:center\">55</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Raichour</td>\r\n			<td style=\"text-align:center\">73</td>\r\n			<td style=\"text-align:center\">Rajahmundry</td>\r\n			<td style=\"text-align:center\">11</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Udupi</td>\r\n			<td style=\"text-align:center\">28</td>\r\n			<td style=\"text-align:center\">Vizag</td>\r\n			<td style=\"text-align:center\">46</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Dharwad</td>\r\n			<td style=\"text-align:center\">35</td>\r\n			<td style=\"text-align:center\">Shimoga</td>\r\n			<td style=\"text-align:center\">51</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Karim Nagar</td>\r\n			<td style=\"text-align:center\">68</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">Warangal</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">11</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Nellour</td>\r\n			<td style=\"text-align:center\">36</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"8\" style=\"text-align:center\">Western Zone</td>\r\n			<td style=\"text-align:center\">Amrawati</td>\r\n			<td style=\"text-align:center\">72</td>\r\n			<td style=\"text-align:center\">Ahemdabad</td>\r\n			<td style=\"text-align:center\">14</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Bhavnagar</td>\r\n			<td style=\"text-align:center\">21</td>\r\n			<td style=\"text-align:center\">Gandhinagar</td>\r\n			<td style=\"text-align:center\">123</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Kolhapur</td>\r\n			<td style=\"text-align:center\">92</td>\r\n			<td style=\"text-align:center\">Mumbai</td>\r\n			<td style=\"text-align:center\">216</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Nagpur</td>\r\n			<td style=\"text-align:center\">72</td>\r\n			<td style=\"text-align:center\">Nanded</td>\r\n			<td style=\"text-align:center\">63</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Rajkot</td>\r\n			<td style=\"text-align:center\">10</td>\r\n			<td style=\"text-align:center\">Thane</td>\r\n			<td style=\"text-align:center\">98</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Aurangabad</td>\r\n			<td style=\"text-align:center\">64</td>\r\n			<td style=\"text-align:center\">Pune</td>\r\n			<td style=\"text-align:center\">18</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Nashik</td>\r\n			<td style=\"text-align:center\">54</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">Satara</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"text-align:center\">52</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Nadiad</td>\r\n			<td style=\"text-align:center\">51</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\" style=\"text-align:center\">\r\n			<p>Registered Candidates Can Download New Exam Date Notice.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<h2>IMPORTANT LINKS</h2>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><strong>Download Pre Exam Result</strong></p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><a href=\"https://www.licindia.in/Bottom-Links/Recruitment-of-Assistants-2019\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><strong>Download Pre Exam Admit Card</strong></p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><a href=\"https://ibpsonline.ibps.in/licastaug19/clopea_oct19/login.php?appid=cf3a495f2ff2368f0bee19a96134fe7c\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p>Download New Exam Date Notice</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><strong><a href=\"https://www.wisdomjobs.com/userfiles/jobs/file/Oct19-14/LIC-Revised-Exam-dates.pdf\" target=\"_blank\">Click Here</a></strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p>Candidates Login</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><a href=\"https://ibpsonline.ibps.in/licastaug19/\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p>Download Notification</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><a href=\"https://www.licindia.in/Bottom-Links/Recruitment-of-Assistants-2019\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p>Official Website</p>\r\n			</td>\r\n			<td colspan=\"2\" style=\"background-color:#fee2b7; text-align:center\">\r\n			<p><a href=\"https://www.licindia.in/Bottom-Links/Careers/Recruitment-of-Assistants-2019\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', '', 1, '2019-12-03 05:57:08'),
(8, 14, 350, 37, 13, '27 April 2019 Current Affairs', '', '', '<p><strong>1. ICMR Launches Malaria Elimination Research Alliance</strong></p>\r\n\r\n<p>i. The Indian Council of Medical Research has launched the &lsquo;Malaria Elimination Research Alliance (MERA) India which is a conglomeration of partners working on malaria control in order to eliminate the disease from India by 2030.</p>\r\n\r\n<p>ii. The National Vector Borne Diseases Control Program (NVBDCP) of India has also developed a comprehensive framework to achieve the target of &ldquo;Malaria free India by 2030&rdquo;.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>ICMR Headquarters: New Delhi.</p>\r\n\r\n<p><strong>Agreements&nbsp;</strong></p>\r\n\r\n<p><strong>2. Indian Army Inks MoU With NHPC To Build Tunnels On China, Pakistan Borders</strong></p>\r\n\r\n<p>i. Indian Army signed a Memorandum of Understanding (MOU) with National Hydroelectric Power Corporation (NHPC) Limited, to build four underground tunnels along China and Pakistan borders for storage of ammunition and other war-related equipment.</p>\r\n\r\n<p>ii. Three tunnels will be built along the Chinese border and one tunnel will be built along the Pakistan border. The tunnel can store 175-200 metric tonnes of ammunition and the cost of this pilot project is around Rs 15 crore.</p>\r\n\r\n<p><strong>Awards</strong></p>\r\n\r\n<p><strong>3. Rana Dasgupta Wins 2019 Tagore Literary Prize</strong></p>\r\n\r\n<p>i. The second edition of Rabindranath Tagore Literary Prize was awarded to author Rana Dasgupta for his 2010 novel &quot;Solo&quot;, a tale of estrangement and the ultimate failure of material existence.</p>\r\n\r\n<p>ii. The Rabindranath Tagore Literary Prize for social achievement was awarded to Yohei Sasakawa, for &quot;his incredible efforts to uproot leprosy and great contribution to world peace&quot;.</p>\r\n\r\n<p><strong>Banking/Business News</strong></p>\r\n\r\n<p><strong>4. Microsoft Becomes World&rsquo;s Third Company To Be Worth $1 Trillion</strong></p>\r\n\r\n<p>i. Microsoft has reached a valuation of one trillion dollars for the first time after posting an increase in profits. It makes the software giant only the third publicly-traded company in history to reach the threshold after Apple and Amazon passed it in 2018.&nbsp;</p>\r\n\r\n<p>ii. Microsoft&rsquo;s current valuation also means that it has again taken over Apple as the world&rsquo;s most valuable company.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p><strong>Microsoft CEO: Satya Nadella.</strong></p>\r\n\r\n<p><strong>5. RBI Introduces ₹ 20 Banknote In Mahatma Gandhi (New) Series</strong></p>\r\n\r\n<p>i. The Reserve Bank of India will shortly issue ₹ 20 denomination banknotes in the Mahatma Gandhi (New) Series, bearing the signature of Shri Shaktikanta Das, Governor, Reserve Bank of India.</p>\r\n\r\n<p>ii. The new denomination has the motif of Ellora Caves on the reverse, depicting the country&#39;s cultural heritage. The base colour of the note is Greenish Yellow. The dimension of the banknote will be 63 mm x 129 mm.</p>\r\n\r\n<p><strong>Schemes And Committees</strong>&nbsp;</p>\r\n\r\n<p><strong>6. CPWD Constitutes 8-member Committee To Chart Out Design Polic</strong>y</p>\r\n\r\n<p>i. The Central Works Public Department (CPWD) has constituted an expert committee to formulate a design policy for building construction and infrastructure development.&nbsp; The committee has been set up under the chairmanship of CPWD&#39;s Additional Director General M K Sharma.</p>\r\n\r\n<p>ii. The move is aimed at reviving building construction and infrastructure development at all levels in the CPWD which comes under the Housing and Urban Affairs Ministry. The committee has been asked to submit its report to Director General Prabhakar Singh within 30 days.</p>\r\n\r\n<p><strong>Summits and conferences</strong>&nbsp;</p>\r\n\r\n<p><strong>7. ABU Media Summit On Climate Action and Disaster Preparedness Held In Nepal</strong></p>\r\n\r\n<p>i. 5th Asia Pacific Broadcasting Union (ABU) Media Summit on Climate Action and Disaster Preparedness held in Kathmandu.</p>\r\n\r\n<p>ii.&nbsp; The theme of the two-day summit was &ldquo;Media Solutions for Sustainable Future: Saving Lives, Building Resilient Communities&rdquo;.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>Nepal Prime Minister: K P Sharma Oli, Capital: Kathmandu.</p>\r\n\r\n<p><strong>Sports News</strong></p>\r\n\r\n<p><strong>8: ISSF World Cup: Abhishek Verma Wins Gold In 10m Air Pistol</strong></p>\r\n\r\n<p>i. Abhishek Verma won the 10m air pistol gold medal at the ISSF World Cup at Beijing, China. He clinched the top spot with a total score of 242.7.&nbsp;</p>\r\n\r\n<p>ii. Russia&#39;s Artem Chernousov took silver. His brilliant performance in the Shooting World Cup Final also secured a fifth Olympic quota for India.</p>\r\n\r\n<p><strong>Static/Current Takeaways Important for LIC AAO Exam:</strong></p>\r\n\r\n<p>ISSF&ndash; International Shooting Sport Federation, Headquarters: Munich, Germany.</p>\r\n\r\n<p><strong>9. Asian Boxing Championships: India Wins 13 Medals</strong></p>\r\n\r\n<p>i. India won 13 medals, including 2 gold, 4 silver, and 7 bronze at the Asian Boxing Championships in Bangkok. Boxers Pooja Rani and Amit Panghal gave India 2 gold medals.&nbsp;</p>\r\n\r\n<p>ii. While the men won 1 gold, 3 silver, and 3 bronze, the women bagged 1 gold, 1 silver, and 4 bronze medals.</p>\r\n\r\n<p><strong>10: Pankaj Advani Wins Asian Snooker Tour Title</strong></p>\r\n\r\n<p>i. Pankaj Advani, the 21-time India&rsquo;s cueist defeated Ehsan Heydari Nezhad of Iran 6-4 to clinch the Asian Snooker Tour title.&nbsp;</p>\r\n\r\n<p>ii. He had previously bagged the 2nd leg of the Tour in China and was leading the ranking before the final leg of the Tour in Bengaluru.</p>\r\n\r\n<p><strong>Obituaries</strong></p>\r\n\r\n<p><strong>11. Terry Rawlings, British Film Editor Passes Away</strong></p>\r\n\r\n<p>i. Terry Rawlings, a British film and sound editor has passed away. He was an Oscar nominee for his work on Best Picture winner &ldquo;Chariots of Fire,&rdquo;.</p>\r\n\r\n<p>ii He was born in 1933.&nbsp; The 5-time BAFTA nominee also received a career achievement award from the American Cinema Editors society in 2006.</p>\r\n', '', '', '', 1, '2019-12-15 10:17:38'),
(9, 14, 350, 37, 13, '25 April 2019 Current Affairs', '', '', '<p><strong>1. World&#39;s 1st Malaria Vaccine Launched In Africa</strong></p>\r\n\r\n<p>i. The world&#39;s first-ever malaria vaccine was launched in a pilot project in Africa&#39;s Malawi. The country is the first of three in Africa in which the vaccine, known as RTS,S, will be made available to children up to 2 years of age.</p>\r\n\r\n<p>ii. Ghana and Kenya will introduce the vaccine soon. About 93% of the world&#39;s malaria-related deaths in 2017 occurred in Africa.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Mains Exam-</p>\r\n\r\n<p>WHO Headquarters: Geneva, Switzerland, Director general: Tedros Adhanom.</p>\r\n\r\n<p><strong>2. Kazakhstan Sets Up Coordinating Council To Attract Indian Investments</strong></p>\r\n\r\n<p>i. Kazakhstan has set up Coordinating Council for attracting foreign investments including from India. A decision was taken to lay down the functions of Investment Ombudsman in order to venture for new approaches to improve the investment scenario in Kazakhstan.</p>\r\n\r\n<p>ii. The meeting identified the Astana International Financial Centre (AIFC) as a Unified Center for the coordination of work on investment and promotion of the investment image of Kazakhstan.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>Kazakhstan PM: Askar Mamin, Capital: Nur-Sultan, Currency: Kazakhstani Tenge.</p>\r\n\r\n<p><strong>3. Iran, Pakistan To Set Up Border &#39;Reaction Force&#39;</strong></p>\r\n\r\n<p>i. Iran and Pakistan have agreed to set up a joint border &quot;reaction force&quot; to combat the attacks by militant groups on both sides their frontier.&nbsp;</p>\r\n\r\n<p>ii. Both the nations have decided to collaborate to form the joint quick reaction force by increasing cooperation between border forces and intelligence agencies.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>Iran President: Hassan Rohani, Pakistan PM: Imran Khan.</p>\r\n\r\n<p>Iran Capital: Tehran, Currency: Iranian rial.</p>\r\n\r\n<p><strong>4. MD Karnam Sekar Appointed As IOB&#39;s New MD &amp; CEO</strong></p>\r\n\r\n<p>i. Former Dena Bank MD &amp; CEO Karnam Sekar is set to take over as the new Managing Director and CEO of Indian Overseas Bank from July 1, 2019. He will take over from R Subramaniakumar.</p>\r\n\r\n<p>ii. Earlier Sekar was the MD &amp; CEO of Dena Bank till September 2018. He was also the Deputy Managing Director and Chief Credit Officer in State Bank of India heading its highest Credit Committee.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>IOB Headquarters: Chennai.</p>\r\n\r\n<p><strong>5. RBI Becomes The First APAC Central Bank To Begin Interest Rate Easing Cycle</strong></p>\r\n\r\n<p>i. The Reserve Bank of India has become the first central bank in the Asia-Pacific (APAC) region to begin an explicit interest rate easing cycle. The Monetary Policy Committee (MPC), headed by RBI Governor Shaktikanta Das, cut rates in February and April.</p>\r\n\r\n<p>ii. In the four months of 2019, the RBI has cut policy interest rates twice by 0.25% each to a one-year low of 6%. This is the first back-to-back rate cut since the MPC was formed in late 2016.</p>\r\n\r\n<p><strong>6: Kotak Bank Launches Debit Card-Based e-mandate On NPCI&rsquo;s API Platform</strong></p>\r\n\r\n<p>i. Kotak Mahindra Bank (Kotak) has launched the first debit card-based authentication solution on NPCI&rsquo;s (National Payments Corporation of India) e-Mandate (electronic mandate) API (Application Program Interface) platform.</p>\r\n\r\n<p>ii. With this, it has become the first ever Destination Bank to go live with both Net Banking and Debit Card-based e-mandate authentication.&nbsp;</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>Kotak Mahindra Bank MD &amp; CEO: Uday Kotak, headquarters: Mumbai.</p>\r\n\r\n<p>e-NACH: Electronic National Automated Clearing House; OTP: One Time Password.</p>\r\n\r\n<p><strong>7: IndusInd Bank Receives NCLT Approval For Merger With Bharat Financial Inclusion</strong></p>\r\n\r\n<p>i. National Company Law Tribunal (NCLT) approved the merger of private sector lender IndusInd Bank with Bharat Financial Inclusion (BFIL), a microfinance company.</p>\r\n\r\n<p>ii. Earlier, IndusInd Bank had received &lsquo;No Objection&rsquo; from Reserve Bank of India, National Stock Exchange and Bombay Stock Exchange. Bharat Financial will become a subsidiary of the private lender.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>IndusInd Bank Headquarter: Mumbai, CEO: Romesh Sobti.</p>\r\n\r\n<p>NCLT Headquarter: New Delhi.</p>\r\n\r\n<p>8. SEBI Reduces Minimum Subscription Requirement For REITs, InvITs</p>\r\n\r\n<p>i. Markets regulator SEBI (Securities and Exchange Board of India) has reduced the minimum subscription requirement as well as defined trading lots for Real Estate Investment Trusts (REITs) and Infrastructure Investment Trusts (InvITs). SEBI has also increased the leverage limit for InvITs from 49% to 70%.</p>\r\n\r\n<p>ii. While making an initial public offer and follow-on offer, the minimum subscription shall not be less than Rs 1 lakh for InvITs and Rs 50,000 for REITs. Currently, in the case of a REIT issue, the minimum subscription from any investor in an initial offer and follow-on public offer is not less than Rs 2 lakh, while the same is Rs 10 lakh in case of InvIT.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>SEBI Headquarter: Mumbai, Chairperson: Ajay Tyagi.</p>\r\n\r\n<p><strong>9: BuyUcoin Introduces First Indian Platform for Wholesale Cryptocurrency Trading</strong></p>\r\n\r\n<p>i. BuyUcoin, second oldest Cryptocurrency Exchange in India, has introduced a new and unique platform for wholesale cryptocurrency trading.&nbsp;</p>\r\n\r\n<p>ii. It is also known as OTC (Over-the-counter) Desk that allows users to trade on a large scale with low price fluctuations.</p>\r\n\r\n<p><strong>10: RBI Sells Entire Stake In NHB, Nabard To Government For INR 1,470 crore</strong></p>\r\n\r\n<p>i. The Reserve Bank of India (RBI) has divested its entire stake held in National Housing Bank (NHB), and National Bank for Agriculture and Rural Development (Nabard) to the government, which now holds 100% in these entities.</p>\r\n\r\n<p>ii. The transactions were completed in February (Nabard) and March (NHB). RBI had 100% shareholding in NHB, which was divested for INR 1,450 crore. RBI had 72.5% stake in Nabard, out of which 71.5%, worth INR1,430 crore was divested in October 2010 and the residual shareholding was divested in February 2019 for INR 20 crore.</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>NHB is the regulator for housing finance companies while NABARD is responsible for regulating and supervising the functions of Co-operative banks and RRBs.</p>\r\n\r\n<p><strong>11. Asian Athletics Championships: India Finishes Fourth</strong></p>\r\n\r\n<p>i. Asian Athletics Championships 2019 held at Doha in Qatar. It was the 23rd edition of the Championships. India ended at the fourth spot in the medals tally with 3 Gold, 7 Silver and 7 Bronze. Bahrain topped the table with 11 Gold, 7 Silver and 4 Bronze. China was second while Japan was third.</p>\r\n\r\n<p>ii. Tejinder Pal Singh Toor (Shot put), Gomathi Marimuthu(800 metres) and P. U. Chitra (1500 metres) won gold for India. India had won 29 medals - 12 Gold, 5 Silver and 12 Bronze in the last edition in Bhubaneswar in 2017, topping the medal tally for the first time.</p>\r\n\r\n<p><strong>12. World Malaria Day: 25 April</strong></p>\r\n\r\n<p>i. Every year on 25 April, people around the globe observe World Malaria Day (WMD) to raise awareness and funds for the treatment and prevention of the disease.&nbsp;</p>\r\n\r\n<p>ii. This year, the theme for the day is &ldquo;Zero malaria starts with me&rdquo; and it is being hosted by the World Health Organisation (WHO).</p>\r\n\r\n<p>Static/Current Takeaways Important for LIC AAO Exam:</p>\r\n\r\n<p>WHO Headquarters: Geneva, Switzerland, Director general: Tedros Adhanom.</p>\r\n', '', '', '', 1, '2019-12-15 10:18:52'),
(10, 4, 161, 28, 6, 'Punjab National Bank PNB Technical Officer Result/ Interview Letter 2019', '', '', '<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<p><strong>Punjab National Bank (PNB)</strong></p>\r\n\r\n			<p><strong>Technical Officer Recruitment 2019</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<h3><strong>Application Fee</strong></h3>\r\n\r\n			<ul>\r\n				<li>General, OBC Candidates :&nbsp;<strong>Rs. 600/-</strong></li>\r\n				<li>SC, ST Candidates :&nbsp;<strong>Rs. 100/-</strong></li>\r\n				<li>PH Candidates:&nbsp;<strong>Rs. 100/-</strong></li>\r\n			</ul>\r\n			</td>\r\n			<td colspan=\"2\" rowspan=\"2\">\r\n			<h3><strong>Important Dates</strong></h3>\r\n\r\n			<ul>\r\n				<li>Online Application Start :&nbsp;<strong>14 February 2019</strong></li>\r\n				<li>Registration Last Date :&nbsp;<strong>02 March 2019</strong></li>\r\n				<li>Fee Payment Last Date :&nbsp;<strong>02 March 2019</strong></li>\r\n				<li>Exam Date :&nbsp;<strong>24 March 2019</strong></li>\r\n				<li>Admit Card Available :&nbsp;<strong>15 March 2019</strong></li>\r\n				<li>Result Available :&nbsp;<strong>23 April 2019</strong></li>\r\n				<li>Interview Letter Available :&nbsp;<strong>24 April 2019</strong></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<h3><strong>Payment Mode</strong></h3>\r\n\r\n			<ul>\r\n				<li>Pay the Exam Fee Through Credit Card, Debit Card, Net Banking Fee Mode.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<h3><strong>Vacancy Details | Eligibility | Age Limit as on 01/01/2019</strong></h3>\r\n\r\n			<p><strong>Total Vacancy : 325 Post</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\"><strong>Post Name</strong></td>\r\n			<td><strong>Age Limit</strong></td>\r\n			<td><strong>Total Post</strong></td>\r\n			<td><strong>Eligibility</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Officer IT</td>\r\n			<td>21-28 Yrs.</td>\r\n			<td>120</td>\r\n			<td>\r\n			<ul>\r\n				<li>BE/ B.Tech/ MCA Degree in Computer Science/ IT/ Electronics and Communication with 1 Yrs. Experience.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Manager (Law)</td>\r\n			<td>25-32 Yrs.</td>\r\n			<td>55</td>\r\n			<td>\r\n			<ul>\r\n				<li>Bachelor Degree in law (LLB) with 3 Yrs. Advocacy Practice.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Sr. Manager (Law)</td>\r\n			<td>28-38 Yrs.</td>\r\n			<td>55</td>\r\n			<td>\r\n			<ul>\r\n				<li>Bachelor Degree in law (LLB) with 7 Yrs. Advocacy Practice.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Manager (HRD)</td>\r\n			<td>25-35 Yrs.</td>\r\n			<td>18</td>\r\n			<td>\r\n			<ul>\r\n				<li>PG Degree/ Diploma in Management/ Industries Relation/ HR/ HRD/ HRM with 3 Yrs. Experience.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Sr. Manager (Credit)</td>\r\n			<td>25-37 Yrs.</td>\r\n			<td>51</td>\r\n			<td>\r\n			<ul>\r\n				<li>CA/ ICWA/ PGDM/ MBA/ with Specialist in Finance with 3 Yrs. Experience.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Manager (Credit)</td>\r\n			<td>25-35 Yrs.</td>\r\n			<td>26</td>\r\n			<td>\r\n			<ul>\r\n				<li>CA/ ICWA/ PGDM/ MBA/ with Specialist in Finance with 5 Yrs. Experience.</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"5\">\r\n			<h2><strong>IMPORTANT LINKS</strong></h2>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Download Interview Letter</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><a href=\"https://ibpsonline.ibps.in/pnbsplojan19/clinta_apr19/login.php?appid=b0865f8795cc0ff7885e90b3d3d758cb\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Download Result</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><a href=\"https://www.pnbindia.in/downloadprocess.aspx?fid=yhEhgQbRHkdf3ueghQG80A==\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Download Admit Card</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><a href=\"https://ibpsonline.ibps.in/pnbsplojan19/cloea_mar19/login.php?appid=1bbd11bdf145c58037ee2dc466da1df1\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Candidates Login</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><a href=\"https://ibpsonline.ibps.in/pnbsplojan19/\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Download Notification</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><strong><a href=\"https://www.wisdomjobs.com/userfiles/jobs/file/Apr19-23/pnbtechnicalofficernotification.pdf\" target=\"_blank\">Click Here</a></strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">\r\n			<p><strong>Official Website</strong></p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p><a href=\"https://www.pnbindia.in/home.aspx\" target=\"_blank\"><strong>Click Here</strong></a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', '', 1, '2019-12-15 10:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `sid` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_url` varchar(255) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`sid`, `state_name`, `state_url`, `createdon`, `status`) VALUES
(1, 'Andaman Nicobar Islands', '', '2019-11-14 04:37:55', 1),
(2, 'Andhra Pradesh', '', '2019-11-14 04:37:55', 1),
(3, 'Arunachal Pradesh', '', '2019-11-14 04:37:55', 1),
(4, 'Assam', '', '2019-11-14 04:37:55', 1),
(5, 'Bihar', '', '2019-11-14 04:37:55', 1),
(6, 'Chandigarh', '', '2019-11-14 04:37:55', 1),
(7, 'Chhattisgarh', '', '2019-11-14 04:37:55', 1),
(8, 'Dadar Nagar Haveli', '', '2019-11-14 04:37:55', 1),
(9, 'Daman Diu', '', '2019-11-14 04:37:55', 1),
(10, 'Delhi ', '', '2019-11-14 04:37:55', 1),
(11, 'Goa', '', '2019-11-14 04:37:55', 1),
(12, 'Gujarat', '', '2019-11-14 04:37:55', 1),
(13, 'Haryana', '', '2019-11-14 04:37:55', 1),
(14, 'Himachal Pradesh', '', '2019-11-14 04:37:55', 1),
(15, 'Jammu Kashmir', '', '2019-11-14 04:37:55', 1),
(16, 'Jharkhand', '', '2019-11-14 04:37:55', 1),
(17, 'Karnataka', '', '2019-11-14 04:37:55', 1),
(18, 'Kerala', '', '2019-11-14 04:37:55', 1),
(19, 'Lakshadeep', '', '2019-11-14 04:37:55', 1),
(20, 'Madya Pradesh', '', '2019-11-14 04:37:55', 1),
(21, 'Maharashtra', '', '2019-11-14 04:37:55', 1),
(22, 'Manipur', '', '2019-11-14 04:37:55', 1),
(23, 'Meghalaya', '', '2019-11-14 04:37:55', 1),
(24, 'Mizoram', '', '2019-11-14 04:37:55', 1),
(25, 'Nagaland', '', '2019-11-14 04:37:55', 1),
(26, 'Orissa', '', '2019-11-14 04:37:55', 1),
(27, 'Pondicherry', '', '2019-11-14 04:37:55', 1),
(28, 'Punjab', '', '2019-11-14 04:37:55', 1),
(29, 'Rajasthan', '', '2019-11-14 04:37:55', 1),
(30, 'Sikkim', '', '2019-11-14 04:37:55', 1),
(31, 'Tamil Nadu', '', '2019-11-14 04:37:55', 1),
(32, 'Telangana State', '', '2019-11-14 04:37:55', 1),
(33, 'Tripura', '', '2019-11-14 04:37:55', 1),
(34, 'Uttar Pradesh', '', '2019-11-14 04:37:55', 1),
(35, 'Uttaranchal', '', '2019-11-14 04:37:55', 1),
(36, 'West Bengal', '', '2019-11-14 04:37:55', 1),
(37, 'all', '', '2019-12-15 10:11:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_cid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sub_categoryname` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cid`, `cid`, `sub_categoryname`, `url`, `createdon`, `status`) VALUES
(1, 1, 'SSC Central', '', '2019-11-13 06:30:42', 1),
(2, 1, 'SSC Exam Pattern', '', '2019-11-13 06:30:42', 1),
(3, 1, 'SSC Interview Results', '', '2019-11-13 06:30:42', 1),
(4, 1, 'SSC Previous Model Papers', '', '2019-11-13 06:30:42', 1),
(5, 1, 'SSC Selection Process', '', '2019-11-13 06:30:42', 1),
(6, 1, 'State Wise SSC Posts', '', '2019-11-13 06:30:42', 1),
(7, 2, 'BSF', '', '2019-11-13 06:30:42', 1),
(8, 2, 'Indian Air force', '', '2019-11-13 06:30:42', 1),
(9, 2, 'Indian Army', '', '2019-11-13 06:30:42', 1),
(10, 2, 'Indian Navy', '', '2019-11-13 06:30:42', 1),
(11, 2, 'Police', '', '2019-11-13 06:30:42', 1),
(12, 3, 'APPSC', '', '2019-11-13 06:30:42', 1),
(13, 3, 'APSC', '', '2019-11-13 06:30:42', 1),
(14, 3, 'APSC Exam Pattern', '', '2019-11-13 06:30:42', 1),
(15, 3, 'Arunachal Pradesh PSC', '', '2019-11-13 06:30:42', 1),
(16, 3, 'BPSC', '', '2019-11-13 06:30:42', 1),
(17, 3, 'CGPSC', '', '2019-11-13 06:30:42', 1),
(18, 3, 'Goa PSC', '', '2019-11-13 06:30:42', 1),
(19, 3, 'GPSC', '', '2019-11-13 06:30:42', 1),
(20, 3, 'HPPSC', '', '2019-11-13 06:30:42', 1),
(21, 3, 'HPSC', '', '2019-11-13 06:30:42', 1),
(22, 3, 'JKPSC', '', '2019-11-13 06:30:42', 1),
(23, 3, 'JPSC', '', '2019-11-13 06:30:42', 1),
(24, 3, 'Kerala PSC', '', '2019-11-13 06:30:42', 1),
(25, 3, 'KPSC', '', '2019-11-13 06:30:42', 1),
(26, 3, 'Manipur PSC', '', '2019-11-13 06:30:42', 1),
(27, 3, 'Meghalaya PSC', '', '2019-11-13 06:30:42', 1),
(28, 3, 'Mizoram PSC', '', '2019-11-13 06:30:42', 1),
(29, 3, 'MPPSC', '', '2019-11-13 06:30:42', 1),
(30, 3, 'MPSC', '', '2019-11-13 06:30:42', 1),
(31, 3, 'Nagaland PSC', '', '2019-11-13 06:30:42', 1),
(32, 3, 'OPSC', '', '2019-11-13 06:30:42', 1),
(33, 3, 'PPSC', '', '2019-11-13 06:30:42', 1),
(34, 3, 'RPSC', '', '2019-11-13 06:30:42', 1),
(35, 3, 'SPSC', '', '2019-11-13 06:30:42', 1),
(36, 3, 'TNPSC', '', '2019-11-13 06:30:42', 1),
(37, 3, 'TNPSC Interview Results', '', '2019-11-13 06:30:42', 1),
(38, 3, 'TPSC', '', '2019-11-13 06:30:42', 1),
(39, 3, 'TSPSC', '', '2019-11-13 06:30:42', 1),
(40, 3, 'UKPSC', '', '2019-11-13 06:30:42', 1),
(41, 3, 'UPPSC', '', '2019-11-13 06:30:42', 1),
(42, 3, 'UPPSC Exam Pattern', '', '2019-11-13 06:30:42', 1),
(43, 3, 'UPSC', '', '2019-11-13 06:30:42', 1),
(44, 3, 'UPSC Exam Pattern', '', '2019-11-13 06:30:42', 1),
(45, 3, 'UPSC Interview Questions', '', '2019-11-13 06:30:42', 1),
(46, 3, 'UPSC Interview Results', '', '2019-11-13 06:30:42', 1),
(47, 3, 'UPSC Previous Model Papers', '', '2019-11-13 06:30:42', 1),
(48, 3, 'WBPSC', '', '2019-11-13 06:30:42', 1),
(49, 4, 'Abhyudaya bank', '', '2019-11-13 06:30:42', 1),
(50, 4, 'Akola Urban Cooperative Bank Ltd', '', '2019-11-13 06:30:42', 1),
(51, 4, 'Allahabad bank', '', '2019-11-13 06:30:42', 1),
(52, 4, 'Andhra Bank', '', '2019-11-13 06:30:42', 1),
(53, 4, 'Andhra Pragathi Grameena bank', '', '2019-11-13 06:30:42', 1),
(54, 4, 'AP Mahesh Bank', '', '2019-11-13 06:30:42', 1),
(55, 4, 'Arunachal Pradesh Rural Bank', '', '2019-11-13 06:30:42', 1),
(56, 4, 'Aryapuram Co Operative Urban Bank', '', '2019-11-13 06:30:42', 1),
(57, 4, 'Aryavart Gramin Bank', '', '2019-11-13 06:30:42', 1),
(58, 4, 'Assam Co-operative Apex Bank Recruitment', '', '2019-11-13 06:30:42', 1),
(59, 4, 'Assam Gramin Vikash Bank', '', '2019-11-13 06:30:42', 1),
(60, 4, 'Axis Bank', '', '2019-11-13 06:30:42', 1),
(61, 4, 'Ballari District Central Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(62, 4, 'Bangiya Gramin Vikash Bank', '', '2019-11-13 06:30:42', 1),
(63, 4, 'Bank Exam Pattern', '', '2019-11-13 06:30:42', 1),
(64, 4, 'Bank Interview Questions', '', '2019-11-13 06:30:42', 1),
(65, 4, 'Bank Interview Results', '', '2019-11-13 06:30:42', 1),
(66, 4, 'Bank Of Baroda', '', '2019-11-13 06:30:42', 1),
(67, 4, 'Bank Of India', '', '2019-11-13 06:30:42', 1),
(68, 4, 'Bank Of Maharashtra', '', '2019-11-13 06:30:42', 1),
(69, 4, 'Banking Previous Model Papers', '', '2019-11-13 06:30:42', 1),
(70, 4, 'Baroda Gujarat Gramin Bank', '', '2019-11-13 06:30:42', 1),
(71, 4, 'Baroda Rajasthan Kshetriya Gramin Bank', '', '2019-11-13 06:30:42', 1),
(72, 4, 'Baroda Up Gramin Bank', '', '2019-11-13 06:30:42', 1),
(73, 4, 'Bassein Catholic Bank', '', '2019-11-13 06:30:42', 1),
(74, 4, 'Bhandara Urban Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(75, 4, 'Bharatiya Mahila Bank', '', '2019-11-13 06:30:42', 1),
(76, 4, 'Bharatiya Reserve Bank Note Mudran Private Limited', '', '2019-11-13 06:30:42', 1),
(77, 4, 'Bihar Gramin Bank', '', '2019-11-13 06:30:42', 1),
(78, 4, 'Bihar State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(79, 4, 'Canara Bank', '', '2019-11-13 06:30:42', 1),
(80, 4, 'Catholic Syrian Bank', '', '2019-11-13 06:30:42', 1),
(81, 4, 'Cauvery Kalpatharu Grameena Bank', '', '2019-11-13 06:30:42', 1),
(82, 4, 'Central Bank Of India', '', '2019-11-13 06:30:42', 1),
(83, 4, 'Central cooperative bank of madhya pradesh (apex)', '', '2019-11-13 06:30:42', 1),
(84, 4, 'Central Madhya Pradesh Gramin Bank', '', '2019-11-13 06:30:42', 1),
(85, 4, 'Chaitanya Godavari Grameena Bank', '', '2019-11-13 06:30:42', 1),
(86, 4, 'Chattisgarh Gramin Bank', '', '2019-11-13 06:30:42', 1),
(87, 4, 'City Union Bank', '', '2019-11-13 06:30:42', 1),
(88, 4, 'Corporation Bank', '', '2019-11-13 06:30:42', 1),
(89, 4, 'Cosmos Bank', '', '2019-11-13 06:30:42', 1),
(90, 4, 'Deccan Grameena Bank', '', '2019-11-13 06:30:42', 1),
(91, 4, 'Dena Bank', '', '2019-11-13 06:30:42', 1),
(92, 4, 'Dena Gujarat Gramin Bank', '', '2019-11-13 06:30:42', 1),
(93, 4, 'DNS Bank', '', '2019-11-13 06:30:42', 1),
(94, 4, 'EXIM Bank', '', '2019-11-13 06:30:42', 1),
(95, 4, 'Federal Bank', '', '2019-11-13 06:30:42', 1),
(96, 4, 'Greater Bank', '', '2019-11-13 06:30:42', 1),
(97, 4, 'Gurgaon Gramin Bank', '', '2019-11-13 06:30:42', 1),
(98, 4, 'Harco Bank', '', '2019-11-13 06:30:42', 1),
(99, 4, 'Haryana Gramin Bank', '', '2019-11-13 06:30:42', 1),
(100, 4, 'Haryana State Cooperative Apex Bank Ltd', '', '2019-11-13 06:30:42', 1),
(101, 4, 'HDFC Bank', '', '2019-11-13 06:30:42', 1),
(102, 4, 'Himachal Gramin Bank', '', '2019-11-13 06:30:42', 1),
(103, 4, 'HP State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(104, 4, 'IBPS', '', '2019-11-13 06:30:42', 1),
(105, 4, 'ICICI Bank', '', '2019-11-13 06:30:42', 1),
(106, 4, 'IDBI Bank', '', '2019-11-13 06:30:42', 1),
(107, 4, 'India Post Payments Bank', '', '2019-11-13 06:30:42', 1),
(108, 4, 'Indian Bank', '', '2019-11-13 06:30:42', 1),
(109, 4, 'Indian Overseas Bank', '', '2019-11-13 06:30:42', 1),
(110, 4, 'IndusInd Bank', '', '2019-11-13 06:30:42', 1),
(111, 4, 'Ing Vysya Bank', '', '2019-11-13 06:30:42', 1),
(112, 4, 'Jaipur Thar Gramin Bank', '', '2019-11-13 06:30:42', 1),
(113, 4, 'Jharkhand Gramin Bank', '', '2019-11-13 06:30:42', 1),
(114, 4, 'Jharkhand State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(115, 4, 'JK Bank', '', '2019-11-13 06:30:42', 1),
(116, 4, 'Jogindra Central Cooperative Bank Ltd', '', '2019-11-13 06:30:42', 1),
(117, 4, 'Kalupur Bank', '', '2019-11-13 06:30:42', 1),
(118, 4, 'Kalyan Janata Sahakari Bank', '', '2019-11-13 06:30:42', 1),
(119, 4, 'Kalyanaraman Bank', '', '2019-11-13 06:30:42', 1),
(120, 4, 'Kanchipuram Central Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(121, 4, 'Karnataka Bank', '', '2019-11-13 06:30:42', 1),
(122, 4, 'Karnataka State Cooperative Apex Bank', '', '2019-11-13 06:30:42', 1),
(123, 4, 'Karur Vysya Bank', '', '2019-11-13 06:30:42', 1),
(124, 4, 'Kashi Gomti Samyut Gramin Bank', '', '2019-11-13 06:30:42', 1),
(125, 4, 'Kaveri Grameena Bank', '', '2019-11-13 06:30:42', 1),
(126, 4, 'Kerala Gramin Bank', '', '2019-11-13 06:30:42', 1),
(127, 4, 'Kerala State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(128, 4, 'Kotak Mahindra Bank', '', '2019-11-13 06:30:42', 1),
(129, 4, 'Krishna Grameena Bank', '', '2019-11-13 06:30:42', 1),
(130, 4, 'KVG Bank', '', '2019-11-13 06:30:42', 1),
(131, 4, 'Lakshmi Vilas Bank', '', '2019-11-13 06:30:42', 1),
(132, 4, 'Madhya Bharat Gramin Bank', '', '2019-11-13 06:30:42', 1),
(133, 4, 'Maharashtra Gramin Bank', '', '2019-11-13 06:30:42', 1),
(134, 4, 'Maharashtra State Cooperative Bank Ltd', '', '2019-11-13 06:30:42', 1),
(135, 4, 'Mandya Distric Central Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(136, 4, 'Manipur Rural Bank', '', '2019-11-13 06:30:42', 1),
(137, 4, 'Marudhara Gramin Bank', '', '2019-11-13 06:30:42', 1),
(138, 4, 'Meghalaya Cooperative Apex Bank', '', '2019-11-13 06:30:42', 1),
(139, 4, 'Meghalaya Rural Bank', '', '2019-11-13 06:30:42', 1),
(140, 4, 'Mehsana Urban Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(141, 4, 'Mizoram Rural Bank', '', '2019-11-13 06:30:42', 1),
(142, 4, 'MP State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(143, 4, 'Nagaland Rural Bank', '', '2019-11-13 06:30:42', 1),
(144, 4, 'Nainital Bank', '', '2019-11-13 06:30:42', 1),
(145, 4, 'Narmada Jhabua Gramin Bank', '', '2019-11-13 06:30:42', 1),
(146, 4, 'Narmada Malwa Gramin Bank', '', '2019-11-13 06:30:42', 1),
(147, 4, 'National Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(148, 4, 'National Housing Bank', '', '2019-11-13 06:30:42', 1),
(149, 4, 'Neelachal Gramaya Bank', '', '2019-11-13 06:30:42', 1),
(150, 4, 'Odisha Gramya Bank', '', '2019-11-13 06:30:42', 1),
(151, 4, 'Odisha State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(152, 4, 'Oriental Bank Of Commerce', '', '2019-11-13 06:30:42', 1),
(153, 4, 'Pallavan Grama Bank', '', '2019-11-13 06:30:42', 1),
(154, 4, 'Pandyan Grama Bank', '', '2019-11-13 06:30:42', 1),
(155, 4, 'Panjab And Sind Bank', '', '2019-11-13 06:30:42', 1),
(156, 4, 'Paschim Banga Gramin Bank', '', '2019-11-13 06:30:42', 1),
(157, 4, 'Pragathi Gramin Bank', '', '2019-11-13 06:30:42', 1),
(158, 4, 'Prathama Bank', '', '2019-11-13 06:30:42', 1),
(159, 4, 'Punjab Gramin Bank', '', '2019-11-13 06:30:42', 1),
(160, 4, 'Punjab Maharashtra Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(161, 4, 'Punjab National Bank', '', '2019-11-13 06:30:42', 1),
(162, 4, 'Purvanchal Gramin Bank', '', '2019-11-13 06:30:42', 1),
(163, 4, 'Rajkot Nagarik Sahakari Bank', '', '2019-11-13 06:30:42', 1),
(164, 4, 'Ratnakar Bank', '', '2019-11-13 06:30:42', 1),
(165, 4, 'Repco Bank', '', '2019-11-13 06:30:42', 1),
(166, 4, 'Reserve bank of india', '', '2019-11-13 06:30:42', 1),
(167, 4, 'Rushikulya Gramya Bank', '', '2019-11-13 06:30:42', 1),
(168, 4, 'Saptagiri Grameena Bank', '', '2019-11-13 06:30:42', 1),
(169, 4, 'Saraswat Bank', '', '2019-11-13 06:30:42', 1),
(170, 4, 'Saurashtra Gramin Bank', '', '2019-11-13 06:30:42', 1),
(171, 4, 'Shamrao vithal co-op. bank', '', '2019-11-13 06:30:42', 1),
(172, 4, 'Shreyas Gramin Bank', '', '2019-11-13 06:30:42', 1),
(173, 4, 'South Indian Bank', '', '2019-11-13 06:30:42', 1),
(174, 4, 'South Malabar Gramin Bank', '', '2019-11-13 06:30:42', 1),
(175, 4, 'State Bank Of India', '', '2019-11-13 06:30:42', 1),
(176, 4, 'Surat District Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(177, 4, 'Surat Peoples Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(178, 4, 'Sutlej Gramin Bank', '', '2019-11-13 06:30:42', 1),
(179, 4, 'Syndicate Bank', '', '2019-11-13 06:30:42', 1),
(180, 4, 'Tamilnadu mercantile bank', '', '2019-11-13 06:30:42', 1),
(181, 4, 'Tamilnadu State Apex Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(182, 4, 'Telangana Grameena Bank', '', '2019-11-13 06:30:42', 1),
(183, 4, 'Thane District Central Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(184, 4, 'Tripura Gramin Bank', '', '2019-11-13 06:30:42', 1),
(185, 4, 'Tripura State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(186, 4, 'UCO Bank', '', '2019-11-13 06:30:42', 1),
(187, 4, 'Union Bank Of India', '', '2019-11-13 06:30:42', 1),
(188, 4, 'United Bank Of India', '', '2019-11-13 06:30:42', 1),
(189, 4, 'Utkal Grameen Bank', '', '2019-11-13 06:30:42', 1),
(190, 4, 'Uttar Bihar Gramin Bank', '', '2019-11-13 06:30:42', 1),
(191, 4, 'Uttarakhand State Cooperative Bank', '', '2019-11-13 06:30:42', 1),
(192, 4, 'Uttaranchal Gramin Bank', '', '2019-11-13 06:30:42', 1),
(193, 4, 'Vananchal Gramin Bank', '', '2019-11-13 06:30:42', 1),
(194, 4, 'Vardhaman Bank', '', '2019-11-13 06:30:42', 1),
(195, 4, 'Vijaya Bank', '', '2019-11-13 06:30:42', 1),
(196, 4, 'YES Bank', '', '2019-11-13 06:30:42', 1),
(197, 5, 'Education Previous Model Papers', '', '2019-11-13 06:30:42', 1),
(198, 5, 'State Wise Teaching', '', '2019-11-13 06:30:42', 1),
(199, 5, 'Universities', '', '2019-11-13 06:30:42', 1),
(200, 6, 'BPCL', '', '2019-11-13 06:30:42', 1),
(201, 6, 'Chennai Petrolium', '', '2019-11-13 06:30:42', 1),
(202, 6, 'Coal mines', '', '2019-11-13 06:30:42', 1),
(203, 6, 'GAIL', '', '2019-11-13 06:30:42', 1),
(204, 6, 'HPCL', '', '2019-11-13 06:30:42', 1),
(205, 6, 'Indian oil Corporation Limited', '', '2019-11-13 06:30:42', 1),
(206, 6, 'Moil', '', '2019-11-13 06:30:42', 1),
(207, 6, 'NHPC', '', '2019-11-13 06:30:42', 1),
(208, 6, 'NTPC', '', '2019-11-13 06:30:42', 1),
(209, 6, 'Oil India Limited', '', '2019-11-13 06:30:42', 1),
(210, 6, 'Oil Plam India', '', '2019-11-13 06:30:42', 1),
(211, 6, 'ONGC', '', '2019-11-13 06:30:42', 1),
(212, 6, 'SAIL Recruitment', '', '2019-11-13 06:30:42', 1),
(213, 7, 'APDCL', '', '2019-11-13 06:30:42', 1),
(214, 7, 'APGCL', '', '2019-11-13 06:30:42', 1),
(215, 7, 'APGENCO', '', '2019-11-13 06:30:42', 1),
(216, 7, 'Arunachal Pradesh Electricity Department', '', '2019-11-13 06:30:42', 1),
(217, 7, 'BSPGC', '', '2019-11-13 06:30:42', 1),
(218, 7, 'CSPGCL', '', '2019-11-13 06:30:42', 1),
(219, 7, 'Goa Electricity Department', '', '2019-11-13 06:30:42', 1),
(220, 7, 'GSECL', '', '2019-11-13 06:30:42', 1),
(221, 7, 'Himachal Pradesh State Electricity Board', '', '2019-11-13 06:30:42', 1),
(222, 7, 'HPGCL', '', '2019-11-13 06:30:42', 1),
(223, 7, 'IPGCL', '', '2019-11-13 06:30:42', 1),
(224, 7, 'JKSPDC', '', '2019-11-13 06:30:42', 1),
(225, 7, 'JSEB', '', '2019-11-13 06:30:42', 1),
(226, 7, 'KPCL', '', '2019-11-13 06:30:42', 1),
(227, 7, 'KSEB', '', '2019-11-13 06:30:42', 1),
(228, 7, 'MAHADISCOM', '', '2019-11-13 06:30:42', 1),
(229, 7, 'MGVCL', '', '2019-11-13 06:30:42', 1),
(230, 7, 'MP Power', '', '2019-11-13 06:30:42', 1),
(231, 7, 'MSPDCL', '', '2019-11-13 06:30:42', 1),
(232, 7, 'MSPGCL', '', '2019-11-13 06:30:42', 1),
(233, 7, 'Nuclear Power Corporation of India', '', '2019-11-13 06:30:42', 1),
(234, 7, 'OPGC', '', '2019-11-13 06:30:42', 1),
(235, 7, 'PSPCL', '', '2019-11-13 06:30:42', 1),
(236, 7, 'RVUNL', '', '2019-11-13 06:30:42', 1),
(237, 7, 'TANGEDCO', '', '2019-11-13 06:30:42', 1),
(238, 7, 'TSGENCO', '', '2019-11-13 06:30:42', 1),
(239, 7, 'UJVNL', '', '2019-11-13 06:30:42', 1),
(240, 7, 'UPERC', '', '2019-11-13 06:30:42', 1),
(241, 7, 'UPRVUNL', '', '2019-11-13 06:30:42', 1),
(242, 7, 'WBPDCL', '', '2019-11-13 06:30:42', 1),
(243, 8, 'Andaman and Nicobar Islands', '', '2019-11-13 06:30:42', 1),
(244, 8, 'AP', '', '2019-11-13 06:30:42', 1),
(245, 8, 'Arunachal Pradesh', '', '2019-11-13 06:30:42', 1),
(246, 8, 'Assam', '', '2019-11-13 06:30:42', 1),
(247, 8, 'Bihar', '', '2019-11-13 06:30:42', 1),
(248, 8, 'Chandigarh', '', '2019-11-13 06:30:42', 1),
(249, 8, 'Chhattisgarh', '', '2019-11-13 06:30:42', 1),
(250, 8, 'Daman and Diu', '', '2019-11-13 06:30:42', 1),
(251, 8, 'Delhi', '', '2019-11-13 06:30:42', 1),
(252, 8, 'Goa', '', '2019-11-13 06:30:42', 1),
(253, 8, 'Gujarat', '', '2019-11-13 06:30:42', 1),
(254, 8, 'Haryana', '', '2019-11-13 06:30:42', 1),
(255, 8, 'Healthcare Previous Model Papers', '', '2019-11-13 06:30:42', 1),
(256, 8, 'Himachal Pradesh', '', '2019-11-13 06:30:42', 1),
(257, 8, 'Jammu and Kashmir', '', '2019-11-13 06:30:42', 1),
(258, 8, 'Jharkhand', '', '2019-11-13 06:30:42', 1),
(259, 8, 'Karnataka', '', '2019-11-13 06:30:42', 1),
(260, 8, 'Kerala', '', '2019-11-13 06:30:42', 1),
(261, 8, 'Lakshadweep', '', '2019-11-13 06:30:42', 1),
(262, 8, 'Madhya Pradesh', '', '2019-11-13 06:30:42', 1),
(263, 8, 'Maharashtra', '', '2019-11-13 06:30:42', 1),
(264, 8, 'Manipur', '', '2019-11-13 06:30:42', 1),
(265, 8, 'Meghalaya', '', '2019-11-13 06:30:42', 1),
(266, 8, 'Mizoram', '', '2019-11-13 06:30:42', 1),
(267, 8, 'Nagaland', '', '2019-11-13 06:30:42', 1),
(268, 8, 'Orissa', '', '2019-11-13 06:30:42', 1),
(269, 8, 'Pondicherry', '', '2019-11-13 06:30:42', 1),
(270, 8, 'Punjab', '', '2019-11-13 06:30:42', 1),
(271, 8, 'Rajasthan', '', '2019-11-13 06:30:42', 1),
(272, 8, 'Sikkim', '', '2019-11-13 06:30:42', 1),
(273, 8, 'Tamilnadu', '', '2019-11-13 06:30:42', 1),
(274, 8, 'Telangana', '', '2019-11-13 06:30:42', 1),
(275, 8, 'Tripura', '', '2019-11-13 06:30:42', 1),
(276, 8, 'UP', '', '2019-11-13 06:30:42', 1),
(277, 8, 'Uttaranchal', '', '2019-11-13 06:30:42', 1),
(278, 8, 'West Bengal', '', '2019-11-13 06:30:42', 1),
(279, 9, 'Central Railway (CR) Mumbai', '', '2019-11-13 06:30:42', 1),
(280, 9, 'CRWC', '', '2019-11-13 06:30:42', 1),
(281, 9, 'East Central Railway (ECR)', '', '2019-11-13 06:30:42', 1),
(282, 9, 'East Coast Railway (ECoR)', '', '2019-11-13 06:30:42', 1),
(283, 9, 'Eastern Railway (ER)', '', '2019-11-13 06:30:42', 1),
(284, 9, 'IRCON', '', '2019-11-13 06:30:42', 1),
(285, 9, 'Konkan Railway Recruitment', '', '2019-11-13 06:30:42', 1),
(286, 9, 'Metro Rail', '', '2019-11-13 06:30:42', 1),
(287, 9, 'North Central Railway (NCR)', '', '2019-11-13 06:30:42', 1),
(288, 9, 'North Eastern Railway (NER)', '', '2019-11-13 06:30:42', 1),
(289, 9, 'North Western Railway (NWR)', '', '2019-11-13 06:30:42', 1),
(290, 9, 'Northeast Frontier Railway (NFR)', '', '2019-11-13 06:30:42', 1),
(291, 9, 'Northern Railway (NR)', '', '2019-11-13 06:30:42', 1),
(292, 9, 'Railways Interview Questions', '', '2019-11-13 06:30:42', 1),
(293, 9, 'Railways Previous Model Papers', '', '2019-11-13 06:30:42', 1),
(294, 9, 'RPF', '', '2019-11-13 06:30:42', 1),
(295, 9, 'RRB', '', '2019-11-13 06:30:42', 1),
(296, 9, 'RRC', '', '2019-11-13 06:30:42', 1),
(297, 9, 'RRC Exam Pattern', '', '2019-11-13 06:30:42', 1),
(298, 9, 'RVNL', '', '2019-11-13 06:30:42', 1),
(299, 9, 'South Central Railway (SCR)', '', '2019-11-13 06:30:42', 1),
(300, 9, 'South East Central Railway (SECR)', '', '2019-11-13 06:30:42', 1),
(301, 9, 'South Eastern Railway (SER)', '', '2019-11-13 06:30:42', 1),
(302, 9, 'South Western Railway (SWR)', '', '2019-11-13 06:30:42', 1),
(303, 9, 'Southern Railway (SR)', '', '2019-11-13 06:30:42', 1),
(304, 9, 'West Central Railway (WCR)', '', '2019-11-13 06:30:42', 1),
(305, 9, 'Western Railway (WR)', '', '2019-11-13 06:30:42', 1),
(306, 10, 'BBNL', '', '2019-11-13 06:30:42', 1),
(307, 10, 'BSNL', '', '2019-11-13 06:30:42', 1),
(308, 10, 'MTNL', '', '2019-11-13 06:30:42', 1),
(309, 10, 'TCIL', '', '2019-11-13 06:30:42', 1),
(310, 11, 'Postaljobs', '', '2019-11-13 06:30:42', 1),
(311, 11, 'State Postal Jobs', '', '2019-11-13 06:30:42', 1),
(312, 12, 'Andaman and Nicobar Islands Government Jobs', '', '2019-11-13 06:30:42', 1),
(313, 12, 'AP Government Jobs', '', '2019-11-13 06:30:42', 1),
(314, 12, 'Arunachal Pradesh Government Jobs', '', '2019-11-13 06:30:42', 1),
(315, 12, 'Assam Government Jobs', '', '2019-11-13 06:30:42', 1),
(316, 12, 'Bihar Government Jobs', '', '2019-11-13 06:30:42', 1),
(317, 12, 'Chandigarh Government Jobs', '', '2019-11-13 06:30:42', 1),
(318, 12, 'Chhattisgarh Government Jobs', '', '2019-11-13 06:30:42', 1),
(319, 12, 'Daman and Diu Government Jobs', '', '2019-11-13 06:30:42', 1),
(320, 12, 'Delhi Government jobs', '', '2019-11-13 06:30:42', 1),
(321, 12, 'Goa Government Jobs', '', '2019-11-13 06:30:42', 1),
(322, 12, 'Gujarat Government Jobs', '', '2019-11-13 06:30:42', 1),
(323, 12, 'Haryana Government Jobs', '', '2019-11-13 06:30:42', 1),
(324, 12, 'Himachal Pradesh Government Jobs', '', '2019-11-13 06:30:42', 1),
(325, 12, 'Jammu and Kashmir Government Jobs', '', '2019-11-13 06:30:42', 1),
(326, 12, 'Jharkhand Government Jobs', '', '2019-11-13 06:30:42', 1),
(327, 12, 'Karnataka Government Jobs', '', '2019-11-13 06:30:42', 1),
(328, 12, 'Kerala Government Jobs', '', '2019-11-13 06:30:42', 1),
(329, 12, 'Lakshadweep Government Jobs', '', '2019-11-13 06:30:42', 1),
(330, 12, 'Madhya Pradesh Government Jobs', '', '2019-11-13 06:30:42', 1),
(331, 12, 'Maharashtra Government Jobs', '', '2019-11-13 06:30:42', 1),
(332, 12, 'Manipur Government Jobs', '', '2019-11-13 06:30:42', 1),
(333, 12, 'Meghalaya Government Jobs', '', '2019-11-13 06:30:42', 1),
(334, 12, 'Mizoram Government Jobs', '', '2019-11-13 06:30:42', 1),
(335, 12, 'Nagaland Government Jobs', '', '2019-11-13 06:30:42', 1),
(336, 12, 'Orissa Government Jobs', '', '2019-11-13 06:30:42', 1),
(337, 12, 'Pondicherry Government jobs', '', '2019-11-13 06:30:42', 1),
(338, 12, 'Punjab Government Jobs', '', '2019-11-13 06:30:42', 1),
(339, 12, 'Rajasthan Government Jobs', '', '2019-11-13 06:30:42', 1),
(340, 12, 'Sikkim Government Jobs', '', '2019-11-13 06:30:42', 1),
(341, 12, 'State Exam Pattern', '', '2019-11-13 06:30:42', 1),
(342, 12, 'State Interview Results', '', '2019-11-13 06:30:42', 1),
(343, 12, 'Tamilnadu Government Jobs', '', '2019-11-13 06:30:42', 1),
(344, 12, 'Telangana Government Jobs', '', '2019-11-13 06:30:42', 1),
(345, 12, 'Tripura Government Jobs', '', '2019-11-13 06:30:42', 1),
(346, 12, 'UP Government Jobs', '', '2019-11-13 06:30:42', 1),
(347, 12, 'Uttaranchal govt jobs', '', '2019-11-13 06:30:42', 1),
(348, 12, 'West Bengal Government Jobs', '', '2019-11-13 06:30:42', 1),
(349, 13, 'Central Government Jobs', '', '2019-11-13 06:30:42', 1),
(350, 14, 'other', '', '2019-12-15 10:15:46', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jobtypes`
--
ALTER TABLE `jobtypes`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `sarkari_info`
--
ALTER TABLE `sarkari_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_foreign` (`cid`),
  ADD KEY `jobtype_category` (`jt_id`),
  ADD KEY `subcategory_foreign` (`sc_id`),
  ADD KEY `state_foreign` (`st_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_cid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobtypes`
--
ALTER TABLE `jobtypes`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sarkari_info`
--
ALTER TABLE `sarkari_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sarkari_info`
--
ALTER TABLE `sarkari_info`
  ADD CONSTRAINT `category_foreign` FOREIGN KEY (`cid`) REFERENCES `categories` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobtype_category` FOREIGN KEY (`jt_id`) REFERENCES `jobtypes` (`jid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `state_foreign` FOREIGN KEY (`st_id`) REFERENCES `states` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subcategory_foreign` FOREIGN KEY (`sc_id`) REFERENCES `sub_categories` (`sub_cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `categories` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
