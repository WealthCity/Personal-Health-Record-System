-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2015 at 03:39 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a3094936_phr`
--

-- --------------------------------------------------------

--
-- Table structure for table `labtests`
--

CREATE TABLE `labtests` (
  `pid` int(11) NOT NULL,
  `testname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `reference_min` decimal(10,2) NOT NULL,
  `reference_max` decimal(10,2) NOT NULL,
  `unit` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `testdate` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `labtests`
--

INSERT INTO `labtests` VALUES(1001, 'K ', 4.00, 3.50, 5.30, 'meql', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'NA', 146.00, 135.00, 147.00, 'meql', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'CL', 104.00, 99.00, 111.00, 'meql', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'CO2', 31.00, 22.00, 32.00, 'meql', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'PT', 18.20, 10.30, 12.50, 'sec', '08/29/13 9:40');
INSERT INTO `labtests` VALUES(1001, 'INR', 2.10, 0.81, 1.14, ' ', '08/29/13 9:40');
INSERT INTO `labtests` VALUES(1001, 'PT', 18.20, 10.30, 12.50, 'sec', '01/15/13 14:45');
INSERT INTO `labtests` VALUES(1001, 'INR', 2.10, 0.81, 1.14, ' ', '01/15/13 14:45');
INSERT INTO `labtests` VALUES(1001, 'CA', 9.90, 8.40, 10.60, 'mgdl', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'ALB', 4.30, 3.50, 4.80, 'gmdL', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'ALT', 51.00, 8.00, 63.00, 'UL', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'AST', 29.00, 8.00, 42.00, 'UL', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'ALKP', 79.00, 38.00, 126.00, 'UL', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'TBIL', 0.80, 0.10, 2.00, 'mgdl', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'PT', 18.20, 10.30, 12.50, 'sec', '09/12/13 5:41');
INSERT INTO `labtests` VALUES(1001, 'INR', 2.10, 0.81, 1.14, ' ', '09/12/13 5:41');
INSERT INTO `labtests` VALUES(1001, 'CHOL', 151.00, 100.00, 199.00, 'mgdl', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'GLU', 106.00, 70.00, 110.00, 'mgdl', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'CREAT', 0.80, 0.50, 1.50, 'mgdl', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'BUN', 11.00, 6.00, 23.00, 'mgdl', '10/08/13 9:11');
INSERT INTO `labtests` VALUES(1001, 'GLU', 106.00, 70.00, 110.00, 'mgdl', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'K ', 4.00, 3.50, 5.30, 'meql', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'NA', 146.00, 135.00, 147.00, 'meql', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'CL', 104.00, 99.00, 111.00, 'meql', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'CO2', 31.00, 22.00, 32.00, 'meql', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'CA', 9.90, 8.40, 10.60, 'mgdl', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'ALB', 4.30, 3.50, 4.80, 'gmdL', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'ALT', 51.00, 8.00, 63.00, 'UL', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'TBIL', 0.80, 0.10, 2.00, 'mgdl', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'CHOL', 151.00, 100.00, 199.00, 'mgdl', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'CREAT', 0.80, 0.50, 1.50, 'mgdl', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'BUN', 11.00, 6.00, 23.00, 'mgdl', '01/02/13 17:25');
INSERT INTO `labtests` VALUES(1001, 'GLU', 106.00, 70.00, 110.00, 'mgdl', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'K ', 4.00, 3.50, 5.30, 'meql', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'NA', 146.00, 135.00, 147.00, 'meql', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'CL', 104.00, 99.00, 111.00, 'meql', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'CO2', 31.00, 22.00, 32.00, 'meql', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'CA', 9.90, 8.40, 10.60, 'mgdl', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'ALB', 4.30, 3.50, 4.80, 'gmdL', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'ALT', 51.00, 8.00, 63.00, 'UL', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'AST', 29.00, 8.00, 42.00, 'UL', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'ALKP', 79.00, 38.00, 126.00, 'UL', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'TBIL', 0.80, 0.10, 2.00, 'mgdl', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'CHOL', 151.00, 100.00, 199.00, 'mgdl', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'CREAT', 0.80, 0.50, 1.50, 'mgdl', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'BUN', 11.00, 6.00, 23.00, 'mgdl', '10/10/13 12:13');
INSERT INTO `labtests` VALUES(1001, 'GLU', 106.00, 70.00, 110.00, 'mgdl', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'K ', 4.00, 3.50, 5.30, 'meql', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'NA', 146.00, 135.00, 147.00, 'meql', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'CL', 104.00, 99.00, 111.00, 'meql', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'CO2', 31.00, 22.00, 32.00, 'meql', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'CA', 9.90, 8.40, 10.60, 'mgdl', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'TP', 7.30, 6.00, 8.50, 'gmdl', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'ALB', 4.30, 3.50, 4.80, 'gmdL', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'ALT', 51.00, 8.00, 63.00, 'UL', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'AST', 29.00, 8.00, 42.00, 'UL', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'ALKP', 79.00, 38.00, 126.00, 'UL', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'TBIL', 0.80, 0.10, 2.00, 'mgdl', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'CHOL', 151.00, 100.00, 199.00, 'mgdl', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'CREAT', 0.80, 0.50, 1.50, 'mgdl', '11/02/13 17:49');
INSERT INTO `labtests` VALUES(1001, 'BUN', 11.00, 6.00, 23.00, 'mgdl', '11/02/13 17:49');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `pid` int(11) NOT NULL,
  `medic` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `presc_date` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` VALUES(1001, 'Keflex 500 mg Cap', '07/01/11 10:51', 40);
INSERT INTO `medication` VALUES(1001, 'Bacitracin (Topical) 500 unit/g Ointment', '07/01/11 10:51', 1);
INSERT INTO `medication` VALUES(1001, 'Zantac 150 mg Cap', '08/03/11 10:55', 60);
INSERT INTO `medication` VALUES(1001, 'Omeprazole 20 mg Cap, Delayed Release', '08/03/11 10:55', 30);
INSERT INTO `medication` VALUES(1001, 'Levetiracetam 500 mg Tab', '08/08/11 11:59', 180);
INSERT INTO `medication` VALUES(1001, 'Verapamil SR 180 mg 24 hr Tab', '08/08/11 11:59', 180);
INSERT INTO `medication` VALUES(1001, 'Colace 100 mg Cap', '08/08/11 11:59', 180);
INSERT INTO `medication` VALUES(1001, 'Metoprolol Succinate SR 50 mg 24 hr Tab', '08/08/11 11:59', 180);
INSERT INTO `medication` VALUES(1001, 'Flovent HFA 110 mcg/Actuation Aerosol Inhaler', '08/08/11 11:59', 6);
INSERT INTO `medication` VALUES(1001, 'Ventolin 2.5 mg/3 mL (0.083 %) Neb Solution', '08/08/11 11:59', 6);
INSERT INTO `medication` VALUES(1001, 'Tylenol 8 Hour 650 mg Tab', '08/10/11 10:46', 30);
INSERT INTO `medication` VALUES(1001, 'Klonopin 1 mg Tab', '08/10/11 13:18', 360);
INSERT INTO `medication` VALUES(1001, 'Prozac 10 mg Tab', '08/10/11 13:18', 360);
INSERT INTO `medication` VALUES(1001, 'Diphenhydramine 25 mg Cap', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Clonazepam 1 mg Tab', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Risperidone 1 mg Tab', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Risperidone 2 mg Tab', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Diphenhydramine 50 mg Cap', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Bupropion HCl XL 150 mg 24 hr Tab', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Levetiracetam 500 mg Tab', '08/12/11 15:18', 60);
INSERT INTO `medication` VALUES(1001, 'Verapamil HCl CR 180 mg 24 hr Cap', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'DOK 100 mg Cap', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Metoprolol SR 50 mg Tab', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Flovent HFA 110 mcg/Actuation Aerosol Inhaler', '08/12/11 15:18', 1);
INSERT INTO `medication` VALUES(1001, 'Ventolin HFA 90 mcg/Actuation Aerosol Inhaler', '08/12/11 15:18', 1);
INSERT INTO `medication` VALUES(1001, 'Acetaminophen 325 mg Tab', '08/12/11 15:18', 30);
INSERT INTO `medication` VALUES(1001, 'Ultram 50 mg Tab', '08/15/11 12:29', 60);
INSERT INTO `medication` VALUES(1001, 'Celexa 20 mg Tab', '09/20/11 14:01', 180);
INSERT INTO `medication` VALUES(1001, 'Lopressor 50 mg Tab', '10/21/11 19:40', 60);
INSERT INTO `medication` VALUES(1001, 'Atenolol 50 mg Tab', '10/30/11 0:43', 1);
INSERT INTO `medication` VALUES(1001, 'Ultram 50 mg Tab', '11/02/11 16:08', 20);
INSERT INTO `medication` VALUES(1001, 'Cipro 500 mg Tab', '11/14/11 12:34', 10);
INSERT INTO `medication` VALUES(1001, 'Catapres 0.1 mg Tab', '11/23/11 16:36', 60);
INSERT INTO `medication` VALUES(1001, 'Norvasc 10 mg Tab', '11/23/11 19:48', 1);
INSERT INTO `medication` VALUES(1001, 'Benadryl 50 mg Cap', '11/23/11 19:48', 1);
INSERT INTO `medication` VALUES(1001, 'Ventolin 2.5 mg/3 mL (0.083 %) Neb Solution', '11/26/11 15:51', 6);
INSERT INTO `medication` VALUES(1001, 'Levetiracetam 500 mg Tab', '11/26/11 15:51', 180);
INSERT INTO `medication` VALUES(1001, 'Verapamil SR 180 mg 24 hr Tab', '11/26/11 15:51', 180);
INSERT INTO `medication` VALUES(1001, 'Colace 100 mg Cap', '11/26/11 15:51', 180);
INSERT INTO `medication` VALUES(1001, 'Metoprolol Succinate SR 50 mg 24 hr Tab', '11/26/11 15:51', 180);
INSERT INTO `medication` VALUES(1001, 'Flovent HFA 110 mcg/Actuation Aerosol Inhaler', '11/26/11 15:51', 6);
INSERT INTO `medication` VALUES(1001, 'Diphenhydramine 50 mg Cap', '11/26/11 16:08', 30);
INSERT INTO `medication` VALUES(1001, 'Diphenhydramine 25 mg Cap', '11/26/11 16:08', 30);
INSERT INTO `medication` VALUES(1001, 'Risperidone 2 mg Tab', '11/26/11 16:08', 30);
INSERT INTO `medication` VALUES(1001, 'Risperidone 1 mg Tab', '11/26/11 16:08', 30);
INSERT INTO `medication` VALUES(1001, 'Clonazepam 1 mg Tab', '11/26/11 16:08', 30);
INSERT INTO `medication` VALUES(1001, 'Celexa 20 mg Tab', '11/26/11 16:08', 180);
INSERT INTO `medication` VALUES(1001, 'Ultram 50 mg Tab', '12/05/11 11:48', 15);
INSERT INTO `medication` VALUES(1001, 'Zantac 150 mg Tab', '12/06/11 18:22', 60);
INSERT INTO `medication` VALUES(1001, 'Ultram 50 mg Tab', '12/14/11 16:50', 10);
INSERT INTO `medication` VALUES(1001, 'Keflex 500 mg Tab', '12/14/11 16:50', 20);
INSERT INTO `medication` VALUES(1001, 'Ciprofloxacin 500 mg TabCiprofloxacin 500 mg Tab', '12/25/11 7:32', 14);
INSERT INTO `medication` VALUES(1001, 'Citrate of Magnesia 1.745 g/30mL Oral', '01/05/12 10:24', 1);
INSERT INTO `medication` VALUES(1001, 'Klonopin 1 mg Tab', '02/16/12 10:57', 360);
INSERT INTO `medication` VALUES(1001, 'Plavix 75 mg Tab', '02/24/12 20:28', 30);
INSERT INTO `medication` VALUES(1001, 'Verapamil SR 180 mg Cap', '02/24/12 20:28', 30);
INSERT INTO `medication` VALUES(1001, 'Toprol XL 50 mg Tab', '02/24/12 20:28', 30);
INSERT INTO `medication` VALUES(1001, 'Albuterol 90 mcg/Actuation Aerosol Inhaler', '02/24/12 20:28', 1);
INSERT INTO `medication` VALUES(1001, 'Flovent 110 mcg/Actuation Aerosol Inhaler', '02/24/12 20:28', 1);
INSERT INTO `medication` VALUES(1001, 'Lisinopril 20 mg Tab', '02/24/12 20:28', 90);
INSERT INTO `medication` VALUES(1001, 'Keppra 500 mg Tab', '02/24/12 20:28', 60);
INSERT INTO `medication` VALUES(1001, 'Tylenol 325 mg Tab', '12/14/12 21:04', 2);
INSERT INTO `medication` VALUES(1001, 'Lisinopril 20 mg Tab', '12/29/12 15:05', 60);
INSERT INTO `medication` VALUES(1001, 'Lopressor 50 mg Tab', '01/13/13 14:35', 90);
INSERT INTO `medication` VALUES(1001, 'Keppra XR 750 mg 24 hr Tab', '01/24/13 13:28', 60);
INSERT INTO `medication` VALUES(1001, 'Lisinopril 20 mg Tab', '01/24/13 13:28', 30);
INSERT INTO `medication` VALUES(1001, 'Tylenol 325 mg Tab', '01/24/13 13:28', 60);
INSERT INTO `medication` VALUES(1001, 'Clonazepam 0.5 mg Tab', '01/24/13 15:43', 14);
INSERT INTO `medication` VALUES(1001, 'Seroquel 400 mg Tab', '01/24/13 15:43', 360);
INSERT INTO `medication` VALUES(1001, 'Albuterol Sulfate 2.5 mg/0.5 mL Neb Solution', '01/26/13 16:41', 1);
INSERT INTO `medication` VALUES(1001, 'Prednisone 20 mg Tab', '01/26/13 16:59', 9);
INSERT INTO `medication` VALUES(1001, 'Albuterol Sulfate 2.5 mg/0.5 mL Neb Solution', '01/26/13 17:09', 3);
INSERT INTO `medication` VALUES(1001, 'Metoprolol Tartrate 25 mg Tab', '01/26/13 17:09', 1);
INSERT INTO `medication` VALUES(1001, 'Gabapentin 600 mg Tab', '02/05/13 17:43', 357);
INSERT INTO `medication` VALUES(1001, 'Strattera 40 mg Cap', '02/05/13 17:43', 180);

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `pid` int(11) NOT NULL,
  `vitalsign` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `unit` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `measurement_time` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.60, 'F', '6/29/2011 12:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 150.00, 'mmHg', '6/29/2011 12:15');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 106.00, 'bpm', '6/29/2011 12:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '6/29/2011 12:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '9/13/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '9/13/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 243.00, 'lb', '9/13/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '9/13/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '9/13/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '9/13/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 97.60, 'F', '9/13/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 70.00, 'mmHg', '6/30/2011 16:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '6/30/2011 16:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.10, 'F', '6/30/2011 16:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 235.00, 'lb', '6/30/2011 16:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 120.00, 'mmHg', '6/30/2011 16:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 90.00, 'bpm', '6/30/2011 16:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '6/30/2011 16:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 234.00, 'lb', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 92.00, 'bpm', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.20, 'F', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Apical Heart Rate', 92.00, 'bpm', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 92.00, 'mmHg', '7/1/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '11/14/2011 9:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.20, 'F', '11/14/2011 9:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '11/14/2011 9:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 70.00, 'mmHg', '11/14/2011 9:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '11/14/2011 9:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 243.00, 'lb', '11/14/2011 9:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 65.00, 'in', '11/14/2011 9:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 76.00, 'bpm', '7/9/2011 1:15');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.10, 'F', '7/9/2011 1:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '7/9/2011 1:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 107.00, 'mmHg', '7/9/2011 1:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 86.00, 'mmHg', '7/9/2011 1:15');
INSERT INTO `vitals` VALUES(1001, 'Weight', 235.00, 'lb', '7/9/2011 1:15');
INSERT INTO `vitals` VALUES(1001, 'Height', 67.00, 'in', '7/9/2011 1:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '7/11/2011 7:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '7/11/2011 7:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 234.00, 'lb', '7/11/2011 7:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '7/11/2011 7:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 70.00, 'bpm', '7/11/2011 7:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '7/11/2011 7:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.70, 'F', '7/11/2011 7:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 100.00, 'bpm', '7/28/2011 21:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 84.00, 'mmHg', '7/28/2011 21:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.70, 'F', '7/28/2011 21:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 114.00, 'mmHg', '7/28/2011 21:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '7/28/2011 21:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '7/29/2011 17:15');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.30, 'F', '7/29/2011 17:15');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 78.00, 'bpm', '7/29/2011 17:15');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '7/29/2011 17:15');
INSERT INTO `vitals` VALUES(1001, 'Weight', 239.00, 'lb', '7/29/2011 17:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 142.00, 'mmHg', '7/29/2011 17:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 98.00, 'mmHg', '7/29/2011 17:15');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.70, 'F', '8/3/2011 12:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '8/3/2011 12:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 84.00, 'bpm', '8/3/2011 12:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 80.00, 'mmHg', '8/3/2011 12:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 62.00, 'in', '8/3/2011 12:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 235.00, 'lb', '8/3/2011 12:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 128.00, 'mmHg', '8/3/2011 12:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '8/2/2011 18:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '8/2/2011 18:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 80.00, 'mmHg', '8/2/2011 18:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 97.80, 'F', '8/2/2011 18:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 118.00, 'mmHg', '8/2/2011 18:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '8/2/2011 18:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 195.00, 'lb', '8/5/2011 14:15');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.60, 'F', '8/5/2011 14:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '8/5/2011 14:15');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 88.00, 'bpm', '8/5/2011 14:15');
INSERT INTO `vitals` VALUES(1001, 'Height', 62.00, 'in', '8/5/2011 14:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '8/5/2011 14:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 86.00, 'mmHg', '8/5/2011 14:15');
INSERT INTO `vitals` VALUES(1001, 'Weight', 233.00, 'lb', '8/13/2011 13:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 62.00, 'in', '8/13/2011 13:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.80, 'F', '8/13/2011 13:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '8/13/2011 13:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 80.00, 'mmHg', '8/13/2011 13:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 78.00, 'bpm', '8/13/2011 13:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '8/13/2011 13:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 134.00, 'mmHg', '8/14/2011 22:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 103.00, 'mmHg', '8/14/2011 22:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 85.00, 'bpm', '8/14/2011 22:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '8/14/2011 22:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.30, 'F', '8/14/2011 22:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 115.00, 'mmHg', '8/15/2011 5:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.30, 'F', '8/15/2011 5:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 92.00, 'mmHg', '8/15/2011 5:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '8/15/2011 5:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 230.00, 'lb', '8/15/2011 5:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '8/15/2011 5:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '8/15/2011 5:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 98.00, 'mmHg', '11/24/2011 16:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '11/24/2011 16:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 246.00, 'lb', '11/24/2011 16:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 146.00, 'mmHg', '11/24/2011 16:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 90.00, 'bpm', '11/24/2011 16:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.90, 'F', '11/24/2011 16:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '10/21/2011 15:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 242.00, 'lb', '10/21/2011 15:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.40, 'F', '10/21/2011 15:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 100.00, 'mmHg', '10/21/2011 15:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '10/21/2011 15:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '10/21/2011 15:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 150.00, 'mmHg', '10/21/2011 15:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 254.00, 'lb', '10/24/2011 18:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '10/24/2011 18:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '10/24/2011 18:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 72.00, 'mmHg', '10/24/2011 18:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.40, 'F', '10/24/2011 18:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 124.00, 'mmHg', '10/24/2011 18:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 88.00, 'bpm', '10/24/2011 18:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 118.00, 'mmHg', '10/29/2011 23:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.30, 'F', '10/29/2011 23:00');
INSERT INTO `vitals` VALUES(1001, 'Apical Heart Rate', 93.00, 'bpm', '10/29/2011 23:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 158.00, 'mmHg', '10/29/2011 23:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '10/29/2011 23:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.10, 'F', '11/26/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 136.00, 'mmHg', '11/26/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '11/26/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 75.00, 'mmHg', '11/26/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '11/26/2011 14:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 97.20, 'F', '11/29/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 292.00, 'lb', '11/29/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 112.00, 'mmHg', '11/29/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 60.00, 'bpm', '11/29/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '11/29/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '11/29/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 78.00, 'mmHg', '11/29/2011 7:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 120.00, 'mmHg', '11/28/2011 8:15');
INSERT INTO `vitals` VALUES(1001, 'Weight', 245.00, 'lb', '11/28/2011 8:15');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 78.00, 'bpm', '11/28/2011 8:15');
INSERT INTO `vitals` VALUES(1001, 'Height', 65.00, 'in', '11/28/2011 8:15');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.60, 'F', '11/28/2011 8:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '11/28/2011 8:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 76.00, 'mmHg', '11/28/2011 8:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 84.00, 'mmHg', '2/1/2012 8:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '2/1/2012 8:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '2/1/2012 8:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 237.00, 'lb', '2/1/2012 8:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 86.00, 'bpm', '2/1/2012 8:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 97.90, 'F', '2/1/2012 8:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 92.00, 'mmHg', '12/6/2011 13:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 240.00, 'lb', '12/6/2011 13:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '12/6/2011 13:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 55.00, 'bpm', '12/6/2011 13:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 126.00, 'mmHg', '12/6/2011 13:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 97.40, 'F', '12/6/2011 13:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '12/6/2011 13:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 100.00, 'bpm', '2/13/2012 16:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 136.00, 'mmHg', '2/13/2012 16:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '2/13/2012 16:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '2/13/2012 16:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '2/13/2012 16:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.10, 'F', '2/13/2012 16:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '2/5/2012 16:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 80.00, 'mmHg', '2/5/2012 16:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 233.00, 'lb', '2/5/2012 16:30');
INSERT INTO `vitals` VALUES(1001, 'Apical Heart Rate', 76.00, 'bpm', '2/5/2012 16:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 130.00, 'mmHg', '2/5/2012 16:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.00, 'F', '2/5/2012 16:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 70.00, 'bpm', '2/7/2012 9:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 84.00, 'mmHg', '2/7/2012 9:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '2/7/2012 9:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 240.00, 'lb', '12/16/2011 12:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 78.00, 'bpm', '12/16/2011 12:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '12/16/2011 12:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '12/16/2011 12:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 70.00, 'mmHg', '12/16/2011 12:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.10, 'F', '12/16/2011 12:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 126.00, 'mmHg', '12/16/2011 12:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 138.00, 'mmHg', '2/7/2012 9:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 235.00, 'lb', '2/7/2012 9:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '2/7/2012 9:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '12/26/2011 9:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 110.00, 'mmHg', '12/26/2011 9:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 160.00, 'mmHg', '12/26/2011 9:15');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 100.00, 'bpm', '12/26/2011 9:15');
INSERT INTO `vitals` VALUES(1001, 'Height', 68.00, 'in', '12/25/2011 1:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 180.00, 'lb', '12/25/2011 1:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 68.00, 'bpm', '12/25/2011 1:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '12/25/2011 1:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 160.00, 'mmHg', '12/25/2011 1:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 97.30, 'F', '12/25/2011 1:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 128.00, 'mmHg', '12/25/2011 1:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '12/26/2011 10:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 110.00, 'mmHg', '12/26/2011 10:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 160.00, 'mmHg', '12/26/2011 10:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 100.00, 'bpm', '12/26/2011 10:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '1/4/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '1/4/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.70, 'F', '1/4/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 82.00, 'bpm', '1/4/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 234.00, 'lb', '1/4/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '1/4/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.20, 'F', '1/24/2012 20:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '1/24/2012 20:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 87.00, 'mmHg', '1/24/2012 20:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 135.00, 'mmHg', '1/24/2012 20:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 84.00, 'bpm', '1/24/2012 20:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 78.00, 'mmHg', '1/25/2012 12:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 236.00, 'lb', '1/25/2012 12:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 97.70, 'F', '1/25/2012 12:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 130.00, 'mmHg', '1/25/2012 12:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 16.00, 'br/min', '1/25/2012 12:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 78.00, 'bpm', '1/25/2012 12:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 80.00, 'mmHg', '2/16/2012 9:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '2/16/2012 9:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 99.10, 'F', '2/16/2012 9:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 64.00, 'in', '2/16/2012 9:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 84.00, 'bpm', '2/16/2012 9:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '2/16/2012 9:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.00, 'F', '2/19/2012 5:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 138.00, 'mmHg', '2/19/2012 5:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 60.00, 'bpm', '2/19/2012 5:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 84.00, 'mmHg', '2/19/2012 5:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 97.00, 'bpm', '2/23/2012 10:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 138.00, 'mmHg', '2/23/2012 10:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '2/23/2012 10:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 92.00, 'mmHg', '2/23/2012 10:15');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '2/23/2012 10:15');
INSERT INTO `vitals` VALUES(1001, 'Weight', 227.00, 'lb', '2/23/2012 10:15');
INSERT INTO `vitals` VALUES(1001, 'Weight', 236.00, 'lb', '12/3/2012 14:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 68.00, 'in', '12/3/2012 14:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 68.00, 'bpm', '12/3/2012 14:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '12/3/2012 14:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '12/3/2012 14:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 100.00, 'mmHg', '12/3/2012 14:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 84.00, 'bpm', '12/9/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '12/9/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 120.00, 'mmHg', '12/9/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 96.00, 'mmHg', '12/9/2012 8:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '12/10/2012 14:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 74.00, 'bpm', '12/10/2012 14:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 236.00, 'lb', '12/10/2012 14:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 68.00, 'in', '12/10/2012 14:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 108.00, 'mmHg', '12/10/2012 14:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 138.00, 'mmHg', '12/10/2012 14:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 98.00, 'bpm', '1/19/2013 11:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 160.00, 'mmHg', '1/19/2013 11:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '1/19/2013 11:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '1/19/2013 11:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 70.00, 'mmHg', '1/21/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '1/21/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.60, 'F', '1/21/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 233.00, 'lb', '1/21/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 112.00, 'mmHg', '1/21/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 70.00, 'bpm', '1/21/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 68.00, 'in', '1/21/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 68.00, 'in', '2/12/2013 9:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 234.00, 'lb', '2/12/2013 9:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 70.00, 'bpm', '2/12/2013 9:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '2/12/2013 9:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 94.00, 'mmHg', '2/12/2013 9:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.00, 'F', '2/12/2013 9:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '2/12/2013 9:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 150.00, 'mmHg', '1/24/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 99.00, 'F', '1/24/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '1/24/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '1/24/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 230.00, 'lb', '1/24/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '1/24/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 90.00, 'bpm', '1/24/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '12/18/2012 11:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 110.00, 'mmHg', '12/18/2012 11:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '12/18/2012 11:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.10, 'F', '12/18/2012 11:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 240.00, 'lb', '12/18/2012 11:30');
INSERT INTO `vitals` VALUES(1001, 'Height', 68.00, 'in', '12/18/2012 11:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 162.00, 'mmHg', '12/18/2012 11:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 92.00, 'bpm', '1/26/2013 16:15');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.30, 'F', '1/26/2013 16:15');
INSERT INTO `vitals` VALUES(1001, 'Weight', 230.00, 'lb', '1/26/2013 16:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 138.00, 'mmHg', '1/26/2013 16:15');
INSERT INTO `vitals` VALUES(1001, 'Height', 67.00, 'in', '1/26/2013 16:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 100.00, 'mmHg', '1/26/2013 16:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '1/26/2013 16:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 144.00, 'mmHg', '1/27/2013 1:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 100.00, 'mmHg', '1/27/2013 1:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '1/27/2013 1:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 148.00, 'mmHg', '1/27/2013 8:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 100.00, 'mmHg', '1/27/2013 8:00');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 90.00, 'bpm', '1/27/2013 8:00');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.20, 'F', '1/27/2013 8:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 14.00, 'br/min', '1/27/2013 8:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 98.00, 'mmHg', '1/27/2013 8:15');
INSERT INTO `vitals` VALUES(1001, 'Apical Heart Rate', 102.00, 'bpm', '1/27/2013 8:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 170.00, 'mmHg', '1/27/2013 8:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '1/27/2013 8:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '1/29/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '1/29/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Weight', 236.00, 'lb', '1/29/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '1/29/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 74.00, 'bpm', '1/29/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 136.00, 'mmHg', '1/29/2013 10:45');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.70, 'F', '1/31/2013 2:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '1/31/2013 2:15');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 148.00, 'mmHg', '1/31/2013 2:15');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 84.00, 'bpm', '1/31/2013 2:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '1/31/2013 2:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 94.00, 'mmHg', '12/29/2012 15:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '12/29/2012 15:30');
INSERT INTO `vitals` VALUES(1001, 'Weight', 235.00, 'lb', '12/29/2012 15:30');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '12/29/2012 15:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.40, 'F', '12/29/2012 15:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 80.00, 'bpm', '12/29/2012 15:30');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 102.00, 'bpm', '2/15/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Oxygen Saturation', 98.00, '%', '2/15/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 22.00, 'br/min', '2/15/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 98.00, 'mmHg', '2/15/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 136.00, 'mmHg', '2/15/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 96.00, 'mmHg', '2/2/2013 9:45');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '2/2/2013 9:45');
INSERT INTO `vitals` VALUES(1001, 'Peripheral Pulse Rate', 88.00, 'bpm', '2/2/2013 9:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 150.00, 'mmHg', '2/2/2013 9:45');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 170.00, 'mmHg', '1/9/2013 4:15');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 115.00, 'mmHg', '1/9/2013 4:15');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.20, 'F', '1/9/2013 4:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 22.00, 'br/min', '1/9/2013 4:15');
INSERT INTO `vitals` VALUES(1001, 'Apical Heart Rate', 150.00, 'bpm', '1/9/2013 4:15');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 18.00, 'br/min', '1/13/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '1/13/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Apical Heart Rate', 150.00, 'bpm', '1/13/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 80.00, 'mmHg', '1/13/2013 13:30');
INSERT INTO `vitals` VALUES(1001, 'Oral Temperature', 98.70, 'F', '3/1/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Diastolic Blood Pressure', 90.00, 'mmHg', '3/1/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Respiratory Rate', 20.00, 'br/min', '3/1/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Apical Heart Rate', 100.00, 'bpm', '3/1/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Systolic Blood Pressure', 140.00, 'mmHg', '3/1/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Weight', 242.50, 'lb', '3/1/2013 14:00');
INSERT INTO `vitals` VALUES(1001, 'Height', 66.00, 'in', '3/1/2013 14:00');
