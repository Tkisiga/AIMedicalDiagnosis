-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 04:17 PM
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
  `LabResultsID` varchar(15) NOT NULL,
  `Sex` varchar(15) NOT NULL
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
-- Indexes for table `AgeGroupTrearment`
--
ALTER TABLE `AgeGroupTrearment`
  ADD KEY `TreatmentID` (`TreatmentID`),
  ADD KEY `AgeGroupID` (`AgeGroupID`);

--
-- Indexes for table `Diseases`
--
ALTER TABLE `Diseases`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `DiseasesManagement`
--
ALTER TABLE `DiseasesManagement`
  ADD KEY `ManagementID` (`ManagementID`),
  ADD KEY `DiseaseID` (`DiseaseID`);

--
-- Indexes for table `DiseasesSigns`
--
ALTER TABLE `DiseasesSigns`
  ADD KEY `SignID` (`SignID`),
  ADD KEY `DiseaseID` (`DiseaseID`);

--
-- Indexes for table `DiseasesSymptoms`
--
ALTER TABLE `DiseasesSymptoms`
  ADD KEY `SymptomID` (`SymptomID`),
  ADD KEY `DiseaseID` (`DiseaseID`);

--
-- Indexes for table `DiseasesTreatment`
--
ALTER TABLE `DiseasesTreatment`
  ADD KEY `TreatmentID` (`TreatmentID`),
  ADD KEY `DiseaseID` (`DiseaseID`);

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LabResultsID` (`LabResultsID`);

--
-- Indexes for table `PatientsDiseases`
--
ALTER TABLE `PatientsDiseases`
  ADD KEY `PatientID` (`PatientID`),
  ADD KEY `DiseaseID` (`DiseaseID`);

--
-- Indexes for table `PatientsSigns`
--
ALTER TABLE `PatientsSigns`
  ADD KEY `PatientID` (`PatientID`),
  ADD KEY `SignID` (`SignID`);

--
-- Indexes for table `PatientsSymptoms`
--
ALTER TABLE `PatientsSymptoms`
  ADD KEY `PatientID` (`PatientID`),
  ADD KEY `SymptomID` (`SymptomID`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `RolePermisions`
--
ALTER TABLE `RolePermisions`
  ADD KEY `RoleID` (`RoleID`);

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AgeGroupTrearment`
--
ALTER TABLE `AgeGroupTrearment`
  ADD CONSTRAINT `AgeGroupTrearment_ibfk_1` FOREIGN KEY (`TreatmentID`) REFERENCES `Treatment` (`ID`),
  ADD CONSTRAINT `AgeGroupTrearment_ibfk_2` FOREIGN KEY (`AgeGroupID`) REFERENCES `AgeGroup` (`ID`);

--
-- Constraints for table `DiseasesManagement`
--
ALTER TABLE `DiseasesManagement`
  ADD CONSTRAINT `DiseasesManagement_ibfk_1` FOREIGN KEY (`ManagementID`) REFERENCES `Management` (`ID`),
  ADD CONSTRAINT `DiseasesManagement_ibfk_2` FOREIGN KEY (`DiseaseID`) REFERENCES `Diseases` (`ID`);

--
-- Constraints for table `DiseasesSigns`
--
ALTER TABLE `DiseasesSigns`
  ADD CONSTRAINT `DiseasesSigns_ibfk_1` FOREIGN KEY (`SignID`) REFERENCES `Signs` (`ID`),
  ADD CONSTRAINT `DiseasesSigns_ibfk_2` FOREIGN KEY (`DiseaseID`) REFERENCES `Diseases` (`ID`);

--
-- Constraints for table `DiseasesSymptoms`
--
ALTER TABLE `DiseasesSymptoms`
  ADD CONSTRAINT `DiseasesSymptoms_ibfk_1` FOREIGN KEY (`DiseaseID`) REFERENCES `Diseases` (`ID`),
  ADD CONSTRAINT `DiseasesSymptoms_ibfk_2` FOREIGN KEY (`DiseaseID`) REFERENCES `Diseases` (`ID`),
  ADD CONSTRAINT `DiseasesSymptoms_ibfk_3` FOREIGN KEY (`SymptomID`) REFERENCES `Symptoms` (`ID`),
  ADD CONSTRAINT `DiseasesSymptoms_ibfk_4` FOREIGN KEY (`DiseaseID`) REFERENCES `Diseases` (`ID`);

--
-- Constraints for table `DiseasesTreatment`
--
ALTER TABLE `DiseasesTreatment`
  ADD CONSTRAINT `DiseasesTreatment_ibfk_1` FOREIGN KEY (`TreatmentID`) REFERENCES `Treatment` (`ID`),
  ADD CONSTRAINT `DiseasesTreatment_ibfk_2` FOREIGN KEY (`DiseaseID`) REFERENCES `Diseases` (`ID`);

--
-- Constraints for table `MedicalPractitioners`
--
ALTER TABLE `MedicalPractitioners`
  ADD CONSTRAINT `MedicalPractitioners_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `Role` (`ID`);

--
-- Constraints for table `Patients`
--
ALTER TABLE `Patients`
  ADD CONSTRAINT `Patients_ibfk_1` FOREIGN KEY (`LabResultsID`) REFERENCES `LabResults` (`ID`);

--
-- Constraints for table `PatientsDiseases`
--
ALTER TABLE `PatientsDiseases`
  ADD CONSTRAINT `PatientsDiseases_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `Patients` (`ID`),
  ADD CONSTRAINT `PatientsDiseases_ibfk_2` FOREIGN KEY (`DiseaseID`) REFERENCES `Diseases` (`ID`);

--
-- Constraints for table `PatientsSigns`
--
ALTER TABLE `PatientsSigns`
  ADD CONSTRAINT `PatientsSigns_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `Patients` (`ID`),
  ADD CONSTRAINT `PatientsSigns_ibfk_2` FOREIGN KEY (`SignID`) REFERENCES `Signs` (`ID`);

--
-- Constraints for table `PatientsSymptoms`
--
ALTER TABLE `PatientsSymptoms`
  ADD CONSTRAINT `PatientsSymptoms_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `Patients` (`ID`),
  ADD CONSTRAINT `PatientsSymptoms_ibfk_2` FOREIGN KEY (`SymptomID`) REFERENCES `Symptoms` (`ID`);

--
-- Constraints for table `RolePermisions`
--
ALTER TABLE `RolePermisions`
  ADD CONSTRAINT `RolePermisions_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `Role` (`ID`),
  ADD CONSTRAINT `RolePermisions_ibfk_2` FOREIGN KEY (`RoleID`) REFERENCES `Role` (`ID`),
  ADD CONSTRAINT `RolePermisions_ibfk_3` FOREIGN KEY (`RoleID`) REFERENCES `Role` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
