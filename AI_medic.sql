-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AI_medic`
--

-- --------------------------------------------------------

--
-- Table structure for table `AgeGroup`
--

CREATE TABLE `AgeGroup` (
  `ID` varchar(15) NOT NULL,
  `Age` int(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `AgeGroupTrearment`
--

CREATE TABLE `AgeGroupTrearment` (
  `AgeGroupID` varchar(15) NOT NULL,
  `TreatmentID` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Diseases`
--

CREATE TABLE `Diseases` (
  `ID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `DiseasesManagement`
--

CREATE TABLE `DiseasesManagement` (
  `DiseaseID` varchar(15) NOT NULL,
  `ManagementID` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `DiseasesSigns`
--

CREATE TABLE `DiseasesSigns` (
  `DiseaseID` varchar(15) NOT NULL,
  `SignID` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `DiseasesSymptoms`
--

CREATE TABLE `DiseasesSymptoms` (
  `DiseaseID` varchar(15) NOT NULL,
  `SymptomID` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `DiseasesTreatment`
--

CREATE TABLE `DiseasesTreatment` (
  `DiseaseID` varchar(15) NOT NULL,
  `TreatmentID` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `LabResults`
--

CREATE TABLE `LabResults` (
  `ID` varchar(15) NOT NULL,
  `Description` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Management`
--

CREATE TABLE `Management` (
  `ID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `MedicalPractitioners`
--

CREATE TABLE `MedicalPractitioners` (
  `ID` varchar(15) NOT NULL,
  `RoleID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Patients`
--

CREATE TABLE `Patients` (
  `ID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Age` int(15) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Address` varchar(15) NOT NULL,
  `MedicalHistory` varchar(500) NOT NULL,
  `UpdatedBy` date NOT NULL,
  `UpdatedOn` date NOT NULL,
  `LabResultsID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PatientsDiseases`
--

CREATE TABLE `PatientsDiseases` (
  `PatientID` varchar(15) NOT NULL,
  `DiseaseID` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PatientsSigns`
--

CREATE TABLE `PatientsSigns` (
  `PatientID` varchar(15) NOT NULL,
  `SignID` varchar(15) NOT NULL,
  `UpdateBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PatientsSymptoms`
--

CREATE TABLE `PatientsSymptoms` (
  `PatientID` varchar(15) NOT NULL,
  `SymptomID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Permissions`
--

CREATE TABLE `Permissions` (
  `ID` varchar(15) NOT NULL,
  `Permission` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `ID` varchar(15) NOT NULL,
  `Title` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `RolePermisions`
--

CREATE TABLE `RolePermisions` (
  `RoleID` varchar(15) NOT NULL,
  `PermissionID` varchar(15) NOT NULL,
  `UpdatedBy` date NOT NULL,
  `UpdatedOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Signs`
--

CREATE TABLE `Signs` (
  `ID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Symptoms`
--

CREATE TABLE `Symptoms` (
  `ID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Treatment`
--

CREATE TABLE `Treatment` (
  `ID` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL,
  `UpdatedAt` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` varchar(15) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `UpdatedBy` varchar(15) NOT NULL,
  `UpdatedOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AgeGroup`
--
ALTER TABLE `AgeGroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Diseases`
--
ALTER TABLE `Diseases`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `LabResults`
--
ALTER TABLE `LabResults`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Management`
--
ALTER TABLE `Management`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `MedicalPractitioners`
--
ALTER TABLE `MedicalPractitioners`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Signs`
--
ALTER TABLE `Signs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Symptoms`
--
ALTER TABLE `Symptoms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Treatment`
--
ALTER TABLE `Treatment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
