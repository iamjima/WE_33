-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 02:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbphpsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `pid` int(11) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `pbarand` varchar(250) NOT NULL,
  `pdes` varchar(1000) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `inside_des` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`pid`, `pname`, `pbarand`, `pdes`, `pic`, `inside_des`) VALUES
(1, 'custom printed cd media and packaging', 'cd media', 'Custom printed CD Media for your radiology and medical facility. Available in three levels of quality and all types of custom printing.', 'cd.jpg', 'DICOM compliant, HIPPA and PACS compatible 80 minute, 52x recording speed, 700 mb. Each disc is coated with a protective layer of UV white ink that guards against scratches. Custom silk-screen printed with your logo/graphics and design.'),
(2, 'custom printed cd media and packaging\r\n', 'custom print cd dvd packaging', 'Professional looking, custom printed, CD/DVD media packaging with your facility\'s name, logo and artwork.', 'dvdPackaging.jpg', '5\" x 5\", printed on 15 point board with 4 color ink (cmyk). This package holds one C-DR. The opening is either at the top or on the side depending on your graphics. A cute package that has up to 50 square inches to display your company information.'),
(3, 'processing chemistry', 'hand sanitizer', 'A sanitizer product with a alcohol based made to the formula recommended by both the World Health Organization (WHO) and the FDA.', 'sanitizer.jpg', 'It contains no gels or scenting agents to inhibit its effectiveness. The sanitizer has a distinct alcohol odor which disappears in 10 - 15 seconds as the product evaporates, leaving behind no lingering smell.'),
(4, 'Jacket Labels and Dispensers', 'Color Coded Envelope Labels', 'Features permanent adhesive and release coated paper backing.', 'ColorCodedEnvelopeLabels.jpg', 'Large Digit Reverse Block (Stock Numbers JLL-___): 1 7/8\" x 1 7/8\"\r\nLarge Year Labels (Stock Numbers JLL-Y__): 1 7/8\" x 1 7/8\"\r\nSolid Color Bar Label (Stock Numbers JLS-___): 1 3/4\" x 1/2\"\r\nSmall Year Labels (Stock Numbers JLS-Y__): 1 3/4\" x 1/2\"'),
(5, 'Jacket Labels and Dispensers', 'Label Dispenser', 'Dispenses and you peel off.\r\nHolds 1/2\" and 1-7/8\" wide rolls on 1\" core.\r\nMounts on wall or sits on tabletop.\r\nLight weight steel with rubber tip feet.\r\nShips @ 4 lbs.\r\n', 'LabelDispenser.jpg', 'Dispenses and you peel off.\r\nHolds 1/2\" and 1-7/8\" wide rolls on 1\" core.\r\nMounts on wall or sits on tabletop.\r\nLight weight steel with rubber tip feet.\r\nShips @ 4 lbs.'),
(6, 'X-Ray Screen  Cleaner', 'ProteX™ Spray', 'Protex disinfectant Spray cleans and disinfects Ultrasound equipment. Safe for transducers, probes, compression plates, and other surfaces. Alcohol Free. Effective bactericide, fungicide, and virucide. Kills MRSA, H1N1, HIV, and many others.', 'ProteXSpray.jpg', 'Clean & Disinfect Ultrasound and All Other equipment.\r\nContains NO alcohol, phenol or glutaraldehyde.\r\nSafe for transducers, probes, etc.\r\nEffective bactericide, fungicide, & virucide.\r\nPreMixed, no need to add H20 to the bottle.\r\nUse after each patient.\r'),
(7, 'Darkroom Equipment & Film Processors', 'Automatik Film Processor', 'A table top automatic film processor that is still available!', 'AutomatikFilmProcessor.jpg', 'The OPTIMAX is manufactured by Protec Medical in Germany in compliance with DIN ISO 9001:2000, IEC, TUV, CE, CSA, and UL quality standards. The OPTIMAX sets the standard of excellence for 90 second automatic x-ray film processors.'),
(8, 'Darkroom Equipment & Film Processors', 'Film Case(Light Tight)', 'The Light tight film case (shown mid-page) allows exposed films to be transfered from a location without processing to the darkroom without the worry of exposing the films!', 'FilmCase.jpg', 'he X-Port X-Ray Portfolio is designed exclusively for transporting radiology films and patient files. The zipperless portfolio allows films to be handled easily and efficiently while protecting them from the rain and snow.'),
(9, 'Digital/DICOM/PACS Products', 'Portable X-Ray System', 'A direct capture, digital portable x-ray system with onboard computer workstation/image enhancement system.', 'PortableXRaySystem.jpg', 'The new Source-Ray DR Packages combine one of the great Source-Ray portable x-ray generator systems along with your choice of various flat-panel DR systems from top manufactures creating a one-of-a-kind complete portable digital x-ray imaging system!'),
(10, 'Silver Recovery System', 'Rotex(6)', 'Rotex Silver Recovery, a well known brand of quality desilvering systems for medical and photo arts industries.', 'Rotex.jpg', 'As used fixing solution or wash water passes through the steel wool fibers, the silver ions in solution exchanges with the iron ions in the steel wool.'),
(11, 'Film View boxes', 'Portable/Mobile Uses', 'Viewboxes that can be easily adapted for portable usage and offer optional Handles and/or feet or other mounting systems.', 'PortableMobileUses.jpg', 'Viewboxes that can be easily adapted for portable usage and offer optional Handles and/or feet or other mounting systems.'),
(12, 'Film View boxes', 'Bright Spot Illuminator', 'For intense illumination of excessively dark areas on any type of film.', 'BrightSpotIlluminator.jpg', 'Designed to provide a concentrated light source. The Intensi-Spot utilizes a 75-watt lamp, shielded by an octagon mask for light concentration.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
